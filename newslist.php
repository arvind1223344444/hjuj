<?php include "include/header.php"?>
    <!-- header END -->
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="bnr-inr bg-pt" style="background-image:url(images/banner/bnr1.jpg);">
            <div class="container">
                <div class="bnr-inr-entry">
                    <h1>News</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index.php">Home</a></li>
							<li>News</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="content-block">
            <div class="section-full content-inner">
                <div class="container">
                    <div class="row">
						
						<div class="col-lg-12 col-md-12">
							<h2 class="m-t0 m-b10 fw6">News and Announcements</h2>
							
							<p class="m-b40">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
							
						
							<style>
							.custom-list {
							counter-reset: my-counter;
							list-style-type: none;
							background-color:#f3f6ff;
							}

							.custom-list li::before {
							counter-increment: my-counter;
							content: counter(my-counter) ".";
							margin-right: 5px;
							}
							</style>
							
							<div class="row">
							
								<div class="col-lg-11 col-md-12 mx-auto">
									<ol class="list-check primary p-3 custom-list border border-dark">
										<li> <a href="newsdetails.php" class="text-dark ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt </a> <img src="images/newimg.gif"/> </li>
										<li> <a href="newsdetails.php"  class="text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt </a> </li>
										<li> <a href="newsdetails.php"  class="text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing  </a> </li>
										<li> <a href="newsdetails.php"  class="text-dark">Amet Sollicitudin Quam Dolor Mollis Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt </a> </li>
										<li> <a href="newsdetails.php"  class="text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt </a> </li>
									</ol>
									
								</div>
								
							</div>
						</div>		
					</div>
				</div>
            </div>
        </div>
        <!-- contact area END -->
    </div>
    <!-- Content END-->
	<!-- Footer -->
   <?php include "include/footer.php" ?>