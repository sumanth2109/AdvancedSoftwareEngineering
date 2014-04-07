<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8 />

    <title>Foresquare examples</title>

    <style>
	  <!--  html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
      }
	  -->
	  ::-webkit-scrollbar {
width: 10px;
} /* this targets the default scrollbar (compulsory) */

::-webkit-scrollbar-track {
background-color: transparent;
} /* the new scrollbar will have a flat appearance with the set background color */

::-webkit-scrollbar-thumb {
background-color: black;
border-radius: 20px;
} /* this will style the thumb, ignoring the track */

::-webkit-scrollbar-button {
/* background-color: #7c2929;  */
} /* optionally, you can style the top and the bottom buttons (left and right for horizontal bars) */

::-webkit-scrollbar-corner {
background-color: black;
} /* if both the vertical and the horizontal bars appear, then perhaps the right bottom corner also needs to be styled */

ul{
list-style:none;
-webkit-padding-start: 0px;
}	
.button1 ,.button2
{
 background-color: #7fbf4d;
  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #7fbf4d), color-stop(100%, #63a62f));
  background-image: -webkit-linear-gradient(top, #7fbf4d, #63a62f);
  background-image: -moz-linear-gradient(top, #7fbf4d, #63a62f);
  background-image: -ms-linear-gradient(top, #7fbf4d, #63a62f);
  background-image: -o-linear-gradient(top, #7fbf4d, #63a62f);
  background-image: linear-gradient(top, #7fbf4d, #63a62f);
  border: 2px solid #63a62f;box-shadow: 0 2px 3px #666666;-moz-box-shadow: 0 2px 3px #666666;-webkit-box-shadow: 0 2px 3px #666666;
  -webkit-border-radius: 8px;-moz-border-radius: 8px;border-radius: 8px;
  color: #fff;
  font-family:Verdana, Geneva, sans-serif;
  text-align: center;
  text-shadow: 0 -1px 0 #4c9021;
  
  width: auto;
  padding:8px;
  margin:10px;
  text-decoration:none;
}
.button1{
  font-size:18px;
 	  font-weight:bold;
}
.button2{
  font-size:16px;
}
.button2:hover 
{
    background-color: #76b347;
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #76b347), color-stop(100%, #5e9e2e));
    background-image: -webkit-linear-gradient(top, #76b347, #5e9e2e);
    background-image: -moz-linear-gradient(top, #76b347, #5e9e2e);
    background-image: -ms-linear-gradient(top, #76b347, #5e9e2e);
    background-image: -o-linear-gradient(top, #76b347, #5e9e2e);
    background-image: linear-gradient(top, #76b347, #5e9e2e);
    box-shadow: 0 2px 3px #666666;
	-moz-box-shadow: 0 2px 3px #666666;
	-webkit-box-shadow: 0 2px 3px #666666;
	-webkit-border-radius: 8px;-moz-border-radius: 8px;border-radius: 8px;
    cursor: pointer; 
}
a:link, a:visited { color: #0066CC; text-decoration: none; font-weight: normal; padding:5px;} 
a:active, a:hover { color: #CC0000; text-decoration: underline;  padding:5px;}

img { margin: 0px; padding: 0px; border: none; }

.cleaner { clear: both; width: 100%; height: 0px; font-size: 0px;  }
.field1{
 width:250px;box-shadow: 0 0 6px #666666;-moz-box-shadow: 0 0 6px #666666;-webkit-box-shadow: 0 0 6px #666666;font-family:Verdana, Geneva, sans-serif; font-size:12px; font-weight:normal;height:28px; padding:3px;padding-left:10px;padding-right:10px; padding-top:2px;border: 1px solid  #F1F1F1;outline:none;border-radius: 5px;-moz-border-radius: 5px;-webkit-border-radius:5px;}
.field1:focus {outline:none;border: 1px solid #4195fc;box-shadow: 0 0 12px #66F;-moz-box-shadow: 0 0 12px #66F;-webkit-box-shadow: 0 0 12px #66F;}
	body{
	margin:0px;
	font-family: Georgia,Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: black;
	}
        ul#photos{overflow:hidden; margin:0; padding:0;}
        ul#photos li{overflow:hidden; width: 150px; height: 150px; float:left; list-style-type:none;}
        ul#photos li img{}
		#venue{
		background:#eee;
		width:50%;
		position:fixed;
		float:right;
		top:0px;
		height:100%;
		right:0px;
		bottom:0px;
		overflow-y:scroll;
		}
		#searcher{
width: 50%;
float: left;
top: 0px;
position: fixed;
margin: auto;
left: 0px;
bottom: 0px;
height: 100%;
		}
				#trendResultsdiv,#searchResultsdiv{
height: 40%;
width: 80%;
margin:0px auto;
				}
		#trendResults,#searchResults{
height: 90%;
overflow-y: scroll;
list-style:none;
margin:0px auto;
}
#searchbox{
height: 18%;
overflow-y: scroll;
width: 80%;
margin: auto;
}
#loading{
width: 100%;
height: 100%;
position: fixed;
z-index: 1000;
height: 100%;
display: none;
background: rgba(33,33,33, 0.5);
}
#loading p{
top: 33%;
left: 30%;
position: fixed;
color: white;
font-size: 20px;
}
    </style>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyB-AkunhkulkMjcl_99MWJzMRpzpZGFlic&sensor=false"></script>



			
</head>
<body>
<div style="width:100%;left:0px;right:0px;top:0px;position:fixed;height:3%;text-align:center;z-index:100;"><a href="index.php" class="button2" style="color:white;">Home</a></div>
<span style="">
        <div id="venue">
		<div id="googleMap" style="width:100%;height:45%;"></div>
            <div id="name"></div>
            <div id="id"></div>
            <div id="location"></div>
            <div id="rating"></div>
            <ul id="photos"><li></li></ul>

            
            <ul id="events"><li></li></ul>

            
            <ul id="tips"><li></li></ul>

            
            <ul id="specials"><li></li></ul>

            
            <ul id="times"><li></li></ul>

            <div id="foursquare">
            </div>
			<br><br><br><br>
            <!-- Place this script somewhere after the anchor tag above. If you have multiple buttons, only include the script once. -->
        </div>
	<div id="searcher">
		<div id="searchbox"><br>
		<span style="font-size:15px;font-weight:bold;">Location:	</span><input type="text" id="search1" class="field1" value="chennai"  onfocus="clearText(this)" onblur="clearText(this)" style="opacity:0.5;width: 20%;">
		<span style="margin-left:10%;font-size:15px;font-weight:bold;">Limit: </span><input type="text" id="limit1" class="field1" value="15"  onfocus="clearText(this)" onblur="clearText(this)" style="opacity:0.5;width: 10%;">
		<span style="font-size:15px;font-weight:bold;"><br>Venue:</span><input type="text" id="query11" class="field1" value="KFC"  onfocus="clearText(this)" onblur="clearText(this)" style="opacity:0.5;width: 20%;">
			<span style="margin-left:10%;"></span><button id="searchbtn" class="button2" >search</button>
		</div>
		<div id="searchResultsdiv">Search Results<ul id="searchResults"></ul></div>
		<div id="trendResultsdiv">Trend Results<div id="trendResults"></div></div>
	</div>
<div id="loading">
  <p><img src="loading.gif" /></p>
</div>
    <script type="text/javascript" charset="utf-8">
<?php if($_SERVER['REQUEST_METHOD'] == 'POST') 	{
echo '
search1.value="'.$_POST['location'].'";
query11.value="'.$_POST['venue'].'";
limit1.value=50;
';
} ?>
	$( document ).ajaxStop(function() {
  $( "#loading" ).hide();
});
        var foursquareApi = {
            clientId: "EE4AU2C0QYXOC3BJ3SKXKXPDZ4MAYUF02OBTAZ2W4KBEOPQ3",
            clientSecret: "5M0LBKCUJ2JX13MOL3PMMG5SWYH1IW3ZKJCXFA410TDVX2SD",
            oauth_token:"DERSMRFH41SVJ0LCQJ0C5MTTNAPADQGWIJNZFTPZET2YDHPR",
          //  code: "HQEV3FJDFEZXOUHWSATSNUNH1ZF5NNUFAHBCY0Y3ZPJ0RRNM",
            redirectUrl : "http://localhost/foursquare/",
            authorize: function(){
                var url = "https://foursquare.com/oauth2/access_token";
                    url += "?client_id="+this.clientId;
                    url += "&client_secret="+this.clientSecret;

                    this.getJson(url, function(data){
                        console.log("authorize",data);
                    })
            },
            getCode : function(){
                var url = "https://foursquare.com/oauth2/authenticate";
                    url += "?client_id="+this.clientId;
                    url += "&response_type=code";
                    url += "&redirect_uri="+this.redirectUrl;
                    this.getJson(url, function(data){
                        console.log("code",data);
                    })

            },
            getJson: function(url, callback){
                $.getJSON(url, function(data) {
                  callback(data);
                });
            },
            getPhotos: function(venueAlbums){
                var heightDimension = 150;
                var widthDimension = 150;

                var dimensions = heightDimension+'x'+widthDimension;

                var album = "";
                //loop over groups
                $.each(venueAlbums, function(index, value) {
                    //loop over items
                    $.each(value.items, function(index, v) {
                        album += '<li><img src="'+v.prefix+dimensions+v.suffix+'"></li>';
                    });
                });
                $('#venue #photos').html(album);
            },
            bindTrendEvent: function(){
                var that = this;
                $("a.trendlist").on("click", function(event){
                    event.preventDefault();
                    var venueId = $(this).data("venueid");
                    that.exploreVenue(venueId);
                });
            },
            bindSearchEvent: function(){
                var that = this;
                $("a.searchlist").on("click", function(event){
                    event.preventDefault();
                    var venueId = $(this).data("venueid");
                    that.exploreVenue(venueId);
                });
            },
            bindVenueEvent: function(){
                var that = this;
                $("#venue button").on("click", function(event){
                    event.preventDefault();
                    var venueId = $("#venue").data("venueId");
                    that.markToDo(venueId);
                });
            },
            getLatestVersion: function(){
                var d = new Date();
                var year = d.getFullYear();
                var month = d.getMonth();
                var day = d.getMonth();

                if(month <10){
                    month = "0"+month;
                }
                if(day <10){
                    day = "0"+day;
                }
                return year+month+day;
            },
            search: function(){

var location=search1.value;
                this.viewTrends(location);

                this.exploreVenueCategories();
var query=query11.value;
var limit = limit1.value;
                var latestversion = this.getLatestVersion();
                var that = this;

                var url = "https://api.foursquare.com/v2/venues/search?near="+location+"&query="+query+"&limit="+limit+"&oauth_token="+this.oauth_token+"&v="+latestversion;
                console.log("url", url);
		$("#loading").show();
                this.getJson(url, function(data){
				$("#loading").hide();
                    console.log("getting data ", data);
                    var setOfVenues = data.response.venues;
  //                  var template = '<ul id="searchResults"></ul>';
  //                  $('body').append(template);
 $('#searchResults').empty();
                    $.each(setOfVenues, function(index, value) {
                        console.log(value);
                        var innterListItem = '<li><a class="searchlist" data-venueid="'+value.id+'" href="#">'+value.name+' - '+value.location.address+' - '+value.location.city+'</a></i>';
                        $('#searchResults').append(innterListItem);
                    });
                    that.bindSearchEvent();
                });
            },
            viewTrends: function(location){

                var that = this;

                //var location = "44.3,37.2";
                var limit = limit1.value;
                var radius = 2000 ;

                //&limit="+limit+"&radius="+radius+"
                var latestversion = this.getLatestVersion();
				 var url = "https://api.foursquare.com/v2/venues/search?near="+location+"&client_id="+this.clientId+"&client_secret="+this.clientSecret+"&v="+latestversion;
               // var url = "https://api.foursquare.com/v2/venues/trending?ll="+location+"&client_id="+this.clientId+"&client_secret="+this.clientSecret+"&v="+latestversion;
                //var url = "https://api.foursquare.com/v2/venues/trending?ll="+location+"&oauth_token="+this.oauth_token+"&v="+latestversion;
                this.getJson(url, function(data){
                    console.log("getting trends", data);
 $('#trendResults').empty();
                    var setOfVenues = data.response.venues;
    //                var template = '<ul id="trendResults"></ul>';
     //               $('body').append(template);

                    $.each(setOfVenues, function(index, value) {
                      
						console.log(value);
                        var innterListItem = '<li><a class="trendlist" data-venueid="'+value.id+'" href="#">'+value.name+' - '+value.location.address+' - '+value.location.city+'</a></i>';
                        $('#trendResults').append(innterListItem);
                    });
                    that.bindTrendEvent();
                });

            },
            viewEvents: function(venueId){
                var latestversion = this.getLatestVersion();
                var url = "https://api.foursquare.com/v2/venues/"+venueId+"/events?client_id="+this.clientId+"&client_secret="+this.clientSecret+"&v="+latestversion;
               // var url = "https://api.foursquare.com/v2/venues/"+venueId+"/events?oauth_token="+this.oauth_token+"&v="+latestversion;
                this.getJson(url, function(data){
                    console.log("getting events", data);

                    var setOfEvents = data.response.events.items;
                    //var template = '<ul id="eventResults"></ul>';
                    //$('body').append(template);

                    $('#events').empty();
					$('#events').append("<h3>Events</h3>");
                    $.each(setOfEvents, function(index, value) {
                        console.log(value);
                        var innterListItem = '<li>'+value.name+' - allday : '+value.allDay+'</i>';
                        $('#events').append(innterListItem);
                    });
                    //that.bindTrendEvent();
                });

            },
            exploreVenueCategories: function(){
                var latestversion = this.getLatestVersion();
                var url = "https://api.foursquare.com/v2/venues/categories?oauth_token="+this.oauth_token+"&v="+latestversion;
                this.getJson(url, function(data){
                    console.log("getting venues categories", data);

                    var setOfVenueCategories = data.response.categories;
                    //var template = '<ul id="eventResults"></ul>';
                    //$('body').append(template);

                    $.each(setOfVenueCategories, function(index, value) {
                        console.log(value.name);

                        //loop over items
                        $.each(value.categories, function(index, v) {
                            console.log("-"+v.name);
                        });
                        //var innterListItem = '<li><a class="trendlist" data-venueid="'+value.id+'" href="#">'+value.name+' - '+value.id+'</a></i>';
                        //$('#eventResults').append(innterListItem);
                    });
                    //that.bindTrendEvent();
                });
            },
            exploreCategories: function(){
                var latestversion = this.getLatestVersion();
                var url = "https://api.foursquare.com/v2/events/categories?oauth_token="+this.oauth_token+"&v="+latestversion;
                this.getJson(url, function(data){
                    console.log("getting categories", data);

                    var setOfCategories = data.response.categories;
                    //var template = '<ul id="eventResults"></ul>';
                    //$('body').append(template);

                    $.each(setOfCategories, function(index, value) {
                        console.log(value.name);

                        //loop over items
                        $.each(value.categories, function(index, v) {
                            console.log("-"+v.name);
                        });
                        //var innterListItem = '<li><a class="trendlist" data-venueid="'+value.id+'" href="#">'+value.name+' - '+value.id+'</a></i>';
                        //$('#eventResults').append(innterListItem);
                    });
                    //that.bindTrendEvent();
                });
            },
            exploreVenue: function(venueId){
                var latestversion = this.getLatestVersion();
                var url = "https://api.foursquare.com/v2/venues/"+venueId+"?oauth_token="+this.oauth_token+"&v="+latestversion;

                var that = this;
$("#loading").show();               
			   this.getJson(url, function(data){
$("#loading").hide();
                    var venue = data.response.venue;
                    console.log("venue",venue);


lat=venue.location.lat;
lang=venue.location.lng;


var mapProp = {
  center: new google.maps.LatLng(lat,lang),
  zoom:15,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

marker=new google.maps.Marker({
  position:new google.maps.LatLng(lat,lang),
  animation:google.maps.Animation.BOUNCE
  });

marker.setMap(map);


//google.maps.event.addDomListener(window, 'load', initialize);
                    $('#venue #name').html("<b>Name : </b> "+venue.name);
                    $('#venue #id').html("<b>Venue Id : </b> "+venue.id);
                    $('#venue #location').html("<b>Address : </b> "+venue.location.address+"<br><b>Street : </b> "+venue.location.crossStreet+"<br><b>City : </b> "+venue.location.city+"<br><b>state : </b> "+venue.location.state+"<br><b>Latitude,Longitude</b>     "+venue.location.lat+","+venue.location.lng+"<br><b>Country : </b> "+venue.location.country+"<br><b>Pin Code</b>     "+venue.location.postalCode);
                    $('#venue #rating').html("<br><b>Rating</b>     :"+venue.rating);
                    $('#venue').data("<br>venueId", venue.id);

                    that.viewEvents(venue.id);
                    that.getTips(venue.tips.groups);
                    that.getSpecials(venue.specials);
                    that.getHours(venue.id);

                    var foursquareObj = {
                                            id: venue.id,
                                            name: venue.name,
                                            streetAddress: venue.location.address,
                                            locality: venue.location.city,
                                            region: venue.location.state,
                                            postalCode: venue.location.postalCode,
                                        };

                    var venuePhotoCount = venue.photos.count;
                    var venueAlbums = venue.photos.groups;

                    that.getPhotos(venueAlbums);
                    that.bindVenueEvent();
                    that.myFoursquareReplaceSave(foursquareObj);
                });
            },
            getTips: function(tips){
                    $('#tips').empty();
					$('#tips').append("<h3>Tips</h3>");
                    //loop over groups
                    $.each(tips, function(index, value) {
                        //loop over items
                        $.each(value.items, function(index, v) {
                            console.log("the tip ", v.text);
                            $('#tips').append('<li>'+v.text+'</li>');
                        });
                    });
            },
            getSpecials: function(specials){
                    $('#specials').empty();
					$('#specials').append("<h3>Specials</h3>");
                    //loop over groups
                    console.log("specials", specials);
            },
            getHours: function(venueId){
                $('#times').hide();
                var daysofweek = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

                var latestversion = this.getLatestVersion();
                var url = "https://api.foursquare.com/v2/venues/"+venueId+"/hours?oauth_token="+this.oauth_token+"&v="+latestversion;
                console.log("getHours");
                this.getJson(url, function(data){
                    console.log("data.response", data.response);
                    if(data.response.hours.timeframes != undefined){
                        $('#times').show();
                        $('#times').empty();
						$('#times').append('<h3>Opening Times</h3>');
                        var timeframes = data.response.hours.timeframes;
                        $.each(timeframes, function(index, value) {
                            //loop over days
                            var startTime = value.open[0].start;
                            var endTime = value.open[0].end;

                            $.each(value.days, function(index, v) {
                                $('#times').append('<li>'+daysofweek[v-1]+'  : '+startTime+'-'+endTime+'</li>');
                            });
                        });
                    }
                });
            },
            markToDo: function(venueId){
                console.log("mark venue id", venueId);
                //https://api.foursquare.com/v2/venues/4d825176bede5481abdd0fd1/marktodo
            },
            myFoursquareReplaceSave: function(foursquareObj) {

                var vcartTitle = "hcard-"+foursquareObj.id;
                var vcard = '<div id="'+vcartTitle+'" class="vcard"><span class="fn"><span class="given-name">'+foursquareObj.name+'</span></span><div class="adr"><div class="street-address">'+foursquareObj.streetAddress+'</div><span class="locality">'+foursquareObj.locality+'</span><span class="region">'+foursquareObj.region+'</span><span class="postal-code">'+foursquareObj.postCode+'</span></div></div>';
                var fourSquareButton = '<a href="https://foursquare.com/intent/venue.html" class="fourSq-widget" data-context="'+vcartTitle+'" data-variant="wide">Save to foursquare</a>';

                $('#foursquare').empty().html(vcard+fourSquareButton);
                this.startWidget();
            },
            init: function(){
                this.search();
            },
            startWidget: function(){
                window.___fourSq = {};
                var s = document.createElement('script');
                s.type = 'text/javascript';
                s.src = 'http://platform.foursquare.com/js/widgets.js';
                s.async = true;
                var ph = document.getElementsByTagName('script')[0];
                ph.parentNode.insertBefore(s, ph);
            }
        };

    </script>
            <script type='text/javascript'>
<?php if($_SERVER['REQUEST_METHOD'] == 'POST') 	{ echo 'foursquareApi.init(); foursquareApi.startWidget();';  } ?>
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = "";
    else if (field.value == "") field.value = field.defaultValue;
}
                $(document).ready(function() {
                     $("#searchbtn").click(function(){
					 foursquareApi.init();
                    foursquareApi.startWidget();
					});
                });
            
			</script>
	</body>
</html>