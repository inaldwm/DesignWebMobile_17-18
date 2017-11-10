<?php require_once 'header.php'; ?>
<h1>Welcome to DWM</h1>  
<script src="https://d3js.org/d3.v4.min.js"></script>
<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<body>
		<div id="intro">
			Présentation des étudiants en L3 Design Web Mobile.
		</div>
		<div id="content">
			<ul class="photo" id="lstPhoto" >
				
				<script>
				// Obtention de l'API.
				$.getJSON("https://api.flickr.com/services/rest/?method=flickr.photosets.getPhotos&api_key=79672885f8a018343cd8849f57e8a50a&photoset_id=72157686701939221&extras=original_format&format=json&jsoncallback=?",
				function(data){
					
				    // Debut de la boucle
				    $.each(data.photoset.photo, function(i,item){
				        // Sockage de l'image dans une variable
				        var photo = 'http://farm' + item.farm + '.static.flickr.com/' + item.server + '/' + item.id + '_' + item.secret + '_n.jpg';
				        // Sockage de l'url dans une variable
				        var url= 'http://farm' + item.farm + '.static.flickr.com/' + item.server + '/' + item.id + '_' + item.secret + '_c.jpg';
				        // Affichage des images dans la balise ul#images avec le l'url dans la balise li
				      $("<img/>").attr({src: photo, alt: item.title}).appendTo("#lstPhoto").wrap("<li><a href=' "+ url +"' title=' "+ item.title +" ' ></a><span id='data"+i+"'/></li>");
				 
				    }); //Fin de la boucle


				  //récupération des données du formulaire google
					var url = 'https://docs.google.com/spreadsheets/d/e/2PACX-1vT4vIu2pcoPH6Vng35aQzwRAxQV9ogt8B9fyp-3cr1aVEdEh5rAhDfj_sB7OYoeLRZGalhq1trkCLRd/pub?gid=2097717787&single=true&output=csv';
				    //var url = "data/LPDesignWebMobile_17-18.csv";        
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
		
	</body>
</div>

<?php require_once("footer.php"); ?>
