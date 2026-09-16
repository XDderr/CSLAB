<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Buena's Bootcamp</title>
	<link rel="shortcut icon" href="Buena_Vista_29.png" type="image/x-icon">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg bg-body-tertiary">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">Buena's Bootcamp</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
				<a class="nav-link active" aria-current="page" href="#">Home</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="#">Link</a>
				</li>
				<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					Dropdown
				</a>
				<ul class="dropdown-menu">
					<li><a class="dropdown-item" href="#">Action</a></li>
					<li><a class="dropdown-item" href="#">Another action</a></li>
					<li><hr class="dropdown-divider"></li>
					<li><a class="dropdown-item" href="#">Something else here</a></li>
				</ul>
				</li>
				<li class="nav-item">
				<a class="nav-link disabled" aria-disabled="true">Disabled</a>
				</li>
			</ul>
			<form class="d-flex" role="search">
				<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
				<button class="btn btn-outline-success" type="submit">Search</button>
			</form>
			</div>
		</div>
	</nav>

	<table class="table">
		<thead class="table-primary">
			<th scope="col">ID No.</th>
			<th scope="col">First Name</th>
			<th scope="col">Last Name</th>
			<th scope="col">Is Alive?</th>
		</thead>
		<tbody>
			<tr class="table-success">
				<th scope="row">01</th>
				<td>Marc</td>
				<td>David</td>
				<td>Yes</td>
			</tr>
			<tr class="table-danger">
				<th scope="row">02</th>
				<td>James</td>
				<td>Bard</td>
				<td>No</td>
			</tr>
			<tr class="table-info">
				<th scope="row">03</th>
				<td>Christian</td>
				<td>Marie</td>
				<td>No Info</td>
			</tr>
			<tr class="table-success">
				<th scope="row">04</th>
				<td>Joems</td>
				<td>John</td>
				<td>Yes</td>
			</tr>
			<tr class="table-success">
				<th scope="row">05</th>
				<td>Nat</td>
				<td>Manuel</td>
				<td>Yes</td>
			</tr>
		</tbody>
	</table>
</body>
</html>