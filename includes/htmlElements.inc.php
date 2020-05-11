<?php
class HtmlElements
{
    

    static function printHeader()
    {
        print('
                <!-- prs navigation Start -->
                    <div class="prs_navigation_main_wrapper">
                        <div class="container-fluid">
                            <div id="search_open" class="gc_search_box">
                                <input type="text" placeholder="Search here">
                                <button><i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </div>
                            <div class="prs_navi_left_main_wrapper">
                                <div class="prs_logo_main_wrapper">
                                    <a href="index.html">
                                        <img src="images/header/logo.png" alt="logo" />
                                    </a>
                                </div>
                                <div class="prs_menu_main_wrapper">
                                    <nav class="navbar navbar-default">
                                        <div id="dl-menu" class="xv-menuwrapper responsive-menu">
                                            <button class="dl-trigger">
                                                <img src="images/header/bars.png" alt="bar_png">
                                            </button>
                                            <div class="prs_mobail_searchbar_wrapper" id="search_button">	<i class="fa fa-search"></i>
                                            </div>
                                            <div class="clearfix"></div>
                                            <ul class="dl-menu">
                                                <li class="parent"><a>movie</a>
                                                    <ul class="lg-submenu">
                                                        <ul class="lg-submenu">
        ');
        $controller = new Controller();
        $movieList = $controller::getMovies();
        $movie = NullClasses::getMovie();
        for ($i = 0; $i < 10; $i++) {
            if ($i < count($movieList)) {
                $movie = $movieList[$i];
                print('<li class="ar_left"><i class="fa fa-film"></i><a href="streaming.html?movie=');
                            print($movie->getTitle());
                            print('&id=');
                            print($movie->getId());
                            print('">');
                echo $movie->getTitle();
                print('</a></li>');
            }
        }
        print('                                  
                                                        </ul>
                                                    </ul>
                                                </li>
                                                <li class="parent"><a>tv show</a>
                                                    <ul class="lg-submenu">
        ');
        $showList = $controller::getShows();
        $show = NullClasses::getAdaptation();
        for ($i = 0; $i < 10; $i++) {
            if ($i < count($showList)) {
                $show = $showList[$i];
                print('<li><a href="show.html?show=');
                print($show->getTitle());
                print('&id=');
                print($show->getId());
                print('">');
                echo $show->getTitle();
                print('</a></li>');
            }
        }
        print ('
            
                
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /dl-menuwrapper -->
                                    </nav>
                                </div>
                            </div>
                            <div class="prs_navi_right_main_wrapper">
                                <div class="prs_slidebar_wrapper">
                                    <button class="second-nav-toggler" type="button">
                                        <img src="images/header/bars.png" alt="bar_png">
                                    </button>
                                </div>
                                <div class="prs_top_login_btn_wrapper">
                                    <div class="prs_animate_btn1">
                                        <ul><!-- ToDo: Login?  (Login only at start, so that site not accessible? preloader? -->
                                            <li><a href="#" class="button button--tamaya" data-text="sign up" data-toggle="modal" data-target="#myModal"><span>sign up</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-heading">
                                    <div class="con">
                                        <select name="category" form="searchForm">
                                            <option value="All">All Categories</option>
                                            <option value="movie">Movie</option>
                                            <option value="show">TV-Show</option>
                                        </select>
                                       
                                         <form id="searchForm" method="get" action="');
                                                echo htmlspecialchars("search.html");
                                                print('"><input type="text" placeholder="Search Movie , Show, Episode" name="Title">
                                        </form>
                                        <button form="searchForm" type="submit" ><i class="flaticon-tool"></i> 
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div id="mobile-nav" data-prevent-default="true" data-mouse-events="true">
                                <div class="mobail_nav_overlay"></div>
                                <div class="mobile-nav-box">
                                    <div class="mobile-logo">
                                        <a href="index.html" class="mobile-main-logo">
                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="46.996px" height="40px" viewBox="0 0 46.996 40" enable-background="new 0 0 46.996 40" xml:space="preserve">
                                            <g>
                                                <g>
                                                    <path  d="M39.919,19.833C39.919,8.88,30.984,0,19.959,0C8.937,0,0,8.88,0,19.833
                                                        c0,10.954,8.937,19.834,19.959,19.834C30.984,39.666,39.919,30.787,39.919,19.833z M35.675,14.425
                                                        c0.379,0,0.686,0.307,0.686,0.683s-0.305,0.683-0.686,0.683c-0.38,0-0.688-0.307-0.688-0.683S35.295,14.425,35.675,14.425z
                                                         M34.482,20.461c0,0.491-0.025,0.976-0.071,1.452l-11.214-4.512l6.396-7.733C32.592,12.311,34.482,16.167,34.482,20.461z
                                                         M19.083,2.277c0.379,0,0.687,0.305,0.687,0.682c0,0.378-0.306,0.684-0.687,0.684c-0.378,0-0.686-0.306-0.686-0.684
                                                        C18.396,2.584,18.704,2.277,19.083,2.277z M19.959,6.031c1.916,0,3.743,0.372,5.416,1.042l-6.335,7.662l-6.252-6.82
                                                        C14.906,6.718,17.351,6.031,19.959,6.031z M3.128,16.473c-0.378,0-0.687-0.306-0.687-0.684c0-0.377,0.307-0.682,0.687-0.682
                                                        c0.38,0,0.686,0.305,0.686,0.682C3.814,16.167,3.508,16.473,3.128,16.473z M5.535,22.119c-0.063-0.545-0.098-1.098-0.098-1.658
                                                        c0-3.612,1.339-6.911,3.547-9.444l6.502,7.095L5.535,22.119z M10.462,35.354c-0.379,0-0.687-0.306-0.687-0.683
                                                        s0.307-0.682,0.687-0.682c0.379,0,0.687,0.305,0.687,0.682S10.842,35.354,10.462,35.354z M6.925,26.828l10.4-4.186l0.239,12.052
                                                        C12.88,33.921,8.956,30.922,6.925,26.828z M19.513,22.326c-1.529,0-2.771-1.232-2.771-2.752c0-1.521,1.241-2.753,2.771-2.753
                                                        c1.53,0,2.771,1.232,2.771,2.753C22.284,21.096,21.043,22.326,19.513,22.326z M29.939,33.99c-0.378,0-0.686-0.308-0.686-0.683
                                                        c0-0.377,0.307-0.683,0.686-0.683s0.688,0.306,0.688,0.683C30.626,33.683,30.319,33.99,29.939,33.99z M22.482,34.672
                                                        l-0.246-12.388l10.846,4.365C31.098,30.799,27.177,33.854,22.482,34.672z M35.314,34.585c-1.837,1.531-6.061,4.306-6.061,4.306
                                                        C37.652,36.448,45.953,40,45.953,40l1.043-8.658C41.41,30.454,38.125,32.244,35.314,34.585z"/>
                                                </g>
                                            </g>
                                        </svg><span>Movie Pro</span>
                                        </a>	
                                        <a href="#" class="manu-close"><i class="fa fa-times"></i></a>
                                    </div>
                                    <ul class="mobile-list-nav">
                                        <li><a href="about.html">OVERVIEW</a>
                                        </li>
                                        <li><a href="movie_single.html">MOVIE</a>
                                        </li>
                                        <li><a href="event_single.html">EVENT</a>
                                        </li>
                                        <li><a href="show.html">GALLERY</a>
                                        </li>
                                        <li><a href="blog_single.html">BLOG</a>
                                        </li>
                                        <li><a href="contact.html">CONTACT</a>
                                        </li>
                                    </ul>
                                    <div class="product-heading prs_slidebar_searchbar_wrapper">
                                        <div class="con">
                                            <select>
                                                <option>All Categories</option>
                                                <option>Movie</option>
                                                <option>Video</option>
                                                <option>Music</option>
                                                <option>TV-Show</option>
                                            </select>
                                            <input type="text" placeholder="Search Movie , Video , Music">
                                            <button type="submit"><i class="flaticon-tool"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="achivement-blog">
                                        <ul class="flat-list">
                                            <li>
                                                <a href="#">	<i class="fa fa-facebook"></i>
                                                    <h6>Facebook</h6>
                                                    <span class="counter">12546</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">	<i class="fa fa-twitter"></i>
                                                    <h6>Twiter</h6>
                                                    <span class="counter">12546</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">	<i class="fa fa-pinterest"></i>
                                                    <h6>Pinterest</h6>
                                                    <span class="counter">12546</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="prs_top_login_btn_wrapper prs_slidebar_searchbar_btn_wrapper">
                                        <div class="prs_animate_btn1">
                                            <ul>
                                                <li><a href="#" class="button button--tamaya" data-text="sign up" data-toggle="modal" data-target="#myModal"><span>sign up</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- prs navigation End -->
	');
    }



    static function  printFooter(){
        print('	
                <div class="prs_footer_main_section_wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="prs_footer_cont1_wrapper prs_footer_cont1_wrapper_1">
                                <h2>LANGUAGE MOVIES</h2>
                                <ul>
                                    <li><i class="fa fa-circle"></i> &nbsp;&nbsp;<a href="#">English movie</a>
                                    </li>
                                    <li><i class="fa fa-circle"></i> &nbsp;&nbsp;<a href="#">Tamil movie</a>
                                    </li>
                                    <li><i class="fa fa-circle"></i> &nbsp;&nbsp;<a href="#">Punjabi Movie</a>
                                    </li>
                                    <li><i class="fa fa-circle"></i> &nbsp;&nbsp;<a href="#">Hindi movie</a>
                                    </li>
                                    <li><i class="fa fa-circle"></i> &nbsp;&nbsp;<a href="#">Malyalam movie</a>
                                    </li>
                                    <li><i class="fa fa-circle"></i> &nbsp;&nbsp;<a href="#">English Action movie</a>
                                    </li>
                                    <li><i class="fa fa-circle"></i> &nbsp;&nbsp;<a href="#">Hindi Action movie</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="prs_footer_cont1_wrapper prs_footer_cont1_wrapper_2">
                                <h2>MOVIES by presenter</h2>
                                <ul>
                                    <li><i class="fa fa-circle"></i> &nbsp;&nbsp;<a href="#">Action movie</a>
                                    </li>
                                    <li><i class="fa fa-circle"></i> &nbsp;&nbsp;<a href="#">Romantic movie</a>
                                    </li>
                                    <li><i class="fa fa-circle"></i> &nbsp;&nbsp;<a href="#">Adult movie</a>
                                    </li>
                                    <li><i class="fa fa-circle"></i> &nbsp;&nbsp;<a href="#">Comedy movie</a>
                                    </li>
                                    <li><i class="fa fa-circle"></i> &nbsp;&nbsp;<a href="#">Drama movie</a>
                                    </li>
                                    <li><i class="fa fa-circle"></i> &nbsp;&nbsp;<a href="#">Musical movie</a>
                                    </li>
                                    <li><i class="fa fa-circle"></i> &nbsp;&nbsp;<a href="#">Classical movie</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="prs_footer_cont1_wrapper prs_footer_cont1_wrapper_3">
                                <h2>BOOKING ONLINE</h2>
                                <ul>
                                    <li><i class="fa fa-circle"></i> &nbsp;&nbsp;<a href="#">www.example.com</a>
                                    </li>
                                    <li><i class="fa fa-circle"></i> &nbsp;&nbsp;<a href="#">www.hello.com</a>
                                    </li>
                                    <li><i class="fa fa-circle"></i> &nbsp;&nbsp;<a href="#">www.example.com</a>
                                    </li>
                                    <li><i class="fa fa-circle"></i> &nbsp;&nbsp;<a href="#">www.hello.com</a>
                                    </li>
                                    <li><i class="fa fa-circle"></i> &nbsp;&nbsp;<a href="#">www.example.com</a>
                                    </li>
                                    <li><i class="fa fa-circle"></i> &nbsp;&nbsp;<a href="#">www.hello.com</a>
                                    </li>
                                    <li><i class="fa fa-circle"></i> &nbsp;&nbsp;<a href="#">www.example.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="prs_footer_cont1_wrapper prs_footer_cont1_wrapper_4">
                                <h2>App available on</h2>
                                <p>Download App and Get Free Movie Ticket !</p>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="images/content/f1.jpg" alt="footer_img">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/content/f2.jpg" alt="footer_img">
                                        </a>
                                    </li>
                                </ul>
                                <h5><span>$50</span> Payback on App Download</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ');
    }

    static  function printCopyRightFooter(){
        print(' <!-- copyright -->
                <div class="prs_bottom_footer_wrapper">	<a href="javascript:" id="return-to-top"><i class="flaticon-play-button"></i></a>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
                                <div class="prs_bottom_footer_cont_wrapper">
                                    <p>Copyright 2019-20 <a href="#">Movie Pro</a> . All rights reserved - Design by <a href="#">Webstrot</a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
                                <div class="prs_footer_social_wrapper">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-youtube-play"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>'
        );
    }

    static function printPartnerSlider(){
        print ('	
                    <!-- prs patner slider Start -->
                    <div class="prs_patner_main_section_wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="prs_heading_section_wrapper">
                                        <h2>Our Patner’s</h2>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="prs_pn_slider_wraper">
                                        <div class="owl-carousel owl-theme">
                                            <div class="item">
                                                <div class="prs_pn_img_wrapper">
                                                    <img src="images/content/p1.jpg" alt="patner_img">
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="prs_pn_img_wrapper">
                                                    <img src="images/content/p2.jpg" alt="patner_img">
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="prs_pn_img_wrapper">
                                                    <img src="images/content/p3.jpg" alt="patner_img">
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="prs_pn_img_wrapper">
                                                    <img src="images/content/p4.jpg" alt="patner_img">
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="prs_pn_img_wrapper">
                                                    <img src="images/content/p5.jpg" alt="patner_img">
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="prs_pn_img_wrapper">
                                                    <img src="images/content/p6.jpg" alt="patner_img">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- prs patner slider End -->
	    ');
    }

    static  function printLogin(){
       print( '
	<!-- st login wrapper Start -->
	<div class="modal fade st_pop_form_wrapper" id="myModal" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<div class="st_pop_form_heading_wrapper float_left">
					<h3>Log in</h3>
				</div>
				<div class="st_profile_input float_left">
					<label>Email / Mobile Number</label>
					<input type="text">
				</div>
				<div class="st_profile__pass_input st_profile__pass_input_pop float_left">
					<input type="password" placeholder="Password">
				</div>
				<div class="st_form_pop_fp float_left">
					<h3><a href="#" data-toggle="modal" data-target="#myModa2" target="_blank">Forgot Password?</a></h3>
				</div>
				<div class="st_form_pop_login_btn float_left">	<a href="page-1-7_profile_settings.html">LOGIN</a>
				</div>
				<div class="st_form_pop_or_btn float_left">
					<h4>or</h4>
				</div>
				<div class="st_form_pop_facebook_btn float_left">	<a href="#"> Connect with Facebook</a>
				</div>
				<div class="st_form_pop_gmail_btn float_left">	<a href="#"> Connect with Google</a>
				</div>
				<div class="st_form_pop_signin_btn float_left">
					<h4>Don’t have an account? <a href="#" data-toggle="modal" data-target="#myModa3" target="_blank">Sign Up</a></h4>
					<h5>I agree to the <a href="#">Terms & Conditions</a> & <a href="#">Privacy Policy</a></h5>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade st_pop_form_wrapper" id="myModa2" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<div class="st_pop_form_heading_wrapper st_pop_form_heading_wrapper_fpass float_left">
					<h3>Forgot Password</h3>
					<p>We can help! All you need to do is enter your email ID and follow the instructions!</p>
				</div>
				<div class="st_profile_input float_left">
					<label>Email Address</label>
					<input type="text">
				</div>
				<div class="st_form_pop_fpass_btn float_left">	<a href="#">Verify</a>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade st_pop_form_wrapper" id="myModa3" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<div class="st_pop_form_heading_wrapper float_left">
					<h3>Sign Up</h3>
				</div>
				<div class="st_profile_input float_left">
					<label>Email / Mobile Number</label>
					<input type="text">
				</div>
				<div class="st_profile__pass_input st_profile__pass_input_pop float_left">
					<input type="password" placeholder="Password">
				</div>
				<div class="st_form_pop_fp float_left">
					<h3><a href="#" data-toggle="modal" data-target="#myModa2" target="_blank">Forgot Password?</a></h3>
				</div>
				<div class="st_form_pop_login_btn float_left">	<a href="page-1-7_profile_settings.html">LOGIN</a>
				</div>
				<div class="st_form_pop_or_btn float_left">
					<h4>or</h4>
				</div>
				<div class="st_form_pop_facebook_btn float_left">	<a href="#"><i class="fab fa-facebook-f"></i> Connect with Facebook</a>
				</div>
				<div class="st_form_pop_gmail_btn float_left">	<a href="#"><i class="fab fa-google-plus-g"></i> Connect with Google</a>
				</div>
				<div class="st_form_pop_signin_btn st_form_pop_signin_btn_signup float_left">
					<h5>I agree to the <a href="#">Terms & Conditions</a> & <a href="#">Privacy Policy</a></h5>
				</div>
			</div>
		</div>
	</div>
	<!-- st login wrapper End -->');
    }



    static function printPaginator(){
        print ('<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="pager_wrapper gc_blog_pagination">
													<ul class="pagination">
														<li><a href="#"><i class="flaticon-left-arrow"></i></a>
														</li>
														<li><a href="#">1</a>
														</li>
														<li><a href="#">2</a>
														</li>
														<li class="prs_third_page"><a href="#">3</a>
														</li>
														<li class="hidden-xs"><a href="#">4</a>
														</li>
														<li><a href="#"><i class="flaticon-right-arrow"></i></a>
														</li>
													</ul>
												</div>
											</div>');
    }

    static function printCard($type, $title, $id){
        print ('<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 prs_upcom_slide_first">
                                                            <div class="prs_upcom_movie_box_wrapper prs_mcc_movie_box_wrapper">
                                                                <div class="prs_upcom_movie_img_box">');
                                                                $path = HtmlElements::getImagePath($type, $id);
                                                                if(isset($path)){
                                                                    print(' <img src="'.$path.'" alt="movie_img" />');
                                                                }else{
                                                                    print(' <img src="images/content/movie_category/up1.jpg" alt="movie_img" />');
                                                                }
                                                                  print('<div class="prs_upcom_movie_img_overlay"></div>
                                                                    <div class="prs_upcom_movie_img_btn_wrapper">
                                                                        <ul>
                                                                            <li><a href="#">View Trailer</a>
                                                                            </li>
                                                                            <li><a href="#">View Details</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="prs_upcom_movie_content_box">
                                                                    <div class="prs_upcom_movie_content_box_inner">
                                                                        <h2><a href="');
        if(strcasecmp($type, "Adaptation") == 0){
            print "show.html?show=";
            print $title;
            print "&id=";
            print $id;
        }else if(strcasecmp($type, "Movie") == 0 || strcasecmp($type, "Episode") == 0){
            print "streaming.html?".$type."=";
            print $title;
            print "&id=";
            print $id;
        }
        print ('">');
        print $title; print ('</a></h2>
                                                                        <p>Drama , Acation</p>
                                                                        <!--
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                        <i class="fa fa-star-o"></i>-->
                                                                    </div>
                                                                    <div class="prs_upcom_movie_content_box_inner_icon">
                                                                        <ul>
                                                                            <!--<li><a href="movie_booking.html"><i class="flaticon-cart-of-ecommerce"></i></a>
                                                                            </li>-->
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                ');
    }

    static function printSmallCard($type, $title, $id){
        print ('<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                            <div class="prs_upcom_movie_box_wrapper prs_mcc_movie_box_wrapper">
                                                                <div class="prs_upcom_movie_img_box">');
                                                                $path = HtmlElements::getImagePath($type, $id);
                                                                if(isset($path)){
                                                                    print(' <img src="'.$path.'" alt="movie_img" />');
                                                                }else{
                                                                    print(' <img src="images/content/movie_category/up5.jpg" alt="movie_img" />');
                                                                }
                                                                  print('<div class="prs_upcom_movie_img_overlay"></div>
                                                                    <div class="prs_upcom_movie_img_btn_wrapper">
                                                                        <ul>
                                                                            <li><a href="#">View Trailer</a>
                                                                            </li>
                                                                            <li><a href="#">View Details</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="prs_upcom_movie_content_box">
                                                                    <div class="prs_upcom_movie_content_box_inner">
                                                                        <h2><a href="');
        if(strcasecmp($type, "Adaptation") == 0){
            print "show.html?show=";
            print $title;
            print "&id=";
            print $id;
        }else if(strcasecmp($type, "Movie") == 0 || strcasecmp($type, "Episode") == 0){
            print "streaming.html?".$type."=";
            print $title;
            print "&id=";
            print $id;
        }
        print ('">');
        print $title; print ('</a></h2>
                                                                        <p>Drama , Acation</p>
                                                                        <!--
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                        <i class="fa fa-star-o"></i>-->
                                                                    </div>
                                                                    <div class="prs_upcom_movie_content_box_inner_icon">
                                                                        <ul>
                                                                            <!--<li><a href="movie_booking.html"><i class="flaticon-cart-of-ecommerce"></i></a>
                                                                            </li>-->
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                ');
    }

    static function printListCard($type, $title, $id){
        print('<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="prs_mcc_list_movie_main_wrapper">
                                                                <div class="prs_mcc_list_movie_img_wrapper">
                                                                    <img src="images/content/movie_category/up1.jpg" alt="categoty_img">
                                                                </div>
                                                                <div class="prs_mcc_list_movie_img_cont_wrapper">
                                                                    <div class="prs_mcc_list_left_cont_wrapper">
                                                                        <h2><a href="');
        if(strcasecmp($type, "Adaptation") == 0){
            print "show.html?show=";
            print $title;
            print "&id=";
            print $id;
        }else if(strcasecmp($type, "Movie") == 0 || strcasecmp($type, "Episode") == 0){
            print "streaming.html?".$type."=";
            print $title;
            print "&id=";
            print $id;
        }
        print ('">');
        print $title; print ('</a></h2>
                                                                        <p>Drama , Acation &nbsp;&nbsp;&nbsp;<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>
                                                                        </p>
                                                                        <h4>Movie Director - Jhon Doe</h4>
                                                                    </div>
                                                                    <div class="prs_mcc_list_right_cont_wrapper">	<a href="#"><i class="flaticon-cart-of-ecommerce"></i></a>
                                                                    </div>
                                                                    <div class="prs_mcc_list_bottom_cont_wrapper">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis trud exercitation ullamco.</p>
                                                                        <ul>
                                                                            <li><a href="#">View Trailer</a>
                                                                            </li>
                                                                            <li><a href="#">View Details</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
											     ');
    }



    private static function getImagePath($type, $id){
        try {
            //for movie, episode, show, season
            // Assumtion: File structure: /media/movies/title/file.mp4 (+folder.jpg)
            ///media/shows/ShowTitle/Seasons (+folder.jpg)/ Episodes.mp4 (+folder.jpg)
            $path = "";
            if ($type == "Movie") {
                $movie = NullClasses::getMovie();
                $movie = Controller::getMovie($id);
                $path = "media/movies/" . dirname($movie->getFilePath()) . '/folder.jpg';



            } else if ($type == "Episode") {
                $episode = NullClasses::getEpisode();
                $episode = Controller::getEpisode($id);
                $path = "media/shows/" . dirname($episode->getFilePath()) . '/folder.jpg';
            } else if ($type == "Season") {
                $season = NullClasses::getSeason();
                $season = Controller::getSeason($id);
                foreach (Controller::$episodeList as $episode) {
                    if ($episode->$season == $season) {
                        break;
                    }
                }
                $path = "media/shows/" . dirname($episode->getFilePath()) . '/folder.jpg';

            } else if ($type == "Adaptation") {
                $show = NullClasses::getAdaptation();
                $show = Controller::getShow($id);
                $season = NullClasses::getSeason();
                foreach (Controller::$seasonList as $season) {
                    if ($season->getShow() == $show) {
                        break;
                    }
                }
                foreach (Controller::$episodeList as $episode) {
                    if ($episode->getSeason() == $season) {
                        break;
                    }
                }

                $path = explode('/', $episode->getFilePath());
                array_pop($path); // remove file
                array_pop($path); // remove Season Dir -> now in show dir
                $path = implode('/', $path);
                $path .= '/folder.jpg';
                $path = "media/shows/" . $path;
            }
            return $path;
        }catch (Exception $e){
            print($e);
            return null;
        }
    }








    static function printStyleSwitcher(){
        print('<!-- color picker start -->
                <div id="style-switcher">
                  <div>
                    <h3>Choose Color</h3>
                    <ul class="colors">
                      <li>
                        <p class=\'colorchange\' id=\'color\'></p>
                      </li>
                      <li>
                        <p class=\'colorchange\' id=\'color2\'></p>
                      </li>
                      <li>
                        <p class=\'colorchange\' id=\'color3\'></p>
                      </li>
                      <li>
                        <p class=\'colorchange\' id=\'color4\'></p>
                      </li>
                      <li>
                        <p class=\'colorchange\' id=\'color5\'></p>
                      </li>
                      <li>
                        <p class=\'colorchange\' id=\'style\'></p>
                      </li>
                    </ul>
                  </div>
                  <div class="bottom"> <a href="" class="settings"><i class="fa fa-gear"></i></a> </div>
                </div>
	           <!-- color picker end --> 
	');
    }























    //not perfect - maybe add size + variable sec
    static function ffmpeg($filepath){
        require 'vendor/autoload.php';
        $filename = basename($filepath);
        $filename = mb_substr($filename, 0, -4); // remove .mp4
        $filename .= '.png';
        $sec = 100;
        $thumbnail = 'images/thumbnails/'.$filename;

        try{
            $ffmpeg = FFMpeg\FFMpeg::create(array(
                'ffmpeg.binaries' => '/usr/bin//ffmpeg',
                'ffprobe.binaries' => '/usr/bin/ffprobe',
                'timeout' => 3600, // The timeout for the underlying process
                'ffmpeg.threads' => 12, // The number of threads that FFMpeg should use
            ));

            $video = $ffmpeg->open($filepath);
            $frame = $video->frame(FFMpeg\Coordinate\TimeCode::fromSeconds($sec));
            $frame->save($thumbnail);
            return $thumbnail;
        }catch(Exception $e){
            return $e->getMessage();
        }

    }







}