<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJbD8O6N\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJbD8O6N/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJbD8O6N.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJbD8O6N\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerJbD8O6N\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'JbD8O6N',
    'container.build_id' => '5b2b61d1',
    'container.build_time' => 1551527863,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJbD8O6N');