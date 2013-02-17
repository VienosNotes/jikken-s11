
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <title></title>
     </head><body>
<style type="text/css">
table, td, th { border: 2px #1b1b1b solid; }
     </style>
     
 <?php
     $fileName = "target.txt";
$file = fopen($fileName, "r");
print("query is ");
print($_GET['query']);
print("<table cellPadding=\"5\">");
while ($line = fgetcsv($file)) {
    $output = "";
    $flag = true;
    $output .= "<tr>");

foreach($line as $data) {
    
    if (preg_match("/". $_GET['query'] . "/i", $data) == 1) {
        $output .= ("<td bgcolor=\"#FF0000\">");
        $output .= ("<b><i>");
        $output .= ($data);
        $output .= ("</i></b>");
    } else {
        $flag = false;
    }
    $output .= ("</td>");
}
$output .= ("</tr>");
if ($flag) {
    print($output);
}

    
}
print("</table>");
fclose($file);
?>
</body>
</html>