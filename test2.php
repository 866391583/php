<?php
//echo 'hello world';
const E=2.71828;
class Obj
{
    public $name;
    public $age;
    const PI=3.141592653;
    public function __construct($n,$a)
    {
        $this->name=$n;
        $this->age=$a;
    }
    public function say()
    {
        echo <<<HERE
        name:$this->name
        age:$this->age
HERE;
    }
    public function __destruct()
    {
        //echo self::PI;
        echo "\n".self::PI."destruct...";
    } 
}
$obj=new Obj("hello",20);
$obj->say();
echo Obj::PI;
echo "\t".E;