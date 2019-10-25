<?php

function hack($sm, $login, $timer=7){
    sleep(1);
    echo "Взлом $login запущен";
    sleep(1);
    for($i=1;$i<$timer;$i++){
        if(($i-1)%3==0){
            echo PHP_EOL;
        }
        echo '.';
        sleep(1);
    }
    echo PHP_EOL;

    sleep(2);

    echo "Подключение к базе данных $sm";

    $timer=4;

    sleep(1);

    for($i=1;$i<$timer;$i++){
        if(($i-1)%3==0){
            echo PHP_EOL;
        }
        echo '.';
        sleep(1);
    }
    echo PHP_EOL;
    echo "Подключение к базе данных $sm успешно завершено";
    echo PHP_EOL;
    sleep(2);
    echo "Пароль $login успешно найден";
    echo PHP_EOL;
    usleep(500000);
    echo "Расшифровка пароля".PHP_EOL;
    sleep(2);

    $time=100000;
    for($i=0;$i<=100;$i++){
        echo $i.'%'.PHP_EOL;
        usleep($time);
        if($i==15){
            $time = 250000;
        }
        if($i==18){
            $time = 50000;
        }
        if($i==65){
            $time = 100000;
        }
        if($i==22||$i==99||$i==100){
            sleep(3);
        }
    }

    echo "Пароль успешно расшифрован";
    sleep(1);
    echo PHP_EOL;
    echo "Данные для входа".PHP_EOL;
    echo "Логин: $login".PHP_EOL;
    echo "Пароль: larin2451Pobeda".PHP_EOL;
    sleep(2);

}
?>
