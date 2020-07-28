@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
               
                <div class="card-body">
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
			    <h4>Book and pay securely online</h4>
				    <input type="text" id="bedrooms" name = "bedrooms" placeholder="Bedrooms">
				    
				    <input type="text" id="living_rooms" name = "living_rooms" placeholder="Living rooms" value="">
				    
				    <input type="text" id="bathrooms" name = "bathrooms" placeholder="Bathrooms" value="">
				
			  </div>
			    <div class="bnr-frm">
				   <h4>How often?</h4>
					<div class="radio-select  d-flex justify-content-between">
					<label class="radio-slect">Weekly
					  <input type="radio" class="fixPrise"  name="radio" value="weekly" id="fix_price">
					  <span class="checkmark"></span>
					</label>
					<label class="radio-slect">Fortnightly
					  <input type="radio"  class="fixPrise" name="radio" value="fortnightly" id="for_nightly">
					  <span class="checkmark"></span>
					</label>
					<label class="radio-slect">Monthly
					  <input type="radio"  class="fixPrise" name="radio" value="monthly" id="monthly">
					  <span class="checkmark"></span>
					</label>
					</div>
					
				</div>		    
             </form>
              <div class="btn-cnt">
			     <h4>£  for <span id="Amount"></span> </h4> <h4 id="hrTime"> </h4>
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
	
	
	
<!----Map-Section-end------>	
	
	
<!-------Script------->
   <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>	
					
	  <script src="{{ asset('js/slick.js') }}"></script>	
	  <script type="text/javascript">
    $(document).on('ready', function() {
		 /*  $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
		autoplay: true,
      }); */
	    });
		
		
		
		
		
	$(document).ready(function(){
		
		var total = '';
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
			

			var bedrooms_cal =  parseInt( res.areas.weekly_cru_cost ) + parseInt (res.areas.weekly_cleaner_cost);
			var Totalnightly =  parseInt (res.areas.fortnightly_cru_cost ) + parseInt (res.areas.fortnightly_cleaner_cost);
			var TotalMonthly =  parseInt (res.areas.monthly_cru_cost ) + parseInt (res.areas.monthly_cleaner_cost );
			$('#fix_price').attr("data-value",bedrooms_cal);
			$('#for_nightly').attr("data-value",Totalnightly);
			$('#monthly').attr("data-value",TotalMonthly);
		  
			 }
        });
    }else{
		//alert('wfd');
    }      
   });
  
   $('#bedrooms').blur(function(){
	 
	   
	   
	var bedrooms1 = 	$('#bedrooms').val();
	var time_bedroom = bedrooms1 * 60;
	
	total_time = time_bedroom;
	
	total = 10 * bedrooms1;
	});
   
   
   $('#living_rooms').blur(function(){

	var living_rooms1 = 	$('#living_rooms').val();
	
	var time_bedroom = living_rooms1 * 60;
	
	total_time = time_bedroom;
	
	
	
	total = 15 * living_rooms1;

	});
	
   $('#bathrooms').blur(function(){

	var bathrooms1 = 	$('#bathrooms').val();
	var time_bedroom = bathrooms1 * 60;
	
	total_time = time_bedroom;
	//alert(total_time);
	
	
	total = 30 * bathrooms1;
	console.log("bathrooms ==> ",bathrooms1, "total ==>",total);	
	});
 
   
  // $('#hrTime').val(time_bedroom);
	
  // alert("Outside",total);
   $('.fixPrise').change(function() {
    
		var card_type =  $(this).val();
		
			console.log("Inside ==>",total);
		if(card_type == 'weekly'){
			bedrooms_cal = $(this).data("value");
			var bedrooms_cal1 =	(bedrooms_cal + total)/60;
			$('#Amount').text(parseFloat(bedrooms_cal1).toFixed(2));
			
			var ttime = parseFloat(total_time).toFixed(2);
			var totalTime = Math.floor(ttime / 60);
			var min = totalTime % 60; 
			$('#hrTime').text(totalTime +'hrs '+ min +'min');
			//alert(bedrooms_cal1);
		}else if(card_type == 'fortnightly'){
			
			bedrooms_cal = $(this).data("value");
			var bedrooms_cal1 = (bedrooms_cal + total)/60;
			$('#Amount').text(parseFloat(bedrooms_cal1).toFixed(2));
			
			var ttime = parseFloat(total_time).toFixed(2);
			var totalTime = Math.floor(ttime / 60);
			var min = totalTime % 60; 
			$('#hrTime').text(totalTime +'hrs '+ min +'min');
		}else if(card_type == 'TotalMonthly'){
			bedrooms_cal = $(this).data("value");
			var bedrooms_cal1 = (bedrooms_cal + total)/60;
			$('#Amount').text(parseFloat(bedrooms_cal1).toFixed(2));
			var ttime = parseFloat(total_time).toFixed(2);
			var totalTime = Math.floor(ttime / 60);
			var min = totalTime % 60; 
			$('#hrTime').text(totalTime +'hrs '+ min +'min'); 
		}

	});

   
   });


   
   
</script>
	
				
					
                </div>
            
        </div>
    </div>
</div>
</body>
@endsection





