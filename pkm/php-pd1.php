<?php
 class a{
    var $name=array();

    function x($n){
        for($i=0;$i<$n;$i++){
$this->name['name'.$i]="royaso";
$this->name['nameii'.$i]="iiroyaso";
    }
    }
}
class b extends a{
    function x($n){
        parent::x($n+10);
    }
}
$x=new b;
$x->x(5);
var_dump($x->name);
