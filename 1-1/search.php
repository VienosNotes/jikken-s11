
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title></title>
  </head><body>
    <?php
    $fileName = "target.txt";
    $file = fopen($fileName, "r");
 
    while (!feof($file)) {
      $str = fgets($file);
      if (preg_match($_GET['query'], $str) == 1) {
          print($str);
      }
    }
 
    fclose($file);
    ?>
  </body>
</html>