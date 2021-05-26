<?php


namespace App;


use Hyperf\Di\Annotation\Inject;

class Bar
{
    /**
     * @Inject(lazy=true)
     * @var Foo
     */
    public $foo;
}
