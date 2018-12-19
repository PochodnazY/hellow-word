<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="./assets/style.css">
</head>
<body>
  <header>
    <nav>
      <ul class="list">
        <li class="list__item" data-form="prostokat" data-inputs="2" data-ph="a b">prostokat</li>
        <li class="list__item" data-form="trojkat" data-inputs="2" data-ph="a h">trojkat</li>
        <li class="list__item" data-form="kolo" data-inputs="1" data-ph="r">kolo</li>
        <li class="list__item" data-form="pro" data-inputs="3" data-ph="a b h">prostopadloscian (V)</li>
        <li class="list__item" data-form="sze" data-inputs="1" data-ph="a">szescian (V)</li>
      </ul>
    </nav>
    <main>
      <div class="form__container">
        <form method="POST">
        </form>
        <div class="form__result">
          <span>Wynik obliczen to: </span>
          <span class="result">
            <?php
              if (isset($_SESSION['result']) && !empty($_SESSION['result'])) {
                echo $_SESSION['result'];
              } else if (isset($_SESSION['result'])) {
                echo 'Cos poszlo nie tak!';
              }
              $_SESSION['result'] = null;
            ?>
          </span>
        </div>
      </div>
    </main>
  </header>
  <script src="./assets/main.js"></script>
</body>
</html>