<h3>liet ke tat ca san pham</h3>
<style>
      table,th,td,tr{
            border: 1px solid black;
            border-collapse : collapse;
      }
</style>
<?php
      $sql_lk = "SELECT * FROM hangsx ";
      $mysql = mysqli_query($conn , $sql_lk);
?>
<table style="width :100%">
      <tr>
            <th>ID</th>
            <th>Hang San Xuat</th>
            <th>Tuyd chon</th>
      </tr>
      <?php
      $i=0;
      while ($row = mysqli_fetch_array($mysql)){
            $i++;
      ?>
      <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row['tenhang'] ?></td>
            <td><a href="modules/quanlyhangsanpham/xuly.php?query=sua&id=<?php echo $row['id_hangsx'] ?>">Sua</a> | <a href="modules/quanlyhangsanpham/xuly.php?query=xoa&id=<?php echo $row['id_hangsx'] ?>">Xoa</a></td>
      </tr>
      
      <?php
         }
      ?>
</table>