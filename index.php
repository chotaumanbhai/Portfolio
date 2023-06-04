<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="images/Artboard 2.jpg" type="image/x-icon">
    <link rel="stylesheet" href="phone.css">
    <script src="https://kit.fontawesome.com/80e672e320.js" crossorigin="anonymous"></script>
    <script src="index.js"></script>
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <title>Personal Portfolio</title>
</head>

<body>
    <div id="navbar">
        <ul id="nav">
            <div id="logopic">
            <!-- <img src="images/image5.jpg" alt="logo" id="logo"> -->
            <h4 id="logoname">UMAN </h4>
            <h4 id="logoname2">ILYAS </h4>
            </div>
            <li id="Home"> <a href="#" id="link2">HOME</a></li>
            <li id="about"> <a href="#container" id="link2">ABOUT</a></li>
            <li id="services"> <a href="#container3" id="link2">SERVICES</a></li>
            <!-- <li> <a href="" id="link2">BLOG</a></li> -->
            <li id="contact"> <a href="#container4"  id="link2">CONTACT</a></li>
        </ul>
        <?php
   if(isset($_SESSION['message'])){
     echo $_SESSION['message'];
     unset($_SESSION['message']);
   }
  ?>
        <img src="images/image5.jpg" alt="" id="small">
        <h1 id="heading1">HY! I'M</h1>
        <h1 id="heading2">UMAN ILYAS</h1>
        <div class="container">
            <p id="heading3">Professional in</p>
            <p class="typed">WEB DEVELOPER</p>
        </div>
     
    </div>
    <div id="container">
        <h1 id="heading4">ABOUT </h1>
        <h1 id="heading5">ME </h1>
        <p id="intro">PHP Developer And Forentend Developer.</p>
        <p id="intro2">
            Self-motivated team player seeking lead web developer employment with Next Generation Web Development
            where I can utilize
            my advanced knowledge of web design and my management skills to satisfy customer needs and exceed
            their expectations.
        </p>
        <i class="fa-solid fa-calendar-days" id="icon"></i>
        <p id="birth">Birthday</p>
        <p class="colon">:
        <p>
        <p id="date">13-10-1999</p>
        <i class="fa-solid fa-phone" id="icon"></i>
        <p id="birth">Call</p>
        <p class="colon">:
        <p>
        <p id="date">+923020405262</p>
        <i class="fa-sharp fa-solid fa-paper-plane" id="icon"></i>
        <p id="birth">Email</p>
        <p class="colon">:
        <p>
        <p id="date2">mumanilyas271</p>
        <button id="btn"><a href="https://drive.google.com/file/d/1iElXeMP6cbzyALSWhf4DNNDEytCArOH2/view?usp=share_link" target="_blank" id="link" download="file">Download CV</a> </button>
        <button id="btn2"> <a href="#container4" id="link">Hire Me</a></button>
        <img src="images/Artboard 2.jpg" alt="" id="image">
    </div>
    <div id="container2">
        <h1 id="skills">MY</h1>
        <h1 id="skills2">SKILL</h1>
        <div class="skills">
            <h3>HTML</h3>
            <div class="progress">
                <div class="html"><span>90%</span></div>
            </div>
            <h3>CSS</h3>
            <div class="progress">
                <div class="css"><span>86%</span></div>
            </div>
            <h3>JAVA SCRIPT</h3>
            <div class="progress">
                <div class="java"><span>60%</span></div>
            </div>
            <h3>PHP</h3>
            <div class="progress">
                <div class="php"><span>75%</span></div>
            </div>
            <h3>MY SQL</h3>
            <div class="progress">
                <div class="sql"><span>80%</span></div>
            </div>
        </div>
    </div>
    <div id="container3">
        <h1 id="Services">MY</h1>
        <h1 class="services">SERVICES</h1>
        <div id="line"></div>
        <p id="offer">WHAT I OFFER</p>
        <div id="line2"></div>
        <div id="mainbox">
            <div id="box">
                <div id="icon5">
                    <i class="fas fa-laptop" id="icon2"></i>
                    <h2 id="design">Website Design</h2>
                </div>
            </div>
            <div id="box3">
                <div id="icon5">
                    <i class="fa-sharp fa-solid fa-code" id="icon2"></i>
                    <h2 id="design">Web Development</h2>
                </div>
            </div>
            <div id="box">
                <div id="icon5">
                    <i class="fa-solid fa-layer-group" id="icon2"></i>
                    <h2 id="design">PHP Developer</h2>
                </div>
            </div>
        </div>
        <div id="mainbox2">
            <div id="box4">
                <div id="icon5">
                    <i class="fa-solid fa-database" id="icon3"></i>
                    <h2 id="design2">MY SQL</h2>
                </div>
            </div>
            <div id="box5">
                <div id="icon5">
                    <i class="fa-solid fa-briefcase" id="icon3"></i>
                    <h2 id="design3">MS OFFICE</h2>
                </div>
            </div>
            <div id="box6">
                <div id="icon5">
                    <i class="fa-solid fa-lightbulb" id="icon3"></i>
                    <h2 id="design3">SEO Marketing</h2>
                </div>
            </div>
        </div>
    </div>
    <div id="container4">
        <h1 id="Contact">CONTACT</h1>
        <h1 class="contact">ME</h1>
        <div id="line3"></div>
        <p id="offer2">CONTACT WITH ME</p>
        <div id="line4"></div>
        <form action="insertdata.php" id="form" method="post">
            <input type="text" name="name" id="name" placeholder="Name *" required>
            <input type="email" name="email" id="email" placeholder="Email *" required>
            <textarea name="message" id="message" cols="100" rows="10" placeholder="Message *" required></textarea>
            <button id="btn3">SEND MESSAGE</button>
           
            
        </form>
    </div>
    <div class="mapouter">
        <div class="gmap_canvas">
            <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Darhoghawala Pakistan&amp;
         t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://capcuttemplate.org/">
                Capcut Template</a>
               
                <!-- <div class="elfsight-app-25eb6817-ad62-4800-971a-c011b2fc0d0d" id="whatsapp"></div> -->
        </div>
        
    </div>
    
    
    <div id="footer">
        <footer>
            copyright &copy;www.Uman Portfolio.com. All right reserved!
        </footer>
    </div>
</body>
</html>