<?php
$fh = fopen("target.txt", "a");
fwrite($fh, htmlspecialchars($_POST['content']));
fclose($fh);
  header("HTTP/1.1 301 Moved Permanently");
  header("Location: http://example.jp/");
?>