<?php 
class A
{
    public function test1()
    {
        return "test1";
    }
}
//--------------------------------
class B extends A
{
    public function test2()
    {
        return "test2";
    }
}
//-------------------------------
class C extends B
{
    public function test3()
    {
        return "test3";
    }
}
//--------------------------------
// Exo : créer un objet issu de la classe C et afficher les méthodes issu de la classe 
$c = new C;
echo '<pre>'; var_dump($c); echo '</pre>';
echo '<pre>'; var_dump(get_class_methods($c)); echo '</pre>';
echo $c->test1() . '<hr>';
echo $c->test2() . '<hr>';
echo $c->test3() . '<hr>';

/*
    Si C hérite de B
        ... alors C hérite de A...
*/

