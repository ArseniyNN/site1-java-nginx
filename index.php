<?php
$server_time = date('Y-m-d H:i:s');
$user_ip = $_SERVER['REMOTE_ADDR'] ?? 'Не определен';
$user_agent = $_SERVER['HTTP_USER_AGENT'] ?? 'Не определен';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сайт 1 (PHP) — Визитка студента</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Иван Петров</h1>
        <p>Студент 4 курса · Компьютерные сети · PHP Backend</p>
        <nav>
            <a href="#about">Обо мне</a>
            <a href="#skills">Навыки</a>
            <a href="#server-info">Серверная инфо (PHP)</a>
        </nav>
    </header>
    <main>
        <section id="about">
            <h2>Обо мне</h2>
            <p>Учусь на 4 курсе по направлению «Компьютерные сети». Данный сайт работает на серверном языке <strong>PHP</strong>.</p>
        </section>

        <section id="skills">
            <h2>Навыки</h2>
            <ul>
                <li>PHP (Server-Side Scripting) & Apache/Nginx</li>
                <li>Настройка LAN / VLAN / OSPF в Packet Tracer</li>
                <li>HTML / CSS / Web Security</li>
            </ul>
        </section>

        <section id="server-info">
            <h2>Динамические данные от PHP</h2>
            <div class="info-card">
                <p><strong>Текущее время сервера:</strong> <?= $server_time ?></p>
                <p><strong>Ваш IP-адрес:</strong> <?= htmlspecialchars($user_ip) ?></p>
                <p><strong>Ваш браузер:</strong> <?= htmlspecialchars($user_agent) ?></p>
                <p><strong>Версия PHP:</strong> <?= phpversion() ?></p>
            </div>
        </section>
    </main>
    <footer>© <?= date('Y') ?> Иван Петров · Сайт 1 (PHP Web Service)</footer>
</body>
</html>
