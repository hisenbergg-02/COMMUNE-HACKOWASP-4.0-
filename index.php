<?php
include_once 'header.php';
?>

<div class="title">
<?php
if(isset($_SESSION["useruid"])){
                    echo "<p>Hello there " . $_SESSION["useruid"] . "</p>";
                }
                ?>
            <h1>COMMUNE</h1>
            <h4>A SINGLE PLATFORM FOR THE STUDENTS FOR ALL THE LATEST UPDATES IN THE COLLEGE. NO MORE JOINING MULTIPLE WATSAPP GROUPS, WEIRD INSTA ACCOUNTS AND SCOURING THROUGH BRAIN NUMBING NUMBER OF EMAILS. </h4>
        </div>
<?php
include_once 'footer.php';
?>
