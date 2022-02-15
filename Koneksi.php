<?php

$host = 'localhost';
$user = 'ilham';
$pass = '123456';
$db = 'Mahasiswa';

$conn = mysqli_connect($host, $user, $pass, $db);


$result = mysqli_query($conn, 'SELECT * FROM Data_Mahasiswa');

// mysqli_fetch_row(); mengembalikan data dalam bentuk nomor atau numerik
// mysqli_fetch_assoc(); mengembalikan data dalam nama field
// mysqli_fetch_array(); mengembalikan data dalam bentuk nomor atau numerik dan field

?>
