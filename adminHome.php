<?php
    session_start();
    include_once "database.php";
    if(isset($_GET['delete'])){
        $statement = $connect->prepare("select * from products where id = ? ");
        $id = $_GET['delete'];
        $statement->execute(array($id));
        $product = $statement->fetch();
        if(isset($product['product_img']))
            unlink('images/'.$product['product_img']);
        $statement = $connect->prepare("delete from products where id = ? ");
        $statement->execute(array($id));
    }
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
            <li><a href="adminHome.php">المنتجات</a></li>
            <li><a href='logout.php'>تسجيل الخروج</a></li>
           
        </ul>
    </div>
    <div class="main">
        <div class="main-container">
            <button type="button" name="addnew" onclick="location.href='addProduct.php'">إضافة منتج جديد</button>
            <?php 
                     if($statement->rowCount() > 0 ){

                        echo "<table>
                        <tr>
                            <th>اسم المنتج</th>
                            <th>صورة المنتج</th>
                            <th>السعر</th>
                            <th></th>
                        </tr>";
                        while($row = $statement->fetch()){
                            echo "<tr>
                                    <td>{$row['product_name']}</td>
                                    <td><img src='images/{$row['product_img']}'></td>
                                    <td>{$row['price']}</td>
                                    <td>
                                        <input type='hidden' value='{$row['id']}' name='id'>
                                        <a class='btn-edit' href='editproduct.php?id={$row['id']}'>تعديل</a>
                                        <input class='btn-remove' type='button' onclick='deleteProduct({$row['id']})' name='delete' value='حذف'>
                                    </td>
                            </tr>";
                          
                        }
                    }else{
                        echo "";
                    }
            ?>
        </div>
    </div>
    <footer id=foo>
        <p>تمت عملية التصميم والبرمجة بواسطــــة كلاً من </p>
        <p>لين محمد ، مها علي ، وجدان سالم ، غيداء محمد</p>
        <p>إخلاء المسؤلية : نود التنويه ان كل ما ذكر بالمشروع يعبر عن رأي مطوري الموقع ، وتم تجميه من مصادر مفتوحة 
            . وإن ثبت غير ذلك، فيعد ذلك خرق لحقوق الملكية الفكرية ويتحمل مطوري الموقع تبعاته القانونية</p>
    </footer>
    <script src="val.js"></script>
</body>
</html>