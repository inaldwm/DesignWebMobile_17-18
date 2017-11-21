<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Trombinoscope</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://d3js.org/d3.v4.min.js"></script>
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

  </head>

  <body>
    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle">
      <i class="fa fa-bars"></i>
    </a>
    <nav id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle">
          <i class="fa fa-times"></i>
        </a>
        <li class="sidebar-brand">
          <a class="js-scroll-trigger" href="#top">Start Bootstrap</a>
        </li>
        <li>
          <a class="js-scroll-trigger" href="#top">Home</a>
        </li>
        <li>
          <a class="js-scroll-trigger" href="#about">Trombi</a>
        </li>
        <li>
          <a class="js-scroll-trigger" href="#portfolio">Our Work</a>
        </li>
        
      </ul>
    </nav>

    <!-- Header -->
    <header class="header" id="top">
      <div class="text-vertical-center">
        <h1>Trombinoscope</h1>
        <h3>Licence professionnelle Design Web Mobile 2017-2018</h3>
        <br>
        <a href="#about" class="btn btn-dark btn-lg js-scroll-trigger">en savoir plus</a>
      </div>
    </header>

    <!-- About -->
    <section id="about" class="about">
      <div class="container text-center">
      <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<div id="content">
    <ul class="images">

<script>

// Obtention de l'API.
$.getJSON("https://api.flickr.com/services/rest/?method=flickr.photosets.getPhotos&api_key=79672885f8a018343cd8849f57e8a50a&photoset_id=72157686701939221&extras=original_format&format=json&jsoncallback=?",
function(data){
    
    // Debut de la boucle
    $.each(data.photoset.photo, function(i,item){
        // Sockage de l'image dans une variable
        var photo = 'http://farm' + item.farm + '.static.flickr.com/' + item.server + '/' + item.id + '_' + item.secret + '_m.jpg';
        // Sockage de l'url dans une variable
        var url= 'http://farm' + item.farm + '.static.flickr.com/' + item.server + '/' + item.id + '_' + item.secret + '_c.jpg';
        // Affichage des images dans la balise ul#images avec le l'url dans la balise li
      $("<img/>").attr({src: photo, alt: item.title}).appendTo(".images").wrap("<li><a href=' "+ url +"' title=' "+ item.title +" ' ></a><span id='data"+i+"'/></li>");
    });
     //Fin de la boucle
  //récupération des données du formulaire google
    var url = 'https://docs.google.com/spreadsheets/d/e/2PACX-1vT4vIu2pcoPH6Vng35aQzwRAxQV9ogt8B9fyp-3cr1aVEdEh5rAhDfj_sB7OYoeLRZGalhq1trkCLRd/pub?gid=2097717787&single=true&output=csv';
    //var url = "test.csv";        
    d3.csv(url, function(data) {
        dataForm = data;
        dataForm.forEach(function(d){
            var np = d['num photo'];
            var nom = d['Votre nom'];	
            var prenom = d['Votre prénom'];	
            d3.select("#data"+np)
            .text(prenom+'  '+nom);
        
        
        
        });		
        
    });
});
</script>
</ul>
</div>
      <!-- /.container -->
    </section>


    <!-- Callout -->
    <aside class="callout">
      <div class="text-vertical-center">
        
      </div>
    </aside>

    <!-- Portfolio -->
    <section id="portfolio" class="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 mx-auto text-center">
            <h2>Our Work</h2>
            <hr class="small">
            <div class="row">
              <div class="col-md-6">
                <div class="portfolio-item">
                  <a href="#">
                    <img class="img-portfolio img-fluid" src="img/portfolio-1.jpg">
                  </a>
                </div>
              </div>
              <div class="col-md-6">
                <div class="portfolio-item">
                  <a href="#">
                    <img class="img-portfolio img-fluid" src="img/portfolio-2.jpg">
                  </a>
                </div>
              </div>
              <div class="col-md-6">
                <div class="portfolio-item">
                  <a href="#">
                    <img class="img-portfolio img-fluid" src="img/portfolio-3.jpg">
                  </a>
                </div>
              </div>
              <div class="col-md-6">
                <div class="portfolio-item">
                  <a href="#">
                    <img class="img-portfolio img-fluid" src="img/portfolio-4.jpg">
                  </a>
                </div>
              </div>
            </div>
            <!-- /.row (nested) -->
            
          </div>
          <!-- /.col-lg-10 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>

    <!-- Call to Action -->
    <aside class="call-to-action bg-primary text-white">
      <div class="container text-center">
        <h3>Université Paris 8</h3>
        <a href="https://www.univ-paris8.fr/" class="btn btn-lg btn-light">Cliquez ici !</a>
      </div>
    </aside>

    <!-- Map -->
    <section id="contact" class="map">
      <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2620.4487987380126!2d2.3613735!3d48.9449396!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6695017810e3d%3A0x95196baf9263e53a!2sUniversit%C3%A9+Paris+8!5e0!3m2!1sfr!2sfr!4v1510766141148"></iframe>
      <br/>
      
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-10 mx-auto text-center">
            
            <hr class="small">
            <p class="text-muted">Copyright &copy; Dylan CLAUDIN 2017</p>
          </div>
        </div>
      </div>
      <a id="to-top" href="#top" class="btn btn-dark btn-lg js-scroll-trigger">
        <i class="fa fa-chevron-up fa-fw fa-1x"></i>
      </a>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/stylish-portfolio.js"></script>

  </body>

</html>
