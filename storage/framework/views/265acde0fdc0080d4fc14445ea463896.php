<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>Section Media Management - Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen">
        <!-- Navigation -->
        <nav class="bg-white shadow-sm">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex items-center space-x-4">
                        <a href="<?php echo e(route('admin.dashboard')); ?>" class="text-gray-600 hover:text-gray-800">
                            ← Dashboard
                        </a>
                        <h1 class="text-2xl font-bold text-gray-900">Section Media Management</h1>
                    </div>
                    <div class="flex items-center">
                        <a href="<?php echo e(route('home')); ?>" class="text-gray-600 hover:text-gray-800">
                            View Site
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <!-- Success/Error Messages -->
            <?php if(session('success')): ?>
                <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <span class="block sm:inline"><?php echo e(session('success')); ?></span>
                </div>
            <?php endif; ?>

            <?php if($errors->any()): ?>
                <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>

            <!-- Upload Form -->
            <div class="bg-white rounded-lg shadow mb-8">
                <div class="px-6 py-4 border-b border-gray-200">
                    <h2 class="text-lg font-semibold text-gray-900">Upload Image for Section</h2>
                </div>
                <div class="p-6">
                    <form action="<?php echo e(route('admin.media.store')); ?>" method="POST" enctype="multipart/form-data" class="space-y-4">
                        <?php echo csrf_field(); ?>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="section" class="block text-sm font-medium text-gray-700 mb-2">
                                    Select Section *
                                </label>
                                <select name="section" id="section" required
                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                                    <option value="">Choose a section...</option>
                                    <?php for($i = 1; $i <= 6; $i++): ?>
                                        <option value="<?php echo e($i); ?>">Section <?php echo e($i); ?></option>
                                    <?php endfor; ?>
                                </select>
                                <p class="mt-1 text-sm text-gray-500">Select which section (1-6) to update</p>
                            </div>
                            <div>
                                <label for="file" class="block text-sm font-medium text-gray-700 mb-2">
                                    Image File *
                                </label>
                                <input type="file" name="file" id="file" accept="image/*" required
                                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                                <p class="mt-1 text-sm text-gray-500">Accepted formats: JPEG, PNG, JPG, GIF, WEBP (Max: 10MB)</p>
                            </div>
                        </div>
                        <div>
                            <label for="alt_text" class="block text-sm font-medium text-gray-700 mb-2">
                                Alt Text (Optional)
                            </label>
                            <input type="text" name="alt_text" id="alt_text" value="<?php echo e(old('alt_text')); ?>"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                        </div>
                        <div>
                            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Upload Image for Selected Section
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Section Preview Grid -->
            <div class="bg-white rounded-lg shadow">
                <div class="px-6 py-4 border-b border-gray-200">
                    <h2 class="text-lg font-semibold text-gray-900">Section Overview</h2>
                    <p class="text-sm text-gray-500 mt-1">Current images for each section. Upload new images to replace defaults.</p>
                </div>
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <?php
                            $defaultImages = [
                                1 => '/img/2.JPG',
                                2 => '/img/3.JPG',
                                3 => '/img/4.JPG',
                                4 => 'https://cdn.rickowens.eu/home_page_images/143997/RIQUADRO_BIANCO.png?1764758711',
                                5 => 'https://cdn.rickowens.eu/home_page_images/144202/CANDLE_MOUSEOVER_1080_X_1350.png?1764758896',
                                6 => 'https://cdn.rickowens.eu/home_page_images/143997/RIQUADRO_BIANCO.png?1764758711',
                            ];
                        ?>
                        <?php for($i = 1; $i <= 6; $i++): ?>
                            <?php
                                $currentMedia = $sectionMedia[$i] ?? null;
                                $imageUrl = $currentMedia ? $currentMedia->url : $defaultImages[$i];
                                $isCustom = $currentMedia !== null;
                            ?>
                            <div class="border rounded-lg overflow-hidden <?php echo e($isCustom ? 'ring-2 ring-blue-500' : ''); ?>">
                                <div class="bg-gray-50 px-4 py-2 border-b">
                                    <div class="flex items-center justify-between">
                                        <h3 class="font-semibold text-gray-900">Section <?php echo e($i); ?></h3>
                                        <?php if($isCustom): ?>
                                            <span class="text-xs bg-blue-100 text-blue-800 px-2 py-1 rounded">Custom</span>
                                        <?php else: ?>
                                            <span class="text-xs bg-gray-200 text-gray-600 px-2 py-1 rounded">Default</span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="relative" style="padding-bottom: 125%;">
                                    <img src="<?php echo e($imageUrl); ?>" alt="Section <?php echo e($i); ?>" class="absolute top-0 left-0 w-full h-full object-cover">
                                </div>
                                <div class="p-4 bg-gray-50">
                                    <?php if($isCustom): ?>
                                        <p class="text-xs text-gray-600 mb-2 truncate" title="<?php echo e($currentMedia->original_filename); ?>">
                                            <?php echo e($currentMedia->original_filename); ?>

                                        </p>
                                        <form action="<?php echo e(route('admin.media.destroy', $i)); ?>" method="POST" onsubmit="return confirm('Are you sure you want to restore Section <?php echo e($i); ?> to default image?');">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="w-full text-xs bg-red-600 text-white px-3 py-2 rounded hover:bg-red-700">
                                                Restore Default
                                            </button>
                                        </form>
                                    <?php else: ?>
                                        <p class="text-xs text-gray-500 mb-2">Using default image</p>
                                        <button type="button" onclick="document.getElementById('section').value='<?php echo e($i); ?>'; document.getElementById('section').scrollIntoView({behavior: 'smooth', block: 'center'});" class="w-full text-xs bg-blue-600 text-white px-3 py-2 rounded hover:bg-blue-700">
                                            Upload Custom Image
                                        </button>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
<?php /**PATH /Users/gnosis/Herd/vibehubmedia/resources/views/admin/media/upload.blade.php ENDPATH**/ ?>