<?php
    $title = 'Контакты';
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
    <div class="picture-contacts center-of-picture">
        <div class="shadow">
            <h1>GO TO TOP</h1>
            <p>GO TO TOP - Ваш быстрый старт продаж</p>
            <p>-контакты-</p>
        </div>
    </div>
    <div class="wrapper">
        <div class="developments">
            <h2 class="headlines">о компании</h2>
            <div class="fields">
                <div>
                    <p>Стимулирование и увеличение продаж – именно такую конечную цель мы ставим себе при разработке стратегии продвижения сайтов в поисковых системах.</p>
                    <p>В рамках этого подхода мы решаем следующие задачи:</p> 
                    <p><i>подбор качественных ключевых запросов;<br>
                        увеличение видимости сайта в поисковых системах;<br>
                        продвижение сайта в ТОП-10 по стратегически важным ключевым запросам;<br>
                        увеличение естественного целевого трафика из поисковых систем;<br>
                        увеличение конверсии на посадочных страницах.</i>
                    </p>  
                    <p>Основным в разработке стратегии продвижения является создание индивидуального решения, максимально соответствующего технологическим возможностям и внешним факторам вашего сайта.</p>  
                    <p>В управлении проектами мы придерживаемся строгого планирования и контроля задач. Технология работы по каждому проекту доступна клиентам в нашей информационной системе.</p>
                    <p>Мы считаем, что добиться успеха можно только при условии полного понимания всех ключевых элементов проекта. Поэтому мы всегда на связи со своими клиентами, регулярные встречи и конструктивные диалоги – приоритетный элемент нашего сотрудничества.</p>
                    <p>Стратегия, основанная на взаимовыгодном партнерстве, очень важна для нас. Прозрачность финансовых расчетов и их простота создает доверительные и долгосрочные отношения.</p>
                    <p>Мы не работаем со сложными системами оплаты с обеспечительными платежами, предоплатой и последующими перерасчетами. Все расчеты производятся в конце месяца по факту выполненных работ и на основании фактически достигнутых показателей.</p>
                </div>
            </div>
        </div>
        <div class="news">
            <h2 class="headlines">свяжитесь с нами</h2>
            <div class="fields">
                <div class="news-items">
                    <div class="news-pic woman"></div>
                    <div class="padding-news">
                        <div class="break">
                            <p class="cursive"><b>Елена Белкина</b></p>
                            <p class="blue">директр</p>
                        </div>
                        <div>
                            <p>по вопросам сотрудничества</p>
                            <p class="blue">belkina@gototop.ru</p>
                        </div>
                    </div>
                </div>
                <div class="news-items">
                    <div class="news-pic man"></div>
                    <div class="padding-news">
                        <div class="break">
                            <p class="cursive"><b>Дмитрий Рогозин</b></p>
                            <p class="blue">директр отдела продаж </p>
                        </div>
                        <div>
                            <p>по вопросам сотрудничества</p>
                            <p class="blue">rogozin@gototop.ru</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="forms fields">
            <div class="contacts-in-froms">
                <div class="contacts-item flex">
                    <div class="contacts-icon1"></div>
                    <div>
                        <p><b>Адрес:</b></p>
                        <p>Москва Большая Спасская 12</p>
                    </div>
                </div>
                <div class="contacts-item flex">
                    <div class="contacts-icon2"></div>
                    <div>
                        <p><b>Телефон:</b></p>
                        <p>8(495)626-46-00</p>
                    </div>
                </div>
                <div class="contacts-item flex">
                    <div class="contacts-icon3"></div>
                    <div>
                        <p><b>E-mail:</b></p>
                        <p>info@gototop.ru</p>
                    </div>
                </div>
            </div>
            <div class="form">
                <h2>Напишите нам:</h2>
                <form method="GET" action="/handlers/form.php">
                    <input type="text" name="user-name" placeholder="ФИО">
                    <input type="email" name="user-email" placeholder="Email">
                    <!-- радиокнопки -->
                    <div class="radio">
                        Выберите услугу:<br>
                        <label>
                            <input type="checkbox" name="service[]" value="Продвижение сайта"> Продвижение сайта <br> 
                        </label>
                        <label>
                            <input type="checkbox" name="service[]" value="Дизайн сайта"> Дизайн сайта <br> 
                        </label>
                        <label>
                            <input type="checkbox" name="service[]" value="Проектирование БД"> Проектирование БД 
                        </label>
                    </div>
                    <textarea name="user-text" placeholder="Ваше Сообщение"></textarea>
                    <input type="submit" value="Отправить вопрос" class="submit">
                </form>

            </div>
        </div>
        <div class="contact-us fields-in-contact-us">
            <p class="p-contact-us">ХОТИТЕ НАЧАТЬ ЗАРАБАТЫВАТЬ В ИНТЕРНЕТЕ? ПРОСТО СВЯЖИТЕСЬ С НАМИ.</p>
            <a class="contact-link" href="">СВЯЗАТЬСЯ</a>
        </div>
        <table sryle="width:100%;">
            <tr>
            <?php
                $db = mysqli_connect('localhost', 'root', '', '26_04_2019_sokolova');
                mysqli_set_charset($db, 'utf8');
                $row = "SELECT * FROM `subscribers`";
                $result = mysqli_query($db, $row);

                foreach ($result as $value) {
                    echo $value['name'] . '<br>';
                }

                // while($row = mysqli_fetch_assoc($result)){
                    
                //     echo '<td>' . $row['phone'] . '<td>';
                    
                // }
            ?>
            </tr>
        </table>
        
        
<?php
    include('../modules/footer.php');
?>