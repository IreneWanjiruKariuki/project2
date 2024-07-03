<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css.css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body background="image/pexels-hngstrm-1939485.jpg" style="background-color:beige; ">
<?php include_once ("templates/nav.php"); ?>
<?php include_once ("templates/header.php"); ?>
    <div class="row:after">
        <div class="content"> 
            <h3>Contact Us</h3>
            <p>We'd love to hear from you! Whether you have questions, feedback, or need support, feel free to reach out to us through any of the following ways:</p>
            <h5>Customer Support</h5>
            <ul >
               
                <li>Email : pekar.industrial@gmail.com </li><br>
                <li>Phone : 0722301274</li><br>
                <li>Hours : Monday-Friday, 9AM-5PM</li><br>
                
            </ul>
            <h5>Contact Form</h5>
            <p>Prefer to send us a message directly? Fill out the form below and we will get back to you as soon as possible.</p>

            <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="contacts_form label">
                <label for="fn">Fullname:</label><br>
                <input type="text" id="fn"
                placeholder="Fullname" name="fullname" required><br><br>

                <label for="em">Email:</label><br>
                <input type="email" id="em"
                placeholder="Email" name="email" required><br><br>

                <label for="msg">Message:</label><br>
                <textarea id="msg" 
                placeholder="Enter your message here" name="message" rows="4" cols="50">
                </textarea><br><br>

                <input type="button" name="send_message" value="Send Message">
            </form>
        </div>
        <?php include_once ("templates/sidebar.php"); ?>
    </div>
    <div class="footer" style="margin-block-start: 800px;">
        copywrite CONSTRUCTION CO 2024 &copy; All rights reserved
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
</body>
</html>