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
  <!-- slider   -->
    <div class="slider-container">
        <div class="slider">
            <div class="slideBox active">
                <div class="textBox">
                    <h1>we pride ourselfs on <br> exceptional flavors</h1>
                    <a href="menu.php" class="btn">shop now</a>
                </div>
                <div class="imgBox">
                    <img src="image/slider.jpg" alt="">
                </div>
            </div>
            <div class="slideBox">
                <div class="textBox">
                    <h1>wcold treats are my kind <br> of comfort food</h1>
                    <a href="menu.php" class="btn">shop now</a>
                </div>
                <div class="imgBox">
                    <img src="image/slider0.jpg" alt="">
                </div>
            </div>
        </div>
        <ul class="controls">
            <li onclick="nextSlide();" class="next"><i class="bx bx-right-arrow-alt"></i></li>
            <li onclick="prevSlide();" class="prev"><i class="bx bx-left-arrow-alt"></i></li>
        </ul>
    </div>

  <!-- service -->
   <div class="service">
    <div class="box-container">
        <!-- service item box -->
        <div class="box">
            <div class="icon">
                <div class="icon-box">
                    <img src="image/services.png" alt="" class="img1">
                    <img src="image/services.png" alt="" class="img2">
                </div>
            </div>
            <div class="detail">
                <h4>delivery</h4>
                <span>100% secure</span>
            </div>
        </div>
        <!-- service item box -->
         <!-- service item box -->
        <div class="box">
            <div class="icon">
                <div class="icon-box">
                    <img src="image/services (2).png" alt="" class="img1">
                    <img src="image/services (3).png" alt="" class="img2">
                </div>
            </div>
            <div class="detail">
                <h4>payment</h4>
                <span>100% secure</span>
            </div>
        </div>
        <!-- service item box -->
         <!-- service item box -->
        <div class="box">
            <div class="icon">
                <div class="icon-box">
                    <img src="image/services (5).png" alt="" class="img1">
                    <img src="image/services (6).png" alt="" class="img2">
                </div>
            </div>
            <div class="detail">
                <h4>support</h4>
                <span>24*7 hours</span>
            </div>
        </div>
        <!-- service item box -->
         <!-- service item box -->
        <div class="box">
            <div class="icon">
                <div class="icon-box">
                    <img src="image/services (7).png" alt="" class="img1">
                    <img src="image/services (8).png" alt="" class="img2">
                </div>
            </div>
            <div class="detail">
                <h4>gift service</h4>
                <span>support gift service</span>
            </div>
        </div>
        <!-- service item box -->
         <!-- service item box -->
        <div class="box">
            <div class="icon">
                <div class="icon-box">
                    <img src="image/service.png" alt="" class="img1">
                    <img src="image/service (1).png" alt="" class="img2">
                </div>
            </div>
            <div class="detail">
                <h4>returns</h4>
                <span>24*7 free return</span>
            </div>
        </div>
        <!-- service item box -->
         <!-- service item box -->
        <div class="box">
            <div class="icon">
                <div class="icon-box">
                    <img src="image/services.png" alt="" class="img1">
                    <img src="image/services (1).png" alt="" class="img2">
                </div>
            </div>
            <div class="detail">
                <h4>deliver</h4>
                <span>100% secure</span>
            </div>
        </div>
</div>
</div>
        <!-- service item box -->
         <div class="categories">
            <div class="heading">
                <h1>categories features</h1>
                <img src="image/separator-img.png" alt="">
            </div>
            <div class="box-container">
                <div class="box">
                    <img src="image/categories.jpg" alt="">
                    <a href="menu.php" class="btn">coconuts</a>
                </div>
                <div class="box">
                    <img src="image/categories0.jpg" alt="">
                    <a href="menu.php" class="btn">chocolate</a>
                </div>
                <div class="box">
                    <img src="image/categories2.jpg" alt="">
                    <a href="menu.php" class="btn">strawberry</a>
                </div>
                <div class="box">
                    <img src="image/categories1.jpg" alt="">
                    <a href="menu.php" class="btn">corn</a>
                </div>
            </div>
         </div>
         <!-- categories -->
          <img src="image/menu-banner.jpg" class="menu-banner" alt="">
          <!-- taste -->
           <div class="taste">
                <div class="heading">
                    <span>Taste</span>
                    <h1>buy any ice cream @ get on free</h1>
                    <img src="image/separator-img.png" alt="">
                </div>
                <div class="box-container">
                    <div class="box">
                        <img src="image/taste.webp" alt="">
                        <div class="detail">
                            <h2>natural swetness</h2>
                            <h1>vanila</h1>
                        </div>
                    </div>
                    <div class="box">
                        <img src="image/taste0.webp" alt="">
                        <div class="detail">
                            <h2>natural swetness</h2>
                            <h1>matcha</h1>
                        </div>
                    </div>
                    <div class="box">
                        <img src="image/taste1.webp" alt="">
                        <div class="detail">
                            <h2>natural swetness</h2>
                            <h1>blueberry</h1>
                        </div>
                    </div>
                </div>
           </div>
    </div>
   </div>
   <div class="ice-container">
    <div class="overplay"></div>
    <div class="detail">
        <h1>Ice cream is cheaper than <br> therapy for stress</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident debitis a, inventore minima praesentium porro doloribus recusandae! Reprehenderit assumenda cupiditate nobis quis, quae necessitatibus eius perspiciatis molestiae quod aliquid saepe?</p>
        <a href="menu.php" class="btn">shop now</a>
    </div>
   </div>
   <div class="taste2">
    <div class="t-banner">
        <div class="overlay"></div>
        <div class="detail">
        <h1>find your taste of desserts</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio obcaecati porro, minus ducimus, quis ullam illum est voluptates fugiat quidem iusto nihil consequatur accusantium eligendi perspiciatis, dolore fuga quaerat placeat!</p>
        <a href="menu.php" class="btn">shop now</a>
        </div>
    </div>
    <div class="box-container">
        <div class="box">
            <div class="box-overplay"></div>
            <img src="image/type4.jpg" alt="">
            <div class="box-details fadeIn-bottom">
                <h1>strawberry</h1>
                <p>find your taste of desserts</p>
                <a href="menu.php" class="btn">explore more</a>
            </div>
        </div>
        <div class="box">
            <div class="box-overplay"></div>
            <img src="image/type.avif" alt="">
            <div class="box-details fadeIn-bottom">
                <h1>strawberry</h1>
                <p>find your taste of desserts</p>
                <a href="menu.php" class="btn">explore more</a>
            </div>
        </div>
        <div class="box">
            <div class="box-overplay"></div>
            <img src="image/type1.png" alt="">
            <div class="box-details fadeIn-bottom">
                <h1>strawberry</h1>
                <p>find your taste of desserts</p>
                <a href="menu.php" class="btn">explore more</a>
            </div>
        </div>
        <div class="box">
            <div class="box-overplay"></div>
            <img src="image/type2.png" alt="">
            <div class="box-details fadeIn-bottom">
                <h1>strawberry</h1>
                <p>find your taste of desserts</p>
                <a href="menu.php" class="btn">explore more</a>
            </div>
        </div>
        <div class="box">
            <div class="box-overplay"></div>
            <img src="image/type0.avif" alt="">
            <div class="box-details fadeIn-bottom">
                <h1>strawberry</h1>
                <p>find your taste of desserts</p>
                <a href="menu.php" class="btn">explore more</a>
            </div>
        </div>
        <div class="box">
            <div class="box-overplay"></div>
            <img src="image/type4.jpg" alt="">
            <div class="box-details fadeIn-bottom">
                <h1>strawberry</h1>
                <p>find your taste of desserts</p>
                <a href="menu.php" class="btn">explore more</a>
            </div>
        </div>
    </div>
   </div>
   <div class="flavor">
    <div class="box-container">
        <img src="image/left-banner2.webp" alt="">
        <div class="detail">
            <h1>Hot Deal ! Sale Up To <span>20% off</span></h1>
            <p>expired</p>
            <a href="menu.php" class="btn">shop now</a>
        </div>
    </div>
   </div>
   <div class="usage">
    <div class="heading">
        <h1>how it works</h1>
        <img src="image/separator-img.png" alt="">
    </div>
    <div class="row">
        <div class="box-container">
            <div class="box">
                <img src="image/icon2.avif" alt="">
                <div class="detail">
                    <h3>scoop ice-cream</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maiores expedita accusantium minus suscipit qui ipsum quo sed odit unde laudantium quae quibusdam voluptas iste, facere incidunt amet. Maiores, officiis voluptates voluptatibus, eaque mollitia repellat aspernatur doloribus pariatur et hic ab nisi rerum debitis temporibus, natus amet obcaecati odio cum!</p>
                </div>
            </div>
            <div class="box">
                <img src="image/icon3.avif" alt="">
                <div class="detail">
                    <h3>scoop ice-cream</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maiores expedita accusantium minus suscipit qui ipsum quo sed odit unde laudantium quae quibusdam voluptas iste, facere incidunt amet. Maiores, officiis voluptates voluptatibus, eaque mollitia repellat aspernatur doloribus pariatur et hic ab nisi rerum debitis temporibus, natus amet obcaecati odio cum!</p>
                </div>
            </div>
            <div class="box">
                <img src="image/icon4.avif" alt="">
                <div class="detail">
                    <h3>scoop ice-cream</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maiores expedita accusantium minus suscipit qui ipsum quo sed odit unde laudantium quae quibusdam voluptas iste, facere incidunt amet. Maiores, officiis voluptates voluptatibus, eaque mollitia repellat aspernatur doloribus pariatur et hic ab nisi rerum debitis temporibus, natus amet obcaecati odio cum!</p>
                </div>
            </div>
        </div>
        
        <img src="image/sub-banner.png" class="divider" alt="">
        <div class="box-container">
            <div class="box">
                <img src="image/icon2.avif" alt="">
                <div class="detail">
                    <h3>scoop ice-cream</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maiores expedita accusantium minus suscipit qui ipsum quo sed odit unde laudantium quae quibusdam voluptas iste, facere incidunt amet. Maiores, officiis voluptates voluptatibus, eaque mollitia repellat aspernatur doloribus pariatur et hic ab nisi rerum debitis temporibus, natus amet obcaecati odio cum!</p>
                </div>
            </div>
            <div class="box">
                <img src="image/icon3.avif" alt="">
                <div class="detail">
                    <h3>scoop ice-cream</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maiores expedita accusantium minus suscipit qui ipsum quo sed odit unde laudantium quae quibusdam voluptas iste, facere incidunt amet. Maiores, officiis voluptates voluptatibus, eaque mollitia repellat aspernatur doloribus pariatur et hic ab nisi rerum debitis temporibus, natus amet obcaecati odio cum!</p>
                </div>
            </div>
            <div class="box">
                <img src="image/icon4.avif" alt="">
                <div class="detail">
                    <h3>scoop ice-cream</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maiores expedita accusantium minus suscipit qui ipsum quo sed odit unde laudantium quae quibusdam voluptas iste, facere incidunt amet. Maiores, officiis voluptates voluptatibus, eaque mollitia repellat aspernatur doloribus pariatur et hic ab nisi rerum debitis temporibus, natus amet obcaecati odio cum!</p>
                </div>
            </div>
        </div>
    </div>
   </div>
   <div class="pride">
    <div class="detail">
        <h1>We Pride Ourselves On <br> Exceptional Flavors</h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam molestiae neque qui iste alias ipsa corrupti maxime delectus nesciunt deserunt? Quam aliquam sequi deserunt sint distinctio, numquam dolor voluptatum vel.</p>
        <a href="menu.php" class="btn">shop now</a>
    </div>
   </div>
<footer>
    <div class="content">
        <div class="box">
            <img src="image/logo.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut ab omnis laboriosam minima iure accusamus corporis excepturi aspernatur veniam. Impedit iure distinctio perferendis quam dignissimos, voluptatem soluta ducimus veniam explicabo.</p>
            <a href="contact.php" class="btn" >contact now</a>
        </div>
        <div class="box">
            <h3>my account</h3>
            <a href=""><i class="bx bx-chevron-right"></i>My account</a>
            <a href=""><i class="bx bx-chevron-right"></i>order history</a>
            <a href=""><i class="bx bx-chevron-right"></i>wishlist</a>
            <a href=""><i class="bx bx-chevron-right"></i>newsletter</a>
        </div>
        <div class="box">
            <h3>information</h3>
            <a href=""><i class="bx bx-chevron-right"></i>about us</a>
            <a href=""><i class="bx bx-chevron-right"></i>deliver information</a>
            <a href=""><i class="bx bx-chevron-right"></i>privacy policy</a>
            <a href=""><i class="bx bx-chevron-right"></i>terms & condition</a>
        </div>
        <div class="box">
            <h3>extras</h3>
            <a href=""><i class="bx bx-chevron-right"></i>brands</a>
            <a href=""><i class="bx bx-chevron-right"></i>gift certification</a>
            <a href=""><i class="bx bx-chevron-right"></i>affiliate</a>
            <a href=""><i class="bx bx-chevron-right"></i>specials</a>
        </div>
        <div class="box">
            <h3>contact us</h3>
            <p><i class="bx bxs-phone"></i>(25) 930-25-90</p>
            <p><i class="bx bxs-envelope"></i>vip.maks0@inbox.ru</p>
            <p><i class="bx bxs-location-plus"></i>Belarus, Polatsk</p>
                <div class="icons">
                <i class="bx bxl-facebook"> </i>
                <i class="bx bxl-twitter"> </i>
                <i class="bx bxl-instagram"> </i>
                <i class="bx bxl-linkedin"> </i>
                </div>
        </div>
    </div>
    <div class="bottom">
        <p>Copyright © 2024 @massiii.a</p>
        <a href="admin panel/login.php">become a seller</a>
    </div>
</footer>




<?php include 'components/footer.php'; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="js/user_script.js"></script>

<?php include 'components/alert.php'; ?>
</body>
</html>