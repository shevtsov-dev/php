var $start = document.querySelector('#start');
var $game = document.querySelector('#game');
var $time = document.querySelector('#time');
var $result = document.querySelector('#result');
var $timeHeader = document.querySelector('#time-header');
var $resultHeader = document.querySelector('#result-header');
var $gameTime = document.querySelector('#game-time');
var $bestScore = document.querySelector('#best-score');
var $messagePopup = document.querySelector('#message-popup');
var $messageText = document.querySelector('#message-text');
var $messageEmoji = document.querySelector('#message-emoji');
var $messageClose = document.querySelector('#message-close');

var score = 0;
var isGameStarted = false;
var currentScore = 0;

// Получаем сохраненный лучший коэффициент из localStorage
var bestScore = localStorage.getItem('bestScore') || 0;
$bestScore.textContent = bestScore;

$start.addEventListener('click', startGame);
$game.addEventListener('click', handleBoxClick);
$gameTime.addEventListener('input', setGameTime);

function startGame() {
    score = 0;
    setGameTime();
    $gameTime.setAttribute('disabled', 'true');
    isGameStarted = true;
    $game.style.backgroundColor = '#fff';
    hide($start);

    var interval = setInterval(function () {
        var time = parseFloat($time.textContent);
        if (time <= 0) {
            clearInterval(interval);
            endGame();
        } else {
            $time.textContent = (time - 0.1).toFixed(1);
        }
    }, 100);

    renderBox();
}

function show ($el) {
    $el.classList.remove('hide');
}

function hide ($el) {
    $el.classList.add('hide');
}

function setGameScore() {
    $result.textContent = score.toString();
    var gameTime = parseFloat($gameTime.value);
    currentScore = (score / gameTime).toFixed(1); // Вычисляем коэффициент тапов на секунду

    // Сравниваем текущий коэффициент с лучшим результатом
    if (currentScore > bestScore) {
        bestScore = currentScore;
        localStorage.setItem('bestScore', bestScore); // Сохраняем лучший коэффициент в localStorage
        $bestScore.textContent = bestScore; // Обновляем отображение лучшего коэффициента
    }
}

function setGameTime() {
    var time = +$gameTime.value;
    if (time > 20) {
        $gameTime.value = 20;
        time = 20;
    }
    $time.textContent = time.toFixed(1);
    show($timeHeader);
    hide($resultHeader);
}

function endGame() {
    isGameStarted = false;
    setGameScore();
    $gameTime.removeAttribute('disabled');
    show($start);
    $game.innerHTML = '';
    $game.style.backgroundColor = '#ccc';
    hide($timeHeader);
    show($resultHeader);

    if (bestScore > currentScore) {
        showMessagePopup(getRandomPhrase(), "😉");
    } else showMessagePopup("МОЛОДЕЦ!<br>Это твой РЕКОРД!", "😎");
}

function showMessagePopup(message, emoji) {
    $messageText.innerHTML = message;
    $messagePopup.classList.remove('hide');
    $messageEmoji.textContent = emoji;
}

$messageClose.addEventListener('click', function () {
    $messagePopup.classList.add('hide');
});

function handleBoxClick(event) {
    if (!isGameStarted) {
        return;
    }

    if (event.target.dataset.box) {
        score++;
        renderBox();
    }
}

function renderBox() {
    $game.innerHTML = '';
    var box = document.createElement('div');
    var boxSize = getRandom(30, 100);
    var gameSize = $game.getBoundingClientRect();
    var maxTop = gameSize.height - boxSize;
    var maxLeft = gameSize.width - boxSize;
    var randomColor = `#${Math.floor(Math.random() * 0xFFFFFF).toString(16).padEnd(6, '0')}`;

    box.style.height = box.style.width = boxSize + 'px';
    box.style.position = 'absolute';
    box.style.backgroundColor = randomColor;
    box.style.top = getRandom(0, maxTop) + 'px';
    box.style.left = getRandom(0, maxLeft) + 'px';
    box.style.cursor = 'pointer';
    box.setAttribute('data-box', 'true')
    $game.insertAdjacentElement('afterbegin', box);
}

function getRandom(min, max) {
    return Math.floor(Math.random() * (max - min) + min);
}

function getRandomPhrase() {
    var phrases = [
        "Ты точно можешь превзойти себя!",
        "Не останавливайся, ты точно можешь лучше!",
        "Ты точно сможешь достичь большего!",
        "Уверен, ты можешь сделать это ещё лучше!",
        "Поверь, ты точно справишься лучше!",
        "Ты можешь показать всем, на что способен!",
        "Ты можешь стать ещё лучше, чем вчера!",
        "Не сомневайся, ты точно достоин большего успеха!",
        "Ты точно заслуживаешь самых высоких результатов!",
        "Твои возможности безграничны, ты можешь достичь большего!"
    ];

    var randomIndex = Math.floor(Math.random() * phrases.length);
    return phrases[randomIndex];
}
