<?php require_once 'header.php'; ?>
<h1>Welcome to DWM</h1>  
<script src="https://d3js.org/d3.v4.min.js"></script>
<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- personal css file -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="http://dimplejs.org/dist/dimple.v2.3.0.min.js"></script>


<body style="background-color: #e0e2bf;">
    <div class="wrapper">
       
        <div class="centerorange"><h5 class="white">Année universitaire 2017-2018 </h5> </div>
        <br><br>

        <div class="container">
            <div class="row" id="etuCards" >
            </div>
        </div>
				
				 <script>
            var dataPhoto;
            
            var urlFlickr = "https://api.flickr.com/services/rest/?method=flickr.photosets.getPhotos&api_key=79672885f8a018343cd8849f57e8a50a&photoset_id=72157686701939221&extras=original_format&format=json&jsoncallback=?";
            $.getJSON(urlFlickr,
            function(data){
                dataPhoto = data;
                var url = 'https://docs.google.com/spreadsheets/d/e/2PACX-1vT4vIu2pcoPH6Vng35aQzwRAxQV9ogt8B9fyp-3cr1aVEdEh5rAhDfj_sB7OYoeLRZGalhq1trkCLRd/pub?gid=2097717787&single=true&output=csv';
                d3.csv(url, function(data) {
                    var cards = d3.select('#etuCards').selectAll(".col-sm-3 col-md-4").data(data).enter()
                        .append('div').attr('class','col-sm-3 mb-4')
                        .append("div").attr('class','card');
                    cards.append("img")
                            .attr('class','card-img-top hvr-bounce-in')
                            .attr('src',function(d) {
                                var item = dataPhoto.photoset.photo[d['num photo']];
                                var src = 'http://farm' + item.farm + '.static.flickr.com/' + item.server + '/' + item.id + '_' + item.secret + '_c.jpg';
                                return src;
                            });
                    var cardBody = cards.append('div').attr('class','card-body');
                    cardBody.append('h4').attr('class','card-title')
                                .text(function(d) {
                                    return d['Votre prénom'].substr(0,1).toUpperCase() +d['Votre prénom'].substr(1).toLowerCase() + '  ' + d['Votre nom'].toUpperCase();
                                });
                    cards.append('div').attr('class','card-footer')
                        .append('small').attr('class','text-muted')
                        .text(function(d) {
                            return d['Votre mail'].toLowerCase();
                        });
                });
            });
        </script>

			</div>
	
	</body>
</div>

<?php require_once("footer.php"); ?>
