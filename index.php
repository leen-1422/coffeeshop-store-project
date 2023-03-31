<?php
    session_start();
    include_once "database.php";
    $statement = $connect->prepare("select * from products");
    $statement->execute();
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>الصفحة الرئيسية</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <div class="siteLogo">
            <img src="images/home.gif" alt="">
            
        </div>
        <ul>
            <li><a href="index.php">الصفحة الرئيسية</a></li>
            <?php 
                if(!isset($_SESSION['user_id'])){
                    
                    
                echo " <li><a href='login.php'>تسجيل الدخول</a></li>";
                
                }else{
                    
                   
                    echo " <li><a href='logout.php'>تسجيل الخروج</a></li>";
                }
                echo " <li><a href='about.html'>تواصل معنا</a></li>";

            ?>
           
        </ul>
    </div>
    <div class="main">
        <div class="main-title">
            <h1> كـــوفي شـــــوب - صفي ذهنـــك واستمـتع بقهوتك</h1>
            <video autoplay muted loop>
                <source src="videos/back.mp4" type="video/mp4"/>
            </video>
        </div>
        <div class="main-container">
            <?php 
                    while($row = $statement->fetch()){
                        echo "<div class='product-content'><a href='details.php?id={$row['id']}'>
                            <img src='images/{$row['product_img']}'><br>
                            {$row['product_name']}
                            </a>
                            </div>";
                    }
            ?>
        </div>
    </div>
    <footer>
        <p>تمت عملية التصميم والبرمجة بواسطــــة كلاً من </p>
        <p>لين محمد ، مها علي ، وجدان سالم ، غيداء محمد</p>
        <p>إخلاء المسؤلية : نود التنويه ان كل ما ذكر بالمشروع يعبر عن رأي مطوري الموقع ، وتم تجميه من مصادر مفتوحة 
            . وإن ثبت غير ذلك، فيعد ذلك خرق لحقوق الملكية الفكرية ويتحمل مطوري الموقع تبعاته القانونية</p>
    </footer>
</body>
</html>