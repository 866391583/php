<?php
class Person
{
    public $name;
    public $age;
    public static $count=10;
    public function say()
    {
        echo "name=> $this->name age=> $this->age";
        for($i=0;$i<15;$i++)
        self::$count++;
        self::staticfun();
    }
    public static function staticfun()
    {
        echo "hello world";
    }
}
$p=new Person();
$p->name="hello";
$p->age=20;
$p->say();
Person::staticfun();
echo "\n";
echo Person::$count;