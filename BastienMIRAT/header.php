<html lang="fr">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/loic.ico">

    <title>GROS TITRE</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap335/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">


</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span><img src="images/paco.jpg" style="width: 30px"</span>
          </button>
              <a class="navbar-brand" href="index.php">Evain Company</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">

            <li class="dropdown">
            <li><a href="#menu-toggle" class="menu" id="menu-toggle">Menu inutile</a></li>
           
          </ul>
          <ul class="p nav navbar-nav">

    
          </ul>


      </div>
    </nav>



        <div id="wrapper" class="toggled">
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand">
                      <li><br><a href="">Rien</a></li>
                      <li><a href="">Toujours rien</a></li>
                      
                </ul>
            </div>
        </div>

    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

  </body>
