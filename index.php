<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
    
<link rel="stylesheet" type="text/css" href="jquery-ui.min.css" />
<link rel="stylesheet" type="text/css" href="style.css" />
    
</head> 
	 
<body>
	
<?php 
$currencies = array('EUR', 'USD', 'IDR', 'AUD', 'INR');
//airasia_booking_number: "ZUYGVH";
//scoot booking number: "ECS2MH"

?>

<form id="ticket" action="airasia.php" method="post">
<p class="red">Don't forget to delete headers and footers when you print your ticket to not leave the address of the website on top of the pages</p>
<p class="red">Check on <a href="http://www.mintprintables.com/print-tips/header-footer-windows/" target="_blank">mintprintables</a></p>
Airline: <select id="airlineselect" name="ticketAirLine">
			<option>--</option>
			<option value="airasia">AirAsia</option>
			<option value="scoot">Scoot</option>
			<option value="spicejet">SpiceJet</option>
		</select><br><br>
<div class="border-group">
<table>
	<tr>
		<th></th>
		<td>Title:</td>
		<td>Family name:</td>
		<td>Given names:</td>
		<td class="nomandatory spicejet">Passport number:</td>
	</tr>
	<tr>
		<th>Guest 1</th>
		<td><select name="titlename1"><option value="Mr">Mr</option><option value="Mrs">Mrs</option></select></td>
		<td><input type="text" name="surname1"></td>
		<td><input type="text" name="givennames1"></td>
		<td class="nomandatory spicejet"><input type="text" name="passport1"></td>
	</tr>
	<tr>
		<th>Guest 2</th>
		<td><select name="titlename2"><option value="Mr">Mr</option><option value="Mrs">Mrs</option></select></td>
		<td><input type="text" name="surname2"></td>
		<td><input type="text" name="givennames2"></td>
		<td class="nomandatory spicejet"><input type="text" name="passport2"></td>
	</tr><tr>
		<th>Guest 3</th>
		<td><select name="titlename3"><option value="Mr">Mr</option><option value="Mrs">Mrs</option></select></td>
		<td><input type="text" name="surname3"></td>
		<td><input type="text" name="givennames3"></td>
		<td class="nomandatory spicejet"><input type="text" name="passport3"></td>
	</tr><tr>
		<th>Guest 4</th>
		<td><select name="titlename4"><option value="Mr">Mr</option><option value="Mrs">Mrs</option></select></td>
		<td><input type="text" name="surname4"></td>
		<td><input type="text" name="givennames4"></td>
		<td class="nomandatory spicejet"><input type="text" name="passport4"></td>
	</tr>
	
</table>
</div>
<div class="border-group">
<div class="nomandatory spicejet">
Contact number: +<input type="text" name="contactnumberprefix" size="3" maxlength="3">-<input type="text" name="contactnumber" size="12"><br>
<b>Address:</b> <br>
City: <input type="text" name="addresscity">
Postcode: <input type="text" name="addresspostcode">
Country: <input type="text" name="addresscountry">
</div>
Email: <input type="text" name="email"><br>
Booking number: <input type="text" name="bookingnumber"> <span class="nomandatory airasia">Example: ZUYGVH</span><span class="nomandatory scoot">Ex: ECS2MH</span><span class="nomandatory spicejet">Ex: QEIWVX</span><br> 
<span class="nomandatory airasia">Do not display booking number</span><span class="nomandatory scoot">Change booking number to flight number</span><input class="nomandatory airasia scoot" name="nodisplaybooking" type="checkbox"/><br>
Booking date: <input type="date" name="bookingdate"><br>
</div>
<div class="border-group">
<h3>Departure:</h3> 
 Airport name: <input type="text" name="depairportname"><br>
 Airport code: <input type="text" name="depairportcode"><br>
 <div class="nomandatory airasia scoot">Airport full name: <input type="text" name="depairportfullname"><br></div>
 Date: <input type="date" name="depdate"><br>
 Time: <select name="dephour">
			<?php
			for ($x = 0; $x<=23; $x++){
				echo "<option value='".$x."'>".$x."</option>";
			}
			?>
			</select>:
			<select name="depmin">
			<?php
			for ($x = 0; $x<=59; $x++){
				echo "<option value='".$x."'>".$x."</option>";
			}
			?>
			</select></div>
<div class="border-group">
<h3>Arrival: </h3>
 Airport name: <input type="text" name="arrairportname"><br>
 Airport code: <input type="text" name="arrairportcode"><br>
 <div class="nomandatory airasia scoot">Airport full name: <input type="text" name="arrairportfullname"><br></div>
Date: <input type="date" name="arrdate"><br>
 Time: <select name="arrhour">
			<?php
			for ($x = 0; $x<=23; $x++){
				echo "<option value='".$x."'>".$x."</option>";
			}
			?>
			</select>:
			<select name="arrmin">
			<?php
			for ($x = 0; $x<=59; $x++){
				echo "<option value='".$x."'>".$x."</option>";
			}
			?>
			</select>
</div>
<br>
<div class="nomandatory scoot airasia">Plane (AK 377, A320, etc...): <input name="plane" type="text"><br></div>
<div class="nomandatory scoot spicejet">Flight number (TR..., SG...): <input name="flynumber" type="text"></div>
<div class="nomandatory scoot">Flight duration: <select name="flyhour">
			<?php
			for ($x = 0; $x<=99; $x++){
				echo "<option value='".$x."'>".$x."</option>";
			}
			?>
			</select>:
			<select name="flymin">
			<?php
			for ($x = 0; $x<=59; $x++){
				echo "<option value='".$x."'>".$x."</option>";
			}
			?>
			</select><br><br></div>
<div class="border-group">
<p class="nomandatory airasia red">One AirAsia ticket, this part doesn't appear on the printable version of your ticket</p>
Currency: <select name="currency">
			<?php
			foreach ($currencies as $currency){
				echo "<option value='".$currency."'>".$currency."</option>";
			}
			?>
			</select><br>
Flight total price for one guest ( fees included ): <input name="totalprice" type="number" step="0.01"><br>
<div class="nomandatory airasia">Passenger Service Charge: <input name="passengerservice" type="number" step="0.01"></div>
Flight fees: <input name="fees" type="number" step="0.01"><br>


</div>

<br><br>
No background: <input name="nobackground" type="checkbox"/>
<br><br>
<input type="submit">
</form>


<script type="text/javascript" src="jquery-min.js"></script>
<script type="text/javascript" src="jquery-ui.min.js"></script>
<script type="text/javascript" src="script.js"></script>
	

</body>
</html>  
