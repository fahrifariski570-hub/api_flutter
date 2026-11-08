<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET,POST,OPTIONS");
header("Access-Control-Allow-Headers:X-Requested-With,Content-Type");
header("Content-Type:application/json; charset=UTF-8");

$conn = new mysqli('localhost','root','','api_pari');
$nama_produk=$_POST['nama_produk'];
$harga_produk=$_POST['harga_produk'];
$query=mysqli_query($conn,"insert into tb_produk set nama_produk = '$nama_produk', harga_produk='$harga_produk'");
if($query){
    echo json_encode([
        'pesan'=>'sukses'
    ]);
}else{
    echo json_encode([
        'pesan'=>'gagal'
    ]);
}
?>