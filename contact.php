<?php include'./header.php'?>
<style>
.section-head {
    margin-bottom: 20px;
}

table {
    width: 750px;
    border-collapse: collapse;
    margin: 50px auto;
}

/* Zebra striping */
tr:nth-of-type(odd) {
    background: #eee;
}

th {
    background: #da3934;
    color: white;
    font-weight: bold;
}

td,
th {
    padding: 10px;
    border: 1px solid #ccc;
    text-align: left;
    font-size: 18px;
}

/* 
Max width before this PARTICULAR table gets nasty
This query will take effect for any screen smaller than 760px
and also iPads specifically.
*/
@media only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px) {

    table {
        width: 100%;
    }

    /* Force table to not be like tables anymore */
    table,
    thead,
    tbody,
    th,
    td,
    tr {
        display: block;
    }

    /* Hide table headers (but not display: none;, for accessibility) */
    thead tr {
        position: absolute;
        top: -9999px;
        left: -9999px;
    }

    tr {
        border: 1px solid #ccc;
    }

    td {
        /* Behave  like a "row" */
        border: none;
        border-bottom: 1px solid #eee;
        position: relative;
        padding-left: 50%;
    }

    td:before {
        /* Now like a table header */
        position: absolute;
        /* Top/left values mimic padding */
        top: 6px;
        left: 6px;
        width: 45%;
        padding-right: 10px;
        white-space: nowrap;
        /* Label the data */
        content: attr(data-column);

        color: #000;
        font-weight: bold;
    }

}
</style>
<div class="contactus-section top-sec-padding-top">
    <div class="inner-sec-container">
        <div class="contact-sec-inner-parent">
            <div class="row">
                <div class="section-head col-sm-12">
                    <h4><span>Contact </span>Us</h4>
                    <p>Get In Touch With Us</p>
                </div>
            </div>
            <!-- row -->

            <div class="row">
                <div class="col-lg-6 margin-bottom">
                    <div class="contact-type-col-wrapper">
                        <h3>Glasgow</h3>
                        <p>
                            119 Cambuslang Road
                            <br>
                            Cambuslang
                            <br>
                            Glasgow <br>
                            G72 7TS
                        </p>
                        <h4>Directions</h4>

                        <ul>
                            <li><a href="tel:0141 647 5399"> <img src="assets/img/phone-call-svgrepo-com.svg"
                                        style="width:17px" alt=""> 0141 647 5399</a></li>
                            <li><a href=""><img src="assets/img/fax-svgrepo-com.svg" alt="" style="width:17px"> 0141 613
                                    3255</a></li>
                            <li><a href="mailto:glasgow@buchansfortowbars.co.uk"><img
                                        src="assets/img/email-svgrepo-com.svg" alt="" style="width:17px">
                                    Glasgow@buchansfortowbars.co.uk</a></li>
                        </ul>
                    </div>
                    <!-- contact-type-col-wrapper -->
                </div>
                <!-- col 6 -->


                <div class="col-lg-6  margin-bottom">
                    <div class="contact-type-col-wrapper">
                        <h3>Edinburgh</h3>
                        <p>
                            89 - 91 Station Road
                            <br>
                            Ratho Station
                            <br>
                            Newbridge <br>
                            Edinburgh <br>
                            EH28 8QP
                        </p>
                        <h4>Directions</h4>

                        <ul>
                            <li><a href="tel:01313335060"> <img src="assets/img/phone-call-svgrepo-com.svg"
                                        style="width:17px" alt=""> 0131 333 5060</a></li>

                            <li><a href=""><img src="assets/img/fax-svgrepo-com.svg" alt="" style="width:17px">0131 333
                                    4947</a></li>
                            <li><a href="mailto:edinburgh@buchansfortowbars.co.uk"><img
                                        src="assets/img/email-svgrepo-com.svg" alt="" style="width:17px">
                                    Edinburgh@buchansfortowbars.co.uk</a></li>



                        </ul>
                    </div>
                    <!-- contact-type-col-wrapper -->
                </div>
                <!-- col 6 -->
            </div>
            <!-- row -->

            <!-- ************table************** -->
            <div class="row">
                <div class="col-lg-12">
                    <table>
                        <thead>
                            <tr>
                                <th> Opening Times </th>
                                <th>Glasgow</th>
                                <th>Edinburgh</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-column="Opening Times">Monday– Friday</td>
                                <td data-column="Glasgow">08:00AM – 18:00PM</td>
                                <td data-column="Edinburgh">08:00AM – 17:00PM</td>

                            </tr>
                            <tr>
                                <td data-column="Opening Times">Saturday</td>
                                <td data-column="Glasgow">08:00AM – 12:00PM</td>
                                <td data-column="Edinburgh">08:00AM – 12:00PM</td>

                            </tr>
                            <tr>
                                <td data-column="Opening Times"> Sunday</td>
                                <td data-column="Glasgow">Closed</td>
                                <td data-column="Edinburgh">Closed</td>

                            </tr>


                        </tbody>
                    </table>


                </div>
                <!-- col 12 -->
            </div>
            <!-- row -->
            
              <div class="towbar-search" style="margin:30px auto;    width: 100%;max-width: 420px;">

                    <div class="row">
                        <div class="col-xs-12">
                            <p><b>Ask The Experts!</b></p>
                            <p>Simply enter your email address & question below, our experts are happy to help!</p>




                            <form id="fcf-form-id" class="fcf-form-class" method="post" action="./askexpert-form.php">


                                <div class="fcf-form-group">


                                    <div class="fcf-form-group">
                                        <label for="Email" class="fcf-label"  style="color:#fff">E-Mail Address: (Required)</label>
                                        <div class="fcf-input-group">
                                            <input type="email" id="Email" name="Email" style="color:black;"
                                                class="fcf-form-control" required>
                                        </div>
                                    </div>


                                    <div class="fcf-form-group">
                                        <label for="Message" class="fcf-label" style="color:#fff">Your Message: (Required)</label>
                                        <div class="fcf-input-group">
                                            <textarea id="Message" name="Message" class="fcf-form-control"
                                                style="color:black; width:100%" rows="6" maxlength="3000" required
                                                ></textarea>
                                        </div>
                                    </div>
<input type="text" name="bt" style="display:none !important" tabindex="-1" autocomplete="off">

                                    <div class="fcf-form-group">
                                        <button type="submit" id="fcf-button" style="color:red;background-color:white;"
                                            class="fcf-btn fcf-btn-primary snd-msg-btn fcf-btn-lg fcf-btn-block">Send
                                            Message</button>
                                    </div>


                            </form>
                         


                        </div><!-- /.col-xs-12 -->

                    </div><!-- /.row -->

                </div><!-- /.towbar-search -->
</div>

            <div class="row">
                <div class="col-lg-6">
                    <a href="https://what3words.com/songs.knots.pile" class="contact-w3words-link">
                        <div class="what3word-col-wrapper">
                              <h3>Glasgow</h3>
                            <img src="assets/img/w3w_HorizontalLogo_RGB_Fullcolour_ENG.svg" alt="">
                          

                            <h4>///songs.knots.pile</h4>
                        </div>
                    </a>
                </div>
                <!-- col 6 -->
                <div class="col-lg-6">
                    <a href="https://what3words.com/happily.feuds.provide" class="contact-w3words-link">
                        <div class="what3word-col-wrapper">
                            <h3>Edinburgh</h3>
                            <img src="assets/img/w3w_HorizontalLogo_RGB_Fullcolour_ENG.svg" alt="">
                            

                            <h4>///happily.feuds.provide</h4>
                        </div>
                    </a>
                </div>
                <!-- col 6 -->
            </div>
            <!-- row -->

            <div class="row">
                <div class="col-lg-6 " style="margin-top:20px;">
                    <div class="google-map-wrapper">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d286454.802823467!2d-4.0719616!3d55.881261!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x488841252ff1599b%3A0xed863e9fb4a3427e!2sBuchans%20For%20Towbars%20%26%20Repairs%20Ltd!5e0!3m2!1sen!2s!4v1647526585831!5m2!1sen!2s"
                            style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <!-- google-map-wrapper -->
                </div>
                <!-- col 6 -->

                <div class="col-lg-6 " style="margin-top:20px;">
                    <div class="google-map-wrapper">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d286454.802823467!2d-4.0719616!3d55.881261!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4887c52711480163%3A0x6faf55339e7512eb!2sBuchans%20For%20Towbars%20Ltd!5e0!3m2!1sen!2s!4v1647676664061!5m2!1sen!2s"  style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <!-- google-map-wrapper -->
                </div>
                <!-- col 6 -->
            </div>
            <!-- row -->
        </div>
        <!-- inner parent -->
    </div>
    <!-- inner sec container -->
</div>
<!-- contactus-section -->
<style>
.google-map-wrapper {
    width: 100%;
    height: 350px;
    background-color: whitesmoke;
}

.google-map-wrapper iframe {
    width: 100%;
    height: 100%;
}
</style>
<?php include'./footer.php'?>