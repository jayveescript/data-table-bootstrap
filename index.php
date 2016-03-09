<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Sample</title>
  <meta name="description" content="">
	<script src="jquery-1.11.2.js"></script>
	<link rel="stylesheet" href="bootstrap.min.css">

</head>
<body>
<div id="appenddiv"></div>

	<script type="text/javascript">


		$(document).ready(function(){
			    $.ajax({
			       type: 'POST',
			       url: 'database.php',
			       async: true,
			       success: function(data){
			       	tblpagination('appenddiv',data);
			       },
			       error: function(data){
			       	alert(JSON.stringify(data))
			       }
			   });
		});

		function tblpagination(appenddiv,data_array) {
			var datarow = '';
			var total_results = data_array.length;

			datarow += ' <table class="table table-hover">';

			if(data_array.length > 0){
				var newArrayKeys = Object.keys(data_array[0]);
				newArrayKeyslength = newArrayKeys.length;
				datarow += ' <thead>';
				for (var i = 0; i < newArrayKeyslength ; i++) {
					datarow += '    <td><b>'+ newArrayKeys[i] +'</b></td>';
				};
				datarow += ' </thead><tbody>';

				for (var j = 0; j < total_results; j++) {
					datarow += ' <tr>';
					for (var i = 0; i < newArrayKeyslength ; i++) {
						datarow += '    <td>';
						datarow += data_array[j][newArrayKeys[i]];
						datarow += '</td>';
					}
					datarow += ' </tr>';
				};

				datarow += ' </tbody>';
				datarow += ' </table>';
			}
			else{
				datarow = '<tr><td colspan="5" align="center">No results</td></tr>';
			}
			document.getElementById(appenddiv).innerHTML = '';
			document.getElementById(appenddiv).innerHTML = datarow;
		};
	</script>
</body>
</html>