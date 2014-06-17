		<?php 

			class DateChange {

				public $time ;  

				public function __construct($time) {

					$timez = $_GET['tz'] ; 

					if($timez < 0) {

						$newTZ = abs($timez) ; 

					}

					else if($timez > 0) {

						$newTZ = -1 * abs($timez) ; 

					}

					else if(!isset($_GET['tz'])) {

						echo header("location:anon/getTimezone.php") ; 

					}

					$newTime = date('Y-m-d H:i:s',strtotime($time.$newTZ." minutes")) ; 

					$this->time = $newTime ;

				}			

				public function formatDate() {

					$subDate = $this->time ; 

					$dayDate = date('d',strtotime($subDate)) ;

					if($dayDate == 1) {

						$superScript = 'st' ; 

						$formatDateOnly = $dayDate.$superScript ; 

					} 

					else if($dayDate == 2) {

						$superScript = 'nd' ;

						$formatDateOnly = $dayDate.$superScript ; 						

					}

					else if($dayDate == 3) {

						$superScript = 'rd' ;

						$formatDateOnly = $dayDate.$superScript ; 

					}

					else if($dayDate > 3) {

						$superScript = 'th' ;

						$formatDateOnly = $dayDate.$superScript ; 

					}

					$formattedDate = date("l, F ",strtotime($subDate)) ; 

					$year = date(" Y",strtotime($subDate)) ; 

					return $formattedDate.$formatDateOnly.$year ; 

				}

				public function formatTime() {

					$subTime = $this->time ; 

					$formatTime = date("h:iA",strtotime($subTime)) ; 

					$param = $formatTime ;  

					return $formatTime ;  

				}

			}


		?> 