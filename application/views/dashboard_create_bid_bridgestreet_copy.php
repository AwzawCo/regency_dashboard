<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js" type="text/javascript"></script>
<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>assets/css/bidstyle.css">
<!-- <script src="<?php echo base_url();?>assets/js/create_bid_bridgestreet.js"></script>
 --></head>


<?php
//Defaults
   $_POST['leadID'] = $id;

   // $_POST['starterPackage'] = "";

?> 


<!-- <?php  var_dump($tableHeaders)?> -->
<div class="container">
  <fieldset>
  <div class="well form-horizontal">
    <div class="row">
              <div class="col-sm-12">
                <legend><?php echo $leadDetail?></legend>
                <table class="table table-hover">
                  <thead>
                    <tr>
                    
                      <th>Unit Size</th>
                      <th>Move In Date</th>
                      <th>Move Out Date</th>
                      <th>Length of Stay</th>
                      <th>Desired Location</th>

                    </tr>
                  </thead>
                  <tbody>
                    <tr>

                      <td><?php echo $tableHeaders['unitSize'] ? $tableHeaders['unitSize'] : "Not Specified"; ?></td>
                      <td><?php echo $tableHeaders['moveIn'] ? $tableHeaders['moveIn'] : "Not Specified"; ?></td>
                      <td><?php echo $tableHeaders['moveOut'] ? $tableHeaders['moveOut'] : "Not Specified"; ?></td>
                      <td><?php echo $tableHeaders['LOS'] ? $tableHeaders['LOS'] : "Not Specified"; ?></td>
                      <td><?php echo $tableHeaders['locale'] ? $tableHeaders['locale'] : "Not Specified"; ?></td>

                    </tr>
                  </tbody>
                </table>
              
              <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Amenities</th>
                      <th>Special Requests</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <?php echo $tableHeaders['amenities'] ? $tableHeaders['amenities'] : "None Specified"; ?>
                      </td>
                      <td>
                        <?php echo $tableHeaders['specialRequests'] ? $tableHeaders['specialRequests'] : "Not Specified"; ?>
                    </td>
                    </tr>
                  </tbody>
                </table>
              </div>
    </div>
  </div>
  </fieldset>
</div>


<div class="container">


    <?php
      $attributes = array('id' => 'bid_form_bridgestreet',
                          'class' => 'well form-horizontal',
                          'role' => 'form',
                          'action' => '');

      $url = "dashboard/createBid?id=". $id. "&s=" .$source;
      //echo $url;
      echo form_open($url, $attributes, $_GET); 
    ?>
    <fieldset>


      <legend><?php echo $header?></legend>

            <!-- left column -->                            
            <div class="col-md-6 mb-3">

                    <b>Contact Information</b>
                    <hr>

                    <?php echo form_error('repFirstName'); ?>
                    <label class="mb-2 mr-sm-2">First Name:</label>
                      <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <input value="<?php echo set_value('repFirstName'); ?>" type="text" class="form-control" id="" name="repFirstName" placeholder="First Name">
                    </div>

                    <?php echo form_error('repLastName'); ?>
                    <label class="mb-2 mr-sm-2">Last Name:</label>
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input value="<?php echo set_value('repLastName'); ?>" type="text" class="form-control mb-2 mr-sm-2" id="" name="repLastName" placeholder="Last Name">
                    </div>

                    <?php echo form_error('repPhone'); ?>
                    <label class="mb-2 mr-sm-2">Phone:</label>
                      <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <input value="<?php echo set_value('repPhone'); ?>" type="text" class="form-control mb-2 mr-sm-2" id="" name="repPhone" placeholder="Phone">
                    </div>  

                    <?php echo form_error('repEmail'); ?>
                    <label class="mb-2 mr-sm-2">Email:</label>
                      <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <input value="<?php echo set_value('repEmail'); ?>" type="text" class="form-control mb-2 mr-sm-2" id="" name="repEmail" placeholder="Email">
                    </div>

                    <hr>
                    <b>Property Information</b>
                    <hr>

                    <?php echo form_error('coreInventory'); ?>
                    <label class="mb-2 mr-sm-2">Is this property Core Inventory?:</label>
                    <div class="radio-group">
                    <label><input type="radio" name="coreInventory" value="yes" <?php echo  set_radio('coreInventory', 'Basic'); ?>/>Yes</label>
                    <label><input type="radio" name="coreInventory" value="no" <?php echo  set_radio('coreInventory', 'Expanded'); ?>/>No</label>
                  </div>

                    <?php echo form_error('propertyName'); ?>
                    <label class="mb-2 mr-sm-2">Property Name:</label>
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                    <input value="<?php echo set_value('propertyName'); ?>" type="text" class="form-control mb-2 mr-sm-2" id="" name="propertyName" placeholder="Property Name">
                    </div>

                    <?php echo form_error('propertyURL'); ?>
                    <label class="mb-2 mr-sm-2">Property Website:</label>
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                    <input value="<?php echo set_value('propertyURL'); ?>" type="text" class="form-control mb-2 mr-sm-2" id="" name="propertyURL" placeholder="Property Website">
                    </div>

                    <?php echo form_error('propertyAddress'); ?>
                    <label class="mb-2 mr-sm-2">Address:</label>
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                    <input value="<?php echo set_value('propertyAddress'); ?>" type="text" class="form-control mb-2 mr-sm-2" id="" name="propertyAddress" placeholder="Address">
                    </div>

                    <?php echo form_error('propertyAddress2'); ?>
                    <label class="mb-2 mr-sm-2">Address 2:</label>
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                    <input value="<?php echo set_value('propertyAddress2'); ?>" type="text" class="form-control mb-2 mr-sm-2" id="" name="propertyAddress2" placeholder="Address 2(Optional)">
                    </div>

                    <?php echo form_error('propertyCity'); ?>
                    <label class="mb-2 mr-sm-2">City:</label>
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                    <input value="<?php echo set_value('propertyCity'); ?>" type="text" class="form-control mb-2 mr-sm-2" id="" name="propertyCity" placeholder="City">
                    </div>

                    <?php echo form_error('propertyState'); ?>
                    <label class="mb-2 mr-sm-2">State:</label>
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                    <input value="<?php echo set_value('propertyState'); ?>" type="text" class="form-control mb-2 mr-sm-2" id="" name="propertyState" placeholder="State">
                    </div>

                    <?php echo form_error('propertyZip'); ?>
                    <label class="mb-2 mr-sm-2">Zipcode:</label>
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                    <input value="<?php echo set_value('propertyZip'); ?>" type="text" class="form-control mb-2 mr-sm-2" id="" name="propertyZip" placeholder="Zipcode">
                    </div>

                    <?php echo form_error('propertyCountry'); ?>
                    <label class="mb-2 mr-sm-2">Country:</label>
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                    <input value="<?php echo set_value('propertyCountry'); ?>" type="text" class="form-control mb-2 mr-sm-2" id="" name="propertyCountry" placeholder="Country">
                    </div>

                    <hr>
                    <b>Amenities</b>
                    <hr>

                    <div class="row">
                      <div class="col-md-4">
                      <?php echo form_error('24hourReception'); ?>
                      <input type="checkbox" name="24hourReception" value="True" <?php echo  set_checkbox('24hourReception', '1'); ?>/>
                      <label class="mb-2 mr-sm-2">24 Hour Reception</label>
                      </div>

                      <div class="col-md-4">
                      <?php echo form_error('localPhone'); ?>
                      <input type="checkbox" name="localPhone" value="True" <?php echo  set_checkbox('localPhone', '1'); ?>/>
                      <label class="mb-2 mr-sm-2">localPhone</label>
                      </div>

                      <div class="col-md-4">
                      <?php echo form_error('highSpeedInternet'); ?>
                      <input type="checkbox" name="highSpeedInternet" value="True" <?php echo  set_checkbox('highSpeedInternet', '1'); ?>/>
                      <label class="mb-2 mr-sm-2">High-Speed Internet</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                      <?php echo form_error('washerDryerCheck'); ?>
                      <input type="checkbox" name="washerDryerCheck" value="True" <?php echo  set_checkbox('washerDryerCheck', '1'); ?>/>
                      <label class="mb-2 mr-sm-2">Washer/Dryer</label>
                      </div>
                    
                      <div class="col-md-4">
                      <?php echo form_error('airConditioning'); ?>
                      <input type="checkbox" name="airConditioning" value="True" <?php echo  set_checkbox('airConditioning', '1'); ?>/>
                      <label class="mb-2 mr-sm-2">Air Conditioning</label>
                      </div>

                      <div class="col-md-4">
                      <?php echo form_error('housekeeping'); ?>
                      <input type="checkbox" name="housekeeping" value="True" <?php echo  set_checkbox('housekeeping', '1'); ?>/>
                      <label class="mb-2 mr-sm-2">Housekeeping</label>
                      </div>
                    </div>

                  <div class="row">
                    <div class="col-md-4">
                    <?php echo form_error('meetAndGreet'); ?>
                    <input type="checkbox" name="meetAndGreet" value="True" <?php echo  set_checkbox('meetAndGreet', '1'); ?>/>
                    <label class="mb-2 mr-sm-2">Meet and Greet</label>
                    </div>

                    <div class="col-md-4">
                    <?php echo form_error('petFriendly'); ?>
                    <input type="checkbox" name="petFriendly" value="True" <?php echo  set_checkbox('petFriendly', '1'); ?>/>
                    <label class="mb-2 mr-sm-2">Pet Friendly</label>
                    </div>
                    
                    <div class="col-md-4">
                    <?php echo form_error('carParking'); ?>
                    <input type="checkbox" name="carParking" value="True" <?php echo  set_checkbox('carParking', '1'); ?>/>
                    <label class="mb-2 mr-sm-2">Car Parking</label>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4">
                    <?php echo form_error('liftAccess'); ?>
                    <input type="checkbox" name="liftAccess" value="True" <?php echo  set_checkbox('liftAccess', '1'); ?>/>
                    <label class="mb-2 mr-sm-2">Lift Access</label>
                    </div>

                    <div class="col-md-4">
                    <?php echo form_error('satelliteCableTV'); ?>
                    <input type="checkbox" name="satelliteCableTV" value="True" <?php echo  set_checkbox('satelliteCableTV', '1'); ?>/>
                    <label class="mb-2 mr-sm-2">Satellite/CableTV</label>
                    </div>

                    <div class="col-md-4">
                    <?php echo form_error('backgroundCheck'); ?>
                    <input type="checkbox" name="backgroundCheck" value="True" <?php echo  set_checkbox('backgroundCheck', '1'); ?>/>
                    <label class="mb-2 mr-sm-2">Background Check</label>
                    </div>
                  </div>

                  <div class="row">

                    <div class="col-md-7">
                    <?php echo form_error('keysMailed'); ?>
                    <input type="checkbox" name="keysMailed" value="True" <?php echo  set_checkbox('keysMailed', '1'); ?>/>
                    <label class="mb-2 mr-sm-2">Keys mailed to guest prior to arrival</label>
                    </div>

                    <div class="col-md-5">
                    <?php echo form_error('airportTransportation'); ?>
                    <input type="checkbox" name="airportTransportation" value="True" <?php echo  set_checkbox('airportTransportation', '1'); ?>/>
                    <label class="mb-2 mr-sm-2">Airport Transportation</label>
                    </div>
                  </div>

                  <hr>

                  <?php echo form_error('petFee'); ?>
                    <label class="mb-2 mr-sm-2">Pet Fee:</label>
                      <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <input value="<?php echo set_value('petFee'); ?>" type="text" class="form-control mb-2 mr-sm-2" id="" name="petFee" placeholder="Pet Fee">
                    </div>

                <div class="row">
                  <div class="col-md-6">
                  <?php echo form_error('refundable'); ?>
                    <label class="mb-2 mr-sm-2">Refundable/Non-refundable:</label>
                      <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                      <select type="text" class="form-control mb-2 mr-sm-2" id="" name="refundable" placeholder="refundable">
                        <option value=" ">Select</option>
                        <option value="< 5 miles" <?php echo  set_select('refundable', 'Refundable'); ?> > Refundable</option>
                        <option value="5 - 10 miles" <?php echo  set_select('refundable', 'Non-refundable'); ?> > Non-refundable</option>
                        </select>
                    </div>
                  </div>

                  <div class="col-md-6">
                  <?php echo form_error('petTotal'); ?>
                    <label class="mb-2 mr-sm-2">Total/per Pet:</label>
                      <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                      <select type="text" class="form-control mb-2 mr-sm-2" id="" name="petTotal" placeholder="petTotal">
                        <option value=" ">Select</option>
                        <option value="per Pet" <?php echo  set_select('petTotal', '<per Pet'); ?> >per Pet</option>
                        <option value="per Pet" <?php echo  set_select('petTotal', '5 - 10 miles'); ?> > Total </option>
                        </select>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                  <?php echo form_error('parkings'); ?>
                    <label class="mb-2 mr-sm-2">Parking Spaces Offered:</label>
                      <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                      <select type="text" class="form-control mb-2 mr-sm-2" id="parkings" name="parkings">
                        <option value="0" <?php echo  set_select('parkings', '0'); ?> > 0 </option>
                        <option value="1" <?php echo  set_select('parkings', '1'); ?> > 1 </option>
                        <option value="2" <?php echo  set_select('parkings', '2'); ?> > 2 </option>
                        <option value="3" <?php echo  set_select('parkings', '3'); ?> > 3 </option>
                        <option value="4" <?php echo  set_select('parkings', '4'); ?> > 4 </option>
                        <option value="5" <?php echo  set_select('parkings', '5'); ?> > 5 </option>
                        <option value="6" <?php echo  set_select('parkings', '6'); ?> > 6 </option>
                        <option value="7" <?php echo  set_select('parkings', '7'); ?> > 7 </option>
                        <option value="8" <?php echo  set_select('parkings', '8'); ?> > 8 </option>
                        <option value="9" <?php echo  set_select('parkings', '9'); ?> > 9 </option>
                        <option value="10" <?php echo  set_select('parkings', '10'); ?> > 10 </option>
                        <option value="11" <?php echo  set_select('parkings', '11'); ?> > 11 </option>
                        <option value="12" <?php echo  set_select('parkings', '12'); ?> > 12 </option>
                        <option value="13" <?php echo  set_select('parkings', '13'); ?> > 13 </option>
                        <option value="14" <?php echo  set_select('parkings', '14'); ?> > 14 </option>
                        <option value="15" <?php echo  set_select('parkings', '15'); ?> > 15 </option>
                        </select>
                    </div>
                  </div>

                  <div class="col-md-6">
                  <?php echo form_error('washerDryer'); ?>
                    <label class="mb-2 mr-sm-2">Washer/Dryer:</label>
                      <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                      <select type="text" class="form-control mb-2 mr-sm-2" id="" name="washerDryer" placeholder="washerDryer">
                        <option value=" ">Select</option>
                        <option value="In-Suite" <?php echo  set_select('washerDryer', 'In-Suite'); ?> >In-Suite</option>
                        <option value="On Site" <?php echo  set_select('washerDryer', 'On Site'); ?> > On Site </option>
                        </select>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                  <?php echo form_error('internet'); ?>
                    <label class="mb-2 mr-sm-2">Internet:</label>
                      <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                      <select type="text" class="form-control mb-2 mr-sm-2" id="" name="internet" placeholder="Internet">
                        <option value=" ">Select</option>
                        <option value="Wireless" <?php echo  set_select('internet', 'Wireless'); ?> > Wireless </option>
                        <option value="Wired" <?php echo  set_select('internet', 'Wired'); ?> > Wired </option>
                        <option value="None" <?php echo  set_select('internet', 'None'); ?> > None </option>
                        </select>
                    </div>
                  </div>

                  <div class="col-md-6">
                  <?php echo form_error('bathrooms'); ?>
                    <label class="mb-2 mr-sm-2">Number of Bathrooms:</label>
                      <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                      <select type="text" class="form-control mb-2 mr-sm-2" id="" name="bathrooms" placeholder="Bathrooms">
                        <option value=" ">Select</option>
                        <option value="1" <?php echo  set_select('bathrooms', '1'); ?> > 1 </option>
                        <option value="2" <?php echo  set_select('bathrooms', '2'); ?> > 2 </option>
                        <option value="3" <?php echo  set_select('bathrooms', '3'); ?> > 3 </option>
                        </select>
                    </div>
                  </div>
                </div>
            
            </div> <!-- Left Column -->

            <div class="col-md-6 mb-3">

              <b>Rates and Terms</b>
                    <hr>

                <?php echo form_error('dateAvailable'); ?>
                <label class="mb-2 mr-sm-2">Date Available:</label>
                <div class="input-group">
                  <span class="input-group-addon"></span>
                  <input value="<?php echo set_value('dateAvailable'); ?>" type="text" class="form-control" name="dateAvailable" placeholder="" id="datepicker">
                </div>

                  <?php echo form_error('quoteValidType'); ?>
                    <label class="mb-2 mr-sm-2">Rate Valid For:</label>
                      <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                      <select type="text" class="form-control mb-2 mr-sm-2" id="quoteValidType" name="quoteValidType" placeholder="Valid For">
                        <option value=" ">Select</option>
                        <option value="1" <?php echo  set_select('quoteValidType', '1'); ?> > 1 Days </option>
                        <option value="2" <?php echo  set_select('quoteValidType', '2'); ?> > 2 Days</option>
                        <option value="3" <?php echo  set_select('quoteValidType', '3'); ?> > 3 Days</option>
                        <option value="4" <?php echo  set_select('quoteValidType', '4'); ?> > 4 Days</option>
                        <option value="5" <?php echo  set_select('quoteValidType', '5'); ?> > 5 Days</option>
                        <option value="6" <?php echo  set_select('quoteValidType', '6'); ?> > 6 Days</option>
                        <option value="7" <?php echo  set_select('quoteValidType', '7'); ?> > 7 Days</option>
                        <option value="14" <?php echo  set_select('quoteValidType', '14'); ?> > 14 Days</option>
                        <option value="30" <?php echo  set_select('quoteValidType', '30'); ?> > 30 Days</option>
                        </select>
                      </div>

                  <?php echo form_error('budgetTypeID'); ?>
                    <label class="mb-2 mr-sm-2">Rate By:</label>
                      <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                      <select type="text" class="form-control mb-2 mr-sm-2" id="budgetTypeID" name="budgetTypeID" placeholder="Rate">
                        <option value=" ">Select</option>
                        <option value="Daily" <?php echo  set_select('budgetTypeID', 'Daily'); ?> >Daily</option>
                        <option value="Weekly" <?php echo  set_select('budgetTypeID', 'Weekly'); ?> > Weekly</option>
                        <option value="Monthly" <?php echo  set_select('budgetTypeID', 'Monthly'); ?> >Monthly</option>
                        </select>
                      </div>

                  <?php echo form_error('distance'); ?>
                    <label class="mb-2 mr-sm-2">Distance from Worksite:</label>
                      <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <input value="<?php echo set_value('distance'); ?>" type="text" class="form-control mb-2 mr-sm-2" id="" name="distance" placeholder="Distance">
                    </div>

                    <?php echo form_error('parking'); ?>
                    <label class="mb-2 mr-sm-2">Parking accomodations:</label>
                      <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                      <select type="text" class="form-control mb-2 mr-sm-2" id="" name="parking" placeholder="Parking Accomodations">
                        <option value="No Parking" <?php echo  set_select('parking', 'No Parking'); ?> >No Parking</option>
                        <option value="Free Parking" <?php echo  set_select('parking', 'Free Parking'); ?> > Free Parking </option>
                        <option value="Parking with Fee" <?php echo  set_select('parking', 'Parking with Fee'); ?> >Parking with Fee</option>
                        </select>
                      </div>

                     <?php echo form_error('currency'); ?>
                    <label class="mb-2 mr-sm-2">Currency:</label>
                      <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                      <select type="text" class="form-control mb-2 mr-sm-2" id="currency" name="currency" placeholder="Distance">
                        <option value="USD" <?php echo  set_select('currency', 'USD'); ?> >USD</option>
                        <option value="GBP" <?php echo  set_select('currency', 'GBP'); ?> >GBP</option>
                        <option value="EUR" <?php echo  set_select('currency', 'EUR'); ?> >EUR</option>
                        <option value="CAD" <?php echo  set_select('currency', 'CAD'); ?> >CAD</option>
                        <option value="AUD" <?php echo  set_select('currency', 'AUD'); ?> >AUD</option>
                        </select>
                      </div>

                    <?php echo form_error('tax'); ?>
                    <label class="mb-2 mr-sm-2">TAX/VAT/TVA:</label>
                      <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <input value="<?php echo set_value('tax'); ?>" type="text" class="form-control mb-2 mr-sm-2" id="tax" name="tax" placeholder="%">
                    </div>

                  <div class="row">
                  <div class="col-md-4">
                  <?php echo form_error('numStudios'); ?>
                    <label class="mb-2 mr-sm-2"># of Studios:</label>
                      <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                      <select type="text" class="form-control mb-2 mr-sm-2" id="numStudios" name="numStudios">
                        <option value="0" <?php echo  set_select('numStudios', '1'); ?> > 0 </option>
                        <option value="1" <?php echo  set_select('numStudios', '1'); ?> > 1 </option>
                        <option value="2" <?php echo  set_select('numStudios', '2'); ?> > 2 </option>
                        <option value="3" <?php echo  set_select('numStudios', '3'); ?> > 3 </option>
                        <option value="4" <?php echo  set_select('numStudios', '4'); ?> > 4 </option>
                        <option value="5" <?php echo  set_select('numStudios', '5'); ?> > 5 </option>
                        <option value="6" <?php echo  set_select('numStudios', '6'); ?> > 6 </option>
                        <option value="7" <?php echo  set_select('numStudios', '7'); ?> > 7 </option>
                        <option value="8" <?php echo  set_select('numStudios', '8'); ?> > 8 </option>
                        <option value="9" <?php echo  set_select('numStudios', '9'); ?> > 9 </option>
                        <option value="10" <?php echo  set_select('numStudios', '10'); ?> > 10 </option>
                        <option value="11" <?php echo  set_select('numStudios', '11'); ?> > 11 </option>
                        <option value="12" <?php echo  set_select('numStudios', '12'); ?> > 12 </option>
                        <option value="13" <?php echo  set_select('numStudios', '13'); ?> > 13 </option>
                        <option value="14" <?php echo  set_select('numStudios', '14'); ?> > 14 </option>
                        <option value="15" <?php echo  set_select('numStudios', '15'); ?> > 15 </option>
                        </select>
                    </div>
                  </div>

                  <div class="col-md-4">
                <?php echo form_error('rate0'); ?>
                    <label class="mb-2 mr-sm-2">Published Rates:</label>
                      <div class="input-group">
                      <input value="<?php echo set_value('rate0'); ?>" type="text" class="form-control mb-2 mr-sm-2" id="rate0" name="rate0" placeholder="%">
                    </div>
                  </div>

                  <div class="col-md-4">
                <?php echo form_error('discount0'); ?>
                    <label class="mb-2 mr-sm-2">Discounted Rates:</label>
                      <div class="input-group">
                      <input value="<?php echo set_value('discount0'); ?>" type="text" class="form-control mb-2 mr-sm-2" id="discount0" name="discount0" placeholder="%">
                    </div>
                  </div>

                </div>

                <div class="row">
                  <div class="col-md-4">
                  <?php echo form_error('num1Bedrooms'); ?>
                    <label class="mb-2 mr-sm-2"># of 1 Bedrooms:</label>
                      <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                      <select type="text" class="form-control mb-2 mr-sm-2" id="num1Bedrooms" name="num1Bedrooms">
                        <option value="0" <?php echo  set_select('num1Bedrooms', '1'); ?> > 0 </option>
                        <option value="1" <?php echo  set_select('num1Bedrooms', '1'); ?> > 1 </option>
                        <option value="2" <?php echo  set_select('num1Bedrooms', '2'); ?> > 2 </option>
                        <option value="3" <?php echo  set_select('num1Bedrooms', '3'); ?> > 3 </option>
                        <option value="4" <?php echo  set_select('num1Bedrooms', '4'); ?> > 4 </option>
                        <option value="5" <?php echo  set_select('num1Bedrooms', '5'); ?> > 5 </option>
                        <option value="6" <?php echo  set_select('num1Bedrooms', '6'); ?> > 6 </option>
                        <option value="7" <?php echo  set_select('num1Bedrooms', '7'); ?> > 7 </option>
                        <option value="8" <?php echo  set_select('num1Bedrooms', '8'); ?> > 8 </option>
                        <option value="9" <?php echo  set_select('num1Bedrooms', '9'); ?> > 9 </option>
                        <option value="10" <?php echo  set_select('num1Bedrooms', '10'); ?> > 10 </option>
                        <option value="11" <?php echo  set_select('num1Bedrooms', '11'); ?> > 11 </option>
                        <option value="12" <?php echo  set_select('num1Bedrooms', '12'); ?> > 12 </option>
                        <option value="13" <?php echo  set_select('num1Bedrooms', '13'); ?> > 13 </option>
                        <option value="14" <?php echo  set_select('num1Bedrooms', '14'); ?> > 14 </option>
                        <option value="15" <?php echo  set_select('num1Bedrooms', '15'); ?> > 15 </option>
                        </select>
                    </div>
                  </div>

                  <div class="col-md-4">
                <?php echo form_error('rate1'); ?>
                    <label class="mb-2 mr-sm-2">Published Rates:</label>
                      <div class="input-group">
                      <input value="<?php echo set_value('rate1'); ?>" type="text" class="form-control mb-2 mr-sm-2" id="rate1" name="rate1" placeholder="%">
                    </div>
                  </div>

                  <div class="col-md-4">
                <?php echo form_error('discount1'); ?>
                    <label class="mb-2 mr-sm-2">Discounted Rates:</label>
                      <div class="input-group">
                      <input value="<?php echo set_value('discount1'); ?>" type="text" class="form-control mb-2 mr-sm-2" id="discount1" name="discount1" placeholder="%">
                    </div>
                  </div>

                </div> <!-- row -->

                <div class="row">
                  <div class="col-md-4">
                  <?php echo form_error('num2Bedrooms'); ?>
                    <label class="mb-2 mr-sm-2"># of 2 Bedrooms:</label>
                      <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                      <select type="text" class="form-control mb-2 mr-sm-2" id="num2Bedrooms" name="num2Bedrooms">
                        <option value="0" <?php echo  set_select('num2Bedrooms', '1'); ?> > 0 </option>
                        <option value="1" <?php echo  set_select('num2Bedrooms', '1'); ?> > 1 </option>
                        <option value="2" <?php echo  set_select('num2Bedrooms', '2'); ?> > 2 </option>
                        <option value="3" <?php echo  set_select('num2Bedrooms', '3'); ?> > 3 </option>
                        <option value="4" <?php echo  set_select('num2Bedrooms', '4'); ?> > 4 </option>
                        <option value="5" <?php echo  set_select('num2Bedrooms', '5'); ?> > 5 </option>
                        <option value="6" <?php echo  set_select('num2Bedrooms', '6'); ?> > 6 </option>
                        <option value="7" <?php echo  set_select('num2Bedrooms', '7'); ?> > 7 </option>
                        <option value="8" <?php echo  set_select('num2Bedrooms', '8'); ?> > 8 </option>
                        <option value="9" <?php echo  set_select('num2Bedrooms', '9'); ?> > 9 </option>
                        <option value="10" <?php echo  set_select('num2Bedrooms', '10'); ?> > 10 </option>
                        <option value="11" <?php echo  set_select('num2Bedrooms', '11'); ?> > 11 </option>
                        <option value="12" <?php echo  set_select('num2Bedrooms', '12'); ?> > 12 </option>
                        <option value="13" <?php echo  set_select('num2Bedrooms', '13'); ?> > 13 </option>
                        <option value="14" <?php echo  set_select('num2Bedrooms', '14'); ?> > 14 </option>
                        <option value="15" <?php echo  set_select('num2Bedrooms', '15'); ?> > 15 </option>
                        </select>
                    </div>
                  </div>

                  <div class="col-md-4">
                <?php echo form_error('rate2'); ?>
                    <label class="mb-2 mr-sm-2">Published Rates:</label>
                      <div class="input-group">
                      <input value="<?php echo set_value('rate2'); ?>" type="text" class="form-control mb-2 mr-sm-2" id="rate2" name="rate2" placeholder="%">
                    </div>
                  </div>

                  <div class="col-md-4">
                <?php echo form_error('discount2'); ?>
                    <label class="mb-2 mr-sm-2">Discounted Rates:</label>
                      <div class="input-group">
                      <input value="<?php echo set_value('discount2'); ?>" type="text" class="form-control mb-2 mr-sm-2" id="discount2" name="discount2" placeholder="%">
                    </div>
                  </div>

                </div> <!-- row -->

                <div class="row">
                  <div class="col-md-4">
                  <?php echo form_error('num3Bedrooms'); ?>
                    <label class="mb-2 mr-sm-2"># of 3 Bedrooms:</label>
                      <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                      <select type="text" class="form-control mb-2 mr-sm-2" id="num3Bedrooms" name="num3Bedrooms">
                        <option value="0" <?php echo  set_select('num3Bedrooms', '1'); ?> > 0 </option>
                        <option value="1" <?php echo  set_select('num3Bedrooms', '1'); ?> > 1 </option>
                        <option value="2" <?php echo  set_select('num3Bedrooms', '2'); ?> > 2 </option>
                        <option value="3" <?php echo  set_select('num3Bedrooms', '3'); ?> > 3 </option>
                        <option value="4" <?php echo  set_select('num3Bedrooms', '4'); ?> > 4 </option>
                        <option value="5" <?php echo  set_select('num3Bedrooms', '5'); ?> > 5 </option>
                        <option value="6" <?php echo  set_select('num3Bedrooms', '6'); ?> > 6 </option>
                        <option value="7" <?php echo  set_select('num3Bedrooms', '7'); ?> > 7 </option>
                        <option value="8" <?php echo  set_select('num3Bedrooms', '8'); ?> > 8 </option>
                        <option value="9" <?php echo  set_select('num3Bedrooms', '9'); ?> > 9 </option>
                        <option value="10" <?php echo  set_select('num3Bedrooms', '10'); ?> > 10 </option>
                        <option value="11" <?php echo  set_select('num3Bedrooms', '11'); ?> > 11 </option>
                        <option value="12" <?php echo  set_select('num3Bedrooms', '12'); ?> > 12 </option>
                        <option value="13" <?php echo  set_select('num3Bedrooms', '13'); ?> > 13 </option>
                        <option value="14" <?php echo  set_select('num3Bedrooms', '14'); ?> > 14 </option>
                        <option value="15" <?php echo  set_select('num3Bedrooms', '15'); ?> > 15 </option>
                        </select>
                    </div>
                  </div>

                  <div class="col-md-4">
                <?php echo form_error('rate3'); ?>
                    <label class="mb-2 mr-sm-2">Published Rates:</label>
                      <div class="input-group">
                      <input value="<?php echo set_value('rate3'); ?>" type="text" class="form-control mb-2 mr-sm-2" id="rate3" name="rate3" placeholder="%">
                    </div>
                  </div>

                  <div class="col-md-4">
                <?php echo form_error('discount3'); ?>
                    <label class="mb-2 mr-sm-2">Discounted Rates:</label>
                      <div class="input-group">
                      <input value="<?php echo set_value('discount3'); ?>" type="text" class="form-control mb-2 mr-sm-2" id="discount3" name="discount3" placeholder="%">
                    </div>
                  </div>

                </div> <!-- row -->

                <div class="row">
                  <div class="col-md-4">
                  <?php echo form_error('leaseTerm'); ?>
                    <label class="mb-2 mr-sm-2">Lease Terms/Payment:</label>
                      <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                      <select type="text" class="form-control mb-2 mr-sm-2" id="leaseTerm" name="leaseTerm">
                        <option value="0" <?php echo  set_select('leaseTerm', '7 Days'); ?> > 7 Days </option>
                        <option value="1" <?php echo  set_select('leaseTerm', '14 Days'); ?> > 14 Days </option>
                        <option value="2" <?php echo  set_select('leaseTerm', '21 Days'); ?> > 21 Days </option>
                        <option value="3" <?php echo  set_select('leaseTerm', 'Month To Month'); ?> > Month To Month </option>
                        <option value="4" <?php echo  set_select('leaseTerm', '2 Months'); ?> > 2 Months </option>
                        <option value="5" <?php echo  set_select('leaseTerm', '3 Months'); ?> > 3 Months </option>
                        <option value="6" <?php echo  set_select('leaseTerm', '6 Months'); ?> > 6 Months </option>
                        <option value="7" <?php echo  set_select('leaseTerm', 'All'); ?> > All </option>
                        </select>
                      </div>
                    </div>

                  <div class="col-md-4">
                  <?php echo form_error('noticeTerm'); ?>
                    <label class="mb-2 mr-sm-2">Notice Terms:</label>
                      <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                      <select type="text" class="form-control mb-2 mr-sm-2" id="noticeTerm" name="noticeTerm" placeholder="Notice Term">
                        <option value=" ">Select</option>
                        <option value="1 Day" <?php echo  set_select('noticeTerm', '1 Day'); ?> > 1 Day </option>
                        <option value="3 Days" <?php echo  set_select('noticeTerm', '3 Days'); ?> > 3 Days </option>
                        <option value="7 Day" <?php echo  set_select('noticeTerm', '7 Days'); ?> > 7 Day </option>
                        <option value="14 Days" <?php echo  set_select('noticeTerm', '14 Days'); ?> > 14 Days </option>
                        <option value="30 Day" <?php echo  set_select('noticeTerm', '30 Day'); ?> > 30 Day </option>
                        <option value="60 Days" <?php echo  set_select('noticeTerm', '60 Days'); ?> > 60 Days </option>
                        </select>
                      </div>
                    </div>

                  <div class="col-md-4">
                  <?php echo form_error('advancedDays'); ?>
                    <label class="mb-2 mr-sm-2">Advanced Notice:</label>
                      <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                      <select type="text" class="form-control mb-2 mr-sm-2" id="advancedDays" name="advancedDays" placeholder="Distance">
                        <option value=" ">Days</option>
                        <option value="1" <?php echo  set_select('advancedDays', '1'); ?> > 1 </option>
                        <option value="2" <?php echo  set_select('advancedDays', '2'); ?> > 2 </option>
                        <option value="3" <?php echo  set_select('advancedDays', '3'); ?> > 3 </option>
                        <option value="4" <?php echo  set_select('advancedDays', '4'); ?> > 4 </option>
                        <option value="5" <?php echo  set_select('advancedDays', '5'); ?> > 5 </option>
                        <option value="6" <?php echo  set_select('advancedDays', '6'); ?> > 6 </option>
                        <option value="7" <?php echo  set_select('advancedDays', '7'); ?> > 7 </option>
                        <option value="8" <?php echo  set_select('advancedDays', '8'); ?> > 8 </option>
                        <option value="9" <?php echo  set_select('advancedDays', '9'); ?> > 9 </option>
                        <option value="10" <?php echo  set_select('advancedDays', '10'); ?> > 10 </option>
                        </select>
                    </div>
                  </div>

                </div> <!-- row --> 

                <div class="row">
                  <div class="col-md-4">
                  <?php echo form_error('advancedHours'); ?>
                    <label class="mb-2 mr-sm-2">Advanced Notice:</label>
                      <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                      <select type="text" class="form-control mb-2 mr-sm-2" id="advancedHours" name="advancedHours" placeholder="Distance">
                        <option value=" ">Hours</option>
                        <option value="0" <?php echo  set_select('advancedHours', '1'); ?> > 0 </option>
                        <option value="1" <?php echo  set_select('advancedHours', '1'); ?> > 1 </option>
                        <option value="2" <?php echo  set_select('advancedHours', '2'); ?> > 2 </option>
                        <option value="3" <?php echo  set_select('advancedHours', '3'); ?> > 3 </option>
                        <option value="4" <?php echo  set_select('advancedHours', '4'); ?> > 4 </option>
                        <option value="5" <?php echo  set_select('advancedHours', '5'); ?> > 5 </option>
                        <option value="6" <?php echo  set_select('advancedHours', '6'); ?> > 6 </option>
                        <option value="7" <?php echo  set_select('advancedHours', '7'); ?> > 7 </option>
                        <option value="8" <?php echo  set_select('advancedHours', '8'); ?> > 8 </option>
                        <option value="9" <?php echo  set_select('advancedHours', '9'); ?> > 9 </option>
                        <option value="10" <?php echo  set_select('advancedHours', '10'); ?> > 10 </option>
                        <option value="11" <?php echo  set_select('advancedHours', '11'); ?> > 11 </option>
                        <option value="12" <?php echo  set_select('advancedHours', '12'); ?> > 12 </option>
                        <option value="13" <?php echo  set_select('advancedHours', '13'); ?> > 13 </option>
                        <option value="14" <?php echo  set_select('advancedHours', '14'); ?> > 14 </option>
                        <option value="15" <?php echo  set_select('advancedHours', '15'); ?> > 15 </option>
                        <option value="16" <?php echo  set_select('advancedHours', '16'); ?> > 16 </option>
                        <option value="17" <?php echo  set_select('advancedHours', '17'); ?> > 17 </option>
                        <option value="18" <?php echo  set_select('advancedHours', '18'); ?> > 18 </option>
                        <option value="19" <?php echo  set_select('advancedHours', '19'); ?> > 19 </option>
                        <option value="20" <?php echo  set_select('advancedHours', '20'); ?> > 20 </option>
                        <option value="21" <?php echo  set_select('advancedHours', '21'); ?> > 21 </option>
                        <option value="22" <?php echo  set_select('advancedHours', '22'); ?> > 22 </option>
                        <option value="23" <?php echo  set_select('advancedHours', '23'); ?> > 23 </option>
                        <option value="24" <?php echo  set_select('advancedHours', '24'); ?> > 24 </option>
                        </select>
                    </div>
                  </div>

                  <div class="col-md-4">
                  <?php echo form_error('commissionTypeID'); ?>
                    <label class="mb-2 mr-sm-2">Commission:</label>
                      <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                      <select type="text" class="form-control mb-2 mr-sm-2" id="commissionTypeID" name="commissionTypeID" placeholder="Distance">
                        <option value=" ">Select</option>
                        <option value="Net" <?php echo  set_select('commissionTypeID', 'Net'); ?> > Net </option>
                        <option value="Commissionable" <?php echo  set_select('commissionTypeID', 'Comissionable'); ?> > Comissionable</option>
                        </select>
                    </div>
                  </div>
                  
                    <div class="col-md-4">
                <?php echo form_error('commissionPercent'); ?>
                    <label class="mb-2 mr-sm-2">If Commissionable:</label>
                      <div class="input-group">
                      <input value="<?php echo set_value('commissionPercent'); ?>" type="text" class="form-control mb-2 mr-sm-2" id="commissionPercent" name="commissionPercent" placeholder="%">
                    </div>
                  </div>

                </div> <!-- row -->

                <div class="row">
                  <div class="col-md-4">
                  <?php echo form_error('VATID'); ?>
                    <label class="mb-2 mr-sm-2">Select VAT/TVA:</label>
                      <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                      <select type="text" class="form-control mb-2 mr-sm-2" id="VATID" name="VATID" placeholder="Distance">
                        <option value=" ">Select</option>
                        <option value="20% the first 28 Days, reduced to 4% thereafter" <?php echo  set_select('VATID', '20% the first 28 Days, reduced to 4% thereafter'); ?> > 20% the first 28 Days, reduced to 4% thereafter</option>
                        <option value="3.5% GST" <?php echo  set_select('VATID', '3.5% GST'); ?> > 3.5% GST</option>
                        </select>
                    </div>
                  </div>

                  <div class="col-md-4">
                <?php echo form_error('squareFootage'); ?>
                    <label class="mb-2 mr-sm-2">Square Footage:</label>
                      <div class="input-group">
                      <input value="<?php echo set_value('squareFootage'); ?>" type="text" class="form-control mb-2 mr-sm-2" id="squareFootage" name="squareFootage" placeholder="sqft">
                    </div>
                  </div>

                  <div class="col-md-4">
                  <?php echo form_error('cancellation'); ?>
                    <label class="mb-2 mr-sm-2">Cancellation Policy:</label>
                      <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                      <select type="text" class="form-control mb-2 mr-sm-2" id="" name="cancellation" >
                        <option value=" ">Select</option>
                        <option value="1" <?php echo  set_select('cancellation', 'Cancellation within 3 Days'); ?> > Cancellation within 3 Days </option>
                        <option value="2" <?php echo  set_select('cancellation', ''); ?> > Cancellation within 7 Days</option>
                        <option value="3" <?php echo  set_select('cancellation', ''); ?> > Cancellation within 14 Days</option>
                        <option value="4" <?php echo  set_select('cancellation', ''); ?> > Cancellation within 21 Days </option>
                        <option value="5" <?php echo  set_select('cancellation', ''); ?> > Cancellation within 30 Days </option>
                        <option value="6" <?php echo  set_select('cancellation', ''); ?> > 24 Hour notice prior to arrival date</option>
                        <option value="7" <?php echo  set_select('cancellation', ''); ?> > 48 Hour notice prior to arrival date </option>
                        <option value="8" <?php echo  set_select('cancellation', ''); ?> > Non-refundable </option>
                        </select>
                      </div>
                  </div> <!-- col -->
                </div> <!-- row -->


                <div class="row">
                  <div class="col-md-6">
                  <?php echo form_error('canBeSplit'); ?>
                  <div class="input-group">
                  <label class="form-check-label">May the apartments in this quote be reserved individually?</label>
                    <input type="radio" class="form-check-input" name="canBeSplit" value='yes'<?php echo  set_radio('canBeSplit', 'True'); ?> > Yes </div>
                  <div class="input-group">
                    <input type="radio" class="form-check-input" name="canBeSplit" value='no'<?php echo  set_radio('canBeSplit', 'False'); ?> > No </div>
                  </div>

                  <div class="col-md-6">
                  <?php echo form_error('reduction30Days'); ?>
                  <div class="input-group">
                  <label class="form-check-label">TAX/VAT Reduction after 30 Days? :</label>
                    <input type="radio" name="reduction30Days" id='taxRadioYes' value="yes"<?php echo  set_radio('reduction30Days', 'True'); ?> > Yes </div>
                  <!-- <div class="input-group"> -->
                    <input type="radio" name="reduction30Days" id='taxRadioNo' value="no"<?php echo  set_radio('reduction30Days', 'False'); ?> > No </div>
                  <!-- </div> -->
                  
                </div> <!-- row -->

                <div class="row">
                  <div class="col-sm-12">
                <?php echo form_error('reduction30DaysComment'); ?>
                  <label class="mb-2 mr-sm-2">Reduction Comments</label>
                  <div class="input-group">
                  <span class="input-group-addon"></span>
                    <textarea value="<?php echo set_value('reduction30DaysComment'); ?>" type="text" class="form-control" name ="reduction30DaysComment"  placeholder=""></textarea>
                    </div>
                  </div>
                </div>

              </div> <!-- RIGHT COLUMN -->

                <div class="row">
                  <div class="col-sm-12">
                <?php echo form_error('comment'); ?>
                  <label class="mb-2 mr-sm-2">Comments</label>
                  <div class="input-group">
                  <span class="input-group-addon"></span>
                    <textarea value="<?php echo set_value('comment'); ?>" type="text" class="form-control" name ="comment"  placeholder=""></textarea>
                    </div>
                  </div>
                </div>

                <div class="row">
                <div class="col-md-12 text-center"> 
                  <button type="submit" class="btn btn-primary" value ="submit" name="singlebutton">Create Bid<span class="glyphicon glyphicon-send"></span></button>
                </div>
                </div> 
                
      </fieldset>
    </form>
</div> <!-- End container div -->

<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
$( function() {
  $( "#datepicker" ).datepicker();
} );
</script>