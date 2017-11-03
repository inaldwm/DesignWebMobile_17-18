<html>
    <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" media="screen" type="text/css" title="Css" href="styles.css" />

    <title>Trombinoscope</title>
    </head>
    <body>
    <h1>Trombinoscope Licence professionnelle DWM 2017-2018</h1>
    
<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<div id="content">
    <ul class="images">

<script>

//merci beaucoup à https://etienner.fr/flickr-json
//$.getJSON("http://api.flickr.com/services/rest/?method=flickr.photosets.getPhotos&api_key=clef-API&photoset_id=le_photoset&extras=original_format&format=json&jsoncallback=?",
$.getJSON("https://api.flickr.com/services/rest/?method=flickr.photosets.getPhotos&api_key=79672885f8a018343cd8849f57e8a50a&photoset_id=72157686701939221&extras=original_format&format=json&jsoncallback=?",
function(data){
    // Debut de la boucle
    $.each(data.photoset.photo, function(i,item){
        // Sockage de l'image dans une variable
        var photo = 'http://farm' + item.farm + '.static.flickr.com/' + item.server + '/' + item.id + '_' + item.secret + '_c.jpg';
        // Sockage de l'url dans une variable
        var url= 'http://farm' + item.farm + '.static.flickr.com/' + item.server + '/' + item.id + '_' + item.secret + '_c.jpg';
        // Affichage des images dans la balise ul#images avec le l'url dans la balise li
        $("<img/>").attr({src: photo, alt: item.title}).appendTo(".images").wrap("<li><a href=' "+ url +"' title=' "+ item.title +" ' ></a></li>");
    }); 
});

</script>
</ul>

</div>
</body>
</html>