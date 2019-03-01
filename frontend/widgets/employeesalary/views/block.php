<?php

if (isset($list)){
    echo '<br><br>';
    foreach ($list as $item){
        echo 'Name '.$item['fullname'].' Salary '. $item['salary'].'<br><br>';
    };
}

