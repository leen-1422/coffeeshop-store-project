<?php
    session_start();
    include_once "database.php";
    $error = "";
    $message = "";
    $dataa = array("name"=>"","price"=>"","desc"=>"","image"=>"");
    $id = $_GET['id'];
    $statement = $connect->prepare("select * from products where id = ? ");
    $statement->execute(array($id));
    $product = $statement->fetch();
    $name = $product['product_name'];
    $price = $product['price'];
    $desc = $product['product_desc'];
    if(isset($_POST['update'])){

        $name = $_POST['name'];
        $price = $_POST['price'];
        $desc = $_POST['desc'];

        if(empty($name)){
            $dataa['name'] = "اسم المنتج مطلوب ";
        }

        if(empty($price)){
            $dataa['price'] = "سعر المنتج مطلوب";
        }
        if(empty($desc)){
            $dataa['desc'] = "الوصف مطلوب";
        }
        $file = time().basename($_FILES["image"]["name"]);
        $file_ext = strtolower(pathinfo($file,PATHINFO_EXTENSION));
        if($file_ext != "jpg" && $file_ext != "png" && $file_ext != "jpeg" ) {
            $invalid['image'] = "لابد أن يكون الملف عبارة عن صورة ";   
        }

        if($dataa['name'] == "" && $dataa['price'] == "" && $dataa['desc'] == "" && $dataa['image'] == ""){
            include_once "database.php";
            move_uploaded_file($_FILES["image"]["tmp_name"],"images/".$file);
            $statment  = $connect->prepare("update products set product_name = ? , price = ? , product_desc = ? 
                                                ,product_img = ? where id = ? ");

            $statment->execute(array($name,$price,$desc,$file,$product['id']));
            unlink('images/'.$product['product_img']);
            $message = "تمت تعديل البيانات بنجاح";

        }
    }
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>إضافة منتج جديد</title>
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
            <h3 class='success'><?php echo $message ?></h3>
            <form enctype="multipart/form-data" action="" method="POST">
                <p class="error"><?php echo $error?></p>
                <label for="email">اسم المنتج</label>
                <input type="text" required value="<?php echo $name?>" name="name" placeholder="أدخل الاسم هنا ...">
                <p class="error"><?php $dataa['name']?></p>
                <label for="email">سعر النتج</label>
                <input type="number" min="1" required value="<?php echo $price?>" name="price" placeholder="أدخل السعر هنا ...">
                <p class="error"><?php echo $dataa['price']?></p>
                <label for="desc">وصف النتج</label>
                <textarea name="desc" id="" cols="30" placeholder="أدخل الوصف هنا" rows="10"><?php echo $desc?></textarea>
                <p class="error"><?php echo $dataa['desc']?></p>  
                <label for="image">صورة المنتج</label>
                <input type="file" required name="image">
                <p class="error"><?php echo $dataa['image']?></p>
                <input type="submit" name="update" value="تعديل">
              
        </form>
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