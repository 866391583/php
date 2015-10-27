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
class A
{
    public $name="A Name";
    public function __construct()
    {
        echo "\nConstruct A...\n";
    }
}
class B extends A
{
    public static $sprop="static property";
    public function __construct()
    {
        echo "\nConstruct B...\n";
        echo $this->name;
        parent::__construct();
    }
    public static function sMethod()
    {
        echo self::$sprop;
    }
    public function say()
    {
        echo $this->name;
        echo self::$sprop;
        self::sMethod();
    }
}
$a=new B();
$a->say();
echo "\n*******************\n";
echo B::$sprop;
B::sMethod();
echo $a::$sprop;
echo $a::sMethod();
abstract class AA
{
    public abstract function say();
}
class BB extends AA
{
    public function say()
    {
        echo "BB...";
    }
}
$a=new BB();
$a->say();
interface AAA
{
    public function say();
    const cProp="hello";
}
class BBB implements AAA
{
    public function say()
    {
        echo " say in BBB...";
        echo self::bCProp;
    }
    const bCProp="world";
}
$a=new BBB();
$a->say();
echo <<<'NOW'
123456789\n0
!@#$%^&*()
qwertyuiopasdfghjklzxcvbnm,./
NOW;
