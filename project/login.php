<!DOCTYPE html>
<html>
<head>
   <title>Login</title>
</head>

<body>

    <?php
        include 'header.php';
        if (isset($_SESSION["email"])){
            header('location: allcards.php');
        }
    ?>


<div class="content" style="font-family:'Segoe UI Regular';">
    <div class="container">
        <br>
        <br>
        <br>
        <form action="scripts_php/loginsubmit.php" method="POST">
            <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary btn-sm btn-shadow-blue" value="submit">
            </div>
            <br>
        </form>
    </div>
 </div>
</body>
</html>
