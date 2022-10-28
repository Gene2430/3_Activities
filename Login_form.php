<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="LOGIN.CSS">
    <title>LOGIN FORM</title>
</head>
<body>
<body id="LoginForm">
<div class="container">
    <div class="login-form">
        <div class="main-div">
            <div class="panel">
            <h4>LOGIN FORM</h4><br>
            <h6>Please enter your email and password</h4>
                </div>
                    <form method="get">
                        <!-- <div class="form-group">
                        <select name="drpUser" id="drpUser">
                        <option value="Admin" id="txtadmin" type="drp1">Admin</option>
                        <option value="Content Maneger" id="Content Maneger" type="drp2">Content Maneger</option>
                        <option value="System User" id="System User" type="drp3">System User</option>
                        </select>
                        </div> -->
                        <div class="form-group">
                            <input type="email" class="form-control" name="txtemail" id="txtemail" placeholder="Email Address" autofocus>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password" password><br>
                        </div>
                        <button type="submit" name="btnlogin" class="btn btn-outline-success"> LOGIN  <i class="fa-regular fa-circle-check"></i></button>
                        <br>
                <?php 
                    if(isset($_REQUEST['btnlogin'])){
                        $email = $_REQUEST['txtemail'];
                        $pass = $_REQUEST['password'];
                        // $id1 = $_REQUEST['drp1'];
                        // $id2 = $_REQUEST['drp2'];
                        // $id3 = $_REQUEST['drp3'];
                        if (($email == "admin@gmail.com" && $pass == "admin") || 
                            ($email == "gene@gmail.com" && $pass == "gene") || 
                            ($email == "ken@gmail.com" && $pass == "ken") ||
                            ($email == "user@gmail.com" && $pass == "user"))   {
                            echo '<br><div class="alert alert-success" role="alert">
                            Successfully Login 
                          </div>' ;
                        }else{
                            echo '<div class="alert alert-danger" role="alert">
                            Invalid Email/Password Try again
                          </div>' ;
                        }
                    }
                ?>
                </div>
                <p> Designed by Gene Fabiala</p>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript" href="jquery-3.6.1.js"> </script>
<script type="text/javascript" href="js/bootstrap.js"> </script>
</body>
</html>