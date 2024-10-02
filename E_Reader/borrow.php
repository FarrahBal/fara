
<?php
              

      include ('configuration.php');
     if (isset($_POST['Borrow'])) {
             $username = $_POST['username'];
             $email = $_POST['email'];
             $bookname = $_POST['bookname'];
             $Date_borrowed= $_POST['Date_borrowed'];
              $Date_returned = $_POST['Date_returned'];
                

            $sql  = " INSERT INTO  borrow (username,email,bookname,Date_borrowed,Date_returned)  VALUES  ('$username','$email','$bookname','$Date_borrowed','$Date_returned')";

            $result = mysqli_query($conn,$sql);

            if($result){
                  echo "<script>alert('borrowing book successfully')</script>";

            }
            else{
                echo "failed".mysqli_error($conn);
            }

            



            
                }
                ?> 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrow Book</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <nav>
        <div class="logo">
            <i class="fa fa-book-open"></i><h2>Library</h2>
        </div>

        <h1 class="title">
            Borrow A Book
        </h1>
    </nav>

    <div class="borrow">

        <form class="borrow-form" action="borrow.php" method="POST" >
            <form >
            <h1>Borrow A Book Here</h1>
            <label>Username</label>
            <input type="text" name="username" placeholder="Enter Names"  required>
            <label>Email</label>
            <input type="email" name="email" placeholder="Enter Email" required>
            <label>Book Name</label>
            <select name="bookname">
                <option value="" disabled="selected">Select Book</option>
                <option value="Book 1">Book 1</option>
                <option value="Book 2">Book 2</option>
                <option value="Book 3">Book 3</option>
                <option value="Book 4">Book 4</option>
            </select>
            <label>Date Of Borrow</label>
            <input type="date" name="Date_borrowed"  required>
            <label>Date Of Return</label>
            <input type="date" name="Date_returned"   required>
            <input type="submit"  name="Borrow" value="Borrow">
        </form>

          

    </div>




    <footer>
        <div class="logo">
            <i class="fa fa-book-open"></i><h2>Library</h2>
        </div>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem odit aspernatur quos veniam id magni repudiandae explicabo, dicta reiciendis, sed dolor minima nihil saepe soluta ab illum dolorem sequi rem.</p>

        <div class="social">
            <div class="image">
                <img src="https://upload.wikimedia.org/wikipedia/commons/c/cd/Facebook_logo_%28square%29.png" alt="">
            </div>

            <div class="image">
                <img src="https://store-images.s-microsoft.com/image/apps.60673.9007199266244427.4d45042b-d7a5-4a83-be66-97779553b24d.5d82b7eb-9734-4b51-b65d-a0383348ab1b?h=464" alt="">
            </div>

            <div class="image">
                <img src="https://i0.wp.com/softwareengineeringdaily.com/wp-content/uploads/2020/02/LinkedIn.jpg?fit=2048%2C1024&ssl=1" alt="">
            </div>

            <div class="image">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Instagram_logo_2022.svg/800px-Instagram_logo_2022.svg.png" alt="">
            </div>

            <div class="image">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTowJjFW22_21ogdZ9nauAIrOeNsODULE319wj_6iFeQA&s" alt="">
            </div>
        </div>

        <div class="links">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#products">Book</a>
            <a href="#category">Category</a>
            <a href="#contact">Contact</a>
        </div>

        <hr>
        <p>Copyright &copy;All Right Reserved</p>
    </footer>

</body>
</html>