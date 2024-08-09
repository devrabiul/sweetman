<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>"
      dir="<?php echo e(config()->get('direction')); ?>" class="<?php echo \Illuminate\Support\Arr::toCssClasses(['dark' => current_theme() === 'dark']); ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    
    <?php echo SEO::generate(); ?>

    <?php echo JsonLd::generate(); ?>


    
    <?php echo settings('appearance')->font_link; ?>


    
    <link rel="icon" type="image/png" href="<?php echo e(src( settings('general')->favicon )); ?>"/>

    
    <?php if(settings('hero')->enable_bg_img): ?>

        
        <?php if(settings('hero')->background_small): ?>
            <link rel="preload prefetch" as="image" href="<?php echo e(src(settings('hero')->background_small)); ?>"
                  type="image/webp"/>
        <?php endif; ?>

        
        <?php if(settings('hero')->background_medium): ?>
            <link rel="preload prefetch" as="image" href="<?php echo e(src(settings('hero')->background_medium)); ?>"
                  type="image/webp"/>
        <?php endif; ?>

        
        <?php if(settings('hero')->background_large): ?>
            <link rel="preload prefetch" as="image" href="<?php echo e(src(settings('hero')->background_large)); ?>"
                  type="image/webp"/>
        <?php endif; ?>

    <?php endif; ?>

    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    
    <?php echo \Livewire\Livewire::styles(); ?>


    
    <link rel="preload" href="<?php echo e(mix('css/app.css')); ?>" as="style">
    <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">

    
    <link rel="preload" href="<?php echo e(getLiveWireAssetPath()); ?>" as="script">

    
    <style>

        :root {
            --color-primary: <?php echo e(settings('appearance')->colors['primary']); ?>;
            --color-primary-h: <?php echo e(hex2hsl( settings('appearance')->colors['primary'] )[0]); ?>;
            --color-primary-s: <?php echo e(hex2hsl( settings('appearance')->colors['primary'] )[1]); ?>%;
            --color-primary-l: <?php echo e(hex2hsl( settings('appearance')->colors['primary'] )[2]); ?>%;
        }

        html {
            font-family: <?php echo settings('appearance')->font_family ?>, sans-serif !important;
        }

        .fileuploader, .fileuploader-popup {
            font-family: <?php echo settings('appearance')->font_family ?>, sans-serif !important;
        }


        .home-hero-section {
            background-color: rgba(0, 0, 0, 0); /* Fully transparent */
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            height: <?php echo e(settings('hero')->bg_large_height); ?>px;
            width: 101%; /* Full width of the parent container */
            width: 101vw; /* Full width of the viewport */

        }

        
        <?php if(settings('hero')->enable_bg_img): ?>

            
            <?php if(settings('hero')->background_small): ?>
                @media only screen and (max-width: 600px) {
                    .home-hero-section {
                        background-image: url('<?php echo e(src(settings('hero')->background_small)); ?>');
                        height: <?php echo e(settings('hero')->bg_small_height); ?>px;
                    }
                }
            <?php endif; ?>

            
            <?php if(settings('hero')->background_medium): ?>
                @media only screen and (min-width: 600px) {
                    .home-hero-section {
                        background-image: url('<?php echo e(src(settings('hero')->background_medium)); ?>')
                    }
                }
            <?php endif; ?>

            
            <?php if(settings('hero')->background_large): ?>
                @media only screen and (min-width: 768px) {
                    .home-hero-section {
                        background-image: url('<?php echo e(src(settings('hero')->background_large)); ?>');
                    }
                }
            <?php endif; ?>

            
            <?php if(settings('hero')->background_large): ?>
                @media only screen and (min-width: 992px) {
                    .home-hero-section {
                        background-image: url('<?php echo e(src(settings('hero')->background_large)); ?>');
                    }
                }
            <?php endif; ?>

            
            <?php if(settings('hero')->background_large): ?>
                @media only screen and (min-width: 1200px) {
                    .home-hero-section {
                        background-image: url('<?php echo e(src(settings('hero')->background_large)); ?>');
                    }
                }
            <?php endif; ?>

        <?php endif; ?>

    </style>


    
    <?php echo $__env->yieldPushContent('styles'); ?>

    
    <script>
        __var_app_url = "<?php echo e(url('/')); ?>";
        __var_app_locale = "<?php echo e(app()->getLocale()); ?>";
        __var_rtl = <?php echo \Illuminate\Support\Js::from(config()->get('direction') === 'ltr' ? false : true)->toHtml() ?>;
        __var_primary_color = "<?php echo e(settings('appearance')->colors['primary']); ?>";
        __var_axios_base_url = "<?php echo e(url('/')); ?>/";
        __var_currency_code = "<?php echo e(settings('currency')->code); ?>";
    </script>

    
    <?php if(advertisements('header_code')): ?>
        <?php echo advertisements('header_code'); ?>

    <?php endif; ?>

    
    <?php if(settings('appearance')->custom_code_head_main_layout): ?>
        <?php echo settings('appearance')->custom_code_head_main_layout; ?>

    <?php endif; ?>

    <style>
        .card-container {
            width: 95%;
            margin: 20px auto;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background: linear-gradient(135deg, #000000, #ff0000); /* Glossy black and red gradient background */
            border: 1px solid #e0e0e0; /* Light border color */
            position: relative; /* Make the container a positioning context */
            box-shadow: 0 0 15px rgba(255, 0, 0, 0.5); /* Add red glow effect */
        }

        .card-container:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(255, 0, 0, 0.8), 0 0 25px rgba(255, 0, 0, 0.8); /* Enhance red glow effect on hover */
            background: linear-gradient(135deg, #000000, #ff0000); /* Glossy black and red gradient background on hover */
        }

        .card-image {
            transition: transform 0.3s ease;
        }

        .card-image:hover {
            transform: scale(1.1);
        }

        .card-title {
            color: #333333; /* Dark text color */
            position: relative; /* Make the title a positioning context */
            padding: 10px;
            background: rgba(255, 255, 255, 0.2); /* Semi-transparent background */
            backdrop-filter: blur(10px); /* Glass effect */
            -webkit-backdrop-filter: blur(10px); /* For Safari */
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0 0 10px rgba(255, 0, 0, 0.5); /* Add red glow effect */
        }

        .card-title:hover {
            color: #ff6600; /* Highlight text color on hover */
        }

        .card-button {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #ff6600;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            box-shadow: 0 0 10px rgba(255, 0, 0, 0.5); /* Add red glow effect */
        }

        .card-button:hover {
            background-color: #ff4500;
        }

        .button-container {
            display: flex;
            justify-content: space-between;
            padding: 10px;
        }

        .button {
            flex: 1;
            margin: 0 5px;
            padding: 5px 8px; /* Smaller padding */
            font-size: 12px; /* Smaller font size */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            box-shadow: 0 0 10px rgba(255, 0, 0, 0.5); /* Add red glow effect */
        }

        .button-blue {
            background-color: #007bff;
            color: white;
        }

        .button-blue:hover {
            background-color: #0056b3;
        }

        .button-red {
            background-color: #dc3545;
            color: white;
        }

        .button-red:hover {
            background-color: #c82333;
        }

        /* Media query for mobile view */
        @media (max-width: 250px) {
            .card-container {
                margin-right: 100px; /* Adjust this value as needed */
            }
        }
    </style>

</head>

<body
    class="antialiased bg-[#fafafa] dark:bg-[#161616] text-gray-600 min-h-full flex flex-col application application-ltr overflow-x-hidden overflow-y-scroll <?php echo e(app()->getLocale() === 'ar' ? 'application-ar' : ''); ?>"
    style="overflow-y: scroll">


<?php if (isset($component)) { $__componentOriginal10717d162484e57a570d6d2cc4597545 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal10717d162484e57a570d6d2cc4597545 = $attributes; } ?>
<?php $component = WireUi\View\Components\Notifications::resolve(['position' => 'top-center','zIndex' => 'z-[65]'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('notifications'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(WireUi\View\Components\Notifications::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal10717d162484e57a570d6d2cc4597545)): ?>
<?php $attributes = $__attributesOriginal10717d162484e57a570d6d2cc4597545; ?>
<?php unset($__attributesOriginal10717d162484e57a570d6d2cc4597545); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal10717d162484e57a570d6d2cc4597545)): ?>
<?php $component = $__componentOriginal10717d162484e57a570d6d2cc4597545; ?>
<?php unset($__componentOriginal10717d162484e57a570d6d2cc4597545); ?>
<?php endif; ?>


<?php if (isset($component)) { $__componentOriginal2451dfd9df7c01154a83baa9ef28b9d5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2451dfd9df7c01154a83baa9ef28b9d5 = $attributes; } ?>
<?php $component = WireUi\View\Components\Dialog::resolve(['zIndex' => 'z-[65]','blur' => 'sm'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dialog'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(WireUi\View\Components\Dialog::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2451dfd9df7c01154a83baa9ef28b9d5)): ?>
<?php $attributes = $__attributesOriginal2451dfd9df7c01154a83baa9ef28b9d5; ?>
<?php unset($__attributesOriginal2451dfd9df7c01154a83baa9ef28b9d5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2451dfd9df7c01154a83baa9ef28b9d5)): ?>
<?php $component = $__componentOriginal2451dfd9df7c01154a83baa9ef28b9d5; ?>
<?php unset($__componentOriginal2451dfd9df7c01154a83baa9ef28b9d5); ?>
<?php endif; ?>


<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('main.includes.header')->html();
} elseif ($_instance->childHasBeenRendered('Q05UyNe')) {
    $componentId = $_instance->getRenderedChildComponentId('Q05UyNe');
    $componentTag = $_instance->getRenderedChildComponentTagName('Q05UyNe');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Q05UyNe');
} else {
    $response = \Livewire\Livewire::mount('main.includes.header');
    $html = $response->html();
    $_instance->logRenderedChild('Q05UyNe', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>


<?php if(request()->is('/')): ?>

    
    <div class="home-hero-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center">
            <div class="w-full md:max-w-lg">

                
                <h1 class="text-center sm:ltr:text-left sm:rtl:text-right mt-4 text-xl tracking-tight font-extrabold text-white sm:mt-5 sm:text-3xl lg:mt-6 xl:text-4xl">
                    <?php echo e(__('Find the best gamers')); ?> <?php echo e(__('worldwide')); ?><br>
                </h1>
                <div class="mt-10 sm:mt-12">

                    
                    <form class="flex items-center mb-4" action="<?php echo e(url('search')); ?>" accept="GET">

                        
                        <div class="relative w-full">
                            <div
                                class="absolute inset-y-0 ltr:left-0 rtl:right-0 flex items-center ltr:pl-3 rtl:pr-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                     fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                          clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input type="search" name="q"
                                   class="bg-white border-none text-gray-900 text-sm font-medium rounded-md block w-full ltr:pl-10 rtl:pr-10 px-2.5 py-4 focus:outline-none focus:ring-0"
                                   placeholder="<?php echo e(__('messages.t_what_service_are_u_looking_for_today')); ?>" required>
                        </div>

                        
                        <button type="submit"
                                class="px-5 py-4 ltr:ml-2 rtl:mr-2 text-sm font-medium text-white bg-red-600 rounded-md border-none hover:bg-red-800 focus:ring-0 focus:outline-none">
                            <?php echo app('translator')->get('messages.t_search'); ?>
                        </button>


                    </form>

                    
                    <?php
                        $popular_tags = App\Models\Category::whereHas('gigs')->withCount('gigs')->take(5)->orderBy('gigs_count')->get();
                    ?>
                    <div class="hidden sm:flex items-center text-white font-semibold text-sm whitespace-nowrap">
                        <?php echo app('translator')->get('messages.t_popular_colon'); ?>
                        <ul class="flex ltr:ml-3 rtl:mr-3">
                            <?php $__currentLoopData = $popular_tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="flex ltr:mr-3 rtl:ml-3 whitespace-nowrap">
                                    <a href="<?php echo e(url('categories', $tag->slug)); ?>"
                                       class="border-2 border-white rounded-[40px] hover:bg-white hover:text-gray-700 transition-all duration-200 px-3 py-0.5 text-xs">
                                        <?php echo e($tag->name); ?>

                                    </a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div>

<?php endif; ?>


<main class="flex-grow">
    <div class="container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 pt-16 pb-24 space-y-8 min-h-screen">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</main>


<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('main.includes.footer')->html();
} elseif ($_instance->childHasBeenRendered('hRHayIV')) {
    $componentId = $_instance->getRenderedChildComponentId('hRHayIV');
    $componentTag = $_instance->getRenderedChildComponentTagName('hRHayIV');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('hRHayIV');
} else {
    $response = \Livewire\Livewire::mount('main.includes.footer');
    $html = $response->html();
    $_instance->logRenderedChild('hRHayIV', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>


<?php echo \Livewire\Livewire::scripts(); ?>



<script >window.Wireui = {hook(hook, callback) {window.addEventListener(`wireui:${hook}`, () => callback())},dispatchHook(hook) {window.dispatchEvent(new Event(`wireui:${hook}`))}}</script>
<script src="http://localhost/sweetman/wireui/assets/scripts?id=be97ebae74d62aa4c86689a6528b707f" defer ></script>


<script defer src="<?php echo e(mix('js/app.js')); ?>"></script>


<script defer src="<?php echo e(getDynamicAsset('public/js/utils.js?v=1.3.1')); ?>"></script>
<script src="<?php echo e(getDynamicAsset('public/js/components.js?v=1.3.1')); ?>"></script>


<script defer>

    document.addEventListener("DOMContentLoaded", function () {

        jQuery.event.special.touchstart = {
            setup: function (_, ns, handle) {
                this.addEventListener("touchstart", handle, {passive: !ns.includes("noPreventDefault")});
            }
        };
        jQuery.event.special.touchmove = {
            setup: function (_, ns, handle) {
                this.addEventListener("touchmove", handle, {passive: !ns.includes("noPreventDefault")});
            }
        };
        jQuery.event.special.wheel = {
            setup: function (_, ns, handle) {
                this.addEventListener("wheel", handle, {passive: true});
            }
        };
        jQuery.event.special.mousewheel = {
            setup: function (_, ns, handle) {
                this.addEventListener("mousewheel", handle, {passive: true});
            }
        };

        // Refresh
        window.addEventListener('refresh', () => {
            location.reload();
        });

        // Scroll to specific div
        window.addEventListener('scrollTo', (event) => {

            // Get id to scroll
            const id = event.detail;

            // Scroll
            $('html, body').animate({
                scrollTop: $("#" + id).offset().top
            }, 500);

        });

        // Scroll to up page
        window.addEventListener('scrollUp', () => {

            // Scroll
            $('html, body').animate({
                scrollTop: $("body").offset().top
            }, 500);

        });

    });

    function jwUBiFxmwbrUwww() {
        return {

            scroll: false,

            init() {
                var _this = this;
                $(document).scroll(function () {
                    $(this).scrollTop() > 70 ? _this.scroll = true : _this.scroll = false;
                });

            }

        }
    }

    window.jwUBiFxmwbrUwww = jwUBiFxmwbrUwww();

    document.ontouchmove = function (event) {
        event.preventDefault();
    }

</script>


<?php echo $__env->yieldPushContent('scripts'); ?>


<?php if(settings('appearance')->custom_code_footer_main_layout): ?>
    <?php echo settings('appearance')->custom_code_footer_main_layout; ?>

<?php endif; ?>

</body>

</html>
<?php /**PATH /opt/lampp/htdocs/sweetman/resources/views/livewire/main/layout/app.blade.php ENDPATH**/ ?>