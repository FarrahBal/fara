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
                <h3>Users :</h3>
                <div class="cards">
                    <div class="card" style="background:rgb(58, 121, 236);">
                        <h3>210<span>{87%}</span></h3>
                        <p>Physical BOOKS</p>
                        <i class="fa-solid fa-ellipsis-vertical"></i>
                        <p class="desc">
                            this category of book you can borrow it physical.
                        </p>
                    </div>
                    <div class="card" style="background:rgb(12, 61, 151);">
                        <h3>113<span>{26%}</span></h3>
                        <p>E-BOOKS</p>
                        <i class="fa-solid fa-ellipsis-vertical"></i>
                        <p class="desc">
                            this category of book it's soft one that accessed on internet.
                        </p>
                    </div>
                    <div class="card" style="background:rgb(187, 199, 20)">
                        <h3>87<span>{34%}</span></h3>
                        <p>AUDIO BOOKS</p>
                        <i class="fa-solid fa-ellipsis-vertical"></i>
                        <p class="desc">
                            this category it's about sounds .
                        </p>
                    </div>
                    <div class="card" style="background:rgb(179, 20, 20);">
                        <h3>410<span>{96%}</span></h3>
                        <p>TOTAL OF ALL Books</p>
                        <i class="fa-solid fa-ellipsis-vertical"></i>
                        <p class="desc">
                            this all categories of books totally.
                        </p>
                    </div>
                </div>
            </div>

            <div class="activities">
                <h3>Recent Activities</h3>
                <table>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                   
                   
                  
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