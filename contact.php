<?php 
    include 'components/connect.php';

    if(isset($_COOKIE['user_id'])){
        $user_id = $_COOKIE['user_id'];
    }else{
        $user_id = '';
    }

    //send message
    if(isset($_POST['send_message'])){
        if($user_id != ''){

            $id = unique_id();

            $name = $_POST['name'];
            $name = filter_var($name, FILTER_SANITIZE_STRING);

            $email = $_POST['email'];
            $email = filter_var($email, FILTER_SANITIZE_STRING);

            $subject = $_POST['subject'];
            $subject = filter_var($subject, FILTER_SANITIZE_STRING);

            $message = $_POST['message'];
            $message = filter_var($message, FILTER_SANITIZE_STRING);

            $verify_message = $conn->prepare("SELECT * FROM `message` WHERE user_id = ? AND name = ? AND email = ? AND subject = ? AND message = ?");
            $verify_message->execute([$user_id, $name, $email, $subject, $message]);

            if($verify_message->rowCount() > 0){
                $warning_msg[] = 'message already exist';
            }else{
                $insert_message = $conn->prepare("INSERT INTO `message` (id, user_id, name, email, subject, message) VALUES(?,?,?,?,?,?)");
                $insert_message->execute([$id, $user_id, $name, $email, $subject, $message]);

                $success_msg[] = 'comment inserted successfully';
            }
        }else{
            $warning_msg[] = 'please login first';
        }
    }
    



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/user_style.css?v=<?php echo time(); ?>" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css">
</head>
<body>
    <?php include 'components/user_header.php'; ?>
    <div class="banner">
        <div class="detail">
            <h1>contact us</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt ipsam, rerum quos illum consequatur quidem, itaque nobis debitis animi, deleniti fuga nesciunt consequuntur? Modi ad facere at veritatis ipsa aliquam!</p>
            <span> <a href="home.php">home</a><i class="bx bx-right-arrow-alt"></i>contact</span>
        </div>
    </div>    

<div class="services">
    <div class="heading">
        <h1>our services</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt porro, officiis quaerat voluptates maxime sed reiciendis labore odit assumenda voluptatem, obcaecati facere dignissimos natus eum. Maiores voluptatem laborum reiciendis sit!</p>
        <img src="image/separator-img.png" alt="">
    </div>
    <div class="box-container">
        <div class="box">
            <img src="image/0.png" alt="">
            <div>
                <h1>free shipping fast</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
        </div>
        <div class="box">
            <img src="image/1.png" alt="">
            <div>
                <h1>money back & quarantee</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
        </div>
        <div class="box">
            <img src="image/2.png" alt="">
            <div>
                <h1>online support 24/7</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
        </div>
    </div>
</div>
<div class="form-container">
    <div class="heading">
        <h1>drop us a line</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <img src="image/separator-img.png" alt="">
    </div>
    <form action="" method="post" class="register">
        <div class="input-field">
            <label>name <sup>*</sup></label>
            <input type="text" name="name" required placeholder="enter your name" class="box">
        </div>
        <div class="input-field">
            <label>email <sup>*</sup></label>
            <input type="email" name="email" required placeholder="enter your email"  class="box">
        </div>
        <div class="input-field">
            <label>subject <sup>*</sup></label>
            <input type="text" name="subject" required placeholder="reason...."  class="box">
        </div>
        <div class="input-field">
            <label>comment <sup>*</sup></label>
            <textarea name="message" cols="30" rows="10" required placeholder=""  class="box"></textarea>
        </div>
        <button type="submit" name="send_message" class="btn">send message</button>
    </form>
</div>

<div class="address">
    <div class="heading">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <img src="image/separator-img.png" alt="">
    </div>
    <div class="box-container">
        <div class="box">
            <i class="bx bxs-map-alt"></i>
        <div>
            <h4>address</h4>
            <p>Lorem ipsum dolor sit amet <br> Lorem, ipsum.</p>
        </div>
    </div>
    <div class="box">
            <i class="bx bxs-phone-incoming"></i>
        <div>
            <h4>phone number</h4>
            <p>Life : <br> (25) 930-25-90.</p>
            <!-- <p>MTS : <br> (33) 336-10-93</p> -->
        </div>
    </div>
    <div class="box">
            <i class="bx bxs-envelope"></i>
        <div>
            <h4>email</h4>
            <p>vip.maks0@inbox.ru</p>
        </div>
    </div>
</div>






<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<?php include 'components/footer.php'; ?>
<script src="js/user_script.js"></script>
<?php include 'components/alert.php'; ?>

</body>
</html>