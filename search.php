
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body class="container">
<hr>
	<div>
	<form>
		<div class="form-group">
			<input type="text" id="in" class="form-control" list="search">
			<datalist id="search"></datalist>
		</div>
		<button type="submit" id="play">Submit</button>
	</form>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#in").keyup(function(){
				var keyword = $("#in").val();
				$.ajax({
					url: 'q.php',
					method: 'GET',
					data: {q: keyword},
					dataType: 'json',
					success: function(reply){
						$("#search").empty();
						for (item in reply){
							$("#search").append("<option value="+reply[item]+">");
						}
					},
					error: function(reply){
						console.log(reply.responseText);
					}
				});
			});
		});
	</script>
</body>
</html>