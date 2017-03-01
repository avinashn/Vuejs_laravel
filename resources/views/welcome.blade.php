<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Intro to vue.js - Just Laravel</title>

<!-- Fonts -->
<link rel="stylesheet"
	href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<!-- Styles -->
<style>
html, body {
	background-color: #fff;
	color: #636b6f;
	font-family: 'Raleway', sans-serif;
	font-weight: 100;
	height: auto;
	margin: 0;
}

.full-height {
	min-height: 100vh;
}

.flex-center {
	align-items: center;
	display: flex;
	justify-content: center;
}

.position-ref {
	position: relative;
}

.top-right {
	position: absolute;
	right: 10px;
	top: 18px;
}

.content {
	text-align: center;
}

.title {
	font-size: 84px;
}

.m-b-md {
	margin-bottom: 30px;
}
</style>
</head>
<body>
	<div class="flex-center position-ref full-height">
		<div id="vue-wrapper">
			<div class="content">
				<div class="form-group row">
					<div class="col-md-8">
						<input type="text" class="form-control" id="name" name="name"
							required v-model="newItem.name" placeholder=" Enter some name">

					</div>
					<div class="col-md-4">
						<button class="btn btn-primary" @click.prevent="createItem()"
							id="name" name="name">
							<span class="glyphicon glyphicon-plus"></span> ADD
						</button>
					</div>
				</div>
				<p class="text-center alert alert-danger"
					v-bind:class="{ hidden: hasError }">Please enter some value!</p>
				{{ csrf_field() }}
				<p class="text-center alert alert-success"
					v-bind:class="{ hidden: hasDeleted }">Deleted Successfully!</p>
				<div class="table table-borderless" id="table">
					<table class="table table-borderless" id="table">
						<thead>
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tr v-for="item in items">
							<td>@{{ item.id }}</td>
							<td>@{{ item.name }}</td>
							<td @click.prevent="deleteItem(item)" class="btn btn-danger"><span
								class="glyphicon glyphicon-trash"></span></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="/js/app.js"></script>
</body>
</html>