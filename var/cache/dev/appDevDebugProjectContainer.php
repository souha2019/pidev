<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQj94p29\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQj94p29/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerQj94p29.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerQj94p29\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerQj94p29\appDevDebugProjectContainer([
    'container.build_hash' => 'Qj94p29',
    'container.build_id' => '55f4fab0',
    'container.build_time' => 1549809231,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQj94p29');
