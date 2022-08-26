<?php
//database details

$host = 'localhost';
$port = '5432';
$db = 'crud_study';
$user = 'postgres';
$password = 'nimitha3777';

$psql = "host = {$host} port = {$port} dbname={$db} user={$user} password = {$password}";
$db_connect = pg_connect($psql);
if($db_connect){
    echo "connected";
}else{
    echo "not connected";
}