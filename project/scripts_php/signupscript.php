<?php
    session_start();
    include '../includes/db.php';
    try
    {
        if(isset($_POST["submit"]))
        {
            if(empty($_POST["email"]) || empty($_POST["password"]) || empty($_POST["name"]) || empty($_POST["contact"]))
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
                else
                {
                    $name = $_POST["name"]; 
                    $email = $_POST["email"]; 
                    $password = $_POST["password"];
                    $contact = $_POST["contact"];
                    $city = $_POST["city"];
                    $id = uniqid();

                    $sql = "INSERT INTO users (id, name, email, password, contact ,city) VALUES ('$id', '$name', '$email', '$password', '$contact' ,'$city')";

                    if (mysqli_query($conn, $sql)) {
                        echo "User Added successfully";
                        $_SESSION["email"] = $_POST["email"];
                        header("location:../allcards.php");

                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }

                    mysqli_close($conn);
                }
            }
        }
    }
    catch(Exception $e)
    {
        echo $e->getMessage();
    }   
?>