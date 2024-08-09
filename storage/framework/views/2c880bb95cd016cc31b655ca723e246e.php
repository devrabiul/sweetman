<div class="w-full">

    
    <?php if($step === 'overview'): ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.gigs.options.steps.overview', ['gig' => $gig])->html();
} elseif ($_instance->childHasBeenRendered('rqIGq7Q')) {
    $componentId = $_instance->getRenderedChildComponentId('rqIGq7Q');
    $componentTag = $_instance->getRenderedChildComponentTagName('rqIGq7Q');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('rqIGq7Q');
} else {
    $response = \Livewire\Livewire::mount('admin.gigs.options.steps.overview', ['gig' => $gig]);
    $html = $response->html();
    $_instance->logRenderedChild('rqIGq7Q', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php endif; ?>

    
    <?php if($step === 'pricing'): ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.gigs.options.steps.pricing', ['gig' => $gig])->html();
} elseif ($_instance->childHasBeenRendered('Ydh5oNU')) {
    $componentId = $_instance->getRenderedChildComponentId('Ydh5oNU');
    $componentTag = $_instance->getRenderedChildComponentTagName('Ydh5oNU');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Ydh5oNU');
} else {
    $response = \Livewire\Livewire::mount('admin.gigs.options.steps.pricing', ['gig' => $gig]);
    $html = $response->html();
    $_instance->logRenderedChild('Ydh5oNU', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php endif; ?>

    
    <?php if($step === 'requirements'): ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.gigs.options.steps.requirements', ['gig' => $gig])->html();
} elseif ($_instance->childHasBeenRendered('vzbI0lG')) {
    $componentId = $_instance->getRenderedChildComponentId('vzbI0lG');
    $componentTag = $_instance->getRenderedChildComponentTagName('vzbI0lG');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('vzbI0lG');
} else {
    $response = \Livewire\Livewire::mount('admin.gigs.options.steps.requirements', ['gig' => $gig]);
    $html = $response->html();
    $_instance->logRenderedChild('vzbI0lG', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php endif; ?>

    
    <?php if($step === 'gallery'): ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.gigs.options.steps.gallery', ['gig' => $gig])->html();
} elseif ($_instance->childHasBeenRendered('dy4ofwO')) {
    $componentId = $_instance->getRenderedChildComponentId('dy4ofwO');
    $componentTag = $_instance->getRenderedChildComponentTagName('dy4ofwO');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('dy4ofwO');
} else {
    $response = \Livewire\Livewire::mount('admin.gigs.options.steps.gallery', ['gig' => $gig]);
    $html = $response->html();
    $_instance->logRenderedChild('dy4ofwO', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php endif; ?>

</div><?php /**PATH /opt/lampp/htdocs/sweetman/resources/views/livewire/admin/gigs/options/edit.blade.php ENDPATH**/ ?>