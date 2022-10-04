<?php

declare(strict_types=1);

namespace Spawnia\Sailor\Polymorphic\Operations\PolymorphicCommonSubChildren\Sub;

/**
 * @property string $__typename
 * @property array<int, \Spawnia\Sailor\Polymorphic\Operations\PolymorphicCommonSubChildren\Sub\Nodes\User|\Spawnia\Sailor\Polymorphic\Operations\PolymorphicCommonSubChildren\Sub\Nodes\Task|\Spawnia\Sailor\Polymorphic\Operations\PolymorphicCommonSubChildren\Sub\Nodes\Post|null>|null $nodes
 */
class Sub extends \Spawnia\Sailor\ObjectLike
{
    /**
     * @param array<int, \Spawnia\Sailor\Polymorphic\Operations\PolymorphicCommonSubChildren\Sub\Nodes\User|\Spawnia\Sailor\Polymorphic\Operations\PolymorphicCommonSubChildren\Sub\Nodes\Task|\Spawnia\Sailor\Polymorphic\Operations\PolymorphicCommonSubChildren\Sub\Nodes\Post|null>|null $nodes
     */
    public static function make($nodes = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.'): self
    {
        $instance = new self;

        $instance->__typename = 'Sub';
        if ($nodes !== self::UNDEFINED) {
            $instance->nodes = $nodes;
        }

        return $instance;
    }

    protected function converters(): array
    {
        static $converters;

        return $converters ??= [
            '__typename' => new \Spawnia\Sailor\Convert\NonNullConverter(new \Spawnia\Sailor\Convert\StringConverter),
            'nodes' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\ListConverter(new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\PolymorphicConverter([
            'User' => '\\Spawnia\\Sailor\\Polymorphic\\Operations\\PolymorphicCommonSubChildren\\Sub\\Nodes\\User',
            'Task' => '\\Spawnia\\Sailor\\Polymorphic\\Operations\\PolymorphicCommonSubChildren\\Sub\\Nodes\\Task',
            'Post' => '\\Spawnia\\Sailor\\Polymorphic\\Operations\\PolymorphicCommonSubChildren\\Sub\\Nodes\\Post',
        ])))),
        ];
    }

    public static function endpoint(): string
    {
        return 'polymorphic';
    }

    public static function config(): string
    {
        return \Safe\realpath(__DIR__ . '/../../../../sailor.php');
    }
}
