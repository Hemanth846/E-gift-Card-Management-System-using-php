<!DOCTYPE html>
<html>
<head>
    <title>Sign up Page</title>
</head>
<body>
    <?php
        include 'header.php';
        if(isset($_SESSION["email"]))
        {
            header('location:allcards.php');
        }
    ?>
    <br>
    <div class="content" style="font-family:'Segoe UI Regular';" >
        <div class="container">
            <h2>Sign up</h2>

            <div class="form-group">
                <form action="scripts_php/signupscript.php" method="POST" class="bg-white rounded ">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control " placeholder="Full name">
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" class="form-control " placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control " placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="text" name="contact" class="form-control " placeholder="Contact">
                    </div>
                    <div class="form-group">
                        <input type="text" name="city" class="form-control " placeholder="City">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-primary btn-sm btn-shadow-blue" value="Submit">
                    </div>
                </form>
                <br>
            </div>
        </div>
    </div>
</body>
</html>