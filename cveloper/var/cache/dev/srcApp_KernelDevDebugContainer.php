<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBxgVMmY\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBxgVMmY/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBxgVMmY.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBxgVMmY\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerBxgVMmY\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'BxgVMmY',
    'container.build_id' => '46fc64f6',
    'container.build_time' => 1551531236,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBxgVMmY');
