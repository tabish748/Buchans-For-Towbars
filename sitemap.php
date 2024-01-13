<?php include'./header.php'?>
<style>
.sitemap-section{
    width:100%;
    height:auto;
    padding:40px 20px;
}
.sitemap-inner-parent{
    width:100%;
    height:auto;
}
.sitemap-list {
    list-style:none;
}
.sitemap-list li{
    margin-bottom:15px;
    font-size:21px;
}
.sitemap-list li::before {
    content: ">>";
   
    font-size: 17px;
    margin-right: 12px;
    font-weight: bold;
    color: black;
}
.sitemap-list2 li::before{
    content: ">";
}
</style>
<div class="sitemap-section">
    <div class="inner-sec-container">
        <div class="sitemap-inner-parent">
        <div class="section-head col-sm-12">
                    <h4><span>Buchans for towbars sitemap</span></h4>
                
                </div>

                <ul class="sitemap-list" style="margin-top:30px">
                        <li><a href="index.php">Home </a></li>
                        <li><a href="./towbars.php">Towbars</a>
                    
                    <ul class=" sitemap-list sitemap-list2">
                    <li><a href="./towbars-accessories.php">Towbars Accessories</a></li>
                        <li><a href="./legislation.php">Towbar Legislation</a></li>
                        <li><a href="./clearance.php">Clearance Towbars</a></li>
                        <li><a href="./faqs.php">Towbar FAQs</a></li>
                    </ul>
                </li>
                       
                        <li><a href="./bodyshop.php">Body Shop</a></li>
                        <li><a href="./quotes-and-enquiries.php">Get A Quote</a></li>
                        <li><a href="./booking-online.php">Book In Online</a></li>
                        <li><a href="./company-profile.php">Company Profile</a></li>
                        <li><a href="./roof-system.php">Roof System</a></li>
                        <li><a href="./bike-carriers.php">Bike Carriers</a></li>
                        
                        <li><a href="./contact.php">Contact Us</a></li>
                        <li><a href="./feedback.php">Feedback</a></li>
                        <li><a href="./manufracturer-logo.php">Vehicle Manufacturers </a></li>
                        <li><a href="./covers-4x4.php"> Load Bed Covers</a></li>
                       
                    </ul>
        </div>
        <!-- sitemap-inner-parent -->
    </div>
    <!-- inner-sec-container -->
</div>
<!-- sitemap-section -->


<?php include'./footer.php'?>