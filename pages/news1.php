<?php
    $title = 'Главная новость';
    include('../modules/head.php');
?>
    <div class="header wrapper">
        <div class="logo-and-name">
            <a class="logo"></a>
            <a class="name">go to <span class="color-top">top</span></a>
        </div>
        <div class="nav">
            <a href="../index.php" class="color-main-page">главная</a>
            <a href="news1.php" class="color-news">новости</a>
            <a href="news2.php" class="color-news">о компании</a>
            <a href="contacts.php" class="color-news">контакты</a>
        </div>
        <div class="my-button">
            <div class="stick1"></div>
            <div class="stick2"></div>
            <div class="stick3"></div>
        </div>
    </div>
    <div class="picture-news1 center-of-picture">
        <div class="shadow">
             <h1>новые разработки и новые трененги</h1>
             <p>GO TO TOP - новости</p>
        </div>
    </div>
    <div class="wrapper">
        <div class="developments">
            <h2 class="headlines">новые разработки и новые трененги</h2>
            <div class="fields">
                <div>
                    <p>Компания маркетинговых инноваций <strong>GO TO TOP</strong> внедряет и сопровождает целый комплекс маркетинговых бизнес-процессов, встраивая Маркетинговую систему продаж для компаний, желающих получить качественно новые результаты:</p>
                    <p><b>Капитализацию маркетинга.</b><br>
                        В ваших руках актив успеха, система, учитывающая создание качественного продукта и его максимальные продажи с наибольшей выгодой.</p>
                    <p><b>Сокращение человеческого фактора</b><br>
                        На вашу деятельность больше не повлияет уход сотрудников, особенности бизнес партнеров, смена управляющего состава или исполнителей.</p>
                    <p><b>Экономию маркетинговых бюджетов.</b><br>
                        Средства, вложенные в маркетинг и рекламу, имеют накопительный эффект, а накопленный опыт позволяет исключить риски и сократить ненужные траты.</p> 
                    <p><b>Мощное конкурентное преимущество.</b><br>
                        Пока другие ломают голову над тем, как выжить в кризис, вы уверенно движетесь вперед.
                    <p><b>Стабильность и возможность планировать собственное развитие.</b></p>
                </div>
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
                            <a href="news1.php" class="link-details">Подробнее</a>
                        </p>
                    </div class="padding-news">
                </div>
                <div class="news-items">
                    <div class="news-pic news2"></div>
                    <div>
                        <p class="cursive">12 марта 2018</p>
                        <p>Мы работаем, вы отдыхаете! Теперь мы предоставляем полный спектр услуг по привлечению клиентов!</p>
                        <p class="text-in-right">
                            <a href="news2.php" class="link-details">Подробнее</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-us fields-in-contact-us">
            <p class="p-contact-us">ХОТИТЕ НАЧАТЬ ЗАРАБАТЫВАТЬ В ИНТЕРНЕТЕ? ПРОСТО СВЯЖИТЕСЬ С НАМИ.</p>
            <a class="contact-link" href="">СВЯЗАТЬСЯ</a>
        </div>


<?php
    include('../modules/footer.php');
?>