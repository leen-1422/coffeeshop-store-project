<?php

    session_start();
    include_once "database.php";
    $id = $_GET['id'];
    $statement = $connect->prepare("select * from products where id = ?");
    $statement->execute(array($id));
    $record = $statement->fetch();
    $error = $message = "";
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $record['product_name']?></title>
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
            ?>
           
        </ul>
    </div>
    <div class="main-container">
        <h3 class="error"><?php echo $error?></h3>
        <h3 class="success"><?php echo $message?></h3>
        <div class="product_desc">
            <div class="product_img">
                <?php
                    echo "<img src='images/{$record['product_img']}'>";      
                ?>  
            </div>
            <div class="product_details">
                <ul>
                    <li>اسم المنتج  : <?php echo $record['product_name']?></li>
                    <li>وصــــف المنتج : <?php echo $record['product_desc']?></li>
                    <li>السعر : <?php echo $record['price']?></li>
                    <li>
                        
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <footer>
        <p>تمت عملية التصميم والبرمجة بواسطــــة كلاً من </p>
        <p>لين محمد ، مها علي ، وجدان سالم ، غيداء محمد</p>
        <p>إخلاء المسؤلية : نود التنويه ان كل ما ذكر بالمشروع يعبر عن رأي مطوري الموقع ، وتم تجميه من مصادر مفتوحة 
            . وإن ثبت غير ذلك، فيعد ذلك خرق لحقوق الملكية الفكرية ويتحمل مطوري الموقع تبعاته القانونية</p>
    </footer>
    <script src="val.js"></script>
</body>
</html>
