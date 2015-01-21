<!DOCTYPE html>
<html lang="en" ng-app="myApp">
  <head>
    <meta charset="utf-8"></meta>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Dinh Website</title> 
</head>

<body>
	<div>aaaaaaaaaa</div>
 	<div class="container" style="margin-top:20px;">
      	<div data-ng-view="" id="ng-view" class="slide-animation"></div>
   </div>
    
</body>

<script src="scripts/vendor/angular.min.js"></script>
<script src="scripts/app.js"></script>
<script src="scripts/directives/loginDirective.js"></script>

<script src="scripts/vendor/angular-route.min.js"></script>
<script src="scripts/vendor/angular-animate.min.js" ></script>
<script src="scripts/vendor/toaster.js" ></script>
<script src="scripts/controller/authCtrl.js"></script>

<link href="styles/bootstrap.min.css" rel="stylesheet">

</html>

