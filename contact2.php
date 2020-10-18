<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title><?php include('title.php'); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
		<meta name="author" content="templatemo">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600,300' rel='stylesheet' type='text/css'>
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/templatemo_misc.css">
        <link rel="stylesheet" href="css/templatemo_style.css">

        <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/anylinkmenu.css" />
	<script type="text/javascript" src="js/menucontents.js"></script>
	<script type="text/javascript" src="js/anylinkmenu.js"></script>
	<script type="text/javascript">	anylinkmenu.init("menuanchorclass")</script>
	<SCRIPT LANGUAGE="JavaScript">


<!--

function setColor(el, bg) 
{
  if (el.style) el.style.backgroundColor = bg;
}

function checkInput(form) 
{
  var bgBad = "pink";
  var bgGood = "white";
  var valid = true;
  if (form.UserName.value == "") {
    valid = false;
    setColor(form.UserName, bgBad);
  
  } else {
    setColor(form.UserName, bgGood);
  }
  if (form.name.value == "") {
    valid = false;
    setColor(form.name, bgBad);
  
  } else {
    setColor(form.name, bgGood);
  }
  
 if (form.contact.value == "") {
    valid = false;
    setColor(form.contact, bgBad);
  
  } else {
    setColor(form.contact, bgGood);
  }


  if (form.message.value == "") {
    valid = false;
    setColor(form.message, bgBad);
  
  } else {
    setColor(form.message, bgGood);
  }

  
  if(document.login.UserName.value=="")
	{
		alert("Please Enter a valid E-mail Address");
		document.login.UserName.focus();
		return false;
	}
	//E-mail field should accept valid characters only.
	if (document.login.UserName.value != " ")
	{
		var checkOK="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-@._";
		var checkStr = document.login.UserName.value;
		var allValid = 'true';
		for (i = 0;  i < checkStr.length+1;  i++)
		{

		ch = checkStr.charAt(i);
			for (j = 0;  j < checkOK.length+1;  j++)
			{
				if (ch == checkOK.charAt(j))
				break;
				if (j == checkOK.length)
				{
					allValid = 'false';
					break;
				}
			}
		}
	}
	//E-mail id must have '@'
	if(document.login.UserName.value != "")
	{
		var val=document.login.UserName.value ;
		var pass1=val.indexOf('@',0);
		if(pass1==-1)
		{
			alert("Not a valid E-Mail Address");
			document.login.UserName.value="";
			document.login.UserName.focus();
			return false;
		}
	}
	//E-mail id must have '.'
	if(document.login.UserName.value != "")
	{
		var val=document.login.UserName.value ;
		var pass2=val.indexOf('.',0);
		if(pass2==-1)
		{
			alert("Not a valid E-Mail Address");
			document.login.UserName.value="";
			document.login.UserName.focus();
			return false;
		}
		if((pass2 - pass1)== 1)
		{
			alert("Not a valid E-Mail Address");
			document.login.UserName.value="";
			document.login.UserName.focus();
			return false;
		}
	}
	//E-mail id should have only @,.,_ and - with the letters and digits
	if (!allValid)
	{
		alert("Please enter only letters, digits,and \"@\"  \"_\"  \".\"  \"-\"  characters in the \"EMail\" field.");
		document.login.UserName.focus();
		return false;
	}
  
  
  if (!valid) alert("Please fill out all the fields.");
  return valid;
}
// --> 
</SCRIPT>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        

        <?php include('header.php'); ?>
        <div class="page-top" id="templatemo_contact">
        </div> <!-- /.page-header -->

        <div class="contact-page">
       
            <div class="container">
            <div class="block">

                <div class="row">
                    <div class="col-md-7 col-sm-6 map-wrapper">
                        <h3 class="widget-title">Our Location</h3>
                        <div class="map-holder"><img src="images/map.jpg" border="0"></div><br><br>
                        <div class="contact-infos">
                         <h3 class="widget-title">Our Address</h3> 
                            <ul>
                                <li>230 Ramchand Malukchand Nagar,</li>
                                <li>Near New Jain Temple,</li>
                                <li>Bhigwan Road,A/p Baramati,</li>
								<li>Dist-Pune(M.S),Pin-413102</li>
                                <li>Email: <a href="mailto:support@kikaleassociates.com">support@kikaleassociates.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-6">
                        <h3 class="widget-title">Contact Us</h3>
                        <?php
			echo "<img src='images/tick.png'>";
			echo "<b>We will get back to you soon.<br>";
                        ?>

                        <div class="contact-form">
                            <form name="login" id="login" action="contact1.php" method="post" onSubmit="return checkInput(this)">
                                <p>
                                    <input name="name" type="text" id="name" placeholder="Your Name">
                                </p>
                                <p>
                                    <input name="UserName" type="text" id="UserName" placeholder="Your Email"> 
                                </p>
                                <p>
                                    <input name="contact" type="text" id="contact" placeholder="Contact No"> 
                                </p>
                                <p>
                                    <textarea name="message" id="message" placeholder="Message"></textarea>    
                                </p>
                                <input type="submit" class="mainBtn" id="submit" value="Send Message">
                            </form>
                        </div> <!-- /.contact-form -->
                    </div>
                </div>
               </div> 
            </div>
         
        </div>




      <?php include('footer.php'); ?>
        <script src="js/vendor/jquery-1.11.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        <script src="js/bootstrap.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Map -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="js/vendor/jquery.gmap3.min.js"></script>
        
        
        <!-- templatemo 409 travel -->
<!-- 
Travel Template 
http://www.templatemo.com/preview/templatemo_409_travel 
-->
        
    </body>
</html>