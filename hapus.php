<?php
include "function.php";

$id_blog = $_GET["id_blog"];

if (hapusblog($id_blog) > 0) {
  echo "<script> 
        alert('blog berhasil dihapus');
        document.location.href = 'admin.php' ;
        </script>";
} else
  echo "<script> 
        alert('blog gagal dihapus');
        document.location.href = 'admin.php' ;
        </script>";
