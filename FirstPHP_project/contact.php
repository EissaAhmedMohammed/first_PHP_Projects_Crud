<?php
include "config.php";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO `message`(`id`, `username`, `email`, `subject`, `message`) VALUES (null,'$name','$email','$subject','$message');";
    $res = mysqli_query($con, $sql);
}


?>
<?php include "header.php"; ?>
<section class="icons-container">

    <div class="icons">

        <h3>140+</h3>
        <p>doctors at work</p>
    </div>

    <div class="icons">

        <h3>1040+</h3>
        <p>satisfied patients</p>
    </div>

    <div class="icons">

        <h3>500+</h3>
        <p>bed facility</p>
    </div>

    <div class="icons">

        <h3>80+</h3>
        <p>available hospitals</p>
    </div>

</section>
<!-- -->
<div class="signup-box">
    <h1>Conatact us</h1>
    <form action="contact.php" method="post">
        <label>Name</label>
        <input type="text" name="name" placeholder="your name" />
        <label>Email</label>
        <input type="email" name="email" placeholder="your email email" />
        <label>subject</label>
        <input type="text" name="subject" placeholder="type you subject" />
        <label>Message</label>
        <input type="text" name="message" placeholder="type your Message" />
        <input type="submit" name="submit" value="Submit" />
    </form>
    </body>

    </html>
    </body>