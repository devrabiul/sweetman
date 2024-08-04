<div x-data="wireui_inputs_currency({
    isLazy: <?= json_encode(filter_var($attributes->wire('model')->hasModifier('lazy'), FILTER_VALIDATE_BOOLEAN)); ?>,
    model:  <?php if ((object) ($attributes->wire('model')) instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e($attributes->wire('model')->value()); ?>')<?php echo e($attributes->wire('model')->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e($attributes->wire('model')); ?>')<?php endif; ?>,
    emitFormatted: <?= json_encode(filter_var($emitFormatted, FILTER_VALIDATE_BOOLEAN)); ?>,
    thousands: '<?php echo e($thousands); ?>',
    decimal:   '<?php echo e($decimal); ?>',
    precision:  <?php echo e($precision); ?>,
})" <?php echo e($attributes->only('wire:key')); ?>>
    <?php if (isset($component)) { $__componentOriginal511d4862ff04963c3c16115c05a86a9d = $component; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => WireUi::component('input')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\DynamicComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => $attributes->whereDoesntStartWith(['wire:model', 'wire:key'])->except('type'),'borderless' => $borderless,'shadowless' => $shadowless,'label' => $label,'hint' => $hint,'corner-hint' => $cornerHint,'icon' => $icon,'right-icon' => $rightIcon,'prefix' => $prefix,'suffix' => $suffix,'prepend' => $prepend,'append' => $append,'x-model' => 'input','x-on:input' => 'mask($event.target.value)','x-on:blur' => 'emitInput($event.target.value)']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal511d4862ff04963c3c16115c05a86a9d)): ?>
<?php $component = $__componentOriginal511d4862ff04963c3c16115c05a86a9d; ?>
<?php unset($__componentOriginal511d4862ff04963c3c16115c05a86a9d); ?>
<?php endif; ?>
</div>
<?php /**PATH C:\Users\Pc\Desktop\1.3.3\resources\views\vendor\wireui\components\inputs\currency.blade.php ENDPATH**/ ?>