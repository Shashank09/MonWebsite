<?php 
		$badges = array('facebook' => 

							array(

								'logo' => '/portfolio/icons/facebook.png',

								'dp' => 'https://fbcdn-sphotos-f-a.akamaihd.net/hphotos-ak-frc3/t1.0-9/393191_342551462428700_1970324903_n.jpg'

							) , 

						'twitter' => 

							array(

								'logo' => 'https://g.twimg.com/Twitter_logo_white.png' , 

								'dp' => 'https://pbs.twimg.com/profile_images/441266100957749248/IZX-Xoee.jpeg'

							)

						) ; 
		
		$netWorks = array('facebook','twitter');

		for( $i = 0 ; $i < count($badges); $i++) {

			$netWork = $netWorks[$i] ; 


			if($netWork == 'twitter') {

				echo '

							<div class="socialCard clearfix"> 

								<div class="socialNetworkLogo" style="padding: 10px;padding-left: 8px;"> 

									<img style="width:20px" class="socialImageNetwork" src="'.$badges[$netWork]['logo'].'"> 

								</div> 

								<div class="socialProfilePicture" style="background:url('.$badges[$netWork]['dp'].') no-repeat center;background-size:100%;"> 

								</div> 

								<div class="socialInfo"> 

									<div class="socialName ss"> 

										Shashank Pradeep

									</div> 

									<textarea class="messageMeSocial lato" placeholder="Tweet to @shashankp3"></textarea> 
								
								</div> 

							</div>


				' ; 

			} 

			else {

				echo '

						<div class="socialCard clearfix"> 

							<div class="socialNetworkLogo"> 

								<img class="socialImageNetwork" src="'.$badges[$netWork]['logo'].'"> 

							</div> 

							<div class="socialProfilePicture" style="background:url('.$badges[$netWork]['dp'].') no-repeat center;background-size:100%;"> 

							</div> 

							<div class="socialInfo"> 

								<div class="socialName ss"> 

									Shashank Pradeep

								</div> 

								<textarea class="messageMeSocial lato" placeholder="Message me on facebook"></textarea> 
							
							</div> 

						</div>


				' ; 

			}

		} 

?> 