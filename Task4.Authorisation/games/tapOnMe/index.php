<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="styles/styles.css">
  <title>Tap on hamster</title>
</head>
<body>


  <div class="app">
    <div class="app__header">
      <h1 id="time-header">Время игры: <span id="time">5.0</span></h1>
      <h1 id="result-header" class="hide">Ваш результат: <span id="result"></span></h1>
    </div>
    <div class="app__content">
      <button class="btn" id="start">Начать</button>

      <div class="game" id="game"></div>
    </div>
    <div class="app__footer">
      <div class="input">
        <label for="game-time">Время игры, (сек)</label>
        <input type="number" id="game-time" min="5" step="1" max="20" value="5">
      </div>
      <div>
        <p>Ваш лучший результат: <span id="best-score" style="font-weight: bold">0</span> тап/сек</p>
      </div>
      <a href="../../main.php">
        <button class="btn-ext" style="margin-top: 0.9em">Выход из игры</button>
      </a>
    </div>
  </div>
  <div id="message-popup" class="hide">
    <div id="message-content">
      <p id="message-text">МОЛОДЕЦ!<br>Ты снова достиг этой вершины!</p>
      <button id="message-close">&#x1F60E;</button>
    </div>
  </div>

  

  <script src="script.js"></script>
</body>
</html>