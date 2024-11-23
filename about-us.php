<?php 
    include 'components/connect.php';

    if(isset($_COOKIE['user_id'])){
        $user_id = $_COOKIE['user_id'];
    }else{
        $user_id = '';
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/user_style.css" >
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css">
</head>
<body>
<?php include 'components/user_header.php'; ?>
<div class="banner">
    <div class="detail">
    <h1>about us</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit deleniti porro placeat, totam nostrum odio. Obcaecati, molestiae dignissimos. Explicabo similique, aliquid ipsam expedita deserunt optio maxime distinctio tenetur corporis dignissimos.</p>
    <span><a href="home.php">home<i class="bx bx-right-arrow-alt"></i>about us</a></span>
    </div>
</div>
<div class="chef">
    <div class="box-container">
        <div class="box">
            <div class="heading">
                <span>Alex Doe</span>
                <h1>Masterchef</h1>
                <img src="image/separator-img.png" alt="">
            </div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos doloribus ad, deleniti dicta sit saepe! Sapiente eum obcaecati possimus cumque minus nemo facere dolore voluptates reprehenderit aut! Explicabo rem, odio quas atque ab quis nemo architecto eum soluta dignissimos similique voluptatibus aliquam ipsa totam assumenda deleniti reiciendis porro. Rerum dolorum similique veniam possimus deserunt soluta corrupti accusamus sint ipsam, temporibus, harum est officia cupiditate distinctio fugiat quam, omnis doloribus animi laudantium aperiam! Voluptate repellat reiciendis quisquam, architecto sint ratione vitae aperiam soluta repellendus alias mollitia quo rem fugiat eligendi libero, facere repudiandae modi culpa maiores at molestiae maxime. Corrupti, magnam.</p>
            <div class="flex-btn">
                <div class="btn">explore our menu</div>
                <a href="menu.php" class="btn">visit our shop</a>
            </div>
        </div>
        <div class="box">
            <img src="image/ceaf.png" class="img" alt="">
        </div>
    </div>
</div>
<div class="story">
    <div class="heading">
        <h1>our story</h1>
        <img src="image/separator-img.png" alt="">
    </div>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis sequi facere nostrum ullam rerum in, aliquam autem repudiandae natus labore ex libero consectetur doloremque perspiciatis! Incidunt aperiam consequatur, consectetur eius tenetur, dolorum aliquid magni nisi, porro veniam laboriosam libero. Porro nisi enim nobis repellat unde reprehenderit pariatur. Quisquam possimus minima nam aspernatur ipsum facere ea officia doloremque fugiat tempora corrupti iure eaque repudiandae dolores suscipit nihil molestiae voluptates molestias recusandae, commodi modi minus optio! Fuga totam voluptate eligendi tempora aut suscipit? Temporibus doloremque sequi corrupti accusamus numquam cum quibusdam molestias minima, maxime alias animi, ex veritatis ipsam ipsum placeat sit.</p>
    <a href="menu.php" class="btn">our services</a>
</div>
<div class="container">
    <div class="box-container">
        <div class="img-box">
            <img src="image/about.png" alt="">
        </div>
        <div class="box">
            <div class="heading">
                <h1>Taking Ice Cream To New Heights</h1>
                <img src="image/separator-img.png" alt="">
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus adipisci possimus laudantium, distinctio laborum a, libero expedita nostrum, magnam corporis saepe doloremque. Id cum eum esse laudantium iste architecto quas error laboriosam nihil voluptates corporis fugit accusamus perspiciatis quam pariatur ipsum optio vitae blanditiis aliquid provident, mollitia tenetur? Debitis, enim?</p>
            <a href=""class="btn">learn more</a>
        </div>
    </div>
</div>
    
 <div class="team">
        <div class="heading">
            <span>our team</span>
                <h1>Quality & passion with our services</h1>
                <img src="image/separator-img.png" alt="">
            </div>
            <div class="box-container">
                <div class="box">
                    <img src="image/team-1.jpg" alt="" class="img">
                    <div class="content">
                        <img src="image/shape-19.png" alt="" class="shap">
                        <h2>Raplh Jonnson</h2>
                        <p>Coffee Chef</p>
                    </div>
                </div>
           
            <div class="box-container">
                <div class="box">
                    <img src="image/team-2.jpg" alt="" class="img">
                    <div class="content">
                        <img src="image/shape-19.png" alt="" class="shap">
                        <h2>Fiona Jonnson</h2>
                        <p>Pastry Chef</p>
                    </div>
                </div>
            </div>
            <div class="box-container">
                <div class="box">
                    <img src="image/team-3.jpg" alt="" class="img">
                    <div class="content">
                        <img src="image/shape-19.png" alt="" class="shap">
                        <h2>Tom Knelltonns</h2>
                        <p>Coffee Chef</p>
                    </div>
                </div>
            </div>
        </div>    
 </div>
 <div class="standers">
    <div class="detail">
        <div class="heading">
            <h1>our standerts</h1>
            <img src="image/separator-img.png" alt="">
        </div>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt quidem nobis ut expedita voluptatibus ipsa, ullam repudiandae quasi enim explicabo vitae fuga praesentium, ad vero culpa pariatur maxime, laudantium accusamus.</p>
        <i class="bx bxs-heart"></i>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt quidem nobis ut expedita voluptatibus ipsa, ullam repudiandae quasi enim explicabo vitae fuga praesentium, ad vero culpa pariatur maxime, laudantium accusamus.</p>
        <i class="bx bxs-heart"></i>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt quidem nobis ut expedita voluptatibus ipsa, ullam repudiandae quasi enim explicabo vitae fuga praesentium, ad vero culpa pariatur maxime, laudantium accusamus.</p>
        <i class="bx bxs-heart"></i>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt quidem nobis ut expedita voluptatibus ipsa, ullam repudiandae quasi enim explicabo vitae fuga praesentium, ad vero culpa pariatur maxime, laudantium accusamus.</p>
        <i class="bx bxs-heart"></i>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt quidem nobis ut expedita voluptatibus ipsa, ullam repudiandae quasi enim explicabo vitae fuga praesentium, ad vero culpa pariatur maxime, laudantium accusamus.</p>
        <i class="bx bxs-heart"></i>
    </div>
 </div>
 <!-- <div class="testimonial">
    <div class="heading">
        <h1>testimonial</h1>
        <img src="image/separator-img.png" alt="">
    </div>
    <div class="testimonial-container">
        <div class="slide-row" id="slide">
            <div class="slide-col">
                <div class="user-text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat dolores quis minima alias! Voluptate, a!</p>
                    <h2>Mokhamed</h2>
                    <p>Author</p>
                </div>
                <div class="user-img">
                    <img src="image/testimonial (1).jpg" alt="">
                </div>
            </div>
            
            <div class="slide-col">
                <div class="user-text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat dolores quis minima alias! Voluptate, a!</p>
                    <h2>Mokhamed</h2>
                    <p>Author</p>
                </div>
                <div class="user-img">
                    <img src="image/testimonial (2).jpg" alt="">
                </div>
            </div>
            <div class="slide-col">
                <div class="user-text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat dolores quis minima alias! Voluptate, a!</p>
                    <h2>Mokhamed</h2>
                    <p>Author</p>
                </div>
                <div class="user-img">
                    <img src="image/testimonial (3).jpg" alt="">
                </div>
            </div>
            <div class="slide-col">
                <div class="user-text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat dolores quis minima alias! Voluptate, a!</p>
                    <h2>Mokhamed</h2>
                    <p>Author</p>
                </div>
                <div class="user-img">
                    <img src="image/testimonial (4).jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="indicator">
        <span class="btn1 active"></span>
        <span class="btn1 active"></span>
        <span class="btn1 active"></span>
        <span class="btn1 active"></span>
    </div>
 </div> -->

<div class="mission">
    <div class="box-container">
        <div class="box">
        <div class="heading">
            <h1>our mission</h1>
            <img src="image/separator-img.png" alt="">
        </div>
        <div class="detail">
            <div class="img-box">
            <img src="image/mission.webp" alt="">
            </div>
            <div>
                <h2>mexicon chocolate</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit eum eos reiciendis quisquam dolor assumenda aperiam quaerat soluta libero. Delectus soluta voluptates nemo accusantium possimus quod? Magni ad adipisci corporis?</p>
            </div>
        </div>
        <div class="detail">
            <div class="img-box">
            <img src="image/mission1.webp" alt="">
            </div>
            <div>
                <h2>vanila with honey</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit eum eos reiciendis quisquam dolor assumenda aperiam quaerat soluta libero. Delectus soluta voluptates nemo accusantium possimus quod? Magni ad adipisci corporis?</p>
            </div>
        </div>
        <div class="detail">
            <div class="img-box">
            <img src="image/mission0.jpg" alt="">
            </div>
            <div>
                <h2>pappermint chip</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit eum eos reiciendis quisquam dolor assumenda aperiam quaerat soluta libero. Delectus soluta voluptates nemo accusantium possimus quod? Magni ad adipisci corporis?</p>
            </div>
        </div>
        <div class="detail">
            <div class="img-box">
            <img src="image/mission2.webp" alt="">
            </div>
            <div>
                <h2>raspberry sorbat</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit eum eos reiciendis quisquam dolor assumenda aperiam quaerat soluta libero. Delectus soluta voluptates nemo accusantium possimus quod? Magni ad adipisci corporis?</p>
            </div>
            </div>
        </div>
        <div class="box">
            <img src="image/form.png" alt="" class="img">
        </div>
    </div>
</div>





<script src="js/user_script.js"></script>
<?php include 'components/footer.php'; ?>
<?php include 'components/alert.php'; ?>
</body>
</html>