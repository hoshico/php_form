<?php

if(!empty($_POST)){
  echo '<pre>';
  var_dump($_POST);
  echo '</pre>';
// スーパーグローバル変数
}

$pageFlag =0;

if(!empty($_POST['btn-confirm'])){
  $pageFlag = 1;
}
if(!empty($_POST['btn-submit'])){
  $pageFlag = 2;
}

?>



<!DOCTYPE html>
<meta charset="UTF-8">
<head></head>
<body>



<?php if($pageFlag === 1) : ?>
<form method="POST" action='input.php'>
氏名
<?php echo $_POST['your_name'] ;?>
<br>
メールアドレス
<?php echo $_POST['email'] ;?>
<br>
<input type="submit" name="back" value="戻る">
<input type="submit" name="btn-submit" value="送信する">
<input type="hidden" name="your_name" value="<?php echo $_POST['your_name'] ;?>">
<input type="hidden" name="email" value="<?php echo $_POST['email'] ;?>">
</form>
<?php endif; ?>

<?php if($pageFlag === 2) : ?>
送信が完了しました
<?php endif; ?>




<?php if($pageFlag === 0) : ?>

<form method="POST" action='input.php'>
氏名
<input type="text" name="your_name" value="<?php if(!empty($_POST['your_name'])){echo $_POST['your_name'];}?>">
<br>
メールアドレス
<input type="email" name="email" value="<?php if(!empty($_POST['email'])){echo $_POST['email'];}?>">
<br>
<input type="submit" name="btn-confirm" value="確認する">

</form>
<?php endif; ?>

</body>
</html>