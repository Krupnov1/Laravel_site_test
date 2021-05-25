<?php

foreach ($newsCategoryList as $key => $news) {
    ++$key;
    echo $news . "&nbsp; <a href='". route('newsCategory', ['id' => $key]) ."'>Перейти в категорию новостей</a><br>";
}