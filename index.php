
<?php require_once("action.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Career</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


    			

<!--Social Buttons 1-->
   <style>
   *{
	   padding:0px;
	   margin:0px;
   }
   body{
	   padding:0;
	   margin:0 auto;
	   text-align: center;
	   }
	h2{
font-size: 55px;
}
.social {
    position: relative;
    height: 3em;
    width: 13.5em;
    margin: 0 auto;
}

.social li {
    display: block;
    height: 4em;
    line-height: 4em;
    margin: -2.2em;
    position: absolute;
    -webkit-transition: -webkit-transform .7s;
    -moz-transition: -moz-transform .7s;
    -ms-transition: -ms-transform .7s;
    -o-transition: -o-transform .7s;
    transition: transform .7s;
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    transform: rotate(45deg);
    text-align: center;
    width: 4em;

}

.social a {
    color: #fffdf0;
    display: block;
    height: 4em;
    line-height: 6em;
    text-align: center;
    -webkit-transform: rotate(-45deg);
    -moz-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    -o-transform: rotate(-45deg);
    transform: rotate(-45deg);
    width: 4em; 
  
}

.social li:hover {
  -webkit-transform: scale(1.3,1.3) rotate(45deg);
    -moz-transform: scale(1.3,1.3) rotate(45deg);
  -ms-transform: scale(1.3,1.3) rotate(45deg);
    -o-transform: scale(1.3,1.3) rotate(45deg);
  transform: scale(1.3,1.3) rotate(45deg);
}

.facebook {
    background: #155b9d;
    left: 0;
    top: 0%;
}

.twitter {
    background: #1a9ec4;
    bottom: 0;
    left: 25%;
}



.pinterest {
    background: #e11a30;
    left: 50%;
    top: 0%;
}
.linkedin {
    background: #3f7aa3;
    bottom: 0;
    left: 75%;
}
</style>
<!--/Social Buttons1-->

<!--/Social buttona 2
<style>


/*=========================
  Icons
 ================= */

/* footer social icons */
ul.social-network {
	list-style: none;
	display: inline;
	margin-left:0 !important;
	padding: 0;
}
ul.social-network li {
	display: inline;
	margin: 0 5px;
}


/* footer social icons */
.social-network a.icoRss:hover {
	background-color: #F56505;
}
.social-network a.icoFacebook:hover {
	background-color:#3B5998;
}
.social-network a.icoTwitter:hover {
	background-color:#33ccff;
}
.social-network a.icoGoogle:hover {
	background-color:#BD3518;
}
.social-network a.icoVimeo:hover {
	background-color:#0590B8;
}
.social-network a.icoLinkedin:hover {
	background-color:#007bb7;
}
.social-network a.icoRss:hover i, .social-network a.icoFacebook:hover i, .social-network a.icoTwitter:hover i,
.social-network a.icoGoogle:hover i, .social-network a.icoVimeo:hover i, .social-network a.icoLinkedin:hover i {
	color:#fff;
}
a.socialIcon:hover, .socialHoverClass {
	color:#44BCDD;
}

.social-circle li a {
	display:inline-block;
	position:relative;
	margin:0 auto 0 auto;
	-moz-border-radius:50%;
	-webkit-border-radius:50%;
	border-radius:50%;
	text-align:center;
	width: 50px;
	height: 50px;
	font-size:20px;
}
.social-circle li i {
	margin:0;
	line-height:50px;
	text-align: center;
}

.social-circle li a:hover i, .triggeredHover {
	-moz-transform: rotate(360deg);
	-webkit-transform: rotate(360deg);
	-ms--transform: rotate(360deg);
	transform: rotate(360deg);
	-webkit-transition: all 0.2s;
	-moz-transition: all 0.2s;
	-o-transition: all 0.2s;
	-ms-transition: all 0.2s;
	transition: all 0.2s;
}
.social-circle i {
	color: #fff;
	-webkit-transition: all 0.8s;
	-moz-transition: all 0.8s;
	-o-transition: all 0.8s;
	-ms-transition: all 0.8s;
	transition: all 0.8s;
}

a {
 background-color: #D3D3D3;   
}
</style>
/Social buttona 2-->
   
  </head>
  <body>
    <?php insertDataAction(); ?>
   <form class="form-horizontal" action="" method="post">
  <fieldset>
    <legend>Liberent Career</legend>
	<div class="form-group">
      <label for="Text" class="col-lg-2 col-md-2 col-sm-2 col-xs-2  control-label">Name</label>
      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-10">
        <input type="text" class="form-control" id="name" name="fullname" placeholder="Full Name">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 control-label" >Email</label>
      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-10">
        <input type="text" class="form-control" id="inputEmail" name="email" placeholder="Email">
      </div>
    </div>
    <div class="form-group">
      <label for="inputMobile" class="col-lg-2 col-md-2 col-sm-2 col-xs-2  control-label">Mobile</label>
      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-10">
        <input type="text" class="form-control" name="mobile" id="inputMobile" placeholder="Mobile Number">
        
      </div>
    </div>
	
    <div class="form-group">
      <label for="textArea" class="col-lg-2 col-md-2 col-sm-2 col-xs-12  control-label">Why you want to join Liberent?</label>
      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <textarea class="form-control" rows="3" name="textarea" id="textArea"></textarea>
        
      </div> 
    </div>	
<div class="form-group">
      <label for="textArea" class="col-lg-2 col-md-2 col-sm-2 col-xs-12  control-label">Address</label>
      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <textarea class="form-control" rows="3" name="address" id="textArea"></textarea>
        
      </div>
    </div>	
<div class="form-group">
      <label for="inputFile" class="col-lg-2 col-md-2 col-sm-2 col-xs-2  control-label">Resume</label>
      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-10">
        <input type="file" class="form-control" name="inputfile" id="inputFile" placeholder="">
        
      </div>
    </div>	
    
       
   
   
    <div class="form-group">
      <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-3">
        <button type="reset" name="canBtn" class="btn btn-default">Cancel</button>
        <button type="submit" name="subBtn" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>
           <div class="container">
	<div class="row">
    <div class="col-md-12">
		<h4 class="text-center">Follow Us for your better Future !!</h4>
                            <div class="col-md-6 .col-md-offset-3">
                                 <ul class="social">
                                  <li class="facebook"><a href=""><i class="fa fa-facebook fa-3x"></i></a></li>
                                  <li class="twitter"><a href=""><i class="fa fa-twitter fa-3x"></i></a></li>
                                  <li class="pinterest"><a href=""><i class="fa fa-pinterest fa-3x"></i></a></li>
                                  <li class="linkedin"><a href=""><i class="fa fa-linkedin fa-3x"></i></a></li>
                                </ul>
                          </div>
    </div>
    </div>
</div>
<!--<div class="container">
<div class="row">
<h4 class="text-center"> Follow Us for Your Better Future !!</h4>
</div>
<div class="row">

<div class="col-md-12 col-lg-offset-4">
                    <ul class="social-network social-circle">
                        <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>				
				</div>
				</div></div>-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>