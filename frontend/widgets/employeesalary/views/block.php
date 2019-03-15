<?php


if (isset($list)){
    echo '<br><br>';
    foreach ($list as $item){
        echo 'Name '.$item['first_name'].' Salary '. $item['salary'].'<br><br>';
    }
}

