<?php 
    include 'components/connect.php';

    if(isset($_COOKIE['user_id'])){
        $user_id = $_COOKIE['user_id'];
    }else{
        $user_id = 'location:login.php';
    }

    $select_orders = $conn->prepare("SELECT * FROM `orders` WHERE user_id = ?");
    $select_orders->execute([$user_id]);
    $total_orders = $select_orders->rowCount();

    $select_message = $conn->prepare("SELECT * FROM `message` WHERE user_id = ?");
    $select_message->execute([$user_id]);
    $total_message = $select_message->rowCount();

    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user profile</title>
    <link rel="stylesheet" type="text/css" href="css/user_style.css?v=<?php echo time(); ?>" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css">
</head>
<body>
    <?php include 'components/user_header.php'; ?>
    <div class="banner">
        <div class="detail">
            <h1>profile</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt ipsam, rerum quos illum consequatur quidem, itaque nobis debitis animi, deleniti fuga nesciunt consequuntur? Modi ad facere at veritatis ipsa aliquam!</p>
            <span> <a href="home.php">home</a><i class=""bx bx-right-arrow-alt></i>profile</span>
        </div>
    </div>   
    
    <section class="profile">
        <div class="heading">
            <h1>profile detail</h1>
            <img src="image/separator-img.png" alt="">
        </div>
        <div class="details">
            <div class="user">
                <img src="uploaded_files/<?= $fetch_profile['image'];?>" alt="">
                <h3><?= $fetch_profile['name'];?></h3>
                <p>user</p>
                <a href="update.php" class="btn">update profile</a>
            </div>
            <div class="box-container">
                <div class="box">
                    <div class="flex">
                        <i class="bx bxs-folder-minus"></i>
                        <h3><?= $total_orders;?></h3>
                    </div>
                    <a href="order.php" class="btn">view orders</a>
                </div>
                <div class="box">
                    <div class="flex">
                        <i class="bx bxs-chat"></i>
                        <h3><?= $total_message;?></h3>
                    </div>
                    <a href="message.php" class="btn">view message</a>
                </div>
            </div>
        </div>
    </section>










<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<?php include 'components/footer.php'; ?>
<script src="js/user_script.js"></script>
<?php include 'components/alert.php'; ?>

</body>
</html>