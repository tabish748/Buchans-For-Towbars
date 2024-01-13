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
<div class="clearance-towbar-section top-sec-padding-top">
    <div class="inner-sec-container">
        <div class="clearance-sec-inner-parent">
            <div class="row">
                <div class="section-head col-sm-12">
                    <h4><span>Towbar Clearance Section Updated </span>27/07/12 Specials Old Stock</h4>
                    <h3 style="text-align:center;">
                        Supply only prices below. Any of these bars can be fitted with Single Electrics and a Towball
                        for an additional £40.00
                        (Sale Prices All + Vat)
                    </h3>
                </div>
            </div>
            <!-- row -->


            <div class="row">
                <div class="col-lg-12">
                    <table>
                        <thead>
                            <tr>
                                <th>Order Code</th>
                                <th>Description</th>
                                <th> Sale Price</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-column="Order Code">CN257 </td>
                                <td data-column="Description"> BX Estate 85-94</td>
                                <td data-column="Sale Price">£50.50</td>

                            </tr>
                            <tr>
                                <td data-column="Order Code">CN425</td>
                                <td data-column="Description"> ZX Estate 94-98</td>
                                <td data-column="Sale Price">£50.50</td>

                            </tr>
                            <tr>
                                <td data-column="Order Code"> DN410/1</td>
                                <td data-column="Description"> Nissan Serena 93-98/ Nissan Vanette E98 -</td>
                                <td data-column="Sale Price">£92.00</td>

                            </tr>
                            <tr>
                                <td data-column="Order Code">FR150/1</td>
                                <td data-column="Description">Fiesta/Van/XR2/Ghia 83-89</td>
                                <td data-column="Sale Price">£40.00</td>

                            </tr>

                            <tr>
                                <td data-column="Order Code">FR154/1</td>
                                <td data-column="Description">Escort estate 86-89 /Orion </td>
                                <td data-column="Sale Price">£40.00</td>

                            </tr>


                            <tr>
                                <td data-column="Order Code">FR160 </td>
                                <td data-column="Description">Sierra hb 82-87 </td>
                                <td data-column="Sale Price">£40.00</td>

                            </tr>
                            <tr>
                                <td data-column="Order Code">FR303 </td>
                                <td data-column="Description">Fiesta/Van/XR2 89-95</td>
                                <td data-column="Sale Price">£64.00</td>

                            </tr>

                            <tr>
                                <td data-column="Order Code">FR364 </td>
                                <td data-column="Description">Ford Lcv Courier 1991 - 2002</td>
                                <td data-column="Sale Price">£72.00</td>

                            </tr>
                            <tr>
                                <td data-column="Order Code">FR367/2 </td>
                                <td data-column="Description">FORD ESCORT ESTATE 1990 - 1998 </td>
                                <td data-column="Sale Price">£70.00</td>

                            </tr>
                            <tr>
                                <td data-column="Order Code"> FR388/9 </td>
                                <td data-column="Description">Ford Mondeo H/Bsal(Exc RS Mdl) Mar 93 - Oct 96 </td>
                                <td data-column="Sale Price">£70.00</td>

                            </tr>
                            <tr>
                                <td data-column="Order Code"> RO341</td>
                                <td data-column="Description">800 Series 91-98/Legend Sal </td>
                                <td data-column="Sale Price">£70.00</td>

                            </tr>

                            <tr>
                                <td data-column="Order Code"> RO434 </td>
                                <td data-column="Description">Rover 100 94-98 </td>
                                <td data-column="Sale Price">£55.00</td>

                            </tr>
                            <tr>
                                <td data-column="Order Code"> RT314 </td>
                                <td data-column="Description">Laguna Estate 95-98 </td>
                                <td data-column="Sale Price">£50.00</td>

                            </tr>
                            <tr>
                                <td data-column="Order Code"> RT352/1 </td>
                                <td data-column="Description">19 Hatch/Saloon 90-96 </td>
                                <td data-column="Sale Price">£50.00</td>

                            </tr>
                            <tr>
                                <td data-column="Order Code"> SU396 </td>
                                <td data-column="Description">Vitara SWB 88-</td>
                                <td data-column="Sale Price">£40.00</td>

                            </tr>
                            <tr>
                                <td data-column="Order Code"> VH220/1 </td>
                                <td data-column="Description">Vauxhall Astra Estate / Van Nov 1984 - Feb 1998 </td>
                                <td data-column="Sale Price">£65.00</td>

                            </tr>
                            <tr>
                                <td data-column="Order Code">VH263/1 </td>
                                <td data-column="Description">Carlton Estate 86-94 </td>
                                <td data-column="Sale Price">£45.00</td>

                            </tr>
                            <tr>
                                <td data-column="Order Code">VH375 </td>
                                <td data-column="Description">Cavalier 4wd/2000 Gsi 89- </td>
                                <td data-column="Sale Price">£40.00</td>

                            </tr>

                            <tr>
                                <td data-column="Order Code">VH416 </td>
                                <td data-column="Description">Omega Saloon 94- </td>
                                <td data-column="Sale Price">£45.00</td>

                            </tr>
                            <tr>
                                <td data-column="Order Code">VH438 </td>
                                <td data-column="Description">Vauxhall Vectra Est 96-98</td>
                                <td data-column="Sale Price">£60.00</td>

                            </tr>

                        </tbody>
                    </table>
                </div>
                <!-- col 12 -->
            </div>
            <!-- row -->
        </div>
        <!-- clearance-sec-inner-parent -->
    </div>
    <!-- inner sec container -->
</div>
<!-- clearance-towbar-section -->
<?php include'./footer.php'?>