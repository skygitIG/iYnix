<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iYnix Digital</title>
    <link href="homepage/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="homepage/css/font-size.css">
    <link rel="stylesheet" href="homepage/css/custom.css">


</head>
<body>
    <?php include_once 'homepage/include/navbar.php';?>


    <main style="margin-top: 90px;">
        <section class="bg-dark" style="height: calc(100vh - 90px);">
            <div class="container d-flex overflow-h flex-column flex-md-row">

            <div class="container" style="min-width: 740px;">
                <a href="services.php"><button class="btn btn-primary accent"><img src="homepage/images/icons/lightning.svg" alt=""> AI-Driven Digital Marketing Services</button></a>
                <h1>
                    Empowering Businesses with Predictable Leads and Revenue Growth
                </h1>
                <a href="services.php"><button class="btn btn-secondary">Get in Touch With Us</button></a>
                <div class="container d-flex align-items-center clutch-gap">
                    <img src="homepage/images/clutch-one.png" class="img-fluid" alt="">
                    <img src="homepage/images/clutch-two.png" class="img-fluid" alt="">
                    <img src="homepage/images/clutch-three.png" class="img-fluid" alt="">
                </div>
                <div class="container d-flex align-items-center clutch-gap">
                    <img src="homepage/images/google.png" class="img-fluid" alt="">
                    <img src="homepage/images/trustpilot.png" class="img-fluid" alt="">
                </div>
            </div>
            <div class="container">
                <style>

/* ===== Section ===== */
.ban-sl-row{
display:flex;
width:max-content;
will-change:transform;
}

.ban-sl-section{
overflow:hidden;
}

/* ===== Row ===== */

.ban-sl-row{
display:flex;
width:max-content;
will-change:transform;
}

/* gap between rows */

.ban-sl-row-top{
margin-bottom:40px;
}

/* ===== Image ===== */

.ban-sl-img{

width:320px;
aspect-ratio:4/5;
object-fit:cover;
border-radius:14px;
margin-right:24px;

}

/* ===== Responsive Images ===== */

@media (max-width:991px){

.ban-sl-img{
width:260px;
}

}

@media (max-width:767px){

.ban-sl-img{
width:200px;
margin-right:16px;
}

}

@media (max-width:575px){

.ban-sl-img{
width:160px;
}

}


/* ===== Top Row Animation ===== */

.ban-sl-left{
animation:banSlLeft 25s linear infinite;
}

@keyframes banSlLeft{

0%{
transform:translateX(0);
}

100%{
transform:translateX(-50%);
}

}


/* ===== Bottom Row Animation ===== */

.ban-sl-right{
animation:banSlRight 25s linear infinite;
}

@keyframes banSlRight{

0%{
transform:translateX(-50%);
}

100%{
transform:translateX(0);
}

}

</style>



<section class="ban-sl-section">

<div class="container-fluid">

<!-- TOP ROW -->

<div class="ban-sl-row ban-sl-left ban-sl-row-top">

<img src="https://picsum.photos/320/400?random=1" class="ban-sl-img">
<img src="https://picsum.photos/320/400?random=2" class="ban-sl-img">
<img src="https://picsum.photos/320/400?random=3" class="ban-sl-img">
<img src="https://picsum.photos/320/400?random=4" class="ban-sl-img">
<img src="https://picsum.photos/320/400?random=5" class="ban-sl-img">

<!-- duplicate -->

<img src="https://picsum.photos/320/400?random=6" class="ban-sl-img">
<img src="https://picsum.photos/320/400?random=7" class="ban-sl-img">
<img src="https://picsum.photos/320/400?random=8" class="ban-sl-img">
<img src="https://picsum.photos/320/400?random=9" class="ban-sl-img">
<img src="https://picsum.photos/320/400?random=10" class="ban-sl-img">

</div>


<!-- BOTTOM ROW -->

<div class="ban-sl-row ban-sl-right">

<img src="https://picsum.photos/320/400?random=11" class="ban-sl-img">
<img src="https://picsum.photos/320/400?random=12" class="ban-sl-img">
<img src="https://picsum.photos/320/400?random=13" class="ban-sl-img">
<img src="https://picsum.photos/320/400?random=14" class="ban-sl-img">
<img src="https://picsum.photos/320/400?random=15" class="ban-sl-img">

<!-- duplicate -->

<img src="https://picsum.photos/320/400?random=16" class="ban-sl-img">
<img src="https://picsum.photos/320/400?random=17" class="ban-sl-img">
<img src="https://picsum.photos/320/400?random=18" class="ban-sl-img">
<img src="https://picsum.photos/320/400?random=19" class="ban-sl-img">
<img src="https://picsum.photos/320/400?random=20" class="ban-sl-img">

</div>

</div>

</section>
            </div>
            </div>
            
        </section>
    </main>


    
<script src="homepage/assets/js/bootstrap.bundle.min.js"></script>
<script src="homepage/assets/js/main.js"></script>
</body>
</html>