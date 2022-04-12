<?php
$arr = [];

    function foo(){
        global $arr;
        $arr['id'] = 1;
    }


foo();
echo $arr['id'];


