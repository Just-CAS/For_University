<?php
 require('tpler/render.php');
// двумерный массив со списком записей
 require('assets/arrays.php');
// HTML код главной страницы
$page_content = renderTemplate('assets/main.php', ['items' => $items_list]);
// окончательный HTML код
$layout_content = renderTemplate('assets/layout.php',
	['content' => $page_content]
);

// вывод на экран итоговой страницы
print($layout_content);

?>