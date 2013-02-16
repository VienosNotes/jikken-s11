
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
print("query is " + $_GET['query']);
print("<table>");
while ($line = fgetcsv($file)) {
    print("<tr>");
    foreach($line as $data) {
        print("<td>");
        if (preg_match($_GET['query'], $data) == 1) {
            print("<b><i>");
            print($data);
            print("</i></b>");
        } else {
            print($data);
        }
        print("</td>");
    }
    print("</tr>");
    
}
print("</table>");
fclose($file);
?>
</body>
</html>