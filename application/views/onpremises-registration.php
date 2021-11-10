

	<div class="header-spacer"></div>
	<div class="header-spacer"></div>

	<div class="content-wrapper">

		<!-- Breadcrcumbs -->

		<!--<div class="container">-->
		<!--	<div class="row">-->
		<!--		<div class="breadcrumbs-wrap inline-items with-border">-->
		<!--			<a href="#" class="btn btn--transparent btn--round">-->
		<!--				<svg class="utouch-icon utouch-icon-home-icon-silhouette">-->
		<!--					<use xlink:href="#utouch-icon-home-icon-silhouette"></use>-->
		<!--				</svg>-->
		<!--			</a>-->

		<!--			<ul class="breadcrumbs">-->
		<!--				<li class="breadcrumbs-item">-->
		<!--					<a href="index.html">Pages</a>-->
		<!--					<svg class="utouch-icon utouch-icon-media-play-symbol">-->
		<!--						<use xlink:href="#utouch-icon-media-play-symbol"></use>-->
		<!--					</svg>-->
		<!--				</li>-->
		<!--				<li class="breadcrumbs-item active">-->
		<!--					<span>News</span>-->
		<!--					<svg class="utouch-icon utouch-icon-media-play-symbol">-->
		<!--						<use xlink:href="#utouch-icon-media-play-symbol"></use>-->
		<!--					</svg>-->
		<!--				</li>-->
		<!--			</ul>-->
		<!--		</div>-->
		<!--	</div>-->
		<!--</div>-->

		<!-- ... end Breadcrcumbs -->


		<!-- Blog posts-->

		<div class="container pb-4">
			<div class="row">
			 <!--   <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 d-lg-show d-md-none">-->
				<!--	<aside aria-label="sidebar" class="sidebar sidebar-right">-->
    <!--                    <aside class="widget w-contacts">-->
				<!--			<h5 class="widget-title">Payment details</h5>-->
				<!--			<p class="contacts-text"><img src="<?php echo base_url('assets/upi/qr/code.png');?>"/></p>-->
                            

				<!--		</aside>-->
				<!--	</aside>-->
				<!--</div> -->
				<!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
					
				<!--	<div class="comments">-->
						
 			<!--				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">-->
				<!--				<img class="particular-image" src="<?php echo base_url('assets/site/');?>img/training/vocational1.jpg" alt="image">-->
				<!--				<div style="padding:30px 0">-->
				<!--				    	<h3 >Steps for On-premises Registration</h3>-->
				<!--				<ul>-->
				<!--				    <li>1. Fill Registration Form</li>-->
				<!--				    <li>2. Scan QR code & perform payment</li>-->
				<!--				    <li>3. Upload a screenshot of the payment and click submit button</li>-->
				<!--				</ul>-->
				<!--				</div>-->
						
				<!--			</div>-->
				<!--	</div>-->

				<!--</div>-->
			<form class="form-validate contact-form crumina-submit" method="post" action="<?php echo base_url("web/registerData");?>" 	enctype="multipart/form-data">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-top:50px;">
					<article class="hentry post post-standard has-post-thumbnail sticky post-standard-details">

					</article>
					<div class="comments">
						
						
	                      
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<h3 >Registration for On-Premises Training</h3>
								<div id=" response"></div>
								<div class="message" id="messages response">
                                    <?php if(isset($_SESSION['response'])){
                                            echo $_SESSION['response'];
                                    } ?>
								</div>
							</div>
							<div class="row">

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="with-icon">
										<input name="email" placeholder="Email Adress" id="email" type="email" required>
										<svg class="utouch-icon utouch-icon-message-closed-envelope-1">
											<use xlink:href="#utouch-icon-message-closed-envelope-1"></use>
										</svg>
									</div>
								</div>    
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="with-icon">
										<input name="name" placeholder="Your Name" id="name" type="text" required>
										<svg class="utouch-icon utouch-icon-user">
											<use xlink:href="#utouch-icon-user"></use>
										</svg>
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="with-icon">
										<select name="cid" placeholder="Select your prefered course" id="course" required>
										    <option value="">-- Select your prefered course --</option>
										    <option value="flutter">Flutter: Mobile Development Framework</option>
										    <option value="python">Python: Programming</option>
										    <option value="django">Django: Web Development in Python</option>
										    <option value="reactjs">ReactJs: Frontend UI Library</option>
										    <option value="sie-web-classic">SIE Web Classic</option>
										    <option value="sie-app-classic">SIE App Classic</option>
										    <option value="sie-premium">SIE Premium</option>
										</select>
										<svg class="utouch-icon utouch-icon-user">
											<use xlink:href="#utouch-icon-user"></use>
										</svg>
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="with-icon">
										<input name="contact" placeholder="Contact No." id="phone" type="text" required>
										<svg class="utouch-icon utouch-icon-telephone-keypad-with-ten-keys">
											<use xlink:href="#utouch-icon-telephone-keypad-with-ten-keys"></use>
										</svg>
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="with-icon">
										<input name="department" placeholder="Department"  type="text" required>
										<svg class="utouch-icon">
											<use xlink:href="#utouch-icon-home-icon-silhouette"></use>
										</svg>
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="with-icon">
										<input name="college" placeholder="College Name"  type="text" required>
										<svg class="utouch-icon">
											<use xlink:href="#utouch-icon-placeholder-4"></use>
										</svg>
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="with-icon">
										<input name="yop" placeholder="Year Of Passing"  type="text" >
										<svg class="utouch-icon">
											<use xlink:href="#utouch-icon-edit"></use>
										</svg>
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="with-icon">
										<input name="skills" placeholder="Skills" id="skills" type="text" required>
										<svg class="utouch-icon">
											<use xlink:href="#utouch-icon-icon-1"></use>
										</svg>
									</div>
								</div>		
							
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pb-4">
									<button type="submit" class="btn btn--green btn--with-shadow ">
										Register
									</button>
								</div>
								<!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
								<!--	<div class="with-icon">-->
								<!--		<textarea name="interest" class="" required="" id="intrest"-->
								<!--			placeholder="What are your fields of interest?"-->
								<!--			style="min-height: 160px;"></textarea>-->
								<!--		<svg class="utouch-icon">-->
								<!--			<use xlink:href="#utouch-icon-star"></use>-->
								<!--		</svg>-->
								<!--	</div>-->
								<!--</div>-->
								<!--	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
								<!--	<div class="with-icon">-->
								<!--	    Payment Screenshot-->
								<!--		<input name="screenshot" placeholder="Screenshot" id="screenshot" type="file">-->
										<!--<svg class="utouch-icon">-->
										<!--	<use xlink:href="#utouch-icon-icon-1"></use>-->
										<!--</svg>-->
								<!--	</div>-->
								<!--</div>	-->
							

							</div>
					
					</div>


				</div>


				<!-- Sidebar-->
    <!--            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-top:50px;">-->
				<!--    <div class="comments">-->
 			<!--			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 align-center">-->
 			<!--			    <h5 class="widget-title">Step 2: Payment details</h5>-->
 			<!--			    <p>Scan QR Code for payment</p>-->
				<!--		    <p class="contacts-text"><img  style="height:350px " src="<?php echo base_url('assets/upi/qr/code.png');?>"/></p>-->
				<!--	    </div>-->
					<!--</form>-->
				<!--    </div>-->
				<!--</div>-->
				<!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-top:50px;">-->
				<!--    <div class="comments">-->
 			<!--			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >-->
 			<!--			    <h5 class="widget-title">Step 3: Upload Payment Reciept</h5>-->
 						    <!--<p>Upload screenshot of payment reciept</p>-->
				<!--					<div class="with-icon">-->
				<!--						<input name="uploadFile" placeholder="Files" id="skills" type="file" required>-->
				<!--						<svg class="utouch-icon">-->
				<!--							<use xlink:href="#utouch-icon-icon-1"></use>-->
				<!--						</svg>-->
				<!--					</div>-->
				<!--				</div>	-->
				<!--					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pb-4">-->
				<!--					<button type="submit" class="btn btn--green btn--with-shadow ">-->
				<!--						Register-->
				<!--					</button>-->
				<!--				</div>-->
					<!--</form>-->
				<!--    </div>-->
				<!--</div>-->
				 
        </form>
</div>
		<!-- End Blog posts-->

	</div>
