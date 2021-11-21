<?php
 require_once('render.php');
// двумерный массив со списком записей
 require_once('arrayz.php');
// HTML код главной страницы
$page_content = renderTemplate('main.php', ['items' => $items_list]);

// окончательный HTML код
$layout_content = renderTemplate('layout.php',
['content' => $page_content, 'title' => 'Дневник наблюдений за погодой']);

// вывод на экран итоговой страницы
print($layout_content);
?>