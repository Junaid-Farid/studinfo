<?php require_once("includes/session.php");?>
<?php require_once("includes/functions.php");?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/dbcon.php");?>
<?php include("includes/header.php");?>

<div id="menubar">

</script>
	<?php include("menus.php");?>
		  </div>
 <!-- Bootstrap Core CSS -->
        <link href="elevator/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Font Awesome CSS -->
        <link href="elevator/css/font-awesome.min.css" rel="stylesheet">
		
		<!-- Custom CSS -->
        <link href="elevator/css/animate.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="elevator/css/style.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>


        <!-- Template js -->
        <script src="elevator/js/jquery-2.1.1.min.js"></script>
        <script src="elevator/bootstrap/js/bootstrap.min.js"></script>
        <script src="elevator/js/jquery.appear.js"></script>
        <script src="elevator/js/contact_me.js"></script>
        <script src="elevator/js/jqBootstrapValidation.js"></script>
        <script src="elevator/js/modernizr.custom.js"></script>
        <script src="elevator/js/script.js"></script>


  
  
  
<!-- Start Logo Section -->
 <section id="logo-section" class="text-center">
            <div class="container">
                            <h1 style="text-align:left; color:#FF432E">Admin Panel</h1>
                     
            </div>
        </section>
        
        <!-- End Logo Section -->
        
        <!-- Start Main Body Section -->
        <div class="mainbody-section text-center">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-3">
                        
                        <div class="menu-item blue">
                            <a href="#feature-modal" data-toggle="modal">
                                <i class="fa fa-magic"></i>
                                <p>Feature</p>
                            </a>
                        </div>
                        
                        <div class="menu-item green">
                            <a href="#portfolio-modal" data-toggle="modal">
                                <i class="fa fa-file-photo-o"></i>
                                <p>Gallery</p>
                            </a>
                        </div>
                        
                        <div class="menu-item light-red">
                            <a href="#about-modal" data-toggle="modal">
                                <i class="fa fa-user"></i>
                                <p>About Us</p>
                            </a>
                        </div>
                        
                    </div>
                    
                    <div class="col-md-6">
                        
                        <!-- Start Carousel Section -->
                        <div class="home-slider">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="padding-bottom: 30px;">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="elevator/images/iub1.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="elevator/images/iub2.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="elevator/images/iub3.jpg" class="img-responsive" alt="">
                                    </div>

                                </div>

                            </div>
                        </div>
                        <!-- Start Carousel Section -->
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="menu-item color responsive">
                                    <a href="#service-modal" data-toggle="modal">
                                        <i class="fa fa-area-chart"></i>
                                        <p>Services</p>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="menu-item light-orange responsive-2">
                                    <a href="#team-modal" data-toggle="modal">
                                        <i class="fa fa-users"></i>
                                        <p>Team</p>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    
                    <div class="col-md-3">
                        
                        <div class="menu-item light-red">
                            <a href="#contact-modal" data-toggle="modal">
                                <i class="fa fa-envelope-o"></i>
                                <p>Contact</p>
                            </a>
                        </div>
                        
                        <div class="menu-item color">
                            <a href="#testimonial-modal" data-toggle="modal">
                                <i class="fa fa-comment-o"></i>
                                <p>Latest Comments</p>
                            </a>
                        </div>
                        
                        <div class="menu-item blue">
                            <a href="#news-modal" data-toggle="modal">
                                <i class="fa fa-mortar-board"></i>
                                <p>Latest Activities</p>
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Body Section -->
        
        <!-- Start Copyright Section -->
        
        <!-- End Copyright Section -->
        
        
        <!-- Start Feature Section -->
        <div class="section-modal modal fade" id="feature-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Our Awesome Feature</h3>
                            <p>These are the features that are going to be offered by us.</p>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="feature-2">
                                <div class="media">
                                    <i class="fa fa-magic pull-left"></i>
                                    <div class="media-body">
                                        <h4 class="media-heading">Activities</h4>
                                        <p>Different Activities are offered by us to a user.</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.col-md-4 -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="feature-2">
                                <div class="media">
                                    <i class="fa fa-css3 pull-left"></i>
                                    <div class="media-body">
                                        <h4 class="media-heading">Grades</h4>
                                        <p>Grades are send to a class with department.</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.col-md-4 -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="feature-2">
                                <div class="media">
                                    <i class="fa fa-wordpress pull-left"></i>
                                    <div class="media-body">
                                        <h4 class="media-heading">Department</h4>
                                        <p>Different departments are added and send them different activities.</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.col-md-4 -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="feature-2">
                                <div class="media">
                                    <i class="fa fa-plug pull-left"></i>
                                    <div class="media-body">
                                        <h4 class="media-heading">Students</h4>
                                        <p>Different students can be added and can be seen their information.</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.col-md-4 -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="feature-2">
                                <div class="media">
                                    <i class="fa fa-joomla pull-left"></i>
                                    <div class="media-body">
                                        <h4 class="media-heading">Subjects</h4>
                                        These are the Subjects which are going to be offered by any institute.
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.col-md-4 -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="feature-2">
                                <div class="media">
                                    <i class="fa fa-cube pull-left"></i>
                                    <div class="media-body">
                                        <h4 class="media-heading">Course</h4>
                                        <p>Different Courses can be added by the admin and then can be seen for any class</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.col-md-4 -->
                        
                    </div><!-- /.row -->
                </div>
                
                <div class="pricing-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                
                            </div>
                            <div class="col-md-3 col-sm-6">
                              <div class="pricing-table"> </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- End Feature Section -->
        
        
        
        <!-- Start Portfolio Section -->
        <div class="section-modal modal fade" id="portfolio-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Our Gallery</h3>
                            <p>Following is the gallery of our beautiful University</p>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                <img src="img/be3.jpg" class="img-responsive" alt="...">
                                <div class="portfolio-details text-center">
                                   
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                <img src="img/be5.jpg" class="img-responsive" alt="...">
                                <div class="portfolio-details text-center">
                                    <h4>&nbsp;</h4>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                <img src="img/1.jpg" class="img-responsive" alt="...">
                                <div class="portfolio-details text-center">
                                    <h4>&nbsp;</h4>
                                   
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                <img src="img/2.jpg" class="img-responsive" alt="...">
                                <div class="portfolio-details text-center">
                                    <h4>&nbsp;</h4>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                <img src="img/3.jpg" class="img-responsive" alt="...">
                                <div class="portfolio-details text-center">
                                    <h4>&nbsp;</h4>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                <img src="img/7.jpg" class="img-responsive" alt="...">
                                <div class="portfolio-details text-center">
                                    <h4>&nbsp;</h4>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                <img src="img/8.jpg" class="img-responsive" alt="...">
                                <div class="portfolio-details text-center">
                                    <h4>&nbsp;</h4>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                <img src="img/9.jpg" class="img-responsive" alt="...">
                                <div class="portfolio-details text-center">
                                    <h4>&nbsp;</h4>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                <img src="img/10.jpg" class="img-responsive" alt="...">
                                <div class="portfolio-details text-center">
                                    <h4>&nbsp;</h4>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                <img src="img/be.jpg" class="img-responsive" alt="...">
                                <div class="portfolio-details text-center">
                                    <h4>&nbsp;</h4>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                <img src="img/be1.jpg" class="img-responsive" alt="...">
                                <div class="portfolio-details text-center">
                                    <h4>&nbsp;</h4>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                <img src="img/ba4.jpg" class="img-responsive" alt="...">
                                <div class="portfolio-details text-center">
                                    <h4>&nbsp;</h4>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div><!-- /.row -->
                </div>
                
            </div>
        </div>
        <!-- End Portfolio Section -->
        
        
        <!-- Start About Us Section -->
        <div class="section-modal modal fade" id="about-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>About Us</h3>
                            <p>We are the students of IUB who have given us a best way </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="about-text">
                                <p>Here is the Beautiful scene of Islamia University Bahawalpur.This is the old Campus on University Chowk. Islamia University Bahawalpur is known good because of its beauty and most of people have appreciated the beauty of Bahawalpur as well.In view of the changing scenario, Jamia Abbasia was declared as a chartered University in the year 1975, and renamed as The Islamia University of Bahawalpur. Initially, it started functioning at Abbasia and Khawaja Fareed Campuses with ten Departments. In order to construct a modern and self-contained campus, 1250 acres of sandy land was acquired by the University on Hasilpur Road about eight kilometers away from the city center.</p>
                                <p>Over a period of time with continuous efforts and hard work, the sand dunes have been converted into well-built faculties, green lawns, hostels, residential colony, farms and orchards. It is known as Baghdad-ul-Jadeed Campus. Currently, there are 60 Department offering 127 programs.</p>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6"> </div>
                                    <div class="col-md-4 col-sm-6"> </div>
                                </div><!-- /.row -->
                            </div>
                        </div>
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="skill-shortcode">
                        
                                <!-- Progress Bar -->
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="custom-tab">
                        
                                <ul class="nav nav-tabs nav-justified" role="tablist">
                                    <li class="active"><a href="#tab-1" role="tab" data-toggle="tab">Our Mission</a></li>
                                    <li><a href="#tab-2" role="tab" data-toggle="tab">Our Vission</a></li>
                                </ul>

                                <div class="tab-content">

                                    <div class="tab-pane active" id="tab-1">
                                        <p>Our Mission is to get the all information at a website.n view of the changing scenario, Jamia Abbasia was declared as a chartered University in the year 1975, and renamed as The Islamia University of Bahawalpur. Initially, it started functioning at Abbasia and Khawaja Fareed Campuses with ten Departments. In order to construct a modern and self-contained campus, 1250 acres of sandy land was acquired by the University on Hasilpur Road about eight kilometers away from the city center.</p>
                                        <p>Over a period of time with continuous efforts and hard work, the sand dunes have been converted into well-built faculties, green lawns, hostels, residential colony, farms and orchards. It is known as Baghdad-ul-Jadeed Campus. Currently, there are 60 Department offering 127 programs</p>
                                    </div>


                                    <div class="tab-pane" id="tab-2">
                                        <p>Our Vision is to provide the best management system for all universities.</p>
                                        <p>His Excellency Mamnoon Hussain, President Islamic Republic of Pakistan has said that it is the great beneficence of Allah the Almighty that we have been blessed with plains, mountains, all four season with full bloom and people are unparalleled in their ownself. Hence, I can very rightly proclaim that our highly educated youth is the hope of motherland&rsquo;s future and their self determination can change the fate of the country. Your knowledge, your dedication, your struggle and your determination is like a ray of hope for the nation who has pinned expectations on you, because you are the bright future of Pakiatan. He expressed these views on the occasion of IUB Convocation 2014, which was held in Main Auditorium, Baghdad-ul-Jadeed Campus Islamia University of Bahawalpur.</p>
                                    </div>


                                    <div class="tab-pane" id="tab-3">
                                       
                                  </div>

                              </div><!-- /.tab-content -->

                          </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- End About Us Section -->
        
        
        <!-- Start Service Section -->
        <div class="section-modal modal fade" id="service-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h2>Our Main Services</h2>
                            <p>Following are the services that are provided to this panel.</p>
                      </div>
                  </div>
                                        
                      <h3>1.  Student informtation </h3>
                      <p style="font-size:16px;">    Student Information is added here including his all details. Details can include his ID No. Student study year his department as well .</p>
                      
                      <h3>2.  Student Email Sending</h3>
                      <p style="font-size:16px;">    One of the most popular activity is to send the grades and activities .</p>
                      
                      <h3>3.  Activities</h3>
                      <p style="font-size:16px;">    Through Activities we can send different events happening to students. Here activities date is mentioned as well so events occuring will be sned through email also will be displayed on Website as well .</p>
                      
                      <h3>4.  Grades Sending</h3>
                      <p style="font-size:16px;">    Through this service we can send grades to students. Grades are send to the students of that class and that semester whom we want to send .</p>
                       
                       <h3>5.  Management</h3>
                      <p style="font-size:16px;">    By using this service we can manage our studnts profiles and users profiles as well .</p>
                      
                      
              </div><!-- /.row -->
                </div>
                
                <div class="pricing-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                
                            </div>
                            <div class="col-md-3 col-sm-6">
                              <div class="pricing-table"> </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- End Service Section -->
        
        
        <!-- Start Team Member Section -->
        <div class="section-modal modal fade" id="team-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Our Expert Team</h3>
                            <p>That is the team who have completed and designed this beautiful Project and will always try to do best in future.</p>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="images/ateeq.jpg" class="img-responsive" alt="">
                                <div class="team-details">
                                    <h4>Muhammad Attique</h4>
                                    <div class="designation">Web Developer</div>
                                    <ul style="text-align: center;">
                                        <li><a href="https://www.facebook.com/muhammad.attique.93"><i class="fa fa-facebook"></i></a></li>
     
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="images/junaid.jpg" class="img-responsive" alt="">
                                <div class="team-details">
                                    <h4>Junaid Ahmed</h4>
                                    <div class="designation">Web Developer</div>
                                    <ul style="text-align: center;">
                                        <li><a href="https://www.facebook.com/profile.php?id=100006316565839"><i class="fa fa-facebook"></i></a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        
        <!--Latest News Section -->
        
        
        <div class="section-modal modal fade" id="news-modal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
              <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                
                <div class="row">
                        <div class="section-title text-center">
                            <h3>Latest Activities</h3>
                            <p></p>
                        </div>
                    </div>
                    <Table class="app_table" style="width:100%;">
		<tr>
	      
			
			<th align="left">Event Name</th>
			<th align="left">Event Date</th>
			<th align="left">Detail</th>            
            <th align="left">Department</th>
            <th align="left">Class</th>
			<th align="left">Semester</th>
			<th align="left">Option</th>
			
		
			
        </tr>
<?php
		$sql = 'SELECT * FROM  `schoolcal` ORDER BY cal_date ASC';
		
					$result = mysql_query($sql);
					confirm_query($result);
					while ($row = mysql_fetch_array($result)) {
						
						echo (@$odd == true) ? ' <tr class="odd_row" > ' : ' <tr class="even_row"> ';
							@$odd = !$odd;
						
						echo ' <td> ';
						echo '<a href="edit_cal.php?id='.$row['cal_id'].'" class="app_listitem_key">'.$row['event'].'</a>';			
						echo ' <td> ';
						echo $row['cal_date'];
						echo ' <td> ';
						echo '<a href="event_detail.php?id='.$row['cal_id'].'" class="app_listitem_key"><img src="img_icon\Document.ico" width="30" height="30"/></a>';
						//sql for deprtment
						$sql = 'SELECT dept_name FROM  `department` WHERE dept_id = "'.$row['cal_dept_id'].'"';
						$rs = mysql_query($sql);
						confirm_query($rs);
						$rw = mysql_fetch_array($rs);
						//end of department
						echo ' <td> ';
						echo $rw['dept_name'];
						echo ' <td> ';
						//sql for deprtment
						$sql = 'SELECT course_name FROM  `course` WHERE course_id = "'.$row['cal_course_id'].'"';
						$rs = mysql_query($sql);
						confirm_query($rs);
						$rw = mysql_fetch_array($rs);
						//end of department
						echo $rw['course_name'];
						echo ' <td> ';
						echo $row['semester'];
						echo ' <td> ';
						echo '<a href="send_act.php?id='.$row['cal_id'].'" class="app_listitem_key" title="Send To Student"><img src="img_icon\Mail.ico" width="30" height="30"/></a> ';
						if ($_SESSION['usertype']=='Administrator' || $_SESSION['usertype']=='Registrar'){
						
						echo ' <a href="process_del_act.php?id='.$row['cal_id'].'" class="app_listitem_key" title="Delete"><img src="img_icon\Trash.ico" width="30" height="30"/></a>';

						}
						
			
					}
?>
</table>

</table>
			
                    
                </div>
                
            </div>
        </div>
        <!-- End Latest News Section -->
        
        
        
        
        
        
        
        <!-- Start Contact Section -->
        <div class="section-modal modal fade contact" id="contact-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Contact With Us</h3>
                            <p>You can contact wih us at following info.</p>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-4">
                            <div class="footer-contact-info">
                                <h4>Contact info</h4>
                                <ul>
                                    <li><strong>E-mail :</strong> attiquetaunsvi@gmail.com</li>
                                    <li><strong>E-mail :</strong> junaid.ahmed.infome@gmail.com</li>
                                    <li><strong>Phone :</strong> +923467403120</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="footer-social text-center">
                                <ul>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="footer-contact-info">
                                <h4>Working Hours</h4>
                                <ul>
                                    <li><strong>Mon-Wed :</strong> 9 am to 5 pm</li>
                                    <li><strong>Thurs-Fri :</strong> 8 am to 12 pm</li>
                                    <li><strong>Sat :</strong> 9 am to 3 pm</li>
                                    <li><strong>Sunday :</strong> Closed</li>
                                </ul>
                            </div>
                        </div>
                        
                    </div><!--/.row -->
                    <div class="row" style="padding-top: 80px;">
                        <div class="col-md-12">
                            <form name="sentMessage" id="contactForm" novalidate>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="form-group">
                                            <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-lg-12 text-center">
                                        <div id="success"></div>
                                        <button type="submit" class="btn btn-primary">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- End Contact Section -->
        
        
         <!-- Start Testimonial Section -->
        <div class="section-modal modal fade contact" id="testimonial-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=1044506765565837";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
                    
                     <!---facebook comment box--->
                        
      <div class="fb-comments" data-href="https://www.facebook.com/pages/Uni-Swift-Info/975972449127318" data-width="670" data-numposts="5"></div>
                        
                        
                        <!---end facebook comment box----><!--/.row -->
                    
                </div>
                
            </div>
        </div>
        <!-- End Testimonial Section -->


<?php include("includes/footer.php");?>
