<div class="header-spacer"></div>

<div class="content-wrapper">

<section class="background-contain bg-17 pt100">
			<div class="container">
				<div class="row align-center">
					
					<div class="col-lg-12 col-sm-12 ">
						<img src="<?php echo base_url('assets/site/');?>img/banner/training_banner.png" alt="image" style=" width: 100%;" class="display-block "><!--style=" width: 50%;-->
						<!--margin: 0 auto;"-->
					</div>
					<!--	<div class="col-lg-12 col-sm-12">-->
					<!--	<img src="<?php echo base_url('assets/site/');?>img/banner/training_banner.png" alt="image" class="display-block">-->
					<!--</div>-->
				</div>
			</div>
		</section>
	<!-- Stunning Header -->

	<div class="crumina-stunning-header stunning-bg-5 stunning-header--content-center stunning-header--bg-photo stunning-header--min640 custom-color c-white fill-white">
		<div class="container">
			<div class="stunning-header-content">
				<h6 class="category-link c-lime-light">On-premises Training Courses</h6>
				<h2 class="h1 stunning-header-title"><?php echo $name; ?></h2>
				<div class="inline-items">
					<!-- <div class="author-block inline-items">
						<div class="author-avatar">
							<img src="img/author1.jpg" alt="author">
						</div>
						<div class="author-info">
							<div class="author-prof">Speaker</div>
							<h6 class="author-name">Frank Doe</h6>
						</div>
					</div> -->
					<div class="icon-text-item inline-items">
						<svg class="utouch-icon utouch-icon-calendar-2"><use xlink:href="#utouch-icon-calendar-2"></use></svg>
						<div class="text">August 25, 2021, Bilaspur, Chhattisgarh</div>
					</div>
					<a href="<?php echo base_url('web/onpremisesRegistration'); ?>" class="btn btn--large btn--orange-light btn--with-shadow f-right">
						Register for course
					</a>
				</div>
			</div>
		</div>

		<div class="overlay-standard overlay--green"></div>
	</div>

	<!-- ... end Stunning Header -->


	<!-- Course Details -->

	<section class="negative-margin-top80">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="course-details">

						<ul class="nav nav-tabs course-details-control" role="tablist">

							<li role="presentation" class="tab-control">
								<a href="#description" id="description-tab" role="tab" data-toggle="tab" aria-controls="description" class="control-item nav-link active" aria-selected="true">Description</a>
							</li>

						</ul>

						<div class="tab-content">
							<div role="tabpanel" class="tab-pane fade show active" id="description" aria-labelledby="description-tab">
								<div class="row">
									<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
										<h3>Description</h3>
										<?php echo $description; ?>
									</div>
									<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
										<div class="course-features">
											<h5 class="title">Course Features</h5>
											<ul class="course-features-list">
												<li>
													<div class="feature-item">
														<svg class="utouch-icon utouch-icon-clock-1"><use xlink:href="#utouch-icon-clock-1"></use></svg>
														Duration
													</div>
													<div class="value"><?php echo $duration; ?></div>
												</li>
												<li>
													<div class="feature-item">
														<svg class="utouch-icon utouch-icon-upward-arrow"><use xlink:href="#utouch-icon-upward-arrow"></use></svg>
														Skill level
													</div>
													<div class="value"><?php echo $level; ?></div>
												</li>
												<li>
													<div class="feature-item">
														<svg class="utouch-icon utouch-icon-worlwide"><use xlink:href="#utouch-icon-worlwide"></use></svg>
														Language
													</div>
													<div class="value"><?php echo $language; ?></div>
												</li>
												<li>
													<div class="feature-item">
														<svg class="utouch-icon utouch-icon-placeholder-4"><use xlink:href="#utouch-icon-placeholder-4"></use></svg>
														Location
													</div>
													<div class="value"><?php echo $location; ?></div>
												</li>
											</ul>
										</div>
									</div>

									<!-- <div class="post-details-shared">
										<div class="widget w-follow">
											<ul class="socials socials--round">

												<li>Share:</li>
												<li>
													<a href="" class="social__item facebook">
														<svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M15.117 0H.883C.395 0 0 .395 0 .883v14.234c0 .488.395.883.883.883h7.663V9.804H6.46V7.39h2.086V5.607c0-2.066 1.262-3.19 3.106-3.19.883 0 1.642.064 1.863.094v2.16h-1.28c-1 0-1.195.48-1.195 1.18v1.54h2.39l-.31 2.42h-2.08V16h4.077c.488 0 .883-.395.883-.883V.883C16 .395 15.605 0 15.117 0" fill-rule="nonzero"></path></svg>
													</a>
												</li>
												<li>
													<a href="" class="social__item twitter">
														<svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M16 3.038c-.59.26-1.22.437-1.885.517.677-.407 1.198-1.05 1.443-1.816-.634.37-1.337.64-2.085.79-.598-.64-1.45-1.04-2.396-1.04-1.812 0-3.282 1.47-3.282 3.28 0 .26.03.51.085.75-2.728-.13-5.147-1.44-6.766-3.42C.83 2.58.67 3.14.67 3.75c0 1.14.58 2.143 1.46 2.732-.538-.017-1.045-.165-1.487-.41v.04c0 1.59 1.13 2.918 2.633 3.22-.276.074-.566.114-.865.114-.21 0-.41-.02-.61-.058.42 1.304 1.63 2.253 3.07 2.28-1.12.88-2.54 1.404-4.07 1.404-.26 0-.52-.015-.78-.045 1.46.93 3.18 1.474 5.04 1.474 6.04 0 9.34-5 9.34-9.33 0-.14 0-.28-.01-.42.64-.46 1.2-1.04 1.64-1.7z" fill-rule="nonzero"></path></svg>
													</a>
												</li>

												<li>
													<a href="" class="social__item googlePlus">
														<svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M8.16 6.857V9.6h4.537c-.183 1.177-1.37 3.45-4.537 3.45-2.73 0-4.96-2.26-4.96-5.05s2.23-5.05 4.96-5.05c1.554 0 2.594.66 3.19 1.233l2.17-2.092C12.126.79 10.32 0 8.16 0c-4.423 0-8 3.577-8 8s3.577 8 8 8c4.617 0 7.68-3.246 7.68-7.817 0-.526-.057-.926-.126-1.326H8.16z"></path></svg>
													</a>
												</li>
											</ul>
										</div>

									</div> -->
								</div>

							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ... end Course Details -->

</div>

