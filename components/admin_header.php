<header>
    <div class="logo">
        <img src="../image/logo.png" alt="" width="150">
    </div>
    <div class="right">
        <div class ="bx bxs-user" id="user-btn"></div>
        <div class ="toggle-btn" ><i class="bx bx-menu"></i></div>
    </div>
    <div class="profile">
        <?php
            $select_profile = $conn->prepare("SELECT * FROM `sellers` WHERE id = ?");
            $select_profile->execute([$seller_id]);

            if($select_profile->rowCount() > 0){
                $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
            }
         ?>
         <div class="profile-detail">
            <img src="../uploaded_files/<?= $fetch_profile['image']; ?>" class="logo-img" width="100" alt="">
            <p style="color:black;"> <?=$fetch_profile['name'];  ?></p>
                <div class="flex-btn">
                    <a href="profile.php" class="btn" style="color:black;">profile</a>
                    <a href="../components/admin_logout.php" onclick="return confirm('logout from this website?');" class="btn" style="color:black;">logout</a>
                </div>
         </div>
        <?php  ?>
    </div>
</header>
<div class="sidebar-container">
    <div class="sidebar">
    <?php
            $select_profile = $conn->prepare("SELECT * FROM `sellers` WHERE id = ?");
            $select_profile->execute([$seller_id]);

            if($select_profile->rowCount() > 0){
                $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
            }
         ?>
         <div class="profile">
            <img src="../uploaded_files/<?= $fetch_profile['image']; ?>" class="logo-img" width="100" alt="">
            <p> <?=$fetch_profile['name'];  ?></p>
                
         </div>
        <?php  ?>
        <h5>menu</h5>
        <div class="navbar">
            <ul>
                <li><a href="dashboard.php"><i class="bx bxs-home-smile" style="color:black"></i>dashboard</a></li>
                <li><a href="add_products.php"><i class="bx bxs-shopping-bags" style="color:black"></i>add product</a></li>
                <li><a href="view_products.php"><i class="bx bxs-food-menu" style="color:black"></i>view product</a></li>
                <li><a href="user_accounts.php"><i class="bx bxs-user-detail" style="color:black"></i>accounts</a></li>
                <li><a href="../components/admin_logout.php" onclick="retutn confirm('logout from this website');"><i class="bx bx-log-out" style="color:black"></i>logout</a></li>
            </ul>
        </div>
        <h5>find us</h5>
        <div class="social-links">
            <i class="bx bxl-facebook" style="color:black"></i>
            <i class="bx bxl-instagram-alt" style="color:black"></i>
            <i class="bx bxl-linkedin" style="color:black"></i>
            <i class="bx bxl-twitter" style="color:black"></i>
            <i class="bx bxl-pinterest-alt" style="color:black"></i>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
