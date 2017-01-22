<?php
declare(strict_types = 1);
namespace General\Traits;

/**
 * Class SingletonTrait
 * @package General\Traits
 */
trait SingletonTrait
{
    /**
     * @var array self[]
     */
    private static $instances = [];

    /**
     * Returns instance if none exists
     *
     * @return $this
     */
    public static function getInstance()
    {
        $self = get_called_class();
        if (!isset(self::$instances[$self])) {
            self::$instances[$self] = new $self;
        }

        return self::$instances[$self];
    }

    /**
     * Description: Check if this class has an instance.
     * @return bool
     */
    protected static function hasInstance(): bool
    {
        $self = get_called_class();

        return isset(self::$instances[$self]);
    }
}
