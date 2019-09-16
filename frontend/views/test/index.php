<?php

foreach($list as $item){
    $title=$item['title'];
    $id=$item['id'];
    echo "<a href='/news/$id'>$title</a><br/>";
}