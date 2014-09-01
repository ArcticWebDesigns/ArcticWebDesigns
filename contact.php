<?php include 'includes/header.php';?>

       
        <section class="bread-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>Contact us</h4>
                    </div>
                    <div class="col-sm-6 hidden-xs text-right">
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li>Contact</li>
                        </ol><!--breadcrumb-->
                    </div>
                </div>
            </div>
        </section><!--.bread-wrap-->
        <div class="divide80"></div>
        <div class="container">
            <div class="row">
               <div class="col-md-7 margin30">
                    <h3 class="heading">Get In Touch</h3>
                    
                    <form name="contactform" method="post" action="Mailer.php" class="form-horizontal" role="form">
							<div class="form-group">
								<label for="inputName" class="col-lg-2 control-label">Name</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="inputName" name="inputName">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-2 control-label">Email</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="inputEmail" name="inputEmail">
								</div>
							</div>
							<div class="form-group">
								<label for="inputSubject" class="col-lg-2 control-label">Subject</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="inputSubject" name="inputSubject">
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword1" class="col-lg-2 control-label">Message</label>
								<div class="col-lg-10">
									<textarea class="form-control" rows="4" id="inputMessage" name="inputMessage"></textarea>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-offset-2 col-lg-10">
									<button type="submit" class="btn btn-default">
										Send Message
									</button>
								</div>
							</div>
						</form>
						
						
                <div class="col-md-5">
                    <h3 class="heading">Address Info</h3>
                          <p>
                                We're located on the south side of 3rd St. between Utica and Lewis.
                            </p>
                            <ul class="address-info list-unstyled">
                                <li><i class="fa fa-home"></i> 1922 E. 3rd St. Tulsa, OK</li>  
                                <li><i class="fa fa-phone"></i> (918) 402-5145</li>  
                                <li><i class="fa fa-envelope"></i> <a href="#">aaronhembree@gmail.com</a></li> 
                                <li><i class="fa fa-print"></i> (918) 764-8520</li>
                                <li><i class="fa fa-clock-o"></i>Monday - Saturday : 9:00am - 5:30pm</li>
                            </ul>  
                </div>
            </div>
            <div class="divide60"></div>
            <div class="row">               
                <div class="col-md-12">
                    <div id="map-canvas" style="width:100%;height: 400px;"></div> 
                </div>
            </div>
        </div>
        
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=true"></script>
        <script type="text/javascript">
            var myLatlng;
            var map;
            var marker;

            function initialize() {
                myLatlng = new google.maps.LatLng(36.156383, -95.963848);

                var mapOptions = {
                    zoom: 13,
                    center: myLatlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    scrollwheel: false,
                    draggable: false
                };
                map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

                var contentString = '<p style="line-height: 20px;"><strong>Flash Autoworks</strong></p><p>Tulsa, OK 74104 </p>';

                var infowindow = new google.maps.InfoWindow({
                    content: contentString
                });

                marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                    title: 'Marker'
                });

                google.maps.event.addListener(marker, 'click', function() {
                    infowindow.open(map, marker);
                });
            }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>

        <?php include 'includes/footer.php';?>