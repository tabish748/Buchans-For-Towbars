<?php
  session_start();
?>
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
        padding-left: 0;
        width:fit-content;
        display:inline
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

<div class="thanks-section top-sec-padding-top">
    <div class="inner-sec-container">
    <div class="section-head  col-sm-12 margin-bottom">
                <h4 ><span>Thanks! </span></h4>
               
                <h3 style="color:#222">Thank You <?php echo $_SESSION['qname']; ?> </h3>
               
                <h3  style="color:#222">We have received your towbar quotation request and will contact you soon. <br><br>
               Please make sure you entered your email address and details correctly, this ensures we can respond to your request effectively. <br> <br>
                Regards: Sales Team <br> <br>
              
                <b>Buchans for Towbars</b>
                
</h3>
            </div>



            <div class="row">
                <div class="col-lg-12">
                    <table>
                   
                        <tbody>
                            <tr>
                                <td data-column="   "> Name </td>
                                <td data-column=" "> <?php echo $_SESSION['qname']; ?></td>

                            </tr>
                            
                              <tr>
                                <td data-column="   "> Post code </td>
                                <td data-column=" "> <?php echo $_SESSION['qpostal']; ?></td>

                            </tr>
                              <tr>
                                <td data-column="   "> Company </td>
                                <td data-column=" "> <?php echo $_SESSION['qcompany']; ?></td>

                            </tr>
                              <tr>
                                <td data-column="   "> Acc no </td>
                                <td data-column=" "> <?php echo $_SESSION['qaccno']; ?></td>

                            </tr>
                              <tr>
                                <td data-column="   "> Email </td>
                                <td data-column=" "> <?php echo $_SESSION['qemail']; ?></td>

                            </tr>
                            
                              <tr>
                                <td data-column="   "> Telephone no </td>
                                <td data-column=" "> <?php echo $_SESSION['qtellno']; ?></td>

                            </tr>
                            
                              <tr>
                                <td data-column="   "> Call Ref Code </td>
                                <td data-column=" "> <?php echo $_SESSION['qcallrefcode']; ?></td>

                            </tr>
                            
                              <tr>
                                <td data-column="   "> Vehicle Make </td>
                                <td data-column=" "> <?php echo $_SESSION['qvehiclemake']; ?></td>

                            </tr>
                            
                              <tr>
                                <td data-column="   "> Vehicle Model </td>
                                <td data-column=" "> <?php echo $_SESSION['qvehiclemodel']; ?></td>

                            </tr>
                            
                              <tr>
                                <td data-column="   "> Vehicle Type </td>
                                <td data-column=" "> <?php echo $_SESSION['qvehicletype']; ?></td>

                            </tr>
                              <tr>
                                <td data-column="   "> Vehicle Year </td>
                                <td data-column=" "> <?php echo $_SESSION['qvehicleyear']; ?></td>

                            </tr>
                            
                            <tr>
                                <td data-column="   ">Vehicle Registration Number </td>
                                <td data-column=" "> <?php echo $_SESSION['qregistrationno']; ?></td>

                            </tr>
                            
                            <tr>
                                <td data-column="   "> Reversing Sesnor </td>
                                <td data-column=" "> <?php echo $_SESSION['qreversingsensor']; ?></td>

                            </tr>
                            
                            
                            <tr>
                                <td data-column="   "> Towbar Type </td>
                                <td data-column=" "> <?php echo $_SESSION['qtowbartype']; ?></td>

                            </tr>
                            
                            <tr>
                                <td data-column="   "> Towbar </td>
                                <td data-column=" "> <?php echo $_SESSION['qtowbar']; ?></td>

                            </tr>
                            
                            <tr>
                                <td data-column="   "> Towing </td>
                                <td data-column=" "> <?php echo $_SESSION['qtowing']; ?></td>

                            </tr>
                            
                            <tr>
                                <td data-column="   "> Electrics Required </td>
                                <td data-column=" "> <?php echo $_SESSION['qradiobutton']; ?></td>

                            </tr>
                            
                            <tr>
                                <td data-column="   "> Message </td>
                                <td data-column=" "> <?php echo $_SESSION['qmessage']; ?></td>

                            </tr>
                            
                            
                        
                        </tbody>
                    </table>
                </div>
                <!-- col 12 -->
            </div>
            <!-- row -->

    </div>
    <!-- inner sec container -->
</div>
<!-- thanks section -->

<?php include'./footer.php' ?>