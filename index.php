<?php

require_once 'lib/Twig/Autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'cache'       => 'compilation_cache',
    'auto_reload' => true
));

$books = array(
	array('date' => '01.01.2018', 'title' => 'на продуктовой странице добавлена карусель курсов, добавлена информация про адаптивность на различных устройствах, add Volume Discounts', 'url' => '#'),
	array('date' => '10.01.2018', 'title' => 'на продуктовой странице добавлена карусель курсов, добавлена информация про адаптивность на различных устройствах, add Volume Discounts', 'url' => 'http:\\yandex.ru'),
	array('date' => '18.01.2018', 'title' => 'на продуктовой странице добавлена карусель курсов'),
    array('date' => '18.01.2018', 'title' => 'на продуктовой странице добавлена карусель курсов, добавлена информация про адаптивность на различных устройствах, add Volume Discounts'),
  array('date' => '01.01.2018', 'title' => 'на продуктовой странице добавлена карусель курсов, добавлена информация про адаптивность на различных устройствах, add Volume Discounts'),
	array('date' => '10.01.2018', 'title' => 'на продуктовой странице добавлена карусель курсов, добавлена информация про адаптивность на различных устройствах, add Volume Discounts'),
	array('date' => '18.01.2018', 'title' => 'на продуктовой странице добавлена карусель курсов'),
    array('date' => '18.01.2018', 'title' => 'на продуктовой странице добавлена карусель курсов, добавлена информация про адаптивность на различных устройствах, add Volume Discounts')
  );

echo $twig->render('books.html', array('books' => $books));