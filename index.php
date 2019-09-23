<!DOCTYPE html>

<html>
<head>
	<title>Homepage</title>
	<style type="text/css">
		html,
		* {
			box-sizing: border-box;
		}
		body {
			height: 100%;
		}
		body{
			background-image: url("bg.jpg");
			border: 2px solid black;
			background-size: 100% 100%;
		}		
		img:hover {
			opacity: 0.2;
			filter: alpha(opacity=50);
		}
		a{
			text-decoration: none;
		}
		h1 {
			color: #F7A606;
			text-shadow: 2px 2px 4px #000000;
		}
		.row {
			display: -ms-flexbox;
			display: flex;
			-ms-flex-wrap: wrap;
			flex-wrap: wrap;
			padding: 0 4px;
		}
		.column {
			-ms-flex:25%;
			flex: 25%;
			max-width: 25%;
			padding: 30px;
		}
		.column img {
			margin-left: 250px;
			margin-top: 8px;
			align-content: center;
			width: 100%;
		}
		details {
			color: white;
			text-align: center;
		}
	</style>
</head>
	<body>
		<main>
			<p style="float: right; background-color: white; width: 7%"><font style="font-family: courier new">
				<strong><a href="log-in.html">Log out</a></strong></p></font>

			<p style="background-color: white; width: 27%"><font style="font-family: courier new">&nbsp;
				<a href="https://www.facebook.com/Jetyrael">Donjie dela Victoria</a> | BSIT - 2
			</p>

			<header>
				<h1 style="font-size: 50px; font-family: 'Gill Sans MT'; color: rgb(6, 247, 86); text-align: center;">
					WELCOME<br/>
					to<br/>
					GALLERIA DELAVICTORIA<br/>
					feat. Pepe the Frog
				</h1>
			</header>

			<br/><br/>
			<hr width="90%">
			<br/><br/>

			<article><!--for the photos-->
				<div class="row">
					<div class="column">
						<a href="1.html">
							<img src="https://static-cdn.jtvnw.net/jtv_user_pictures/6d2ce263-d389-48c0-b25c-cf81b882af58-profile_image-300x300.png"  
							height="200px" width="300px">
					</div>
					<div class="column">
						<a href="2.html">
							<img src="https://i.kym-cdn.com/entries/icons/mobile/000/025/382/Screen_Shot_2018-02-06_at_3.37.14_PM.jpg" 
							height="200px" width="300px">
					</div>
					<div class="column">
						<a href="3.html">
							<img src="https://cdn.frankerfacez.com/emoticon/201250/4"  
							height="200px" width="300px">
					</div>
				</div>
			</article>	

		</main>

		<hr width="90%" style="color:white;">
		<br/><br/>
	</body>
</html>
