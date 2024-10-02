

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin's Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <nav>
        <div class="logo">
            <i class="fa fa-book-open"></i><h2>Library</h2>
        </div>

        <h1 class="title">
            Admin Dashboard
        </h1>
    </nav>

    <div class="dashboard">
        
        <div class="sidebar">
            <h1>Dashboard</h1>
            <ul>
                <h3>Options</h3>
                <li>
                    <a href="dashboard.php">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="users.php">
                        <i class="fa fa-user"></i>
                        <span>Users</span>
                    </a>
                </li>
                <li>
                    <a href="book.php">
                        <i class="fa fa-book"></i>
                        <span>Books</span>
                    </a>
                </li>
                <li>
                    <a href="orders.php">
                        <i class="fa fa-shopping-cart"></i>
                        <span>Orders</span>
                    </a>
                </li>
            </ul>

            <ul>
                <h3>Admin</h3>
                <li>
                    <a href="">
                        <i class="fa fa-gear"></i>
                        <span>Settings</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-question-circle"></i>
                        <span>Help</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-lock"></i>
                        <span>Privacy</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-sign-out"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>


        <div class="content">
            <h1>WELCOME TO DASHBOARD</h1>

            <div class="stats">
                <h3>Status:</h3>
         </div>


            <div class="activities">
                <h3>Recent Activities</h3>
                <table border="" >

                    <tr>
                        <th style="padding: 12px; margin: 12px; background-color:rgb(58, 121, 236); color: white; ">ID number</th>
                        <th style="padding: 12px; margin: 12px; background-color:rgb(58, 121, 236); color: white; ">NAMES</th>
                        <th style="padding: 12px; margin: 12px; background-color:rgb(58, 121, 236); color: white; ">ADDRESS</th>
                        <th style="padding: 12px; margin: 12px; background-color:rgb(58, 121, 236);  color: white;">E-MAIL</th>
                        <th style="padding: 12px; margin: 12px; background-color:rgb(58, 121, 236);  color: white;">AGE</th>
                        <th style="padding: 12px; margin: 12px; background-color:rgb(58, 121, 236);  color: white;">PASSWORD</th>
                        <th style="padding: 12px; margin: 12px; background-color:rgb(58, 121, 236);  color: white;">OPTION</th>
                    </tr>
                   
                   
                  <?php
include('configuration.php');
if ($_SERVER['REQUEST_METHOD'] == 'GET'){

$sql = mysqli_query($conn,"SELECT * FROM registration ");

while ($data=mysqli_fetch_array($sql)){
    
    ?>
    
    <tr>
        
    <td> <?php echo $data['id'] ; ?> </td>
    <td> <?php echo $data['names'] ; ?> </td>
    <td> <?php echo $data['address'] ; ?> </td>
    <td> <?php echo $data['email'] ; ?> </td>
    <td> <?php echo $data['age'] ; ?> </td>
    <td> <?php echo $data['password'] ; ?> </td> 
    <td>
        

        <button    style="text-decoration: none; padding: 20px;   border: 1px solid white; background-color: purple;  border-radius: 5px; margin: 12px; padding: 15px;">

        <a href="delete.php?id=<?php echo $data['id']; ?>"  style="color: white; text-decoration: none;">Delete</a>  </button>
    </td>

    </tr> 
   
<?php
}
}
?>


 
                </table>
            </div>

            <div class="social">
                <div class="image">
                    <i class="fab fa-facebook-f"></i>
                </div>
    
                <div class="image">
                    <i class="fab fa-twitter"></i>
                </div>
                
                <div class="image">
                    <i class="fab fa-linkedin-in"></i>
                </div>
                
                <div class="image">
                    <i class="fab fa-instagram"></i>
                </div>
                
                <div class="image">
                    <i class="fab fa-youtube"></i>
                </div>
            </div>

        </div>
    </div>


</body>
</html>