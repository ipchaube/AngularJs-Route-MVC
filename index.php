<!-- 
    // This is index file
    // Author: Indu Prakash Chaube
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>AngularJS Routing example</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body ng-app="induapp">



<div class="container">

    <!-- Static navbar -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Indu's App</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#/add">Add</a></li>
                    <li><a href="#/show">Show</a></li>

            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>

    <!-- Main component for a primary marketing message or call to action -->
    <div ng-view>

    </div>


</div>


</body>

<!-- 
    // ANGULATJS lIBRARY
-->
<script src="https://code.angularjs.org/1.5.7/angular.min.js"></script>
<script src="https://code.angularjs.org/1.5.7/angular-route.min.js"></script>
<script src="https://code.angularjs.org/1.5.7/angular-animate.min.js"></script>

<!-- 
    // Application java script filr
-->
<script src="./js/app.js"></script>
</html>