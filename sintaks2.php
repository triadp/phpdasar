<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
   <?php
   $nama = "tria";
   echo "<h1> Nama saya $nama </h1>";
   ?>
   <?php $nama="tria";?>
   <h1> Nama Saya <?php echo $nama;?></h1>
   <h1> Nama Saya <?= $nama;?></h1>
</body>
</html>