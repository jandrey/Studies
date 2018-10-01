<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Notable" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Hind+Siliguri|Notable" rel="stylesheet">
<style>
body{
	//font-family: 'Notable', sans-serif;
	font-family: 'Hind Siliguri', sans-serif;
	background-color: lightblue
	color: white;
}
.main { 
		text-align: center;

	}
</style>
    <title>ESTUDOS JSON & AJAX with Jquery API</title>
</head>
<body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">

	$(document).ready(function() {
	$.ajaxSetup({
		 beforeSend: function() {
		    $('.mybox ').append("LOADING.....");
		 }
		}); 
		$("button").click(function(){
			var nameData = $("input").val();
			$.post('script.php', "name="+nameData ).done(function(data) {
		    	// Log the response to the console
		    	$(".mybox").append(data);
			});
			
		});
		
	});

</script>

<div class="container">
    <div class="row">
    	<div class="col-md-12 mybox">
    		Search Character LEVEL
        	<input type="text">
        	<button>Click Here</button>
        </div>
    </div>
</div>
</body>
</html>