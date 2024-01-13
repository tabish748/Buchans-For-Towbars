<%@ Page Language="C#" ContentType="text/html" ResponseEncoding="iso-8859-1" %>
<%@ Register TagPrefix="WebxelMail" Namespace="WebXeLMail" Assembly="WebxelMail"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd ">
<html>
<head>
<title>Buchans for Towbars - Feedback</title>
<meta name="description" content="Largest independent fitters in Scotland with depots in both Glasgow and Edinburgh, offering a towbar fitting service as well as mail order from all of the industry's leading manufacturers such as Brink and Witter.">
<meta name="keywords" content="buchans, buchans for towbars, scotland, edinburgh, glasgow, towbars, towbar, fitting, retail, trade, diy, mail order, brink, witter, accessories, roof systems, cycle carriers, electrics">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../styles.css" rel="stylesheet" type="text/css" media="screen">
<link href="../print.css" rel="stylesheet" type="text/css" media="print">
<script type="text/JavaScript" src="../script.js"></script>
<!--[if IE 5]><style>#navlist a {height: 1em; float: left; clear: both; width: 100%;}</style><![endif]-->
<!--[if IE 6]><style>#navlist a {height: 1em;}</style><![endif]-->
</head>
<body  onLoad="MM_preloadImages('../images/menubgr.gif','../images/menubgrhov.gif','../images/menubgrwh.gif','../images/wxl.gif')">
<form action="" method="post" name="form1" id="form1" runat="server">
<div id="container"><!-- #BeginLibraryItem "/Library/header.lbi" --><div id="headerprint"><img src="../images/buchanslogoprint.gif" width="700" height="130" /></div>
<h1>Buchans For Towbars and Roof Racks<br />
Towing solutions from Scotland's leading towbar specialists</h1>
<!-- #EndLibraryItem --><!-- #BeginLibraryItem "/Library/menu.lbi" --><div id="menu">
  <div id="navspacer"><img src="../images/headerlogobtm.gif" width="205" height="50" /></div>
    <div id="navlist">
      <ul>
        <li><a href="../default.htm">Home</a></li>
        <li><a href="../towbars/towbars.aspx">Towbars </a></li>
        <li><a href="../towbars/accessories.htm">Towbar Accessories </a></li>
        <li><a href="../towbars/quotes.aspx">Towbar Quotes </a></li>
        <li><a href="../towbars/legislation.htm">Towbar Legislation </a></li>
		<li><a href="../towbars/faqs.htm">Towbar FAQ's </a></li>
        <li><a href="../thule/roofsystems.htm">Roof Systems </a></li>
        <li><a href="../cyclecarriers/cyclecarriers.htm">Cycle Carriers </a></li>
        <li><a href="profile.htm">Company Profile </a></li>
        <li><a href="contact.htm">Contact Us </a></li>
	    <li><a href="feedback.aspx">Feed Back </a></li>		
      </ul>
    </div>
  </div><!-- #EndLibraryItem --><div id="main">
  <h2>Customer Feedback</h2>
  <webxelmail:mail ID="WxlMailer" Offline="false" DisplayBody="true" From='send@jdbsolutions.co.uk' SenderName='<%# Request.Form["frmEmail"] %>' Recipient='<%# Request.Form["frmEmail"] %>' ReplyTo='<%# Request.Form["frmEmail"] %>' Cc="enquiries@buchansfortowbars.co.uk" Subject="Feedback - Buchans for Towbars" Body="feedback_template.htm" SmtpServer="127.0.0.1" RegEmail="webxel.com" RegKey="T1HpsAHs1S9PoK1RhwSbuQ==" runat="server">
	<webxelmail:ControlCloak ControlToCloak='tablehideonsend' runat="server"></webxelmail:ControlCloak>
</webxelmail:mail>
  <table width="100%" cellpadding="1" cellspacing="0" id="tablehideonsend" runat="server">
    <tr>
      <td colspan="2" valign="top" class="frmfldName">
        <p> We hope that you have enjoyed our website and really do value your opinion it&rsquo;s better to know your thoughts than not too.</p>
          <p>Please forward any feedback or suggestions &ndash;- by filling in the form below. We would love to hear from you!</p>
        <p>Any great suggestions that we adopt will be rewarded with a free cycle carrier or chrome flipper cover!</p></td></tr>
    <tr>
      <td valign="top" class="frmfldName">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td valign="top" class="frmfldName">Full Name:</td>
      <td width="100%"><input name="frmName" type="text" class="formfield200" id="frmName" size="30" runat="server" />
          <asp:RequiredFieldValidator ID="RequiredFieldValidator1" EnableClientScript="true" Display="Dynamic" ErrorMessage="Name Required" ControlToValidate="frmName" runat="server"></asp:RequiredFieldValidator>
      </td>
    </tr>
<tr>
  <td>E-mail:</td>
  <td>    <input name="frmEmail" type="text" class="formfield200" id="frmEmail" size="30" runat="server" />    <asp:RequiredFieldValidator ControlToValidate="frmEmail" ID="RequiredFieldValidator2" EnableClientScript="true" Display="Dynamic" ErrorMessage="Email Required" runat="server"></asp:RequiredFieldValidator>    <asp:RegularExpressionValidator ID="RegularExpressionValidator1" EnableClientScript="true" Display="Dynamic" ErrorMessage="Invalid Email Address" ControlToValidate="frmEmail" ValidationExpression="\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*" runat="server"></asp:RegularExpressionValidator>  </td>
</tr>
<tr>
  <td>Postcode:</td>
  <td><input name="frmPostcode" type="text" class="formfield200" id="frmPostcode" size="15" runat="server" />    <asp:RequiredFieldValidator ID="RequiredFieldValidator3" EnableClientScript="true" Display="Dynamic" ErrorMessage="Postcode Required" ControlToValidate="frmPostcode" runat="server"></asp:RequiredFieldValidator>  </td>
</tr>
<tr>
  <td valign="top">Feedback<br />
    /Suggestions:</td>
  <td><textarea name="question" cols="50" rows="10" class="frmMessage" id="question" runat="server"></textarea>
    <asp:RequiredFieldValidator ID="RequiredFieldValidator4" EnableClientScript="true" Display="Dynamic" ErrorMessage="Required" ControlToValidate="question" runat="server"></asp:RequiredFieldValidator></td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td><input name="Submit" type="submit" class="frmbtns" id="Submit" value="Send" runat="server" /></td>
</tr>
	  </table>
  </div>
  <!-- #BeginLibraryItem "/Library/footer.lbi" --><div id="footer"><img src="../images/footertop.gif" width="750" height="90" border="0" usemap="#Map" /></div>
<div id="footer"><img src="../images/footerbtm.gif" width="750" height="43" border="0" usemap="#Map2" /></div>
<div id="contact"><p><strong> Edinburgh Tel: 0131 333 5060 - Glasgow Tel: 0141 647 5399 </strong></p><p><strong> Web: www.buchanstowbars.co.uk </strong></p></div>
<map name="Map" id="Map">
<area shape="rect" coords="33,-1,172,31" href="contact.htm" alt="Edinburgh Contact Details" />
<area shape="rect" coords="32,35,172,69" href="contact.htm" alt="Glasgow Contact Details" />
</map>
<map name="Map2" id="Map2">
<area shape="rect" coords="23,8,89,27" href="privacy.htm" alt="Privacy Details" />
<area shape="rect" coords="101,8,165,27" href="termsconditions.htm" alt="Terms &amp; Conditions" />
<area shape="rect" coords="224,2,289,29" href="http://www.brinkweb.com/" target="_blank" alt="Brink Towbars" />
<area shape="rect" coords="298,3,378,29" href="http://www.dixonbate.co.uk/" target="_blank" alt="Dixon Bate" />
<area shape="rect" coords="390,2,478,29" href="http://www.maxxraxx.co.uk" target="_blank" alt="Maxxraxx Cycle Carriers" />
<area shape="rect" coords="489,2,554,29" href="http://www.thule.com" target="_blank" alt="Thule Car Rack Systems" />
<area shape="rect" coords="563,2,617,29" href="http://www.witter-towbars.co.uk" target="_blank" alt="Witter Towbars" />
<area shape="rect" coords="628,2,724,29" href="http://www.westfalia-automotive.de" target= "_blank" alt="Westfalia Towbars" />
</map><!-- #EndLibraryItem --><div id="btm"></div>
</div>
</form>
</body>
</html>
