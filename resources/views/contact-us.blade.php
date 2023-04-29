<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<style type="text/css">
		body {
			font-family: Arial, sans-serif;
			background-color: #f4f4f4;
		}

		.container {
			margin: 50px auto;
			padding: 20px;
			background-color: #fff;
			box-shadow: 0px 0px 10px #ccc;
			max-width: 500px;
		}

		h1 {
			text-align: center;
			color: #333;
			margin-bottom: 30px;
		}

		form label {
			display: block;
			margin-bottom: 5px;
			color: #333;
			font-weight: bold;
		}

		form input[type=text], form input[type=email], form textarea {
			display: block;
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border: 1px solid #ccc;
			border-radius: 4px;
			font-size: 16px;
		}

		form textarea {
			height: 150px;
		}

		form input[type=submit] {
			background-color: #333;
			color: #fff;
			border: none;
			padding: 10px 20px;
			border-radius: 4px;
			font-size: 16px;
			cursor: pointer;
		}

		form input[type=submit]:hover {
			background-color: #555;
		}

		.alert {
			padding: 15px;
			margin-bottom: 20px;
			border: 1px solid transparent;
			border-radius: 4px;
		}

		.alert-success {
			color: #3c763d;
			background-color: #dff0d8;
			border-color: #d6e9c6;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Contact Us</h1>

		@if(session('success'))
			<div class="alert alert-success">{{ session('success') }}</div>
		@endif

		<form action="{{ route('contacts.store') }}" method="POST">
			@csrf
			<label for="name">Name:</label>
			<input type="text" name="name" required>

			<label for="email">Email:</label>
			<input type="email" name="email" required>

			<label for="subject">Subject:</label>
			<input type="text" name="subject" required>

			<label for="message">Message:</label>
			<textarea name="message" required></textarea>

			<input type="submit" value="Send">
		</form>
	</div>
</body>
</html>

