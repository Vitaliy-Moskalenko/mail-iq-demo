<?php

    // error_reporting( E_ALL & ~E_NOTICE & ~E_WARNING);
	error_reporting( E_ALL );
	
	define('Q1_ANSWER', 'Чистый классический стиль');
	define('Q2_ANSWER', 'Нет, это будет выглядеть глупо. Надо добавлять долю романтики к другим стилям');
	define('Q3_ANSWER', 'Разобраться с долгими и короткими трендами. Долгих трендов брать чуть побольше. Коротких - на один сезон, чтобы сделать образы острыми и интересными');
	
	 
	// Database
	define('DB_PERSISTENCY', 'true');
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_DATABASE', 'polls');
	define('PDO_POLLS',   'mysql:host='.DB_SERVER.';dbname='.DB_DATABASE);	

