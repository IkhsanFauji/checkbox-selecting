<!DOCTYPE html>
<html lang="en">
<head>
	<!-- 
	# ====================== Author ======================
	# Name : Ikhsan Fauji
	# Sex  : Male
	# Age  : 22 Years Old
	# Nationality : Indonesia
	# =================== Happy Coding ===================
	-->
	
	<meta charset="UTF-8">
	<title>Checkbox</title>

	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	
	<div class="container">
		<br><br>
		<h3>Multiple Checkbox Using PHP + Javascript</h3>
		<hr>
		<br>
		
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th width="30"><input type="checkbox" id="selectall" name="selectall"></th>
						<th>Name</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><input type="checkbox" class="checkitem" name="item[]" value="item 1"></td>
						<td>Item 1</td>
					</tr>
					<tr>
						<td><input type="checkbox" class="checkitem" name="item[]" value="item 2"></td>
						<td>Item 2</td>
					</tr>
					<tr>
						<td><input type="checkbox" class="checkitem" name="item[]" value="item 3"></td>
						<td>Item 3</td>
					</tr>
					<tr>
						<td><input type="checkbox" class="checkitem" name="item[]" value="item 4"></td>
						<td>Item 4</td>
					</tr>
				</tbody>
			</table>

			<br>
			<button type="submit" name="nilai" id="cekNilai" class="btn btn-primary">See Values</button>
			<br><br>
		</form>

		<?php 
		if (isset($_POST['nilai']) && isset($_POST['item'])) {

			$variable = $_POST['item'];

			print_r($variable);

			echo "<br><br>";
			echo '<ul class="list-group">';

			foreach ($variable as $key => $value) {
		?>
			  <li class="list-group-item"><?php echo $value; ?></li>
			
	<?php   }

			echo '</ul>';

		} else { 
			echo '<div class="panel panel-default">
					  <div class="panel-body">You have not selected item</div>
					</div'; 
		} ?>

	</div>

	<!-- Javascript -->
	<script src="assets/js/jquery.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/Javascript">
		$(document).ready(function() {

			// Make selected all input checkbox
			$('#selectall').change(function(){
				$('input:checkbox').prop('checked', $(this).prop('checked'));
			});

			// Make #selectall not checked when one item is not checked
			$('.checkitem').change(function(){
				if ($(this).prop('checked')==false) {
					$('#selectall').prop('checked', false);
				} 

				if ($('.checkitem:checked').length == $('.checkitem').length) {
					$('#selectall').prop('checked', true);
				}
			});

		});
	</script>
</body>
</html>