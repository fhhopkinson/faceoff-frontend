<html ng-app="uploader">
<head>
  <title>Angular Upload</title>
  <!-- External Modules -->
  <script src="/vendor/angular/angular.min.js"></script>
  <script src="/vendor/dist/jquery.min.js"></script>
  <script src="/vendor/ng-file-upload/ng-file-upload.min.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="/vendor/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/css/style.css">

  <!-- Internal Modulesface -->
  <script src="/js/app.js"></script>
  <script src="/js/jquery.js"></script>
  <script src="/js/controllers/mainController.js"></script>
</head>
<body ng-controller="MainController as main">

  <!-- Navbar fixed top -->
  <div class="navbar  navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>

        </button>
        <a class="navbar-brand" href="#">Face-off</a>
      </div>
      <div class="navbar-collapse collapse">

        <!-- Left nav -->
        <ul class="nav navbar-nav">
          <li><a  id="beardbutton">Beard</a></li>
          <li><a  id="mustaschebutton">Mustasche</a></li>
          <li><a  id="hatbutton">Hat</a></li>
          <li><a  id="necklacebutton">Necklace</a></li>
          <li><a  id="glassesbutton">Glasses</a></li>
          <li><a  id="hairbutton">Hair</a></li>
          <li><a  id="afrobutton">Afro</a></li>

          <li ng-class="{bignoseRED: (main.fatface.nose > 26),bignoseGREEN: (main.fatface.nose < 24), bignoseAMBER: (main.fatface.nose > 24 && main.fatface.nose < 26)}"><a>Nose takes up: {{main.fatface.nose | number : fractionSize}} %</a></li>

        </li>
      </ul>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
       <ul class="nav navbar-nav">

       </ul>
     </div>
   </li>

</li>


<!-- Right nav -->


</div><!--/.nav-collapse -->
</div><!--/.container -->
</div>



<main class="margintop">






 <div class="sidebar"> 
  <h4>Upload Photo</h4>
  <form name="main.form" ng-submit="main.uploadSingle()">
    <input class="form-control" type="file"ngf-select ng-model="main.file" name="file" >

    <button class="btn btn-default" type="submit">Upload photo</button>
  </form>
</div>




</div>

<section>

  <img class="absolute" ng-src="{{main.fatface.filestore}}" />
  <div class="absolutediv"> 
    <img class="beard absoluteP" id="beard"  src="./public/beard0.png" />
    <img class="mustache absoluteP" id="mustache" src="./public/mustache0.png" />
    <img class="hat absoluteP" id="hat" src="./public/hat0.png" />
    <img class="necklace absoluteP" id="necklace" src="./public/necklace0.png" />
    <img class="glasses absoluteP" id="glasses" src="./public/glasses0.png" />
    <img class="hair absoluteP" id="hair" src="./public/hair0.png" />
    <img class="afro absoluteP" id="afro" src="./public/afro0.gif" />
  </div>
</section>



</main>
</body>
</html>