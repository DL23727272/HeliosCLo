<html>
    <head>
        <title>Helios Apparel Co.</title>
        
        <link rel="stylesheet" href="cloCSS.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600&display=swap" rel="stylesheet">
        
        <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>

    <body>
        <Section class="top">
            <nav>
                <a href="index.php"><img src="img/helios2.png"></a>
                <div class="nav_links" id="navLinks">
                    <i id="Hide" class="fa fa-times" onclick="hideMenu()"></i>
                    <ul>
                        <li class="btn"><a href="Shirts.php">Shirts</a></li>
                        <li class="btn"><a href="Sleeves.php">Sleeve</a></li>
                        <li class="btn"><a href="Hoodie.php">Hoodie</a></li>
                        <li class="btn"><a href="Sweater.php">Sweater</a></li>
                    </ul>
                </div>
                <i id="Show" class="fa fa-bars" onclick="showMenu()"></i>             
            </nav>
           
            <!--------------Sweater------------>

        <section class="sweater">
            <h1>Our Sweater Collections</h1>
            <p>2022 DESIGNS</p>
            <div class="row">
                <div class="Sweater_1">
                    <img src="img/clothes/sweaters.png">
                    <div class="layer">
                        <a href=""><h3>Sweater 1</h3></a>
                    </div>
                </div>

                <div class="Sweater_1">
                    <img src="img/clothes/sweaters.png">
                    <div class="layer">
                        <a href=""><h3>Sweater 2</h3></a>
                    </div>
                </div>

                <div class="Sweater_1">
                    <img src="img/clothes/sweaters.png">
                    <div class="layer">
                        <a href=""><h3>Sweater 3</h3></a>
                    </div>
                </div>
                
            </div>
        </section>
                <!--------------Sweater row2------------>

                <section class="sweater">
                    
                    <div class="row">
                        <div class="Sweater_1">
                            <img src="img/clothes/sweaters.png">
                            <div class="layer">
                                <a href=""><h3>Sweater 4</h3></a>
                            </div>
                        </div>
        
                        <div class="Sweater_1">
                            <img src="img/clothes/sweaters.png">
                            <div class="layer">
                                <a href=""><h3>Sweater 5</h3></a>
                            </div>
                        </div>
        
                        <div class="Sweater_1">
                            <img src="img/clothes/sweaters.png">
                            <div class="layer">
                                <a href=""><h3>Sweater 6</h3></a>
                            </div>
                        </div>
                        
                    </div>

                       <span></span>
                       <div class="social">
                        <h2>FOLLOW US</h2>
                         <a href="https://www.facebook.com/HeliosClo/"><i class="fa-brands fa-facebook"></i></a>
                         <a href="https://www.instagram.com/heliosclo_/"><i class="fa-brands fa-instagram"></i></a>
                       </div>
                
                </section>

                 
            
            
        </Section>
        

         <!------ Javascript for  Menu icon------>
<script>

    var navLinks = document.getElementById("navLinks");

    function showMenu(){
        navLinks.style.right = "0";
        if(document.getElementById('Hide').click){
            document.getElementById('Show').style.display = "none";
            document.getElementById('Hide').style.display = "block";
        }
        else{
            document.getElementById('Hide').style.display = "block";
        }
    }
    function hideMenu(){
        navLinks.style.right = "-200px";
        if(document.getElementById('Show').click){
            document.getElementById('Hide').style.display = "none";
            document.getElementById('Show').style.display = "block";
        }
        else{
            document.getElementById('Hide').style.display = "block";
        }
    }

</script>

    </body>
</html>