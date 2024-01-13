<?php include'./header.php'?>


<div class="quotes-hero-section top-sec-padding-top">
    <img src="assets/img/quote.png" alt="">
</div>
<!-- quotes-hero-section -->

<div class="quotation-section">
    <div class="inner-sec-container">
        <div class="quotation-sec-inner-parent">
            <div class="row">
                <div class="section-head col-sm-12">
                    <h4><span>Towbar </span>Quotes & Enquiries</h4>
                    <p>Please enter your full requirements below and we will provide a quote for your towbar. Help us to
                        better meet your needs by giving us as much information as possible.
                    </p>

                </div>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="quote-form-parent">


                        <!-- ******************************************** -->

                        <form id="fcf-form-id" class="fcf-form-class" method="post" action="./quotation-form.php">
                            <div class="row">
                                <div class="col-lg-6 margin-bottom">
                                    <div class="fcf-form-group">
                                        <label for="postalcode" class="fcf-label">Name: (Required)</label>
                                        <div class="fcf-input-group">
                                            <input type="text" id="name" name="Name" style="color:black;"
                                                class="fcf-form-control form-control" required>
                                        </div>
                                    </div><!-- form group -->
                                </div>
                                <!-- col 6 -->

                                <div class="col-lg-6 margin-bottom">

                                    <div class="fcf-form-group">
                                        <label for="postalcode" class="fcf-label">Post Code: (Optional)</label>
                                        <div class="fcf-input-group">
                                            <input type="text" id="postalcode" name="Postal" style="color:black;"
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
                                        <label for="Email" class="fcf-label">Your E-Mail Address: (Required)</label>
                                        <div class="fcf-input-group">
                                            <input type="email" id="Email" name="Email" style="color:black;"
                                                class="fcf-form-control form-control" required>
                                        </div>
                                    </div><!-- form group -->
                                </div>
                                <!-- col 6 -->


                                <div class="col-lg-6 margin-bottom">
                                    <div class="fcf-form-group">
                                        <label for="tellno" class="fcf-label">Tel No: (Required)</label>
                                        <div class="fcf-input-group">
                                            <input type="text" id="tellno" name="Tellno" style="color:black;"
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
                                        <label for="callrefcode" class="fcf-label">Call Ref Code: (Optional)</label>
                                        <div class="fcf-input-group">
                                            <input type="text" id="callrefcode" name="Callrefcode"
                                                style="color:black;" class="fcf-form-control form-control" >
                                        </div>
                                    </div><!-- form group -->
                                </div>
                                <!-- col 6 -->

                                <div class="col-lg-6 margin-bottom">
                                    <div class="fcf-form-group">
                                        <label for="Message" class="fcf-label">Vehicle Make: (Required)</label>
                                        <div class="fcf-input-group">
                                            <select name="Vehiclemake" id="frmVehicle" class="form-control" required>
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
                                                <option value="Infiniti">Infiniti</option>
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
                                                <option value="Dacia">Dacia</option>
                                                <option value="Renault">Renault</option>
                                                <option value="Rover">Rover</option>
                                                <option value="Saab">Saab</option>
                                                <option value="Santana">Santana</option>
                                                <option value="Seat">Seat</option>
                                                <option value="Skoda">Skoda</option>
                                                <option value="Ssangyong">Ssangyong</option>
                                                <option value="Subaru">Subaru</option>
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
                            </div>
                            <!-- row -->


                            <div class="row">


                                <div class="col-lg-6 margin-bottom">

                                    <div class="fcf-form-group">
                                        <label for="vehiclemodel" class="fcf-label">Vehicle Model:  (Required)</label>
                                        <div class="fcf-input-group">
                                            <input type="text" id="vehiclemodel" name="Vehiclemodel"
                                                style="color:black;" class="fcf-form-control form-control" required>
                                        </div>
                                    </div><!-- form group -->

                                </div>
                                <!-- col 6 -->



                                <div class="col-lg-6 margin-bottom">
                                    <div class="fcf-form-group">
                                        <label for="Message" class="fcf-label">Vehicle Type: (Optional)</label>
                                        <div class="fcf-input-group">
                                            <select name="Vehicletype" id="vehicletype" class="form-control">
                                                <option selected="selected" value="">Select Vehicle Type</option>
                                                <option value="Hatch">Hatch</option>
                                                <option value="Saloon">Saloon</option>
                                                <option value="Estate">Estate</option>
                                                <option value="MPV">MPV</option>
                                                <option value="4x4">4x4</option>
                                                <option value="Dacia">Dacia</option>
                                                <option value="Commercial">Commercial</option>
                                                <option value="Import">Import</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                    </div><!-- form group -->
                                </div>
                                <!-- col 6 -->
                            </div>
                            <!-- row -->

                            <div class="row">


                                <div class="col-lg-6 margin-bottom">
                                    <div class="fcf-form-group">
                                        <label for="vehicleyear" class="fcf-label">Vehicle Year: (Required)</label>
                                        <div class="fcf-input-group">
                                            <input type="text" id="vehicleyear" name="Vehicleyear"
                                                style="color:black;" class="fcf-form-control form-control" required>
                                        </div>
                                    </div><!-- form group -->
                                </div>
                                <!-- col 6 -->


                                <div class="col-lg-6 margin-bottom">
                                    <div class="fcf-form-group">
                                        <label for="registrationno" class="fcf-label">Vehicle Registration Number: (Optional)</label>
                                        <div class="fcf-input-group">
                                            <input type="text" id="registrationno" name="Registrationno"
                                                style="color:black;" class="fcf-form-control form-control" >
                                        </div>
                                    </div><!-- form group -->
                                </div>
                                <!-- col 6 -->
                            </div>
                            <!-- row -->


                            <div class="row">
                                <div class="col-lg-6  margin-bottom">
                                    <div class="fcf-form-group">
                                        <label for="reversingsensor" class="fcf-label">Reversing Sensors:  (Required)</label>
                                        <div class="fcf-input-group">
                                            <select name="Reversingsensor" id="reversingsensor" class="form-control" required>
                                                <option selected="selected" value="">Select Sensors Fitted Yes/No
                                                </option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                                <option value="Not Sure">Not Sure</option>
                                            </select>
                                        </div>
                                    </div><!-- form group -->
                                </div>
                                <!-- col 6 -->

                                <div class="col-lg-6  margin-bottom">
                                    <div class="fcf-form-group">
                                        <label for="towbartype" class="fcf-label">Towbar Type:  (Required)</label>
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
                            <!-- row -->

                            <div class="row">


                                <div class="col-lg-6  margin-bottom">
                                    <div class="fcf-form-group">
                                        <label for="towbar" class="fcf-label">Towbar:  (Required)</label>
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
                                        <label for="towing" class="fcf-label">Towing:  (Required)</label>
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
                            <!-- row -->


                            <div class="row">


                                <div class="col-lg-6 margin-bottom">
                                    <div class="fcf-form-group">
                                        <label for="Electronics" class="fcf-label">Electronics:  (Required)</label>
                                        <div class="fcf-input-group">
                                            <input name="radiobutton" type="radio" value="Single Electrics" checked required>
                                            &nbsp;
                                            Single
                                            Electrics <br>
                                            <input name="radiobutton" type="radio" value="Double Electrics" required>&nbsp;
                                            Double
                                            Electrics <br>
                                            <input name="radiobutton" type="radio"
                                                value="Double Electrics with Split Charge Relay" required>&nbsp;
                                            Double Electrics with Split
                                            Charge Relay<br>
                                            <input name="radiobutton" type="radio" value="European 13 Pin" required>&nbsp;
                                            European
                                            13 Pin <br>
                                            <input name="radiobutton" type="radio"
                                                value="European 13 Pin With Flylead">&nbsp;European
                                            13 Pin With Flylead<br>
                                        </div>
                                    </div><!-- form group -->
                                </div>
                                <!-- col 6 -->

                              
                            </div>
                            <!-- row -->
<div class="row">
<div class="col-lg-6  margin-bottom">
                                    <div class="fcf-form-group">
                                        <label for="Message" class="fcf-label">Your Message: (Optional)</label>
                                        <div class="fcf-input-group">
                                            <textarea id="Message" name="Message" class="fcf-form-control form-control"
                                                style="color:black; width:100%" rows="6" maxlength="3000"
                                                ></textarea>
                                        </div>
                                    </div><!-- form group -->
                                </div>
                                <!-- col 6 -->
</div>
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