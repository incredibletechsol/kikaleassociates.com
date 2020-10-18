<div class="site-header">
    <div class="container">
        <div class="main-header">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-10">
                   <?php include('logo.php'); ?>
                </div> <!-- /.col-md-4 -->
                <div class="col-md-8 col-sm-6 col-xs-2">
                    <div class="main-menu">
                       <ul class="visible-lg visible-md">
												
							<?php
							$page = basename($_SERVER['PHP_SELF']);
							
							if($page == "index.php")
							{
							echo "<li class='active'><a href='index.php'>Home</a></li>";
							echo "<li><a href='aboutus.php' class='menuanchorclass' rel='anylinkmenu2'>About Us</a></li>";
							echo "<li><a href='services.php'>Services</a></li>";
							echo "<li><a href='clients.php'>Clients</a></li>";
							echo "<li><a href='projects.php'>Projects</a></li>";
							echo "<li><a href='contactus.php'>Contact Us</a></li>";
							}   
							else  if($page == "aboutus.php")
							{
							echo "<li><a href='index.php'>Home</a></li>";
							echo "<li  class='active'><a href='aboutus.php' class='menuanchorclass' rel='anylinkmenu2'>About Us</a></li>";
							echo "<li><a href='services.php'>Services</a></li>";
							echo "<li><a href='clients.php'>Clients</a></li>";
							echo "<li><a href='projects.php'>Projects</a></li>";
							echo "<li><a href='contactus.php'>Contact Us</a></li>";
							} 
							else  if($page == "team.php")
							{
							echo "<li><a href='index.php'>Home</a></li>";
							echo "<li  class='active'><a href='aboutus.php' class='menuanchorclass' rel='anylinkmenu2'>About Us</a></li>";
							echo "<li><a href='services.php'>Services</a></li>";
							echo "<li><a href='clients.php'>Clients</a></li>";
							echo "<li><a href='projects.php'>Projects</a></li>";
							echo "<li><a href='contactus.php'>Contact Us</a></li>";
							} 
							else  if($page == "gallery.php")
							{
							echo "<li><a href='index.php'>Home</a></li>";
							echo "<li  class='active'><a href='aboutus.php' class='menuanchorclass' rel='anylinkmenu2'>About Us</a></li>";
							echo "<li><a href='services.php'>Services</a></li>";
							echo "<li><a href='clients.php'>Clients</a></li>";
							echo "<li><a href='projects.php'>Projects</a></li>";
							echo "<li><a href='contactus.php'>Contact Us</a></li>";
							} 
							else  if($page == "newsevents.php")
							{
							echo "<li><a href='index.php'>Home</a></li>";
							echo "<li  class='active'><a href='aboutus.php' class='menuanchorclass' rel='anylinkmenu2'>About Us</a></li>";
							echo "<li><a href='services.php'>Services</a></li>";
							echo "<li><a href='clients.php'>Clients</a></li>";
							echo "<li><a href='projects.php'>Projects</a></li>";
							echo "<li><a href='contactus.php'>Contact Us</a></li>";
							}
							else  if($page == "achievements.php")
							{
							echo "<li><a href='index.php'>Home</a></li>";
							echo "<li  class='active'><a href='aboutus.php' class='menuanchorclass' rel='anylinkmenu2'>About Us</a></li>";
							echo "<li><a href='services.php'>Services</a></li>";
							echo "<li><a href='clients.php'>Clients</a></li>";
							echo "<li><a href='projects.php'>Projects</a></li>";
							echo "<li><a href='contactus.php'>Contact Us</a></li>";
							}
							else  if($page == "services.php")
							{
							echo "<li><a href='index.php'>Home</a></li>";
							echo "<li><a href='aboutus.php' class='menuanchorclass' rel='anylinkmenu2'>About Us</a></li>";
							echo "<li class='active'><a href='services.php'>Services</a></li>";
							echo "<li><a href='clients.php'>Clients</a></li>";
							echo "<li><a href='projects.php'>Projects</a></li>";
							echo "<li><a href='contactus.php'>Contact Us</a></li>";
							}   
							else  if($page == "clients.php")
							{
							echo "<li><a href='index.php'>Home</a></li>";
							echo "<li><a href='aboutus.php' class='menuanchorclass' rel='anylinkmenu2'>About Us</a></li>";
							echo "<li><a href='services.php'>Services</a></li>";
							echo "<li  class='active'><a href='clients.php'>Clients</a></li>";
							echo "<li><a href='projects.php'>Projects</a></li>";
							echo "<li><a href='contactus.php'>Contact Us</a></li>";
							} 
							else  if($page == "projects.php")
							{
							echo "<li><a href='index.php'>Home</a></li>";
							echo "<li><a href='aboutus.php' class='menuanchorclass' rel='anylinkmenu2'>About Us</a></li>";
							echo "<li><a href='services.php'>Services</a></li>";
							echo "<li><a href='clients.php'>Clients</a></li>";
							echo "<li class='active'><a href='projects.php'>Projects</a></li>";
							echo "<li><a href='contactus.php'>Contact Us</a></li>";
							}   
							else  if($page == "contactus.php")
							{
							echo "<li><a href='index.php'>Home</a></li>";
							echo "<li><a href='aboutus.php' class='menuanchorclass' rel='anylinkmenu2'>About Us</a></li>";
							echo "<li><a href='services.php'>Services</a></li>";
							echo "<li><a href='clients.php'>Clients</a></li>";
							echo "<li><a href='projects.php'>Projects</a></li>";
							echo "<li class='active'><a href='contactus.php'>Contact Us</a></li>";
							}   
							else  if($page == "contact2.php")
							{
							echo "<li><a href='index.php'>Home</a></li>";
							echo "<li><a href='aboutus.php' class='menuanchorclass' rel='anylinkmenu2'>About Us</a></li>";
							echo "<li><a href='services.php'>Services</a></li>";
							echo "<li><a href='clients.php'>Clients</a></li>";
							echo "<li><a href='projects.php'>Projects</a></li>";
							echo "<li class='active'><a href='contactus.php'>Contact Us</a></li>";
							}  
							?>   
							</ul>
                        <a href="#" class="toggle-menu visible-sm visible-xs">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div> <!-- /.main-menu -->
                </div> <!-- /.col-md-8 -->
            </div> <!-- /.row -->
        </div> <!-- /.main-header -->
        <div class="row">
            <div class="col-md-12 visible-sm visible-xs">
                <div class="menu-responsive">
                   <ul>
					<?php
						$page = basename($_SERVER['PHP_SELF']);
						
						if($page == "index.php")
						{
						echo "<li class='active'><a href='index.php'>Home</a></li>";
						echo "<li><a href='aboutus.php' class='menuanchorclass' rel='anylinkmenu2'>About Us</a></li>";
						echo "<li><a href='services.php'>Services</a></li>";
						echo "<li><a href='clients.php'>Clients</a></li>";
						echo "<li><a href='projects.php'>Projects</a></li>";
						echo "<li><a href='contactus.php'>Contact Us</a></li>";
						}   
						else  if($page == "aboutus.php")
						{
						echo "<li><a href='index.php'>Home</a></li>";
						echo "<li  class='active'><a href='aboutus.php' class='menuanchorclass' rel='anylinkmenu2'>About Us</a></li>";
						echo "<li><a href='services.php'>Services</a></li>";
						echo "<li><a href='clients.php'>Clients</a></li>";
						echo "<li><a href='projects.php'>Projects</a></li>";
						echo "<li><a href='contactus.php'>Contact Us</a></li>";
						} 
						else  if($page == "team.php")
						{
						echo "<li><a href='index.php'>Home</a></li>";
						echo "<li  class='active'><a href='aboutus.php' class='menuanchorclass' rel='anylinkmenu2'>About Us</a></li>";
						echo "<li><a href='services.php'>Services</a></li>";
						echo "<li><a href='clients.php'>Clients</a></li>";
						echo "<li><a href='projects.php'>Projects</a></li>";
						echo "<li><a href='contactus.php'>Contact Us</a></li>";
						} 
						else  if($page == "gallery.php")
						{
						echo "<li><a href='index.php'>Home</a></li>";
						echo "<li  class='active'><a href='aboutus.php' class='menuanchorclass' rel='anylinkmenu2'>About Us</a></li>";
						echo "<li><a href='services.php'>Services</a></li>";
						echo "<li><a href='clients.php'>Clients</a></li>";
						echo "<li><a href='projects.php'>Projects</a></li>";
						echo "<li><a href='contactus.php'>Contact Us</a></li>";
						} 
						else  if($page == "newsevents.php")
						{
						echo "<li><a href='index.php'>Home</a></li>";
						echo "<li  class='active'><a href='aboutus.php' class='menuanchorclass' rel='anylinkmenu2'>About Us</a></li>";
						echo "<li><a href='services.php'>Services</a></li>";
						echo "<li><a href='clients.php'>Clients</a></li>";
						echo "<li><a href='projects.php'>Projects</a></li>";
						echo "<li><a href='contactus.php'>Contact Us</a></li>";
						} 
						else  if($page == "achievements.php")
						{
						echo "<li><a href='index.php'>Home</a></li>";
						echo "<li  class='active'><a href='aboutus.php' class='menuanchorclass' rel='anylinkmenu2'>About Us</a></li>";
						echo "<li><a href='services.php'>Services</a></li>";
						echo "<li><a href='clients.php'>Clients</a></li>";
						echo "<li><a href='projects.php'>Projects</a></li>";
						echo "<li><a href='contactus.php'>Contact Us</a></li>";
						}
						else  if($page == "services.php")
						{
						echo "<li><a href='index.php'>Home</a></li>";
						echo "<li><a href='aboutus.php' class='menuanchorclass' rel='anylinkmenu2'>About Us</a></li>";
						echo "<li class='active'><a href='services.php'>Services</a></li>";
						echo "<li><a href='clients.php'>Clients</a></li>";
						echo "<li><a href='projects.php'>Projects</a></li>";
						echo "<li><a href='contactus.php'>Contact Us</a></li>";
						}   
						else  if($page == "clients.php")
						{
						echo "<li><a href='index.php'>Home</a></li>";
						echo "<li><a href='aboutus.php' class='menuanchorclass' rel='anylinkmenu2'>About Us</a></li>";
						echo "<li><a href='services.php'>Services</a></li>";
						echo "<li  class='active'><a href='clients.php'>Clients</a></li>";
						echo "<li><a href='projects.php'>Projects</a></li>";
						echo "<li><a href='contactus.php'>Contact Us</a></li>";
						} 
						else  if($page == "projects.php")
						{
						echo "<li><a href='index.php'>Home</a></li>";
						echo "<li><a href='aboutus.php' class='menuanchorclass' rel='anylinkmenu2'>About Us</a></li>";
						echo "<li><a href='services.php'>Services</a></li>";
						echo "<li><a href='clients.php'>Clients</a></li>";
						echo "<li class='active'><a href='projects.php'>Projects</a></li>";
						echo "<li><a href='contactus.php'>Contact Us</a></li>";
						}   
						else  if($page == "contactus.php")
						{
						echo "<li><a href='index.php'>Home</a></li>";
						echo "<li><a href='aboutus.php' class='menuanchorclass' rel='anylinkmenu2'>About Us</a></li>";
						echo "<li><a href='services.php'>Services</a></li>";
						echo "<li><a href='clients.php'>Clients</a></li>";
						echo "<li><a href='projects.php'>Projects</a></li>";
						echo "<li class='active'><a href='contactus.php'>Contact Us</a></li>";
						}   
						?>
					</ul>
                </div> <!-- /.menu-responsive -->
            </div> <!-- /.col-md-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /.site-header -->