<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive service website design tutorial</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="<?= assets("home/css/s.css")?>">

</head>
<body>
    
<!-- header section starts  -->

<header style="padding: 1.5em 7%">

    <a href="" class="logo">Vcard</a>

    <div id="menu-bar" class="fas fa-bars"></div>

    <nav class="navbar">
        <a style="--i:0; font-size: 15px" href="#home">home</a>
        <a style="--i:1; font-size: 15px" href="#feature">users</a>

    </nav>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>grow your business with us</h3>
        <p>Create your custom bussines vcard with us now and put on it your links and brief about yourself and share your domain!</p>
        <form action="/auth/index" method="post">
            <input type="submit" name="submit" class="btn" value="create now">
        </form>
<!--        <a href="#" class="btn">discover more</a>-->
    </div>

    <div class="image">
        <img src="<?= assets("home/images/home-img.png")?>" alt="">
    </div>

</section>

<!-- home section ends -->

<!-- team section starts  -->

<!--<section class="team" id="team">-->
<!---->
<!--    <h1 class="heading">our team</h1>-->
<!---->
<!--    <div class="box-container">-->
<!---->
<!--        <div class="box">-->
<!--            <img src="images/pic1.png" alt="">-->
<!--            <h3>john deo</h3>-->
<!--            <span>web optimizer</span>-->
<!--            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam dignissimos totam est veritatis omnis tempora, vitae enim quod quibusdam ducimus!</p>-->
<!--            <div class="share">-->
<!--                <a href="#" class="fab fa-facebook-f"></a>-->
<!--                <a href="#" class="fab fa-twitter"></a>-->
<!--                <a href="#" class="fab fa-instagram"></a>-->
<!--                <a href="#" class="fab fa-linkedin"></a>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="box">-->
<!--            <img src="images/pic2.png" alt="">-->
<!--            <h3>john deo</h3>-->
<!--            <span>web optimizer</span>-->
<!--            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam dignissimos totam est veritatis omnis tempora, vitae enim quod quibusdam ducimus!</p>-->
<!--            <div class="share">-->
<!--                <a href="#" class="fab fa-facebook-f"></a>-->
<!--                <a href="#" class="fab fa-twitter"></a>-->
<!--                <a href="#" class="fab fa-instagram"></a>-->
<!--                <a href="#" class="fab fa-linkedin"></a>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="box">-->
<!--            <img src="images/pic3.png" alt="">-->
<!--            <h3>john deo</h3>-->
<!--            <span>web optimizer</span>-->
<!--            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam dignissimos totam est veritatis omnis tempora, vitae enim quod quibusdam ducimus!</p>-->
<!--            <div class="share">-->
<!--                <a href="#" class="fab fa-facebook-f"></a>-->
<!--                <a href="#" class="fab fa-twitter"></a>-->
<!--                <a href="#" class="fab fa-instagram"></a>-->
<!--                <a href="#" class="fab fa-linkedin"></a>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="box">-->
<!--            <img src="images/pic4.png" alt="">-->
<!--            <h3>john deo</h3>-->
<!--            <span>web optimizer</span>-->
<!--            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam dignissimos totam est veritatis omnis tempora, vitae enim quod quibusdam ducimus!</p>-->
<!--            <div class="share">-->
<!--                <a href="#" class="fab fa-facebook-f"></a>-->
<!--                <a href="#" class="fab fa-twitter"></a>-->
<!--                <a href="#" class="fab fa-instagram"></a>-->
<!--                <a href="#" class="fab fa-linkedin"></a>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--    </div>-->
<!---->
<!--</section>-->

<!-- team section ends -->



</body>
</html>
