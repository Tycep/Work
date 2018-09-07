$(function(){
 var tab = false;
 var first;
 var second;
 var title;
 var text;

 $("#tab").click(function(){
 	if(tab == false)
 		$(".mnu_fly").show();
 	else
 		$(".mnu_fly").hide();
 	tab = !tab;
 });

 
 $("#plus").click({param: '+'}, getNumbers);
 $("#minus").click({param: '-'}, getNumbers);
 $("#multiply").click({param: '*'}, getNumbers);
 $("#subtract").click({param: '/'}, getNumbers);

 $("#add").click(function(){
 	title = $("#title").val();
 	text = $("#description").val();
 	$("#title").val('');
 	$("#description").val('');

 	$(".post_handler").append(
 			'<div class="coolStory">'+
	 		'<h5>' + title + '</h5>'+
	 		'<p>' + text + '</p>'+
	 		'</div>'
 		);
 });


	//Вычисление
 function getNumbers(event){
 	var computation;
 	var x = event.data.param;
 	first = parseInt($("input[name='frstNumber']").val());
 	second = parseInt($("input[name='secondNumber']").val());
 	switch(x){
 		case '+':
 			computation = first + second;
 			break;
 		case '-':
 			computation = first - second;
 			break;
 		case '*':
 			computation = first * second;
 			break;
 		case '/':
 			computation = first / second;
 			break;
 	}
 	$("#symbol").text(x);
 	$("input[name='answer']").val(computation);
 }

})