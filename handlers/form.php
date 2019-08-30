<?php
    include($_SERVER['DOCUMENT_ROOT'] . '/modules/head.php');
    include_once($_SERVER['DOCUMENT_ROOT'] . '/modules/functions.php');

    $db = mysqli_connect('localhost', 'root', '', '26_04_2019_sokolova');
    mysqli_set_charset($db, 'utf8');

    $query = "INSERT INTO `users` (
                                    `name`, 
                                    `email`
                                    ) 
                            VALUES (
                                    '{$_GET['user-name']}', 
                                    '{$_GET['user-email']}'
                                    )";
    $query = "INSERT INTO `leads` (
                                    -- `service`, 
                                    `message`
                                    ) 
                            VALUES (
                                    -- '{$_GET['$value']}, 
                                    '{$_GET['user-text']}'
                                    )";

    mysqli_query($db, $query);

    // 1. host 
    // 2. user
    // 3. password 
    // 4. DB name

    // SQL structure query language
    // MongoDB PostgreSQL Oracle

    // MySQL - MariaDB

    // if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') {
    //     echo 'Пошел вон!';
    //     exit;
    // }

    // isset() - проверяет на существование элемента массива
    //             или самого масива
    // empty() - проверяет элементы массива или сам массив на пустоту

    if ( isset($_GET['service']) ) {
        foreach( $_GET['service'] as $key => $value ) {
            echo $value . '<br>';
        };
    }
    

    d($_GET);

    echo '<div class="fields-in-footer">';

    if ( !empty($_GET['user-name']) && !empty($_GET['user-email'])) {
        echo "
            Привет, &copy; {$_GET['user-name']}. 
            Мы отправим тебе сообщение на почту: {$_GET['user-email']}!
        ";
    } else {
        echo "
            Вы некорректно указали свои данные
        ";
    }

    echo '</div>';

    include($_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php');
?>

<!-- http://test/handlers/form.php?user-name=Aleksei&user-email=sokolov%40nordicbook.ru&user-text=Привет Мир -->