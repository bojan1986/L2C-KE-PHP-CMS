<?php

require dirname(__FILE__)."/../framework/helpers.php";

$users= db_query("Select * From users" );

while(($user=mysqli_fetch_object($users)) <> false){
    var_dump($user);
};

?>
