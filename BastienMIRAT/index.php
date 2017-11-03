<?php require_once 'header.php'; ?>
<h1>Welcome to DWM</h1>  
<script src="https://d3js.org/d3.v4.min.js"></script>
<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<body>
		<div id="intro">
			Présentation des étudiants en L3 Design Web Mobile.
		</div>
		<div id="content">
			<ul class="photo">
				
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
				      $("<img/>").attr({src: photo, alt: item.title}).appendTo(".photo").wrap("<li><a href=' "+ url +"' title=' "+ item.title +" ' ></a></li>");
				 
				    }); //Fin de la boucle
				});
				</script>
			</ul>
		</div>
		
	</body>
</div>

<?php require_once("footer.php"); ?>
