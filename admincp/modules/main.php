<div class="main">
    <?php
         if(isset($_GET['action']) && isset($_GET['query']))
          {
              $tam = $_GET['action'];
              $query= $_GET['query'];
          }else{
             $tam = '';
             $query='';
          }

        if($tam == 'qlhsp' && $query =='them')
		{
			include("quanlyhangsanpham/them.php");
            include("quanlyhangsanpham/lietke.php");
		}else if($tam=='qlhsp' && $query =='sua'){
            
        }
        
        else{
			
		}
    ?>
</div>
