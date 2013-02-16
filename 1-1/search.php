
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <title></title>
     </head><body>
<style type="text/css">

table, td, th { border: 2px #2b2b2b solid; }

</style>

     <?php
     $fileName = "target.txt";
$file = fopen($fileName, "r");
print("hoge");
print("query is ");
print($_GET['query']);
print("<table>");
while ($line = fgetcsv($file)) {
    print("<tr>");
    foreach($line as $data) {

        if (preg_match("/". $_GET['query'] . "/i", $data) == 1) {
            print("<td bgcolor=\"#FF0000\">");
            print("<b><i>");
            print($data);
            print("</i></b>");
        } else {
            print("<td>");
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