<?php

namespace Patterns\ObjectPool;

use stdClass;

class ObjectPool
{
    private array $pool;

    public function get()
    {
        if (empty($this->pool)) {
            return $this->create();
        }

        return array_pop($this->pool);
    }

    public function create(): stdClass
    {
        $object = new stdClass();
        $object->property = 1;
        return $object;
    }

    public function release(stdClass $object)
    {
        $this->pool[] = $object;
    }
}

$objectPool = new ObjectPool();

$graphicObject1 = $objectPool->get();

$objectPool->release($graphicObject1); // Верните объект обратно в пул

$graphicObject2 = $objectPool->get(); // Получите тот же объект снова

var_dump($graphicObject1).PHP_EOL;
var_dump($graphicObject2).PHP_EOL;
