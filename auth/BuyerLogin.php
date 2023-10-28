<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Monda"
/>
<style>
    

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    /* font-family: 'Poppins', sans-serif; */
    font-family: Monda;
}

body{
    /* padding: 2vh 2vw ; */
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    /* background-image: linear-gradient(135deg, #CE9FFC 10%, #7367F0 100%); */
    background-color: black;
}

/* .left-container{
    border: 2px solid red;
    background-size: contain;
    position: fixed;
    height: 96vh;
    max-width: 60vw;
    height: 100vh;
    background-color: red;
}

.left-container img{
    height: 96vh;
    max-width: 60vw;
} */
.container{
    /* background: url(/assets/loginBGfigma1.jpg); */
    background: url(https://cdn.wallpapersafari.com/23/15/CU3MwW.jpg);
    background-size: 100%;

    padding: 2vh 2vw;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 96vh;
    /* border: 2px solid red; */
    min-width: 98vw;
    position: relative;
    /* max-width: 430px; */
    /* width: 100%; */
    /* background: #fff; */
    box-shadow: 0 5px 10px rgba(197, 197, 197, 0.15);
    overflow: hidden;
}

.container .forms{
    /* padding: 2rem; */
    display: flex;
    align-items: center;
    /* width: 220px; */
    transition: height 0.2s ease;
    /* position: absolute; */
}


.container .form{
    margin-left: 50vw;

    padding: 4rem;
    height: 480px;
    border-radius: 30px;
    width: 410px;
    background-color: rgba(255, 255, 255, .8);
    /* transition: margin-left 0.18s ease; */
}

.container.active .login{
    /* margin-left: -50%; */
    opacity: 0;
    transition: margin-left 0.18s ease, opacity 0.15s ease;
}

.container .signup{
    opacity: 0;
    transition: opacity 0.09s ease;
}
.container.active .signup{
    opacity: 1;
    transition: opacity 0.2s ease;
}

.container.active .forms{
    height: 600px;
}
.container .form .title{
    position: relative;
    font-size: 27px;
    font-weight: 600;
}

.form .title::before{
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    height: 3px;
    width: 30px;
    background-color: #4070f4;
    border-radius: 25px;
}

.form .input-field{
    position: relative;
    height: 50px;
    width: 100%;
    margin-top: 30px;
}

.input-field input{
    border-radius: 100px;
    position: absolute;
    height: 100%;
    width: 100%;
    padding: 0 35px;
    border: none;
    outline: none;
    font-size: 16px;
    border-bottom: 2px solid #ccc;
    border-top: 2px solid transparent;
    transition: all 0.2s ease;
}

.input-field input:hover{
    border: 2px solid black;
}

.input-field input:is(:focus, :valid){
    border-bottom-color: #4070f4;
}

.input-field i{
    position: absolute;
    top: 45%;
    transform: translateY(-50%);
    color: #999;
    font-size: 23px;
    transition: all 0.2s ease;
}

.input-field input:is(:focus, :valid) ~ i{
    color: #4070f4;
}

.input-field i.icon{
    margin-left: 10px;
}
.input-field i.showHidePw{
    right: 0;
    cursor: pointer;
    padding: 10px;
}

.form .checkbox-text{
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: 20px;
}

.checkbox-text .checkbox-content{
    display: flex;
    align-items: center;
}

.checkbox-content input{
    margin-right: 10px;
    accent-color: #4070f4;
}

.form .text{
    color: #333;
    font-size: 14px;
}

.form a.text{
    color: #4070f4;
    text-decoration: none;
}
.form a:hover{
    text-decoration: underline;
}

.form .button{
    margin-top: 35px;
    display: flex;
    justify-content: center;
}

.form .button input{
    border: none;
    width: 150px;
    color: #fff;
    font-size: 17px;
    font-weight: 500;
    letter-spacing: 1px;
    border-radius: 100px;
    background-color: #4070f4;
    cursor: pointer;
    transition: all 0.3s ease;
}

.button input:hover{
    border: #4070f4;
    background-color: #265df2;
}

.form .login-signup{
    margin-top: 30px;
    text-align: center;
}
    </style>
</head>
<body>
    <!-- <div class="left-container">
        <img src="https://cdn.wallpapersafari.com/23/15/CU3MwW.jpg" alt="">
    </div> -->
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Login</span>

                <form action="BuyerHomePage.php" method="post">
                    <div class="input-field">
                        <input type="text" name="phonenumber" placeholder="Username" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" name="password" placeholder="Enter your password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Remember me</label>
                        </div>
                        
                        <a href="BuyerForgotPassword.php" class="text">Forgot password?</a>
                    </div>

                    <div class="input-field button">
                        <input type="button" name="login" value="Login">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Not a member?
                        <a href="BuyerRegistration.php" class="text signup-link">Signup Now</a>
                    </span>
                </div>
            </div>

            
</body>
</html>


<!-- <!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buyer login</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <a href="https://icons8.com/icon/83325/roman-soldier"></a>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);

        color: goldenrod;
        margin-top: 15px;
        }

        #a {
            text-align: center;
            font-size: 25px;
            border-style: solid;
            /*margin-border-top: 8%;*/
            margin-top: 10%;
            margin-left: 28%;
            margin-right: 20%;
            margin-bottom: 18%;
            max-width: 40%;
            min-width: 20%;
        }

        .aligncenter {
            text-align: center;
        }

        .aligncenter {
            text-align: center;
        }

        a {
            color: goldenrod;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        nav {
            background-color: #292b2c;
        }

        .navbar-custom {
            background-color: #292b2c;
        }

        /* change the brand and text color */
        .navbar-custom .navbar-brand,
        .navbar-custom .navbar-text {
            background-color: #292b2c;
        }

        .navbar-custom .navbar-nav .nav-link {
            background-color: #292b2c;
        }

        .navbar-custom .nav-item.active .nav-link,
        .navbar-custom .nav-item:hover .nav-link {
            background-color: #292b2c;
        }


        .mybtn {
            border-color: green;
            border-style: solid;
        }


        .right {
            display: flex;
        }

        .left {
            display: none;
        }

        .cart {
            /* margin-left:10px; */
            margin-right: -9px;
        }

        .profile {
            margin-right: 2px;

        }

        .login {
            margin-right: -2px;
            margin-top: 12px;
            display: none;
        }

        .searchbox {
            width: 60%;
        }

        .lists {
            display: inline-block;
        }

        .moblists {
            display: none;
        }

        .logins {
            text-align: center;
            margin-right: -30%;
            margin-left: 35%;
        }

        body {
            margin: 0;
            font-size: .9rem;
            font-weight: 400;
            line-height: 1.6;
            color: #212529;
            text-align: left;
            /* background-color: #f5f8fa; */
        }

        .my-form,
        .login-form {
            font-family: Raleway, sans-serif;
        }

        .my-form {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }

        .my-form .row {
            margin-left: 0;
            margin-right: 0;
        }

        .login-form {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }

        .login-form .row {
            margin-left: 0;
            margin-right: 0;
        }

        @media only screen and (min-device-width:320px) and (max-device-width:480px) {
            /* .mycarousel {
            display: none;
        }

        .firstimage {
            height: auto;
            width: 90%;
        }

        .card {
            width: 80%;
            margin-left: 10%;
            margin-right: 10%;

        }

        .col {
            margin-top: 20px;
        } */

            .right {
                display: none;
                background-color: #ff5500;
            }

            /* 
            .settings{
            margin-left:79%;
        } */
            .left {
                display: flex;
            }

            .moblogo {
                display: none;
            }

            .logins {
                text-align: center;
                margin-right: 35%;
                padding: 15px;
            }

            .searchbox {
                width: 95%;
                margin-right: 5%;
                margin-left: 0%;
            }

            .moblists {
                display: inline-block;
                text-align: center;
                width: 100%;
            }

            /* .pic{
        height:auto;
    } */

            /* .mobtext{
        display:none;
    }
    .destext{
        display:inline-block;
        width:90%;
        margin-left: 5%;
        margin-right: 5%;
    } */
        }
    </style>
</head>

<body>

    <main class="my-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header border border-dark" style="background-color:#292b2c">
                            <h4 style="font-style:bold;color:goldenrod;text-align:left">Login</h4>
                        </div>
                        <div class="card-body border border-dark">
                            <form name="my-form" action="BuyerLogin.php" method="post">

                                <div class="form-group row">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-right  "><b><i class="fas fa-phone-alt mr-2"></i>Phone Number</b></label>
                                    <div class="col-md-6">
                                        <input type="text" id="phone_number" class="form-control border border-dark" name="phonenumber" placeholder="Phone Number" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="p1" class="col-md-4 col-form-label text-md-right"><b><i class="fas fa-lock mr-2"></i>Password</b></label>
                                    <div class="col-md-6">
                                        <input id="p1" class="form-control border border-dark" type="password" name="password" placeholder="Password" required>
                                    </div>
                                </div>

                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn " style="background-color:#292b2c;color:goldenrod" name="login" value="Login">
                                        Login
                                    </button>
                                </div>
                                <br>
                                <div class="col-md-6 offset-md-4">
                                    <label id="forgotPassword"><a id='link' href="BuyerForgotPassword.php"><b style="color:black"> Forgot your password ?</b></a></label>
                                    <br>
                                    <label id="account"><a id='link' href="BuyerRegistration.php"><b style="color:black">Create New Account</b></a></label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>

</html> -->

<?php
include("../Includes/db.php");

if (isset($_POST['login'])) {

    $phonenumber = mysqli_real_escape_string($con, $_POST['phonenumber']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $ciphering = "AES-128-CTR";
    $iv_length = openssl_cipher_iv_length($ciphering);
    $options = 0;
    $encryption_iv = '2345678910111211';
    $encryption_key = "DE";

    $encryption = openssl_encrypt(
        $password,
        $ciphering,
        $encryption_key,
        $options,
        $encryption_iv
    );

    $query = "select * from buyerregistration where buyer_phone = '$phonenumber' and buyer_password = '$encryption'";
    $run_query = mysqli_query($con, $query);
    $count_rows = mysqli_num_rows($run_query);
    if ($count_rows == 0) {
        echo "<script>alert('Please Enter Valid Details');</script>";
        echo "<script>window.open('BuyerLogin.php','_self')</script>";
    }
    while ($row = mysqli_fetch_array($run_query)) {
        $id = $row['buyer_id'];
    }

    $_SESSION['phonenumber'] = $phonenumber;
    echo "<script>window.open('../BuyerPortal2/bhome.php','_self')</script>";
}

?>