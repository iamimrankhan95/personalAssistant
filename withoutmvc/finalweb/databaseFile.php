<?php
global $connection;
    $server= '127.0.0.1:3306';
    $usernameServer= 'root';
    $passwordServer='';
    $dbname='miniProjectDB';
    $connection=mysqli_connect($server,$usernameServer,$passwordServer,$dbname);
    if($connection) {
    }else{
        die ('Connection Not Found'.mysqli_connect_error());
    }
