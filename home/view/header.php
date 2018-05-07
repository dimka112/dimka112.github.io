<!DOCTYPE html>
<html>
    <head>
        <title><?= $data['title'] ?></title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/view/style.css">
    </head>
    <body>
        <header class="header">
            <ul class="navigation">
                <li><a href="/">Главная</a></li>
                <?php foreach ($data['links'] as $link) { ?>
                    <li><a href="/page/<?= $link['id'] ?>"><?= $link['title'] ?></a></li>
                <?php } ?>
                    <li><a href="/registration">Регистрация</a></li>
            </ul>
        </header>
        
        <section class="content">