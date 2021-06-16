<?php

$conn = mysqli_connect("localhost", "root", "", "db_blog");

if (!$conn) {
  die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

function query($query)
{
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows  = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

//FUNCTION BLOG
function tambahblog($data)
{
  global $conn;
  //ambil data dari tiap form
  $judul          = htmlspecialchars($data["judul"]);
  $keterangan     = $data["keterangan"];
  $created_by     = htmlspecialchars($data["created_by"]);
  $created_date   = date('Y-m-d');


  //upload foto
  $foto = upload();
  if (!$foto) {
    return false;
  }

  $query = "INSERT INTO blog VALUES ('', '$judul','$keterangan','$created_by','$created_date', '$foto')";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function upload()
{

  $judulfile = $_FILES['foto']['name'];
  $ukuranfile = $_FILES['foto']['size'];
  $error = $_FILES['foto']['error'];
  $tmpname = $_FILES['foto']['tmp_name'];

  // cek apakah foto terupload

  if ($error === 4) {
    echo "<script>
				alert('pilih foto terlebih dahulu');
			 </script>";
    return false;
  }

  // cek apakah yang di upload adalah foto
  $ekstensivalid = ['jpg', 'jpeg', 'png'];
  $ekstensi = explode('.', $judulfile);
  $ekstensi = strtolower(end($ekstensi));
  if (!in_array($ekstensi, $ekstensivalid)) {
    echo "<script>
				alert('Yang Anda Upload Bukan foto');
			 </script>";
    return false;
  }

  // pembatasan ukuran file
  if ($ukuranfile > 2000000) {
    echo "<script>
				alert('Ukuran foto Terlalu Besar');
			 </script>";
    return false;
  }

  // lolos pengecekan dan foto siap di upload
  // membuat judul file baru
  $judulfilebaru = uniqid();
  $judulfilebaru .= ".";
  $judulfilebaru .= $ekstensi;

  move_uploaded_file($tmpname, 'img/' . $judulfilebaru);

  return $judulfilebaru;
}

function hapusblog($id_blog)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM blog WHERE id_blog = '$id_blog'");
  return mysqli_affected_rows($conn);
}

function editblog($data)
{
  global $conn;
  //ambil data dari tiap form
  $id_blog      = $data['id_blog'];
  $judul        = htmlspecialchars($data["judul"]);
  $keterangan   = $data["keterangan"];
  $foto_lama    = htmlspecialchars($data["foto_lama"]);
  $created_by   = htmlspecialchars($data["created_by"]);

  //cek apakah user memilih foto baru atau tidak
  if ($_FILES['foto']['error'] === 4) {
    $foto = $foto_lama;
  } else {
    $foto = upload();
  }

  $query = "UPDATE blog SET judul ='$judul', keterangan='$keterangan', created_by='$created_by', foto='$foto' WHERE id_blog = '$id_blog' ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}
