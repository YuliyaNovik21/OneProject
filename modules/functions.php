<?php
    // функция для вывода массивов debug

    function d( $array ) {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }
    
    // Парсинг даты
    // 2019-07-16 => 16 июля 2019
    function parseDate( $date ) {

        $dateArray = explode('-', $date);

        $month = [
            'января',
            'февраля',
            'марта',
            'апреля',
            'мая',
            'июня',
            'июля',
            'августа',
            'сентября',
            'октября',
            'ноября',
            'декабря'
        ];

        $myMonth = $month[ $dateArray[1] - 1 ];

        d($dateArray[2] . ' ' . $myMonth . ' ' . $dateArray[0]);
        // implode()

    }

    parseDate('2019-07-16');
?>