<?php 

$test = empty($_POST);


if ($test == true) {
	echo "тест не пройден";
	
}else{
	$pr = 0;
    if ($_POST[a1] == tr){$pr++;} else {$no++;}
    if ($_POST[a2] == tr){$pr++;} else {$no++;}
    if ($_POST[a3] == tr){$pr++;} else {$no++;}
    echo"<center> <strong>$pr</strong> баллов за тест </center>";
}


$q = $_GET['tesName'];
$files = file_get_contents($q); 
$fileDecode = json_decode($file, true); 

     
?>

<html>
<head>
	<title>Тестирование</title>
</head>
<body>
	<p>Решите тест:</p>
<form method="POST">
	
	<?php foreach ($fileDecode as  $val) { ?>
		
	<fieldset>

	 
	 
	  <legend><?= $label = $val['question'] ?></legend>
				
		<?php foreach ($val['input'] as $key => $k) { ?>
		 <input type="radio" name="<?php echo $k['name']?>" value="<?php echo $k['value']?>">
			<?= $k['Ответить'] ?>
			<?php } ?>
		
    </fieldset>
		
		<?php }?>
		
		<input type="submit" value="Проверить">
	
</form>
</body>
</html>
