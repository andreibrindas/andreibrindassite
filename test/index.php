<?php 






?>


<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<script src="jquery.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Open+Sans:600" rel="stylesheet">
    <style type="text/css">

    body {
        margin: 0;
        font-family: 'Open Sans', sans-serif;
    }
        
        #wrapper {
            position:absolute;
            height:100%;
            width:100%;

        }
    

        
        .panel {
            position:relative;
            width:100%;
            z-index:1000;
            background-color: #1D1D1D;
            }
        
        #home{
            
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            background-image: url('images/background.jpg');
            top: 0;
            left: 0;
            margin-bottom: 0;
            height:100%;
    }
        #work {
            height:533px;
            
        }
        
        #about {
            height:300px;
            padding: auto;
            background-color: #15191D;
        }
        
        #contact{
            
            color:#a5a6aa 
            
        }
    

        
    #name {

        position: relative;
        top: 300px;
        margin-left: auto;
        margin-right: auto;
        width: 630px;
        color: floralwhite;
        text-align: center;
        font-weight: bold;            
        }
        
        #name h1 {
            letter-spacing: 5px;
            font-size: 400%;
        } 
        
        #name p {
            font-style: italic;
        }
        
        a {
            text-decoration: none;
            color: #a5a6aa;
        }
        
        #menu {

            width: 310px;
            margin-left: auto;
            margin-right: auto;
            position: relative;
            top: 300px;
            
        }
        

        
        .menuItem {
            
            position: relative;
            float: left;
            margin: 10px;
            border: 2px solid #a5a6aa;
            padding: 10px;
        }
        
        .menuItem:hover {
            color: white;
            border: 2px solid white;
        }
        
        #navbarContainer {
            
            width: 280px;
            margin-left: auto;
            margin-right: auto;

            
        }
        
        
        #navbar {
            
            position: fixed;
            padding: 0;
            z-index: 100000;


            
        }
        
        .navbarItem {            
            list-style: none;
            float: left;
            margin: 10px;
            border: 2px solid #a5a6aa;
            padding: 10px;            
        }
        .navbarItem:hover {
            color: white;
            border: 2px solid white;
        }
        
        #aboutPanel {

            margin: 0 auto;
            top: 50px;
            
        }
        
        #car {
            width: 800px;
            margin: 0 auto;
        }
        
        #cont {
            width: 900px;
            margin: 0 auto;
        }
    
</style>
   
</head>
   <body>
   
   
<!-- Navigation bar    -->

<!-- Navigation bar end -->
    
    <div id="wrapper">
     
     <div id="navbarContainer">
   
    <ul id="navbar">
       <a href="#work"><li class="navbarItem">Work</li></a> 
       <a href="#about"><li class="navbarItem">About</li></a> 
       <a href="#contact"><li class="navbarItem">Contact</li></a>     
    </ul>  
 
    </div>
      
          
            

       
       <div id="home" class="panel jumbotron jumbotron-fluid">
        
            <div id="name" class="container">
            
                <h1 class="display-3">ANDREI BRINDAS</h1>
                <p>PHOTOGRAPHER & WEB DEVELOPER</p>
            
            </div>
            
            <div id="menu" class="container">
                
                <a href="#work"><div class="menuItem">Work</div></a>
                
                <a href="#about"><div class="menuItem">About</div></a>
                
                <a href="#contact"><div class="menuItem">Contact</div></a>
                
            </div>
        
        </div>

        <div id="work" class="panel">
            
            
            <div id="car">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="images/bw1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/bw2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/bw3.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/bw4.jpg" alt="Fourth slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/bw5.jpg" alt="Fifth slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/bw6.jpg" alt="Sixth slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/bw7.jpg" alt="Seventh slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/bw8.jpg" alt="Eight slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/bw9.jpg" alt="Ninth slide">
                </div>

              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            </div>
            
            
        </div>
        
        
        <div id="about" class="">
            <div class="card text-white bg-dark " style="max-width: 20rem;" id="aboutPanel">
                  <div class="card-body">
                        <p class="card-text">Hi there! My name is Andrew and I am a photographer and web developer based in Arad, Romania.</p>
                  </div>
            </div>
        </div>
        
        <div id="contact" class="panel">
           <div id="cont">
           <form method="post">
               <fieldset>
                <div class="container-fluid">                  
                    <p class="col">Name:  <input type="text" placeholder="Name" class="form-control"> </p>  
                    <p class="col">Email:  <input type="email" placeholder="Email" class="form-control"> </p> 
                    <p class="col">Subject:  <input type="text" placeholder="Subject" class="form-control"> </p>
                    <p class="col">Message:  <textarea class=" form-control" cols="30" rows="5" id="exampleFormControlTextarea1"></textarea> </p>
                    <p><button type="submit" class="btn btn-dark col-3" >Submit</button>           </p>                    
                </div>
               
               </fieldset>
           </form>
           </div> 
        </div>
        
        
        
    </div>
    
    
<!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>    -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    <script type="text/javascript"> 
        
    $("#navbar").hide();
        
    
        
        

    $(window).ready(function() {
        
        $(function() {
            
            var menuTop = $("#work").offset().top;
            
            $(window).scroll(function() {
                
                if ($(this).scrollTop() > menuTop - 200) {
                    
                    $("#navbar").fadeIn();
                    
                } else {
                    
                    $("#navbar").fadeOut();
                    
                }
                
            });
            
        });
        

    });
        
        
            
        
            
       </script>
</body>