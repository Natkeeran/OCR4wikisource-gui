<?php
error_reporting(0);
require  "createConfig.php";

$pdfURL = $_POST['pdfUrl'];
$numOfColumns = $_POST['numOfColumns'];

//echo "PDF URL " . $pdfURL . " ";
//echo "Number of Columns " . $numOfColumns . " ";
$configPath = "/usr/local/bin/config.ini";

createConfigFile("/usr/local/bin/config.ini", $pdfURL, $numOfColumns);


//$command = escapeshellcmd('python /usr/local/bin/do_ocr.py');
$command = "python /usr/local/bin/do_ocr.py";
$output = shell_exec($command);
//echo $output;

echo basename($pdfURL);

?>
