<!DOCTYPE html>
<html>
<head>
 <title>BLSI</title>
</head>
<body>
 <h1>PHOTOCOPIER BLSI</h1>
 
 <h3>ADD PHOTOCOPIER</h3>
 
 <form action="input_data.php" method="post">
  <table cellpadding="3" cellspacing="0">
    <tr> 
      <tr>
    <td>NOM_PRENOM</td>
    <td>:</td>
    <td><input type="text" name="Nom_Prenom" required></td>
   </tr>
   <tr>
    <td>QUANTITE ACTUEL</td>
    <td>:</td>
    <td><input type="number" name="Quantite_actuel" required></td>
   </tr>
   <tr>
    <td>QUANTITE COPIER</td>
    <td>:</td>
    <td><input type="number" name="Quantite_copier" required></td>
   </tr>
   <tr>
   </tr>
   <tr>
    <td>Quel type de votre choix</td>
    <td>:</td>
    <td>
      <select name="C_N" required>
      <option value="">couleur ou noir et blanc? </option>
      <option value="C">Couleur</option>
      <option value="N">Noir et Blanc</option>
     </select>
    </td>
   </tr>
   <tr>
    <td>&nbsp;</td>
    <td></td>
    <td><input type="submit" name="garde" value="GARDE-LE"></td>
   </tr>
  </table>
     <p align="left">
        <a href="login.php" class="btn btn-danger">Accueil</a>
     </p>

 </form>
</body>
</html>



