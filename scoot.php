<!DOCTYPE html>
<!--[if IE 8]><html lang="en" class="no-js ie ie8"><![endif]-->
<!--[if IE 9]><html lang="en" class="no-js ie ie9"><![endif]-->
<!--[if gt IE 9]><!-->
<html class="js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths desktop landscape linux 64bit firefox firefox58 firefox58_0 gecko en-us flash" style="" lang="en"><!--<![endif]--><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1"><![endif]-->
    <title>Print</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="robots" content="index, follow">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui, user-scalable=no">
    <script type="text/javascript" src="Print_files/ruxitagentjs_ICA2SVfqr_10137171222133618.js" data-dtconfig="rid=RID_886716927|rpid=-2011150880|domain=flyscoot.com|reportUrl=/rb_1f461849-ddc6-4d95-8b83-156f7444228a|featureHash=ICA2SVfqr|lastModification=1519840006328|dtVersion=10137171222133618|tp=500,50,0,1"></script><link rel="icon" href="https://makeabooking.flyscoot.com/assets/favicon.ico" type="image/x-icon" sizes="16x16">
    <link href="Print_files/libs.css" rel="stylesheet">

    <link href="Print_files/style.css" rel="stylesheet">

    <!--[if lte IE 9]><link href="/css/ie.css?v=e9nse8eBxBc6X9HyJCuqp2IEt6zTZ0AHtzqqPCZlv-U1" rel="stylesheet"/>
<![endif]-->
    <link href="Print_files/print.css" rel="stylesheet" type="text/css" media="print">
    <script src="Print_files/modernizr.js"></script>

<script type="text/javascript" src="Print_files/tgrairwaysdstl.js" defer="defer"></script><style type="text/css">#d__fFH{position:absolute;top:-5000px;left:-5000px}#d__fF{font-family:serif;font-size:200px;visibility:hidden}#cfcxdbattebszfeeswyw{display:none!important}</style></head>
<body <?php if (!$_POST["nobackground"]) { ?> style="background: url('fake1.jpg') repeat" <?php } ?>>
    <div class="main-container">
        <main>
            <div class="main-content">

                <header class="print-header">
                    <div class="print__logo">
                        <img src="Print_files/scoot-logo.svg" alt="Scoot">
                    </div>
                    <h1 class="heading-1">Your Itinerary Details</h1>
                </header>

<?php if ( $_POST["surname4"] ) {
				$n = 4;
			} else if ( $_POST["surname3"] ) {
				$n = 3;
			} else if ( $_POST["surname2"] ) {
				$n = 2;
			} else {
				$n = 1;
			}
			
			$currency = $_POST["currency"];
			
			$departurefare = $n*( $_POST["totalprice"] - $_POST["fees"] );
			$fees = $n*$_POST["fees"];
			
			$totalamount = $n*$_POST["totalprice"];
			
			
			$bookingdate = date_create($_POST["bookingdate"]);
			$depdate = date_create($_POST["depdate"].' '.$_POST["dephour"].':'.$_POST["depmin"]);
			$arrdate = date_create($_POST["arrdate"].' '.$_POST["arrhour"].':'.$_POST["arrmin"]);
			$flydur = date_create($_POST["flyhour"].':'.$_POST["flymin"]);
			
			
			?>

<section class="panel general-info">
    <!-- Booking ref and buttons -->
    <div class="row">
        <div class="col-sm-6">
            <ul class="booking-ref">
                <li>
					<?php if ( $_POST["nodisplaybooking"] ){ ?>
						<div class="text-3">Scoot Flight number</div>
	                    <div class="text-1"><?php echo $_POST["flynumber"]; ?></div>
					<?php } else { ?>
	                    <div class="text-3">Scoot Booking ref</div>
	                    <div class="text-1"><?php echo $_POST["bookingnumber"]; ?></div>
	                <?php } ?>
                </li>
            </ul>
        </div>
        <div class="col-sm-6">
    <div class="toolbar">
        <div class="print-scoot-thru">
            <div class="media">
                <div class="media-left">
                    <img src="Print_files/scoot-thru.svg" alt="Scoot-Thru" class="media-object">
                </div>
                <div class="media-body">
                    <div class="title">Scoot</div>
                    <div class="des text-4"><?php echo $_POST["depairportcode"]; ?>-<?php echo $_POST["arrairportcode"]; ?></div>
                </div>
            </div>
        </div>
    </div>

        </div>
    </div>
    <!-- Thank you -->
    <?php if (!$_POST["nobackground"]) { ?><img src="fake1.jpg"><?php } ?>
    
    <div class="row">
            <div class="col-sm-12">
                <p><strong>We are processing your payment. Your booking 
is confirmed only when a booking confirmation email containing your 
itinerary is sent to you.</strong> If you do not receive it after 24 
hours, please contact our. Before contacting us, please check your 
junk/spam folder as some emails from The Scoot Team may end up there.</p>
            </div>
    </div>
    <!-- Thru SSR Notice -->
        <div class="row">
            <div class="col-sm-12">
                <p>
                    Enjoy seamless flight connections now! You’ll 
receive your onward boarding pass(es) when you check-in at your first 
departure airport. Your checked bag(s) will be tagged to your final 
destination.
                </p>

            </div>
        </div>
    <!-- Booking date to paid with credit card -->
    <div class="row book-date">
        <div class="col-xs-6 col-sm-4">
            <ul>
                <li class="text-3">Booking Date</li>
                <li class="text-1"><?php echo date_format($bookingdate, "d F Y");?></li>
            </ul>
        </div>
        <div class="col-xs-6 col-sm-4">
            <ul>
                <li class="text-3">Booking Status</li>
                <li class="text-1">Confirmed</li>
            </ul>
        </div>
            <div class="col-sm-4 col-xs-12">
                <ul>
                    <li class="text-3">
                        Paid with PayPal
                    </li>
                    <li class="text-1"><?php echo $_POST["currency"]; ?> <span><?php echo "$totalamount"; ?></span></li>
                </ul>
            </div>
    </div>
</section>

                 <!-- Depart -->
<section class="panel panel-default">
    <div class="panel-body">


<div class="flight-info">
        <div class="media journey heading">
            <div class="media-left">
                <img src="Print_files/departing-flight.svg" alt="Depart: <?php echo $_POST["depairportname"]; ?> to <?php echo $_POST["arrairportname"]; ?>" class="media-object">
            </div>
            <div class="media-body">
                    <div class="flight-package flight-package__fly">Fly</div>
                <div class="text-4">Depart: <?php echo $_POST["depairportname"]; ?> to <?php echo $_POST["arrairportname"]; ?></div>
            </div>
        </div>
            <div class="time-information text-3"><?php echo $_POST["flynumber"]; ?> - <?php echo date_format($flydur, "G");?>h <?php echo date_format($flydur, "i");?>min</div>
                    <table class="info">
                        <tbody><tr>
                            <td>
                                <ul>
                                    <li class="flight-time"><?php echo $_POST["depairportcode"]; ?> <?php echo date_format($depdate, "H:i");?></li>
                                    <li class="text-3"><?php echo $_POST["depairportname"]; ?></li>
                                    <li><?php echo date_format($depdate, "M d (D) Y");?>, <?php echo $_POST["depairportfullname"]; ?></li>
                                </ul>
                            </td>
                            <td>
                                <span class="time">
                                    <span class="ico-plane transit-plane"></span>
                                    <span class="flight-number"><strong><?php echo $_POST["flynumber"]; ?>&nbsp;</strong>Scoot(<?php echo $_POST["plane"]; ?>)</span>
                                    <span class="flight-duration"><?php echo date_format($flydur, "G");?>h <?php echo date_format($flydur, "i");?>min</span>
                                </span>
                            </td>
                            <td>
                                <ul>
                                    <li class="flight-time"><?php echo $_POST["arrairportcode"]; ?> <?php echo date_format($arrdate, "H:i");?></li>
                                    <li class="text-3"><?php echo $_POST["arrairportname"]; ?></li>
                                    <li class="date"><?php echo date_format($arrdate, "M d (D) Y");?>, <?php echo $_POST["arrairportfullname"]; ?></li>
                                    
                                </ul>
                            </td>
                        </tr>
                    </tbody></table>
                
</div>



    </div>
</section>
                <!-- Booking Hold details -->
                    <!-- Used in singpost display? -->
                    <!-- Passengers on this flight -->

<section class="panel panel-default passengers-detail-block">
    <div class="panel-body">
            <h2 class="heading-2">Passengers on this flight</h2>
                <table class="table transparent-table">
                    <tbody><tr>
                        <th><?php echo $_POST["depairportcode"]; ?><span class="ico-plane"></span><?php echo $_POST["arrairportcode"]; ?></th>
                        <th>
                            <img src="Print_files/seats.svg" alt="Seats" class="icon">
                            <div class="icon-text">Seats</div>
                        </th>
                        <th>
                            <img src="Print_files/baggage.svg" alt="Baggage" class="icon">
                            <div class="icon-text">Baggage</div>
                        </th>
                        <th>
                            <img src="Print_files/insurance.svg" alt="insuranceance" class="icon">
                            <div class="icon-text">Insurance</div>
                        </th>
                        <th>
                            <img src="Print_files/meals.svg" alt="Meals" class="icon">
                            <div class="icon-text">Meals</div>
                        </th>
                        <th>
                            <img src="Print_files/wifi.svg" alt="Baggage" class="icon">
                            <div class="icon-text">WiFi</div>
                        </th>
                        <th>
                            <img src="Print_files/scoot-tv.svg" alt="ScooTV" class="icon">
                            <div class="icon-text">ScooTV</div>
                        </th>
                        <th>
                            <img src="Print_files/snooze-kit.svg" alt="Snooze kit" class="icon">
                            <div class="icon-text">Snooze Kit</div>
                        </th>
                    </tr>
						<tr> <td><?php echo $_POST["givennames1"]; ?> <?php echo $_POST["surname1"]; ?></td> 
						<!--Seats--> <td> -                            
						</td> <!--Baggage--> <td> -                            
						</td> <!--Insurance--> <td> -                            
						</td> <!--Meals--> <td> -                            
						</td> <!--Wifi--> <td> -                            
						</td> <!--ScooTv--> <td> -                            
						</td> <!--Snooze kit--> <td> -                            
						</td> </tr>
						<?php if ($_POST["givennames2"]) {?>
							<tr> <td><?php echo $_POST["givennames2"]; ?> <?php echo $_POST["surname2"]; ?></td> 
							<!--Seats--> <td> -                            
							</td> <!--Baggage--> <td> -                            
							</td> <!--Insurance--> <td> -                            
							</td> <!--Meals--> <td> -                            
							</td> <!--Wifi--> <td> -                            
							</td> <!--ScooTv--> <td> -                            
							</td> <!--Snooze kit--> <td> -                            
							</td> </tr>
							
						<?php } ?>	
						<?php if ($_POST["givennames3"]) {?>
							<tr> <td><?php echo $_POST["givennames3"]; ?> <?php echo $_POST["surname3"]; ?></td> 
							<!--Seats--> <td> -                            
							</td> <!--Baggage--> <td> -                            
							</td> <!--Insurance--> <td> -                            
							</td> <!--Meals--> <td> -                            
							</td> <!--Wifi--> <td> -                            
							</td> <!--ScooTv--> <td> -                            
							</td> <!--Snooze kit--> <td> -                            
							</td> </tr>
							
						<?php } ?>	
						<?php if ($_POST["givennames4"]) {?>
							<tr> <td><?php echo $_POST["givennames4"]; ?> <?php echo $_POST["surname4"]; ?></td> 
							<!--Seats--> <td> -                            
							</td> <!--Baggage--> <td> -                            
							</td> <!--Insurance--> <td> -                            
							</td> <!--Meals--> <td> -                            
							</td> <!--Wifi--> <td> -                            
							</td> <!--ScooTv--> <td> -                            
							</td> <!--Snooze kit--> <td> -                            
							</td> </tr>
							
						<?php } ?>	
						
                        
                </tbody></table>
                <div class="space"></div>
    </div>
</section>




<section class="panel panel-default scoot-proctect-block">
    <div class="panel-body">
        <div class="media">
            <div class="media-left">
                <figure>
                    <img src="Print_files/SCOOT_VISA-40.png" alt="eVisa" class="md-object">
                </figure>
            </div>
            <div class="media-body">
                <div class="row block-header">
                    <div class="col-sm-6">
                        <h2 class="heading-2">
      Electronic Visa
    </h2>
                    </div>
                </div>
                <div class="row block-content">
                    <div class="col-1 col-xs-12">
Need a visa for your trip? It’s not too late, click <a target="_blank" class="btn btn-default" href="https://evisa.flyscoot.com/?culture=en-SG&amp;utm_source=flyscoot&amp;utm_medium=website&amp;utm_campaign=mmb&amp;utm_term=en" title="addEvisa">Add Now</a><a href="https://makeabooking.flyscoot.com/Manage/vvdtcatyuewzxe.html" style="display: none;" rel="file" id="cfcxdbattebszfeeswyw">dqedwedtfdvfxfcq</a> to get your electronic visa.                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
                    <!-- Successful Insurance -->
                    <!-- Fare details -->
<section class="panel panel-default step-fare-details">
    <div class="panel-body">
        <h2 class="heading-2">Payment Details</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="title">Fare</div>
                    <div class="media">
                        <div class="media-body">Departure Fare</div>
                        <div class="media-right"><?php echo "$currency";?><?php echo "$departurefare";?></div>
                    </div>
                    <div class="media">
                        <div class="media-body">Fees And Taxes</div>
                        <div class="media-right"><?php echo "$currency";?><?php echo "$fees";?></div>
                    </div>

            </div>

        </div>


<div class="payment-pricing">
    <div class="row">
            <div class="col-md-6">
                <div class="media">
                    <div class="media-body">Mode of payment:</div>
                    <div class="media-right">Scoot Paypal</div>
                </div>
                <div class="media">
                    <div class="media-body">Payment Date:</div>
                    <div class="media-right"><?php echo date_format($bookingdate, "d M Y");?></div>
                </div>
                <div class="media">
                    <div class="media-body">Pricing Currency:</div>
                    <div class="media-right"><?php echo "$currency";?> <?php echo "$totalamount";?></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="media">
                    <div class="media-body">Transaction Currency:</div>
                    <div class="media-right"><?php echo "$currency";?> <?php echo "$totalamount";?>
                    </div>
                </div>
                <div class="media">
                    <div class="media-body">Payment status:</div>
                    <div class="media-right ">Approved</div>
                </div>
            </div>
        <div class="col-sm-12">
            <div class="total">
                <span>Total</span><span class="text-1"><?php echo "$totalamount";?></span>
            </div>
        </div>
    </div>
</div>


    </div>
</section>

                    <!-- Fare rules -->
<section class="panel panel-default print-fare-rules notice-box-block">
    <div class="panel-body">
        <div class="heading-2">Fare Rules</div>
        <div class="rule">
                <div class="media journey heading">
                    <div class="media-left">
                        <img src="Print_files/departing-flight.svg" alt="Depart: <?php echo $_POST["depairportname"]; ?> to <?php echo $_POST["arrairportname"]; ?>" class="media-object">
                    </div>
                    <div class="media-body">
                        <div class="text-4"><?php echo $_POST["depairportname"]; ?> to <?php echo $_POST["arrairportname"]; ?> - Fly</div>
                    </div>
                </div>
            <div class="space"></div>
            <ul>
                <li>Cancellations, refunds and credits are not permitted;</li>
                <li>Origin/destination changes are not permitted;</li>
                <li>­Flight date, time and/or name changes are permitted
 up to 4 hours before departure for a fee, plus any applicable 
difference in fare. Please see the Scoot Fees Chart for current fees;</li>
                <li>Name changes for any passenger must apply to all flights for that passenger on the booking;</li>
                <li>If your booking contains flights operated by partner
 airlines, flight date, time or name changes, and upgrade to ScootBiz, 
are not permitted for all flights in the booking;</li>
                <li>Cabin baggage allowance is 10kg (maximum 2 pieces 
including a laptop/handbag) in Economy and 15kg (maximum 2 pieces 
including a laptop/handbag) in ScootBiz;
  </li>
                <li>Checked baggage allowance is 20kg in Economy (for 
FlyBag and FlyBagEat fares only) and 30kg in ScootBiz. For each checked 
baggage, the sum of the length, width and height should not exceed 158cm
 (62 inches);</li>
                <li>KrisFlyer mileage accrual is permitted only if PlusPerks is purchased in the booking;</li>
                <li>Economy sale fares are not eligible for KrisFlyer mileage accrual;</li>
                <li>Subject to applicable laws, in the event of a 
significant schedule change or flight disruption, you may be able to 
cancel your tickets and obtain a refund with payment of a reasonable 
admin fee. Please refer to the Scoot Fees Chart for current fees</li>
                <li>Conditions of Carriage apply.</li>
            </ul>
        </div>
    </div>
</section>

                    <!-- Disclaimer -->

            </div>
        </main>
    </div>
    <script src="Print_files/l10n.js"></script>
<script src="Print_files/libs.js"></script>
<script src="Print_files/script.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            window.print();
        });
    </script>
    <!--[if lt IE 8]><p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p><![endif]-->
    <noscript>JavaScript is off. Please enable to view full site.</noscript>


<div id="d__fFH" style="position: absolute; top: -5000px; left: -5000px;"><object id="d_dlg" classid="clsid:3050f819-98b5-11cf-bb82-00aa00bdce0b" width="0px" height="0px"></object><span id="d__fF" style="font-family: &quot;Courier&quot;, serif; font-size: 72px; visibility: hidden;">The quick brown fox jumps over the lazy dog.</span></div></body></html>
