<?php
$sorce = $_POST["sorce"];
$target = $_POST["target"];
//取得使用者鍵入路徑
$file = fopen("xcopy.bat","w+");
echo fwrite($file,'xcopy '.$sorce.' '.$target.'/s /d /y');
fclose($file);
//改寫批次檔
header('Location: /dashboard/index.html');
//返回首頁
?>