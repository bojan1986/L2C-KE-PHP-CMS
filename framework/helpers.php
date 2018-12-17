<?php

function db_connect(){
    require dirname(__FILE__)."/../config/database.php";
    return mysqli_connect($database["host"], $database["user"],$database["pass"],$database["name"],$database["port"]);
};

function db_query($sql_string){
    return mysqli_query(db_connect(),$sql_string);
}

function db_select($sql_string){
    $result= [];
    $query= db_query($sql_string);
    
    while(($data=mysqli_fetch_object($query)) <> false){
        array_push($result, $data);
    };

    return $result;
};

?>