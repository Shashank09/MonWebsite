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

		if($purpose == 'Contact Me') {

			$badge =  '


				<div class="socialCard clearfix"> 

					<div class="socialNetworkLogo"> 

						<img class="socialImageNetwork" src="'.$badges['facebook']['logo'].'"> 

					</div> 

					<div class="socialProfilePicture" style="background:url('.$badges['facebook']['dp'].') no-repeat center;background-size:100%;"> 

					</div> 

					<div class="socialInfo"> 

						<div class="socialName ss"> 

							Shashank Pradeep

						</div> 

						<textarea class="messageMeSocial lato" placeholder="Message me on Facebook"></textarea> 

					</div> 

				</div>

				<div class="socialCard clearfix"> 

					<div class="socialNetworkLogo" style="padding: 10px;padding-left: 8px;"> 

						<img style="width: 20px;" class="socialImageNetwork" src="'.$badges['twitter']['logo'].'"> 

					</div> 

					<div class="socialProfilePicture" style="background:url('.$badges['twitter']['dp'].') no-repeat center;background-size:100%;"> 

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

			$badge = '' ; 
											
		}



	echo '

						<div class="subContentDivision transparent"> 

							<div class="subContentWrapper clearfix">

								<div class="subPhotoContainer subDivisionLeft"> 

									<div class="subDivisionPhoto" style="background:url('.$backgroundUrl.') no-repeat center;background-size:100% "> 

									</div> 

								</div> 

								<div class="subContentContainer subDivisionRight "> 

									<div class="headlineSubDivision ss"> 

										'.$purpose.'

									</div> 

									<div class="contentSubDivision lato "> 
										
										'.$content.'

									</div> '.$badge.'  

								</div> 

							</div>

						</div> 


	' ; 

?>