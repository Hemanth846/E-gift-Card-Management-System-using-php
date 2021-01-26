<?php
    include 'header.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mnumber = $_POST['mnumber'];

    if(isset($name) && isset($email) && isset($mnumber))
    {
?>
        <div class="container">
            
            <h3 style="position:absolute;left:35%;top:20%;font-family:'Segoe UI Regular';">Successfully Booked</h3>
            <p style="position:absolute;left:20%;top:30%;font-family:'Segoe UI Regular';">Giftcard is Emailed Successfully to Your Mail - <?php echo $email; ?></p>
            <br>
            <h3 style="position:absolute;left:35%;top:50%;font-family:'Segoe UI Regular';">Thanks For Shopping...</h3>
            <button class="btn btn-sm btn-primary" style="position:absolute;left:40%;top:60%;font-family:'Segoe UI Regular';" onclick="window.location.href='allcards.php'">Continue Shopping</button>
        </div>
<?php
    }
?>