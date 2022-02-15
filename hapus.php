<?php
require "function.php";

//agar tidak bisa dihapus secara pengetikan manual
if (!isset($_GET['id'])){
    header("location: index.php");
    exit;
}

$id = $_GET['id'];
if(hapus($id) > 0)
{
    echo 
    "<script>
    alert('data berhasil dihapus');
    document.location.href = 'index.php';
    </script>";
  } else {
    echo
    "<script>
    alert('data gagal dihapus');
    </script>";
}