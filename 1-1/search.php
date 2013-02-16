
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <title></title>
     </head><body>
     <?php
     $fileName = "target.txt";
$file = fopen($fileName, "r");
print("hoge");
$count = 0;
while ($line = fgetcsv($file)) {
    print($count++);
    foreach($line as $data) {
        if (preg_match($_GET['query'], $data) == 1) {
            print("<b><i>");
            print($str);
            print("</i></b>");
        } else {
            print($str);
        }
    }
}
    fclose($file);
    ?>
  </body>
</html>