<?php 
$pageTitle = "Contact Page";
include "inc/_header.php"; 
?>
    <section>
        <h1>Contact Page</h1>
        <form action="">
            <input type="text" name="user-name" placeholder="Enter your name">
            <input type="email" name="email" placeholder="Your email">
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Enter your message"></textarea>
            <input type="submit" value="Send">
        </form>
    </section>
<?php include "inc/_footer.php"; ?>