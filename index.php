<?php 
    // let title = 12
    // title
    // 'Мне' + title + 'лет'    
    // `Мне ${title} лет`

    // 'Мне' . $title . 'лет'
    // "Мне $title лет"
    $title = 'Главная';

    include('modules/head.php');

    $title .= ' Привет';

    echo $title;
?> 

    <div class="site">
        <div class="header wrapper">
            <div class="logo-and-name">
                <a class="logo"></a>
                <a class="name">go to <span class="color-top">top</span></a>
            </div>
            <div class="nav">
                <a href="" class="color-main-page">главная</a>
                <a href="pages/news1.php" class="color-news">новости</a>
                <a href="pages/news2.php" class="color-news">о компании</a>
                <a href="pages/contacts.php" class="color-news">контакты</a>
            </div>
            <div class="my-button">
                <div class="stick1"></div>
                <div class="stick2"></div>
                <div class="stick3"></div>
            </div>
        
        </div>
        <div class="window center-of-picture">
                <div class="par">
                    <h1><?php echo 'Привет мир!' ?></h1>
                    <p>GO TO TOP - ваш быстрый старт продаж</p>
                    <a href="pages/contacts.php">о нас</a>
                </div>
                <div class="arrow-right"></div>
                <div class="arrow-left"></div>
            <div class="slider">
                <div class="picture">
                    <!-- <div class="shadow"></div>    -->
                </div>
                <div class="picture"></div>
                    <!-- <div class="shadow"></div> -->
                <div class="picture"></div>
                    <!-- <div class="shadow"></div> -->
                <div class="picture"></div>
                    <!-- <div class="shadow"></div> -->
            </div>
        </div>

<?php
    $blocks = [
        0 => [
            'pic' => 'computer',
            'header' => 'создадим продающий сайт',
            'text' => 'Нету сайта? Не беда. Наши специалисты разработают оптимизированный продающий сайт для Вашей компании в минимальные сроки.'
        ],
        1 => [
            'pic' => 'networking2',
            'header' => 'выберем аудиторию',
            'text' => 'Составим аудиторию Ваших потенциальных клиентов для качественных продаж.'
        ],
        2 => [
            'pic' => 'networking',
            'header' => 'разовьем соц. сети',
            'text' => 'Для качественных продаж крайне необходимо вести активную деятельность в социалных сетях. Наши специалисты комплексно подойдут к вопросу привлечения клиентов через соц. сети.'
        ],
        3 => [
            'pic' => 'settings',
            'header' => 'настроим статистику',
            'text' => 'Настроим статистику сайта, будем анализироваться действия пользователей и улучшать функционал.'
        ]
    ];

    $allBlocks = '';
    foreach( $blocks as $key => $value ) {

        $allBlocks .= "
            <div class='options-items'>
                <div class='option-item-pic {$value['pic']}'></div>
                <h2>{$value['header']}</h2>
                <p>{$value['text']}</p>
            </div>
        ";

    };

    

?>

        <div class="wrapper">
            <div class="options fields">
                <?=$allBlocks?>
            </div>
            <div class="web-sites">
                <h2 class="headlines">последние работы</h2>
                <div class="sites fields">
                    <div class="site-pic site1"></div>
                    <div class="site-pic site2"></div>
                    <div class="site-pic site3"></div>
                </div>
            </div>
            <div class="statistic fields">
                <div class="statistic-item">
                    <p class="numbers">456</p>
                    <p class="about-numbers">счастливых клиентов</p>
                </div>
                <div class="statistic-item">
                    <p class="numbers">322</p>
                    <p class="about-numbers">проекта</p>
                </div>
                <div class="statistic-item">
                    <p class="numbers">290</p>
                    <p class="about-numbers">сайтов в топ</p>
                </div>
                <div class="statistic-item">
                    <p class="numbers">132</p>
                    <p class="about-numbers">сайта разработано</p>
                </div>    
            </div>
            <div class="news">
                <h2 class="headlines">новости</h2>
                <div class="fields">
                    <div class="news-items">
                        <div class="news-pic news1"></div>
                        <div class="padding-news">
                            <p class="cursive">1 января 2018</p>
                            <p>Мы начинаем этот год с наших новых разроботок в области маркетинга. Ждем Вас на наших тренингах и лекциях</p>
                            <p class="text-in-right">
                                <a href="pages/news1.php" class="link-details">Подробнее</a>
                            </p>
                        </div>
                    </div>
                    <div class="news-items">
                        <div class="news-pic news2"></div>
                        <div class="padding-news">
                            <p class="cursive">12 марта 2018</p>
                            <p>Мы работаем, вы отдыхаете! Теперь мы предоставляем полный спектр услуг по привлечению клиентов!</p>
                            <p class="text-in-right">
                                <a href="pages/news2.php" class="link-details">Подробнее</a>
                            </p>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="contact-us fields-in-contact-us">
                <p class="p-contact-us">ХОТИТЕ НАЧАТЬ ЗАРАБАТЫВАТЬ В ИНТЕРНЕТЕ? ПРОСТО СВЯЖИТЕСЬ С НАМИ.</p>
                <a class="contact-link" href="">СВЯЗАТЬСЯ</a>
            </div>
            <iframe src="https://yandex.ru/map-widget/v1/-/CCWt6E-B"  frameborder="1" allowfullscreen="true"></iframe>

<?php
    include('modules/footer.php');
?>