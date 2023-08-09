<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Glassmorphism login Form Tutorial in html css</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <?php
      $files = glob(Util::$rootPath . '/css/*.css');
      foreach ($files as $file){
        $file=str_replace('/var/www/html','',$file);
    ?>
        <link rel="stylesheet" href=<?=$file?>>
    <?php
      }
    ?>
</head>
<body>
    <?php require_once $page ?>
    <?php ?>
</body>
</html>