<?php

try{
	$koneksi=new PDO("mysql:host=localhost;port=3306;dbname=crud;","root","123456789");
//	echo "koneksi berhasil";
}catch(PDOException $e){
	echo $e->getMessage();
}

//$table_create = $koneksi->prepare("create table sekolah (
//					id int(11) not null primary key auto_increment,
//					nama varchar (30) not null,
//					alamat text not null)");
//$result = $table_create->execute();
//echo "<pre>".print_r($result,1)."</pre>"; 
 
//$table_insert = $koneksi->prepare("insert into sekolah (nama,alamat) values ('SMKN 10 JAKARTA TIMUR','Jalan mayjen sutoyo')");
//$result = $table_insert->execute();
//echo"<pre>".print_r($result,1)."</pre>";
//if($result==1){
//	echo "berhasil";
//}else{
//	echo "gagal";
//}

//$table_delete = $koneksi->prepare("delete from sekolah");

//$result = $table_delete->execute();
//echo"<pre>".print_r($result,1)."</pre>";
//if($result==1){
//	echo "berhasil";
//}else {
//	echo "gagal";
//}

// $table_select = $koneksi->prepare("select * from sekolah");
// $table_select->execute();
// $data = $table_select->fetchAll();
// foreach($data as $key) {
// 	//echo "<pre>".print_r($key,1)."</pre>";
// 	echo $key['nama']." ".$key['alamat']."<br>";
// }

// $id = 7;
// $table_update = $koneksi->prepare("UPDATE sekolah SET nama = 'SMK N 22 JAKARTA', alamat='JALAN CONDET RAYA' where id=".$id."");

// $result = $table_update->execute();
// //echo"<pre>".print_r($result,1)."</pre>";
// if($result==1){
// 	echo "berhasil";
// }else {
// 	echo "gagal";
// }

$table_create = $koneksi->prepare("create database salma");
$result = $table_create->execute();
echo"<pre>".print_r($result,1)."</pre>";
if($result==1){
	echo "berhasil";
}else{
	echo "gagal";
}