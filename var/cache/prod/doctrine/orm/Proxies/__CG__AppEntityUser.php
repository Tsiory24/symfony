<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \App\Entity\User implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as private;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    public function __load(): void
    {
        $this->initializeLazyObject();
    }
    

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'apiToken' => [parent::class, 'apiToken', null],
        "\0".parent::class."\0".'deletedAt' => [parent::class, 'deletedAt', null],
        "\0".parent::class."\0".'email' => [parent::class, 'email', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'password' => [parent::class, 'password', null],
        "\0".parent::class."\0".'roles' => [parent::class, 'roles', null],
        "\0".parent::class."\0".'tasks' => [parent::class, 'tasks', null],
        "\0".parent::class."\0".'username' => [parent::class, 'username', null],
        'apiToken' => [parent::class, 'apiToken', null],
        'deletedAt' => [parent::class, 'deletedAt', null],
        'email' => [parent::class, 'email', null],
        'id' => [parent::class, 'id', null],
        'password' => [parent::class, 'password', null],
        'roles' => [parent::class, 'roles', null],
        'tasks' => [parent::class, 'tasks', null],
        'username' => [parent::class, 'username', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
