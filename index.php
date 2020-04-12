<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<link href='css/bootstrap.min.css' rel='stylesheet' type='text/css'>
	<link href='css/main.css' rel='stylesheet' type='text/css'>
</head>  
<body>

	<div class="main-header pricing-header px-3 py-3 pt-md-4 pb-md-4 mx-auto text-center">
		<h1>Опрос</h1>
		<h3 id="msg"></h3>
	</div>

	<div class="container">
		<form class="reveal-form" method="POST">

			<input type="hidden" name="checksum" value="checksum" />
			
			<div class="row">
				<div class="form-group col-sm-12">
					<label for="question-1">Вопрос 1: Что добавляет возраст?</label>
					<select class="form-control" id="question-1" name="question-1">
						<option>Чистый классический стиль</option>
						<option>Чистый спортивный стиль</option>
						<option>Смесь классики и спорта</option>
					</select>	
				</div>
			</div>			
			<div class="row">
				<div class="form-group col-sm-12">
					<label for="question-2">Вопрос 2: Стоит ли взрослой женщине одеться полностью в романтичном стиле?</label>
					<select class="form-control" id="question-2" name="question-2">
						<option>Да, особенно когда идешь на свидание</option>
						<option>Нет, это будет выглядеть глупо. Надо добавлять долю романтики к другим стилям</option>
						<option>Можно, если такой образ был на манекене</option>
					</select>	
				</div>
			</div>				
			<div class="row">
				<div class="form-group col-sm-12">
					<label for="question-3">Вопрос 3: Как включать тренды в свой гардероб?</label>
					<select class="form-control" id="question-3" name="question-3">
						<option>Разобраться с долгими и короткими трендами. Долгих трендов брать чуть побольше. Коротких - на один сезон, чтобы сделать образы острыми и интересными</option>
						<option>Не трогать тренды - в них тяжело разобраться, подходит только молодежи, зачем позориться</option>
						<option>Смотреть модные показы и полностью копировать понравившиеся образы с подиумов</option>
					</select>	
				</div>   
			</div>
			<div class="row">
				<div class="form-group col-sm-8">
					<label for="name">Имя</label><br/>
					<input class="form-control" type="text" name="name" required>
				</div>
			</div>	
			<div class="row">
				<div class="form-group col-sm-8">
					<label for="email">E-Mail</label><br/>				
					<input class="form-control" id="email" name="email" type="email" required>
				</div>
			</div>				
			<div class="row">
				<div class="form-group col-sm-12">	
					<button type="submit" class="btn btn-run btn-success">Отправить</button>
				</div>
			</div>	
		</form>
	
	</div> <!-- /container --> 	
	
	
	<script src="js/jquery.min.js"></script>
	<script src="js/main.js"></script>
	
</body>
</html>