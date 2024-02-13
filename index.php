<?php
$fullname = "";
$tel = "";
$email = "";
$message = "";

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $fullname = anti_inject($_POST['fullname']);
    $tel = anti_inject($_POST['tel']);
    $email = anti_inject($_POST['email']);
    $message = anti_inject($_POST['message']);
}

function anti_inject($data){
    $data = trim($data);  
    $data = stripslashes($data); 
    $data = htmlspecialchars($data);
    $data = preg_replace("/[^a-zA-Z0-9-@.]/", "", $data);
    return $data;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation - Easy </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
</head>
<body>
    <div class="container">
        <form method="post" action="#" target="_self" enctype="multipart/form-data"> <!-- Menambahkan method="post" di sini -->
            <i class="fas fa-paper-plane"></i>

            <div class="input-group">
                <label>Full Name</label>
                <input type="text" placeholder="Enter your name" id="contact-name" name="fullname" onkeyup="validateName()">
                <span id="name-error"></span>
            </div>

            <div class="input-group">
                <label>Phone No.</label>
                <input type="tel" placeholder="123 456 7890" id="contact-phone" name="tel" onkeyup="validatePhone()">
                <span id="phone-error"></span>
            </div>

            <div class="input-group">
                <label>Email Id</label>
                <input type="email" placeholder="Enter Email" id="contact-email" name="email" onkeyup="validateEmail()">
                <span id="email-error"></span>
            </div>

            <div class="input-group">
                <label>Your Message</label>
                <textarea rows="5" placeholder="Enter your message" id="contact-message" name="message" onkeyup="validateMessage()"></textarea>
                <span id="message-error"></span>
            </div>

            <button onclick="return validateForm()">Submit</button> <!-- Mengubah <button onclick="return validateForm()">Submit</button> menjadi <button type="submit">Submit</button> -->
            <span id="submit-error"></span>
        </form>
       

        <div class="container-dasboard">
            <b> Full Name : <?php echo $fullname . "<br" ?> </b>
            <b> Phone No : <?php echo $tel . "<br" ?> </b>
            <b> Email Id : <?php echo $email . "<br" ?> </b>
            <b> Message : <?php echo $message . "<br" ?> </b>

        </div>

    <script src="script.js"></script>
    </div>
</body>
</html>