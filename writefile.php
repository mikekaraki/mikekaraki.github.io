<html>
 <body>   
  <?php
    SaveFile("textfile.txt");
function SaveFile($filename)
{
$myfile = fopen(filename, "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);
}
  ?>   
 </body>
</html>
