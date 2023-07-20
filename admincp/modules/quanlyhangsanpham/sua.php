<h1>sua tat ca san pham</h1>
<style>
       table,tr,td{
            border:1px solid black;
            border-collapse: collapse;
       }
</style>

<table style="width : 100% ; border:1px solid black">
  <form  action="modules/quanlyhangsanpham/xuly.php?" method="POST" >
     <tr>
          <td colspan="2">Them hang dien thoai dau tien</td>
     </tr>
     <tr>
         <td>tên hang :</td>
         <td><input type="text" name="tenhang"></td>
     </tr>
     <tr>
          <td>thứ tự :</td>
          <td><input type="text" name="thutu"></td>
     </tr>
     <tr>
         <td colspan="2"><input type="submit" name="suahsx" value="Sửa hãng sản xuất"></td>
     </tr>
    </form>
</table>