<<<<<<< HEAD
<?php
$tomege=$_REQUEST['tomege'];
$helyszama=$_REQUEST['helyszama'];
$darabszama=$_REQUEST['darabszama'];
$kategoriaja=$_REQUEST['kategoriaja'];
$parancs="INSERT INTO fogasnaplo (tomege,helyszama,darabszama,kategoriaja ) VALUES ('$tomege','$helyszama','$darabszama','$kategoriaja');"; 
$kapcsolat=mysqli_connect("127.0.0.1","root","","baratsagkupa");

mysqli_query($kapcsolat, $parancs);

mysqli_close($kapcsolat); 

header("Location:eredmeny.php");


?>
=======
<?php
$tomege=$_REQUEST['tomege'];
$helyszama=$_REQUEST['helyszama'];
$darabszama=$_REQUEST['darabszama'];
$kategoriaja=$_REQUEST['kategoriaja'];
$parancs="INSERT INTO fogasnaplo (tomege,helyszama,darabszama,kategoriaja ) VALUES ('$tomege','$helyszama','$darabszama','$kategoriaja');"; 
$kapcsolat=mysqli_connect("127.0.0.1","root","","baratsagkupa");

mysqli_query($kapcsolat, $parancs);

mysqli_close($kapcsolat); 

header("Location:eredmeny.php");


?>
>>>>>>> e346fa02c9bab8c7097fa65ff291f4e64cdb89b3
