<!DOCTYPE html>
<html lang="en">
<head>
    <title>A D V E N T U R E</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="header-style.css">
    <link rel="stylesheet" href="animation.css">
</head>
<body>

<!-- =================================== first home page==================== -->
    <section class="zoom">
        <img src="images/mountain1.png" id="layer1">
        <img src="images/mountain2.png" id="layer2">
        <img src="images/text.png" id="text">
    </section>

<!-- ==================================== End of first home page======================= -->






<!-- ========================================second home page======================== -->
<div class="main-navs">
    <div id='top-background'>

            <div id="navbar">
                <div class="logo"><a href="index.php"><img src="logo-visitnepal@2x.png" alt=""></a></div>
                <div id='navs'>
                    <div class="navs-div"><a href="index.php">HOME</a></div>
                    <div class="navs-div"><a href="gallery/index.php">SERVICES</a></div>
                    <!-- <div class="navs-div"><a href="#">ABOUT US</a></div> -->
                    <div class="navs-div-one"><a href="#">HELPING FRIEND</a></div>
                </div>
            </div>

        <section id='greet'>
            <h1 class="animate">
                <span>V</span>
                <span>I</span>
                <span>S</span>
                <span>I</span>
                <span>T</span>
                <span>T</span>
                <span>N</span>
                <span>E</span>
                <span>P</span>
                <span>A</span>
                <span>L</span>
                <span>L</span>
                <span>2</span>
                <span>0</span>
                <span>2</span>
                <span>0</span>
    
            </h1>
            <br><br>
            <h2>Lifetime Experiences</h2>
            <div class="bottomslog">
               <a href="login/index.php"><input type="button" value="Log In" class="lolo"></input></a>
               <a href="signup/index.php"><input type="button" value="Sign Up" class="lolo"></input></a>
            </div>
        </section>
    </div>
</div>





<!-- ==================================end of second home page============================= -->


<!-- =============================gallery started================== -->




<!-- ======================end of Gallery======================= -->




<!-- ========================================Script Section ===========================    -->
    <script type="text/javascript">


        var layer1 = document.getElementById("layer1")
        scroll = window.pageYOffset;
        document.addEventListener
        (
            "scroll",
            function(e){
            var offset = window.pageYOffset;
            scroll = offset;
            layer1.style.width = (100 + scroll/5) + "%";
            }
        );

        var layer2 = document.getElementById("layer2")
        scroll = window.pageYOffset;
        document.addEventListener
        (
            "scroll",
            function(e){
            var offset = window.pageYOffset;
            scroll = offset;
            layer2.style.width = (100 + scroll/5) + "%";
            layer2.style.left = scroll/50 + "%";
            }
        );
        
    </script>
    
</body>
</html>
