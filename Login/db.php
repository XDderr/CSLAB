<?php
$dbHost = 'aws-0-ap-northeast-1.pooler.supabase.com';
$dbUser = 'postgres.aakcjieichaiuacpmisx';
$dbPassword = '1170149Xp!rawr';

$conn = pg_connect("host=$dbHost port=5432 dbname=postgres user=$dbUser password=$dbPassword sslmode=require");

if(!$conn){
    //exit('Database connection failed.');
}
?>
