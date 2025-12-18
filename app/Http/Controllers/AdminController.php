<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminController extends Controller
{
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

        return view('admin.media.upload', [
            'sectionMedia' => $sectionMedia,
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

}
