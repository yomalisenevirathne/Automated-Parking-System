
<?php

    include 'connection.php';
   
    session_start();
    $user_id=$_SESSION['user_id'];
            

    $query = "SELECT * from users where user_id=$user_id;";









    $data=mysqli_query($con,$query);
    $result=mysqli_num_rows($data);

    $row=mysqli_fetch_array($data)

?>








<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./css/editprofile.css">
    <link rel="stylesheet" type="text/css" href="../userprofilecss/header-footer.css">
    <link rel="stylesheet" type="text/css" href="../userprofilecss/font.css">
    <link rel="stylesheet" type="text/css" href="../../homepage/css/after-login.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit profile</title>


<body>

    <!-- Header -->

    <div class="header">
        <div class="left">
            <a class="logo-home" href="#"><h1 class="site-name">User Account</h1></a>
        </div>
        <div class="middle">
            <nav class="nav">
                <ul>
                    <li><a href="../../home.php">home</a></li>
                    
                    <li><a href="#">about us</a></li>
                </ul>
            </nav>
        </div>
        <div class="right">
                
                
        </div>
    </div>


    <div class="containe">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        
                        
                    </a>
                </li>

                <li>
                    <a href="dashbaord.php">
                        <span class="icon">
                            <ion-icon name="home-outline" active></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>


                <li>
                    <a href="editprofile.php">
                        <span class="icon">
                            <ion-icon name="create-outline"></ion-icon>
                        </span>
                        <span class="title">Edit Profile</span>
                    </a>
                </li>


                

                

               
                
            </ul>
        </div>



        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu"></ion-icon>
                </div>

                <!--********creating form*******-->
                
                    

                <div class="container">
                    <form id="admin-add-user-form"  action="edit-php.php" method="POST">
                        <h2>Update User Information</h2>
                        <div class="content">
                            <div class="input-box">
                                <lable for="first-name">First Name</lable>
                                <br>
                                <input type="text" value="<?php echo $row["firstname"]?>" id="firstname" name="firstname" >
                                
                            </div>
                            <div class="input-box">
                                <lable for="last-name">Last Name</lable>
                                <br>
                                <input type="text" value="<?php echo $row["lastname"]?>"  id="lastname" name="lastname">
                                
                            </div>
                            <div class="input-box">
                                <lable for="email">Email</lable>
                                <br>
                                <input type="email" value="<?php echo $row["email"]?>"  id="email" name="email">
                                
                            </div>
                            <div class="input-box">
                                <lable for="contact-number">Contact Number</lable>
                                <br>
                                <input type="tel" value="<?php echo $row["phone_num"]?>"  id="mobile" name="mobile" >
                                
                            </div>
                            <div class="input-box">
                                <lable for="nic">NIC</lable>
                                <br>
                                <input type="text" value="<?php echo $row["nic"]?>"  id="nic" name="nic">
                                
                            </div>
                            <div class="input-box">
                                <lable for="password">Password</lable>
                                <br>
                                <input type="password" value="<?php echo $row["password"]?>"  id="password" name="password">
                
 
                                
                            </div>
                            <div class="input-box">
                                <lable for="dateofbirth">Date Of Birth</lable>
                                <br>
                                <input type="text" value="<?php echo $row["dob"]?>"  id="date" name="date">
                                
                            </div>
                            <div class="input-box">
                                <lable for="country">Company Name</lable>
                                <br>
                                <input type="text"value="<?php echo $row["company_name"]?>"  id="company_name" name="company_name">
                                
                            </div>

                            

                            
                           
                            <div class="button-container">
                                <button type="submit" id="sumbit" name="submit">Update</button>

                                <button class="delete-btn"><a  href="delete.php?user_id=<?php echo $row["user_id"];?>">Delete Profile</a>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>                 



                <script src="./js/manage.js"></script>


                <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
                <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>