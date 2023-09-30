<?php 
session_start();
if(!isset($_SESSION['login_user'])){
header("location:index.php?msg=Plz Login first to Continue!!!");
}
include("includes/db_connect.php");?>
<?php include("includes/function.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"   "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" version="XHTML+RDFa 1.0" dir="ltr">

<head profile="http://www.w3.org/1999/xhtml/vocab">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Located in Washington, D.C., the George Washington University offers undergraduate, graduate and professional programs through its 10 colleges and schools." />
<link rel="canonical" href="http://localhost/2013/TEO/" />
<meta name="keywords" content="George washington university, gwu, gw, gw university, george washington, dc universities, dc colleges, education, higher education" />
<meta content="width=device-width, maximum-scale=5" name="viewport" />
  <title>Canada MI University</title>
<link type="text/css" rel="stylesheet" href="css/decoration.css" />
<link type="text/css" rel="stylesheet" href="css/style1.css" media="all" />
<link type="text/css" rel="stylesheet" href="css/style2.css" media="all" />
<link type="text/css" rel="stylesheet" href="css/style3.css" media="screen" />
<link type="text/css" rel="stylesheet" href="css/style4.css" media="only screen and (max-width: 540px)" />

<script type="text/javascript" src="js/validation.js"></script>
<script type="text/javascript" src="js/js1.js"></script>
<script type="text/javascript" src="js/js2.js"></script>
<script type="text/javascript" src="js/js3.js"></script>
<script type="text/javascript" src="js/webvator-file.js"></script>
<link type="text/css" href="plugins/calendar/css/smoothness/jquery-ui-1.7.1.custom.css" rel="stylesheet" />	
<script type="text/javascript" src="plugins/calendar/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="plugins/calendar/js/jquery-ui-1.7.1.custom.min.js"></script>
<script type="text/javascript">
$(function() {
$("#st_dob").datepicker({changeMonth: true,changeYear: true,startYear:1900,EndYear:2000});
$("#st_doa").datepicker({changeMonth: true,changeYear: true});
});
function limitchar(e)
{
	var key, keychar;
	if (window.event)
		key=window.event.keyCode;
	else if (e)
		key=e.which;
	else
		return true;
	keychar = String.fromCharCode(key);
	keychar = keychar.toLowerCase();
	goods = goods.toLowerCase();
	if (goods.indexOf(keychar) != -1)
	{
		goods="0123456789.";
		return true;
	}
	if ( key==null || key==0 || key==8 || key==9 || key==13 || key==27 )
	{
		goods="0123456789.";
		return true;
	}
	return false;
}







  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-37631291-1']);
  _gaq.push(['_setDomainName', 'webvator.com']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

 
</script>
</head>
<body class="html front not-logged-in no-sidebars page-frontpage tao" >
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable">Skip to main content</a>
  </div>
    <div id="header">
<div id="header-wrapper">


		<a id="mobile-nav" href="#">
	  	<span class="icon-bar"></span>
	    <span class="icon-bar"></span>
	    <span class="icon-bar"></span>
	  </a>
<div class="view view-main-header view-id-main_header view-display-id-main_header_panel_pane view-dom-id-3af75297e8d9c0cb75674b84fce2d69e">
        
  
  
      <div class="view-content">
        <div class="views-row views-row-1 views-row-odd views-row-first views-row-last">
    

<div class="gwlogo clearfix">

  <div class="field field-name-field-logo field-type-image field-label-hidden"><div class="field-items"><div class="field-item even"><img typeof="foaf:Image" src="images/LOGO.png" width="199" height="90" alt="Canada MI University" title="Canada MI University" /></div></div></div>
 </div>

<div class="right clearfix">
<div class="social-links clearfix">
        <ul>
                          <li>
                  <a href="https://www.facebook.com/" >
                    <img src="images/Facebook.png" />
                  </a>
                </li>
                          <li>
                  <a href="http://twitter.com/" >
                    <img src="images/Twitter.png" />
                  </a>
                </li>
                          <li>
                  <a href="http://www.youtube.com/" >
                    <img src="images/YouTube.png"  />
                  </a>
                </li>
                          <li>
                  <a href="javascript:void(0)" >
                    <img src="images/icons_Instagram.png"  />
                  </a>
                </li>
                  </ul>
</div>

<div class="clearfix">
<form method="get" action="javascript:void(0)" id="search">
    <div id="search-holder">
     
            <span class="search-title">Search</span>
      <input type="text" name="q" id="searchInput">
      <button type="submit">Search</button>
    </div>
  </form>
</div>
<div class="links clearfix">
                    <a href="contact.php" target="_blank">Contact us</a>          |            <a href="javascript:void(0)" >Photo Gallery</a>          |            <a href="javascript:void(0)" >Students</a>          |            <!--<a href="javascript:void(0)">Site Map</a> -->          </div>
  </div>

<div class="bottom clearfix">
<div class="target-audience">
<a href="./" >HOME PAGE</a> 
</div>
</div>

  </div>
    </div>
  
  
  
  
  
  
</div></div>
</div>

<!--<div id='branding'><div class='limiter clearfix'>
  <h1 class='site-name'></h1></div></div>-->

<!--<div id='navigation'><div class='limiter clearfix'>
                </div></div>-->


<div id='page'><div class='limiter clearfix'>
                
        <div>


</div>
  
  <div id='main-content' class='clearfix'>
    
  <!--
        -->
    <!--
     -->
                <div id='content' class='clearfix'>  <div class="region region-content">
    <div class="panel-display panel-front-page clearfix" >
	
	  		<div class="hero-wrapper">	
    		<div class="panel-panel panel-hero">
      			<div class="inside"><div class="panel-pane pane-views-panes pane-gw-main-site-hero-rotator-panel-pane-1" >
  
      
  
  <div class="pane-content">
    <div class="view view-gw-main-site-hero-rotator view-id-gw_main_site_hero_rotator view-display-id-panel_pane_1 view-dom-id-d58c7f6586e6d226256e157a6320e2c0">
        
  
  
      <div class="view-content">
        <div class="views-row views-row-1 views-row-odd views-row-first views-row-last">
    
  <div class="rotating-large-hero">
      <ul class="responsive-slider">
  
			  		
  				      			<li class="image">
          		              <a href="http://makinghistory.gwu.edu/?utm_source=gwu.edu&amp;utm_medium=homepage+hero&amp;utm_campaign=fortuneglobalforum">


<div class="image">
	<img typeof="foaf:Image" src="images/slide1.jpg" width="940" height="378"  /></div>






</a><!-- end items -->
  				                  </li>
          			  		
  				      			<li class="image">
          		              <a href="">


<div class="image">
	<img typeof="foaf:Image" src="images/slide2.jpg" width="940" height="378"  /></div>






</a><!-- end items -->
  				                  </li>
          			  		
  				      			<li class="image">
          		              <a href="">


<div class="image">
	<img typeof="foaf:Image" src="images/slide3.jpg" width="940" height="378" /></div>






</a><!-- end items -->
  				                  </li>
          			  		
  				      			
          			
			
  		</ul><!-- end responsive-slider -->
			<div class="navigation-wrapper"><div class="navi"></div></div>
 			</div><!-- rotating large hero -->
			  </div>
    </div>
  
  
  
  
  
  
</div>  </div>

  
  </div>
</div>
    		</div>
		</div>
  	
      <div class="panel-panel panel-col-top">
      <div class="inside"><div class="panel-pane pane-gwu-primary-navigation" >
  
      
  
  <div class="pane-content">
    <div id="menu-wrapper"><div id="menu-top"><div class="menu-block-wrapper menu-block-2 menu-name-menu-division-menu parent-mlid-0 menu-level-1">
  <ul class="menu"><li class="first leaf has-children menu-mlid-784"><span title=""><a href="student_add.php">Home</a></span></li>
<li class="leaf has-children menu-mlid-785"><span title=""><a href="student_view.php">Student</a></span></li>
<li class="leaf has-children menu-mlid-786"><span title=""><a href="student_fees.php">Fees</a></span></li>
<li class="leaf has-children menu-mlid-787"><span title=""><a href="exam_view.php">Exam</a></span></li>
<li class="leaf has-children menu-mlid-787"><span title=""><a href="marks_view.php">Marks</a></span></li>
<li class="leaf has-children menu-mlid-1594"><span title=""><a href="gallery_add.php">Gallery</a></span></li>
<li class="leaf has-children menu-mlid-787"><span title=""><a href="facality_req.php">Facality Request</a></span></li>
<li class="leaf has-children menu-mlid-1594"><span title=""><a href="facality_list.php">Facality List</a></span></li>
<li class="last leaf has-children menu-mlid-1598"><span title=""><a href="lib/login.php?act=Logout">LogOut</a></span></li>
</ul></div>
</div></div>  </div>
  </div>
</div>
    </div>
  
      