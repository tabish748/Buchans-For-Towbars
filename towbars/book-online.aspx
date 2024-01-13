<%@ Page Language="C#" %>
<script runat="server">
  protected override void OnLoad(EventArgs e)
  {
      Response.RedirectPermanent("http://www.buchanstowbars.co.uk/booking-online.php");
      base.OnLoad(e);
  }
</script>