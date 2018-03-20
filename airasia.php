<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0014)about:internet -->
<html xmlns="http://www.w3.org/1999/xhtml" moznomarginboxes mozdisallowselectionprint><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"><meta charset="utf-8">
    <meta name="title" content="Booking No. (<?php echo $_POST["bookingnumber"]; ?>) Travel Itinerary">
    <meta name="description" content="Booking No. (<?php echo $_POST["bookingnumber"]; ?>) Travel Itinerary - your booking has been confirmed, this is your travel itinerary.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><meta http-equiv="X-UA-Compatible" content="IE=edge"><link id="switch_style" rel="stylesheet" type="text/css" href="AirAsia%20Travel%20Itinerary%20-%20Booking%20No.%20(ZUYGVH)_files/istyle.css">

<title>
	AirAsia Travel Itinerary <?php if ( !$_POST["nodisplaybooking"] ){ ?>- Booking No. (<?php echo $_POST["bookingnumber"]; ?>)<?php } ?>
</title><link rel="preload" href="AirAsia%20Travel%20Itinerary%20-%20Booking%20No.%20(ZUYGVH)_files/integrator_002.js" as="script"><script type="text/javascript" src="AirAsia%20Travel%20Itinerary%20-%20Booking%20No.%20(ZUYGVH)_files/integrator_002.js"></script><link rel="preload" href="AirAsia%20Travel%20Itinerary%20-%20Booking%20No.%20(ZUYGVH)_files/integrator.js" as="script"><script type="text/javascript" src="AirAsia%20Travel%20Itinerary%20-%20Booking%20No.%20(ZUYGVH)_files/integrator.js"></script><script src="AirAsia%20Travel%20Itinerary%20-%20Booking%20No.%20(ZUYGVH)_files/pubads_impl_187.js" async=""></script></head>
<body id="bodyHTML" onload="javascript: move_up('')" <?php if (!$_POST["nobackground"]) { ?> style="background: url('fake1.jpg') repeat" <?php } ?>>

    <div id="container">
        <header>
	        <div id="mob-save-pdf"><a title="Save this Travel Itinerary as PDF">Save this Travel Itinerary as PDF</a></div>
            <div id="ti-header">
    	        <div class="logo"> <a href="http://www.airasia.com/" target="_blank"><img src="AirAsia%20Travel%20Itinerary%20-%20Booking%20No.%20(ZUYGVH)_files/logo-aa.png" alt="AirAsia" title="AirAsia"></a>
                </div>
                <div class="header-right-col">
                    <div class="save-and-print">
                        <div id="divPrintButton" class="print-button">
                            <button class="btnPrint" data-href="istyle"><img src="AirAsia%20Travel%20Itinerary%20-%20Booking%20No.%20(ZUYGVH)_files/img-printthis.png" alt="Print this" class="save-print-image" title="Print this">Print this</button>
                        </div>
                        
                        <div id="divSaveButton" class="save-button">
                            <button id="btnSave" onclick='window.open("./ItineraryPDF.aspx?SessionID=C0D0BB3DA90D44119FB26882CDE8C086&amp;Data=JP x3EBRwMQAJgnoHiI6dMI7EVE6OplBqGTt 2oNlVU=")'><img src="AirAsia%20Travel%20Itinerary%20-%20Booking%20No.%20(ZUYGVH)_files/img-saveaspdf.png" alt="Save as PDF" class="save-print-image" title="Save as PDF">Save as PDF</button>
                        </div>

                    </div>
                    <div class="ti-title">                        
                    <h1>Travel Itinerary</h1>
                    </div>
                    <div class="ti-title-invoice">
                    <h1>Invoice</h1>
                    </div>
                </div>
            </div>
        </header>
        <div id="ti-guest-pnr">
            <div class="ti-guest">
                <table class="ti-guest-table" cellspacing="0" cellpadding="8" border="0">
                    <tbody><tr>
                        <?php if ( !$_POST["nodisplaybooking"] ){ ?>
                        <td valign="top"><strong>Booking number:</strong></td>                       
                        <td class="pnr-number"><strong><?php echo $_POST["bookingnumber"]; ?></strong></td> 
                        <?php } ?>
                    </tr>
                     <tr>
					    <td valign="top"><strong>Booking date:</strong></td>
					    <td valign="top"><?php $date=date_create($_POST["bookingdate"]); echo date_format($date, "d M Y");?></td>
		            </tr>	                   			   
				 
				  
                </tbody></table>
            </div>
            <div class="ti-pnr">
      	      
                <div class="ti-pnr-barcode"><img src="AirAsia%20Travel%20Itinerary%20-%20Booking%20No.%20(ZUYGVH)_files/ZUYGVH.png" alt="<?php echo $_POST["bookingnumber"]; ?>" width="124px" height="69px"></div>
            </div>
        </div>
        <?php if (!$_POST["nobackground"]) { ?><img src="fake1.jpg"><?php } ?>
        <div id="divFlightJourney">
    	    <div class="table-header-info">
       	        <div class="table-title"><h2>Flight details</h2></div>
                <div class="table-image"><img src="AirAsia%20Travel%20Itinerary%20-%20Booking%20No.%20(ZUYGVH)_files/img-flight.png" class="table-image-adjust"></div>
            </div>
            
                    
<div class="table-header">
    Flight 1: <?php echo $_POST["depairportname"]; ?> <img src="AirAsia%20Travel%20Itinerary%20-%20Booking%20No.%20(ZUYGVH)_files/icon-plane-white.png" class="icon-aeroplane-white"><img src="AirAsia%20Travel%20Itinerary%20-%20Booking%20No.%20(ZUYGVH)_files/icon-plane-black.png" class="icon-aeroplane-black"> <?php echo $_POST["arrairportname"]; ?>
</div>
<div class="table-wrapper">
    <table style="page-break-inside: auto;" width="100%" cellspacing="0" cellpadding="8" border="1">
        <tbody>
            
                    
<tr>
<!-- Added By Andrew Koy 20150813 [rowspan="2"] (P20406) -->
    <td class="table-first-col" rowspan="2" width="15%"><?php echo $_POST["plane"]; ?><br>
<!-- End -->
        <a href="http://www.airasia.com/my/en/our-fares/fare-rules-itinerary.page?view=lowfare" target="_blank">Low Fare</a> 
    </td>
    <td class="table-second-col" width="40%">
        <strong><?php echo $_POST["depairportname"]; ?> (<?php echo $_POST["depairportcode"]; ?>)</strong><br>
		<?php echo $_POST["depairportfullname"]; ?> <br>
        <?php $date=date_create($_POST["depdate"]); echo date_format($date, "D d M Y");?><br>
        <?php $date=date_create($_POST["dephour"].':'.$_POST["depmin"]); echo date_format($date, "Hi");?> hrs (<?php echo date_format($date, "g:iA");?>)
    </td>
    <td class="table-second-col" width="5%">
        <img src="AirAsia%20Travel%20Itinerary%20-%20Booking%20No.%20(ZUYGVH)_files/icon-plane-red.png">
    </td>
    <td class="table-second-col" width="40%">
        <strong><?php echo $_POST["arrairportname"]; ?> (<?php echo $_POST["arrairportcode"]; ?>)</strong><br>
		<?php echo $_POST["arrairportfullname"]; ?> <br>
        <?php $date=date_create($_POST["arrdate"]); echo date_format($date, "D d M Y");?><br>
        <?php $date=date_create($_POST["arrhour"].':'.$_POST["arrmin"]); echo date_format($date, "Hi");?> hrs (<?php echo date_format($date, "g:iA");?>)
    </td>
</tr>
<!-- Added By Andrew Koy 20150813 (P20406) -->

<!-- end -->
                
        </tbody>
    </table>
</div>
                
            <div class="table-fine-line">All times shown are local</div>
            
            

             <!--CGKNote = Added by Paul B. 012217 #26622-->
            
            <!--End #26622-->

          

             
            
            
            
        </div>
      
        
        <div id="divAddOns">
    	    <div class="table-header-info">
       	        <div class="table-title-addons">
                    <h2>Guest details</h2>
                </div>
                <div class="table-image">
                    <img src="AirAsia%20Travel%20Itinerary%20-%20Booking%20No.%20(ZUYGVH)_files/img-addons.png" class="table-image-adjust">
                </div>
            </div>
            
                        
<div class="table-header">
     Flight 1: <?php echo $_POST["depairportname"]; ?> <img src="AirAsia%20Travel%20Itinerary%20-%20Booking%20No.%20(ZUYGVH)_files/icon-plane-white.png" class="icon-aeroplane-white"><img src="AirAsia%20Travel%20Itinerary%20-%20Booking%20No.%20(ZUYGVH)_files/icon-plane-black.png" class="icon-aeroplane-black"> <?php echo $_POST["arrairportname"]; ?>
</div>
<div class="table-wrapper">
    <table width="100%" cellspacing="0" cellpadding="8" border="1">
        <tbody>
            
                    

        
<tr>
    <td class="table-first-col" width="20%" valign="top"><?php echo $_POST["titlename1"]." ".$_POST["givennames1"]." ".$_POST["surname1"] ; ?></td>
    <td id="repeaterItineraryService_itineraryServiceFlight_0_repeaterItineraryServiceFlightSegment_0_itineraryServiceFlightSegmentControl_0_repeaterItineraryServiceFlightSegmentDetail_0_itineraryServiceFlightSegmentDetail_0_desCol1_0" class="table-second-col" width="40%" valign="top">• No Add-ons</td>

    <td id="repeaterItineraryService_itineraryServiceFlight_0_repeaterItineraryServiceFlightSegment_0_itineraryServiceFlightSegmentControl_0_repeaterItineraryServiceFlightSegmentDetail_0_itineraryServiceFlightSegmentDetail_0_desCol2_0" class="table-second-col" width="40%" valign="top"></td>

</tr>
<?php if ( $_POST["surname2"] ) {?>
<tr>
    <td class="table-first-col" width="20%" valign="top"><?php echo $_POST["titlename2"]." ".$_POST["givennames2"]." ".$_POST["surname2"] ; ?></td>
    <td id="repeaterItineraryService_itineraryServiceFlight_0_repeaterItineraryServiceFlightSegment_0_itineraryServiceFlightSegmentControl_0_repeaterItineraryServiceFlightSegmentDetail_0_itineraryServiceFlightSegmentDetail_0_desCol1_0" class="table-second-col" width="40%" valign="top">• No Add-ons</td>

    <td id="repeaterItineraryService_itineraryServiceFlight_0_repeaterItineraryServiceFlightSegment_0_itineraryServiceFlightSegmentControl_0_repeaterItineraryServiceFlightSegmentDetail_0_itineraryServiceFlightSegmentDetail_0_desCol2_0" class="table-second-col" width="40%" valign="top"></td>

</tr>

<?php } ?>
<?php if ( $_POST["surname3"] ) {?>
<tr>
    <td class="table-first-col" width="20%" valign="top"><?php echo $_POST["titlename3"]." ".$_POST["givennames3"]." ".$_POST["surname3"] ; ?></td>
    <td id="repeaterItineraryService_itineraryServiceFlight_0_repeaterItineraryServiceFlightSegment_0_itineraryServiceFlightSegmentControl_0_repeaterItineraryServiceFlightSegmentDetail_0_itineraryServiceFlightSegmentDetail_0_desCol1_0" class="table-second-col" width="40%" valign="top">• No Add-ons</td>

    <td id="repeaterItineraryService_itineraryServiceFlight_0_repeaterItineraryServiceFlightSegment_0_itineraryServiceFlightSegmentControl_0_repeaterItineraryServiceFlightSegmentDetail_0_itineraryServiceFlightSegmentDetail_0_desCol2_0" class="table-second-col" width="40%" valign="top"></td>

</tr>

<?php } ?>
<?php if ( $_POST["surname4"] ) {?>
<tr>
    <td class="table-first-col" width="20%" valign="top"><?php echo $_POST["titlename4"]." ".$_POST["givennames4"]." ".$_POST["surname4"] ; ?></td>
    <td id="repeaterItineraryService_itineraryServiceFlight_0_repeaterItineraryServiceFlightSegment_0_itineraryServiceFlightSegmentControl_0_repeaterItineraryServiceFlightSegmentDetail_0_itineraryServiceFlightSegmentDetail_0_desCol1_0" class="table-second-col" width="40%" valign="top">• No Add-ons</td>

    <td id="repeaterItineraryService_itineraryServiceFlight_0_repeaterItineraryServiceFlightSegment_0_itineraryServiceFlightSegmentControl_0_repeaterItineraryServiceFlightSegmentDetail_0_itineraryServiceFlightSegmentDetail_0_desCol2_0" class="table-second-col" width="40%" valign="top"></td>

</tr>

<?php } ?>
<!-- Added by Paul B. to Add BBUS Liner in Travel itinerary 07-18-17 -->

                
        </tbody>
    </table>
</div>
                    
            
           
        </div>

           <div id="divADSpace" data-google-query-id="CPXw1sTf9NkCFUKkjgodu0QPjA">
            <script type="text/javascript">                                               
                googletag.cmd.push(function () {
                    googletag.display('divADSpace'); 
                });
            </script>  
        <div id="google_ads_iframe_/10025506/Booking_WebItinerary_Leaderboard_0__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/10025506/Booking_WebItinerary_Leaderboard_0" title="3rd party ad content" name="google_ads_iframe_/10025506/Booking_WebItinerary_Leaderboard_0" scrolling="no" marginwidth="0" marginheight="0" style="border: 0px none; vertical-align: bottom;" srcdoc="" width="728" height="90" frameborder="0"></iframe></div></div>

        <div id="divPaymentDetails">
           
    	  <div class="table-title-payment">
                    <h2>Payment Details</h2>
             
                <div class="table-image">
                       <img src="AirAsia%20Travel%20Itinerary%20-%20Booking%20No.%20(ZUYGVH)_files/img-payment.png" class="table-image-adjust">
                  </div><table class="ti-guest-table" cellspacing="0" cellpadding="8" border="0">
                    <tbody><tr>
         <td valign="top"><strong>Contact person:</strong></td>
         <td valign="top"><?php echo $_POST["givennames1"]." ".$_POST["surname1"] ; ?></td>
              </tr>
        <tr>
         <td valign="top"><strong>Email:</strong></td>
            <td valign="top"><?php echo $_POST["email"]; ?></td>
              </tr> 
           
       <tr>
    
       </tr>
                       
                </tbody></table>           
                </div>

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
			
			$oneguestprice = $_POST["totalprice"] - $_POST["fees"] - $_POST["passengerservice"];
			$oneguestpassengercharge = $_POST["passengerservice"];
			$oneguestfee = $_POST["fees"];
			
			$flightsubtotal = $n*( $oneguestprice + $oneguestpassengercharge);
			$passengercharge = $n*$oneguestpassengercharge;
			$totalfee = $n*$oneguestfee;
			$totalamount = $n*$_POST["totalprice"];
			
			?>
            <table width="100%" cellspacing="0" cellpadding="0" border="0">
                <tbody>
                     
                    <tr>
                        <td id="colItemise" class="table-payment-col" width="60%" valign="top"><table width="100%" cellspacing="0" cellpadding="3" border="0"><tbody><tr><td colspan="2" class="table-payment-col-space-title" valign="top"><strong>Flight</strong></td></tr><tr><td class="table-payment-col-space" width="60%" valign="top"><?php echo "$n"; ?>x Guest</td><td class="table-payment-col-space" width="40%" valign="top"><?php echo "$oneguestprice"; ?> <?php echo "$currency" ?></td></tr><tr><td class="table-payment-col-space" width="60%" valign="top">Passenger Service Charge</td><td class="table-payment-col-space" width="40%" valign="top"><?php echo "$passengercharge"; ?> <?php echo "$currency" ?></td></tr><tr><td class="table-payment-col-space" width="60%" valign="top"><strong>Subtotal</strong></td><td class="table-payment-col-space" width="40%" valign="top"><strong><?php echo "$flightsubtotal" ;?> <?php echo "$currency" ?></strong></td></tr><tr><td class="table-payment-col-space" width="60%" valign="top">&nbsp;</td><td class="table-payment-col-space" width="40%" valign="top">&nbsp;</td></tr><tr><td colspan="2" class="table-payment-col-space-title" valign="top"><strong>Add-ons &amp; Fees</strong></td></tr><tr><td class="table-payment-col-space" width="60%" valign="top"><?php echo "$n"; ?>x Processing Fee</td><td class="table-payment-col-space" width="40%" valign="top"><?php echo "$oneguestfee"; ?> <?php echo "$currency" ?></td></tr><tr><td class="table-payment-col-space" width="60%" valign="top"><strong>Subtotal</strong></td><td class="table-payment-col-space" width="40%" valign="top"><strong><?php echo "$totalfee"; ?> <?php echo "$currency" ?></strong></td></tr><tr><td class="table-payment-col-space" width="60%" valign="top">&nbsp;</td><td class="table-payment-col-space" width="40%" valign="top">&nbsp;</td></tr><tr><td class="table-payment-col-space-total-top" width="60%">Total amount</td><td class="table-payment-col-space-total-top" width="40%"><?php echo "$totalamount";?> <?php echo "$currency" ?></td></tr><tr><td class="table-payment-col-space-total-middle" width="60%"><strong>Total paid</strong></td><td class="table-payment-col-space-total-middle" width="40%"><strong><?php echo "$totalamount";?> <?php echo "$currency" ?></strong></td></tr><tr><td class="table-payment-col-space-total-bottom" width="60%">Balance</td><td class="table-payment-col-space-total-bottom" width="40%">0 <?php echo "$currency" ?></td></tr></tbody></table></td>

                        <td id="colPayment" class="table-payment-col-drop" width="40%" valign="top"><table width="100%" cellspacing="0" cellpadding="3" border="0"><tbody><tr><td colspan="2" class="table-payment-col-space-title" valign="top"><strong>Payment date</strong></td></tr><tr><td class="table-payment-col-space" width="50%" valign="top"><strong>Date</strong></td><td class="table-payment-col-space" width="50%" valign="top"><?php $date=date_create($_POST["bookingdate"]); echo date_format($date, "D, d M Y");?></td></tr><tr><td class="table-payment-col-space" width="50%" valign="top"><strong>Type</strong></td><td class="table-payment-col-space" width="50%" valign="top">Master Card</td></tr><tr><td class="table-payment-col-space" width="50%" valign="top"><strong>Amount</strong></td><td class="table-payment-col-space" width="50%" valign="top"><?php echo "$totalamount";?> <?php echo "$currency" ?></td></tr><tr><td class="table-payment-col-space" width="50%" valign="top">&nbsp;</td><td class="table-payment-col-space" width="50%" valign="top">&nbsp;</td></tr></tbody></table></td>

                    </tr>
                </tbody>
            </table>
          <div class="print-invoice-button">
                <button class="btnPrint" data-href="istyleinv">
                    <img src="AirAsia%20Travel%20Itinerary%20-%20Booking%20No.%20(ZUYGVH)_files/img-printthis.png" alt="Print invoice" class="save-print-image" title="Print invoice">Print invoice
                </button>
            </div>
            <div class="table-fine-line-address">
                <strong>AirAsia Berhad</strong>, RedQ, Jalan Pekeliling 5,Lapangan Terbang Antarabangsa Kuala Lumpur (KLIA2) 64000 KLIA, Selangor Darul Ehsan Malaysia<br>GST Registration Number: 001062207488<br>
Payment is Goods and Services Tax (GST) inclusive for Malaysia domestic flights from 1st April, 2015.<br>
This receipt is NOT a tax invoice. Please refer to <a href="https://taxinvoice.airasia.com/">taxinvoice.airasia.com</a> for your tax invoice.
            </div>
            
        </div>
	 
    </div>
    <div id="grey-container">  
        <div id="footer">
    	    <div class="footer-first-col">
                Please read our <a href="http://www.airasia.com/my/en/about-us/friendly-reminder.page" target="_blank">Friendly reminders</a> and <a href="http://www.airasia.com/my/en/about-us/terms-and-conditions.page" target="_blank">Terms and conditions of carriage</a> before your flight.<br>Need help? <a href="http://www.airasia.com/ask" target="_blank">Ask AirAsia</a><br><br>Usage of the AirAsia website states your compliance of our <a href="http://www.airasia.com/my/en/about-us/terms-of-use.page" target="_blank">Terms of use</a> and <a href="http://www.airasia.com/my/en/about-us/privacy-policy.page" target="_blank">Privacy policy</a><br>©2015 AirAsia Berhad. <br>This website is owned and operated by AirAsia Berhad ("AirAsia").	
            </div>
            <div class="footer-logo"><img src="AirAsia%20Travel%20Itinerary%20-%20Booking%20No.%20(ZUYGVH)_files/newci-worldbest.gif" alt="AirAsia - World's Best Low-Cost Airline" title="AirAsia - World's Best Low-Cost Airline"></div>
        </div>
    </div>


<script type="text/javascript" id="">(function(d,a,b,e,f,c){try{if(b="undefined"!==typeof a&&("undefined"===typeof b||b!==a)){c.setTime(c.getTime()+864E5*f);var g=c.toGMTString();d.cookie=e+"\x3d"+a+";expires\x3d"+g+";path\x3d/;domain\x3d.airasia.com"}}catch(h){throw Error("GTM: HTML - set _gtm_icid cookie: "+h.message);}})(document,google_tag_manager["GTM-WTQCST"].macro('gtm7'),google_tag_manager["GTM-WTQCST"].macro('gtm8'),"_gtm_icid",parseInt(google_tag_manager["GTM-WTQCST"].macro('gtm9')),new Date);</script><script type="text/javascript" id="">(function(a,b,c){try{var e=function(){a[c].push({event:"trackEventNoEcommerce","eventDetails.category":"Optimizely","eventDetails.action":"load snippet","eventDetails.label":"optimizely object not found"})},f=function(){var d=a[b].get("visitor_id").randomId;a[c].push({event:"optimizelyLoaded","Optimizely visitorId":d})};a[b]=a[b]||[];a[c]=a[c]||[];try{var g="[object Object]"===Object.prototype.toString.call(a[b])&&a[b].hasOwnProperty("get"),h=Array.isArray&&Array.isArray(a[b])||"[object Array]"===
Object.prototype.toString.call(a[b]);g?f():h?a[b].push({type:"addListener",filter:{type:"lifecycle",name:"activated"},handler:function(a){f()}}):e()}catch(d){e()}}catch(d){throw Error("GTM: Optimizely - include project snippet: "+d.message);}})(window,"optimizely",google_tag_manager["GTM-WTQCST"].macro('gtm10'));</script><script type="text/javascript" id="">(function(f,g,a){var c="weird_get_top_level_domain\x3dcookie";a=a.split(".");for(var d=a.length-1,b,e=!1;0<=d&&!e;)b=a.slice(d).join("."),document.cookie=c+";domain\x3d."+b+";",-1<document.cookie.indexOf(c)&&(document.cookie=c.split("\x3d")[0]+"\x3d;domain\x3d."+b+";expires\x3dThu, 01 Jan 1970 00:00:01 GMT;",f[g].push({event:"get top-level Page Hostname","Page Hostname top-level":b}),e=!0),d--})(window,"gtmDataLayer","webitin.airasia.com");</script><script type="text/javascript" id="">window.dcmUtilities={cityMapping:{AUH:"United Arab Emirates",ADL:"Australia",AOR:"Malaysia",AKL:"New Zealand",BCD:"Philippines",BPN:"Indonesia",BTJ:"Indonesia",BWN:"Brunei",BDO:"Indonesia",BLR:"India",BKK:"Thailand",DMK:"Thailand",BTH:"Indonesia",PEK:"China",BTU:"Malaysia",BFV:"Thailand",PUS:"Korea",CGY:"Philippines",CEB:"Philippines",IXC:"India",CSX:"China",CTU:"China",MAA:"India",CNX:"Thailand",CEI:"Thailand",CKG:"China",CHC:"New Zealand",CRK:"Philippines",CMB:"Sri Lanka",DAD:"Viet Nam",DRW:"Australia",
DVO:"Philippines",DEL:"India",DPS:"Indonesia",DAC:"Bangladesh",FUK:"Japan",GOI:"India",OOL:"Australia",GAU:"India",CAN:"China",KWL:"China",HAK:"China",HGH:"China",HAN:"Viet Nam",HDY:"Thailand",SGN:"Viet Nam",HKG:"Hong Kong",HYD:"India",ILO:"Philippines",IMF:"India",IPH:"Malaysia",JAI:"India",CGK:"Indonesia",JED:"Saudi Arabia",JHB:"Malaysia",KLO:"Philippines",KTM:"Nepal",KKC:"Thailand",COK:"India",CCU:"India",KBR:"Malaysia",BKI:"Malaysia",KBV:"Thailand",KUL:"Malaysia",TGG:"Malaysia",KUA:"Malaysia",
KCH:"Malaysia",KMG:"China",LBU:"Malaysia",LGK:"Malaysia",LOE:"Thailand",LOP:"Indonesia",STN:"United Kingdom",LGW:"United Kingdom",MFM:"Macao",UPG:"Indonesia",MLE:"Maldives",MDC:"Indonesia",MDL:"Myanmar",MNL:"Philippines",MRU:"Mauritius",MES:"Indonesia",KNO:"Indonesia",MED:"Saudi Arabia",MEL:"Australia",MYY:"Malaysia",MKM:"Malaysia",BOM:"India",MCT:"Oman",NGO:"Japan",KOP:"Thailand",NST:"Thailand",NNT:"Thailand",NNG:"China",NAW:"Thailand",NYT:"Myanmar",NGB:"China",OKA:"Japan",KIX:"Japan",PDG:"Indonesia",
PLM:"Indonesia",ORY:"France",PKU:"Indonesia",PEN:"Malaysia",PER:"Australia",PNH:"Cambodia",HKT:"Thailand",PNK:"Indonesia",PPS:"Philippines",PNQ:"India",UNN:"Thailand",ROI:"Thailand",SNO:"Thailand",SDK:"Malaysia",CTS:"Japan",SRG:"Indonesia",ICN:"Korea",PVG:"China",SWA:"China",SHE:"China",SZX:"China",SBW:"Malaysia",REP:"Cambodia",SIN:"Singapore",SOC:"Indonesia",SZB:"Malaysia",SUB:"Indonesia",URT:"Thailand",SYD:"Australia",TAC:"Philippines",TAG:"Philippines",TPE:"Taiwan",TWU:"Malaysia",IKA:"Iran",TRV:"India",
TSN:"China",TRZ:"India",HND:"Japan",NRT:"Japan",TST:"Thailand",UBP:"Thailand",UTH:"Thailand",VTE:"Laos",VTZ:"India",XMN:"China",WNZ:"China",WUH:"China",XIY:"China",RGN:"Myanmar",JOG:"Indonesia"}};</script><script type="text/javascript" id="">(function(e,l,m,a,f,n,b){function g(d,a){var b="undefined"!==typeof d&&("undefined"===typeof a||a!==d);return b}function h(a,b,c){return a=a+"\x3d"+b+";expires\x3d"+c+";path\x3d/;domain\x3d.airasia.com"}try{var p=g(l,a),q=g(m,a),r=g(n,a),c=new Date,t=c.getFullYear(),u=c.getMonth();a=t;b=u+b;11<b&&(b-=12,a+=1);c.setMonth(b);c.setFullYear(a);var k=c.toGMTString();p?e.cookie=h(f,l,k):q?e.cookie=h(f,m,k):r&&(e.cookie=h(f,n,k))}catch(d){throw Error("GTM: HTML - set _gtm_customerId cookie: "+d.message);
}})(document,google_tag_manager["GTM-WTQCST"].macro('gtm11'),google_tag_manager["GTM-WTQCST"].macro('gtm12'),google_tag_manager["GTM-WTQCST"].macro('gtm13'),google_tag_manager["GTM-WTQCST"].macro('gtm14'),google_tag_manager["GTM-WTQCST"].macro('gtm15'),parseInt(google_tag_manager["GTM-WTQCST"].macro('gtm16')));</script><script type="text/javascript" id="">(function(){function a(b){var a="; "+document.cookie;b=a.split("; "+b+"\x3d");if(2==b.length)return b.pop().split(";").shift()||""}function g(b,a,c){var d=new Date;d.setTime(d.getTime()+864E5*c);c="expires\x3d"+d.toUTCString();document.cookie=b+"\x3d"+a+";"+c+";domain\x3d.airasia.com;path\x3d/"}var e="_clientId",h=180,k=a(e),f=a("_gtm_customerId")||a("__airasiaga");k!==f&&g(e,f,h)})();</script><script type="text/javascript" id="">(function(h,e,b,c,k,l,f,a,d){var g=[];a&&g.push("CJS_bookingPNR: "+a);f&&g.push("DL_ecommercePurchaseId: "+f);if(0<g.length){f="Found "+g.join(", ")+" at "+e+" event: "+b;c=c.split("#");a=c[0];a+=0<a.indexOf("?")?"\x26":"?";switch(b){case "gtm.js":a+="referrer\x3d";a=k?a+k:a+"missing";break;case "gtm.historyChange":a+="oldHistoryFragment\x3d";a=l?a+l:a+"missing";break;default:a+="referrer_and_oldHistoryFragment\x3dmissing"}b=[a];1<c.length&&b.push(c[1]);d=d||"missing";d="LK_bookingPage: "+d+": "+
b.join("#");h[e]=h[e]||[];h[e].push({event:"trackEventNoEcommerce","eventDetails.category":"Track booking PNR for troubleshooting","eventDetails.action":f,"eventDetails.label":d})}})(window,google_tag_manager["GTM-WTQCST"].macro('gtm17'),google_tag_manager["GTM-WTQCST"].macro('gtm18'),google_tag_manager["GTM-WTQCST"].macro('gtm19'),google_tag_manager["GTM-WTQCST"].macro('gtm20'),google_tag_manager["GTM-WTQCST"].macro('gtm21'),google_tag_manager["GTM-WTQCST"].macro('gtm22'),google_tag_manager["GTM-WTQCST"].macro('gtm25'),google_tag_manager["GTM-WTQCST"].macro('gtm26'));</script><script type="text/javascript" id="">google_tag_manager["GTM-WTQCST"].macro('gtm54')?heap.addEventProperties({"Logged In":"true"}):heap.addEventProperties({"Logged In":"false"});</script><script type="text/javascript" id="">window.gtmDataLayer.push({event:"trackEventNoEcommerce","eventDetails.category":"JavaScript error","eventDetails.action":"ReferenceError: heap is not defined","eventDetails.label":"https:\/\/webitin.airasia.com\/Itinerary\/Itinerary.aspx?SessionID\x3dC0D0BB3DA90D44119FB26882CDE8C086\x26Data\x3dJP+x3EBRwMQAJgnoHiI6dMI7EVE6OplBqGTt+2oNlVU\x3d:1","eventDetails.nonInteraction":!0});</script><iframe id="google_osd_static_frame_717972727422" name="google_osd_static_frame" style="display: none; width: 0px; height: 0px;"></iframe><script type="text/javascript" id="">window.gtmDataLayer.push({event:"unset eventDetails","eventDetails.category":void 0,"eventDetails.action":void 0,"eventDetails.label":void 0,"eventDetails.value":void 0,"eventDetails.nonInteraction":!1});</script><script type="text/javascript" id="">window.gtmDataLayer.push({event:"trackEventNoEcommerce","eventDetails.category":"JavaScript error","eventDetails.action":"TypeError: $(...).offset(...) is undefined","eventDetails.label":"https:\/\/webitin.airasia.com\/Itinerary\/Itinerary.aspx?SessionID\x3dC0D0BB3DA90D44119FB26882CDE8C086\x26Data\x3dJP+x3EBRwMQAJgnoHiI6dMI7EVE6OplBqGTt+2oNlVU\x3d:14","eventDetails.nonInteraction":!0});</script><script type="text/javascript" id="">window.gtmDataLayer.push({event:"unset eventDetails","eventDetails.category":void 0,"eventDetails.action":void 0,"eventDetails.label":void 0,"eventDetails.value":void 0,"eventDetails.nonInteraction":!1});</script></body></html>
