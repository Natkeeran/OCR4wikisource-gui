<?php

function createConfigFile($i_filePath, $i_pdfURL, $i_numOfColumns)
{
	$configFilePath = $i_filePath;
	$configFile = fopen($configFilePath, "w") or die("Unable to open file!");
	$line1 = "[settings]\n\n";
	fwrite($configFile, $line1);
	$line2 = "file_url = " . $i_pdfURL . "\n";
	fwrite($configFile, $line2);
	$line3 = "columns = ". $i_numOfColumns . "\n";
	fwrite($configFile, $line3);
	$line4 = "wiki_username = Natkeeran\n";
	fwrite($configFile, $line4);
	$line5 = "wiki_password = testing\n";
	fwrite($configFile, $line5);
	$line6 = "wikisource_language_code = ta\n";
	fwrite($configFile, $line6);
	$line7 = "keep_temp_folder_in_google_drive = yes\n";
	fwrite($configFile, $line7);
	$line8 = "edit_summary = Tamil OCR text from Google\n";
	fwrite($configFile, $line8);
	fclose($configFile);		
}

?>
