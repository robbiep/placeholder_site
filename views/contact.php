<div class="container">
  <form name="contactform" method="post" action="/lib/send_form_email.php">
  <table width="450px">
  <tr>
   <td valign="top">
    <label for="name">Name</label>
   </td>
   <td valign="top">
    <input  type="text" name="name" maxlength="50" size="30">
   </td>
  </tr>
  <tr>
   <td valign="top">
    <label for="email">Email *</label>
   </td>
   <td valign="top">
    <input  type="text" name="email" maxlength="80" size="30">
   </td>
  </tr>
  <tr>
   <td valign="top">
    <label for="phone">Phone</label>
   </td>
   <td valign="top">
    <input  type="text" name="phone" maxlength="30" size="30">
   </td>
  </tr>
  <tr>
   <td valign="top">
    <label for="message">Message *</label>
   </td>
   <td valign="top">
    <textarea  name="message" maxlength="1000" cols="34" rows="6"></textarea>
   </td>
  </tr>
  <tr>
   <td colspan="2" style="text-align:center">
    <input type="submit" value="Submit">
   </td>
  </tr>
  </table>
  </form>
</div>
