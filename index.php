<!DOCTYPE html>
<html lang="en" ng-app="valentine-app">
  <head>
    <meta charset="utf-8"></meta>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Dinh app</title> 
</head>

<body class="index-background">
	<section ng-controller="HomeController as home">

		<div>
			<a href="#">
				<img id="my-heart" class="image-center-screen" src="images/heart.gif" ng-click="home.changeImageSize()" >
				<div class="loinhan" id="loinhan">Một trái tim nhỏ bé, xin đừng chạm vào</div>
				<input type="hidden" id="image-size" value="50"/>
			</a>
		</div>
	</section>
 	
    
</body>

<script src="scripts/vendor/angular.min.js"></script>
<script src="scripts/vendor/jquery-2.0.3.js"></script>

<script src="scripts/app.js"></script>
<script src="scripts/controller/indexController.js"></script>

<script src="scripts/directives/indexDirective.js"></script>

<script src="scripts/vendor/angular-route.min.js"></script>
<script src="scripts/vendor/angular-animate.min.js" ></script>
<link href="styles/bootstrap.min.css" rel="stylesheet">
<link href="styles/index.css" rel="stylesheet">

</html>

