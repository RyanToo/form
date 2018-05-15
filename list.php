
<p>Список тестов:</p>
<?php
foreach (glob("tests/*.json") as $i => $filename) {
  $name = basename($filename);?>
<label ><a href="test.php?testname=<?= $name ?>">выбор теста</a> <?= ++$i, "</br>" ?> </label>
    
<?php }?>





