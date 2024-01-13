<%@ Page Language="C#" %>
<script runat="server">
  protected override void OnLoad(EventArgs e)
  {
      Response.RedirectPermanent("http://www.buchanstowbars.co.uk/towbars.php");
      base.OnLoad(e);
  }
</script>