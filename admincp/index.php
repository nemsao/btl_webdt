<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/responsive.css">
</head>
<body>
        <div class="grid wide contain">
              <div class="row">
                      <div class="col c-12 l-12 m-12">
                            <h1>SmartPhone Store - Admin</h1>
                            <?php
                                 include('config/config.php');
                                 include("modules/header.php");
                                 include("modules/menu.php");
                                 include("modules/main.php");
                                 include("modules/footer.php");
                            ?>
                      </div>
              </div>
        </div>
</body>
</html>