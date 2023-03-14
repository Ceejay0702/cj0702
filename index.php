<!DOCTYPE html>
<html>
<head>
	<title>Get Started</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<h1>Welcome to our website!</h1>
	</header>
	<nav>
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Services</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</nav>
	<main>
		<section>
			<h2>Get Started</h2>
			<p>Fill out the form below to get started:</p>
			<form>
				<label for="name">Name:</label>
				<input type="text" id="name" name="name"><br>

				<label for="email">Email:</label>
				<input type="email" id="email" name="email"><br>

				<label for="message">Message:</label>
				<textarea id="message" name="message"></textarea><br>

				<input type="submit" value="Submit">
			</form>
		</section>
	</main>
	<footer>
		<p>&copy;  All rights reserved.</p>
	</footer>
</body>
</html>

<style>
body {
	font-family: Arial, sans-serif;
	margin: 0;
	padding: 0;
}

header, nav, main, footer {
	padding: 20px;
}

header {
	background-color: #333;
	color: #fff;
}

nav ul {
	list-style: none;
	margin: 0;
	padding: 0;
	display: flex;
	justify-content: space-between;
}

nav li {
	margin: 0 10px;
}

nav a {
	color: #333;
	text-decoration: none;
}

main {
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 400px;
}

section {
	background-color: #f0f0f0;
	padding: 20px;
	max-width: 600px;
	text-align: center;
}

h2 {
	margin-top: 0;
}

form label {

</style>