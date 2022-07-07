<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="http://code.jquery.com/jquery-3.0.0.min.js"></script>

</head>
<body>
<?php 

require_once("form.php");

$form = new form();




$form -> fstart('form1');
$form -> label('lb1','En','color:black');
$form -> input('kid1','text','btn btn-default','color:red;');
$form -> label('lb2','Boy','color:black');
$form -> input('kid2','text','btn btn-default','color:red');
$form -> label('lb3','Yukselik','color:black');
$form -> input('kid3','text','btn btn-default','color:red');
$form -> bttn('id2','Gonder','submit','btn btn-success','width:250px');

$form -> fclose();


?>
<div align="center"></div>





<script>



$(document).ready(function(){
	$("#id2").on("click", function(){ // buton idli elemana tıklandığında
		var gonderilenform = $("#form1").serialize(); // idsi gonderilenform olan formun içindeki tüm elemanları serileştirdi ve gonderilenform adlı değişken oluşturarak içine attı
		
		$.ajax({
			url:'close.php', // serileştirilen değerleri ajax.php dosyasına
			type:'POST', // post metodu ile 
			data:gonderilenform, // yukarıda serileştirdiğimiz gonderilenform değişkeni 
			success:function(e){ // gonderme işlemi başarılı ise e değişkeni ile gelen değerleri aldı
				$("div").html("").html(e); // div elemanını her gönderme işleminde boşalttı ve gelen verileri içine attı
			}
		});
		
	});
});


</script>
</body>




</html>