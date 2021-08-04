<?php
include "../models/data.php";
$db = new data();
$aksi = $_GET ['aksi'];
if($aksi=="insert_user"){
    $nama = $_POST['name'];
    $password = $_POST['password'];
$db -> insert_user($nama, $password);
header('location:../view/far.php');
}
else if($aksi == "login"){
    foreach($db->viewuser() as $a){
        if($a['nama']==$_POST['name'] && $a['password']==$_POST['password']){
            header('location:../view/far.php');
            break;
        }else if($_POST['name']=="admin" && $_POST['password']=="admin"){
            header('location:../view/admin/admin.php');
        } else {
            header('location:../view/login.php');
        }

    }
}
else if($aksi=="regis"){
    $nama = $_POST['name'];
    $password = $_POST['password'];
$db -> insert_user($nama, $password);
header('location:../index.php');
}

else if($aksi == "loginapi"){
    header('location:../view/far.php');
}

else if($aksi == "order"){
    $merek = $_POST['merek'];
    $ukuran = $_POST['ukuran'];
    $alamat = $_POST['alamat'];
    $db -> insert_order($merek, $ukuran, $alamat);
    header('location:../views/waiting.php');
}

else if ($aksi == "delete_user"){
    $no = $_GET['no'];
    $db-> delete_user ($no);
    header('location:../view/admin/admin.php');
}

else if ($aksi == "delete_order"){
    $no = $_GET['no'];
    $db-> delete_order ($no);
    header('location:../view/admin/admin.php');
}

else if($aksi == "update_user"){
    $nama = $_POST['name'];
    $password = $_POST['password'];
    $no = $_POST['nomor'];
    $db->update_user($no, $nama, $password);
    header('location:../view/admin/admin.php');
}

else if($aksi == "update_order"){
    $merek = $_POST['merek'];
    $no = $_POST['no'];
    $ukuran= $_POST['ukuran'];
    $alamat = $_POST['alamat'];
    $db->update_order($no, $merek, $ukuran, $alamat);
    header('location:../view/admin/admin.php');
}
?>