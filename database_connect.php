<?php
//connecting with database

$host = "localhost";//host declared
$port = "5432";//port declared
$dbname = "crud";//created database name in the shell
$user = "postgres";//username declared
$password = "nimitha3777";//password we created

//converting above data to string format

$sql_connection = "host = {$host} port = {$port} dbname = {$dbname} user = {$user} password = {$password}";
//above details converted to string format

//connecting db
//pg_connect is used for connecting the db with psql

$database_connection = pg_connect($sql_connection);

if($database_connection){
    echo "Connected";
}else{
    echo "Not Connected";
}