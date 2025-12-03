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
        About
     <?php $__env->endSlot(); ?>

    <div class="container mx-auto px-4 py-12">
        <div class="max-w-3xl mx-auto">
            <!-- Title Section -->
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-gray-800 mb-4">Tentang Kami</h1>
                <p class="text-lg text-gray-600">Pelajari lebih lanjut tentang website latihan ini</p>
            </div>

            <!-- Content Section -->
            <div class="space-y-8">
                <section class="bg-white p-8 rounded-lg shadow-lg">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">Apa itu Website Ini?</h2>
                    <p class="text-gray-700 leading-relaxed mb-4">
                        Website ini adalah sebuah proyek latihan untuk mempelajari framework Laravel dan styling dengan Tailwind CSS. 
                        Kami membuat website yang sederhana namun profesional untuk mendemonstrasikan berbagai konsep web development modern.
                    </p>
                </section>

                <section class="bg-white p-8 rounded-lg shadow-lg">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">Teknologi yang Digunakan</h2>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                        <div class="bg-blue-100 p-4 rounded text-center">
                            <h3 class="font-bold text-blue-900">Laravel 11</h3>
                            <p class="text-sm text-blue-800">PHP Framework</p>
                        </div>
                        <div class="bg-green-100 p-4 rounded text-center">
                            <h3 class="font-bold text-green-900">Tailwind CSS</h3>
                            <p class="text-sm text-green-800">Styling Framework</p>
                        </div>
                        <div class="bg-purple-100 p-4 rounded text-center">
                            <h3 class="font-bold text-purple-900">Blade Templates</h3>
                            <p class="text-sm text-purple-800">Templating Engine</p>
                        </div>
                    </div>
                </section>

                <section class="bg-white p-8 rounded-lg shadow-lg">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">Fitur Website</h2>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3">
                            <span class="text-green-500 font-bold text-xl">✓</span>
                            <span class="text-gray-700">Layout komponen yang reusable</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-green-500 font-bold text-xl">✓</span>
                            <span class="text-gray-700">Routing untuk multiple halaman</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-green-500 font-bold text-xl">✓</span>
                            <span class="text-gray-700">Navigasi responsive</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-green-500 font-bold text-xl">✓</span>
                            <span class="text-gray-700">Footer yang informatif</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-green-500 font-bold text-xl">✓</span>
                            <span class="text-gray-700">Design yang modern dan clean</span>
                        </li>
                    </ul>
                </section>

                <section class="bg-gradient-to-r from-blue-600 to-purple-600 text-white p-8 rounded-lg text-center">
                    <h2 class="text-2xl font-bold mb-4">Siap untuk Belajar?</h2>
                    <p class="mb-6">Jelajahi konten kami dan mulai pembelajaran web development Anda sekarang!</p>
                    <a href="/blog" class="bg-white text-blue-600 px-6 py-3 rounded font-bold hover:bg-gray-100 transition inline-block">
                        Baca Blog Kami
                    </a>
                </section>
            </div>
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
<?php endif; ?><?php /**PATH C:\Users\LazyBear\Herd\latihan\resources\views/about.blade.php ENDPATH**/ ?>