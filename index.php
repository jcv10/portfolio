<?php 
$pageTitle = "Home Page";
include "inc/_header.php";
include "inc/_data.php"; 
?>
   <section>
        <h2>About me</h2>
   </section>
   <section class="skills-section">
        <ul>
            <?php 
                foreach($skills as $skill){
                    echo "<li>" . $skill . "</li>";
                }
            ?>
        </ul>
   </section>
<?php include "inc/_footer.php"; ?>