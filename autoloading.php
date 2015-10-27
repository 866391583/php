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