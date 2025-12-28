<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\PortfolioItem;
use App\Models\CollabItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    /**
     * Display the login form.
     *
     * @return \Illuminate\View\View
     */
    public function showLogin()
    {
        // If already authenticated, redirect to dashboard
        if (session()->has('admin_authenticated')) {
            return redirect()->route('admin.dashboard');
        }

        return view('admin.login');
    }

    /**
     * Handle login request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        $request->validate([
            'code' => 'required|string|size:6',
        ]);

        // Check if the code matches (421077)
        if ($request->input('code') === '421077') {
            session(['admin_authenticated' => true]);
            return redirect()->route('admin.dashboard')
                ->with('success', 'Welcome! You have successfully logged in.');
        }

        return back()->withErrors(['code' => 'Invalid access code.'])->withInput();
    }

    /**
     * Handle logout request.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        session()->forget('admin_authenticated');
        return redirect()->route('admin.login')
            ->with('success', 'You have been logged out successfully.');
    }

    /**
     * Display the admin dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $mediaCount = Media::count();
        $activeMediaCount = Media::where('is_active', true)->count();
        $recentMedia = Media::latest()->take(5)->get();

        return view('admin.dashboard', [
            'mediaCount' => $mediaCount,
            'activeMediaCount' => $activeMediaCount,
            'recentMedia' => $recentMedia,
        ]);
    }

    /**
     * Display the media upload form.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // Get media for each section (1-6)
        $sectionMedia = [];
        for ($i = 1; $i <= 6; $i++) {
            $sectionMedia[$i] = Media::where('section', $i)
                ->where('is_active', true)
                ->latest()
                ->first();
        }

        // Get all portfolio items ordered by display_order
        $portfolioItems = PortfolioItem::orderBy('display_order')->get();

        // Get all collab items ordered by display_order
        $collabItems = CollabItem::orderBy('display_order')->get();

        return view('admin.media.upload', [
            'sectionMedia' => $sectionMedia,
            'portfolioItems' => $portfolioItems,
            'collabItems' => $collabItems,
        ]);
    }

    /**
     * Store uploaded media for a specific section.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:10240', // 10MB max
            'section' => 'required|integer|between:1,6',
            'alt_text' => 'nullable|string|max:255',
        ]);

        $file = $request->file('file');
        $originalFilename = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $filename = Str::random(40) . '.' . $extension;
        $section = $request->input('section');

        // Store in public/storage/media directory
        $path = $file->storeAs('media', $filename, 'public');

        // Deactivate any existing media for this section
        Media::where('section', $section)
            ->where('is_active', true)
            ->update(['is_active' => false]);

        // Create new media record for this section
        $media = Media::create([
            'filename' => $filename,
            'original_filename' => $originalFilename,
            'path' => $path,
            'mime_type' => $file->getMimeType(),
            'size' => $file->getSize(),
            'alt_text' => $request->input('alt_text', $originalFilename),
            'is_active' => true,
            'display_order' => $section,
            'section' => $section,
        ]);

        return redirect()->route('admin.media.create')
            ->with('success', "Image uploaded successfully for Section {$section}!");
    }

    /**
     * Delete media for a specific section (restores default).
     *
     * @param int $section
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($section)
    {
        $media = Media::where('section', $section)
            ->where('is_active', true)
            ->first();

        if ($media) {
            // Delete file from storage
            if (Storage::disk('public')->exists($media->path)) {
                Storage::disk('public')->delete($media->path);
            }

            // Delete record
            $media->delete();
        }

        return redirect()->route('admin.media.create')
            ->with('success', "Section {$section} restored to default image!");
    }

    /**
     * Store a new portfolio item.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storePortfolioItem(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:10240', // 10MB max
        ]);

        $file = $request->file('file');
        $originalFilename = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $filename = Str::random(40) . '.' . $extension;

        // Store in public/storage/media directory
        $path = $file->storeAs('media', $filename, 'public');

        // Get the highest display_order and increment by 1
        $maxOrder = PortfolioItem::max('display_order') ?? 0;

        // Create new portfolio item
        PortfolioItem::create([
            'title' => $request->input('title'),
            'filename' => $filename,
            'original_filename' => $originalFilename,
            'path' => $path,
            'mime_type' => $file->getMimeType(),
            'size' => $file->getSize(),
            'display_order' => $maxOrder + 1,
        ]);

        return redirect()->route('admin.media.create')
            ->with('success', 'Portfolio item added successfully!');
    }

    /**
     * Delete a portfolio item.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroyPortfolioItem($id)
    {
        $portfolioItem = PortfolioItem::findOrFail($id);

        // Delete file from storage
        if (Storage::disk('public')->exists($portfolioItem->path)) {
            Storage::disk('public')->delete($portfolioItem->path);
        }

        // Delete record
        $portfolioItem->delete();

        return redirect()->route('admin.media.create')
            ->with('success', 'Portfolio item deleted successfully!');
    }

    /**
     * Store a new collab item.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeCollabItem(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:10240', // 10MB max
        ]);

        $file = $request->file('file');
        $originalFilename = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $filename = Str::random(40) . '.' . $extension;

        // Store in public/storage/media directory
        $path = $file->storeAs('media', $filename, 'public');

        // Get the highest display_order and increment by 1
        $maxOrder = CollabItem::max('display_order') ?? 0;

        // Create new collab item
        CollabItem::create([
            'title' => $request->input('title'),
            'filename' => $filename,
            'original_filename' => $originalFilename,
            'path' => $path,
            'mime_type' => $file->getMimeType(),
            'size' => $file->getSize(),
            'display_order' => $maxOrder + 1,
        ]);

        return redirect()->route('admin.media.create')
            ->with('success', 'Collab item added successfully!');
    }

    /**
     * Delete a collab item.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroyCollabItem($id)
    {
        $collabItem = CollabItem::findOrFail($id);

        // Delete file from storage
        if (Storage::disk('public')->exists($collabItem->path)) {
            Storage::disk('public')->delete($collabItem->path);
        }

        // Delete record
        $collabItem->delete();

        return redirect()->route('admin.media.create')
            ->with('success', 'Collab item deleted successfully!');
    }

}
