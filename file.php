<?php require_once("fileupload.php"); ?>
<html>
<head>
</head>
<body>
Upload your file to the database...
<form action="fileupload.php" method="post" enctype="multipart/form-data" name="uploadform">
        <input type="hidden" name="MAX_FILE_SIZE" value="350000">
        <input name="picture" type="file" id="picture" size="50">
	<input name="upload" type="submit" id="upload" value="Upload Picture!">
	<img src="getpicture.php?fid=1">
</form>
</body>
</html>