

    <!-- ... End Header -->

    <div class="header-spacer"></div>

    <div class="content-wrapper">
      <!-- Breadcrcumbs -->

      <div class="container">
        <div class="row">
          <div class="breadcrumbs-wrap inline-items with-border">
            <a href="#" class="btn btn--transparent btn--round">
              <svg class="utouch-icon utouch-icon-home-icon-silhouette">
                <use xlink:href="#utouch-icon-home-icon-silhouette"></use>
              </svg>
            </a>

            <ul class="breadcrumbs">
              <li class="breadcrumbs-item">
                <a href="index.html">Pages</a>
                <svg class="utouch-icon utouch-icon-media-play-symbol">
                  <use xlink:href="#utouch-icon-media-play-symbol"></use>
                </svg>
              </li>
              <li class="breadcrumbs-item active">
                <span>News</span>
                <svg class="utouch-icon utouch-icon-media-play-symbol">
                  <use xlink:href="#utouch-icon-media-play-symbol"></use>
                </svg>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- ... end Breadcrcumbs -->

      <!-- Blog posts-->

      <div class="container pb-4">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <article
              class="
                hentry
                post post-standard
                has-post-thumbnail
                sticky
                post-standard-details
              "
            ></article>
            <div class="comments">
              <form class="form-validate contact-form crumina-submit" method="post"  action="<?php echo base_url('web/uploadData');?>" enctype="multipart/form-data" >
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <h3>Visiting Software Trainer</h3>
                  <p>
                    We are looking for a Visiting software trainer on hourly
                    basis. Both Online and on premises options are available.
                    Please register with SIE to review your candidature.
                  </p>
                  <div class="message" id="messages"></div>
                </div>
                <div class="row">
					<h6>Personal & Academic Deatils</h6>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="with-icon">
                      <input
                        name="name"
                        placeholder="Your Full Name"
                        id="name"
                        type="text"
                         required="true"
                      />
                      <!-- <svg class="utouch-icon utouch-icon-user">
							<use xlink:href="#utouch-icon-user"></use>
						  </svg> -->
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="with-icon">
                      <input
                        name="email"
                        placeholder="Email Address"
                        id="email"
                        type="text"
                        required="true"
                      />
                    
                    </div>
                  </div>

                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="with-icon">
                      <input
                        name="contact"
                        placeholder="Contact No."
                        id="phone"
                        type="text"
                         required="true"
                      />
                    
                    </div>
                  </div>
				  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="with-icon">
						<select name="cid" placeholder="Select Your Technologies to Train" id="course" required>
							<option value="">-- Select Your Technologies to Train --</option>
							<option value="Core, Advanced Java & Oracle">Core, Advanced Java & Oracle</option>
							<option value=" Complete Java with Frameworks"> Complete Java with Frameworks</option>
							<option value=" .NET"> .NET</option>
							<option value=" ASP.NET"> ASP.NET</option>
							<option value=" C#.NET"> C#.NET</option>
							<option value="SQL Server">SQL Server</option>
							<option value="OOPs">OOPs</option>

							<option value=" .NET MVC"> .NET MVC</option>
							<option value="PYTHON">PYTHON</option>
							<option value=" DATA SCIENCE">DATA SCIENCE</option>
							<option value=" PHP"> PHP</option>
							<option value=" HTML / CSSS/ JavaScript">  HTML / CSSS/ JavaScript</option>
							<option value=" UI Technologies"> UI Technologies</option>
							<option value=" JavaScript &NodeJS"> JavaScript &NodeJS</option>
							<option value=" AngularJS"> AngularJS</option>

							<option value=" React JS"> React JS</option>
							<option value=" Angular 2">Angular 2</option>
							<option value=" Angular 4">  Angular 4</option>
							<option value="Angular 5">Angular 5</option>
							<option value=" Angular 6"> Angular 6</option>
							<option value="Angular 7">Angular 7</option>
							<option value="Angular 8">Angular 8</option>

							<option value="NodeJS">NodeJS</option>
							<option value=" Android"> Android</option>
							<option value=" iPhone"> iPhone</option>
							<option value="AWS">AWS</option>
							<option value=" DevOps"> DevOps</option>
							<option value=" Hadoop"> Hadoop</option>
							<option value="  Linux / Unix">  Linux / Unix</option>
							<option value="  Digital Marketing">  Digital Marketing</option>

							<option value=" Selenium"> Selenium</option>
							<option value=" Oracle"> Oracle</option>
							<option value="  RPA Blueprism"> RPA Blueprism</option>
							<option value=" RPA Automation Anywhere"> RPA Automation Anywhere</option>
							
						</select>
					
					</div>
				</div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="with-icon">
                      <input
                        name="percentagex"
                        placeholder="10th Percentage"
                        id="address"
                        type="text"
                         required="true"
                      />
                     
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="with-icon">
                      <input
                        name="percentagexii"
                        placeholder="12th percentage"
                        id="pincode"
                        type="text"
                         required="true"
                      />
                    
                    </div>
                  </div>
				  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="with-icon">
						<select name="course" placeholder="Select Your Graduation" id="course" required>
							<option value="">-- Select Your Graduation --</option>
							<option value="BE/B.Tech">BE/B.Tech</option>
							<option value="MCA">MCA</option>
							<option value="BCA">BCA</option>
							<option value="reactjs">BSC</option>
							<option value="M.tech">M.tech</option>
							<option value="MBA">MBA</option>
							<option value="Other">Other</option>
						</select>
						
					</div>
				</div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="with-icon">
                      <input
                        name="college"
                        placeholder="Name of College "
                        id="expyear"
                        type="text" 
                        required="true"
                      />
                     
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="with-icon">
                      <input
                        name="gyop"
                        placeholder="Graduation Pass out Year"
                        id="skills"
                        type="text"
                         required="true"
                      />
                    
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="with-icon">
                      <input
                        name="percentageg"
                        placeholder="Graduation Percentage"
                        id="skills"
                        type="text"
                         required="true"
                      />
                    
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="with-icon">
                      <input
                        name="stream"
                        placeholder="Stream"
                        id="skills"
                        type="text"
                         required="true"
                      />
                   
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="with-icon">
                      <input
                        name="state"
                        placeholder="Name of the State"
                        id="skills"
                        type="text"
                         required="true"
                      />
                    
                    </div>
                  </div>
                  <h6>Attached: Resume</h1>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="with-icon">
                      <input
                        name="resume"
                        placeholder="Name of the State"
                        id="skills"
                        type="file"
                         required="true"
                      />
                     
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pb-4">
                    <button
                      type="submit"
                      class="btn btn--green btn--with-shadow"
                    >
                      Register
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>

          
        </div>
      </div>

      <!-- End Blog posts-->
    </div>

