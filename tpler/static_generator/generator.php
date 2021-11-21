<?php
header('Content-Type: text/html; charset=utf-8');

require('scriptus.php');  // подключаем скрипт-обработчик

$parse->get_tpl('use.tpl'); // считываем данные из шаблона 

$link_up = "1";
$title = "2";
$cool_site = "3";
$some_content = "4";
if(!empty($_REQUEST['title']) && !empty($_REQUEST['link_up']) && !empty($_REQUEST['cool_site']) && !empty($_REQUEST['some_content']))  // проверяем чтоб поля не были пустыми
 {
   $link_up = trim($_REQUEST['link_up']);
   $title = trim($_REQUEST['title']);
   $cool_site = trim($_REQUEST['cool_site']);
   $some_content = trim($_REQUEST['some_content']);
 }

else
 { 
   echo "Not set data \n";
   exit;
 }

// заменяем переменные из шаблона на полученные данные
$parse->set_tpl('{LINK}', $link_up); 
$parse->set_tpl('{TITLE}', $title); 
$parse->set_tpl('{COOL_SITE}', $cool_site); 
$parse->set_tpl('{SOME_CONTENT}', $some_content); 

$parse->tpl_parse(); // Собираем страничку

echo $parse->template; // Выводим страничку

//////////////////////////////////////////////////////////

if(!$handle = fopen('static_page/'.$link_up.'.html', 'w')) 
 {
   echo "Not open file";
   exit;
 }

if(fwrite($handle, $parse->template) === FALSE) 
 {
   echo "Не удалось запиать";
   exit;
 }
    
fclose($handle);
?>