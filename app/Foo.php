<?php


namespace App;


use Hyperf\Di\Annotation\Inject;

class Foo
{
    /**
     * @Inject(lazy=true)
     * @var Bar
     */
    public $bar;
}
