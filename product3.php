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
                            <a class="nav-link" href="index.php">HOME</a>
                        </li>
<!--                        <li class="nav-item">
                            <a class="nav-link" href="#about">ABOUT US</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">SERVICES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#team">OUR TEAM</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#price">PRICE PLANS</a>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">CONTACT</a>
                        </li>-->
                    </ul>
                </div>
            </nav>              
        </section>
        <section id="product">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="assets/images/use1.jpeg" class="d-block w-100" alt="First Slide">
    </div>
    <div class="carousel-item">
        <img src="assets/images/use3.jpeg" class="d-block w-100" alt="Second Slide">
    </div>
    <div class="carousel-item">
        <img src="assets/images/use2.jpeg" class="d-block w-100" alt="Third Slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
                        
                    </div>
                     <div class="col-md-7">
                         <p class="newarrival text-center">I7 Computer</p>
                         <!--<h2>This is a used i5 computer in great condition</h2>-->
                         <p class="priceP">Price: USD $190</p>
                          <p class="spec">Specification</p>
                         <p><b>Intel(R) Core(TM) i5-2520M CPU @2.50Ghz</b></p>
                         <p><b>32 bit Operating System, x64-based processor</b></p>
                         <p><b>300GB Memory Local Disks</b></p>
                         <p><b>4GB RAM</b></p>
                <div id="paypal-button-container"></div>
<script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD" data-sdk-integration-source="button-factory"></script>
<script>
  paypal.Buttons({
      style: {
          shape: 'pill',
          color: 'gold',
          layout: 'vertical',
          label: 'paypal',
          
      },
      createOrder: function(data, actions) {
          return actions.order.create({
              purchase_units: [{
                  amount: {
                      value: '190'
                  }
              }]
          });
      },
      onApprove: function(data, actions) {
          return actions.order.capture().then(function(details) {
              alert('Transaction completed by ' + details.payer.name.given_name + '!');
          });
      }
  }).render('#paypal-button-container');
</script>  
 
                    
                    </div>
                    
                </div>
                
                
            </div>
            
        </section >
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

