

@extends('layouts.app')

@section('content')

 
 <style type="text/css">
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }

      /* Optional: Makes the sample page fill the window. */
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }

      #description {
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
      }

      #infowindow-content .title {
        font-weight: bold;
      }

      #infowindow-content {
        display: none;
      }

      #map #infowindow-content {
        display: inline;
      }

      .pac-card {
        margin: 10px 10px 0 0;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        background-color: #fff;
        font-family: Roboto;
      }

      #pac-container {
        padding-bottom: 12px;
        margin-right: 12px;
      }

      .pac-controls {
        display: inline-block;
        padding: 5px 11px;
      }

      .pac-controls label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }

      #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 400px;
      }

      #pac-input:focus {
        border-color: #4d90fe;
      }

      #title {
        color: #fff;
        background-color: #4d90fe;
        font-size: 25px;
        font-weight: 500;
        padding: 6px 12px;
      }

      #target {
        width: 345px;
      }
    </style>




                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
					
					
					
					  <div class="banner-sec ptb100">
     <div class="container">
	  <div class="bnr-div d-flex ">
		  <div class="bnr-img">
		     <img src="{{ asset('images/Bitmap.png') }}">
		  </div>
		 
		  <div class="bnr-cnt">
		    <h1>Affordable, reliable home cleaners</h1>
			  	  <form class="pl110">
			  <div class="bnr-frm">
			      <h4>Book and pay securely online</h4>
			
				    <input type="text" id="postcode" placeholder="Your postcode">
				    <input type="text" placeholder="Your postcodeYour email" class="width-big">
				 
			  </div>
			  
			  <div class="bnr-frm">
			    <h5>Book and pay securely online</h5>
				    <input type="text" id="bedrooms" class="fixPrice" name = "bedrooms" placeholder="Bedrooms" value="">
				    
				    <input type="text" id="living_rooms" class="fixPrice" name = "living_rooms" placeholder="Living rooms" value="">
				    
				    <input type="text" id="bathrooms" class="fixPrice" name = "bathrooms" placeholder="Bathrooms" value="">
				
			  </div>
			    <div class="bnr-frm">
				   <h5>How often?</h5>
					<div class="radio-select  d-flex justify-content-between">
					<label class="radio-slect">Weekly
					  <input type="radio" class="fixPrice howoften" checked = "checked" name="radio" value="weekly" id="fix_price">
					  <span class="checkmark"></span>
					</label>
					<label class="radio-slect">Fortnightly
					  <input type="radio"  class="fixPrice howoften" name="radio" value="fortnightly" id="for_nightly">
					  <span class="checkmark"></span>
					</label>
					<label class="radio-slect">Monthly
					  <input type="radio"  class="fixPrice howoften" name="radio" value="monthly" id="monthly">
					  <span class="checkmark"></span>
					</label>
					</div>
					
				</div>		    
             </form>
              <div class="btn-cnt">
			     <div class="btn-cnt-inner"><h4>£  <span id="Amount"></span> </h4><h4>for</h4> <h4 id="hrTime"> </h4></div>
				  <p>Choose tasks and hours when you book</p>
				  <a href="#" class="big-btn">BOOK SECURELY ONLINE</a>
			  </div>
		  </div>
		  
	  </div>
	  
	  </div>	
  </div>	
	
	
<!-----Banner-end------->	
	
	
<!----Work-sec-Start------->
	
<div class="work-sec ">
	<div class="container">
	   <div class="title text-center">
		  <h2>How does it work?</h2>
		</div>
		 <div class="row h-100">
		    <div class="col-md-6 h-100">
			   <div class="work-dev  pb">
				  <div class="work-icon">
				     <img src="{{ asset('images/icon-2.png') }}">
					  <div class="work-inr">
					     <h5>Quick and easy booking</h5>
						 <ul>
						    <li>Tell us about your home</li>
						    <li> Choose your preferred hours</li>
						    <li>Choose any additional tasks</li>
						    <li>Give us address and contact details</li>
						    <li>Pay a small deposit</li>
							 <li> Receive an email with your cleaner’s details</li>
						  </ul>
					  </div>
				   </div>
				</div>
			 </div>
			  <div class="col-md-6 h-100">
			     <div class="work-dev">
				  <div class="work-icon">
				     <img src="{{ asset('images/icon-1.png') }}">
					  <div class="work-inr">
					     <h5>Meet your cleaner</h5>
						 <ul>
						    <li>Your cleaner will call you to arrange a meeting</li>
						    <li> Meet and start cleaning on the same day or meet to start on another day</li>
						    <li> Arrange access – at home? key?</li>
						    <li>Explain specific needs and products</li>
						    <li>Set cleaning priorities</li>
							 <li>Introduce your pets</li>
						  </ul>
					  </div>
				   </div>
				</div>
			 </div>
		  </div>
		<div class="btn-sec text-center">
		   <a href="#" class="big-btn">BOOK SECURELY ONLINE</a>
		</div>
		
	 </div>
</div>
	
<!-----Work-sec-end------->	
	
	<!---Hapuy-custmer-Start------->
	  <div class="custm-sec ptb100">
	    <div class="container">
		    <div class="title text-center">
			  <h2>Our happy customers</h2>
				<p><strong>4.9/5.0</strong> avg. customer rating on Trustist</p>
			</div> 

			<div class="Clint-review">
			     <section class="regular slider">
					<div class="clint-msg">
						<ul class="d-flex">
						  <li><i class="fa fa-star" aria-hidden="true"></i></li>
						  <li><i class="fa fa-star" aria-hidden="true"></i></li>
						  <li><i class="fa fa-star" aria-hidden="true"></i></li>
						  <li><i class="fa fa-star" aria-hidden="true"></i></li>
						  <li><i class="fa fa-star" aria-hidden="true"></i></li>
						</ul>
						
						<h6>“We are very happy with Sophie, she is doing a great job for us!”</h6>
						<p>for us!”</p>
						
					 
					</div>
							<div class="clint-msg">
						<ul class="d-flex">
						  <li><i class="fa fa-star" aria-hidden="true"></i></li>
						  <li><i class="fa fa-star" aria-hidden="true"></i></li>
						  <li><i class="fa fa-star" aria-hidden="true"></i></li>
						  <li><i class="fa fa-star" aria-hidden="true"></i></li>
						  <li><i class="fa fa-star" aria-hidden="true"></i></li>
						</ul>
						
						<h6>“We are very happy with Sophie, she is doing a great job for us!”</h6>
						<p>for us!”</p>
						
					 
					</div>
					<div class="clint-msg">
						<ul class="d-flex">
						  <li><i class="fa fa-star" aria-hidden="true"></i></li>
						  <li><i class="fa fa-star" aria-hidden="true"></i></li>
						  <li><i class="fa fa-star" aria-hidden="true"></i></li>
						  <li><i class="fa fa-star" aria-hidden="true"></i></li>
						  <li><i class="fa fa-star" aria-hidden="true"></i></li>
						</ul>
						
						<h6>“We are very happy with Sophie, she is doing a great job for us!”</h6>
						<p>for us!”</p>
						
					 
					</div>
						<div class="clint-msg">
						<ul class="d-flex">
						  <li><i class="fa fa-star" aria-hidden="true"></i></li>
						  <li><i class="fa fa-star" aria-hidden="true"></i></li>
						  <li><i class="fa fa-star" aria-hidden="true"></i></li>
						  <li><i class="fa fa-star" aria-hidden="true"></i></li>
						  <li><i class="fa fa-star" aria-hidden="true"></i></li>
						</ul>
						
						<h6>“We are very happy with Sophie, she is doing a great job for us!”</h6>
						<p>for us!”</p>
						
					 
					</div>
							<div class="clint-msg">
						<ul class="d-flex">
						  <li><i class="fa fa-star" aria-hidden="true"></i></li>
						  <li><i class="fa fa-star" aria-hidden="true"></i></li>
						  <li><i class="fa fa-star" aria-hidden="true"></i></li>
						  <li><i class="fa fa-star" aria-hidden="true"></i></li>
						  <li><i class="fa fa-star" aria-hidden="true"></i></li>
						</ul>
						
						<h6>“We are very happy with Sophie, she is doing a great job for us!”</h6>
						<p>for us!”</p>
						
					 
					</div>
							<div class="clint-msg">
						<ul class="d-flex">
						  <li><i class="fa fa-star" aria-hidden="true"></i></li>
						  <li><i class="fa fa-star" aria-hidden="true"></i></li>
						  <li><i class="fa fa-star" aria-hidden="true"></i></li>
						  <li><i class="fa fa-star" aria-hidden="true"></i></li>
						  <li><i class="fa fa-star" aria-hidden="true"></i></li>
						</ul>
						
						<h6>“We are very happy with Sophie, she is doing a great job for us!”</h6>
						<p>for us!”</p>
						
					 
					</div>
				  </section>
			</div>
		 </div>
	  </div>
	
	<!---Hapuy-custmer-end------->
	
<!----Choose us-Start------>
	
	<div class="choose-sec">
	   <div class="container">
		  <div class="row">
		      <div class="col-md-6">
			    <div class="title">
				 <h2>Why choose us?</h2> 
				 </div>
			  
				  <div class="Choose-inr-sec">
				     <ul>
					    <li class="d-flex align-items-start">
							<img src="{{ asset('images/choose-img1.png') }}">
						     <div class="choosecnt">
							   <h6>Trusted local home cleaners</h6>
								 <p>• Police-checked & interviewed in own home</p>
								 <p>• Same reliable, trustworthy cleaner each visit</p>
							  </div>
						 </li> 
						    <li class="d-flex align-items-start">
							<img src="{{ asset('images/choose-img2.png') }}">
						     <div class="choosecnt">
							   <h6>Peace of  mind</h6>
								 <p>• Meet your cleaners before cleaning commences</p>
								 <p>• Insured and guaranteed</p>
							  </div>
						 </li> 
						 	 <li class="d-flex align-items-start">
							<img src="{{ asset('images/choose-img3.png') }}">
						     <div class="choosecnt">
							   <h6>Customised cleaning services</h6>
								 <p>• Tailor your clean to your budget</p>
								 <p> • Choose specific areas to be cleaned</p>
							  </div>
						 </li> 
						 	 <li class="d-flex align-items-start">
							<img src="{{ asset('images/choose-img4.png') }}">
						     <div class="choosecnt">
							   <h6>Experienced help and support</h6>
								 <p>• We’ve been cleaning local homes since 2002</p>
								 <p>• Cover cleaners by arrangement</p>
							  </div>
						 </li> 
						  	 <li class="d-flex align-items-start">
							<img src="{{ asset('images/choose-img5.png') }}">
						     <div class="choosecnt">
							   <h6>Our golden rule</h6>
								 <p> We will only introduce cleaners to you and
your home that we’d be happy to have in ours.</p>
							  </div>
						 </li> 
					  
					 </ul>
				  </div>
				  
			  </div>
		   
			   <div class="col-md-6">
			      <div class="choose-img">
				      <img src="{{ asset('images/choose-us.png') }}">
								
				   </div>
			   </div>
			  
		   </div>
		
		</div>
	
	</div>

<!-----Choose-us-end-------->
	
<!-----Map-section-Start-------->
<div class="map=sec ptb100">
   <div class="container">
	  <div class="row">
	    <div class="col-md-5">
			<div class="map-txt">
		   <h2>Are we in your  neighbourhood?</h2> 
			<p>Enter your postcode for cleaners local to you</p>
		  <form>
		  <input type="text" id="pac-input2" class="controlss" placeholder="Enter Postcode">
		 </form>
		 </div>
		  </div> 
		  <div class="col-md-7">
		
				
					<div id="map" style="overflow: visible !important; height: 400px;"></div>
								
		
		
		
		  </div>
	   </div>
	</div>	
</div>	
	
	
<!----Map-Section-end------>	
	
	
<!----Home-visit-sec-------->
	<div class="home-visit">
	   <div class="container">
		  <div class="row">
		      <div class="col-md-7">
			     <div class="home-img">
				    <img src="{{ asset('images/home-visit.jpg') }}">
				  </div>
			  </div>
			  <div class="col-md-5">
			     <div class="homecnt">
				    <h2>Arrange a home visit</h2>
					 <h6>Elderly and/or disabled?</h6>
					 <p>We visit you in your home to do the  paperwork.</p>
					 <p>A cleaner suited to your specific needs will be introduced.</p>
					 <p>Your cleaner will call you to arrange a  meeting.</p>
				  </div>
			  </div>
		   </div>
		   
		   <div class="btn-cntr text-center">
		     <a href="#"  class="big-btn">REQUEST CALL BACK</a>
		   </div>
		</div>
	</div>
	
<!------Home-visit-end------>	
	
	
<!-----Counter-sec-------->

	<div class="counter-sec">
	   <div class="container">
		  <div class="row">
			<div class="col-md-3">
			  <h1><span class="counter">1325</span></h1>
			  <h3>Homes Cleaned</h3>
			</div>
			<div class="col-md-3">
			  <h1><span class="counter">143</span></h1>
			  <h3>Cleaners</h3>
			</div>
			<div class="col-md-3">
			  <h1><span class="counter">3876</span></h1>
			  <h3>Shirts Ironed</h3>
			</div>
			  	<div class="col-md-3">
			  <h1><span class="counter">457</span></h1>
			  <h3>Beds Made</h3>
			</div>
		  </div>
		</div>
	
	</div>
	
	
<!------Counter-end----->
<!-----Footer------->
<footer>
  <div class="container">
    <div class="row">
	    <div class="col-md-3">
		   <div class="ftr-list">
			 <h5>Information</h5>
			   <ul>
			     <li><a href="#">About</a></li>
			     <li><a href="#">Contact</a></li>
			     <li><a href="#">Cleaner vetting</a></li>
			     <li><a href="#">FAQs</a></li>
			     <li><a href="#">Insurance</a></li>
			     <li><a href="#">Services</a></li>
			     <li><a href="#">Terms & Conditions</a></li>
			   </ul>
			</div>
			
			   <div class="ftr-list">
			 <h5>Blog</h5>
			   <ul>
			     <li><a href="#">Article 1</a></li>
			     <li><a href="#">Article 2</a></li>
			     <li><a href="#">Article 3</a></li>
			   </ul>
			</div>
		</div>
		
		<div class="col-md-5 ftr-list">
		<h5>Cleaner locations</h5>
		   <div class="ftr-list w50">

			   <h6>South West</h6>
			   <ul>
			      <li><a href="#">Exeter</a></li>
			      <li><a href="#">Ivybridge</a></li>
			      <li><a href="#">Newton Abbot</a></li>
			      <li><a href="#">Paignton</a></li>
			      <li><a href="#">Plymouth</a></li>
			      <li><a href="#">Plympton</a></li>
			      <li><a href="#">Plymstock</a></li>
			      <li><a href="#">Torquay</a></li>
			   </ul>
			</div>
			
			 <div class="ftr-list w50">
			  <h6>Midlands</h6>
			   <ul>
			      <li><a href="#">Breewood</a></li>
			      <li><a href="#">Codsall</a></li>
			      <li><a href="#">Finchfield</a></li>
			      <li><a href="#">Tettenhall</a></li>
			      <li><a href="#">Wolverhampton</a></li>
			   </ul>
			</div>
				
			 <div class="ftr-list w50">
			  <h6>London</h6>
			   <ul>
			      <li><a href="#">Carshalton</a></li>
			      <li><a href="#">Clapham</a></li>
			      <li><a href="#">Croydon</a></li>
			      <li><a href="#">Norwood</a></li>
			      <li><a href="#">Purley</a></li>
			      <li><a href="#">Streatham</a></li>
			      <li><a href="#">Thornton Heath</a></li>
			      <li><a href="#">Wimbledon</a></li>
			   </ul>
			</div>
			
				
			 <div class="ftr-list w50">
			  <h6>East</h6>
			   <ul>
			      <li><a href="#">Aylsham</a></li>
			      <li><a href="#">Beccles</a></li>
			      <li><a href="#">Holt</a></li>
			      <li><a href="#">Loddon</a></li>
			      <li><a href="#">Norwich</a></li>
			      <li><a href="#">Wymondham</a></li>
			   </ul>
			</div>
		</div>
		
		<div class="col-md-4">
		   <div class="ftr-rgt">
			  <div class="ftr-logo">
			     <img src="{{ asset('images/ftrlogo.png') }}">
			   </div>
			   
			   <div class="social-link">
			      <ul class="d-flex align-items-center justify-content-center">
				     <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				     <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
				     <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				   
				   </ul>
				   
			   </div>
			   <div class="ftr-btn">
			     <a href="#"> REQUEST CALL BACK</a>
			   </div>
			   
			   <div class="title-btn">
			     <h2>‘Experienced local cleaners  at affordable rates.’</h2>
				   <a href="#"> REGISTER AS A CLEANER</a>
			   </div>
			</div>
		</div>
	  </div>	
  </div>	
	
	<div class="copy-sec">
	  <p>Cleaners R Us. Copyright © 2019. All Rights Reserved. Cookie Policy  |  Privacy Policy</p>
	</div>
	
</footer>
<!-------Script------->
   <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>	
	 			
	  <script src="{{ asset('js/slick.js') }}"></script>
	  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
		<script
		  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD08Emygz5W4HKOZXvogXKb5zYjA8ZRMaQ&callback=initAutocomplete&libraries=places&v=weekly"
		  defer
		></script>	  
	  <script type="text/javascript">
"use strict";

      // This example adds a search box to a map, using the Google Place Autocomplete
      // feature. People can enter geographical searches. The search box will return a
      // pick list containing a mix of places and predicted search terms.
      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
      function initAutocomplete() {
        const map = new google.maps.Map(document.getElementById("map"), {
          center: {
            lat: -33.8688,
            lng: 151.2195
          },
          zoom: 13,
          mapTypeId: "roadmap"
        }); // Create the search box and link it to the UI element.

        const input = document.getElementById("pac-input2");
        const searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input); // Bias the SearchBox results towards current map's viewport.

        map.addListener("bounds_changed", () => {
          searchBox.setBounds(map.getBounds());
        });
        let markers = []; // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.

        searchBox.addListener("places_changed", () => {
          const places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          } // Clear out the old markers.

          markers.forEach(marker => {
            marker.setMap(null);
          });
          markers = []; // For each place, get the icon, name and location.

          const bounds = new google.maps.LatLngBounds();
          places.forEach(place => {
            if (!place.geometry) {
				
				//alert(place.geometry);
				
             // console.log("Returned place contains no geometry");
              return;
            }

            const icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            }; // Create a marker for each place.

              markers.push(
              new google.maps.Marker({
                map,
                icon,
                title: place.name,
                position: place.geometry.location
              })
            );

            if (place.geometry.viewport) {
			
			
				var lat = place.geometry.location.lat();
				var lng = place.geometry.location.lng();		
				
					$.ajax({
					   type:"GET",
					   url:"{{url('google_map')}}?lat="+lat+"&lng="+lng,
					   success:function(res){  
						console.log(res);
						var markersData = res;
						for (var i = 0; i < markersData.length; i++){

							  var latlng = new google.maps.LatLng(markersData[i].lat, markersData[i].lng);
							  console.log(latlng);
								markers.push(
								  new google.maps.Marker({
									map,
									icon,
									title: "test",
									position: latlng
								  })
								 );
							  bounds.extend(latlng);  
						   }
						
						 }
					});
				
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
        });
      }
		
		
	$(document).ready(function(){
		
		var total_time = 0;
		var total = '';
		var week  = '';
		var monthly  = '';
		var nightly  = '';
	$("#postcode").blur(function(){	
   
    var postcode = $(this).val();    
	
    if(postcode){
        $.ajax({
           type:"GET",
           url:"{{url('postcodes')}}?postcode_id="+postcode,
           success:function(res){  
			
		
			var tot_bedrooms_cal = 	10; 
			var tot_living_rooms_cal = 15;
			var tot_bathrooms_cal = 30;
			
			var bedrooms_cal =  (parseInt (res.areas.weekly_cru_cost ) + parseInt (res.areas.weekly_cleaner_cost))/60 ;
			var Totalnightly =  (parseInt (res.areas.fortnightly_cru_cost ) + parseInt (res.areas.fortnightly_cleaner_cost))/60;
			var TotalMonthly =  (parseInt (res.areas.monthly_cru_cost ) + parseInt (res.areas.monthly_cleaner_cost ))/60;
			
			//alert(bedrooms_cal);
			$('#fix_price').attr("data-value",bedrooms_cal);
			$('#for_nightly').attr("data-value",Totalnightly);
			$('#monthly').attr("data-value",TotalMonthly);
		  
			 }
        });
    }else{
		//alert('wfd');
    }      
   });
   
   var bed_total = '';
  
  
   $('.fixPrice').change(function() {
	   total_time = 0;
	   
	   //bedroom
	   
	   var bedrooms1 = parseInt($('#bedrooms').val());
	
			if(bedrooms1 <= 3 ){
			
				var time_bedroom = 10 * parseInt( bedrooms1 ) + 45;
				
				total_time += time_bedroom;
				
			}else if(bedrooms1 >= 4){
				
				var time_bedroom = 10 *  parseInt( bedrooms1 ) + 75;
			
				total_time += time_bedroom;
				
			}
	   
	   
	   //end bedroom

		
	   //living rooms
	   
	   
	    var living_rooms1 = parseInt($('#living_rooms').val());
	
		var time_living_room = 15 * parseInt ( living_rooms1 );
		
		total_time += time_living_room;
	
	   
	   
	   
	   
	   //end living rooms
	   
	   
	   //bath room
	   
	   
	   var bathrooms1 = parseInt($('#bathrooms').val());
		//alert(bathrooms1);
		var time_bathroom = 30 * parseInt ( bathrooms1 );
		
		total_time +=  time_bathroom;
	   
	   
	   //end bath room
	   
    
		var howoften = $("input[name='radio']:checked").data("value");
		//alert(howoften);
		if(total_time < 120){
			total_time = 120;
		
			var hours = (total_time / 60);
			//alert(hours);
			
			
			var rhours = Math.floor(hours);
			var minutes = (hours - rhours) * 60;
			var rminutes = Math.round(minutes);
			
			 
			$('#hrTime').text(rhours +'hrs '+ rminutes +'min'); 
		}else{
			
			var hours = (total_time / 60);
			//alert(hours);
			
			
			var rhours = Math.floor(hours);
			var minutes = (hours - rhours) * 60;
			var rminutes = Math.round(minutes);
			
			 
			$('#hrTime').text(rhours +'hrs '+ rminutes +'min'); 
			
		} 
		//$('#hrTime').text(parseFloat(total_time).toFixed(2));
		
		

		var final_price = parseFloat(howoften) * total_time;
		
		$('#Amount').text(parseFloat(final_price).toFixed(2));
		
	
		

	});

   
   });
   
   
   /*  setTimeout(function() { 
       document.getElementById("map").removeAttribute("style"); 
    }, 2000);
   */
   
   
   
   function displayMarkers(latitude,longitude){

   // this variable sets the map bounds according to markers position
   var bounds = new google.maps.LatLngBounds();
   
   // for loop traverses markersData array calling createMarker function for each marker 
   for (var i = 0; i < markersData.length; i++){

      var latlng = new google.maps.LatLng(markersData[i].lat, markersData[i].lng);
      var name = markersData[i].name;
      //var address1 = markersData[i].address1;
      var image = '<img src="'+markersData[i].image+'" alt="">';
      var link = markersData[i].link;
      var postalCode = markersData[i].postalCode;
      var cat = markersData[i].cat;
      var price = markersData[i].price;

      createMarker(latlng, name, image, link, postalCode, cat, price);

      // marker position is added to bounds variable
      bounds.extend(latlng);  
   }

   // Finally the bounds variable is used to set the map bounds
   // with fitBounds() function
   map.fitBounds(bounds);
}
function initialize(latitude,longitude) {
   var mapOptions = {
      center: new google.maps.LatLng(latitude,longitude),
      zoom: 10,
      mapTypeId: 'roadmap',
   };

   map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

   // a new Info Window is created
   infoWindow = new google.maps.InfoWindow();

   // Event that closes the Info Window with a click on the map
   google.maps.event.addListener(map, 'click', function() {
      infoWindow.close();
   });

   // Finally displayMarkers() function is called to begin the markers creation
   displayMarkers(latitude,longitude);
   setTimeout(function(){
	   map.setCenter(new google.maps.LatLng(latitude,longitude));
	   map.setZoom(10);
	}, 300);
}
//initialize(data.lat_array.latitude,data.lat_array.longitude);
   
   
   
   
   
   

</script>
	
</body>
@endsection





