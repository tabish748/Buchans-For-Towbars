<?php include'./header.php'?>
<div class="feedback-hero-section top-sec-padding-top">
    <img src="assets/img/feedback.png" alt="">
</div>
<!-- feedback-hero-section -->
<div class="feedback-section">
    <div class="inner-sec-container">
        <div class="feedback-sec-inner-parent">

            <div class="row">
                <div class="section-head col-sm-12">
                    <h4><span> Customer </span>Feedback</h4>
                    <p>We hope that you have enjoyed our website and really do value your opinion it’s better to know
                        your thoughts than not too.</p>
                    <p>Please forward any feedback or suggestions –- by filling in the form below. We would love to hear
                        from you!
                        <br>
                        Any great suggestions that we adopt will be rewarded with a free cycle carrier or chrome flipper
                        cover!
                    </p>
                </div>
            </div>
            <!-- row -->




            <div class="feedback-form-wrapper">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="row">
                            <div class="section-head col-sm-12">
                                <h4 style="font-size:26px"><span> Drop Your </span>Feedback Here!</h4>

                            </div>
                        </div>
                        <!-- row -->



                        <!-- ******************************************** -->

                        <form id="fcf-form-id" class="fcf-form-class" method="post" action="./feedback-form.php">
                                <div class="fcf-form-group">
                                    <label for="Email" class="fcf-label">Your Full Name: (Required)</label>
                                    <div class="fcf-input-group">
                                        <input type="text" id="name" name="Name" style="color:black;"
                                            class="fcf-form-control form-control" required>
                                    </div>
                                </div>
                                <div class="fcf-form-group">
                                    <label for="Email" class="fcf-label">Your E-Mail Address: (Required)</label>
                                    <div class="fcf-input-group">
                                        <input type="email" id="Email" name="Email" style="color:black;"
                                            class="fcf-form-control form-control" required>
                                    </div>
                                </div>
                                
                                                                <div class="fcf-form-group">
                                    <label for="Email" class="fcf-label">Phone No: (Optional)</label>
                                    <div class="fcf-input-group">
                                        <input type="text" id="phone" name="Phone" style="color:black;"
                                            class="fcf-form-control form-control" >
                                    </div>
                                </div>
                                
                                <div class="fcf-form-group">
                                    <label for="Email" class="fcf-label">Post Code: (Required)</label>
                                    <div class="fcf-input-group">
                                        <input type="text" id="Email" name="Postal" style="color:black;"
                                            class="fcf-form-control form-control" required>
                                    </div>
                                </div>


                                <div class="fcf-form-group">
                                    <label for="Message" class="fcf-label">Your Message: (Required)</label>
                                    <div class="fcf-input-group">
                                        <textarea id="Message" name="Message" class="fcf-form-control form-control"
                                            style="color:black; width:100%" rows="6" maxlength="3000" required
                                            ></textarea>
                                    </div>
                                </div>
                            

                                <br>
                                <div class="fcf-form-group">
                                    <button type="submit" id="fcf-button" style="color:red;"
                                        class="fcf-btn fcf-btn-primary snd-msg-btn fcf-btn-lg fcf-btn-block site-btn">Send
                                        Message</button>
                                </div>

    <input type="text" name="bt" style="display:none !important" tabindex="-1" autocomplete="off">
                        </form>

                    </div>
                    <!-- col 12 -->
                </div>
                <!-- row -->
            </div>
            <!-- feedback-form-wrapper -->


        </div>
        <!-- feedback-sec-inner-parent -->
    </div>
    <!-- inner sec container -->
</div>
<!-- feedback-section -->






<?php include'./footer.php'?>