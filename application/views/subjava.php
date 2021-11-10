
	<div class="header-spacer"></div>

	<div class="content-wrapper">

		<section class="background-contain bg-17 pt100">
			<div class="container">
				<div class="row align-center">
					<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0">
						<div class="crumina-module crumina-heading align-center">

							<h2 class="heading-title">
								<span class="c-dark">Modern Age <span class="c-primary">Technological</span> Spartan Programme - August 2021</span>
							</h2>
							<div><h5>An Online Certificate Course/Vocational Training/Summer Training/Internship Program/Industrial Training</b></h5></div>
							<!--<div>Aspire to become a coder? This is the place for you. Register with us for a training program that offers more than a certification. Get an opportunity to not only train and upskill yourself in the desired technology, but also grab a chance to peek into the implementation of live projects.</div>-->
							<!--<div><a class="quotes"><b>&#8221; Train and Gain &#8221;</h6></a></div>-->
						</div>
					</div>
					<div class="col-lg-12 col-sm-12 ">
						<img src="<?php echo base_url('assets/site/');?>img/banner/ban.png" alt="image" style=" width: 100%;" class="display-block "><!--style=" width: 50%;-->
						<!--margin: 0 auto;"-->
					</div>
					<!--	<div class="col-lg-12 col-sm-12">-->
					<!--	<img src="<?php echo base_url('assets/site/');?>img/banner/training_banner.png" alt="image" class="display-block">-->
					<!--</div>-->
				</div>
			</div>
		</section>	

		<!-- Curriculum Events -->

		<section class="medium-padding100">
			<div class="container">
				<div class="row">
					<div class="curriculum-event-wrap">
						<?php 
						foreach($course->result() as $row){
						    ?>
						    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="popover__wrapper box">
							    <div class="ribbon"><span>Offer</span></div>
								<div class="curriculum-event popover__title" data-mh="curriculum" data-eventstatus="active">
									<div class="curriculum-event-thumb">
										<img src="<?php echo base_url('assets/site/');?>img/training/<?php echo $row->course_image;?>" class="image-event" alt="image">
										
										<div class="overlay-standard "></div>
									</div>
									<div class="curriculum-event-content">
										<div class="icon-text-item display-flex">
											<svg class="utouch-icon utouch-icon-calendar-2">
												<use xlink:href="#utouch-icon-calendar-2"></use>
											</svg>
											<div class="text"><?php echo $row->course_title;?></div>
											
										</div>
										<h5 style="display:inline;"> &#8377; <?php echo $row->course_price;?></h5> <span style="text-decoration:line-through;font-size:16px;"> &#8377; <?php 
										if($row->course_price =="1000")
										{ 
										    echo "6000";
										    
										}else{
										echo "8000" ; }?></span>
									    <p >Limited period offer</p>
									    
										<a href="" class="h6 title"><?php echo $row->course_subtitle;?></a>
									</div>
								</div>
								<div class="popover__content">
								  <p class="popover__message">
                                    <?php echo $row->course_description;?>
									<div class="text-center">
										<!--<a  class="btn btn--red mt-5">Registeration closed</a>-->
										<!--<form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_HZU8iKHXaMGcRk" async> </script> </form>-->
				                        <?php echo $row->course_paybutton;?>

    
    
    
									</div>
									
									
									
								  </p>
								  
								</div>
							  </div>
							
						</div>
						    <?php
						}
						?>
                        
						
					</div>
					
				</div>
			</div>
		</section>

		<!-- ... end Curriculum Events -->
<div class="container">
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3 col-md-12 col-sm-12 col-sm-offset-0">
				<div class="crumina-module crumina-heading align-center">
					<h2 class="heading-title">Testimonials</h2>
					<!--<h2 class="h3 heading-title">What Our Customers Say About Us</h2>-->
				</div>
			</div>
		</div>
	</div>
	<section  class="crumina-module crumina-module-slider bg-4 cloud-center navigation-center-both-sides medium-padding10" >
		<div id="clients" class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-sm-offset-0">
					<div class="swiper-container" data-effect="fade">
						<div class="swiper-wrapper">
							<div class="crumina-module crumina-testimonial-item testimonial-item-author-top swiper-slide">

								<div  data-swiper-parallax="-100">
									<img src="<?php echo base_url("assets/");?>testimonial/kalpana.jpg" class="avatar" alt="avatar">
							    </div>

								<h6 class="testimonial-text" data-swiper-parallax="-300">
									I'll take few minutes to describe about my personal experience regarding this company, 
									I'm working here since 1st July and I've noticed a lot changes in myself whether it's related to professionalism or the communication skills.
									One thing is constant here what I've experienced is, 
									you get to learn everyday meaning your knowledge base is always increasing. 
									Being part of this company is my great privilege, 
									I'm glad to be part of this company since I believe in "Learning & Growing" therefore this company really supports you in growing and always expanding your skills be it physical, 
									mental or emotional. 
									Best company to get started with.
								</h6>

								<div class="author-info-wrap" data-swiper-parallax="-100">

									<div class="author-info">
										<a href="#" class="h6 author-name">KALPANA TRIPATHI</a>
										<div class="author-company">Associate trainee</div>
									</div>

								</div>
								<ul class="rait-stars">
									<li>
										<a href="#">
											<svg class="utouch-icon utouch-icon-star"><use xlink:href="#utouch-icon-star"></use></svg>
										</a>
									</li>
									<li>
										<a href="#">
											<svg class="utouch-icon utouch-icon-star"><use xlink:href="#utouch-icon-star"></use></svg>
										</a>
									</li>
									<li>
										<a href="#">
											<svg class="utouch-icon utouch-icon-star"><use xlink:href="#utouch-icon-star"></use></svg>
										</a>
									</li>
									<li>
										<a href="#">
											<svg class="utouch-icon utouch-icon-star"><use xlink:href="#utouch-icon-star"></use></svg>
										</a>
									</li>
									<li>
										<a href="#">
											<svg class="utouch-icon utouch-icon-star"><use xlink:href="#utouch-icon-star"></use></svg>
										</a>
									</li>
								</ul>
							</div>
							<div class="crumina-module crumina-testimonial-item testimonial-item-author-top swiper-slide">

								<div  data-swiper-parallax="-100">
									<img src="<?php echo base_url("assets/");?>testimonial/swastika.jpg" class="avatar" alt="avatar">
							    </div>

								<h6 class="testimonial-text" data-swiper-parallax="-300">
									On 1st of July 2021, I joined SIE as an Associate Trainee. Since then, 
									I have seen a lot of changes in myself whether it is communication or my technical skills. 
									I have seen myself upgrading here. 
									One thing I liked the most about SIE is that the training provided here is not only theoretical. 
									We learn theoretical part a little and then we jump into practical cases. 
									This is really good practice for internships and for professional life in general. 
									I am happy to be a part of SIE.
								</h6>

								<div class="author-info-wrap" data-swiper-parallax="-100">

									<div class="author-info">
										<a href="#" class="h6 author-name">SWASTIKA VERMA</a>
										<div class="author-company">Associate trainee</div>
									</div>

								</div>
								<ul class="rait-stars">
									<li>
										<a href="#">
											<svg class="utouch-icon utouch-icon-star"><use xlink:href="#utouch-icon-star"></use></svg>
										</a>
									</li>
									<li>
										<a href="#">
											<svg class="utouch-icon utouch-icon-star"><use xlink:href="#utouch-icon-star"></use></svg>
										</a>
									</li>
									<li>
										<a href="#">
											<svg class="utouch-icon utouch-icon-star"><use xlink:href="#utouch-icon-star"></use></svg>
										</a>
									</li>
									<li>
										<a href="#">
											<svg class="utouch-icon utouch-icon-star"><use xlink:href="#utouch-icon-star"></use></svg>
										</a>
									</li>
									<li>
										<a href="#">
											<svg class="utouch-icon utouch-icon-star"><use xlink:href="#utouch-icon-star"></use></svg>
										</a>
									</li>
								</ul>
							</div>
							<div class="crumina-module crumina-testimonial-item testimonial-item-author-top swiper-slide">

								<div  data-swiper-parallax="-100">
									<img src="<?php echo base_url("assets/");?>testimonial/shivani.jpg" class="avatar" alt="avatar">
							    </div>

								<h6 class="testimonial-text" data-swiper-parallax="-300">
									I joined SIE on 1st July 2021 and since then I’ve noticed many changes in my technical as well as communication skills. 
									I am learning new things every day. In SIE, the focus is more on practical rather than on theoretical concepts.
									Trainers are also very supportive here. 
									I feel very proud to be one of the trainees of SIE. 
									My career has skied with each passing day in the company. 
									The extraordinary Knowledge Transfer across the different streams of the project has benefitted me a lot. 
									I am really grateful to work in a place which makes us grow to greater heights.
								</h6>

								<div class="author-info-wrap" data-swiper-parallax="-100">

									<div class="author-info">
										<a href="#" class="h6 author-name">G. SHIVANI MURTHY</a>
										<div class="author-company">Associate trainee</div>
									</div>

								</div>
								<ul class="rait-stars">
									<li>
										<a href="#">
											<svg class="utouch-icon utouch-icon-star"><use xlink:href="#utouch-icon-star"></use></svg>
										</a>
									</li>
									<li>
										<a href="#">
											<svg class="utouch-icon utouch-icon-star"><use xlink:href="#utouch-icon-star"></use></svg>
										</a>
									</li>
									<li>
										<a href="#">
											<svg class="utouch-icon utouch-icon-star"><use xlink:href="#utouch-icon-star"></use></svg>
										</a>
									</li>
									<li>
										<a href="#">
											<svg class="utouch-icon utouch-icon-star"><use xlink:href="#utouch-icon-star"></use></svg>
										</a>
									</li>
									<li>
										<a href="#">
											<svg class="utouch-icon utouch-icon-star"><use xlink:href="#utouch-icon-star"></use></svg>
										</a>
									</li>
								</ul>
							</div>
							<div class="crumina-module crumina-testimonial-item testimonial-item-author-top swiper-slide">

								<div  data-swiper-parallax="-100">
									<img src="<?php echo base_url("assets/");?>testimonial/sagufta.jpg" class="avatar" alt="avatar">
							    </div>

								<h6 class="testimonial-text" data-swiper-parallax="-300">
									At first, I wasn't sure whether I'll be able to learn such technologies as I had only basic knowledge of coding, 
									but during the training I never felt so, 
									though things were very new for me but the instructors are so supportive and encouraging that I became dedicated to learn things from them ever before.
                                    The course is concise and challenging because of which each class pushed my limits and my capability increased exponentially.
                                    If you are a person who is interested in functional programming and want to learn how to create your own Project then this is the best place for you.

								</h6>

								<div class="author-info-wrap" data-swiper-parallax="-100">

									<div class="author-info">
										<a href="#" class="h6 author-name">SAGUFTA PARVEEN</a>
										<div class="author-company">Associate trainee</div>
									</div>

								</div>
								<ul class="rait-stars">
									<li>
										<a href="#">
											<svg class="utouch-icon utouch-icon-star"><use xlink:href="#utouch-icon-star"></use></svg>
										</a>
									</li>
									<li>
										<a href="#">
											<svg class="utouch-icon utouch-icon-star"><use xlink:href="#utouch-icon-star"></use></svg>
										</a>
									</li>
									<li>
										<a href="#">
											<svg class="utouch-icon utouch-icon-star"><use xlink:href="#utouch-icon-star"></use></svg>
										</a>
									</li>
									<li>
										<a href="#">
											<svg class="utouch-icon utouch-icon-star"><use xlink:href="#utouch-icon-star"></use></svg>
										</a>
									</li>
									<li>
										<a href="#">
											<svg class="utouch-icon utouch-icon-star"><use xlink:href="#utouch-icon-star"></use></svg>
										</a>
									</li>
								</ul>
							</div>

							

						</div>
					</div>
				</div>
			</div>
		</div>

		<!--Prev next buttons-->

		<div class="btn-prev">
			<svg class="utouch-icon icon-hover utouch-icon-arrow-left-1"><use xlink:href="#utouch-icon-arrow-left-1"></use></svg>
			<svg class="utouch-icon utouch-icon-arrow-left1"><use xlink:href="#utouch-icon-arrow-left1"></use></svg>
		</div>

		<div class="btn-next">
			<svg class="utouch-icon icon-hover utouch-icon-arrow-right-1"><use xlink:href="#utouch-icon-arrow-right-1"></use></svg>
			<svg class="utouch-icon utouch-icon-arrow-right1"><use xlink:href="#utouch-icon-arrow-right1"></use></svg>
		</div>
	</section>
	</div>
	<!-- Footer -->