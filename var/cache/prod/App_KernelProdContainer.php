<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPTbSvzH\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPTbSvzH/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerPTbSvzH.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerPTbSvzH\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerPTbSvzH\App_KernelProdContainer([
    'container.build_hash' => 'PTbSvzH',
    'container.build_id' => '473f924a',
    'container.build_time' => 1690898337,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPTbSvzH');
