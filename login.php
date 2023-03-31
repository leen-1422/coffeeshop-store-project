<?php

    $error = "";
    if(isset($_POST['submit'])){
        include_once "database.php";
        $email = $_POST['email'];
        $password = $_POST['password'];
        $statment = $connect->prepare("select * from users where email = ? and password = ?");
        $statment->execute(array($email,$password));
        if($statment->rowCount() > 0 ){
            session_start();
            $user = $statment->fetch();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['name'] = $user['name'];

            if( $user['is_admin'] == 0 )
                header("location:index.php");
            else
                header("location:adminHome.php");
        }else{
            $error = "الرجاء التأكد من البيانات المدخله  ";
        }
    }
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>تسجيل الدخول</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <div class="siteLogo">
            <img src="images/home.gif" alt="">
            
        </div>
        <ul>
            <li><a href="index.php">الصفحة الرئيسية</a></li>
            <li><a href="login.php">تسجيل الدخول</a></li>
            
        </ul>
    </div>
    <div class="main-container">
       <form action="" method="POST">
            <p class="error"><?php echo $error?></p>
            <label for="email">البريد الإلكتروني</label>
            <input type="email" required name="email">
            <label for="passwprd">الرقم السري</label>
            <input type="password" required name="password">
            <input type="submit" name="submit" value="دخول">
            
            
       </form>
    </div>
    <footer>
        <p>تمت عملية التصميم والبرمجة بواسطــــة كلاً من </p>
        <p>لين محمد ، مها علي ، وجدان سالم ، غيداء محمد</p>
        <p>إخلاء المسؤلية : نود التنويه ان كل ما ذكر بالمشروع يعبر عن رأي مطوري الموقع ، وتم تجميه من مصادر مفتوحة 
            . وإن ثبت غير ذلك، فيعد ذلك خرق لحقوق الملكية الفكرية ويتحمل مطوري الموقع تبعاته القانونية</p>
    </footer>
</body>
</html>