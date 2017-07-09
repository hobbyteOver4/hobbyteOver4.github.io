<?php
	$file_result = ""
	
	if ($_FILES["file"]["error"] > 0)
	{
	$file_result .= "No File Uploaded or Invalid File ";
	$file_result .= "Error code： " . $_FILES["file"]["error"] . "<br>";
	} else {
	$file_result .=
	"Upload： " . $_FILES["file"]["name"] . "<br>" .
	"Type: " . $_FILES["file"]["type"] . "<br>" .
	"Temp file: " . $_FILES["file"]["temp_name"] . "<br>";
	
	move_uploaded_file($_FILES["file"]["temp_name"],
	"full path to server" . $_FILEs["file"]["name"];
	
	$file_result .= "File Upload Successful!";
	}
	