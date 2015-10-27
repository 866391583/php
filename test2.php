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
//echo E;
function abc($n)
{
    if($n<=1)
        return 1;
    else
        return $n+abc($n-1);
}
echo "\n".abc(10);
$abc="hello";
function globalAndStatic()
{
    global $abc;
    echo $abc;
}
globalAndStatic();
function abc2($n)
{
    static $sum=0;
    if($n<1)
        return ;
    else
    {
        $sum+=$n;
        abc2($n-1);
    }
    return $sum;
}
echo abc2(10);