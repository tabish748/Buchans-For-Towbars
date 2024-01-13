<%@ Page Language="C#" %>
<script runat="server">
  protected override void OnLoad(EventArgs e)
  {
      Response.RedirectPermanent("towbars.php");
      base.OnLoad(e);
  }
</script>