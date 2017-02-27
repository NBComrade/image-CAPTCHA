<?php 
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
  if (!isset($_SESSION['rangStr'])) {
    $output = "Включите изображения!";
  }else{
    if($_SESSION['rangStr'] == strtolower($_POST['key']))
      $output ='Все верно!';
    else
      $output ='Вы ошиблись!';
  }
}
?>
<!DOCTYPE HTML>
<html>

<head>
  <meta charset="utf-8" />
  <title>Регистрация</title>
</head>

<body>
  <h1>Регистрация</h1>
  <form action="" method="post">
    <div>
      <img src="noise-picture.php">
    </div>
    <div>
      <label>Введите то что вы видете на картинке</label>
      <input type="text" name="key" size="6">
    </div>
    <input type="submit" value="Подтвердить">
  </form>
  <?php 
    echo $output;
  ?>
</body>

</html>