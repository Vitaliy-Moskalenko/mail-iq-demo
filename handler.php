<?php

	require 'config.php';
	require 'class/DbHandler.class.php';
	require 'class/Logger.class.php';
	
	// Get logger for ajax debugging
	$logger = Logger::get_logger(dirname(__FILE__));
	
	if(isset($_POST) && $_POST['checksum'] == 'checksum') {
		
		$result = '';
		$pollResult = 0;
		
		$user = array(
			':name'  => $_POST['name'],
			':email' => $_POST['email']			
		);		
		
		// Save user in database
		$sql = "INSERT INTO users (name, email) VALUES (:name, :email);"; 
		
		$queryResult = DbHandler::execute($sql, $user);
		if($queryResult !== 'ok')
			$result .= '<p style="color:red;">Ошибка БД: '.$queryResult.'</p>';
		else
			$result .= '<p style="color:green;">Пользователь зарегистрирован успешно.</p>';
		
		// Save answers in polls table
		if($_POST['question-1'] == Q1_ANSWER && $_POST['question-2'] == Q2_ANSWER && $_POST['question-3'] == Q3_ANSWER)
			$pollResult = 1;		
		
		$poll = array(
			':user_email'  => $_POST['email'],
			':question_1'  => $_POST['question-1'],
			':question_2'  => $_POST['question-2'],
			':question_3'  => $_POST['question-3'],
			':poll_result' => $pollResult,		
		);		
		
		$sql = "INSERT INTO polls (user_email, question_1, question_2, question_3, poll_result)
						   VALUES (:user_email, :question_1, :question_2, :question_3, :poll_result);";
						   
		$queryResult = DbHandler::execute($sql, $poll);
		if($queryResult !== 'ok')
			$result .= '<p style="color:red;">Ошибка БД: '.$queryResult.'</p>';
		else
			$result .= '<p style="color:green;">Результаты опроса сохранены успешно.</p>';
		
		// Check poll result
		if($pollResult)
			$result .= '<p style="color:green;">Ответы верны</p>';
		else 
			$result .= '<p style="color:red;">Ответы не верны</p>';
		
		echo $result;
		
	}
