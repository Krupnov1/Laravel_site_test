<?php

foreach ($newsList as $key => $news) {
    ++$key;
    echo $news . "&nbsp; <a href='". route('news.show', ['id' => $key]) ."'>Подробнее</a><br>";
}