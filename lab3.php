<?php
$nameErr = $emailErr = "";
$name = $email =  "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {                 // als op line 29 de methode post is gaat hij in werking
  if (empty($_POST["name"])) {                              //als er niks in de input staat krijg je een error met de tekst dat er een naam nodig is.
    $nameErr = "Name is required";                          //|
  } else {                                                  // anders gaat hij door met de gegevens die de user invult.
    if (!preg_match("/^[a-zA-Z ]*$/",$_POST["name"])) {
        $nameErr = "Only letters and white space allowed"; 
    } else {
        $name = input($_POST["name"]); 
    }
  }
  
  if (empty($_POST["e-mail"])) {
    $emailErr = "Email is required";                    //als er niks in de input staat krijg je een error met de tekst dat er een naam nodig is.
  } else {                                              //|    
    $email = input($_POST["e-mail"]);                   // anders gaat hij door met de gegevens die de user invult. 
  }
}
function input($data) {                                 // DE INPUT FUNCTION:
    $data = trim($data);                                // de(het) ingevulde gegeven(s) wordt meegenomen naar de function 
    $data = stripslashes($data);                        //|
    $data = htmlspecialchars($data);                    //|
    return $data;                                       //|
  }                                                     //|
?>

<h1>FORMULIER</h1>
<form action="lab3.php" method="POST">
        Naam: <input name="name" placeholder="voer hier uw naam in.">
        <span class="error">* <?php echo $nameErr;?></span>            
    </div>
    <div class="item e-mail">
        E-mail: <input name="e-mail" placeholder="voer hier uw e-mail in.">
        <span class="error">* <?php echo $emailErr;?></span>  
    </div>
    <input type="submit">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo "Name: ",$name;
echo "<br>";
echo "E-mail: ",$email;
?>

<style>
.error {color: #FF0000;}
</style>