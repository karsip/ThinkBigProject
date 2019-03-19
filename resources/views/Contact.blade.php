<!doctype html>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>




<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>


        <title>ThinkBigWeb</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/style.css" >
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
       
    </head>
    <body>
        

    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
    <img src="ThinkBigLogo.jpg" href="http://www.think-big.lt/" style= "max-height: 20%; max-width: 20%; width: 20%; height:20%; padding-bottom: 20px;">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#Home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#About">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<div class="pirmas fusion-fullwidth fullwidth-box fusion-parallax-fixed get-in-touch-slide hundred-percent-fullwidth non-hundred-percent-height-scrolling" style="background-color: #ffffff;background-image: url(&quot;https://www.appstart.lt/wp-content/uploads/2016/09/slide-pic-3.jpg&quot;);background-position: left top;background-repeat: no-repeat;padding-top:60px;padding-right:30px;padding-bottom:90px;padding-left:30px;border-top-width:0px;border-bottom-width:0px;border-color:#eae9e9;border-top-style:solid;border-bottom-style:solid;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;background-attachment:fixed;"><div class="fusion-builder-row fusion-row "><div class="fusion-layout-column fusion_builder_column fusion_builder_column_1_1  fusion-one-full fusion-column-first fusion-column-last fusion-column-no-min-height 1_1" style="margin-top:0px;margin-bottom:0px;">

<div class="fusion-column-wrapper"  data-bg-url="">
        </div>
        <div class="fusion-clearfix"></div>
            <div class ="FotoVirsuje">
            <h1 style= "text-align: center; color:white; padding-bottom:10px;"> Ko laukiate? </h1>
            <h1 style= "text-align: center; color:white; padding-bottom:50px; font-weight: 900; font-size:22px"> Mes nekantraujame pradėti dirbti su Jumis!
</h1>
            </div>
            </div>
        </div>
    </div>
</div>

<div class="triangle-left">
</div>


    <div class="Tekstas" style="margin-top:40px">
        <div class="zodziai">
            <div class="container" style="margin-bottom: 30px;">
                <div class="row">
                    <div class="col">
                            <h1 style="font-size:20px; text-align: left;">
                            Mes mielai suteiksime nemokamą konsultaciją, kaip būtų galima Jūsų mintį paversti į veikiančią mobiliąją programėlę. Jei tai, ką išgirsite, Jums patiks, galėsime judėti pirmyn ir sukurti ką nors šaunaus.
                                <label style="font-size:22px;  font-weight: 900; text-align: left; color:blue;">
                                Kartu.
                                </label>
                            </h1>    
                         </div>
                    </div>
                </div>
            </div>
         </div>
    </div>
    



    <div class="container6" style="margin-right: 10%;
      margin-left: 10%;">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>Swing by for a cup of coffee, or leave us a message:</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="office.jpg" style="width:100%; height:100%;">
    </div>
    <div class="column" >
      <form action="/action_page.php">
        <h1 for="fname" style ="font-size:20px">First Name</h1>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <h1 for="lname" style ="font-size:20px">Last Name</h1>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <h1 for="country" style ="font-size:20px">Country</h1>
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
        <h1 for="subject" style ="font-size:20px">Subject</h1>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div> 



<div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Kauno%20pilis&t=k&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><style>.mapouter{text-align:right;height:500px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div>



    <div class="Tekstas10" style="margin-top:40px; padding-left:50px;">
        <div class="zodziai10">
            <div class="container10" style="margin-bottom: 30px;">
                <div class="row10">
                    <div class="col10">
                    <label style="font-size:20px;  font-weight: 900; text-align: left; color:blue;">
                            MB „Mobiliųjų aplikacijų sprendimai“ rekvizitai
</label>
                                <h1 style="font-size:15px; text-align: left;">
                                MB „Mobiliųjų aplikacijų sprendimai“ rekvizitai
</h1>
                                <h1 style="font-size:15px; text-align: left;">
                                Įmonės kodas: 304396201
                                </h1>
                                <h1 style="font-size:15px; text-align: left;">
                                PVM mokėtojo kodas: LT100011911813
                                </h1>
                                <h1 style="font-size:15px; text-align: left;">
                                Vadovas: Marijus Šimkus
                                </h1>
                                <h1 style="font-size:15px; text-align: left;">
                                Registracijos adresas: Draugystės g. 17-1, LT-51229, Kaunas
                                </h1>
                                <h1 style="font-size:15px; text-align: left;">
                                Buveinės adresas: Taikos pr. 141, LT-51132, Kaunas
                                </h1>
                                <h1 style="font-size:15px; text-align: left;">
                                Mobilus telefonas: +370 658 33524
                                </h1>
                                <h1 style="font-size:15px; text-align: left;">
                                El. pašto adresas: info@appstart.
                                </h1>
                                <h1 style="font-size:15px; text-align: left;">
                                Tinklalapis: https://www.appstart.lt/
                                </h1>
                                <h1 style="font-size:15px; text-align: left;">
                                A. s.: LT867300010149617128, AB Swedbank
                                </h1>
                                

                                </label>
                            </h1>    
                         </div>
                    </div>
                </div>
            </div>
         </div>
    </div>
            

    


    <div class="Tekstas3" style=" background:lightblue;">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300" type="text/css" />
        <div class="zodziai2">
            <div class="container2">
                <div class="row">
                    <div class="col">
                        
                         <label>
                         <img src="Capture.jpg" style= "width: 100%; height: 100%;">
                         
                         </label>                                              
                    </div>

                    <div class="col" style= "">
                         <h1 style="text-align:left; font-size: 15px;">
                            Rekvizitai:
                            </h1>
                            <h1 style="text-align:left; font-size: 15px;">
                            Įmonės kodas: 304956632
                            </h1>
                            <h1 style="text-align:left; font-size: 15px;">
                            Vadovas: Edvinas Sipavičius
                            </h1>
                            <h1 style="text-align:left; font-size: 15px;">
                            Adresas: K. Būgos g. 34, Dusetos, LT-32304 Zarasų r.
                            </h1>
                            <h1 style="text-align:left; font-size: 15px;">
                            Telefonas: 866906969
                         </h1>    
                         
                    </div>
                    <div class="col">
                         <h1 style="text-align:right; font-size: 15px; padding-left:200px;">
                        © 2019 AppStart
                        </h1>
                        <h1 style="text-align:right; font-size: 15px;padding-left:200px;">
                        MB „Mobiliųjų aplikacijų sprendimai“
                        </h1>
                        <h1 style="text-align:right; font-size: 15px;padding-left:200px;">
                        Visos teisės saugomos
                        </h1>
                        <h1 style="text-align:right; font-size: 15px;padding-left:200px;">
                        Inkubuota KTU StartupSpace
                        </h1>
                        <h1 style="text-align:right; font-size: 15px;padding-left:200px;">
                        Slapukų politika

                         </h1>                                              
                    </div>


                    </div>
                </div>
            </div>
         </div>
    </div>

    


    </body>
</html>


