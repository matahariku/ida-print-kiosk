<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: accueilcomplete.php");
    exit;
}
 
// Include config file
Include "inc/db_connect1.php";
 
// Define variables and initialize with empty values
$username ;
$username_err ;
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    $user_test=trim($_POST["username"]);
    if(empty($user_test)){
        $username_err = "Merci de saisir votre nom d'utilisateur(email).";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Validate credentials
    if(empty($username_err) ){
        // Prepare a select statement
        $sql = "SELECT nom_prenom FROM user WHERE nom_prenom = ?";

        if($stmt = mysqli_prepare($base, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $username);
            
            // Set parameters
            $param_username = $username;
        
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                            // Nom_Prenom is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;
                            
                            // Redirect user to welcome page
                            header("location: accueilcomplete.php");
                    }
                else{
                    // Display an error message if username doesn't exist
                    $username_err = "Pas de compte trouve pour ce NOM Prenom";
                }
            } else{
                echo "Oops! Y'a un truc qui va pas. Revenez plus tard.";
            }
        }
                
// echo "<br>DEBUG: Oops2! mysqli_prepare() FAILED.";
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($base);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    <div class="wrapper">
        <br>
        <br>
        <br>
        <br>
        <h1><strong>LOGIN</strong></h1>
        <br>
        <p><h4><strong>Merci de saisir votre NOM Prenom </strong></h4></p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>NOM Prenom</label>
                <input type="text" name="username" class="form-control" >
                <input type="hidden" name="password" class="form-control" >
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p><strong>Mot de passe perdu ?<a href="reset-password.php">Re-initialisez-le </a>.</strong></p>
        </form>
    </div>    
</body>
</html>
