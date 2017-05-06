<?php 
mysql_connect('localhost', 'root', '') or die("I can't connect");
	mysql_query("use liberent") or die("DB ERROR". mysql_error());

// if something was posted, start the process... 
if(isset($_POST['upload'])) 
{ 

// define the posted file into variables 
$name = $_FILES['picture']['name']; 
$tmp_name = $_FILES['picture']['tmp_name']; 
$type = $_FILES['picture']['type']; 
$size = $_FILES['picture']['size']; 

// get the width & height of the file (we don't need the other stuff) 
list($width, $height, $typeb, $attr) = getimagesize($tmp_name); 
     
// if width is over 600 px or height is over 500 px, kill it     
if($width>600 || $height>500) 
{ 
echo $name . "'s dimensions exceed the 600x500 pixel limit."; 
echo ' <a href="file.php">Click here</a> to try again. '; 
die(); 
} 

// if the mime type is anything other than what we specify below, kill it     
if(!( 
$type=='image/jpeg' || 
$type=='image/png' || 
$type=='image/gif' 
)) { 
echo $type .  " is not an acceptable format."; 
echo ' <a href="file.php">Click here</a> to try again. ' ; 
die(); 
} 

// if the file size is larger than 350 KB, kill it 
if($size>'350000') { 
echo $name . " is over 350KB. Please make it smaller."; 
echo ' <a href="file.php">Click here</a> to try again. ' ; 
die(); 
}
// if your server has magic quotes turned off, add slashes manually 
if(!get_magic_quotes_gpc()){ 
$name = addslashes($name); 
} 

// open up the file and extract the data/content from it 
$extract = fopen($tmp_name, 'r'); 
$content = fread($extract, $size); 
$content = addslashes($content); 
fclose($extract);  
// connect to the database 
include "connect.php"; 

// the query that will add this to the database 
$addfile = "INSERT INTO files (name, size, type, content ) ". 
           "VALUES ('$name', '$size', '$type', '$content')"; 

mysql_query($addfile) or die(mysql_error()); 

// get the last inserted ID if we're going to display this image next 
$inserted_fid = mysql_insert_id(); 

mysql_close();  

header( "Location: file.php"); 
}
// we still have to close the original IF statement. If there was nothing posted, kill the page. 
?>
<?php echo '
<div align="center"> 
    <strong><? echo $name; ?><br> 
    </strong><img name="<? echo $name; ?>" src="getpicture.php?fid=<? echo $inserted_fid; ?>" alt="Unable to view image #<? echo $inserted_fid; ?>"> 
    <br> 
    <a href="file.php">upload more images</a> 
</div> '
?> 
// we still have to close the original IF statement. If there was nothing posted, kill the page. 

