<?php
$_SESS = [];
function sess_start(){
    global $_SESS;
    if(isset($_COOKIE['sesName'])){  
        $info = file_get_contents('/OpenServer/userdata/temp/'.$_COOKIE['sesName']);
        $arr = explode("|", $info);
        unset($_SESS['0']);
        $_SESS[$arr['0']] = $arr['1'];
        
    }

}


    function shutdown(){
        global $_SESS;
        $key = key($_SESS);
        
        
        if(!isset($_COOKIE['sesName'])){
            $sesName = substr(md5(time()), 0, 16);
            setcookie('sesName', $sesName);
            file_put_contents('/OpenServer/userdata/temp/'.$sesName, $key."|".$_SESS['id']);
        }else{
            file_put_contents('/OpenServer/userdata/temp/'.$_COOKIE['sesName'], $key."|".$_SESS['id']);
        } 
    }
    register_shutdown_function('shutdown');
//./OpenServer/userdate/temp/


