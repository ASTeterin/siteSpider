<?php

$siteCopies = array(
	array('date' => '2018-01-10', 'title' => 'на продуктовой странице добавлена карусель курсов, добавлена информация про адаптивность на различных устройствах, add Volume Discounts', 'url' => '#'),
	array('date' => '2018-01-16', 'title' => 'на продуктовой странице добавлена карусель курсов, добавлена информация про адаптивность на различных устройствах, add Volume Discounts', 'url' => 'http:\\yandex.ru'),
	array('date' => '2018-02-10', 'title' => 'на продуктовой странице добавлена карусель курсов'),
    array('date' => '2018-02-18', 'title' => 'на продуктовой странице добавлена карусель курсов, добавлена информация про адаптивность на различных устройствах, add Volume Discounts'),
  array('date' => '2018-02-23', 'title' => 'на продуктовой странице добавлена карусель курсов, добавлена информация про адаптивность на различных устройствах, add Volume Discounts'),
  array('date' => '2018-05-10', 'title' => 'акция, конверсия выше на 10%. add Volume Discounts'),
  array('date' => '2018-06-20', 'title' => 'акция, конверсия выше на 10%. add Volume Discounts'),
	array('date' => '2018-07-30', 'title' => 'на продуктовой странице добавлена карусель курсов, добавлена информация про адаптивность на различных устройствах, add Volume Discounts'),
	array('date' => '2018-08-10', 'title' => 'на продуктовой странице добавлена карусель курсов'),
    array('date' => '2018-07-30', 'title' => 'акция, конверсия выше на 10%. add Volume Discounts'),
    array('date' => '2018-05-08', 'title' => 'конец акции, добавлен негр. add Volume Discounts')
  );


require_once 'lib/Twig/Autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'cache'       => 'compilation_cache',
    'auto_reload' => true
));

date_default_timezone_set('Europe/Moscow');

function dateToStr($date, $formatDate)
{
  return $date->format($formatDate);
}

function checkTransferVariable($index, &$transferVar)
{
  if (isset($_SESSION[$index]))
  {
    $transferVar = $_SESSION[$index];
    unset($_SESSION[$index]);
  }
}

$currentDate = new DateTime();
$endDate = dateToStr($currentDate, 'Y-m-d');
$beginDate = dateToStr($currentDate->modify('-1 month'), 'Y-m-d');

session_start();

$_SESSION['records'] = $siteCopies;
/*if (isset($_SESSION['printArray']))
{
  $siteCopies = $_SESSION['printArray'];
  unset($_SESSION['printArray']);
}

if (isset($_SESSION['beginDate']))
{
  $beginDate = $_SESSION['beginDate'];
  unset ($_SESSION['beginDate']);
} */
checkTransferVariable('siteCopies', $siteCopies);
checkTransferVariable('beginDate', $beginDate);
checkTransferVariable('endDate', $endDate);

  echo $twig->render('copies.html', array('siteCopies' => $siteCopies, 'beginDate' => $beginDate, 'endDate' => $endDate));


