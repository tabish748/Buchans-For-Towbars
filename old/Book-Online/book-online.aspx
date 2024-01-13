f<%@ Page Language="C#" ContentType="text/html" ResponseEncoding="iso-8859-1" %>
<%@ Register TagPrefix="WebxelMail" Namespace="WebXeLMail" Assembly="WebxelMail"%>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Buchans for Towbars - Online Booking System Glasgow &amp; Edinburgh</title>
<meta name="description" content="Largest independent fitters in Scotland with depots in both Glasgow and Edinburgh, offering a towbar fitting service as well as mail order from all of the industry's leading manufacturers such as Brink and Witter.">
<meta name="keywords" content="buchans, buchans for towbars, scotland, edinburgh, glasgow, towbars, towbar, fitting, retail, trade, diy, mail order, brink, witter, accessories, roof systems, cycle carriers, electrics, Online Towbar Booking, Book Online Buchans, Buchans Towbar booking">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../styles.css" rel="stylesheet" type="text/css" media="screen">
<link href="../print.css" rel="stylesheet" type="text/css" media="print">
<script type="text/JavaScript" src="../script.js"></script>
<!--[if IE 5]><style>#navlist a {height: 1em; float: left; clear: both; width: 100%;}</style><![endif]-->
<!--[if IE 6]><style>#navlist a {height: 1em;}</style><![endif]-->
</head>
<body  onLoad="MM_preloadImages('../images/menubgr.gif','../images/menubgrhov.gif','../images/menubgrwh.gif','../images/wxl.gif')">
<div id="container"><!-- #BeginLibraryItem "/Library/header.lbi" --><div id="headerprint"><img src="../images/buchanslogoprint.gif" width="700" height="130"></div>
<h1>Buchans For Towbars and Roof Racks<br>
Towing solutions from Scotland's leading towbar specialists</h1>
<!-- #EndLibraryItem --><!-- #BeginLibraryItem "/Library/menu.lbi" --><div id="menu">
  <div id="navspacer"><img src="../images/headerlogobtm.gif" width="205" height="50" /></div>
    <div id="navlist">
      <ul>
        <li><a href="../default.htm">Home</a></li>
        <li><a href="towbars.aspx">Towbars </a></li>
        <li><a href="accessories.htm">Towbar Accessories </a></li>
        <li><a href="quotes.aspx">Towbar Quotes </a></li>
        <li><a href="legislation.htm">Towbar Legislation </a></li>
		<li><a href="faqs.htm">Towbar FAQ's </a></li>
        <li><a href="../thule/roofsystems.htm">Roof Systems </a></li>
        <li><a href="../cyclecarriers/cyclecarriers.htm">Cycle Carriers </a></li>
        <li><a href="../company/profile.htm">Company Profile </a></li>
        <li><a href="../company/contact.htm">Contact Us </a></li>
	    <li><a href="../company/feedback.aspx">Feed Back </a></li>		
      </ul>
    </div>
  </div><!-- #EndLibraryItem --><div id="main">
  <h2>Towbar Online Booking System</h2>
  <webxelmail:mail ID="WxlMailer" Offline="false" DisplayBody="true" From='send@jdbsolutions.co.uk' SenderName='<%# Request.Form["frmName"] %>' Recipient='enquiries@buchansfortowbars.co.uk' cc='<%# Request.Form["frmEmail"] %>' ReplyTo='<%# Request.Form["frmEmail"] %>' Subject="Online Towbar Booking - Buchans for Towbars" Body="quote_template.htm" SmtpUser="" SmtpPassword="" AuthenticationMode="Basic" SmtpServer="127.0.0.1" RegEmail="webxel.com" RegKey="T1HpsAHs1S9PoK1RhwSbuQ==" runat="server">
	<webxelmail:ControlCloak ControlToCloak='TblToHideOnSend' runat="server"></webxelmail:ControlCloak>
</webxelmail:mail><form action="" method="POST" enctype="application/x-www-form-urlencoded" name="form1" id="form1" runat="server">
        <table border="0" cellpadding="1" cellspacing="0" id="TblToHideOnSend" runat="server">
          <tr>
            <td height="35" colspan="2"> <p>Please enter your full requirements below. Help us to better meet your needs by giving us as much information as possible.</p></td>
          </tr>
          <tr>
            <td valign="top" class="frmfldName">Full Name:</td>
            <td class="validation"><input name="frmName" type="text" class="formfield200" id="frmName" size="29" runat="server">
                <asp:RequiredFieldValidator ID="RequiredFieldValidator1" EnableClientScript="true" Display="Dynamic" ErrorMessage="Name Required" ControlToValidate="frmName" runat="server"></asp:RequiredFieldValidator>
            </td>
          </tr>
          <tr>
            <td valign="top" class="frmfldName">Postcode:</td>
            <td class="validation"><input name="frmPostcode" type="text" class="formfield200" id="frmPostcode" size="15" runat="server">
                <asp:RequiredFieldValidator ID="RequiredFieldValidator12" EnableClientScript="true" Display="Dynamic" ErrorMessage="Postcode Required" ControlToValidate="frmPostcode" runat="server"></asp:RequiredFieldValidator></td>
          </tr>
          <tr>
            <td class="frmfldName">Company:</td>
            <td class="validation"><input name="frmCompany" type="text" class="formfield200" id="frmCompany" size="25" runat="server"></td>
          </tr>
          <tr>
            <td class="frmfldName">Acc. No:</td>
            <td class="validation"><input name="frmAccNo" type="text" class="formfield200" id="frmAccNo" size="15" runat="server"></td>
          </tr>
          <tr>
            <td class="frmfldName">E-Mail:</td>
            <td valign="top" class="validation"><input name="frmEmail" type="text" class="formfield200" id="frmEmail" size="29" runat="server">
                <asp:RequiredFieldValidator ControlToValidate="frmEmail" ID="RequiredFieldValidator2" EnableClientScript="true" Display="Dynamic" ErrorMessage="Email Required" runat="server"></asp:RequiredFieldValidator>
                <asp:RegularExpressionValidator ID="RegularExpressionValidator1" EnableClientScript="true" Display="Dynamic" ErrorMessage="Invalid Email Address" ControlToValidate="frmEmail" ValidationExpression="\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*" runat="server"></asp:RegularExpressionValidator></td>
          </tr>
          <tr>
            <td class="frmfldName">Home Tel No:</td>
            <td class="validation"><input name="frmTelephone" type="text" class="formfield200" id="frmTelephone" size="29" runat="server">
<asp:RequiredFieldValidator ID="RequiredFieldValidator13" EnableClientScript="true" Display="Dynamic" ErrorMessage="Telephone No Required" ControlToValidate="frmTelephone" runat="server"></asp:RequiredFieldValidator></td>	
 	</tr>
          <tr>

 	<td class="frmfldName">Mobile No:</td>
            <td class="validation"><input name="frmMobile" type="text" class="formfield200" id="frmMobile" size="29" runat="server">
          </tr>
          <tr>
	</td>
<td class="frmfldName">Fitting Center:</td>
            <td class="validation">
			<select name="frmCenter" id="frmCenter" class="formfielddd" runat="server">
	<option value="">Fitting Center</option>
	<option value="Glasgow (G72 7TS)">Glasgow (G72 7TS)</option>
	<option value="Edinburgh (EH28 8QP)">Edinburgh (EH28 8QP)</option>
	 </select>
              <asp:RequiredFieldValidator ID="RequiredFieldValidator9" EnableClientScript="true" Display="Dynamic" ErrorMessage="Fitting Center Required" ControlToValidate="frmcenter" runat="server"></asp:RequiredFieldValidator>
            </td>
          </tr>
          <tr>
	</tr>
	<tr title="The booking date must be at least 5 Days in advanced to allow us to reserve a booking slot for you and also to allow us to order any other parts that are required for your vehicle.                                                                             Please Note: We are not open on Saturday afternoons or Sundays!">
            <td valign="top" class="frmfldName">Booking Date: ... At Least 5 Days In Advanced DD/MM/YYYY</td>
                 <td class="validation"><input name="frmDate" type="text" class="formfield200" id="frmDate" size="15" runat="server">
                
<asp:RequiredFieldValidator ID="RequiredFieldValidator11" EnableClientScript="true" Display="Dynamic" ErrorMessage="Booking Date Required" ControlToValidate="frmDate" runat="server"></asp:RequiredFieldValidator></td>        
	

          </tr>
          <tr>
<td class="frmfldName">Booking Time:...... Only 08:30am On Saturdays!</td>
            <td class="validation">
			<select name="frmTime" id="frmTime" class="formfielddd" runat="server">
	<option value="">Preferred Booking Time</option>
	<option value="08:30am">08:30am</option>
	<option value="10:30am">10:30am</option>
	<option value="13:00pm">13:00pm</option>
	<option value="15:00pm">15:00pm</option>
            </select>
              <asp:RequiredFieldValidator ID="RequiredFieldValidator10" EnableClientScript="true" Display="Dynamic" ErrorMessage="Booking Time Required" ControlToValidate="frmtime" runat="server"></asp:RequiredFieldValidator>
            </td>
          </tr>
          <tr>
	</tr>
          <tr>
            <td nowrap class="frmfldName" title="Please enter your call reference code to allow us to find your details if you have called in for a quote.">Call Ref Code:</td>
            <td class="validation" title="Please enter your call reference code to allow us to find your details if you have called in for a quote."><input name="frmDiscount" type="text" class="formfield200" id="frmDiscount" size="15" runat="server"></td>
          </tr>
          <tr>
            <td class="frmfldName">Vehicle Make:</td>
            <td class="validation">
			<select name="frmVehicle" id="frmVehicle" class="formfielddd" runat="server">
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
	<option value="Suzuki">Suzuki</option>
	<option value="Tata">Tata</option>
	<option value="Toyota">Toyota</option>
	<option value="Vauxhall/Opel">Vauxhall/Opel</option>
	<option value="Volkswagen">Volkswagen</option>
	<option value="Volvo">Volvo</option>
            </select>
              <asp:RequiredFieldValidator ID="RequiredFieldValidator6" EnableClientScript="true" Display="Dynamic" ErrorMessage="Vehicle Make Required" ControlToValidate="frmVehicle" runat="server"></asp:RequiredFieldValidator>
            </td>
          </tr>
          <tr>
            <td class="frmfldName">Vehicle Model:</td>
            <td class="validation"><font color="#999999">
              <input name="frmModel" type="text" class="formfield200" id="frmModel" size="29" runat="server">
              <asp:RequiredFieldValidator ID="RequiredFieldValidator16" EnableClientScript="true" Display="Dynamic" ErrorMessage="Vehicle Model Required" ControlToValidate="frmModel" runat="server"></asp:RequiredFieldValidator>
            </font></td>
          </tr>
          <tr>
            <td class="frmfldName">Vehicle Type:</td>
            <td class="validation">              <span class="validation">
              <select name="frmType" class="formfielddd" id="frmType" runat="server">
                <option value="" selected>Select Vehicle Type</option>
                <option value="Hatch">Hatch</option>
                <option value="Saloon">Saloon</option>
                <option value="Estate">Estate</option>
                <option value="MPV">MPV</option>												
                <option value="4x4">4x4</option>
                <option value="Commercial">Commercial</option>
                <option value="Import">Import</option>
				<option value="Other">Other</option>
            </select>
              <asp:RequiredFieldValidator ID="RequiredFieldValidator18" EnableClientScript="true" Display="Dynamic" ErrorMessage="Vehicle Type Required" ControlToValidate="frmType" runat="server"></asp:RequiredFieldValidator>
            </span></td>
          </tr>
          <tr>
            <td height="23" class="frmfldName">Vehicle Year: </td>
            <td valign="bottom" class="validation"><font color="#999999">
              <input name="frmYear" type="text" class="formfield200" id="frmYear" size="15" runat="server">
              <asp:RequiredFieldValidator ID="RequiredFieldValidator17" EnableClientScript="true" Display="Dynamic" ErrorMessage="Vehicle Year Required" ControlToValidate="frmYear" runat="server"></asp:RequiredFieldValidator>
            </font></td>
          </tr>
          <tr>
            <td class="frmfldName">Reg Prefix: </td>
            <td class="validation"><font color="#999999">
              <input name="frmPrefix" type="text" class="formfield200" id="frmPrefix" size="15" runat="server">
              <asp:RequiredFieldValidator ID="RequiredFieldValidator52" EnableClientScript="true" Display="Dynamic" ErrorMessage="Reg Prefix Required" ControlToValidate="frmPrefix" runat="server"></asp:RequiredFieldValidator>
            </font></td>
          </tr>
          <tr>
            <td class="frmfldName">Towbar Type:</td>
            <td class="validation"><select name="Enquiry" class="formfielddd" id="Enquiry" runat="server">
                <option value="" selected>Select Fitting Option</option>
                <option value="Fixed Towbar">Fixed</option>
                <option value="Swan Neck">Swan Neck</option>
                <option value="Detachable">Detachable</option>
              </select>
                <asp:RequiredFieldValidator ControlToValidate="Enquiry" ID="RequiredFieldValidator4" EnableClientScript="true" Display="Dynamic" ErrorMessage="Fitting Required" runat="server"></asp:RequiredFieldValidator>
            </td>
          </tr>
          <tr>
            <td class="frmfldName">Towbar:</td>
            <td valign="bottom" class="validation"><select name="Towbar" class="formfielddd" id="Towbar" runat="server">
                <option value="" selected>Select Towbar Preference</option>
                <option value="Prefered Fit Towbar">Prefered Fit Towbar</option>
                <option value="Cheapest Towbar">Cheapest Towbar</option>
              </select>
                <asp:RequiredFieldValidator ControlToValidate="Towbar" ID="RequiredFieldValidator19" EnableClientScript="true" Display="Dynamic" ErrorMessage="Towbar Required" runat="server"></asp:RequiredFieldValidator>
            </td>
          </tr>
          <tr>
            <td class="frmfldName">Towing: </td>
            <td class="validation">
			<select name="frmTowing" class="formfielddd" id="frmTowing" runat="server">
                <option value="" selected>Select Towing Requirements</option>
                <option value="Accessory">Accessory</option>
                <option value="Cycle Carrier">Cycle Carrier</option>
                <option value="Caravan">Caravan</option>
				<option value="Trailer">Trailer</option>
                <option value="Other">Other</option>												
            </select> <asp:RequiredFieldValidator ID="RequiredFieldValidator53" EnableClientScript="true" Display="Dynamic" ErrorMessage="Towing Required" ControlToValidate="frmTowing" runat="server"></asp:RequiredFieldValidator>              </td>
          </tr>
          <tr>
            <td valign="top" class="frmfldName">Electrics       .........(See Description):</td>
            <td title="Single electrics are required to power indicators, tail, side, brake and fog lights."><table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr title="Single electrics are required to power indicators, tail, side, brake and fog lights.">
                <td width="25"><input name="radiobutton" type="radio" value="Single Electrics 7 Pin Single Socket" checked></td>
                <td>Single Electrics 7 Pin Single Socket </td>
              </tr>
              <tr title="Double electrics are required when towing a caravan to supply power to the fridge and battery as well as taking a 12v feed into the caravan for interior lights etc.">
                <td><input name="radiobutton" type="radio" value="Double Electrics Twin Socket 12N/12S"></td>
                <td>Double Electrics Twin Socket 12N/12S </td>
              </tr>
              <tr title="A Split Charge Relay can be added to double electrics when towing a caravan to prevent your car battery being drained by your caravan when stationery.">
                <td><input name="radiobutton" type="radio" value="Double Electrics Twin Socket with Split Charge Relay"></td>
                <td>Double Electrics Twin Socket with Split Charge Relay </td>
              </tr>
	<tr title="This option for electrics is if you are towing a caravan or you have a cycle carrier with a 13 pin plug fitted (Note: Most new caravans from September 2008 onwards normally come with this fitted!).">
                <td><input name="radiobutton" type="radio" value="European 13 Pin Single Socket"></td>
                <td>European 13 Pin Single Socket</td>
      		</tr>
	<tr title="A Split Charge Relay can be added to 13 Pin Electrics when towing a caravan to prevent your car battery being drained by your caravan when stationery.">
                <td><input name="radiobutton" type="radio" value="European 13 Pin Single Socket With Split Charge Relay"></td>
                <td>European 13 Pin Single Socket With Split Charge Relay</td>
      		</tr>
	<tr title="This option must be chosen if you are going for a detachable type towbar as there is only one socket plate on detachable towbars so if you have two sockets and require a detachable you must go with the 13 pin & Flylead.">
                <td><input name="radiobutton" type="radio" value="European 13 Pin Single Socket With Flylead"></td>
                <td>European 13 Pin Single Socket With Flylead</td>
	<tr title="This option must be chosen if you are going for a detachable type towbar as there is only one socket plate on detachable towbars so if you have two sockets and require a detachable you must go with the 13 pin & Flylead. Note: A Split Charge Relay can be added to double electrics when towing a caravan to prevent your car battery being drained by your caravan when stationery..">
                <td><input name="radiobutton" type="radio" value="European 13 Pin Single Socket With Flylead & Split Charge"></td>
                <td>European 13 Pin Single Socket With Flylead & Split charge</td>
            </table>                          </td>
         
      	</tr>

          <tr>
            <td height="23" class="frmfldName">Card Number: </td>
            <td valign="bottom" class="validation"><font color="#999999">
              <input name="frmCardNo" type="text" class="formfield200" id="frmCardNo" size="15" runat="server">
              <asp:RequiredFieldValidator ID="RequiredFieldValidator17" EnableClientScript="true" Display="Dynamic" ErrorMessage="Card Number Required" ControlToValidate="frmCardNo" runat="server"></asp:RequiredFieldValidator>
            </font></td>
    </tr>      
<tr>
            <td valign="top" class="frmfldName">Additional<br>
            Comments/<br>
            Information:</td>
            <td class="validation"><textarea name="frmMessage" cols="50" rows="10" class="frmMessage" id="frmMessage" runat="server"></textarea>
            </td>
          </tr>
          <tr>
            <td height="35" valign="top" class="frmfldName">&nbsp;</td>
            <td class="validation"><input name="Submit" type="Submit" class="frmbtns" id="Submit" value="Submit Your Booking" runat="server">
                <asp:ValidationSummary ID="ValidationSummary1" EnableClientScript="true" ShowSummary="true" DisplayMode="List" runat="server"></asp:ValidationSummary>
            </td>
          </tr>
      </table>
      </form>
  </div>
<!-- #BeginLibraryItem "/Library/footer.lbi" --><div id="footer"><img src="../images/footertop.gif" width="750" height="90" border="0" usemap="#Map" /></div>
<div id="footer"><img src="../images/footerbtm.gif" width="750" height="43" border="0" usemap="#Map2" /></div>
<div id="contact"><p><strong> Edinburgh Tel: 0131 333 5060 - Glasgow Tel: 0141 647 5399 </strong></p><p><strong> Web: www.buchanstowbars.co.uk </strong></p></div>
<map name="Map">
<area shape="rect" coords="33,-1,172,31" href="../company/contact.htm" alt="Edinburgh Contact Details">
<area shape="rect" coords="32,35,172,69" href="../company/contact.htm" alt="Glasgow Contact Details">
</map>
<map name="Map2">
<area shape="rect" coords="23,8,89,27" href="../company/privacy.htm" alt="Privacy Details">
<area shape="rect" coords="101,8,165,27" href="../company/termsconditions.htm" alt="Terms &amp; Conditions">
<area shape="rect" coords="224,2,289,29" href="http://www.brinkweb.com/" target="_blank" alt="Brink Towbars">
<area shape="rect" coords="298,3,378,29" href="http://www.dixonbate.co.uk/" target="_blank" alt="Dixon Bate">
<area shape="rect" coords="390,2,478,29" href="http://www.maxxraxx.co.uk" target="_blank" alt="Maxxraxx Cycle Carriers">
<area shape="rect" coords="489,2,554,29" href="http://www.thule.com" target="_blank" alt="Thule Car Rack Systems">
<area shape="rect" coords="563,2,617,29" href="http://www.witter-towbars.co.uk" target="_blank" alt="Witter Towbars">
<area shape="rect" coords="628,2,724,29" href="http://www.westfalia-automotive.de" target="_blank" alt="Westfalia Towbars">
</map><!-- #EndLibraryItem --><div id="btm"></div>
</div>
</body>
</html>

</body>
</html>
