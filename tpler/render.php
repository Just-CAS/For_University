<?php
function renderTemplate()
{
	extract(func_get_arg(1));
	//extract() проверяет каждый ключ на соответствие приемлемости в качестве имени переменной. Эта функция также обрабатывает коллизии имён, если ключ совпадает с именем переменной, уже существующей в текущей символьной таблице.
	
	//Возвращает указанный аргумент из списка аргументов пользовательской функции.

	ob_start();
	
	//Функция ob_start() - включает буферизацию вывода.
	
	if (file_exists(func_get_arg(0))){
		//file_exists - Проверяет наличие указанного файла или каталога
		require func_get_arg(0);
		//Конструкция require позволяет включать удаленные файлы, если такая возможность включена в конфигурационном файле PHP. PHP позволяет работать с объектами URL, как с обычными файлами. Упаковщики, доступные по умолчанию, служат для работы с удаленными файлами с использованием протокола ftp или http
	}else {
		echo 'Шаблон не найден';
	}
	
	return ob_get_clean();
	//Получить содержимое текущего буфера и удалить его
}

?>