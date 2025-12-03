<?php if (isset($component)) { $__componentOriginal1f9e5f64f242295036c059d9dc1c375c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c = $attributes; } ?>
<?php $component = App\View\Components\Layout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Layout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> 
        Categories
     <?php $__env->endSlot(); ?>

    <div class="container mx-auto px-4 py-12">
        <div class="mb-12">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Categories</h1>
            <p class="text-gray-600 text-lg">Jelajahi berbagai kategori konten kami</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition hover:-translate-y-1 transform">
                    <div class="bg-gradient-to-br from-blue-500 via-purple-500 to-pink-500 h-32"></div>
                    <div class="p-6">
                        <h2 class="text-2xl font-bold text-gray-800 mb-3"><?php echo e($category->name); ?></h2>
                        <div class="flex items-center justify-between">
                            <span class="inline-block bg-blue-100 text-blue-800 text-sm px-3 py-1 rounded-full font-semibold">
                                <?php echo e($category->posts->count()); ?> Posts
                            </span>
                            <a href="#" class="text-blue-600 hover:text-blue-800 font-semibold text-sm">View →</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="col-span-full text-center py-12">
                    <p class="text-gray-600 text-lg">Belum ada kategori yang tersedia.</p>
                </div>
            <?php endif; ?>
        </div>

        <!-- Recent Posts by Category -->
        <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <?php if($category->posts->count() > 0): ?>
                <div class="mb-16">
                    <div class="mb-8">
                        <h2 class="text-3xl font-bold text-gray-800 mb-2"><?php echo e($category->name); ?> Posts</h2>
                        <div class="w-20 h-1 bg-blue-600 rounded"></div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <?php $__currentLoopData = $category->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                                <div class="bg-gradient-to-br from-gray-300 to-gray-400 h-40"></div>
                                <div class="p-6">
                                    <h3 class="text-xl font-bold text-gray-800 mb-2 line-clamp-2"><?php echo e($post->title); ?></h3>
                                    <p class="text-gray-600 text-sm mb-4">By <span class="font-semibold"><?php echo e($post->author->name); ?></span></p>
                                    <p class="text-gray-700 mb-4 line-clamp-2"><?php echo e($post->excerpt); ?></p>
                                    <div class="flex items-center justify-between">
                                        <span class="text-gray-500 text-xs"><?php echo e($post->created_at->format('M d, Y')); ?></span>
                                        <a href="#" class="text-blue-600 hover:text-blue-800 font-semibold text-sm">Read →</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="text-center py-12">
                <p class="text-gray-600 text-lg">Belum ada kategori dengan posts.</p>
            </div>
        <?php endif; ?>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $attributes = $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $component = $__componentOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php /**PATH C:\Users\LazyBear\Herd\latihan\resources\views/categories.blade.php ENDPATH**/ ?>