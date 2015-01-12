<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Home</title>
  	<link href="css/bootstrap.min.css" rel="stylesheet">
  	<link rel="stylesheet" type="text/css" href="css/full-slider.css">
 	<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>
	
	<!---- Start of NavBar ---->
<?php include("navbar.php"); ?>
	<!---- End of NavBar ---->

 <?php include("jumbotron.php"); ?>
    <div class="container">
<form role="form" class="book">
  <fieldset>
  <legend>Personal Information</legend>
  <div class="row">
    <div class="col-xs-5">
    <label for="firstName">First Name<span class="req"> *</span></label>
    <input type="text" class="form-control" name="firstName"id="firsName" placeholder="First" value="<?php if (isset($_POST['firstName'])) echo $_POST['firstName']; ?>" required>
  </div>
  <div class="col-xs-5">
    <label for="lastName">Last Name <span class="req"> *</span></label>
    <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last" value="<?php if (isset($_POST['lastName'])) echo $_POST['lastName']; ?>" required>
  </div>
  <div class="col-xs-5">
    <label for="address">Street Address<span class="req"> *</span></label>
    <input type="text" class="form-control" id="address" name="address" value="<?php if (isset($_POST['address'])) echo $_POST['address']; ?>" required>
  </div>
  </div>
  <div class="row">
  <div class="col-xs-5">
    <label for="city">City<span class="req"> *</span></label>
    <input type="text" class="form-control" id="city" name="city" value="<?php if (isset($_POST['city'])) echo $_POST['city']; ?>" required>
  </div>
  <div class="col-xs-3">
    <label for="state">State<span class="req"> *</span></label>
    <select class="form-control" id="state" name="state" required>
      <option value="Alabama">AL</option>
      <option value="Alaska">AK</option>
      <option value="Arizona">AZ</option>
      <option value="Arkansas">AR</option>
      <option value="California">CA</option>
      <option value="Colorado">CO</option>
      <option value="Connecticut">CT</option>
      <option value="Delaware">DE</option>
      <option value="Florida">FL</option>
      <option value="Georgia">GA</option>
      <option value="Hawaii">HI</option>
      <option value="Idaho">ID</option>
      <option value="Illinois">IL</option>
      <option value="Indiana">IN</option>
      <option value="Iowa">IA</option>
      <option value="Kansas">KS</option>
      <option value="Kentucky">KY</option>
      <option value="Louisiana">LA</option>
      <option value="Maine">ME</option>
      <option value="Maryland">MD</option>
      <option value="Massachusetts">MA</option>
      <option value="Michigan">MI</option>
      <option value="Minnesota">MN</option>
      <option value="Mississippi">MS</option>
      <option value="Missouri">MO</option>
      <option value="Montana">MT</option>
      <option value="Nebraska">NE</option>
      <option value="Nevada">NV</option>
      <option value="New Hampshire">NH</option>
      <option value="New Jersey">NJ</option>
      <option value="New Mexico">NM</option>
      <option value="New York">NY</option>
      <option value="North Carolina">NC</option>
      <option value="North Dakota">ND</option>
      <option value="Ohio">OH</option>
      <option value="Oklahoma">OK</option>
      <option value="Oregon">OR</option>
      <option value="Pennsylvania">PA</option>
      <option value="Rhode Island">RI</option>
      <option value="South Carolina">SC</option>
      <option value="South Dakota">SD</option>
      <option value="Tennessee">TN</option>
      <option value="Texas">TX</option>
      <option value="Utah">UT</option>
      <option value="Vermont">VT</option>
      <option value="Virginia">VA</option>
      <option value="Washington">WA</option>
      <option value="West Virginia">WV</option>
      <option value="Wisconsin">WI</option>
      <option value="Wyoming">WY</option>
    </select>
  </div>
  <div class="col-xs-2">
    <label for="zip">Zip<span class="req"> *</span></label>
    <input type="email" class="form-control" id="zip" name="zip"value="<?php if (isset($_POST['city'])) echo $_POST['city']; ?>" required>
  </div>
  </div>
  <div class="row">
   <div class="col-xs-5">
    <label for="phone">Phone</label>
    <input type="email" class="form-control" id="phone" name="phone"value="<?php if (isset($_POST['city'])) echo $_POST['city']; ?>">
  </div>
  <div class="col-xs-5">
    <label for="Email1">Email<span class="req"> *</span></label>
    <input type="email" class="form-control" id="Email1" name="Email" placeholder="Enter email" value="<?php if (isset($_POST['Email'])) echo $_POST['Email']; ?>" required>
  </div>
  </div>
  </fieldset>
  <fieldset>
  <legend>Destination Details</legend>
  <div class="row">
  <div class="col-xs-4">
    <label for="destination">Destination<span class="req"> *</span></label>
    <select class="form-control" name="destination" id="destination" required>
      <option value="Bora Bora">Bora Bora</option>
      <option value="Cancun">Cancun</option>
      <option value="Costa Rica">Costa Rica</option>
      <option value="Kauai">Kauai</option>
      <option value="Las Vegas">Las Vegas</option>
      <option value="New York">New York</option>
      <option value="Paris">Paris</option>
      <option value="Venice">Venice</option>
      <option value="Dubai">Dubai</option>
    </select>
    </div>
    <div class="col-xs-4">
    <label for="departure">Departure Date<span class="req"> *</span></label>
    <input class="form-control" type="date" name="departure" id="departure" required>
    </div>
    <div class="col-xs-4">
    <label for="return">Return Date<span class="req"> *</span></label>
    <input class="form-control" type="date" name="return" id="return">
    </div>
    </div>
    <div class="row">
    <div class="col-xs-5">
    <label for="from">Flying From<span class="req"> *</span></label>
    <select class="form-control" name="from" id="from" required>
		<option value="ABR"> 	Aberdeen, SD (ABR) 	</option>	   
		<option value="ABI">	Abilene, TX (ABI)	</option>	   
		<option value="ADK">	Adak Island, AK (ADK)	</option>	   
		<option value="KKI">	Akiachak, AK (KKI)	</option>	   
		<option value="AKI">	Akiak, AK (AKI)	</option>	   
		<option value="CAK">	Akron/Canton, OH (CAK)	</option>	   
		<option value="KQA">	Akuton, AK (KQA)	</option>	   
		<option value="AUK">	Alakanuk, AK (AUK)	</option>	   
		<option value="ALM">	Alamogordo, NM (ALM)	</option>	   
		<option value="ALS">	Alamosa, CO (ALS)	</option>	   
		<option value="ALB">	Albany, NY (ALB)	</option>	   
		<option value="CVO">	Albany, OR - Bus service (CVO)	</option>	   
		<option value="QWY">	Albany, OR - Bus service (QWY)	</option>	   
		<option value="ABQ">	Albuquerque, NM (ABQ)	</option>	   
		<option value="WKK">	Aleknagik, AK (WKK)	</option>	   
		<option value="AEX">	Alexandria, LA (AEX)	</option>	   
		<option value="AET">	Allakaket, AK (AET)	</option>	   
		<option value="ABE">	Allentown, PA (ABE)	</option>	   
		<option value="AIA">	Alliance, NE (AIA)	</option>	   
		<option value="APN">	Alpena, MI (APN)	</option>	   
		<option value="AOO">	Altoona, PA (AOO)	</option>	   
		<option value="AMA">	Amarillo, TX (AMA)	</option>	   
		<option value="ABL">	Ambler, AK (ABL)	</option>	   
		<option value="AKP">	Anaktueuk, AK (AKP)	</option>	   
		<option value="ANC">	Anchorage, AK (ANC)	</option>	   
		<option value="AGN">	Angoon, AK (AGN)	</option>	   
		<option value="ANI">	Aniak, AK (ANI)	</option>	   
		<option value="ANV">	Anvik, AK (ANV)	</option>	   
		<option value="ATW">	Appleton, WI (ATW)	</option>	   
		<option value="ACV">	Arcata, CA (ACV)	</option>	   
		<option value="ARC">	Arctic Village, AK (ARC)	</option>	   
		<option value="AVL">	Asheville, NC (AVL)	</option>	   
		<option value="HTS">	Ashland, KY/Huntington, WV (HTS)	</option>	   
		<option value="ASE">	Aspen, CO (ASE)	</option>	   
		<option value="AHN">	Athens, GA (AHN)	</option>	   
		<option value="AKB">	Atka, AK (AKB)	</option>	   
		<option value="ATL">	Atlanta, GA (ATL)	</option>	   
		<option value="AIY">	Atlantic City, NJ (AIY)	</option>	   
		<option value="ATK">	Atqasuk, AK (ATK)	</option>	   
		<option value="AGS">	Augusta, GA (AGS)	</option>	   
		<option value="AUG">	Augusta, ME (AUG)	</option>	   
		<option value="AUS"> 	Austin, TX (AUS) 	</option>	   
		<option value="BFL">	Bakersfield, CA (BFL)	</option>	   
		<option value="BWI">	Baltimore, MD (BWI)	</option>	   
		<option value="BGR">	Bangor, ME (BGR)	</option>	   
		<option value="BHB">	Bar Harbour, ME (BHB)	</option>	   
		<option value="BRW">	Barrow, AK (BRW)	</option>	   
		<option value="BTI">	Barter Island, AK (BTI)	</option>	   
		<option value="BTR">	Baton Rouge, LA (BTR)	</option>	   
		<option value="MBS">	Bay City, MI (MBS)	</option>	   
		<option value="BPT">	Beaumont/Port Arthur, TX (BPT)	</option>	   
		<option value="ZBV">	Beaver Creek, CO - Van service (ZBV)	</option>	   
		<option value="WBQ">	Beaver, AK (WBQ)	</option>	   
		<option value="BKW">	Beckley, WV (BKW)	</option>	   
		<option value="BED">	Bedford, MA (BED)	</option>	   
		<option value="BLV">	Belleville, IL (BLV)	</option>	   
		<option value="BLI">	Bellingham, WA (BLI)	</option>	   
		<option value="BJI">	Bemidji, MN (BJI)	</option>	   
		<option value="BEH">	Benton Harbor, MI (BEH)	</option>	   
		<option value="BET">	Bethel, AK (BET)	</option>	   
		<option value="ABE">	Bethlehem, PA (ABE)	</option>	   
		<option value="BTT">	Bettles, AK (BTT)	</option>	   
		<option value="BIL">	Billings, MT (BIL)	</option>	   
		<option value="GPT">	Biloxi/Gulfport, MS (GPT)	</option>	   
		<option value="BGM">	Binghamton, NY (BGM)	</option>	   
		<option value="KBC">	Birch Creek, AK (KBC)	</option>	   
		<option value="BHM">	Birmingham, AL (BHM)	</option>	   
		<option value="BIS">	Bismarck, ND (BIS)	</option>	   
		<option value="BID">	Block Island, RI (BID)	</option>	   
		<option value="BMI">	Bloomington, IL (BMI)	</option>	   
		<option value="BLF">	Bluefield, WV (BLF)	</option>	   
		<option value="BOI">	Boise, ID (BOI)	</option>	   
		<option value="BOS">	Boston, MA (BOS)	</option>	   
		<option value="XHH">	Boulder, CO - Bus service (XHH)	</option>	   
		<option value="WHH">	Boulder, CO - Hiltons Har H (WHH)	</option>	   
		<option value="WBU">	Boulder, CO - Municipal Airport (WBU)	</option>	   
		<option value="BYA">	Boundary, AK (BYA)	</option>	   
		<option value="BWG">	Bowling Green, KY (BWG)	</option>	   
		<option value="BZN">	Bozeman, MT (BZN)	</option>	   
		<option value="BFD">	Bradford, PA (BFD)	</option>	   
		<option value="BRD">	Brainerd, MN (BRD)	</option>	   
		<option value="BWD">	Brawnwood, TX (BWD)	</option>	   
		<option value="QKB">	Breckenridge, CO - Van service (QKB)	</option>	   
		<option value="TRI">	Bristol, VA (TRI)	</option>	   
		<option value="BKX">	Brookings, SD (BKX)	</option>	   
		<option value="RBH">	Brooks Lodge, AK (RBH)	</option>	   
		<option value="BRO">	Brownsville, TX (BRO)	</option>	   
		<option value="BQK">	Brunswick, GA (BQK)	</option>	   
		<option value="BKC">	Buckland, AK (BKC)	</option>	   
		<option value="BUF">	Buffalo, NY (BUF)	</option>	   
		<option value="IFP">	Bullhead City/Laughlin, AZ (IFP)	</option>	   
		<option value="BUR">	Burbank, CA (BUR)	</option>	   
		<option value="BRL">	Burlington, IA (BRL)	</option>	   
		<option value="BTV">	Burlington, VT (BTV)	</option>	   
		<option value="BTM"> 	Butte, MT (BTM) 	</option>	   
		<option value="CAK">	Canton/Akron, OH (CAK)	</option>	   
		<option value="CGI">	Cape Girardeau, MO (CGI)	</option>	   
		<option value="LUR">	Cape Lisburne, AK (LUR)	</option>	   
		<option value="EHM">	Cape Newenham, AK (EHM)	</option>	   
		<option value="MDH">	Carbondale, IL (MDH)	</option>	   
		<option value="CLD">	Carlsbad, CA (CLD)	</option>	   
		<option value="CNM">	Carlsbad, NM (CNM)	</option>	   
		<option value="MRY">	Carmel, CA (MRY)	</option>	   
		<option value="CPR">	Casper, WY (CPR)	</option>	   
		<option value="CDC">	Cedar City, UT (CDC)	</option>	   
		<option value="CID">	Cedar Rapids, IA (CID)	</option>	   
		<option value="CEM">	Central, AK (CEM)	</option>	   
		<option value="CDR">	Chadron, NE (CDR)	</option>	   
		<option value="CIK">	Chalkyitsik, AK (CIK)	</option>	   
		<option value="CMI">	Champaign/Urbana, IL (CMI)	</option>	   
		<option value="CHS">	Charleston, SC (CHS)	</option>	   
		<option value="CRW">	Charleston, WV (CRW)	</option>	   
		<option value="CLT">	Charlotte, NC (CLT)	</option>	   
		<option value="CHO">	Charlottesville, VA (CHO)	</option>	   
		<option value="CHA">	Chattanooga, TN (CHA)	</option>	   
		<option value="CYF">	Chefornak, AK (CYF)	</option>	   
		<option value="VAK">	Chevak, AK (VAK)	</option>	   
		<option value="CYS">	Cheyenne, WY (CYS)	</option>	   
		<option value="CHI">	Chicago, IL - All airports (CHI)	</option>	   
		<option value="MDW">	Chicago, IL - Midway (MDW)	</option>	   
		<option value="ORD">	Chicago, IL - O'Hare (ORD)	</option>	   
		<option value="CKX">	Chicken, AK (CKX)	</option>	   
		<option value="CIC">	Chico, CA (CIC)	</option>	   
		<option value="KCG">	Chignik, AK - Fisheries (KCG)	</option>	   
		<option value="KCQ">	Chignik, AK - (KCQ)	</option>	   
		<option value="KCL">	Chignik, AK - Lagoon (KCL)	</option>	   
		<option value="CZN">	Chisana, AK (CZN)	</option>	   
		<option value="HIB">	Chisholm/Hibbing, MN (HIB)	</option>	   
		<option value="CHU">	Chuathbaluk, AK (CHU)	</option>	   
		<option value="CVG">	Cincinnati, OH (CVG)	</option>	   
		<option value="CHP">	Circle Hot Springs, AK (CHP)	</option>	   
		<option value="IRC">	Circle, AK (IRC)	</option>	   
		<option value="CLP">	Clarks Point, AK (CLP)	</option>	   
		<option value="CKB">	Clarksburg, WV (CKB)	</option>	   
		<option value="PIE">	Clearwater/St Petersburg, FL (PIE)	</option>	   
		<option value="CLE">	Cleveland, OH (CLE)	</option>	   
		<option value="CVN">	Clovis, NM (CVN)	</option>	   
		<option value="COD">	Cody/Yellowstone, WY (COD)	</option>	   
		<option value="CFA">	Coffee Point, AK (CFA)	</option>	   
		<option value="KCC">	Coffman Cove, AK (KCC)	</option>	   
		<option value="CDB">	Cold Bay, AK (CDB)	</option>	   
		<option value="CLL">	College Station, TX (CLL)	</option>	   
		<option value="COS">	Colorado Springs, CO (COS)	</option>	   
		<option value="COU">	Columbia, MO (COU)	</option>	   
		<option value="CAE">	Columbia, SC (CAE)	</option>	   
		<option value="CSG">	Columbus, GA (CSG)	</option>	   
		<option value="GTR">	Columbus, MS (GTR)	</option>	   
		<option value="CMH">	Columbus, OH (CMH)	</option>	   
		<option value="CCR">	Concord, CA (CCR)	</option>	   
		<option value="CNK">	Concordia, KS (CNK)	</option>	   
		<option value="QCE">	Copper Mountain, CO - Van service (QCE)	</option>	   
		<option value="CDV">	Cordova, AK (CDV)	</option>	   
		<option value="CRP">	Corpus Christi, TX (CRP)	</option>	   
		<option value="CEZ">	Cortez, CO (CEZ)	</option>	   
		<option value="CGA">	Craig, AK (CGA)	</option>	   
		<option value="CEC">	Crescent City, CA (CEC)	</option>	   
		<option value="CKO">	Crooked Creek, AK (CKO)	</option>	   
		<option value="CUW">	Cube Cove, AK (CUW)	</option>	   
		<option value="CBE"> 	Cumberland, MD (CBE) 	</option>	   
		<option value="DAL">	Dallas, TX - Love Field (DAL)	</option>	   
		<option value="DFW">	Dallas, TX - Dallas/Ft Worth Intl. (DFW)	</option>	   
		<option value="DAY">	Dayton, OH (DAY)	</option>	   
		<option value="DAB">	Daytona Beach, FL (DAB)	</option>	   
		<option value="DEC">	Decatur, IL (DEC)	</option>	   
		<option value="DRG">	Deering, AK (DRG)	</option>	   
		<option value="DRT">	Del Reo, TX (DRT)	</option>	   
		<option value="DJN">	Delta Junction, AK (DJN)	</option>	   
		<option value="DEN">	Denver, CO - International (DEN)	</option>	   
		<option value="QWM">	Denver, CO - Longmont Bus service (QWM)	</option>	   
		<option value="DSM">	Des Moines, IA (DSM)	</option>	   
		<option value="DTT">	Detroit, MI - All airports (DTT)	</option>	   
		<option value="DTW">	Detroit, MI - Metro/Wayne County (DTW)	</option>	   
		<option value="DVL">	Devil's Lake, ND (DVL)	</option>	   
		<option value="DIK">	Dickinson, ND (DIK)	</option>	   
		<option value="DLG">	Dillingham, AK (DLG)	</option>	   
		<option value="DDC">	Dodge City, KS (DDC)	</option>	   
		<option value="DHN">	Dothan, AL (DHN)	</option>	   
		<option value="DUJ">	Dubois, PA (DUJ)	</option>	   
		<option value="DBQ">	Dubuque, IA (DBQ)	</option>	   
		<option value="DLH">	Duluth, MN (DLH)	</option>	   
		<option value="DRO">	Durango, CO (DRO)	</option>	   
		<option value="RDU">	Durham, NC (RDU)	</option>	   
		<option value="RDU">	Durham/Raleigh, NC (RDU)	</option>	   
		<option value="DUT"> 	Dutch Harbor, AK (DUT) 	</option>	   
		<option value="ABE">	Easton, PA (ABE)	</option>	   
		<option value="EAU">	Eau Claire, WI (EAU)	</option>	   
		<option value="EDA">	Edna Bay, AK (EDA)	</option>	   
		<option value="EEK">	Eek, AK (EEK)	</option>	   
		<option value="KKU">	Ekuk, AK (KKU)	</option>	   
		<option value="KEK">	Ekwok, AK (KEK)	</option>	   
		<option value="IPL">	El Centro, CA (IPL)	</option>	   
		<option value="ELD">	El Dorado, AR (ELD)	</option>	   
		<option value="ELP">	El Paso, TX (ELP)	</option>	   
		<option value="ELV">	Elfin Cove, AK (ELV)	</option>	   
		<option value="ELI">	Elim, AK (ELI)	</option>	   
		<option value="EKO">	Elko, NV (EKO)	</option>	   
		<option value="ELM">	Elmira, NY (ELM)	</option>	   
		<option value="LYU">	Ely, MN (LYU)	</option>	   
		<option value="EMK">	Emmonak, AK (EMK)	</option>	   
		<option value="BGM">	Endicott, NY (BGM)	</option>	   
		<option value="WDG">	Enid, OK (WDG)	</option>	   
		<option value="ERI">	Erie, PA (ERI)	</option>	   
		<option value="ESC">	Escanaba, MI (ESC)	</option>	   
		<option value="EUG">	Eugene, OR (EUG)	</option>	   
		<option value="ACV">	Eureka/Arcata, CA (ACV)	</option>	   
		<option value="EUE">	Eureka, NV (EUE)	</option>	   
		<option value="EVV"> 	Evansville, IN (EVV) 	</option>	   
		<option value="FAI">	Fairbanks, AK (FAI)	</option>	   
		<option value="FAR">	Fargo, ND (FAR)	</option>	   
		<option value="FMN">	Farmington, NM (FMN)	</option>	   
		<option value="FYV">	Fayetteville, AR - Municipal/Drake (FYV)	</option>	   
		<option value="XNA">	Fayetteville, AR - Northwest Arkansas Regional (XNA)	</option>	   
		<option value="FAY">	Fayetteville, NC (FAY)	</option>	   
		<option value="FLG">	Flagstaff, AZ (FLG)	</option>	   
		<option value="FNT">	Flint, MI (FNT)	</option>	   
		<option value="FLO">	Florence, SC (FLO)	</option>	   
		<option value="MSL">	Florence/Muscle Shoals/Sheffield, AL (MSL)	</option>	   
		<option value="FNL">	Fort Collins/Loveland, CO - Municipal Airport (FNL)	</option>	   
		<option value="QWF">	Fort Collins/Loveland, CO - Bus service (QWF)	</option>	   
		<option value="FOD">	Fort Dodge, IA (FOD)	</option>	   
		<option value="FLL">	Fort Lauderdale, FL (FLL)	</option>	   
		<option value="TBN">	Fort Leonard Wood, MO (TBN)	</option>	   
		<option value="RSW">	Fort Myers, FL (RSW)	</option>	   
		<option value="FSM">	Fort Smith, AR (FSM)	</option>	   
		<option value="VPS">	Fort Walton Beach, FL (VPS)	</option>	   
		<option value="FWA">	Fort Wayne, IN (FWA)	</option>	   
		<option value="DFW">	Fort Worth/Dallas, TX (DFW)	</option>	   
		<option value="FKL">	Franklin, PA (FKL)	</option>	   
		<option value="FAT"> 	Fresno, CA (FAT) 	</option>	   
		<option value="GNV">	Gainesville, FL (GNV)	</option>	   
		<option value="GUP">	Gallup, NM (GUP)	</option>	   
		<option value="GCK">	Garden City, KS (GCK)	</option>	   
		<option value="GYY">	Gary, IN (GYY)	</option>	   
		<option value="GCC">	Gillette, WY (GCC)	</option>	   
		<option value="GGG">	Gladewater/Kilgore, TX (GGG)	</option>	   
		<option value="GGW">	Glasgow, MT (GGW)	</option>	   
		<option value="GDV">	Glendive, MT (GDV)	</option>	   
		<option value="GLV">	Golovin, AK (GLV)	</option>	   
		<option value="GNU">	Goodnews Bay, AK (GNU)	</option>	   
		<option value="JGC">	Grand Canyon, AZ - Heliport (JGC)	</option>	   
		<option value="GCN">	Grand Canyon, AZ - National Park (GCN)	</option>	   
		<option value="GFK">	Grand Forks, ND (GFK)	</option>	   
		<option value="GRI">	Grand Island, NE (GRI)	</option>	   
		<option value="GJT">	Grand Junction, CO (GJT)	</option>	   
		<option value="GRR">	Grand Rapids, MI (GRR)	</option>	   
		<option value="GPZ">	Grand Rapids, MN (GPZ)	</option>	   
		<option value="KGX">	Grayling, AK (KGX)	</option>	   
		<option value="GTF">	Great Falls, MT (GTF)	</option>	   
		<option value="GRB">	Green Bay, WI (GRB)	</option>	   
		<option value="GSO">	Greensboro, NC (GSO)	</option>	   
		<option value="GLH">	Greenville, MS (GLH)	</option>	   
		<option value="PGV">	Greenville, NC (PGV)	</option>	   
		<option value="GSP">	Greenville/Spartanburg, SC (GSP)	</option>	   
		<option value="GON">	Groton/New London, CT (GON)	</option>	   
		<option value="GPT">	Gulfport, MS (GPT)	</option>	   
		<option value="GUC">	Gunnison, CO (GUC)	</option>	   
		<option value="GST"> 	Gustavus, AK (GST) 	</option>	   
		<option value="HGR">	Hagerstown, MD (HGR)	</option>	   
		<option value="SUN">	Hailey, ID (SUN)	</option>	   
		<option value="HNS">	Haines, AK (HNS)	</option>	   
		<option value="PHF">	Hampton, VA (PHF)	</option>	   
		<option value="HNM">	Hana, HI - Island of Maui (HNM)	</option>	   
		<option value="PAK">	Hanapepe, HI (PAK)	</option>	   
		<option value="CMX">	Hancock, MI (CMX)	</option>	   
		<option value="LEB">	Hanover, NH (LEB)	</option>	   
		<option value="HRL">	Harlingen, TX (HRL)	</option>	   
		<option value="MDT">	Harrisburg, PA (MDT)	</option>	   
		<option value="HRO">	Harrison, AR (HRO)	</option>	   
		<option value="BDL">	Hartford, CT (BDL)	</option>	   
		<option value="HAE">	Havasupai, AZ (HAE)	</option>	   
		<option value="HVR">	Havre, MT (HVR)	</option>	   
		<option value="HDN">	Hayden, CO (HDN)	</option>	   
		<option value="HYS">	Hays, KS (HYS)	</option>	   
		<option value="HKB">	Healy Lake, AK (HKB)	</option>	   
		<option value="HLN">	Helena, MT (HLN)	</option>	   
		<option value="AVL">	Hendersonville, NC (AVL)	</option>	   
		<option value="HIB">	Hibbing/Chisholm, MN (HIB)	</option>	   
		<option value="HKY">	Hickory, NC (HKY)	</option>	   
		<option value="GSO">	High Point, NC (GSO)	</option>	   
		<option value="ITO">	Hilo, HI - Island of Hawaii (ITO)	</option>	   
		<option value="HHH">	Hilton Head, SC (HHH)	</option>	   
		<option value="HBB">	Hobbs, NM (HBB)	</option>	   
		<option value="HYL">	Hollis, AK (HYL)	</option>	   
		<option value="HCR">	Holy Cross, AK (HCR)	</option>	   
		<option value="HOM">	Homer, AK (HOM)	</option>	   
		<option value="HNL">	Honolulu, HI - Island of Oahu (HNL)	</option>	   
		<option value="MKK">	Hoolehua, HI - Island of Molokai (MKK)	</option>	   
		<option value="HNH">	Hoonah, AK (HNH)	</option>	   
		<option value="HPB">	Hooper Bay, AK (HPB)	</option>	   
		<option value="HOT">	Hot Springs, AR (HOT)	</option>	   
		<option value="HOU">	Houston, TX - All airports (HOU)	</option>	   
		<option value="HOU">	Houston, TX - Hobby (HOU)	</option>	   
		<option value="IAH">	Houston, TX - Intercontinental (IAH)	</option>	   
		<option value="HUS">	Hughes, AK (HUS)	</option>	   
		<option value="HTS">	Huntington, WV/Ashland, KY (HTS)	</option>	   
		<option value="HSV">	Huntsville, AL (HSV)	</option>	   
		<option value="HON">	Huron, SD (HON)	</option>	   
		<option value="HSL">	Huslia, AK (HSL)	</option>	   
		<option value="HYA">	Hyannis, MA (HYA)	</option>	   
		<option value="HYG"> 	Hydaburg, AK (HYG) 	</option>	   
		<option value="IDA">	Idaho Falls, ID (IDA)	</option>	   
		<option value="IGG">	Igiugig, AK (IGG)	</option>	   
		<option value="ILI">	Iliamna, AK (ILI)	</option>	   
		<option value="IPL">	Imperial, CA (IPL)	</option>	   
		<option value="IND">	Indianapolis, IN (IND)	</option>	   
		<option value="INL">	International Falls, MN (INL)	</option>	   
		<option value="IYK">	Inyokern, CA (IYK)	</option>	   
		<option value="IMT">	Iron Mountain, MI (IMT)	</option>	   
		<option value="IWD">	Ironwood, MI (IWD)	</option>	   
		<option value="ISP">	Islip, NY (ISP)	</option>	   
		<option value="ITH"> 	Ithaca, NY (ITH) 	</option>	   
		<option value="JAC">	Jackson Hole, WY (JAC)	</option>	   
		<option value="JAN">	Jackson, MS (JAN)	</option>	   
		<option value="MKL">	Jackson, TN (MKL)	</option>	   
		<option value="JAX">	Jacksonville, FL (JAX)	</option>	   
		<option value="OAJ">	Jacksonville, NC (OAJ)	</option>	   
		<option value="JMS">	Jamestown, ND (JMS)	</option>	   
		<option value="JHW">	Jamestown, NY (JHW)	</option>	   
		<option value="JVL">	Janesville, WI (JVL)	</option>	   
		<option value="BGM">	Johnson City, NY (BGM)	</option>	   
		<option value="TRI">	Johnson City, TN (TRI)	</option>	   
		<option value="JST">	Johnstown, PA (JST)	</option>	   
		<option value="JBR">	Jonesboro, AR (JBR)	</option>	   
		<option value="JLN">	Joplin, MO (JLN)	</option>	   
		<option value="JNU"> 	Juneau, AK (JNU) 	</option>	   
		<option value="OGG">	Kahului, HI - Island of Maui, (OGG)	</option>	   
		<option value="KAE">	Kake, AK (KAE)	</option>	   
		<option value="KNK">	Kakhonak, AK (KNK)	</option>	   
		<option value="AZO">	Kalamazoo, MI (AZO)	</option>	   
		<option value="LUP">	Kalaupapa, HI - Island of Molokai, (LUP)	</option>	   
		<option value="KLG">	Kalskag, AK (KLG)	</option>	   
		<option value="KAL">	Kaltag, AK (KAL)	</option>	   
		<option value="MUE">	Kamuela, HI - Island of Hawaii, (MUE)	</option>	   
		<option value="MCI">	Kansas City, MO (MCI)	</option>	   
		<option value="JHM">	Kapalua, HI - Island of Maui, (JHM)	</option>	   
		<option value="KXA">	Kasaan, AK (KXA)	</option>	   
		<option value="KUK">	Kasigluk, AK (KUK)	</option>	   
		<option value="LIH">	Kauai Island/Lihue, HI (LIH)	</option>	   
		<option value="EAR">	Kearney, NE (EAR)	</option>	   
		<option value="EEN">	Keene, NH (EEN)	</option>	   
		<option value="ENA">	Kenai, AK (ENA)	</option>	   
		<option value="KTN">	Ketchikan, AK (KTN)	</option>	   
		<option value="EYW">	Key West, FL (EYW)	</option>	   
		<option value="QKS">	Keystone, CO - Van service (QKS)	</option>	   
		<option value="IAN">	Kiana, AK (IAN)	</option>	   
		<option value="GGG">	Kilgore/Gladewater, TX (GGG)	</option>	   
		<option value="ILE">	Killeen, TX (ILE)	</option>	   
		<option value="KVC">	King Cove, AK (KVC)	</option>	   
		<option value="AKN">	King Salmon, AK (AKN)	</option>	   
		<option value="IGM">	Kingman, AZ (IGM)	</option>	   
		<option value="TRI">	Kingsport, TN (TRI)	</option>	   
		<option value="KPN">	Kipnuk, AK (KPN)	</option>	   
		<option value="IRK">	Kirksville, MO (IRK)	</option>	   
		<option value="KVL">	Kivalina, AK (KVL)	</option>	   
		<option value="LMT">	Klamath Falls, OR (LMT)	</option>	   
		<option value="KLW">	Klawock, AK (KLW)	</option>	   
		<option value="TYS">	Knoxville, TN (TYS)	</option>	   
		<option value="OBU">	Kobuk, AK (OBU)	</option>	   
		<option value="ADQ">	Kodiak, AK (ADQ)	</option>	   
		<option value="KOA">	Kona, HI - Island of Hawaii (KOA)	</option>	   
		<option value="KKH">	Kongiganak, AK (KKH)	</option>	   
		<option value="KOT">	Kotlik, AK (KOT)	</option>	   
		<option value="OTZ">	Kotzebue, AK (OTZ)	</option>	   
		<option value="KYU">	Koyukuk, AK (KYU)	</option>	   
		<option value="KWT">	Kwethluk, AK (KWT)	</option>	   
		<option value="KWK"> 	Kwigillingok, AK (KWK) 	</option>	   
		<option value="LSE">	La Crosse, WI (LSE)	</option>	   
		<option value="LAF">	Lafayette, IN (LAF)	</option>	   
		<option value="LFT">	Lafayette, LA (LFT)	</option>	   
		<option value="LCH">	Lake Charles, LA (LCH)	</option>	   
		<option value="HII">	Lake Havasu City, AZ (HII)	</option>	   
		<option value="LMA">	Lake Minchumina, AK (LMA)	</option>	   
		<option value="LNY">	Lanai City, HI - Island of Lanai (LNY)	</option>	   
		<option value="LNS">	Lancaster, PA (LNS)	</option>	   
		<option value="LAN">	Lansing, MI (LAN)	</option>	   
		<option value="LAR">	Laramie, WY (LAR)	</option>	   
		<option value="LRD">	Laredo, TX (LRD)	</option>	   
		<option value="LAS">	Las Vegas, NV (LAS)	</option>	   
		<option value="LBE">	Latrobe, PA (LBE)	</option>	   
		<option value="PIB">	Laurel, MS (PIB)	</option>	   
		<option value="LAW">	Lawton, OK (LAW)	</option>	   
		<option value="LEB">	Lebanon, NH (LEB)	</option>	   
		<option value="KLL">	Levelock, AK (KLL)	</option>	   
		<option value="LWB">	Lewisburg, WV (LWB)	</option>	   
		<option value="LWS">	Lewiston, ID (LWS)	</option>	   
		<option value="LWT">	Lewistown, MT (LWT)	</option>	   
		<option value="LEX">	Lexington, KY (LEX)	</option>	   
		<option value="LBL">	Liberal, KS (LBL)	</option>	   
		<option value="LIH">	Lihue, HI - Island of Kaui (LIH)	</option>	   
		<option value="LNK">	Lincoln, NE (LNK)	</option>	   
		<option value="LIT">	Little Rock, AR (LIT)	</option>	   
		<option value="LGB">	Long Beach, CA (LGB)	</option>	   
		<option value="GGG">	Longview, TX (GGG)	</option>	   
		<option value="LPS">	Lopez Island, WA (LPS)	</option>	   
		<option value="LAX">	Los Angeles, CA (LAX)	</option>	   
		<option value="SDF">	Louisville, KY (SDF)	</option>	   
		<option value="FNL"> 	Loveland/Fort Collins, CO - Municipal Airport (FNL) 	</option>	   
		<option value="QWF">	Loveland/Fort Collins, CO - Bus service (QWF)	</option>	   
		<option value="LBB"> 	Lubbock, TX (LBB) 	</option>	   
		<option value="MCN">	Macon, GA (MCN)	</option>	   
		<option value="MSN">	Madison, WI (MSN)	</option>	   
		<option value="MDJ">	Madras, OR (MDJ)	</option>	   
		<option value="MHT">	Manchester, NH (MHT)	</option>	   
		<option value="MHK">	Manhattan, KS (MHK)	</option>	   
		<option value="MBL">	Manistee, MI (MBL)	</option>	   
		<option value="MKT">	Mankato, MN (MKT)	</option>	   
		<option value="MLY">	Manley Hot Springs, AK (MLY)	</option>	   
		<option value="KMO">	Manokotak, AK (KMO)	</option>	   
		<option value="PKB">	Marietta, OH/Parkersburg, WV (PKB)	</option>	   
		<option value="MWA">	Marion, IL (MWA)	</option>	   
		<option value="MQT">	Marquette, MI (MQT)	</option>	   
		<option value="MLL">	Marshall, AK (MLL)	</option>	   
		<option value="MVY">	Martha's Vineyard, MA (MVY)	</option>	   
		<option value="AOO">	Martinsburg, PA (AOO)	</option>	   
		<option value="MCW">	Mason City, IA (MCW)	</option>	   
		<option value="MSS">	Massena, NY (MSS)	</option>	   
		<option value="OGG">	Maui, HI (OGG)	</option>	   
		<option value="MFE">	Mcallen, TX (MFE)	</option>	   
		<option value="MCK">	Mccook, NE (MCK)	</option>	   
		<option value="MCG">	Mcgrath, AK (MCG)	</option>	   
		<option value="MFR">	Medford, OR (MFR)	</option>	   
		<option value="MYU">	Mekoryuk, AK (MYU)	</option>	   
		<option value="MLB">	Melbourne, FL (MLB)	</option>	   
		<option value="MEM">	Memphis, TN (MEM)	</option>	   
		<option value="MCE">	Merced, CA (MCE)	</option>	   
		<option value="MEI">	Meridian, MS (MEI)	</option>	   
		<option value="MTM">	Metlakatla, AK (MTM)	</option>	   
		<option value="WMK">	Meyers Chuck, AK (WMK)	</option>	   
		<option value="MIA">	Miami, FL - International (MIA)	</option>	   
		<option value="MPB">	Miami, FL - Sea Plane Base (MPB)	</option>	   
		<option value="MBS">	Midland, MI (MBS)	</option>	   
		<option value="MAF">	Midland/Odessa, TX (MAF)	</option>	   
		<option value="MLS">	Miles City, MT (MLS)	</option>	   
		<option value="MKE">	Milwaukee, WI (MKE)	</option>	   
		<option value="MSP">	Minneapolis, MN (MSP)	</option>	   
		<option value="MOT">	Minot, ND (MOT)	</option>	   
		<option value="MNT">	Minto, AK (MNT)	</option>	   
		<option value="MFE">	Mission, TX (MFE)	</option>	   
		<option value="MSO">	Missoula, MT (MSO)	</option>	   
		<option value="CNY">	Moab, UT (CNY)	</option>	   
		<option value="MOB">	Mobile, AL (MOB)	</option>	   
		<option value="MOD">	Modesto, CA (MOD)	</option>	   
		<option value="MLI">	Moline, IL (MLI)	</option>	   
		<option value="MLU">	Monroe, LA (MLU)	</option>	   
		<option value="MRY">	Monterey, CA (MRY)	</option>	   
		<option value="MGM">	Montgomery, AL (MGM)	</option>	   
		<option value="MTJ">	Montrose, CO (MTJ)	</option>	   
		<option value="MGW">	Morgantown, WV (MGW)	</option>	   
		<option value="MWH">	Moses Lake, WA (MWH)	</option>	   
		<option value="WMH">	Mountain Home, AR (WMH)	</option>	   
		<option value="MOU">	Mountain Village, AK (MOU)	</option>	   
		<option value="MSL">	Muscle Shoals, AL (MSL)	</option>	   
		<option value="MKG">	Muskegon, MI (MKG)	</option>	   
		<option value="MYR"> 	Myrtle Beach, SC (MYR) 	</option>	   
		<option value="ACK">	Nantucket, MA (ACK)	</option>	   
		<option value="WNA">	Napakiak, AK (WNA)	</option>	   
		<option value="PKA">	Napaskiak, AK (PKA)	</option>	   
		<option value="APF">	Naples, FL (APF)	</option>	   
		<option value="BNA">	Nashville, TN (BNA)	</option>	   
		<option value="NKI">	Naukiti, AK (NKI)	</option>	   
		<option value="NLG">	Nelson Lagoon, AK (NLG)	</option>	   
		<option value="NCN">	New Chenega, AK (NCN)	</option>	   
		<option value="HVN">	New Haven, CT (HVN)	</option>	   
		<option value="KGK">	New Koliganek, AK (KGK)	</option>	   
		<option value="GON">	New London/Groton (GON)	</option>	   
		<option value="MSY">	New Orleans, LA (MSY)	</option>	   
		<option value="KNW">	New Stuyahok, AK (KNW)	</option>	   
		<option value="NYC">	New York, NY - All airports (NYC)	</option>	   
		<option value="JFK">	New York, NY - Kennedy (JFK)	</option>	   
		<option value="LGA">	New York, NY - La Guardia (LGA)	</option>	   
		<option value="EWR">	Newark, NJ (EWR)	</option>	   
		<option value="SWF">	Newburgh/Stewart Field, NY (SWF)	</option>	   
		<option value="PHF">	Newport News, VA (PHF)	</option>	   
		<option value="WWT">	Newtok, AK (WWT)	</option>	   
		<option value="NME">	Nightmute, AK (NME)	</option>	   
		<option value="NIB">	Nikolai, AK (NIB)	</option>	   
		<option value="IKO">	Nikolski, AK (IKO)	</option>	   
		<option value="WTK">	Noatak, AK (WTK)	</option>	   
		<option value="OME">	Nome, AK (OME)	</option>	   
		<option value="NNL">	Nondalton, AK (NNL)	</option>	   
		<option value="ORV">	Noorvik, AK (ORV)	</option>	   
		<option value="OFK">	Norfolk, NE (OFK)	</option>	   
		<option value="ORF">	Norfolk, VA (ORF)	</option>	   
		<option value="OTH">	North Bend, OR (OTH)	</option>	   
		<option value="LBF">	North Platte, NE (LBF)	</option>	   
		<option value="ORT">	Northway, AK (ORT)	</option>	   
		<option value="NUI">	Nuiqsut, AK (NUI)	</option>	   
		<option value="NUL">	Nulato, AK (NUL)	</option>	   
		<option value="NUP"> 	Nunapitchuk, AK (NUP) 	</option>	   
		<option value="OAK">	Oakland, CA (OAK)	</option>	   
		<option value="MAF">	Odessa/Midland, TX (MAF)	</option>	   
		<option value="OGS">	Ogdensburg, NY (OGS)	</option>	   
		<option value="OKC">	Oklahoma City, OK (OKC)	</option>	   
		<option value="OMA">	Omaha, NE (OMA)	</option>	   
		<option value="ONT">	Ontario, CA (ONT)	</option>	   
		<option value="SNA">	Orange County, CA (SNA)	</option>	   
		<option value="ORL">	Orlando, FL - Herndon (ORL)	</option>	   
		<option value="MCO">	Orlando, FL - International (MCO)	</option>	   
		<option value="OSH">	Oshkosh, WI (OSH)	</option>	   
		<option value="OTM">	Ottumwa, IA (OTM)	</option>	   
		<option value="OWB">	Owensboro, KY (OWB)	</option>	   
		<option value="OXR"> 	Oxnard/Ventura, CA (OXR) 	</option>	   
		<option value="PAH">	Paducah, KY (PAH)	</option>	   
		<option value="PGA">	Page, AZ (PGA)	</option>	   
		<option value="PSP">	Palm Springs, CA (PSP)	</option>	   
		<option value="PFN">	Panama City, FL (PFN)	</option>	   
		<option value="PKB">	Parkersburg, WV/Marietta, OH (PKB)	</option>	   
		<option value="PSC">	Pasco, WA (PSC)	</option>	   
		<option value="PDB">	Pedro Bay, AK (PDB)	</option>	   
		<option value="PEC">	Pelican, AK (PEC)	</option>	   
		<option value="PLN">	Pellston, MI (PLN)	</option>	   
		<option value="PDT">	Pendleton, OR (PDT)	</option>	   
		<option value="PNS">	Pensacola, FL (PNS)	</option>	   
		<option value="PIA">	Peoria, IL (PIA)	</option>	   
		<option value="KPV">	Perryville, AK (KPV)	</option>	   
		<option value="PSG">	Petersburg, AK (PSG)	</option>	   
		<option value="PHL">	Philadelphia, PA - International (PHL)	</option>	   
		<option value="TTN">	Philadelphia, PA - Trenton/Mercer NJ (TTN)	</option>	   
		<option value="PHX">	Phoenix, AZ (PHX)	</option>	   
		<option value="PIR">	Pierre, SD (PIR)	</option>	   
		<option value="UGB">	Pilot Point, AK - Ugashnik Bay (UGB)</option>	   
		<option value="PIP">	Pilot Point, AK (PIP)	</option>	   
		<option value="PQS">	Pilot Station, AK (PQS)	</option>	   
		<option value="PIT">	Pittsburgh, PA (PIT)	</option>	   
		<option value="PTU">	Platinum, AK (PTU)	</option>	   
		<option value="PLB">	Plattsburgh, NY (PLB)	</option>	   
		<option value="PIH">	Pocatello, ID (PIH)	</option>	   
		<option value="KPB">	Point Baker, AK (KPB)	</option>	   
		<option value="PHO">	Point Hope, AK (PHO)	</option>	   
		<option value="PIZ">	Point Lay, AK (PIZ)	</option>	   
		<option value="PNC">	Ponca City, OK (PNC)	</option>	   
		<option value="PSE">	Ponce, Puerto Rico (PSE)	</option>	   
		<option value="PTA">	Port Alsworth, AK (PTA)	</option>	   
		<option value="CLM">	Port Angeles, WA (CLM)	</option>	   
		<option value="BPT">	Port Arthur/Beaumont, TX (BPT)	</option>	   
		<option value="KPC">	Port Clarence, AK (KPC)	</option>	   
		<option value="PTH">	Port Heiden, AK (PTH)	</option>	   
		<option value="PML">	Port Moller, AK (PML)	</option>	   
		<option value="PPV">	Port Protection, AK (PPV)	</option>	   
		<option value="PCA">	Portage Creek, AK (PCA)	</option>	   
		<option value="PWM">	Portland, ME (PWM)	</option>	   
		<option value="PDX">	Portland, OR (PDX)	</option>	   
		<option value="PSM">	Portsmouth, NH (PSM)	</option>	   
		<option value="POU">	Poughkeepsie, NY (POU)	</option>	   
		<option value="PRC">	Prescott, AZ (PRC)	</option>	   
		<option value="PQI">	Presque Isle, ME (PQI)	</option>	   
		<option value="BLF">	Princeton, WV (BLF)	</option>	   
		<option value="PVD">	Providence, RI (PVD)	</option>	   
		<option value="PVC">	Provincetown, MA (PVC)	</option>	   
		<option value="SCC">	Prudhoe Bay/Deadhorse, AK (SCC)	</option>	   
		<option value="PUB">	Pueblo, CO (PUB)	</option>	   
		<option value="PUW"> 	Pullman, WA (PUW) 	</option>	   
		<option value="UIN">	Quincy, IL (UIN)	</option>	   
		<option value="KWN"> 	Quinhagak, AK (KWN) 	</option>	   
		<option value="RDU">	Raleigh/Durham, NC (RDU)	</option>	   
		<option value="RMP">	Rampart, AK (RMP)	</option>	   
		<option value="RAP">	Rapid City, SD (RAP)	</option>	   
		<option value="RDG">	Reading, PA (RDG)	</option>	   
		<option value="RDV">	Red Devil, AK (RDV)	</option>	   
		<option value="RDD">	Redding, CA (RDD)	</option>	   
		<option value="RDM">	Redmond, OR (RDM)	</option>	   
		<option value="RNO">	Reno, NV (RNO)	</option>	   
		<option value="RHI">	Rhinelander, WI, (RHI)	</option>	   
		<option value="RIC">	Richmond, VA (RIC)	</option>	   
		<option value="RIW">	Riverton, WY (RIW)	</option>	   
		<option value="ROA">	Roanoke, VA (ROA)	</option>	   
		<option value="RCE">	Roche Harbor, WA (RCE)	</option>	   
		<option value="RST">	Rochester, MN (RST)	</option>	   
		<option value="ROC">	Rochester, NY (ROC)	</option>	   
		<option value="RKS">	Rock Springs, WY (RKS)	</option>	   
		<option value="RFD">	Rockford, IL (RFD)	</option>	   
		<option value="RKD">	Rockland, ME (RKD)	</option>	   
		<option value="RSJ">	Rosario, WA (RSJ)	</option>	   
		<option value="ROW">	Roswell, NM (ROW)	</option>	   
		<option value="RBY">	Ruby, AK (RBY)	</option>	   
		<option value="RSH">	Russian Mission, AK (RSH)	</option>	   
		<option value="RUT"> 	Rutland, VT (RUT) 	</option>	   
		<option value="SMF">	Sacramento, CA (SMF)	</option>	   
		<option value="MBS">	Saginaw, MI (MBS)	</option>	   
		<option value="STC">	Saint Cloud, MN (STC)	</option>	   
		<option value="STG">	Saint George Island, AK (STG)	</option>	   
		<option value="SGU">	Saint George, UT (SGU)	</option>	   
		<option value="STL">	Saint Louis, MO (STL)	</option>	   
		<option value="KSM">	Saint Mary's, AK (KSM)	</option>	   
		<option value="SMK">	Saint Michael, AK (SMK)	</option>	   
		<option value="SNP">	Saint Paul Island, AK (SNP)	</option>	   
		<option value="SLE">	Salem, OR (SLE)	</option>	   
		<option value="SLN">	Salina, KS (SLN)	</option>	   
		<option value="SBY">	Salisbury-Ocean City, MD (SBY)	</option>	   
		<option value="SLC">	Salt Lake City, UT (SLC)	</option>	   
		<option value="SJT">	San Angelo, TX (SJT)	</option>	   
		<option value="SAT">	San Antonio, TX (SAT)	</option>	   
		<option value="SAN">	San Diego, CA (SAN)	</option>	   
		<option value="SFO">	San Francisco, CA (SFO)	</option>	   
		<option value="SJC">	San Jose, CA (SJC)	</option>	   
		<option value="SJU">	San Juan, Puerto Rico (SJU)	</option>	   
		<option value="SBP">	San Luis Obispo, CA (SBP)	</option>	   
		<option value="SDP">	Sand Point, AK (SDP)	</option>	   
		<option value="SFB">	Sanford, FL (SFB)	</option>	   
		<option value="SNA">	Santa Ana, CA (SNA)	</option>	   
		<option value="SBA">	Santa Barbara, CA (SBA)	</option>	   
		<option value="SAF">	Santa Fe, NM (SAF)	</option>	   
		<option value="SMX">	Santa Maria, CA (SMX)	</option>	   
		<option value="STS">	Santa Rosa, CA (STS)	</option>	   
		<option value="SLK">	Saranac Lake, NY (SLK)	</option>	   
		<option value="SRQ">	Sarasota, FL (SRQ)	</option>	   
		<option value="CIU">	Sault Ste Marie, MI, (CIU)	</option>	   
		<option value="SAV">	Savannah, GA (SAV)	</option>	   
		<option value="SVA">	Savoonga, AK (SVA)	</option>	   
		<option value="SCM">	Scammon Bay, AK (SCM)	</option>	   
		<option value="BFF">	Scottsbluff, NE (BFF)	</option>	   
		<option value="AVP">	Scranton, PA (AVP)	</option>	   
		<option value="LKE">	Seattle, WA - Lake Union SPB (LKE)	</option>	   
		<option value="SEA">	Seattle, WA - Seattle/Tacoma International (SEA)	</option>	   
		<option value="WLK">	Selawik, AK (WLK)	</option>	   
		<option value="SWD">	Seward, AK (SWD)	</option>	   
		<option value="SHX">	Shageluk, AK (SHX)	</option>	   
		<option value="SKK">	Shaktoolik, AK (SKK)	</option>	   
		<option value="MSL">	Sheffield/Florence/Muscle Shoals, AL (MSL)	</option>	   
		<option value="SXP">	Sheldon Point, AK (SXP)	</option>	   
		<option value="SHR">	Sheridan, WY (SHR)	</option>	   
		<option value="SHH">	Shishmaref, AK (SHH)	</option>	   
		<option value="SHV">	Shreveport, LA (SHV)	</option>	   
		<option value="SHG">	Shungnak, AK (SHG)	</option>	   
		<option value="SVC">	Silver City, NM (SVC)	</option>	   
		<option value="SUX">	Sioux City, IA (SUX)	</option>	   
		<option value="FSD">	Sioux Falls, SD (FSD)	</option>	   
		<option value="SIT">	Sitka, AK (SIT)	</option>	   
		<option value="SGY">	Skagway, AK (SGY)	</option>	   
		<option value="SLQ">	Sleetmore, AK (SLQ)	</option>	   
		<option value="SBN">	South Bend, IN (SBN)	</option>	   
		<option value="WSN">	South Naknek, AK (WSN)	</option>	   
		<option value="SOP">	Southern Pines, NC (SOP)	</option>	   
		<option value="GSP">	Spartanburg/Greenville, SC (GSP)	</option>	   
		<option value="GEG">	Spokane, WA (GEG)	</option>	   
		<option value="SPI">	Springfield, IL (SPI)	</option>	   
		<option value="SGF">	Springfield, MO (SGF)	</option>	   
		<option value="PIE">	St Petersburg/Clearwater, FL (PIE)	</option>	   
		<option value="SCE">	State College/University Park, PA (SCE)	</option>	   
		<option value="SHD">	Staunton, VA (SHD)	</option>	   
		<option value="SBS">	Steamboat Springs, CO (SBS)	</option>	   
		<option value="WBB">	Stebbins, AK (WBB)	</option>	   
		<option value="CWA">	Stevens Point/Wausau, WI (CWA)	</option>	   
		<option value="SVS">	Stevens Village, AK (SVS)	</option>	   
		<option value="SWF">	Stewart Field/Newburgh, NY (SWF)	</option>	   
		<option value="SCK">	Stockton, CA (SCK)	</option>	   
		<option value="SRV">	Stony River, AK (SRV)	</option>	   
		<option value="SUN">	Sun Valley, ID (SUN)	</option>	   
		<option value="SYR"> 	Syracuse, NY (SYR) 	</option>	   
		<option value="TCT">	Takotna, AK (TCT)	</option>	   
		<option value="TKA">	Talkeetna, AK (TKA)	</option>	   
		<option value="TLH">	Tallahassee, FL (TLH)	</option>	   
		<option value="TPA">	Tampa, FL (TPA)	</option>	   
		<option value="TAL">	Tanana, AK (TAL)	</option>	   
		<option value="TSM">	Taos, NM (TSM)	</option>	   
		<option value="TEK">	Tatitlek, AK (TEK)	</option>	   
		<option value="KTS">	Teller Mission, AK (KTS)	</option>	   
		<option value="TEX">	Telluride, CO (TEX)	</option>	   
		<option value="TKE">	Tenakee Springs, AK (TKE)	</option>	   
		<option value="HUF">	Terre Haute, IN (HUF)	</option>	   
		<option value="TEH">	Tetlin, AK (TEH)	</option>	   
		<option value="TXK">	Texarkana, AR (TXK)	</option>	   
		<option value="TVF">	Thief River Falls, MN (TVF)	</option>	   
		<option value="KTB">	Thorne Bay, AK (KTB)	</option>	   
		<option value="TNC">	Tin City, AK (TNC)	</option>	   
		<option value="TOG">	Togiak Village, AK (TOG)	</option>	   
		<option value="TKJ">	Tok, AK (TKJ)	</option>	   
		<option value="OOK">	Toksook Bay, AK (OOK)	</option>	   
		<option value="TOL">	Toledo, OH (TOL)	</option>	   
		<option value="FOE">	Topeka, KS (FOE)	</option>	   
		<option value="TVC">	Traverse City, MI (TVC)	</option>	   
		<option value="TTN">	Trenton/Mercer, NJ (TTN)	</option>	   
		<option value="TUS">	Tucson, AZ (TUS)	</option>	   
		<option value="TUL">	Tulsa, OK (TUL)	</option>	   
		<option value="TLT">	Tuluksak, AK (TLT)	</option>	   
		<option value="WTL">	Tuntutuliak, AK (WTL)	</option>	   
		<option value="TNK">	Tununak, AK (TNK)	</option>	   
		<option value="TUP">	Tupelo, MS (TUP)	</option>	   
		<option value="TCL">	Tuscaloosa, AL (TCL)	</option>	   
		<option value="TWF">	Twin Falls, ID (TWF)	</option>	   
		<option value="TWA">	Twin Hills, AK (TWA)	</option>	   
		<option value="TYR"> 	Tyler, TX (TYR) 	</option>	   
		<option value="UNK">	Unalakleet, AK (UNK)	</option>	   
		<option value="CMI">	Urbana/Champaign, IL (CMI)	</option>	   
		<option value="UCA">	Utica, NY (UCA)	</option>	   
		<option value="UTO"> 	Utopia Creek, AK (UTO) 	</option>	   
		<option value="EGE">	Vail, CO - Eagle County Airport (EGE)	</option>	   
		<option value="QBF">	Vail, CO - Van service (QBF)	</option>	   
		<option value="VDZ">	Valdez, AK (VDZ)	</option>	   
		<option value="VLD">	Valdosta, GA (VLD)	</option>	   
		<option value="VPS">	Valparaiso, FL (VPS)	</option>	   
		<option value="VEE">	Venetie, AK (VEE)	</option>	   
		<option value="OXR">	Ventura/Oxnard, CA (OXR)	</option>	   
		<option value="VEL">	Vernal, UT (VEL)	</option>	   
		<option value="VCT">	Victoria, TX (VCT)	</option>	   
		<option value="VIS"> 	Visalia, CA (VIS) 	</option>	   
		<option value="ACT">	Waco, TX (ACT)	</option>	   
		<option value="AIN">	Wainwright, AK (AIN)	</option>	   
		<option value="WAA">	Wales, AK (WAA)	</option>	   
		<option value="ALW">	Walla Walla, WA (ALW)	</option>	   
		<option value="WAS">	Washington DC - All airports (WAS)	</option>	   
		<option value="IAD">	Washington DC - Dulles (IAD)	</option>	   
		<option value="DCA">	Washington DC - National (DCA)	</option>	   
		<option value="KWF">	Waterfall, AK (KWF)	</option>	   
		<option value="ALO">	Waterloo, IA (ALO)	</option>	   
		<option value="ART">	Watertown, NY (ART)	</option>	   
		<option value="ATY">	Watertown, SD (ATY)	</option>	   
		<option value="CWA">	Wausau/Stevens Point, WI (CWA)	</option>	   
		<option value="EAT">	Wenatchee, WA (EAT)	</option>	   
		<option value="PBI">	West Palm Beach, FL (PBI)	</option>	   
		<option value="WYS">	West Yellowstone, MT (WYS)	</option>	   
		<option value="HPN">	Westchester County, NY (HPN)	</option>	   
		<option value="WST">	Westerly, RI (WST)	</option>	   
		<option value="WSX">	Westsound, WA (WSX)	</option>	   
		<option value="WWP">	Whale Pass, AK (WWP)	</option>	   
		<option value="WMO">	White Mountain, AK (WMO)	</option>	   
		<option value="LEB">	White River, VT (LEB)	</option>	   
		<option value="SPS">	Wichita Falls, TX (SPS)	</option>	   
		<option value="ICT">	Wichita, KS (ICT)	</option>	   
		<option value="AVP">	Wilkes Barre, PA (AVP)	</option>	   
		<option value="PHF">	Williamsburg, VA (PHF)	</option>	   
		<option value="IPT">	Williamsport, PA (IPT)	</option>	   
		<option value="ISN">	Williston, ND (ISN)	</option>	   
		<option value="ILM">	Wilmington, NC (ILM)	</option>	   
		<option value="BDL">	Windsor Locks, CT (BDL)	</option>	   
		<option value="ORH">	Worcester, MA (ORH)	</option>	   
		<option value="WRL">	Worland, WY (WRL)	</option>	   
		<option value="WRG"> 	Wrangell, AK (WRG) 	</option>	   
		<option value="YKM">	Yakima, WA (YKM)	</option>	   
		<option value="YAK">	Yakutat, AK (YAK)	</option>	   
		<option value="COD">	Yellowstone/Cody, WY (COD)	</option>	   
		<option value="YNG">	Youngstown, OH (YNG)	</option>	   
		<option value="YUM"> 	Yuma, AZ (YUM) 	</option>	 

    </select>
    </div>
    <div class="col-xs-5">
    <label for="to">Flying To<span class="req"> *</span></label>
    <input class="form-control" type="text" name="to" id="to" required>
    </div>
    </div>
    <div class="row">
    <div class="col-xs-3">
    <label for="adult">Adults<span class="req"> *</span></label>
    <select class="form-control"name="adult" id="adult">
    	<option value="1">1</option>
    	<option value="2">2</option>
    	<option value="3">3</option>
    	<option value="4">4</option>
    	<option value="5">5</option>
    	<option value="6">6</option>
    </select>
    </div>
    <div class="col-xs-3">
    <label for="child">Children</label>
    <select class="form-control"name="child" id="child">
    	<option value="0">0</option>
    	<option value="1">1</option>
    	<option value="2">2</option>
    	<option value="3">3</option>
    	<option value="4">4</option>
    	<option value="5">5</option>
    </select>
    </div>
    </div>
  </fieldset>
 <fieldset>
 	<legend>Purchase Information</legend>
 	<div class="row">
 	<div class="col-xs-4">
 	<label for="type">Card Type<span class="req"> *</span></label>
 	<select class="form-control" name="type" id="type" required>
 		<option value="visa">Visa</option>
 		<option value="master-card">Master Card</option>
 		<option value="discovery">Discovery</option>
 		<option value="american-express">American Express</option>
 	</select>
 	</div>
 	<div class="col-xs-5">
 	<label for="card">Card Number<span class="req"> *</span></label>
 	<input class="form-control" type="text" name="card" id="card" placeholder="5555-0000-3333-0000" readonly="readonly" required>
 	</div>
 	<div class="col-xs-3">
 	<label for="code">CCV Code<span class="req"> *</span></label>
 	<input class="form-control" type="text" name="code" id="code" required>
 	</div>
 	<div class="col-xs-3">
 		<label for="expire">Month<span class="req"> *</span></label>
 		<select class="form-control" name="expire" id="expire" required>
 			<option value="1">01 Jan</option>
 			<option value="2">02 Feb</option>
 			<option value="3">03 Mar</option>
 			<option value="4">04 Apr</option>
 			<option value="5">05 May</option>
 			<option value="6">06 Jun</option>
 			<option value="7">07 Jul</option>
 			<option value="8">08 Aug</option>
 			<option value="9">09 Sep</option>
 			<option value="10">10 Oct</option>
 			<option value="11">11 Nov</option>
 			<option value="12">12 Dec</option>
 		</select>
 	</div>
 	<div class="col-xs-3">
 	<label for="expire">Year<span class="req"> *</span></label>
 		<select class="form-control" name="expire" id="expire" required>
 			<option value="2015">2015</option>
 			<option value="2016">2016</option>
 			<option value="2017">2017</option>
 			<option value="2018">2018</option>
 			<option value="2019">2019</option>
 			<option value="2020">2020</option>
 			<option value="2021">2021</option>
 			<option value="2022">2022</option>
 			<option value="2023">2023</option>
 			<option value="2024">2024</option>
 			<option value="2025">2025</option>
 			<option value="2026">2026</option>
 		</select>
 	</div>
 	</div>
 </fieldset> 
	<button type="submit" class="btn btn-default right">BOOK NOW</button>
</form>
</div>

    <!---- Start of Footer ---->
<?php include("footer.php"); ?>
	<!---- End of Footer ---->


</body>
</html>