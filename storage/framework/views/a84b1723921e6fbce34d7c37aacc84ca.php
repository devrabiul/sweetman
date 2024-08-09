<div class="w-full">
    
    <div class="max-w-xl mx-auto mb-12 text-center">
        <h1 class="text-xl md:text-2xl font-extrabold text-black dark:text-white">
            <?php echo e(__('messages.t_top_sellers')); ?>

        </h1>
        <p class="text-sm md:text-base text-gray-400 dark:text-gray-300 font-normal mt-2">
            <?php echo e(__('messages.t_hire_our_best_sellers')); ?>    
        </p>
    </div>

    
    <ul role="list" class="grid grid-cols-1 md:gap-x-6 gap-y-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
        <?php $__currentLoopData = $sellers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seller): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="col-span-1 flex flex-col text-center bg-white dark:bg-zinc-800 rounded-lg shadow divide-y divide-gray-200 dark:divide-zinc-700 mb-6 mx-2 p-4"> <!-- Added padding -->
                <div class="flex-1 flex flex-col items-center">
                    
                    <img class="w-28 h-28 flex-shrink-0 rounded-full object-cover lazy" src="<?php echo e(placeholder_img()); ?>" data-src="<?php echo e(src($seller->avatar)); ?>" alt="<?php echo e($seller->username); ?>">
                    <h3 class="mt-6 text-gray-900 dark:text-gray-200 text-base font-bold tracking-wider">
                        <?php echo e($seller->username); ?>

                        <?php if($seller->status === 'verified'): ?>
                            <img data-tooltip-target="tooltip-account-verified-<?php echo e($seller->id); ?>" class="ltr:ml-0.5 rtl:mr-0.5 h-4 w-4 -mt-0.5" src="<?php echo e(url('public/img/auth/verified-badge.svg')); ?>" alt="<?php echo e(__('messages.t_account_verified')); ?>">
                            <div id="tooltip-account-verified-<?php echo e($seller->id); ?>" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                <?php echo e(__('messages.t_account_verified')); ?>

                            </div>
                        <?php endif; ?>
                    </h3>
                    <dl class="mt-1 flex-grow flex flex-col items-center">
                        <dt class="sr-only">Level</dt>
                        <dd class="text-sm font-medium" style="color:<?php echo e($seller->level->level_color); ?>"><?php echo e($seller->level->title); ?></dd>
                        <dt class="sr-only">Skills</dt>
                        <dd class="mt-5 space-x-2 rtl:space-x-reverse flex justify-center">
                            <?php $__currentLoopData = $seller->skills()->limit(3)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <span class="inline-flex mb-2 px-3 py-1.5 items-center text-gray-800 dark:text-zinc-400 text-xs font-medium bg-gray-100 dark:bg-zinc-700 rounded-full">
                                    <?php echo e($skill->name); ?>

                                </span>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </dd>
                    </dl>
                </div>

                
                <div>
                    <div class="-mt-px flex divide-x divide-grey-200 dark:divide-zinc-700 rtl:divide-x-reverse flex-wrap justify-center">
                        <!-- Contact me -->
                        <a href="<?php echo e(url('messages/new', $seller->username)); ?>" class="button">
                            <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"> 
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/> 
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/> 
                            </svg>
                            <span class="ltr:ml-2 rtl:mr-2"><?php echo e(__('messages.t_contact_me')); ?></span>
                        </a>

                        <!-- View my profile -->
                        <a href="<?php echo e(url('profile', $seller->username)); ?>" class="button">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"> 
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"/>
                            </svg>
                            <span class="ltr:ml-2 rtl:mr-2"><?php echo e(__('messages.t_view_profile')); ?></span>
                        </a>
                    </div>
                </div>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    
    <?php if($sellers->hasPages()): ?>
        <div class="flex justify-center pt-12">
            <?php echo $sellers->links('pagination::tailwind'); ?>

        </div>
    <?php endif; ?>
</div>

<style>
    .button {
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #f44336;
        border: none;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        margin: 5px; /* Space between buttons */
        flex: 1 1 200px; /* Flex-grow, flex-shrink, and flex-basis */
        max-width: 300px; /* Max width for buttons */
        box-sizing: border-box;
    }

    @media (max-width: 600px) {
        .button {
            padding: 8px 16px;
            font-size: 14px;
        }
    }
</style>
<?php /**PATH /opt/lampp/htdocs/sweetman/resources/views/livewire/main/sellers/sellers.blade.php ENDPATH**/ ?>