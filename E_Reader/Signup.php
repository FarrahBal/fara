<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <div class="container">
        <div class="image">
            <img src="images/about2.jpg" alt="">
        </div>


        <form action="Signup.php" method="POST">
        <h1>Sign Up to our S-library</h1>
           

            <label>Enter Names</label>
            <input type="text" name="names" placeholder="Enter Names" autocomplete="off" required >

            <label> Enter Address</label>
            <input type="text" name="address" placeholder="Enter Address" autocomplete="off" required >

            <label>Enter email </label>
            <input type="email" name="email" placeholder="Enter email" autocomplete="off" required>

            <label>Age </label>
            <input type="text" name="age" placeholder="Enter Age" autocomplete="off" required>

            <label>Password </label>
            <input type="Password" name="password" placeholder="Enter Password" autocomplete="off" required>
            
            <input type="submit" value="Sign Up">

            

            <div class="social">
                <i class="fab fa-google"></i>
                <i class="fab fa-facebook"></i>
                <i class="fab fa-linkedin"></i>
            </div>
        </form>
        <?php
                include ('configuration.php');
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $names = $_POST['names'];
                    $address = $_POST['address'];
                    $email = $_POST['email'];
                    $age = $_POST['age'];
                    $password = $_POST['password'];

            $sql = "INSERT INTO registration (names,address,email,age,password) values ('$names','$address','$email','$age','$password')";

            if ($conn->query($sql) == TRUE) {
                echo "<script>alert('Well inserted')</script>";
                echo "<script>window.location.href='index.php'</script>";
            }else{
                echo "Not inserted";
            }
                }
                ?>



    </div>
    
</body>
</html>