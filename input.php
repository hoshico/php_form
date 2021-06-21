<?php

if(!empty($_GET)){
  echo '<pre>';
  var_dump($_GET);
  echo '</pre>';
// スーパーグローバル変数
}
?>



<!DOCTYPE html>
<meta charset="UTF-8">
<head></head>
<body>
  
<form method="GET" action='input.php'>
氏名
<input type="text" name="your_name">
<br>
<input type="checkbox" name="sports[]" value="野球">野球
<input type="checkbox" name="sports[]" value="サッカー">サッカー
<input type="checkbox" name="sports[]" value="バスケ">バスケ
<input type="submit" value="送信">



</form>

</body>
</html>