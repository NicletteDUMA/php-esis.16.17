<?php
    require_once('datainsert.php');
?>
<html>
	<body>

<form action="data.php" method="post" target="new" style="background: #9C9; font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; font-size: xx-large; font-weight: bold;">
<table width="505" border="5" align="center" cellpadding="5" cellspacing="10">
	<caption><h1>&#8220;</h1>Don't miss out any memorable moment...<h1>&#8221;</h1></caption>
  <tr>
    <th scope="row"><label for="nom">Nom : </label></th>
    <td><input type="text" name="nom" id="nom" required /></td>
  </tr>
  <tr>
    <th scope="row"><span style="text-align: center"></span>      <label for="prom">Promotion : </label></th>
    <td><input type="text" name="prom" id="prom" required /></td>
  </tr>
  <tr>
    <th scope="row"><label for="cours">Cours : </label></th>
    <td><input type="text" name="cours" id="cours" required /></td>
  </tr>
  <tr>
    <th scope="row"><label for="apprec">Appréciation : </label></th>
    <td><textarea name="apprec" cols="50" rows="2" required id="apprec"/></textarea></td>
  </tr>
  <tr>
    <th scope="row"></th>
    <td><input type="reset" value="Annuler" />&nbsp;&nbsp;&nbsp;<input type="submit" value="Valider" /></td>
  </tr>
  
</table>

</form>			
	</body>
</html>