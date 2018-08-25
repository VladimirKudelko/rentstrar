<?php 

$config = array (
	'keywords' => '',
	'description' => '',
	'lang' => 'en',
	'DBHost' => 'localhost',
	'DBUser' => 'root',
	'DBPass' => '',
	'DBName' => 'webportal2',
	'adminEmail' => 'sozidatel0001@gmail.com',
	'adminName' => 'Admin',
	'vkUrl' => ''
);

$connection = mysqli_connect(
  $config['DBHost'],
  $config['DBUser'],
  $config['DBPass'],
  $config['DBName']
);

if ($connection == false){
  echo "Не удалось соединится!<br/>";
  echo mysqli_connect_error();
  exit();
}
