<!DOCTYPE html>
<?php 
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="sks1.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.sub-btn').click(function(){
                $(this).next('.sub-menu').slideToggle();
                $(this).find('.dropdown').toggleClass('rotate');
            });   
            $('.menu-btn').click(function(){
                $('.side-bar').addClass('active');
                $('.menu-btn').css('visibility',"hidden");
            });
            $('.header-container').click(function(){
                $(this).next('.menu-btn').slideToggle();
                $(this).find('.xii').toggleClass('rotate');
            });
           
            $('.close-btn').click(function(){
                $('.side-bar').removeClass('active');
                $('.menu-btn').css('visibility',"visible");
            });
        });
    </script>
   <style>
    .logo {
        width: 75px;
        height: 75px;
        margin: auto;
        margin-bottom: 20px;
    }
    .logo img {
        width: 130%; 
        height: auto; 
        transform: translate(-12%, -10%);
    }
    input{
        border: none;
        border-style: groove;
        height: 35px;
        width: 30px;
        border-radius: 20px;
        text-align: center;
    }
    body{
        background-color: rgb(255, 255, 255);
        display: flex;
        align-self: center;
    }
    .main{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    .logo-text{
        width: 275px;
        height: 80px;
        margin: 5px 5px 0px 0px;
        justify-content: space-around;
    }
    button a{
        color:white;
    }
</style>
</head>
<body>
    <div class="menu-btn">
        <i class="fas fa-bars mn"></i>
    </div>
    <div class="side-bar">
        <div class="close-btn">
            <i class="fas fa-times xy"></i>
        </div>
        <div class="menu">
            <div class="item"><a href="#"><i class="fas fa-home"></i>home</a></div>
            <div class="item">
                <a class="sub-btn"><i class='bx bx-calendar-event'></i>events<i class="fas fa-angle-right dropdown"></i></a>
                <div class="sub-menu">
                    <a href="#" class="sub-item"><img src="image.png" height="30px" width="30px" alt=""> Birthday</a>
                    <a href="#" class="sub-item"><img src="wedding-couple.png" height="30px" width="30px" alt="">Marraige</a>
                    <a href="#" class="sub-item"><img src="dancing.png" height="30px" width="30px"alt="">Parties</a>
                    <a href="#" class="sub-item"><img src="decoration.png" height="30px" width="30px"alt="">Parties</a>
                </div>
            </div>
            <div class="item"><a href="#"><img src="q-and-a.png"height="30px" width="30px" alt=""></i>faq</a></div>
            <div class="item"><a href="#"><img src="telephone.png" height="20px" width="20px"alt="">  contacts</a></div>
            <div class="item"><a href="#"><i class="fas fa-clock"></i>date</a></div>
            
            <div class="item"><a href="#"><i class="fas fa-info-circle"></i>About</a></div>
        </div>
    </div>
    <img class="logo-text" src="logo-text.jpg" alt="Logo" style="padding-left: 50px;margin-right: 70%;">
    <div class="main">
        <form>
            <div class='logo'>
            <img src="IMAGE.jpg">
            </div>
            <div class="container">
                <h3 style="text-align: center;">Enter <?php echo $_SESSION["EVENT_NAME"] ?> Timings</h3><br>
                <p>The Free Disposable Camera App For Your Event Guests</p>
                <form action="date_store.php" method="post">
                    <?php
                    if(isset($_SESSION["EVENT_NAME"]))?>
                        <input type="text" class="form-control" value="<?php echo $_SESSION["EVENT_NAME"] ?>" place_holder='Enter event name' required>
                    <input style="text-align: center;" class="form-control" type="datetime-local" placeholder="Select start date" required>
                    <input class="form-control" type="datetime-local" placeholder="Select end date " required><br>
                    <center><button style="background-color: rgba(29, 10, 201, 0.996);"><a href="mainpage1.html"> NEXT </a></button></center>
                </form>        
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        config={
        enableTime: true,
        dateFormat: "Y-m-d H:i",
        altInput:true,
        alFormat:"F j, Y (h:S K)"
        }
        flatpickr("input[type=datetime-local]", config);
    </script>
    
</body>
</html>