<?php
require_once 'sess.php';
sess_start();

if(isset($_SESS['id'])) {
echo $_SESS['id'];
} else {
$_SESS['id'] = 42;
}



    


