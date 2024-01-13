<?php include'./header.php'?>


<div class="quotes-hero-section top-sec-padding-top">
    <img src="assets/img/booknow.png" alt="">
</div>
<!-- quotes-hero-section -->

<div class="quotation-section">
    <div class="inner-sec-container">
        <div class="quotation-sec-inner-parent">
            <div class="row">
                <div class="section-head col-sm-12">
                    <h4><span>Towbar </span>Online Booking System</h4>
                    <p>Please enter your full requirements below. Help us to better meet your needs by giving us as much
                        information as possible.
                        <br> <br>
                        <b>Please Note: There will Be a £100 Deposit Taken from your Card Below once your booking has
                            been confirmed (If you decide to cancel the booking this deposit is NON REFUNDABLE)</b>
                    </p>
                </div>
            </div>
            <!-- row -->

            <!-- ******************************************** -->

            <form id="fcf-form-id" class="fcf-form-class" method="post" action="./booking-form.php">
                <div class="row">
                    <div class="col-lg-6 margin-bottom">
                        <div class="fcf-form-group">
                            <label for="postalcode" class="fcf-label">Name: (Required)</label>
                            <div class="fcf-input-group">
                                <input type="text" id="name" name="Name" style="color:black;"
                                    class="fcf-form-control form-control" required >
                            </div>
                        </div><!-- form group -->
                    </div>
                    <!-- col 6 -->

                    <div class="col-lg-6 margin-bottom">

                        <div class="fcf-form-group">
                            <label for="postalcode" class="fcf-label">Post Code: (Required)</label>
                            <div class="fcf-input-group">
                                <input type="text" id="postalcode" name="Postal" style="color:black;"
                                    class="fcf-form-control form-control" required>
                            </div>
                        </div><!-- form group -->
                    </div>
                    <!-- col 6 -->

                </div>
                <!-- row -->


                <div class="row">


                    <div class="col-lg-6 margin-bottom">
                        <div class="fcf-form-group">
                            <label for="company" class="fcf-label">Company: (Optional)</label>
                            <div class="fcf-input-group">
                                <input type="text" id="company" name="Company" style="color:black;"
                                    class="fcf-form-control form-control" >
                            </div>
                        </div><!-- form group -->
                    </div>
                    <!-- col 6 -->

                    <div class="col-lg-6 margin-bottom">
                        <div class="fcf-form-group">
                            <label for="accno" class="fcf-label">Acc No: (Optional)</label>
                            <div class="fcf-input-group">
                                <input type="text" id="accno" name="Accno" style="color:black;"
                                    class="fcf-form-control form-control" >
                            </div>
                        </div><!-- form group -->
                    </div>
                    <!-- col 6 -->
                </div>
                <!-- row -->

                <div class="row">
                    <div class="col-lg-6 margin-bottom">
                        <div class="fcf-form-group">
                            <label for="discountcode" class="fcf-label">Discount Code: (Optional)</label>
                            <div class="fcf-input-group">
                                <input type="text" id="discountcode" name="Discountcode" style="color:black;"
                                    class="fcf-form-control form-control" >
                            </div>
                        </div><!-- form group -->
                    </div>
                    <!-- col 6 -->



                    <div class="col-lg-6 margin-bottom">
                        <div class="fcf-form-group">
                            <label for="email" class="fcf-label">E-Mail Address: (Required)</label>
                            <div class="fcf-input-group">
                                <input type="email" id="email" name="Email" style="color:black;"
                                    class="fcf-form-control form-control" required>
                            </div>
                        </div><!-- form group -->

                    </div>
                    <!-- col 6 -->
                </div>
                <!-- row -->

                <div class="row">

                    <div class="col-lg-6 margin-bottom">
                        <div class="fcf-form-group">
                            <label for="hometellno" class="fcf-label">Home Tel No: (Optional)</label>
                            <div class="fcf-input-group">
                                <input type="text" id="hometellno" name="Hometellno" style="color:black;"
                                    class="fcf-form-control form-control" >
                            </div>
                        </div><!-- form group -->

                    </div>
                    <!-- col 6 -->
                    <div class="col-lg-6 margin-bottom">
                        <div class="fcf-form-group">
                            <label for="mobileno" class="fcf-label">Mobile No: (Required)</label>
                            <div class="fcf-input-group">
                                <input type="text" id="mobileno" name="Mobileno" style="color:black;"
                                    class="fcf-form-control form-control" required>
                            </div>
                        </div><!-- form group -->

                    </div>
                    <!-- col 6 -->
                </div>
                <!-- row -->


                <div class="row">


                    <div class="col-lg-6 margin-bottom">

                        <div class="fcf-form-group">
                            <label for="fittingcenter" class="fcf-label">Fitting Center: (Required)</label>
                            <div class="fcf-input-group">
                                <select name="Fittingcenter" id="fittingcenter" class="form-control" required>
                                    <option value="">Fitting Centre</option>
                                    <option value="Glasgow (G72 7TS)">Glasgow (G72 7TS)</option>
                                    <option value="Edinburgh (EH28 8QP)">Edinburgh (EH28 8QP)</option>
                                </select>
                            </div>
                        </div><!-- form group -->

                    </div>
                    <!-- col 6 -->



                    <div class="col-lg-6 margin-bottom">
                        <div class="fcf-form-group">
                            <label for="bookingdate" class="fcf-label">Booking Date: At Least 5 Working Days In
                                Advanced: (Required) </label>
                            <div class="fcf-input-group">
                                <input type="text" id="bookingdate" name="Bookingdate" style="color:black;"
                                    class="fcf-form-control form-control date-pick" required readonly>
                            </div>
                        </div><!-- form group -->
                    </div>
                    <!-- col 6 -->
                </div>
                <!-- row -->

                <div class="row">


                    <div class="col-lg-6 margin-bottom">
                        <div class="fcf-form-group">
                            <label for="bookingtime" class="fcf-label">Booking Time:... Only 08:30am On Saturdays!: (Required)
                            </label>
                            <div class="fcf-input-group">
                                <select name="Bookingtime" id="bookingtime" class=" form-control" required>
                                    <option value="">Preferred Booking Time</option>
                                    <option value="08:00AM">08:00AM</option>
                                    <option value="11:00AM">11:00AM</option>
                                    <option value="14:00PM">14:00PM</option>
                                </select>
                            </div>
                        </div><!-- form group -->
                    </div>
                    <!-- col 6 -->


                    <div class="col-lg-6 margin-bottom">
                        <div class="fcf-form-group">
                            <label for="callrefcode" class="fcf-label">Call Ref Code: (Optional) </label>
                            <div class="fcf-input-group">
                                <input type="text" id="callrefcode" name="Callrefcode" style="color:black;"
                                    class="fcf-form-control form-control" >
                            </div>
                        </div><!-- form group -->
                    </div>
                    <!-- col 6 -->
                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-lg-6  margin-bottom">
                        <div class="fcf-form-group">
                            <label for="vehiclemake" class="fcf-label">Vehicle Make: (Required) </label>
                            <div class="fcf-input-group">
                                <select name="Vehiclemake" id="vehiclemake" class="form-control" required>
                                    <option value="">Select Vehicle Make</option>
                                    <option value="Alfa Romeo">Alfa Romeo</option>
                                    <option value="Audi">Audi</option>
                                    <option value="BMW">BMW</option>
                                    <option value="Chevrolet">Chevrolet</option>
                                    <option value="Chrysler/Jeep">Chrysler/Jeep</option>
                                    <option value="Citroen">Citroen</option>
                                    <option value="Daewoo">Daewoo</option>
                                    <option value="Daihatsu">Daihatsu</option>
                                    <option value="Dodge">Dodge</option>
                                    <option value="Fiat">Fiat</option>
                                    <option value="Ford">Ford</option>
                                    <option value="Honda">Honda</option>
                                    <option value="Hyundai">Hyundai</option>
                                    <option value="Isuzu">Isuzu</option>
                                    <option value="Iveco">Iveco</option>
                                    <option value="Jaguar">Jaguar</option>
                                    <option value="Jaguar/Daimler">Jaguar/Daimler</option>
                                    <option value="KIA">KIA</option>
                                    <option value="Land Rover">Land Rover</option>
                                    <option value="Lexus">Lexus</option>
                                    <option value="LDV/Leyland/DAF">LDV/Leyland/DAF</option>
                                    <option value="MAN">MAN</option>
                                    <option value="Mazda">Mazda</option>
                                    <option value="Mercedes">Mercedes</option>
                                    <option value="Mini">Mini</option>
                                    <option value="Mitsubishi">Mitsubishi</option>
                                    <option value="Motorhome">Motorhome</option>
                                    <option value="Nissan">Nissan</option>
                                    <option value="Peugeot">Peugeot</option>
                                    <option value="Piaggio">Piaggio</option>
				    <option value="Porsche">Porsche</option>
                                    <option value="Proton">Proton</option>
                                    <option value="Reliant">Reliant</option>
                                    <option value="Renault">Renault</option>
                                    <option value="Rover">Rover</option>
                                    <option value="Saab">Saab</option>
                                    <option value="Santana">Santana</option>
                                    <option value="Seat">Seat</option>
                                    <option value="Skoda">Skoda</option>
                                    <option value="Ssangyong">Ssangyong</option>
                                    <option value="Subaru">Subaru</option>
                                      <option value="Dacia">Dacia</option>
                                    <option value="Suzuki">Suzuki</option>
                                    <option value="Tata">Tata</option>
                                    <option value="Toyota">Toyota</option>
                                    <option value="Vauxhall/Opel">Vauxhall/Opel</option>
                                    <option value="Volkswagen">Volkswagen</option>
                                    <option value="Volvo">Volvo</option>
                                </select>
                            </div>
                        </div><!-- form group -->
                    </div>
                    <!-- col 6 -->

                    <div class="col-lg-6  margin-bottom">
                        <div class="fcf-form-group">
                            <label for="vehiclemodel" class="fcf-label">Vehicle Model: (Required) </label>

                            <input type="text" id="vehiclemodel" name="Vehiclemodel" style="color:black;"
                                class="fcf-form-control form-control" required>

                        </div><!-- form group -->
                    </div>
                    <!-- col 6 -->
                </div>
                <!-- row -->

                <div class="row">


                    <div class="col-lg-6  margin-bottom">
                        <div class="fcf-form-group">
                            <label for="vehicletype" class="fcf-label">Vehicle Type: (Required) </label>
                            <select name="vehicletype" id="vehicletype" class="form-control" required>
                                <option selected="selected" value="">Select Vehicle Type</option>
                                <option value="Hatch">Hatch</option>
                                <option value="Saloon">Saloon</option>
                                <option value="Estate">Estate</option>
                                <option value="MPV">MPV</option>
                                <option value="4x4">4x4</option>
                                <option value="Commercial">Commercial</option>
                                <option value="Import">Import</option>
                                <option value="Other">Other</option>
                            </select>

                        </div><!-- form group -->
                    </div>
                    <!-- col 6 -->

                    <div class="col-lg-6  margin-bottom">


                        <div class="fcf-form-group">
                            <label for="vehicleyear" class="fcf-label">Vehicle Year: (Optional) </label>
                           
                                <select name="Vehicleyear" id="vehicleyear" class="form-control">
                                <option selected="selected" value="">Select Vehicle Type</option>
                               <?php
                               for($i=2001;$i<=2030;$i=$i+1)
                               {
                                   ?>
                                <option value="<?php echo $i ?>"><?php echo $i ?></option>
                               <?php
                               }
                               ?>
                            </select>
                        </div><!-- form group -->
                    </div>
                    <!-- col 6 -->
                </div>
                <!-- row -->


                <div class="row">


                    <div class="col-lg-6  margin-bottom">

                        <div class="fcf-form-group">
                            <label for="regprefix" class="fcf-label"> Vehicle Registration Number: (Required) </label>
                            <input type="text" id="regprefix" name="Regprefix" style="color:black;"
                                class="fcf-form-control form-control" required>

                        </div><!-- form group -->
                    </div>
                    <!-- col 6 -->

                    <div class="col-lg-6  margin-bottom">

                        <div class="fcf-form-group">
                            <label for="towbartype" class="fcf-label"> Towbar Type: (Required) </label>
                            <select name="Towbartype" id="towbartype" class="form-control" required>
                                <option selected="selected" value="">Select Fitting Option</option>
                                <option value="Fixed Towbar">Fixed</option>
                                <option value="Swan Neck">Swan Neck</option>
                                <option value="Detachable">Detachable</option>
                            </select>

                        </div><!-- form group -->
                    </div>
                    <!-- col 6 -->
                </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-6  margin-bottom">

                <div class="fcf-form-group">
                    <label for="towbar" class="fcf-label">Towbar: (Required) </label>
                    <select name="Towbar" id="towbar" class="form-control" required>
                        <option selected="selected" value="">Select Towbar Preference</option>
                        <option value="Prefered Fit Towbar">Prefered Fit Towbar</option>
                        <option value="Cheapest Towbar">Cheapest Towbar</option>
                    </select>

                </div><!-- form group -->
            </div>
            <!-- col 6 -->

            <div class="col-lg-6  margin-bottom">

                <div class="fcf-form-group">
                    <label for="towing" class="fcf-label">Towing: (Required) </label>
                    <select name="Towing" id="towing" class="form-control" required>
                        <option selected="selected" value="">Select Towing Requirements</option>
                        <option value="Accessory">Accessory</option>
                        <option value="Cycle Carrier">Cycle Carrier</option>
                        <option value="Caravan">Caravan</option>
                        <option value="Trailer">Trailer</option>
                        <option value="Other">Other</option>
                    </select>

                </div><!-- form group -->
            </div>
            <!-- col 6 -->
        </div>



        <div class="row">


<div class="col-lg-12 margin-bottom">
    <div class="fcf-form-group">
        <label for="Electronics" class="fcf-label">Electronics .........(See Description): (Required)</label>
        <div class="fcf-input-group">
        <input name="radiobutton" type="radio" value="Single Electrics 7 Pin Single Socket" checked required> &nbsp;   Single Electrics 7 Pin Single Socket<br>

           <input name="radiobutton" type="radio" value="Double Electrics Twin Socket 12N/12S" required>&nbsp;  Double Electrics Twin Socket 12N/12S<br>


            <input name="radiobutton" type="radio" value="Double Electrics Twin Socket with Split Charge Relay" required>&nbsp;   Double Electrics Twin Socket with Split Charge Relay<br>
            <input name="radiobutton" type="radio" value="European 13 Pin Single Socket" required>&nbsp; European 13 Pin Single Socket<br>
           
            <input name="radiobutton" type="radio" value="European 13 Pin Single Socket With Split Charge Relay" required>&nbsp;European 13 Pin Single Socket With Split Charge Relay<br>

            <input name="radiobutton" type="radio" value="European 13 Pin Single Socket With Flylead" required>&nbsp;European 13 Pin Single Socket With Flylead <br>

            <input name="radiobutton" type="radio" value="European 13 Pin Single Socket With Flylead & Split Charge" required>&nbsp;European 13 Pin Single Socket With Flylead & Split charge <br>
        </div>
    </div><!-- form group -->
</div>
<!-- col 12 -->


</div>
<!-- row -->

<div class="row">
<div class="col-lg-6  margin-bottom">

<div class="fcf-form-group">
    <label for="cardtype" class="fcf-label">Card Type: (Optional)	 </label>
    <select name="Cardtype" id="cardtype" class="form-control">
    <option selected="selected" value="">Select Card Type</option>
			<option value="Visa Debit">Visa Debit</option>
			<option value="Visa Delta">Visa Delta</option>
			<option value="Visa Credit">Visa Credit</option>
			<option value="Solo">Solo</option>
			<option value="Switch">Switch</option>
			<option value="American Express">American Express</option>
			<option value="Other (Specify Below)">Other (Specify Below)</option>
    </select>

</div><!-- form group -->
</div>
<!-- col 6 -->
<div class="col-lg-6  margin-bottom">

<div class="fcf-form-group">
    <label for="cardnumber" class="fcf-label">Card Number: (Optional)	 </label>
    <input type="text" id="cardnumber" name="Cardnumber" style="color:black;"
        class="fcf-form-control form-control" >

</div><!-- form group -->
</div>
<!-- col 6 -->
</div>
<!-- row -->



<div class="row">
<div class="col-lg-6  margin-bottom">

<div class="fcf-form-group">
    <label for="startdatebooking" class="fcf-label">Start Date- EG (05/22): (Optional)		 </label>
    <input type="text" id="startdatebooking" name="Startdatebooking" style="color:black;"
        class="fcf-form-control form-control" >


</div><!-- form group -->
</div>
<!-- col 6 -->
<div class="col-lg-6  margin-bottom">

<div class="fcf-form-group">
    <label for="enddatebooking" class="fcf-label">End Date- EG (07/27): (Optional)		 </label>
    <input type="text" id="enddatebooking" name="Enddatebooking" style="color:black;"
        class="fcf-form-control form-control" >

</div><!-- form group -->
</div>
<!-- col 6 -->
</div>
<!-- row -->


<div class="row">
<div class="col-lg-6  margin-bottom">

<div class="fcf-form-group">
    <label for="securityno" class="fcf-label">Card Security Number- (CSC): (Last 3 On Back) or 4 on Front (AMEX): (Optional)		 </label>
    <input type="text" id="securityno" name="Securityno" style="color:black;"
        class="fcf-form-control form-control" >


</div><!-- form group -->
</div>
<!-- col 6 -->
</div>
<div class="row">
<div class="col-lg-6  margin-bottom">

<div class="fcf-form-group">
    <label for="enddatebooking" class="fcf-label">Additional Comments/Information: (Optional)	 </label>
    <textarea id="Message" name="Message" class="fcf-form-control form-control"
                                                style="color:black; width:100%" rows="6" maxlength="3000"
                                                ></textarea>

</div><!-- form group -->
</div>
<!-- col 6 -->
</div>
<!-- row -->
<input type="text" name="bt" style="display:none !important" tabindex="-1" autocomplete="off">

        <div class="row">


            <div class="col-lg-6  margin-bottom">


                <div class="fcf-form-group">
                    <button type="submit" id="fcf-button" style="color:red;"
                        class="fcf-btn fcf-btn-primary snd-msg-btn fcf-btn-lg fcf-btn-block site-btn">Send
                        Message</button>
                </div>
            </div>
            <!-- col 6 -->
        </div>
        <!-- row -->

        </form>




    </div>
    <!-- quote-form-parent -->
</div>
<!-- col 12 -->
</div>
<!-- row -->
</div>
<!-- quotation-sec-inner-parent -->
</div>
<!-- inner sec container -->
</div>
<!-- quotation-section -->










<?php include'./footer.php'?>