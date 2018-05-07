<?php
  $json_str = file_get_contents('php://input'); //接收request的body
  $json_obj = json_decode($json_str); //將符合json格式規格的字串轉換成json格式
  
  //建立一個log.txt文字檔
  $myfile = fopen("log.txt", "w+") or die("Unable to open this file!"); //檔案存取狀況檢查
  fwrite($myfile, "\xEF\xBB\xBF".$json_str); //在字串前面加上\xEF\xBB\xBF轉成tUTF8的格式
?>
