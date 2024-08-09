<label <?php echo e($attributes->class([
        'block text-sm font-medium',
        'text-negative-600'  => $hasError,
        'opacity-60'         => $attributes->get('disabled'),
        'text-gray-700 dark:text-gray-400' => !$hasError,
    ])); ?>>
    <?php echo e($label ?? $slot); ?>

</label>
<?php /**PATH /opt/lampp/htdocs/sweetman/resources/views/vendor/wireui/components/label.blade.php ENDPATH**/ ?>