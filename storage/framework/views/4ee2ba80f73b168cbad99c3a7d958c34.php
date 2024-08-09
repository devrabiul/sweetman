<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <style>
        body {
            background-image: url('https://images.pexels.com/photos/3165335/pexels-photo-3165335.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');
            background-size: cover;
            background-position: center;
            min-height: 100vh; /* Changed to min-height for full page content */
            margin: 0;
            padding: 0;
        }

        .content {
            padding: 20px; /* Adjust padding as needed */
            min-height: 100vh; /* Ensures content area is tall */
        }

        .btn-red {
            background-color: red;
            animation: pulse 2s infinite;
            transition: transform 0.3s, background-color 0.3s;
        }

        .btn-red:hover {
            background-color: darkred;
            transform: scale(1.1);
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
            100% {
                transform: scale(1);
            }
        }
    </style>
</head>
<body>
    <div class="content">
        <div class="w-full">
            <div>
                
                <?php if(auth()->guard()->check()): ?>
                <div class="flex items-center justify-center">
                    <?php if (isset($component)) { $__componentOriginal039608dc70b2e4c26356f5d84408f584 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal039608dc70b2e4c26356f5d84408f584 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Button::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['action' => 'start','text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_lets_get_started')),'block' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal039608dc70b2e4c26356f5d84408f584)): ?>
<?php $attributes = $__attributesOriginal039608dc70b2e4c26356f5d84408f584; ?>
<?php unset($__attributesOriginal039608dc70b2e4c26356f5d84408f584); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal039608dc70b2e4c26356f5d84408f584)): ?>
<?php $component = $__componentOriginal039608dc70b2e4c26356f5d84408f584; ?>
<?php unset($__componentOriginal039608dc70b2e4c26356f5d84408f584); ?>
<?php endif; ?>
                </div>
                <?php endif; ?>

                
                <?php if(auth()->guard()->guest()): ?>
                <div class="text-center">
                    <a href="<?php echo e(url('auth/register')); ?>"
                        class="inline-flex justify-center items-center space-x-2 rtl:space-x-reverse border font-semibold focus:outline-none px-6 py-4 leading-6 rounded border-primary-700 text-white hover:text-white hover:bg-primary-1 hover:border-primary-800 focus:ring focus:ring-primary-500 focus:ring-opacity-50 active:bg-primary-700 active:border-primary-700 btn-red">

                        
                        <svg fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                            class="opacity-50 hi-solid hi-arrow-right hidden ltr:inline-block w-5 h-5">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>

                        
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="opacity-50 hi-solid hi-arrow-right hidden rtl:inline-block w-5 h-5"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z"
                                clip-rule="evenodd" />
                        </svg>

                        <span><?php echo app('translator')->get('messages.t_lets_get_started'); ?></span>
                    </a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH /opt/lampp/htdocs/sweetman/resources/views/livewire/main/become/seller.blade.php ENDPATH**/ ?>