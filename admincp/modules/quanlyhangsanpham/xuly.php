<?php
      include('../../config/config.php');
      $tenhang = $_POST['tenhang'];
      $thutu = $_POST['thutu'];
     
      if(isset($_POST['themhsx']) )
      {
          $sql_them = "INSERT INTO hangsx (tenhang,thutu) VALUES ('$tenhang','$thutu')";
          mysqli_query($conn, $sql_them);
          header('Location:../../index.php?action=qlhsp');
      }else if(isset($_POST['suahsx']) ){
          $id = $_GET['id'];
          $sql_sua = "UPDATE  hangx SET tenhang='$tenhang' , thutu='$thutu' WHERE id_hangsx  = '$id'";
          header('Location:../../index.php?action=qlhsp');
      }else{
          $id = $_GET['id'];
          $sql_xoa = "DELETE FROM hangsx WHERE id_hangsx = '$id'";
          $sqli =  mysqli_query($conn, $sql_xoa);
          header('Location:../../index.php?action=qlhsp');
      }
?>