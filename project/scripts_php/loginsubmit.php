<?php
    session_start();
    include '../includes/db.php';

    try
    {
        if(isset($_POST["submit"]))
        {
            if(empty($_POST["email"]) || empty($_POST["password"]))
            {
                echo '<label>All fields are required</label>';
            }
            else
            {   
                $email = $_POST["email"];
                $password = $_POST["password"];

                $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) 
                {
                    $_SESSION["email"]=$_POST["email"];
                    header("location:../allcards.php");
                } 
                else {
                    echo "No User Found Please Sign In <html><a href='./signup.php'></a></html>";
                }
                $conn->close();
            }
        }
    }
    catch(Exception $e)
    {
    echo $e->getMessage();
    }
?>