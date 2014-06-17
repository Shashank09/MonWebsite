<!DOCTYPE HTML> 

	<html lang="en"> 

		<head> 

			<?php include 'php/gu.php' ?> 
			
			<link rel="stylesheet" type="text/css" href="css/index.css">

			<link rel="stylesheet" type="text/css" href="css/font-awesome.css">

			<link rel="stylesheet" type="text/css" href="css/BasicStyling.css">

			<link rel="stylesheet" type="text/css" href="css/reset.css">

  			<script src="//code.jquery.com/jquery-1.10.2.js"></script>

  			<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

			<script type="text/javascript" src="js/createHeight.js"></script>
            
			<script type="text/javascript" src="js/gu.js"></script>

			<script type="text/javascript" src="js/basicJs.js"></script>

			<script type="text/javascript" src="js/indexOpacity.js"></script>

			<script type="text/javascript" src="js/footer.js"></script>

			<script type="text/javascript" src="js/scroll.js"></script>

			<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>

			<title> Spkp | My footprint on the Internet </title>

		</head> 

		<body> 
		
			<div class="container" id="container"> 

				<div class="wrapper clearfix" id="wrapper"> 

					<div class="footer" id="footer"> 

						<DIV CLASS="menus mh">

							<li class="menuItem" id="menuItem"> 

								Home

							</li> 

							<li class="menuItem notHome" data-toOpen="aboutMe"> 

								About								

							</li>

							<li class="menuItem notHome" data-toOpen="contactMe"> 

								Contact Me								

							</li>
                            
							<!--<li class="menuItem notHome" data-toOpen="blog"> 

								Blog							

							</li>-->

						</DIV>

					</div>

					<div class="backdrop headline divisions"> 
                        
                        <div class="headingContainer">

                            <p class="myName">Shashank</p><p class="myName">Pradeep</p> 

                            <p class="subHeadingIndex ic">

                                <span style="color: #54C4B8">15</span>

                               and

                                <span style="color: #FB5262">coding</span> 

                            </p>
                            
                        </div>

					</div>

					<div class="aboutMe subPage divisions"> 

						<div class="content">

							<div class="contentWrapper" id="contentWrapper">

								<h1 class="mh"> About Me </h1> 

								<div class="body" id="paraContainer"> 

									<div class="scrollable clearfix">

										<p class="section">
                                            
                                           <?php 

                                           	echo replaceChars('Swift is an innovative new programming language for Cocoa and Cocoa Touch. Writing code is interactive and fun, the syntax is concise yet expressive, and apps run lightning-fast. Swift is ready for your next iOS and OS X project — or for addition into your current app — because Swift code works side-by-side with Objective-C.') ; 

                                           	?>  

										</p>
                                        
                                        <div class="divider"></div>
                                        
                                        <img src="https://s1.yimg.com/bt/api/res/1.2/NankvH6BuxQJY.U7RDCyPg--/YXBwaWQ9eW5ld3M7cT04NTt3PTYzMA--/http://media.zenfs.com/en-GB/blogs/the-rio-report-uk/terry-john-pundit92984847.jpg" class="divisionImage pullLeft">                                        
										<p class="section">
                                            
                                           <?php 

                                           	echo replaceChars('Swift is @n innovative new programming language for Cocoa and Cocoa Touch. Writing code is interactive and fun, the syntax is concise yet expressive, and apps run lightning-fast. Swift is ready for your next iOS and OS X project — or for addition into your current app — because Swift code works side-by-side with Objective-C.') ; 

                                           	?> 

										</p>
                                        
                                        <div class="divider"></div>
                                        
                                       <img src="https://s1.yimg.com/bt/api/res/1.2/NankvH6BuxQJY.U7RDCyPg--/YXBwaWQ9eW5ld3M7cT04NTt3PTYzMA--/http://media.zenfs.com/en-GB/blogs/the-rio-report-uk/terry-john-pundit92984847.jpg" class="divisionImage pullRight">                                        
										<p class="section">
                                            
                                           <?php 

                                           	echo replaceChars('Swift is an innovative new programming language for Cocoa and Cocoa Touch. Writing code is interactive and fun, the syntax is concise yet expressive, and apps run lightning-fast. Swift is ready for your next iOS and OS X project — or for addition into your current app — because Swift code works side-by-side with Objective-C.') ; 

                                           	?>

										</p>
                                        
                                        <div class="divider"></div>

									</div> 

									<div class="scroller"></div>

								</div>

							</div>

						</div> 

					</div>

					<div class="contactMe subPage divisions" id="contactMe"> 

						<div class="content" id="contactMeContent">

							<div class="contentWrapper" id="contentWrapper">

								<h1 class="mh"> Contact Me </h1> 

								<div class="body" id="paraContainer"> 

									<div class="scrollable">

										<p class="section">
											
											<?php 


												echo replaceChars("You can't just sit in front of a screen. Humans socialize. Feel free to contact me.") ; 

											?>

										</p>

										<div class="formContainer section clearfix">

											<form action="php/mail.php" method="post" class="mailForm"> 

												<li class="inputContainer">
                                            
                                                    <label for="name" class="fa-user label nostroke"></label>
                                                    
                                                    <input type="text" name="name" class="nameInput smallInput msInput" placeholder="Name">
                                                    
                                                </li> 
                                                
												<li class="inputContainer">
                                            
                                                    <label for="name" class="label nostroke">@</label>
                                                    
                                                    <input type="email" name="email" class="smallInput emailInput msInput" placeholder="E-Mail Address"> 
                                                    
                                                </li> 

												<li class="inputContainer">
                                            
                                                    <label for="emailContent" class="label nostroke fa fa-file-text"></label>
                                                    
		                                            <textarea rows=5 name="emailContent" class="largeInput emailInput" placeholder="eMail"></textarea>
                                                    
                                                </li> 						

												<button class="button mailButton fa-send">

													<span>Send</span>

												</button> 

											</form>

                                            <div class="socialLinks"> 

                                                <div class="button fa-facebook socialButton tBG1"> 

                                                    <span>Facebook</span> 

                                                </div>

                                                <div class="button fa-twitter socialButton tBG1"> 

                                                    <span>Twitter</span> 

                                                </div>

                                            </div>
                                            
										</div>

									</div> 

									<div class="scroller"></div>

								</div>

							</div>

						</div> 

					</div>

				</div>

			</div>



		</body> 

	</html> 