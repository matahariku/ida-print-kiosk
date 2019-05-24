PHP
<!DOCTYPE html>
<html>
    <head>
        <title>La transaction photocopier aujhordhui</title>
    </head>
    <body>
        <form method="post" action="keep.php">
            <table>
                <tr><td>QUANTITES PHOTOCOPIE ANCIEN</td><td><input type="number" onkeyup="isi_otomatis()" Copie_ancien="Quantite_ancien"></td></tr>
                <tr><td>QUANTITES COPIER</td><td><input type="number" copier="Quantite_copier"></td></tr>
                <tr><td>QUEL VOTRE CHOIX</td><td>
                        <input type="radio" name="C_N" value="C">Couleur
                        <input type="radio" name="C_N" value="N">Noir et Blanc
                    </td></tr>
                  
    
                <tr><td>QUANTITES PHOTOCOPIE QUI RESTE</td><td><input type="number" Copie_actuel="Quantite_actuel"></td></tr> 
                <tr><td>DATE</td><td><input type="text" Date="date"></td></tr>
                <tr><td colspan="2"><button type="submit" value="garde">GARDE</button></td></tr>
            </table>


    <p align="left">
        <a href="login.php" class="btn btn-danger">Accueil</a>
    </p>
        </form>
    </body>
</html>

