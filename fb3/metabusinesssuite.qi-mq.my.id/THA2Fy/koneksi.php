<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$host="localhost"; 
$user="dragonstore"; 
$password="admin"; 
$database="dragonstore"; 
$conn=mysqli_connect($host,$user,$password,$database) or die(mysqli_error());
//cek koneksi 
if($conn){ 
//echo "berhasil koneksi"; 
}else{ 
echo "gagal koneksi"; 
} 
?>