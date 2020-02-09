<?php 
 session_start();
 if(!isset($_SESSION['id']) && $_SESSION['id']=='')
 {
header('Location:../login');
}
function logout(){
    unset($_SESSION);
    session_destroy();
    header('Location: ../login/index.php');
}

if($_POST){
    // $lumbini = $_POST['lumbini'];
    // $sauraha = $_POST['sauraha'];
    // $tilicho = $_POST['tilicho'];
    // $pashupati = $_POST['pashupati'];
    // $janaki = $_POST['janaki'];
    // $lakeside = $_POST['lakeside'];
    // $trekking = $_POST['trekking'];
    // $bunjee = $_POST['bunjee'];
    // $sinja = $_POST['sinja'];

   
    if(isset($_POST['lumbini'])) $lumbini=1;
    else $lumbini=0;

    if(isset($_POST['sauraha'])) $sauraha =1;
    else $sauraha = 0;
    
    if(isset($_POST['tilicho'])) $tilicho =1;
    else $tilicho = 0;
    
    if(isset($_POST['pashupati'])) $pashupati =1;
    else $pashupati = 0;
    
    if(isset($_POST['janaki'])) $janaki =1;
    else $janaki = 0;
    
    if(isset($_POST['lakeside'])) $lakeside =1;
    else $lakeside = 0;
    
    if(isset($_POST['trekking'])) $trekking =1;
    else $trekking = 0;
    
    if(isset($_POST['bunjee'])) $bunjee =1;
    else $bunjee = 0;
    
    if(isset($_POST['sinja'])) $sinja =1;
    else $sinja = 0;

    // db connection
    include "../db-connect.php";

    $sql = "INSERT INTO packages (Pashupatinath, Chitwan, Lumbini, Tilicho, Lakeside, Trekking, Bunjee, Sinja, Janaki)
    VALUES ('$pashupati','$sauraha','$lumbini','$tilicho','$lakeside','$trekking','$bunjee','$sinja','$janaki')";

    if($conn->query($sql)==True){
        echo "Packages Purchased Successfully!";
    }
    else{
        echo "Error: ".$sql."<br>".$conn->error;
    }
    $conn->close();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W O R L D O F I T S O W N</title>
    <link rel="stylesheet" href="gallery.css">
    
        

</head>
<body>
    <div id='my_user'>

        <div><?php echo $_SESSION['user']; ?></div>
        <button id='logout'><a href="logout.php">Logout</a></button></button>
        
    </div>
    <div class="translate">
        <div id="google_translate_element"></div>

        <script type="text/javascript">
            function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
                    }
        </script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    </div>
<form method="POST" action="#">
    <div class="container">
         <div class="box">
                <div class="imgbox">
                    <img src="lumbini.jpg">

                </div>
                <div class="check-price">
                    <div class="price"><label class="containers">$199
                        <input type="checkbox" checked="checked" name="lumbini">
                        <span class="checkmark"></span>
                      </label></div>
                </div>
                
                 <div class="details">
                       <div class="content"></div>
                       <h2 class="text">LUMBINI</h2>
                          <p>BIRTH PLACE OF GAUTAM BUDDHA(LIGHT OF ASIA)<br>  
                        </p>
                        <a href="#"><input type="button" value="Read More" class="read-more"></a>
                 </div>
        </div>

        <div class="box">
            <div class="imgbox">
                <img src="sauraha.jpg">
            </div>
            <div class="check-price">
                <div class="price"><label class="containers">$299
                    <input type="checkbox" checked="checked" name="sauraha">
                    <span class="checkmark"></span>
                  </label></div>
            </div>
            
             <div class="details">
                   <div class="content"></div>
                   <h2 class="text">CHITWAN NATIONAL PARK</h2>
                      <p>  The first national park of Nepal.It is a preserved area in the Terai Lowlands of south-central Nepal, known for its biodiversity <br>
                        <a href="#"><input type="button" value="Read More" class="read-more"></a></p>
             </div>
        </div>
              
        <div class="box">
        <div class="imgbox">
            <img src="tilicho.jpg">
        </div>
        <div class="check-price">
            <div class="price"><label class="containers">$259
                <input type="checkbox" checked="checked" name="tilicho">
                <span class="checkmark"></span>
              </label></div>
        </div>
         <div class="details">
               <div class="content"></div>
               <h2 class="text">TILICHO LAKE</h2>
                  <p>Tilicho Lake is a lake located in the Manang district of Nepal, 55 kilometres (34 mi) as the crow flies from the city of Pokhara.
                     It is situated at an altitude of 4,919. <br>
                    <a href="#"><input type="button" value="Read More" class="read-more"></a>

                  </p>
         </div>
        </div>

        <div class="box">
            <div class="imgbox">
                <img src="pashupati.jpg">
            </div>
            <div class="check-price">
                <div class="price"><label class="containers">$9
                    <input type="checkbox" checked="checked" name="pashupati">
                    <span class="checkmark"></span>
                  </label></div>
            </div>
             <div class="details">
                   <div class="content"></div>
                   <h2 class="text">PASHUPATINATH TEMPLE</h2>
                      <p>The Pashupatinath Temple  is a famous and sacred Hindu temple complex that is located on the banks of the Bagmati River.
                        Dedicated to Lord Shiva, Pashupatinath is one of the four most important religious sites in Asia for devotees of Shiva. <br>
                        <a href="#"><input type="button" value="Read More" class="read-more"></a></p>
             </div>
    </div>

    <div class="box">
        <div class="imgbox">
            <img src="janaki.jpg">
        </div>
        <div class="check-price">
            <div class="price"><label class="containers">$199
                <input type="checkbox" checked="checked" name="janaki">
                <span class="checkmark"></span>
              </label></div>
        </div>
         <div class="details">
               <div class="content"></div>
               <h2 class="text">JANAKI TEMPLE</h2>
                  <p>Janaki Mandir (Nepali: जानकी मन्दिर) is a Hindu temple in Janakpur in the Mithila region of Nepal, dedicated to the Hindu goddess Sita.
                       <br>
                    <a href="#"><input type="button" value="Read More" class="read-more"></a>

                  </p>
         </div>
    </div>
          
    <div class="box">
    <div class="imgbox">
        <img src="lakeside.jpg">
    </div>
    <div class="check-price">
        <div class="price"><label class="containers">$199
            <input type="checkbox" checked="checked" name="lakeside">
            <span class="checkmark"></span>
          </label></div>
    </div>
     <div class="details">
           <div class="content"></div>
           <h2 class="text">LAKESIDE POKHARA</h2>
              <p>The Tharu people are an ethnic group indigenous to the Terai in southern Nepal and northern India.<br>
                <a href="#"><input type="button" value="Read More" class="read-more"></a>

              </p>
     </div>
    </div>

    <div class="box">
        <div class="imgbox">
            <img src="trek.jpg">
        </div>
        <div class="check-price">
            <div class="price"><label class="containers">$199
                <input type="checkbox" checked="checked" name="trekking">
                <span class="checkmark"></span>
              </label></div>
        </div>
         <div class="details">
               <div class="content"></div>
               <h2 class="text">TREKKING</h2>
                  <p> The Everest Base Camp Trek is the best option for those looking to
                       relish the spectacular close up views of the world's highest mountains<br>
                    <a href="#"><input type="button" value="Read More" class="read-more"></a>

                  </p>
         </div>
</div>

<div class="box">
    <div class="imgbox">
        <img src="bunjee.jpg">
    </div>
    <div class="check-price">
        <div class="price"><label class="containers">$199
            <input type="checkbox" checked="checked" name="bunjee">
            <span class="checkmark"></span>
          </label></div>
    </div>
     <div class="details">
           <div class="content"></div>
           <h2 class="text">BUNJEE JUMPING</h2>
              <p>The ultimate thrill of a Bungy jump can now be experienced in Nepal at perhaps the best site in the world. Nepal's first bungy jumping site
                   is situated 160m over the wild Bhote Kosi river, and located close to the Nepal<br>
                <a href="#"><input type="button" value="Read More" class="read-more"></a>

              </p>
     </div>
</div>
      
<div class="box">
<div class="imgbox">
    <img src="sinja.jpg">
</div>
<div class="check-price">
    <div class="price"><label class="containers">$199
        <input type="checkbox" checked="checked" name="sinja">
        <span class="checkmark"></span>
      </label></div>
</div>
 <div class="details">
       <div class="content"></div>
       <h2 class="text">SINJA VALLEY</h2>
            <p>The Sinja Valley is located in the Jumla District in Karnali Province.
                The Sinja Valley was where the Nepali language originates from .<br>
                <a href="#"><input type="button" value="Read More" class="read-more"></a>
            </p>
        </div>
    </div>
</div>
<input type="submit" value="Confirm Order">
</form>

    
</body>
</html>