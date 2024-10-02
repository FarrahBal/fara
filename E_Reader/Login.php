<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>

        .container{
            display: flex;
            /* flex-wrap: wrap; */
            margin: 100px auto;
            background: #fff;
            height: 400px;
            width: 50%;
        }


        .container .image{
            width: 50%;
            height: 100%;
            overflow: hidden;
        }

        .container .image img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .container form{
            width: 40%;
            height: 100%;
            border-radius: 10px;
            padding: 50px;
            overflow: hidden;
            flex-wrap: wrap;
        }

        .container form h1{
            font-size: 20px;
            font-weight: 700;
            font-family: sans-serif;
            margin: 0;
            padding: 0;
        }
        
        .container form h3{
            font-family: sans-serif;
            font-size: 13px;
            color: purple;
        }

        .container form label{
            display: block;
            margin: 10px 0 0;
            font-size: 12px;
            font-weight: 100;
            color: purple;
            font-family: sans-serif;
        }

        .container form input{
            width: 100%;
            padding: 8px;
            border: 1px solid rgb(125, 115, 173);
            border-radius: 5px;
            outline: none;
            margin-bottom: 10px;
            font-family: sans-serif;
        }

        .container .links{
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            padding: 0;
            margin: 0 0 10px 0;
        }

        .container form input[type="radio"]{
            width: fit-content;
            height: 8px;
            padding: 0;
            margin: 0;
        }

        .container .links a{
            text-decoration: none;
            color: purple;
            font-size: 10px;
            font-family: sans-serif;
            font-weight: 600;
        }

        .container .links i{
            font-weight: 600;
            display: inline;
            padding: 0;
            font-family: sans-serif;
            font-size: 10px;
            font-style: normal;
        }


        .container form input[type="submit"]{
            background: purple;
            color: white;
            cursor: pointer;
            margin: 0 auto;
        }

        .container span{
            font-size: 12px;
            margin: 20px;
            display: block;
            text-align: center;
        }

        .container .social{
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            width: 50%;
        }

        button{
            background: purple;
            color: white;
            cursor: pointer;
           

        }


        /* some media screen for the above shit */
        @media screen and (max-width: 1000px){
            .container .image{
                display: none;
            }

            .container{
                width: 80%;
            }

            .container form{
                width: 80%;
                padding: 20px;
                margin: 30px 10px;
            }
        }

    </style>

</head>
<body style="background: #d9d9da;">

    <div class="container">
        <div class="image">
            <img src="images/image.png" alt="">
        </div>

        <form action="Login.php" method="POST" autocomplete="off">
            <h1>Login</h1>
            <h3>How do I get started?</h3>

            <label>Enter Username</label>
            <input type="text" name="names" placeholder="Enter  Username" autocomplete="off" required >

            <label>Password</label>
            <input type="password" name="password" placeholder="Enter Password" autocomplete="off" required>

            <div class="links">
                <div>
                    <input type="radio" name="" id="">
                    <i>Remember me</i> 
                </div>
                <a href="#">Forgot password?</a>
            </div>

             <input type="submit" value="Login"> <br>
             <h3 style="text-align: center;"> OR</h3>
             <button   style="text-decoration: none; padding:px;   border: 1px solid white; background-color: white;  border-radius: 5px; margin: 12px; padding: 15px;  " >

            
            <a href="Signup.php" style=" text-decoration: none;"> create account</a>
            
           

        </form>

        <?php
          include ('configuration.php');
              
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $names = $_POST['names'];
                    $password = $_POST['password'];

            $sql = "SELECT * FROM registration WHERE names = '$names'  AND password = '$password'";

                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) == TRUE) {

                       echo "<script>alert('well sign in')</script>";
                     echo "<script>window.location.href='index.php'</script>";
                    }
                    else{
                        echo"<div class='alert alert-danger'>

                        <strong>Incorect inputs</strong></div>";
                         echo "<script>alert('incorect inputs please! create account.')</script>";
                         echo "<script>window.location.href='Signup.php'</script>";
                    }
                }

                
                ?>
    </div>
    
</body>
</html>
