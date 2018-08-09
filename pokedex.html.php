<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/style.css">
	<title>Pokedex</title>
</head>
<body>
	<div id="hacker-list">
		<?php include './navbar.html' ?>
		<table class="table">
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col" class="name">Name</th>
		      <th scope="col" class="types">Types</th>
		      <th scope="col" class="NPN">National Pokedex Number</th>
		      <th scope="col" class="pimage">Image</th>
		    </tr>
		  </thead>
		  <tbody class="list" id="pokemon-table">
		  	
		  </tbody>
		</table>
		<ul class="pagination"></ul>
	</div>

	<script src="./bootstrap/js/jquery-3.3.1.slim.min.js" type="text/javascript"></script>
	<script src="./bootstrap/js/popper.min.js" type="text/javascript"></script>
	<script src="./bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="./js/list.min.js" type="text/javascript"></script>
	<script src="./js/pokedex.js" type="text/javascript"></script>
</body>
</html>