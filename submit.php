<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success!</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

    </style>
</head>
<body>

<?php
// проверка demands
$demandDirectory = '/home/kat/Recoursia/test/demands';
if (!file_exists($demandDirectory)) {
    if (!mkdir($demandDirectory, 0600, true)) {
        echo 'Error';
    }
}

// генерация имени файла *.csv
$filename = $demandDirectory . '/demands-' . date('Ymd') . '.csv';

// получение данных из формы на сайте
if (isset($_POST['name'])) {
    $name = htmlspecialchars($_POST['name']);
} else {
    $name = '';
}

if (isset($_POST['phone'])) {
    $phone = htmlspecialchars($_POST['phone']);
} else {
    $phone = '';
}

$date = date('Y-m-d H:i:s');
$ip = $_SERVER['REMOTE_ADDR'];

if (isset($_SERVER['HTTP_REFERER'])) {
    $referer = $_SERVER['HTTP_REFERER'];
} else {
    $referer = '';
}

// запись данных в файл csv
$data = [$name, $phone, $date, $ip, $referer];
$fp = fopen($filename, 'a'); 

if ($fp) {
    fputcsv($fp, $data);
    fclose($fp);
    echo '<button class="button">Заявка успешно отправлена!</button>';
} else {
    echo 'Error';
}
?>

</body>
</html>