<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Vintage Penguin Interactive</title>
		<link href='http://fonts.googleapis.com/css?family=Carter+One' rel='stylesheet' type='text/css'>
		<style type="text/css">
			body {
				margin: 0;
			}
			div#logo {
				background: rgb(255,255,255); /* Old browsers */
				background: -moz-linear-gradient(top,  rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%); /* FF3.6+ */
				background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,255,255,1)), color-stop(47%,rgba(246,246,246,1)), color-stop(100%,rgba(237,237,237,1))); /* Chrome,Safari4+ */
				background: -webkit-linear-gradient(top,  rgba(255,255,255,1) 0%,rgba(246,246,246,1) 47%,rgba(237,237,237,1) 100%); /* Chrome10+,Safari5.1+ */
				background: -o-linear-gradient(top,  rgba(255,255,255,1) 0%,rgba(246,246,246,1) 47%,rgba(237,237,237,1) 100%); /* Opera 11.10+ */
				background: -ms-linear-gradient(top,  rgba(255,255,255,1) 0%,rgba(246,246,246,1) 47%,rgba(237,237,237,1) 100%); /* IE10+ */
				background: linear-gradient(to bottom,  rgba(255,255,255,1) 0%,rgba(246,246,246,1) 47%,rgba(237,237,237,1) 100%); /* W3C */
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ededed',GradientType=0 ); /* IE6-9 */
				height: 246px;
				padding: 100px 0 50px;

			}
			#logo img {
				width: 400px;
				height: auto;
				display: block;
				margin: 0 auto;
			}
			div#menu {
				width: 100%;
				height: 50px;
				margin: 0 auto;
				background-color: #222;
				text-align: center;

				background: rgb(69,72,77); /* Old browsers */
				background: -moz-linear-gradient(top,  rgba(69,72,77,1) 0%, rgba(0,0,0,1) 100%); /* FF3.6+ */
				background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(69,72,77,1)), color-stop(100%,rgba(0,0,0,1))); /* Chrome,Safari4+ */
				background: -webkit-linear-gradient(top,  rgba(69,72,77,1) 0%,rgba(0,0,0,1) 100%); /* Chrome10+,Safari5.1+ */
				background: -o-linear-gradient(top,  rgba(69,72,77,1) 0%,rgba(0,0,0,1) 100%); /* Opera 11.10+ */
				background: -ms-linear-gradient(top,  rgba(69,72,77,1) 0%,rgba(0,0,0,1) 100%); /* IE10+ */
				background: linear-gradient(to bottom,  rgba(69,72,77,1) 0%,rgba(0,0,0,1) 100%); /* W3C */
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#45484d', endColorstr='#000000',GradientType=0 ); /* IE6-9 */

			}
			#menu ul {
				padding: 10px 0 0;
				margin: 0;
			}
			#menu li {
				list-style-type: none;
				padding: 0 30px 0 0;
				display: inline-block;
			}
			#menu li:last-child {
				padding: 0;
			}
			#menu a {
				color: white;
				text-decoration: none;
				font-family: 'Carter One', cursive;
			}
			div#content_home, div#content_about {
				width: 100%;
				margin: 0 auto;
				background-color: #333;
				text-align: center;
				color: white;
			}
			div p {
				margin: 0 inherit;
				padding: 30px;
				max-width: 960px;
				font-family: Arial;
				font-size: 14px;
			}
		</style>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script type="text/javascript">
			var last = 'home';
			$(document).ready(function() {
				$('#toggle_aboutus').click(function() {
					if(last=='about') return;
					$('#content_'+last).slideUp('fast',function() { $('#content_about').slideDown(); });
					last = 'about';
				});
				$('#toggle_home').click(function() {
					if(last=='home') return;
					$('.content').slideUp();
					$('#content_'+last).slideUp('fasr',function() { $('#content_home').slideDown(); });
					last = 'home';
				});
			});
		</script>
	</head>
	<body>
		<div id="logo">
			<img src="assets/vplogo.png">
		</div>
		<div id="menu">
			<ul>
				<li><a href="#" id="toggle_home">Home</a></li>
				<li><a href="#" id="toggle_aboutus">About Us</a></li>
				<li><a href="mailto:contact@v-penguin.com">Contact Us</a></li>
			</ul>
		</div>
		<div id="content_home" class="content">
			<p>Home Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque imperdiet commodo diam ut rutrum. Donec nisl nunc, dapibus non placerat et, iaculis eu velit. Maecenas ut egestas quam. Vestibulum pretium felis et lectus gravida in eleifend nibh pretium. Pellentesque at laoreet erat. Mauris pellentesque, ligula ut imperdiet interdum, sem dui porta nisi, ut lobortis tortor nulla non sem. Integer tempus enim in ante sollicitudin euismod. </p>
		</div>
		<div id="content_about" class="content" style="display: none">
			<p>About Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque imperdiet commodo diam ut rutrum. Donec nisl nunc, dapibus non placerat et, iaculis eu velit. Maecenas ut egestas quam. Vestibulum pretium felis et lectus gravida in eleifend nibh pretium. Pellentesque at laoreet erat. Mauris pellentesque, ligula ut imperdiet interdum, sem dui porta nisi, ut lobortis tortor nulla non sem. Integer tempus enim in ante sollicitudin euismod. Donec consectetur felis nulla. Pellentesque ac cursus odio. Sed vitae purus vitae ante fringilla accumsan ut ut massa. Sed ac diam magna, malesuada porta dui. Nulla sed tortor mi, eu feugiat sapien. Duis ac ultrices dui. Aliquam molestie, dolor et mattis lobortis, magna mauris dictum mauris, sit amet ullamcorper metus erat nec nisi. Nam vitae porttitor nisi. Duis consectetur pulvinar ligula, sed egestas tortor pretium nec.</p>
		</div>
	</body>
</html>