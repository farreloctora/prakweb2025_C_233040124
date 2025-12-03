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
        Blog
     <?php $__env->endSlot(); ?>

    <div class="container mx-auto px-4 py-12">
        <div class="mb-12">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Blog</h1>
            <p class="text-gray-600 text-lg">Baca artikel dan tips menarik dari kami</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Blog Card 1 -->
            <article class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                <div class="bg-blue-500 h-48"></div>
                <div class="p-6">
                    <h2 class="text-xl font-bold text-gray-800 mb-2">Getting Started with Laravel</h2>
                    <p class="text-gray-600 text-sm mb-4">Posted on January 15, 2024</p>
                    <p class="text-gray-700 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt...</p>
                    <a href="#" class="text-blue-600 hover:text-blue-800 font-semibold">Read More →</a>
                </div>
            </article>

            <!-- Blog Card 2 -->
            <article class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                <div class="bg-green-500 h-48"></div>
                <div class="p-6">
                    <h2 class="text-xl font-bold text-gray-800 mb-2">Tailwind CSS Tips & Tricks</h2>
                    <p class="text-gray-600 text-sm mb-4">Posted on January 10, 2024</p>
                    <p class="text-gray-700 mb-4">Ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco...</p>
                    <a href="#" class="text-blue-600 hover:text-blue-800 font-semibold">Read More →</a>
                </div>
            </article>

            <!-- Blog Card 3 -->
            <article class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                <div class="bg-purple-500 h-48"></div>
                <div class="p-6">
                    <h2 class="text-xl font-bold text-gray-800 mb-2">Web Development Best Practices</h2>
                    <p class="text-gray-600 text-sm mb-4">Posted on January 5, 2024</p>
                    <p class="text-gray-700 mb-4">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat...</p>
                    <a href="#" class="text-blue-600 hover:text-blue-800 font-semibold">Read More →</a>
                </div>
            </article>
        </div>
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
<?php /**PATH C:\Users\LazyBear\Herd\latihan\resources\views/blog.blade.php ENDPATH**/ ?>