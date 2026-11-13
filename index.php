<?php
// Устанавливаем часовой пояс
date_default_timezone_set('Asia/Almaty');

// Создаём форматтер даты на русском языке
$formatter = new IntlDateFormatter(
    'ru_RU',
    IntlDateFormatter::NONE,
    IntlDateFormatter::NONE,
    'Asia/Almaty',
    IntlDateFormatter::GREGORIAN,
    'MMMM'
);

// Получаем текущую дату
$day = date('d');
$mon = $formatter->format(time());
$year = date('Y');

// Получаем текущий час
$hour = (int) date('H');

// Определяем приветствие
$welcome = '';

if ($hour >= 0 && $hour < 6) {
    $welcome = 'Доброй ночи';
} elseif ($hour >= 6 && $hour < 12) {
    $welcome = 'Доброе утро';
} elseif ($hour >= 12 && $hour < 18) {
    $welcome = 'Добрый день';
} elseif ($hour >= 18 && $hour <= 23) {
    $welcome = 'Добрый вечер';
} else {
    $welcome = 'Доброй ночи';
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Моя лабораторная работа</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            padding: 30px;
        }

        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
        }

        h1 {
            color: #336699;
        }

        blockquote {
            background: #e8f2ff;
            padding: 15px;
            border-left: 5px solid #336699;
        }
    </style>
</head>

<body>
<div class="container">

    <h1><?= $welcome ?>, Гость!</h1>

    <h2>Текущая дата</h2>

    <blockquote>
        <?php
        echo 'Сегодня ', $day, ' число, ',
             $mon, ' месяц, ', $year, ' год.';
        ?>
    </blockquote>

    <h3>Зачем мы ходим в школу?</h3>

    <p>
        Мы ходим в школу, чтобы получать знания,
        развиваться, учиться новому и общаться с друзьями.
    </p>

    <hr>

    <p>
        © Все права защищены, <?= $year ?>
    </p>

</div>
</body>
</html>
