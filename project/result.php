<?php
    include 'header.php';
    include 'includes/db.php';
    $name = $_GET['var'];
    if (isset($_SESSION["email"]))
    {
        $sql = "SELECT * FROM giftcard WHERE name = '$name'";
        
        $query = mysqli_query($conn,$sql);
        foreach($query as $row)
        {
?>        

        <br>        
        <br>
        <div class="container-fluid" style="width:1500px;font-family:'Segoe UI Regular';">
            <div class="row">
                <div class="col-sm">
                    <h3><?php echo $row['name']; ?> [ Instant Voucher ] </h3><br>
                    <img src="images/<?php echo $row['name']; ?>.jpg">
                </div>
                <div class="col-sm">
                    <form>
                        <label>Price</label>
                        <input type="text" class="form-control" value="<?php echo $row['amount']; ?>" disabled>

                        <br>
                        <label>Quantity</label>
                        <input type="text" class="form-control" value="1" disabled>
                    </form>
                </div>
            </div>
        </div>
        <br>
        <p style="font-family:'Segoe UI Regular';position:absolute;left:12%;">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-tag" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M2 2v4.586l7 7L13.586 9l-7-7H2zM1 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 1 6.586V2z"/>
            <path fill-rule="evenodd" d="M4.5 5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm0 1a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
        </svg>
        <?php echo $row['message']; ?></p>
        <br>
        <div class="container" style="font-family:'Segoe UI Regular';">
            <form action="success.php" method="POST">
                <br>
                <label style="font-weight:bold;">Delivery Mode </label>
                <br>
                <div class="form-group">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1"> Email </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2"> SMS </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2"> Both </label>
                    </div>
                </div>
                <br>
                <br>
                <label style="font-weight:bold;">Gifting Details </label>
                <br>
                <br>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" name="name" style="width:350px;" placeholder="Receiver Name">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="email" style="width:350px;" placeholder="Email">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="mnumber" style="width:350px;" placeholder="Mobile Number">
                        </div>
                    </div>
                </div>
                <br>
                <button class="btn btn-sm btn-primary" style="position:absolute;left:50%;" onclick="window.location.href='success.php'">Buy Now</button>
            </form>
        </div>
        
        <br>
        
<?php
        }

    }
    else
    {
        header('location: login.php');
    }
?>
