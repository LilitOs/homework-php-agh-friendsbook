<html>
<head>
<title>Hello World</title>
</head>
<body>
<?php
include('header.html');
?>
<form action="index.php" method="post">
Name: <input type="text" name="name">
<input type="submit">
</form>
<?php
echo  "<h1>Hello: </h1>";

echo '<ul>';

if (isset($_POST['name'])) {
 $name = $_POST['name'];
}
$filename = "friends.txt";
$content = file_get_contents($filename);
$names = explode('/\r\n|\r|\n/', $content);
foreach($names as $nom){
	//echo '<li>'
	echo $nom ;
	echo '<br>';
	//echo '</li>';
}

$file = fopen( $filename, "a+" );
if( $file != false ) {
 echo "<b><li>$name</li></b><br>";
 fwrite( $file, "$name\n" );
 fclose( $file );
}
echo '</ul>';
include('footer.html');
?>
</body>
</html>