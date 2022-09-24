<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My_site_PHP</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="flex-container">
        <div class="header">
            <?php include 'logo.inc.php' ?>
            <?php include 'menu.inc.php' ?>
        </div>

        <div class="about_me">

            <h1> <?php echo $p ?></h1>

            <div class="data">
                <div class="myImg">
                    <?php include 'my_foto.inc.php' ?>
                </div>

                <div class="fullname">
                    <p>Меня зовут
                        <?php echo $name, ' ', $surname . '<br>';
                        echo 'Я из города', ' ', $city; ?>
                    </p>
                    <p>Мне <?php echo $age; ?> год </p>
                    <br>
                    <p>Мы научились создавать переменные</p>
                    <br>
                    <p>Изучили простые операции с ними</p>
                </div>
            </div>
            <div class="knowledge">
                <?php include 'knowledge.inc.php'; ?>
                <?php echo $a, ' ', $b, ' ', $c; ?> <br>
                <?php
                echo 'Создали 2 переменные а = 10 и b = 20';
                ?>
                <br>
                <?php
                $a = 10;
                $b = 20;
                $c = $a + $b;
                echo 'сумма чисел 10 и 20 равна '.' '. $c;
                 
                ?> 
                <br>
                <?php
                echo 'Создали переменную price = 15 и проверили находиться в интервале от 15 до 20'
                ?>
                <br>
                <?php
                echo $d;
                ?>
            </div>
            <br>
            <div class="article">
                <h2>Что может сделать PHP?</h2>
                <hr>
                <ul class="text">
                <li>PHP может генерировать динамическое содержимое страницы </li>
                <li>PHP может создавать, открывать, читать, записывать, удалять и закрывать файлы на сервере </li>
                <li>PHP может собирать данные формы </li>
                <li>PHP может отправлять и получать файлы cookie </li>
                <li>PHP может добавлять, удалять, изменять данные в вашей базе данных </li>
                <li>PHP может использоваться для управления доступом пользователей </li>
                <li>PHP может шифровать данные </li>
                <li>С PHP вы не ограничены выводом HTML. </li>
                <li>Вы можете выводить изображения, PDF-файлы и даже Flash-фильмы. </li>
                <li>Вы также можете выводить любой текст, например, XHTML и XML. </li>
                </ul>
                <hr>
    
            </div>
        </div>
        <?php include 'footer.inc.php' ?>
    </div>
        
</body>
</html>
