<?php

declare(strict_types=1);

namespace App\Flyweight;

class TreeTypeFactory
{
    /**
     * @var TreeType[]
     */
    private static array $treeTypes = [];

    public static function getTreeType(string $name, string $color, string $texture): TreeType
    {
        $key = "{$name}_{$color}_{$texture}";

        if (!isset(self::$treeTypes[$key])) {
            self::$treeTypes[$key] = new TreeType($name, $color, $texture);
        }

        return self::$treeTypes[$key];
    }
}
