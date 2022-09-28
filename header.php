<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" type="text/css" href="header.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<title></title>
</head>
<body>
	<div class="container">
		<div class="navbar">
			<img src="M-logo.jpg" class="logo" id="logo">
			<nav class="nav" >
				<ul id="menulist">
					<li><a href="index.html">Home</a></li>
					<li><a href="header.php">Programing</a></li>
					<li><a href="#">About</a></li>
				</ul>
			</nav>
			<i class="fa fa-bars" id="menu" class="menubar" onclick="togglemenu()"></i>
		</div>

		<div class="content">
			<div class="header">
				<h1>C Programm</h1>
				<p>C is a general-purpose programming language, developed in 1972, and still quite popular.C is very powerful; it has been used to develop operating systems, databases, applications, etc.</p>
				<p>Some important <b>C</b> program code following are there...</p>
			</div>
			<div class="detail">
				<h3>1) Queue Using Linked List : </h3>
				<h4>What is <b>Queue</b> ? </h4>
				<p>A queue is a linear data structure that follows the First In, First Out (FIFO) principle, which means that the element which is inserted first in the queue will be the first one to be removed from the queue. A good example of a queue is a queue of customers purchasing a train ticket, where the customer who comes first will be served first.</p>
				<img src="image/Queue.png">
			</div>
			<div class="code">
				<pre>
				#include<stdio.h>
					
				</pre>
			</div>
		</div>
	</div>

	<script>
		var menulist = document.getElementById('menulist');

		menulist.style.maxHeight = "0px";

		function togglemenu() {
			if (menulist.style.maxHeight == "0px") {
				menulist.style.maxHeight = "140px";
			} else {
				menulist.style.maxHeight = "0px";
			}
		}
	</script>
</body>
</html>