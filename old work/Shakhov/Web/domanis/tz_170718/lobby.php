<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="JS/common.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" href="css/all.css">
	<title>Best guy in the world</title>
</head>
<body>
 <header>
 	<div class="container">
 		<div>
	 		<div class="row">
	 			<div class="col-1 offset-11">
	 				<div class="profile noselect" id="tab">
	 					Tycep 
	 					<div class="mnu_fly noselect">
	 						<ul>
	 							<li><a href="index.html">Выйти</a></li>
	 						</ul>
	 					</div>
	 				</div>
	 			</div>
	 		</div>
 		</div>
 	</div>
 </header>
 <br>
 <div class="container">
	 <div class="row">
	 	<div class="col-md-4">
	 		<div class="div_frm">
	 			<form class = "frm">
	 				<div class="centerElements">
	 					<div class="div_text">Добавить статью</div>
	 					<input type="text" id = "title" class="frm_Elements" placeholder="Название статьи">
	 					<textarea class="frm_Elements" id="description" placeholder="Текст статьи"></textarea>
	 					<input class="frm_Elements" type="button" id="add" value="Добавить">
	 				</div>
	 			</form>
	 		</div>
	 	</div>
	 	<div class="col-md-4">
	 		<div class="post_handler">
	 			<!-- <div class="coolStory">
	 				<h5>Всем привет!</h5>
	 				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque similique facere possimus neque voluptas vitae blanditiis, pariatur, minima provident saepe ad praesentium veritatis reiciendis, modi veniam cumque cupiditate ducimus soluta!</p>
	 			</div> -->
	 		</div>
	 	</div>
	 	<div class="col-md-4">
	 		<div class="div_frm">
	 			<form class="frm">
	 				<div class="div_wrap paddingBottomFree">
	 					<div class="div_text">Калькулятор</div>
	 				</div>
	 				<div class="div_wrap">
	 					<div class="div_ltlBtn centerText" id="plus">+</div>
	 					<div class="div_ltlBtn centerText" id="minus">-</div>
	 					<div class="div_ltlBtn centerText" id="multiply">*</div>
	 					<div class="div_ltlBtn centerText marginRightFree" id="subtract" >/</div>
	 				</div>
	 				<div class="div_wrap">
	 					<input class="numbers" type="text" name="frstNumber" value="8">
	 					<div class="div_ltlBtn plus centerText" id="symbol">+</div>
	 					<input class="numbers" type="text" name="secondNumber" value="4">
	 				</div>
	 				<div class="div_wrap">
	 					<div class="compText centerText">Answer:</div>
	 					<input name = "answer" type="text" class="computation" value="12">
	 				</div>
	 			</form>
	 		</div>
	 	</div>
	 </div>

 </div>
</body>
</html>