<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Sign Up Form</title>
</head>
<body>
    <div id="signup-container">
        <form action="sign-up-form.php" method="POST" id="my-form">
            <div>
                <label for="fullName">Full Name: </label>
                <input type="text" name="fullName" id="fullName" required>
                <br>
            </div>  
            <div>
                <label for="age">Age: </label>
                <input type="number" name="age" id="age" min="0" max="100" required>
                <br>
            </div>
            <div>
                <label for="email">Email: </label>
                <input type="email" name="email" id="email" required>
                <br>
            </div>
            <div>
                <label for="contact">Contact: </label>
                <input type="tel" name="contact" id="contact" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                <br>
            </div>
            <div id="submit">
                <input type="submit" value="submit" name="submit">
            </div>
        </form>
        <?php
        $name = $_POST["fullName"];
        $age = $_POST["age"];
        $email = $_POST["email"];
        $contact = $_POST["contact"];
        $alert_msg = "Your name is ".$name.".\\n"."You are ".$age." years old.\\n"."Your email is ".$email.".\\n"."Your contact number is ".$contact. ".";

            
        if(isset($_POST["submit"])){
            echo ('<script>alert("'.$alert_msg.'")</script>');
        }
        
        ?>
    </div>
</body>
</html>