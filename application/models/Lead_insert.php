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
		$this->db->insert('ActiveLead', $data);
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

		//var_dump($data);
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



}


// "INSERT INTO ActiveLead VALUES('$typeHousingRequest','$contactName','$email','$phone','$clientName','$state','$address','$moveInDate','$moveOutDate','$numBedrooms','$bathrooms','$parking','$numPets','$typeWeightBreed','$specialRequest','$airConditioning','$highSpeedInternet','$carParking','$tv')");

// array(19) { ["typeHousingRequest"]=> string(9) "Immediate" ["contactName"]=> string(17) "Marcos Y Chabolla" ["email"]=> string(25) "Marcos.Chabolla@gmail.com" ["phone"]=> string(10) "9493514046" ["clientName"]=> string(7) "markers" ["companyName"]=> string(12) "JadeSoftware" ["state"]=> string(10) "California" ["address"]=> string(16) "4862 Lori Ann Ln" ["moveInDate"]=> string(10) "07/02/1993" ["moveOutDate"]=> string(10) "07/05/1993" ["hosting"]=> string(1) "1" ["bathrooms"]=> string(1) "1" ["parking"]=> string(1) "2" ["numPets"]=> string(1) "0" ["typeWeightBreed"]=> string(17) "Marcos Y Chabolla" ["specialRequest"]=> string(50) " dildo " ["airConditioning"]=> string(1) "1" ["highSpeedInternet"]=> string(1) "1" ["ci_session"]=> string(40) "a3e9dfdee7e6264ee86c082072079bd018e4fc58" }


?>