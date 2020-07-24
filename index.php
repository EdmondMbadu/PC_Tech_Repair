<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PC TECH REPAIR</title>
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"

    </head>
    <body>
        <section id="nav-bar">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#"><img src="assets/images/PC.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#top">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">ABOUT US</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">SERVICES</a>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link" href="#price">BUY A COMPUTER</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="#team">OUR TEAM</a>
                        </li>
                      
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </nav>              
        </section>

        <div id="slider">
            <div id="headerSlider" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#headerSlider" data-slide-to="0" class="active"></li>
                    <li data-target="#headerSlider" data-slide-to="1"></li>
                    <li data-target="#headerSlider" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid"src="assets/images/apioko3.jpg">
                        <div class="carousel-caption">
                            <h5>Repair Your Computer</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img  class="d-block img-fluid" src="assets/images/apioko5.jpg">
                        <div class="carousel-caption">
                            <h5>Buy A Computer i5 and i7 starting at $130</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img  class="d-block img-fluid" src="assets/images/screen.jpg">
                        <div class="carousel-caption">
                            <h5>Repair Your Smart TV</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img  class="d-block img-fluid" src="assets/images/iphone.jpg">
                        <div class="carousel-caption">
                            <h5>Repair Your Iphone or Android</h5>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>          
        </div>
        <!----About---->
        <section id="about">
            <div class="container" > 
                <div class="row">
                    <div class="col-md-6">
                        <h2>About Us</h2>
                        <div class="about-content">
                            PC TECH REPAIR focuses on building relationships with customers and providing excellent service. 
                            We repair hardware problems on electronic devices. It being a computer, phone, or TV. We also sell used computers 
                            at unbeatable prices. 
                        </div>
                        <a href="#promo">
                        <button type="button" class="btn btn-primary">Call Us</button>
                        </a>
                            
                    </div>
                    <div class="col-md-6 skills-bar">
                        <p>Repair Computers</p>
                        <div class="progress">
                            <div class="progress-bar" style="width: 80%;">80%</div>
                        </div>
                        <p>Repair Android and IPhones</p>
                        <div class="progress">
                            <div class="progress-bar" style="width: 85%;">85%</div>
                        </div>
                        <p>Sell Used Computers</p>
                        <div class="progress">
                            <div class="progress-bar" style="width: 75%;">75%</div>
                        </div>
                        <p>Repair Smart TVs</p>
                        <div class="progress">
                            <div class="progress-bar" style="width: 50%;">50%</div>
                        </div>

                    </div>
                </div>
            </div>


        </section>
       

    <!--------SERVICES------>
    <section id="services">
        <div class="container">
            <h1>Our Services</h1>
            <div class="row services">
                <div class="col-md-3 text-center">
                    <a href="#contact">
                        <div class="icon">
                            <i class="fa fa-desktop"></i>       
                        </div>  
                        <h3>Repair Computers</h3>
                        <p>PC TECH REPAIR focuses on building relationships with customers and providing excellent service. 
                            We repair hardware problems on electronic devices. Mainly, 
                            computers. 
                        </p>
                    </a>
                </div>

                <div class="col-md-3 text-center">
                    <a href="#contact">
                    <div class="icon">
                        <i class="fa fa-mobile"></i>       
                    </div>  
                    <h3>Repair Android and IPhones</h3>
                    <p>We also repair phones ( Android and Iphones).
                    </p>
                    </a>

                </div>
                <div class="col-md-3 text-center" >
                    <a href="#price">
                    <div class="icon">
                        <i class="fa fa-line-chart"></i>  
                    </div>  
                    <h3>Sell Used Computers</h3>
                    <p> We sell i3 computers starting at $130, i5 computers at $160
                        , and i7 computers at $180. 
                    </p>
                    </a>

                </div>
                <div class="col-md-3 text-center">
                    <a href="#contact">
                    <div class="icon">
                        <i class="fa fa-tv"></i>       
                    </div>  
                    <h3>Repair Smart TVs</h3>
                    <p>
                        We repair smart TVs. 
                        Give us a call for details.
                    </p>
                    </a>

                </div>


            </div>
        </div>

    </section>
    
    <!------Price Plans---->
    <section id="price">

        <div class="container">

            <h1>Used Computer Price & Details</h1>
            <div class="row">
                <div class="col-md-3">
                    <div class="single-price">
                        <div class="price-head">
                            <h2>i2 Computers</h2>
                            <p>130$<span></span></p>
                        </div>
                        <div class="price-content">
                            <ul>
                              <li><i class="fa fa-check-circle"></i>Intel(R) Core(TM) i2-2520M CPU @2.50Ghz</li>
                                <li><i class="fa fa-check-circle"></i>32 bit Opearting System, x64-based processor</li>
                                <li><i class="fa fa-check-circle"></i>300GB Memory Local Disks</li>
                                <li><i class="fa fa-check-circle"></i>Unlimited Support</li>
                            </ul>

                        </div>
                        <div class="price-button">
                            <a class="buy-btn" href="product0.php">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-price">
                        <div class="price-head">
                            <h2>i3 Computers</h2>
                            <p>150$<span></span></p>
                        </div>
                        <div class="price-content">
                            <ul>
                               <li><i class="fa fa-check-circle"></i>Intel(R) Core(TM) i3-2520M CPU @2.50Ghz</li>
                                <li><i class="fa fa-check-circle"></i>32 bit Opearting System, x64-based processor</li>
                                <li><i class="fa fa-check-circle"></i>300GB Memory Local Disks</li>
                                <li><i class="fa fa-check-circle"></i>Unlimited Support</li>
                            </ul>

                        </div>
                        <div class="price-button">
                            <a class="buy-btn" href="product.php">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-price">
                        <div class="price-head">
                            <h2>i5 Computers</h2>
                            <p>170$<span></span></p>
                        </div>
                        <div class="price-content">
                            <ul>
                                <li><i class="fa fa-check-circle"></i>Intel(R) Core(TM) i5-2520M CPU @2.50Ghz</li>
                                <li><i class="fa fa-check-circle"></i>32 bit Opearting System, x64-based processor</li>
                                <li><i class="fa fa-check-circle"></i>300GB Memory Local Disks</li>
                                <li><i class="fa fa-check-circle"></i>Unlimited Support</li>
                            </ul>

                        </div>
                        <div class="price-button">
                            <a class="buy-btn" href="product2.php">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-price">
                        <div class="price-head">
                            <h2>i7 Computers</h2>
                            <p>190$<span>month</span></p>
                        </div>
                        <div class="price-content">
                            <ul>
                                 <li><i class="fa fa-check-circle"></i>Intel(R) Core(TM) i7-2520M CPU @2.50Ghz</li>
                                <li><i class="fa fa-check-circle"></i>32 bit Opearting System, x64-based processor</li>
                                <li><i class="fa fa-check-circle"></i>300GB Memory Local Disks</li>
                                <li><i class="fa fa-check-circle"></i>Unlimited Support</li>
                            </ul>

                        </div>
                        <div class="price-button">
                            <a class="buy-btn" href="product3.php">Buy Now</a>
                        </div>
                    </div>
                </div>

            </div>
    </section>

    <!----- Team Members------>
    <section id="team">
        <div class="container">
            <h1>Our Team</h1> 
            <div class="row">
                <div class="col-md-3 profile-pic text-center">
                    <div class="img-box">
                        <img src="assets/images/im3.jpeg" class="img-responsive"> 
                        <ul>
                            <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                            <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                            <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                        </ul>
                    </div>
                    <h2>Charly Apioko</h2>
                    <h3>Founder / Manager </h3>
                    <p>

                    </p>
                </div>
                <div class="col-md-3 profile-pic text-center">
                    <div class="img-box">
                        <img src="assets/images/blanchard.jpeg" class="img-responsive"> 
                        <ul>
                            <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                            <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                            <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                        </ul>
                    </div>
                    <h2>Blanchard Kiangani</h2>
                    <h3>Technical Advisor</h3>
                    <p>

                    </p>
                </div>
                
                <div class="col-md-3 profile-pic text-center">
                    <div class="img-box">
                        <img src="assets/images/Reginald.jpeg" class="img-responsive"> 
                        <ul>
                            <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                            <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                            <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                        </ul>
                    </div>
                    <h2>Reginald Mushegera</h2>
                    <h3>Technical Support</h3>
                    <p>

                    </p>
                </div>
                <div class="col-md-3 profile-pic text-center">
                    <div class="img-box">
                        <img src="assets/images/alain matuba.jpeg" class="img-responsive"> 
                        <ul>
                            <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                            <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                            <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                        </ul>
                    </div>
                    <h2>Alain Matuta</h2>
                    <h3>Technical Support</h3>
                    <p>

                    </p>
                </div>

            </div>



    </section>

    <!-----promo----->
    <section id="promo">
        <div class="container">
            <p>
                Call us at 770-374-1689 </p>
            <a href="#contact" class="btn btn-primary">Contact Us</a> 
            

        </div>


    </section>


    <!-------Get in touch----->
    <section id="contact">
        <div class="container">
            <h1>Get In Touch</h1>
            <div class="row">
                <div class="col-md-6">
                    <form class="contact-form">
                        <div class="form-group">
                            <input type="text" class="form-control"placeholder="Your Name">

                        </div>  
                        <div class="form-group">
                            <input type="email" class="form-control"placeholder="Email">

                        </div> 
                        <div class="form-group">
                            <textarea class="form-control" rows="4" placeholder="Your Message"></textarea>
                        </div> 
                        <button type="submit" class="btn btn-primary">SEND MESSAGE</button>
                    </form>    
                </div>
                <div class="col-md-6 contact-info">
                  
                    <div class="follow">
                       
                          <b>Address: </b>
                          <a href="https://goo.gl/maps/5pVDYq2fkXFzACiE9"><i class="fa fa-map-marker"></i></a>
                            1175 Thompson Bridge Road. Suit B2
                    </div>
                        
                    <div class="follow"><b>Phone: </b><i class="fa fa-phone"></i> 770-374-1689

                    </div>
                    <div class="follow"><b>Email: </b><i class="fa fa-envelope-o"></i> pctech3@gmail.com

                    </div>
                    <div class="follow">
                        <label>Get Social: </b></label>
                        <a href="https://www.facebook.com/PC-TECH-Repair-105903897814207/"><i class="fa fa-facebook"></i></a>
                        <a href="https://youtu.be/LHkGAq9w9-Q"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>



                    </div>

                </div>
            </div>
        </div>

    </section>
  <script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: 'f6fe0ec9-501d-4fbd-89db-d12684e13eca', f: true }); done = true; } }; })();</script>
   <!-----Footer---->
    <section id="footer">
        <div class="container">
            <p>Made with <i class="fa fa-heart-o"></i> by PC TECH REPAIR Charly Apioko</p>
        </div>

    </section>
    <script src="assets/js/smooth-scroll.js"></script>
    <script>
        var scroll = new SmoothScroll('a[href*="#"]');
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>   
</body>
</html>
