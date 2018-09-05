<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lead_insert extends CI_Model
{
	function insert_lead(){

		$this->load->database("Regency");
		$data = array(
		'typeHousingRequest' => $_POST['typeHousingRequest'],
		'contactName' => $_POST['contactName'],
		'email' => $_POST['email'],
		'emailSubject' => $_POST['subject'],
		'phoneNumber' => $_POST['phone'],
		'clientName' => $_POST['clientName'],
		'companyName' => $_POST['companyName'],
		'city' => $_POST['city'],	
		'state' => $_POST['state'],
		'country' => $_POST['country'],
		'zip' => $_POST['zip'],
		'extension' => $_POST['extension'],
		'address' => $_POST['address'],
		'address2' => $_POST['address2'],
		'moveInDate' => $_POST['moveInDate'],
		'moveOutDate' => $_POST['moveOutDate'],
		'NTV' => $_POST['NTV'],
		'NTVdate' => $_POST['NTVdate'],		
		'budget' => $_POST['budget'],
		'numBedrooms' => $_POST['numBedrooms'],
		'numBathrooms' => $_POST['numBathrooms'],
		'numParking' => $_POST['numParking'],
		'numPets' => $_POST['numPets'],
		'typeWeightBreed' => $_POST['typeWeightBreed'],
		'localPhone' => isset($_POST['localPhone']) ? "yes":"no",
		'housekeeping' => isset($_POST['housekeeping']) ? "yes":"no",
		'vipPackage' => isset($_POST['vipPackage']) ? "yes":"no",
		'starterPackage' => isset($_POST['starterPackage']) ? "yes":"no",
		'asianPackage' => isset($_POST['asian']) ? "yes":"no",
		'applePackage' => isset($_POST['apple']) ? "yes":"no",
		'specialRequest' => $_POST['specialRequest'],
		'status' => 1
		);

		// var_dump($data);
		$this->db->insert('Leads', $data);
		//$this->mail($data);
	}

	function insert_bid($id=null){

		$this->load->database("Regency");
		$this->load->model("query_model");
		$leadDetails = $this->query_model->getLeadDetails($id,"Regency");
		//$leadDetails->email
		//$leadDetails->clientName
		$data = array(
		'propertyType' => $_POST['propertyType'],
		'otherCommunity' => $_POST['otherCommunity'],
		'address' => $_POST['address'],
		'city' => $_POST['city'],
		'state' => $_POST['state'],
		'zipcode' => $_POST['zipcode'],
		'distance' => $_POST['distance'],	
		'unitSize' => $_POST['unitSize'],
		'sqft' => $_POST['sqft'],
		'rate' => $_POST['rate'],
		'bath' => $_POST['bath'],
		'rateValue' => $_POST['rateValue'],
		'taxRate' => $_POST['taxRate'],
		'dateAvailable' => $_POST['dateAvailable'],
		'otherFees' => $_POST['otherFees'],
		'mlto' => $_POST['mlto'],
		'longTermDiscount' => $_POST['longTermDiscount'],
		'comments' => $_POST['comments'],
		'propertyURL' => $_POST['propertyURL'],
		'internet' => $_POST['internet'],		
		'localPhone' => $_POST['localPhone'],
		'cable' => $_POST['cable'],
		'laundry' => $_POST['laundry'],
		'parking' => $_POST['parking'],
		'houseKeeping' => $_POST['houseKeeping'],
		'parkingFee' => $_POST['parkingFee'],
		'petPolicy' => $_POST['petPolicy'],
		'petFee' => $_POST['petFee'],
		'petRent' => $_POST['petRent'],
		'status' => 1,
		'email' => $leadDetails['email'],
		'name' => $leadDetails['contactName']
		);

		var_dump($data);
		//$this->db->insert('', $data);
		//return $this->mail($data);
	}

	function insert_bid_bridgestreet($id=null){

		// $this->load->database("bridgestreet");
		$this->load->model("query_model");
		$leadDetails = $this->query_model->getLeadDetails($id,"BridgeStreet");
		//$leadDetails->email
		//$leadDetails->clientName
		$data = array(

		'repFirstName' => isset($_POST['repFirstName']) ? $_POST['repFirstName'] : "",
		'repLastName' => isset($_POST['repLastName']) ? $_POST['repLastName'] : "",
		'repPhone' => isset($_POST['repPhone']) ? $_POST['repPhone'] : "",
		'repEmail' => isset($_POST['repEmail']) ? $_POST['repEmail'] : "",
		'coreInventory' => isset($_POST['coreInventory']) ? $_POST['coreInventory'] : "",
		'propertyName' => isset($_POST['propertyName']) ? $_POST['propertyName'] : "",
		'propertyURL' => isset($_POST['propertyURL']) ? $_POST['propertyURL'] : "",
		'propertyAddress' => isset($_POST['propertyAddress']) ? $_POST['propertyAddress'] : "",
		'propertyAddress2' => isset($_POST['propertyAddress2']) ? $_POST['propertyAddress2'] : "",
		'propertyCity' => isset($_POST['propertyCity']) ? $_POST['propertyCity'] : "",
		'propertyState' => isset($_POST['propertyState']) ? $_POST['propertyState'] : "",
		'propertyZip' => isset($_POST['propertyZip']) ? $_POST['propertyZip'] : "",
		'propertyCountry' => isset($_POST['propertyCountry']) ? $_POST['propertyCountry'] : "",
		'24hourReception' => isset($_POST['24hourReception']) ? $_POST['24hourReception'] : "",
		'localPhone' => isset($_POST['localPhone']) ? $_POST['localPhone'] : "",
		'highSpeedInternet' => isset($_POST['highSpeedInternet']) ? $_POST['highSpeedInternet'] : "",
		'washerDryerCheck' => isset($_POST['washerDryerCheck']) ? $_POST['washerDryerCheck'] : "",
		'airConditioning' => isset($_POST['airConditioning']) ? $_POST['airConditioning'] : "",
		'housekeeping' => isset($_POST['housekeeping']) ? $_POST['housekeeping'] : "",
		'meetAndGreet' => isset($_POST['meetAndGreet']) ? $_POST['meetAndGreet'] : "",
		'petFriendly' => isset($_POST['petFriendly']) ? $_POST['petFriendly'] : "",
		'carParking' => isset($_POST['carParking']) ? $_POST['carParking'] : "",
		'liftAccess' => isset($_POST['liftAccess']) ? $_POST['liftAccess'] : "",
		'satelliteCableTV' => isset($_POST['satelliteCableTV']) ? $_POST['satelliteCableTV'] : "",
		'backgroundCheck' => isset($_POST['backgroundCheck']) ? $_POST['backgroundCheck'] : "",
		'keysMailed' => isset($_POST['keysMailed']) ? $_POST['keysMailed'] : "",
		'airportTransportation' => isset($_POST['airportTransportation']) ? $_POST['airportTransportation'] : "",
		'petFee' => isset($_POST['petFee']) ? $_POST['petFee'] : "",
		'refundable' => isset($_POST['refundable']) ? $_POST['refundable'] : "",

		'petTotal' => isset($_POST['petTotal']) ? $_POST['petTotal'] : "",
		'parkings' => isset($_POST['parkings']) ? $_POST['parkings'] : "",
		'washerDryer' => isset($_POST['washerDryer']) ? $_POST['washerDryer'] : "",
		'internet' => isset($_POST['internet']) ? $_POST['internet'] : "",
		'bathrooms' => isset($_POST['bathrooms']) ? $_POST['bathrooms'] : "",
		'dateAvailable' => isset($_POST['dateAvailable']) ? $_POST['dateAvailable'] : "",
		'quoteValidType' => isset($_POST['quoteValidType']) ? $_POST['quoteValidType'] : "",
		'budgetTypeID' => isset($_POST['budgetTypeID']) ? $_POST['budgetTypeID'] : "",
		'distance' => isset($_POST['distance']) ? $_POST['distance'] : "",
		'parking' => isset($_POST['parking']) ? $_POST['parking'] : "",
		'currency' => isset($_POST['currency']) ? $_POST['currency'] : "",
		'tax' => isset($_POST['tax']) ? $_POST['tax'] : "",
		'numStudios' => isset($_POST['numStudios']) ? $_POST['numStudios'] : "",
		'rate0' => isset($_POST['rate0']) ? $_POST['rate0'] : "",
		'discount0' => isset($_POST['discount0']) ? $_POST['discount0'] : "",
		'num1Bedrooms' => isset($_POST['num1Bedrooms']) ? $_POST['num1Bedrooms'] : "",
		'rate1' => isset($_POST['rate1']) ? $_POST['rate1'] : "",
		'discount1' => isset($_POST['discount1']) ? $_POST['discount1'] : "",
		'num2Bedrooms' => isset($_POST['num2Bedrooms']) ? $_POST['num2Bedrooms'] : "",
		'rate2' => isset($_POST['rate2']) ? $_POST['rate2'] : "",
		'discount2' => isset($_POST['discount2']) ? $_POST['discount2'] : "",
		'num3Bedrooms' => isset($_POST['num3Bedrooms']) ? $_POST['num3Bedrooms'] : "",
		'rate3' => isset($_POST['rate3']) ? $_POST['rate3'] : "",
		'discount3' => isset($_POST['discount3']) ? $_POST['discount3'] : "",
		'leaseTerm' => isset($_POST['leaseTerm']) ? $_POST['leaseTerm'] : "",
		'noticeTerm' => isset($_POST['noticeTerm']) ? $_POST['noticeTerm'] : "",
		'advancedDays' => isset($_POST['advancedDays']) ? $_POST['advancedDays'] : "",
		'advancedHours' => isset($_POST['advancedHours']) ? $_POST['advancedHours'] : "",
		'commissionTypeID' => isset($_POST['commissionTypeID']) ? $_POST['commissionTypeID'] : "",

		'commissionPercent' => isset($_POST['commissionPercent']) ? $_POST['commissionPercent'] : "",
		'VATID' => isset($_POST['VATID']) ? $_POST['VATID'] : "",
		'squareFootage' => isset($_POST['squareFootage']) ? $_POST['squareFootage'] : "",
		'cancellation' => isset($_POST['cancellation']) ? $_POST['cancellation'] : "",
		'canBeSplit' => isset($_POST['canBeSplit']) ? $_POST['canBeSplit'] : "",
		'reduction30Days' => isset($_POST['reduction30Days']) ? $_POST['reduction30Days'] : "",
		'reduction30DaysComment' => isset($_POST['reduction30DaysComment']) ? $_POST['reduction30DaysComment'] : "",
		'comment' => isset($_POST['comment']) ? $_POST['comment'] : "",

		'status' => 1,
		// 'email' => $leadDetails['email'],
		// 'name' => $leadDetails['contactName']
		);

		echo(json_encode($data));
		//$this->db->insert('', $data);
		//return $this->mail($data);
		writeDataToFile($data);
	}

	function insert_bid_sirva($id=null){

		$this->load->database("Sirva");
		$this->load->model("query_model");
		$leadDetails = $this->query_model->getLeadDetails($id,"Sirva");
		//$leadDetails->email
		//$leadDetails->clientName
		$data = array(
		'propertyType' => $_POST['propertyType'],
		'otherCommunity' => $_POST['otherCommunity'],
		'address' => $_POST['address'],
		'city' => $_POST['city'],
		'state' => $_POST['state'],
		'zipcode' => $_POST['zipcode'],
		'distance' => $_POST['distance'],
		'unitSize' => $_POST['unitSize'],
		'sqft' => $_POST['sqft'],
		'rate' => $_POST['rate'],
		'bath' => $_POST['bath'],
		'rateValue' => $_POST['rateValue'],
		'taxRate' => $_POST['taxRate'],
		'dateAvailable' => $_POST['dateAvailable'],
		'otherFees' => $_POST['otherFees'],
		'mlto' => $_POST['mlto'],
		'longTermDiscount' => $_POST['longTermDiscount'],
		'propertyURL' => $_POST['propertyURL'],
		'internet' => $_POST['internet'],		
		'localPhone' => $_POST['localPhone'],
		'cable' => $_POST['cable'],
		'laundry' => $_POST['laundry'],
		'parking' => $_POST['parking'],
		'houseKeeping' => $_POST['houseKeeping'],
		'parkingFee' => $_POST['parkingFee'],
		'petPolicy' => $_POST['petPolicy'],
		'petFee' => $_POST['petFee'],
		'petRent' => $_POST['petRent'],
		'comments' => $_POST['comments'],
		'status' => 1,
		// 'email' => $leadDetails['email'],
		// 'name' => $leadDetails['contactName']
		);

		var_dump($data);
		//$this->db->insert('', $data);
		return $this->mail($data);
	}

	public function mail($data){
		$this->load->model("auth_model");
		$this->load->model("users_model");
		$token = isset($_SESSION['token']) ? $_SESSION['token'] : NULL;
		$sig = $this->users_model->getSignature($this->auth_model->getUserName($token));
		$message = '
			<html>
			<body>
			Hi '.$data["name"].',<p>
			Please take a moment to review the below information as well as the attached property profiles and let me know if any of  the below communities will work for your needs.<p>
			Our Furnished Apartments Include:
			<ul>
			<li>Professional Furniture, Housewares and Bedding/Linens</li>
			<li>All Utilities Including WIFI</li>
			<li>Local/toll-free Phone Service</li>
			<li>Expanded cable</li>
			<li>Television in Living Area &amp; Master Bedroom</li>
			<li>No Additional Taxes or Deposits are Required</li>
			<li>Customer Support Twenty-Four Hours, Seven Days a Week (toll-free number)</li>
			<li><b>All Units are Non-Smoking</b></li>
			</ul>
			-----<p>
			<b>'. $data["otherCommunity"]. ':</b>'. $data["unitSize"].'/'. $data["bath"].','. $data["address"]. ',' . $data["city"]. ',' .$data["state"] . $data["zipcode"]. ',' .$data["distance"] . 'miles from desired location
			<p>
			<ul>
			<li>Available '. $data["dateAvailable"] .' </li>
			<li>'. $data["rate"] . 'Rate: '. $data["rateValue"] . '(based off of a 30 day stay)</li>
			<li>'. $data["sqft"] . 'sq. ft. </li>
			<li>Laundry: '. $data["laundry"]. '</li>
			<li>Parking: '. $data["parking"]. '</li>
			<li>Housekeeping: '. $data["houseKeeping"]. '</li>
			</ul>
			<p><br>Please let me know if you have any questions<p><br>'.$sig.'
			</body>
			</html>
		';
		$to = $data['email'];
		$from = $this->auth_model->getEmail($token);
		$header = "From:".$from;
		$header .= "\r\n".'MIME-Version: 1.0';
		$header .= "\r\n".'Content-type: text/html; charset=iso-8859-1';
		$subject = "A new bid from RegencyCL";
		$copySubject = "Copy of Bid from RegencyCL";
		mail($to, $subject, $message, $header);
		mail($from, $subject, $message, $header);
		return true;
	}

	public function updateProfile($data){
		$signature = array(
               'signature' => $_POST['signature']
            );
		// $signature = $_POST['signature'];

		$this->db->where('email', $data['email']);
		$this->db->update('Users', $signature);

	}

	private function writeDataToFile($data = NULL){
		
	}



}


// "INSERT INTO ActiveLead VALUES('$typeHousingRequest','$contactName','$email','$phone','$clientName','$state','$address','$moveInDate','$moveOutDate','$numBedrooms','$bathrooms','$parking','$numPets','$typeWeightBreed','$specialRequest','$airConditioning','$highSpeedInternet','$carParking','$tv')");

// array(19) { ["typeHousingRequest"]=> string(9) "Immediate" ["contactName"]=> string(17) "Marcos Y Chabolla" ["email"]=> string(25) "Marcos.Chabolla@gmail.com" ["phone"]=> string(10) "9493514046" ["clientName"]=> string(7) "markers" ["companyName"]=> string(12) "JadeSoftware" ["state"]=> string(10) "California" ["address"]=> string(16) "4862 Lori Ann Ln" ["moveInDate"]=> string(10) "07/02/1993" ["moveOutDate"]=> string(10) "07/05/1993" ["hosting"]=> string(1) "1" ["bathrooms"]=> string(1) "1" ["parking"]=> string(1) "2" ["numPets"]=> string(1) "0" ["typeWeightBreed"]=> string(17) "Marcos Y Chabolla" ["specialRequest"]=> string(50) " dildo " ["airConditioning"]=> string(1) "1" ["highSpeedInternet"]=> string(1) "1" ["ci_session"]=> string(40) "a3e9dfdee7e6264ee86c082072079bd018e4fc58" }


?>