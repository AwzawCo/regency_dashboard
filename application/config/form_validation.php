<?php
$config = array(
        'dashboard/createLead' => array(
                array(
                        'field' => 'typeHousingRequest',
                        'label' => 'Type of Housing Request',
                        'rules' => 'trim|required'
                ),
                array(
                        'field' => 'contactName',
                        'label' => 'Contact Name',
                        'rules' => 'trim|required'
                ),
                array(
                        'field' => 'email',
                        'label' => 'Email Address',
                        'rules' => 'trim|required|valid_emails'
                ),
                array(
                        'field' => 'subject',
                        'label' => 'Email Subject',
                        'rules' => 'trim|required'
                ),
                array(
                        'field' => 'phone',
                        'label' => 'Phone Number',
                        'rules' => 'trim|required|min_length[10]'
                ),
                array(
                        'field' => 'clientName',
                        'label' => 'Client Name',
                        'rules' => 'trim|required'
                ),
                array(
                        'field' => 'companyName',
                        'label' => 'Company Name',
                        'rules' => 'trim|required'
                ),
                array(
                        'field' => 'state',
                        'label' => 'State',
                        'rules' => 'trim|required'
                ),
                array(
                        'field' => 'city',
                        'label' => 'City',
                        'rules' => 'trim|required'
                ),
                array(
                        'field' => 'country',
                        'label' => 'Country',
                        'rules' => 'trim|required'
                ),
                array(
                        'field' => 'address',
                        'label' => 'Address',
                        'rules' => 'trim|required'
                ),
                array(
                        'field' => 'address2',
                        'label' => 'Address2',
                        'rules' => 'trim'
                ),
                array(
                        'field' => 'budget',
                        'label' => 'Budget',
                        'rules' => 'trim|required'
                ),
                array(
                        'field' => 'zip',
                        'label' => 'Zip Code',
                        'rules' => 'trim|required'
                ),
                array(
                        'field' => 'moveInDate',
                        'label' => 'Move-In Date',
                        'rules' => 'trim|required'
                ),
                array(
                        'field' => 'moveOutDate',
                        'label' => 'Move-Out Date',
                        'rules' => 'trim|required'
                ),
                array(
                        'field' => 'NTV',
                        'label' => 'Notice to Vacate',
                        'rules' => 'trim'
                ),
                array(
                        'field' => 'NTVdate',
                        'label' => 'NTV Date',
                        'rules' => 'trim'
                ),
                array(
                        'field' => 'typeWeightBreed',
                        'label' => 'Type Weight & Breed',
                        'rules' => 'trim'
                ),
                array(
                        'field' => 'specialRequest',
                        'label' => 'Special Requests',
                        'rules' => 'trim|required'
                ),
                array(
                        'field' => 'numPets',
                        'label' => 'Number of Pets',
                        'rules' => 'trim|required'
                )
        ),
        'dashboard/profile' => array(
                array(
                        'field' => 'signature',
                        'label' => 'Signature',
                        'rules' => 'trim|min_length[1]'
                )
             
        ),
        'dashboard/createBid' => array(
                array(
                        'field' => 'propertyType',
                        'label' => 'Property Type',
                        'rules' => 'trim|required'
                ),
                array(
                        'field' => 'community',
                        'label' => 'Community',
                        'rules' => 'trim'
                ),
                array(
                        'field' => 'otherCommunity',
                        'label' => 'Community',
                        'rules' => 'trim|required'
                ),
                array(
                        'field' => 'address',
                        'label' => 'Address',
                        'rules' => 'trim|required'
                ),
                array(
                        'field' => 'city',
                        'label' => 'City',
                        'rules' => 'trim|required'
                ),
                array(
                        'field' => 'state',
                        'label' => 'State',
                        'rules' => 'trim|required'
                ),
                array(
                        'field' => 'zipcode',
                        'label' => 'Zipcode',
                        'rules' => 'trim|required'
                ),
                array(
                        'field' => 'distance',
                        'label' => 'Distance',
                        'rules' => 'trim|required'
                ),
                array(
                        'field' => 'unitSize',
                        'label' => 'Unit Size',
                        'rules' => 'trim|required'
                ),
                array(
                        'field' => 'sqft',
                        'label' => 'Sqft',
                        'rules' => 'trim'
                ),
                array(
                        'field' => 'bath',
                        'label' => 'Baths',
                        'rules' => 'trim|required'
                ),
                array(
                        'field' => 'rate',
                        'label' => 'Rate',
                        'rules' => 'trim|required'
                ),
                array(
                        'field' => 'rateValue',
                        'label' => 'Rate Value',
                        'rules' => 'trim|required'
                ),
                array(
                        'field' => 'taxRate',
                        'label' => 'Tax Rate',
                        'rules' => 'trim'
                ),
                array(
                        'field' => 'otherFees',
                        'label' => 'Other Fees',
                        'rules' => 'trim'
                ),
                array(
                        'field' => 'dateAvailable',
                        'label' => 'Date Available',
                        'rules' => 'trim|required'
                ),
                array(
                        'field' => 'mlto',
                        'label' => 'Minimum Lease Term Offered',
                        'rules' => 'trim'
                ),
                array(
                        'field' => 'longTermDiscount',
                        'label' => 'Long Term Discount',
                        'rules' => 'trim'
                ),
                array(
                        'field' => 'comments',
                        'label' => 'Comments',
                        'rules' => 'trim|required'
                ),
                array(
                        'field' => 'propertyProfile',
                        'label' => 'Property Profile',
                        'rules' => 'trim'
                ),
                array(
                        'field' => 'additionalFiles',
                        'label' => 'Additional Files',
                        'rules' => 'trim'
                ),
                array(
                        'field' => 'propertyURL',
                        'label' => 'Property URL',
                        'rules' => 'trim'
                ),
                array(
                        'field' => 'internet',
                        'label' => 'Internet',
                        'rules' => 'trim|required'
                ),
                array(
                        'field' => 'localPhone',
                        'label' => 'Local Phone',
                        'rules' => 'trim|required'
                ),
                array(
                        'field' => 'cable',
                        'label' => 'Cable',
                        'rules' => 'trim|required'
                ),
                array(
                        'field' => 'laundry',
                        'label' => 'Laundry',
                        'rules' => 'trim|required'
                ),
                array(
                        'field' => 'parking',
                        'label' => 'Parking',
                        'rules' => 'trim|required'
                ),
                array(
                        'field' => 'houseKeeping',
                        'label' => 'House Keeping',
                        'rules' => 'trim|required'
                ),
                array(
                        'field' => 'parkingFee',
                        'label' => 'Parking Fee',
                        'rules' => 'trim'
                ),
                array(
                        'field' => 'petPolicy',
                        'label' => 'Pet Policy',
                        'rules' => 'trim'
                ),
                array(
                        'field' => 'petFee',
                        'label' => 'Pet Fee',
                        'rules' => 'trim'
                ),
                array(
                        'field' => 'petRent',
                        'label' => 'Pet Rent',
                        'rules' => 'trim'
                )
             
        )
);
?>