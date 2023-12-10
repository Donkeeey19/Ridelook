 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="image/fav-icon.png" type="image/x-icon">

    <link rel="stylesheet" href="unpkg.com_swiper@8.0.7_swiper-bundle.min.css">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <title>RIDE LOOK</title>

</head>
<body>
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">
                <i class="ri-motorbike-fill"></i>
                RIDELOOK
            </a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="#about" class="nav__link">About</a>
                    </li>
                    <li class="nav__item">
                        <a href="#popular" class="nav__link">Popular</a>
                    </li>
                    <li class="nav__item">
                        <a href="#featured" class="nav__link">Featured</a>
                    </li>
                    <li class="nav__item">
                        <a href="logout.php" class="open-popup">Logout</a>
                    </li>
                </ul>

                <div class="nav__close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-line"></i>
            </div>
        </nav>
    </header>

    <main class="main">
        <section class="home section" id="home">
            <div class="shape shape__big"></div>
            <div class="shape shape__small"></div>

                
            </div>
            <div class="home__container contaier grid">
                <div class="home__data">
                    <h1 class="home__title">
                        Look For The Best Motors
                    </h1>

                    <h2 class="home__subtitle">
                        New R 1250 RT
                    </h2>

                    <h3 class="home__elec">
                        <i class="ri-flashlight-fill"></i>BMW ShiftCam 
                    </h3>

                </div>

                <img src="motors/home.png" alt="" class="home__img">

                <div class="home__car">
                    <div class="home__car-data">
                        <div class="home__car-icon">
                            <i class="ri-dashboard-2-line"></i>
                        </div>
                        <h2 class="home__car-number">1,254cc</h2>
                        <h3 class="home__car-name">CAPACITY</h3>
                    </div>

                    <div class="home__car-data">
                        <div class="home__car-icon">
                            <i class="ri-speed-up-line"></i>
                        </div>
                        <h2 class="home__car-number">8200 km/h</h2>
                        <h3 class="home__car-name">TOP SPEED</h3>
                    </div>

                    <div class="home__car-data">
                        <div class="home__car-icon">
                            <i class="ri-gas-station-line"></i>
                        </div>
                        <h2 class="home__car-number"> 25 Liters</h2>
                        <h3 class="home__car-name">FUEL CAPACITY</h3>
                    </div>

                </div>
                <a href="start.html" class="home__button">START</a>
            </div>
        </section>

        <section class="about section" id="about">
           <div class="about__container container grid">
            <div class="about__group">
                <img src="motors/about.jpg" alt="" class="about__img">

                <div class="about__card">
                    <h3 class="about__card-title">300+</h3>
                    <p class="about__card-description">
                        Models around the Philippines
                    </p>
                </div>
            </div>

            <div class="about__data">
                <h2 class="section__title about__title">
                    Motorcyle with <br> great quality
                </h2>

                <p class="about__description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
                <a href="knowmore.html" class="button">Know More</a>
            </div>
           </div>
        </section>

          

        <section class="popular section" id="popular">
            <h2 class="section__title">
                Choose your Motors <br> Of The Popular Brands
            </h2>
            
            <div class="popular__container container swiper">
                <div class="swiper-wrapper">
                    <article class="popular__card swiper-slide">
                        <div class="shape shape__smaller"></div>

                        <h1 class="popular__title">BMW Motorrad</h1>
                        <h3 class="popular__subtitle">C 400 GT</h3>

                        <img src="image/pupular2.png" alt="" class="popular__img">

                        <div class="popular__data">
                            <div class="popular__data-group">
                                <i class="ri-dashboard-2-line"></i> 350 cc
                            </div>

                            <div class="popular__data-group">
                                <i class="ri-speed-up-line"></i></i> 139 km/h
                            </div>

                            <div class="popular__data-group">
                                <i class="ri-charging-pile-2-line"></i>12.8lI
                            </div>
                        </div>

                        <h3 class="popular__price">₱595,000</h3>

                        <a href="C400GT.html" class="button popular__button">
                            <i class="ri-information-line"></i>
                        </a>
                        
                    </article>

                    <article class="popular__card swiper-slide">
                        <div class="shape shape__smaller"></div>

                        <h1 class="popular__title">BMW Motorrad</h1>
                        <h3 class="popular__subtitle">s1000 XR</h3>

                        <img src="motors/popular2.png" alt="" class="popular__img">

                        <div class="popular__data">
                            <div class="popular__data-group">
                                <i class="ri-dashboard-2-line"></i> 999cc
                            </div>

                            <div class="popular__data-group">
                                <i class="ri-speed-up-line"></i> 255 Km/h
                            </div>

                            <div class="popular__data-group">
                                <i class="ri-charging-pile-2-line"></i> 20 Liters
                            </div>
                        </div>

                        <h3 class="popular__price">₱1,575,000</h3>

                        <a href="s1000.html" class="button popular__button">
                            <i class="ri-information-line"></i>
                        </a>
                    </article>

                    <article class="popular__card swiper-slide">
                        <div class="shape shape__smaller"></div>

                        <h1 class="popular__title">BMW Motorrad</h1>
                        <h3 class="popular__subtitle">New R nineT</h3>

                        <img src="motors/p3.png" alt="" class="popular__img">

                        <div class="popular__data">
                            <div class="popular__data-group">
                                <i class="ri-dashboard-2-line"></i> 1170cc
                            </div>

                            <div class="popular__data-group">
                                <i class="ri-speed-up-line"></i></i> 200 Km/h
                            </div>

                            <div class="popular__data-group">
                                <i class="ri-charging-pile-2-line"></i> 18 Liters
                            </div>
                        </div>

                        <h3 class="popular__price">₱1,295,000</h3>

                        <a href="newRninet.html" class="button popular__button">
                            <i class="ri-information-line"></i>
                        </a>
                    </article>

                    <article class="popular__card swiper-slide">
                        <div class="shape shape__smaller"></div>

                        <h1 class="popular__title">Ducati</h1>
                        <h3 class="popular__subtitle">Panigale V2</h3>

                        <img src="motors/d12.png" alt="" class="popular__img">

                        <div class="popular__data">
                            <div class="popular__data-group">
                                <i class="ri-dashboard-2-line"></i> 998cc
                            </div>

                            <div class="popular__data-group">
                                <i class="ri-speed-up-line"></i></i> 270  Km/h
                            </div>

                            <div class="popular__data-group">
                                <i class="ri-charging-pile-2-line"></i> 16 Liters
                            </div>
                        </div>

                        <h3 class="popular__price">₱1,365,000</h3>

                        <a href="panigalev2.html" class="button popular__button">
                            <i class="ri-information-line"></i>
                        </a>
                    </article>

                    <article class="popular__card swiper-slide">
                        <div class="shape shape__smaller"></div>

                        <h1 class="popular__title">Ducati</h1>
                        <h3 class="popular__subtitle">Monster 976 Plus</h3>

                        <img src="motors/d3.png" alt="" class="popular__img">

                        <div class="popular__data">
                            <div class="popular__data-group">
                                <i class="ri-dashboard-2-line"></i> 937cc
                            </div>

                            <div class="popular__data-group">
                                <i class="ri-speed-up-line"></i></i> 356 Km/h
                            </div>

                            <div class="popular__data-group">
                                <i class="ri-charging-pile-2-line"></i> 14 Liters
                            </div>
                        </div>

                        <h3 class="popular__price">₱875,000</h3>

                        <a href="monster976.html" class="button popular__button">
                            <i class="ri-information-line"></i>
                        </a>
                    </article>          
                    
                    <article class="popular__card swiper-slide">
                        <div class="shape shape__smaller"></div>

                        <h1 class="popular__title">Ducati</h1>
                        <h3 class="popular__subtitle">Scrambler NightShift</h3>

                        <img src="motors/d5.png" alt="" class="popular__img">

                        <div class="popular__data">
                            <div class="popular__data-group">
                                <i class="ri-dashboard-2-line"></i> 807cc
                            </div>

                            <div class="popular__data-group">
                                <i class="ri-speed-up-line"></i></i> 000 Km/h
                            </div>

                            <div class="popular__data-group">
                                <i class="ri-charging-pile-2-line"></i> 13.5 Liters
                            </div>
                        </div>

                        <h3 class="popular__price">₱885,000</h3>

                        <a href="scrambler.html" class="button popular__button">
                            <i class="ri-information-line"></i>
                        </a>
                    </article>
                    
                    
                    <article class="popular__card swiper-slide">
                        <div class="shape shape__smaller"></div>

                        <h1 class="popular__title">Harley Davidson</h1>
                        <h3 class="popular__subtitle">Sports Glide <br> Black</h3>

                        <img src="motors/hd1.png" alt="" class="popular__img">

                        <div class="popular__data">
                            <div class="popular__data-group">
                                <i class="ri-dashboard-2-line"></i> 1745cc

                            </div>

                            <div class="popular__data-group">
                                <i class="ri-speed-up-line"></i></i> 200 Km/h
                            </div>

                            <div class="popular__data-group">
                                <i class="ri-charging-pile-2-line"></i> 18.9 Liters
                            </div>
                        </div>

                        <h3 class="popular__price">₱1,460,000</h3>

                        <a href="sportsglide.html" class="button popular__button">
                            <i class="ri-information-line"></i>
                        </a>
                    </article>        

                    <article class="popular__card swiper-slide">
                        <div class="shape shape__smaller"></div>

                        <h1 class="popular__title">Harley Davidson</h1>
                        <h3 class="popular__subtitle">Nighster</h3>

                        <img src="motors/harley.png" alt="" class="popular__img">

                        <div class="popular__data">
                            <div class="popular__data-group">
                                <i class="ri-dashboard-2-line"></i> 975cc
                            </div>

                            <div class="popular__data-group">
                                <i class="ri-speed-up-line"></i></i> NONE km/h
                            </div>

                            <div class="popular__data-group">
                                <i class="ri-charging-pile-2-line"></i> 11.7 Liters
                            </div>
                        </div>

                        <h3 class="popular__price">₱819,000</h3>

                        <a href="nighster.html" class="button popular__button">
                            <i class="ri-information-line"></i>
                        </a>
                    </article>        


                    <article class="popular__card swiper-slide">
                        <div class="shape shape__smaller"></div>

                        <h1 class="popular__title">Harley Davidson</h1>
                        <h3 class="popular__subtitle">Fat Bob</h3>

                        <img src="motors/harley1.png" alt="" class="popular__img">

                        <div class="popular__data">
                            <div class="popular__data-group">
                                <i class="ri-dashboard-2-line"></i> 1868cc
                            </div>

                            <div class="popular__data-group">
                                <i class="ri-speed-up-line"></i></i> NONE Km/h
                            </div>

                            <div class="popular__data-group">
                                <i class="ri-charging-pile-2-line"></i> 13.5 Liters
                            </div>
                        </div>

                        <h3 class="popular__price">₱1,400,000</h3>

                        <a href="fatbob.html" class="button popular__button">
                            <i class="ri-information-line"></i>
                        </a>
                    </article>        
                </div>

                <div class="swiper-pagination"></div>
            </div>
        </section>

        <section class="features section">
            <h2 class="section__title">
                More Features
            </h2>

            <div class="features__container contaier grid">
                <div class="features__group">
                    <img src="motors/22.png" alt="" class="features__img">

                    <div class="features__card features__card-1">
                        <h2 class="features__card-title"></h2>
                        <p class="features__card-description">Anti-Lock Breaking Ssystem</p>
                    </div>

                    <div class="features__card features__card-2">
                        <h2 class="features__card-title"></h2>
                        <p class="features__card-description">Stability Control</p>
                    </div>

                    <div class="features__card features__card-3">
                        <h2 class="features__card-title"></h2>
                        <p class="features__card-description"> Heal <br>Start<br>Control</p>
                    </div>
                </div>
            </div>

            <img src="image/map.jpg" alt="" class="features__map">
        </section>

        <section class="featured section" id="featured">
            <h2 class="section__title">
                Featured Motors
            </h2>
            <div class="featured__container container">
                <ul class="featured__filters">
                    <li>
                        <button class="featured__item active-featured" data-filter="all">
                            <span>All</span>
                        </button>
                    </li>

                    <li>
                        <button class="featured__item" data-filter=".tesla">
                            <img src="motors/yamaha.png" alt="">
                        </button>
                    </li>

                    <li>
                        <button class="featured__item" data-filter=".audi">
                            <img src="motors/suzuki.png" alt="">
                        </button>
                    </li>

                    <li>
                        <button class="featured__item" data-filter=".porsche">
                            <img src="image/logo1.png" alt="">
                        </button>
                    </li>   

                    <li>
                        <button class="featured__item" data-filter=".kawasaki">
                            <img src="motors/kawasaki.png" alt="">
                        </button>
                    </li>  

                    <li>
                        <button class="featured__item" data-filter=".other">
                            <img src="motors/ot.png" alt="">
                        </button>
                    </li>  
                    
                </ul>

                <div class="featured__content grid">
                    <article class="featured__card mix tesla">
                        <div class="shape shape__smaller"> </div>

                            <h1 class="featured__title">Yamaha</h1>

                            <h3 class="featured__subtitle">NMAX</h3>

                            <img src="motors/yamaha1.png" alt="" class="featured__img">

                            <h3 class="featured__price">₱120,000</h3>

                            <a href="NMAX.html" class="button popular__button">
                                <i class="ri-information-line"></i>
                            </a>                       
                    </article>

                    <article class="featured__card mix tesla">
                        <div class="shape shape__smaller"> </div>

                            <h1 class="featured__title">Yamaha</h1>

                            <h3 class="featured__subtitle">XMAX</h3>

                            <img src="motors/xmax.png" alt="" class="featured__img">

                            <h3 class="featured__price">₱250,000</h3>

                            <a href="XMAX.html" class="button popular__button">
                                <i class="ri-information-line"></i>
                            </a>                          
                    </article>

                    <article class="featured__card mix audi">
                        <div class="shape shape__smaller"> </div>

                            <h1 class="featured__title">Suzuki</h1>

                            <h3 class="featured__subtitle">Riader 150 </h3>

                            <img src="motors/raiderm.png" alt="" class="featured__img">

                            <h3 class="featured__price">₱118,000</h3>

                            <a href="RAIDER.html" class="button popular__button">
                                <i class="ri-information-line"></i>
                            </a>                          
                    </article>

                    <article class="featured__card mix audi">
                        <div class="shape shape__smaller"> </div>

                            <h1 class="featured__title">Suzuki</h1>

                            <h3 class="featured__subtitle">Burgman</h3>

                            <img src="motors/burgman.png" alt="" class="featured__img">

                            <h3 class="featured__price">₱92,000</h3>

                            <a href="Burgman.html" class="button popular__button">
                                <i class="ri-information-line"></i>
                            </a>                           
                    </article>


                    <article class="featured__card mix kawasaki">
                        <div class="shape shape__smaller"> </div>

                            <h1 class="featured__title">Kawasaki</h1>

                            <h3 class="featured__subtitle">Ninja 400</h3>

                            <img src="motors/400.png" alt="" class="featured__img">

                            <h3 class="featured__price">₱331,000</h3>

                            <a href="NINJA 400.html" class="button popular__button">
                                <i class="ri-information-line"></i>
                            </a>                          
                    </article>


                    <article class="featured__card mix kawasaki">
                        <div class="shape shape__smaller"> </div>

                            <h1 class="featured__title">Kawasaki</h1>

                            <h3 class="featured__subtitle">Z1000 R</h3>

                            <img src="motors/z11.png" alt="" class="featured__img">

                            <h3 class="featured__price">₱668,000</h3>

                            <a href="Z1000.html" class="button popular__button">
                                <i class="ri-information-line"></i>
                            </a>                           
                    </article>


                    <article class="featured__card mix porsche">
                        <div class="shape shape__smaller"> </div>

                            <h1 class="featured__title">Honda</h1>

                            <h3 class="featured__subtitle">Goldwing</h3>

                            <img src="motors/goldwing.png" alt="" class="featured__img">

                            <h3 class="featured__price">₱1,900,000</h3>

                            <a href="Goldwing.html" class="button popular__button">
                                <i class="ri-information-line"></i>
                            </a>                         
                    </article>

                    <article class="featured__card mix porsche">
                        <div class="shape shape__smaller"> </div>

                            <h1 class="featured__title">Honda</h1>

                            <h3 class="featured__subtitle">Click</h3>

                            <img src="motors/click2.png.crdownload" alt="" class="featured__img">

                            <h3 class="featured__price">₱80,900</h3>

                            <a href="Click.html" class="button popular__button">
                                <i class="ri-information-line"></i>
                            </a>                         
                    </article>

                    <article class="featured__card mix other">
                        <div class="shape shape__smaller"> </div>

                            <h1 class="featured__title">Aprilla</h1>

                            <h3 class="featured__subtitle">Aprilia Shiver 900</h3>

                            <img src="motors/ap.png" alt="" class="featured__img">

                            <h3 class="featured__price">₱675,000</h3>

                            <a href="Shiver 900.html" class="button popular__button">
                                <i class="ri-information-line"></i>
                            </a>                        
                    </article>

                    <article class="featured__card mix other">
                        <div class="shape shape__smaller"> </div>

                            <h1 class="featured__title">KTM</h1>

                            <h3 class="featured__subtitle">KTM 1290 SUPER ADVENTURE R</h3>

                            <img src="motors/KTM.png" alt="" class="featured__img">

                            <h3 class="featured__price">₱1,000,000</h3>

                            <a href="KTM 1290.html" class="button popular__button">
                                <i class="ri-information-line"></i>
                            </a>                         
                    </article>

                    <article class="featured__card mix other">
                        <div class="shape shape__smaller"> </div>

                            <h1 class="featured__title">Sym</h1>

                            <h3 class="featured__subtitle">Sym Joyride 200i Evo</h3>

                            <img src="motors/sym.png" alt="" class="featured__img">

                            <h3 class="featured__price">₱188,000</h3>

                            <a href="Sym Joyride 200i Evo.html" class="button popular__button">
                                <i class="ri-information-line"></i>
                            </a>                       
                    </article>

                    <article class="featured__card mix other">
                        <div class="shape shape__smaller"> </div>

                            <h1 class="featured__title">Rusi</h1>

                            <h3 class="featured__subtitle">RUSI MP 110</h3>

                            <img src="motors/rusi.png" alt="" class="featured__img">

                            <h3 class="featured__price">₱40,000</h3>

                            <a href="RUSI MP 110.html" class="button popular__button">
                                <i class="ri-information-line"></i>
                            </a>                         
                    </article>
                    <ul id="selectedMotors"></ul>
                    
                </div>
            </div>
        </section>

        <section class="offer section">
                <div class="offer__container container grid">
                    <img src="image/bgg.jfif" alt="" class="offer__bg">

                    <div class="offer__data">
                        <h2 class="section__title offer__title">
                            Did You Enjoy Browsing  <br> and Looking for Motorcycle?
                        </h2>

                        <p class="offer__description">
                            Don't miss out the rides,  Look for your prefer destination using the 
                            motorcyle that your choose to have. And go to RIDEBOOK application
                            to have a new ride buddies and create memories.
                        </p>

                        <a href="https://drive.google.com/drive/u/0/folders/1foLZhUX5t3YzXDrrJkxvTuf0h5giPeF9?fbclid=IwAR1pjUUNTH2citl2tRnWl6dENeBA0wuLXfoykRFU_5fc5bVSFfG8onpjb_Y" class="button">
                            Click to Download the App
                        </a>
                    </div>

                    <img src="motors/offerimg.png" alt="" class="offer__img">
                </div>               
        </section>

        <section class="logos section">
             <div class="logos__container container grid">

                <div class="logos__content">
                    <a href="https://en.wikipedia.org/wiki/Honda">
                        <img src="image/logo1.png" alt="" class="logos__img">
                    </a>
                </div>

                <div class="logos__content">
                    <a href="https://en.wikipedia.org/wiki/Ducati_(company)">
                    <img src="motors/ducati-logo.png" alt="" class="logos__img">
                </a>
                </div>

                <div class="logos__content">
                    <a href="https://en.wikipedia.org/wiki/Harley-Davidson">
                    <img src="motors/harleyicon.png" alt="" class="logos__img">
                </a>
                </div>

                <div class="logos__content">
                    <a href="https://en.wikipedia.org/wiki/BMW">
                    <img src="image/logo4.png" alt="" class="logos__img">
                </a>
                </div>

                <div class="logos__content">
                    <a href="https://en.wikipedia.org/wiki/Suzuki">
                    <img src="motors/suzuki.png" alt="" class="logos__img">
                </a>
                </div>

                <div class="logos__content">
                    <a href="https://en.wikipedia.org/wiki/Kawasaki_Motors">
                    <img src="motors/kawasaki.png" alt="" class="logos__img">
                </a>
                </div>

                <div class="logos__content">
                    <a href="https://en.wikipedia.org/wiki/Aprilia">
                    <img src="motors/aprilla.png" alt="" class="logos__img">
                </a>
                </div>

                <div class="logos__content">
                    <a href="https://en.wikipedia.org/wiki/Sanyang_Motor">
                    <img src="motors/symlogo.png" alt="" class="logos__img">
                </a>
                </div>

                <div class="logos__content">
                    <a href="https://en.wikipedia.org/wiki/KTM">
                    <img src="motors/KTMLOGO.png" alt="" class="logos__img">
                </a>
                </div>
             </div>
        </section>
    </main>

    <footer class="footer section">
        <div class="shape shape__big"></div>
        <div class="shape shape__small"></div>

        <div class="footer__container container grid">
            <div class="footer__content">
                <a href="#" class="footer__logo">
                    <i class="ri-motorbike-fill"></i>
                RIDELOOK
                </a>

                <p class="footer__description">
                    We provide information <br>
                    the best motors <br>
                    in the Philippines.
                </p>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">
                    Company
                </h3>

                <ul class="footer__links">
                    <li>
                        <a href="About.html" class="footer__link">About</a>
                    </li>
                    
                    <li>
                        <a href="#" class="footer__link">Motorcyle</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">History</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Viewing</a>
                    </li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">
                    Information
                </h3>

                <ul class="footer__links">
                    <li>
                        <a href="#" class="footer__link">Request a Quote</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Find a Motorcyle</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Contact us</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Services</a>
                    </li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">  
                    FOllow us
                </h3>

                <ul class="footer__social">
                    <a href="https://www.facebook.com/profile.php?id=61554577736546&mibextid=LQQJ4d" target="_blank" class="footer__social-link">
                        <i class="ri-facebook-fill"></i>
                    </a>

                    <a href="https://instagram.com/ride_look?igshid=NzZlODBkYWE4Ng%3D%3D&utm_source=qr" target="_blank" class="footer__social-link">
                        <i class="ri-instagram-line"></i>       
                    </a>

                    <a href="https://twitter.com/ridelookkk" target="_blank" class="footer__social-link">
                        <i class="ri-twitter-x-line"></i>              
                    </a>
                </ul>
            </div>

        </div>

        <span class="footer__copy">
            &#169; RideLOOK. All rights reserved
        </span>
    </footer>

    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-line"></i>
    </a>

    <script src="scrollreveal.min.js"></script>
    <script src="unpkg.com_swiper@8.0.7_swiper-bundle.js"></script>

    <script src="mixitup.min.js"></script>

    <script src="main.js"></script>
</body>
</html>