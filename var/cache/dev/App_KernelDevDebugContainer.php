<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPkMuoYm\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPkMuoYm/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPkMuoYm.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPkMuoYm\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerPkMuoYm\App_KernelDevDebugContainer([
    'container.build_hash' => 'PkMuoYm',
    'container.build_id' => 'df3cb052',
    'container.build_time' => 1636560472,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPkMuoYm');
