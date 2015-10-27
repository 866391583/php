<?php
function __autoload($className)
{
    try{
    include $className.".php";
    echo "<<<$className";
    }catch(Exception $e){
        echo "abc";
    throw new Exception("need $className");
   }
}
$a=new AA();
$a->test();
try{
    $a=new AA();
}catch(Exception $e)
{
    echo $e->getMessage();
    echo "\n************************\n";
}
echo "\n&&&&&&&&&&&&&&&&&&&&&&&&&&&&\n";
class TestPrivate
{
    private function say()
    {
        echo "private function say";
    }
    public function run(TestPrivate $a)
    {
        $a->say();
    }
}
$t=new TestPrivate();
$t->run(new TestPrivate());
class AAA
{
    public function ftest()
    {
        echo "ftest";
    }
    public function run()
    {
        echo "***";
        $this->ftest();
    }
    public static function stest()
    {
        echo "static in AAA";
    }
    public static function srun()
    {
        echo "%%%";
        static::stest();
    }
}
class BBB extends AAA
{
    public function ftest()
    {
        echo "hello ,abc";
    }
    public static function stest()
    {
        echo "static in BBB";
    }
}
$a=new BBB();
$a->run();
$a::srun();