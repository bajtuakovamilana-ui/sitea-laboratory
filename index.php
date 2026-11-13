
<?php
date_default_timezone_set('Asia/Almaty');

// Получаем текущую дату
$day = date('d');

$formatter = new IntlDateFormatter(
    'ru_RU',
    IntlDateFormatter::NONE,
    IntlDateFormatter::NONE,
    'Asia/Almaty',
    IntlDateFormatter::GREGORIAN,
    'MMMM'
);

$mon = $formatter->format(time());
$year = date('Y');

// Получаем текущий час
$hour = (int) date('H');

// Определяем приветствие
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
</head>
<body>

<h1><?= $welcome ?>, Гость!</h1>

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

<p>© Все права защищены, <?= $year ?></p>

</body>
</html>
