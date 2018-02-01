
<?php
$name = $_POST["name"];
$seibetu = $_POST["seibetu"];
$nenrei = $_POST["nenrei"];
//$evol = $_POST["figure1"];
$a =$_POST["figure1"];
$b =$_POST["figure2"];
$c =$_POST["figure3"];
$d =$_POST["figure4"];
$e =$_POST["figure5"];
$f =$_POST["figure6"];
$g =$_POST["figure7"];
$h =$_POST["figure8"];
$i =$_POST["figure9"];
$j =$_POST["figure10"];
$k =$_POST["figure11"];
$l =$_POST["figure12"];
$m =$_POST["figure13"];
$n =$_POST["figure14"];
$z =$a+$b+$c+$d+$e+$f+$g+$h+$i+$j+$k+$l+$m+$n;
//print ($a." + ".$b." + ".$c." + ".$d." + ".$e." + ".$f." + ".$g." + ".$h." + ".$i." + ".$j." + ".$k." + ".$l." + ".$m." + ".$n."  = ".$z."\n");


?>
<html>
<head>

<meta charset="utf-8">
<title>CVSに書き込み</title>
</head>
<body>
data.cvs に書き込みます。
</body>

<?php
//$str = date("Y-m-d")."杉山";
$str = $name.",".$seibetu.",".$nenrei;
    
$file = fopen("data/data.csv","a");	// ファイル読み込み
flock($file, LOCK_EX);			// ファイルロック
fwrite($file, $str."\n");       // "\n"は改行コード
flock($file, LOCK_UN);			// ファイルロック解除
fclose($file);  
    
$str2 = $z;
$file2 = fopen("data/data3.csv","w");	// ファイル読み込み
flock($file2, LOCK_EX);			// ファイルロック
fwrite($file2, $str2);       // "\n"は改行コード
flock($file2, LOCK_UN);			// ファイルロック解除
fclose($file2); 

?>



<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</html>




