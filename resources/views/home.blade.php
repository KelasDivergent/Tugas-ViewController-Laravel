<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
  
    <!-- Link Boostrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
 
   <!-- Feather Icons -->
      <script src="https://unpkg.com/feather-icons"></script>
</head>
<style>
html{
    scroll-behavior: smooth;
}
:root{
    --primary:rgb(0, 174, 255);
    --bg: rgb(10, 10, 10);
    --ground:rgb(255, 255, 255);
}
body{
    background-color: #439dec;

}

/* Navbar Start */
.navbar{
    background-color:rgb(255,255,255,0.8) ;
    position: fixed;
    border-bottom: 1px solid ;
    top: 0;
    left: 0;
    right: 0;
    z-index: 9999;
}
.navbar a{
    font-size: 22px;
    font-family: 'Times New Roman', Times, serif;
    font-weight: 600;
}
.navbar a:hover{
    color: var(--primary);
}
.navbar a::after{
    content: "";
    display: block;
    border-bottom: 0.1rem solid var(--primary);
    transform: scaleX(0);
    transition: 0.3s linear;
}
.navbar a:hover::after{
    transform: scale(0.8);
}

/* header Start */
.header{
    padding-top: 100px;
    background-image: url(https://images.unsplash.com/photo-1556767223-673341214ae4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8NHwxMTE3NDU5fHxlbnwwfHx8fHw%3D&auto=format&fit=crop&w=500&q=60);
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    position: relative;
    padding-bottom: 300px;
}

.header h1{
    color: whitesmoke;   
    font-size: 50px;
    font-weight: 600;
    font-family: 'Times New Roman', Times, serif;

}
/* header end */


/* footer */
footer {
  background-color:rgba(250, 252, 253, 0.623);
  text-align: center;
  padding: 0.5rem 1rem;
}
footer .social {
  padding: 0.5rem 0;
}
footer .social a {
  color: #fff;
  margin: 0.7rem;
}
footer .social a:hover,
footer .links a:hover {
  color:rgb(102, 102, 240);
}
footer .links {
  margin-bottom: 0.5rem;
}

footer .links a {
  color: #fff;
  padding: 0.3rem 0.5rem;
}
footer .credit {
  font-size: 0.8rem;
}
footer .credit a {
  color: var(--bg);
  font-weight: 700;
}



/* Navbar End */


</style>
<body>
      
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg d-flex justify-content-between align-items-center">
        <div class="container">
          <a class="navbar-brand" href="#"> <em>PORTOFOLIO</em></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item me-4">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item me-4">
                <a class="nav-link " href="#">Profile</a>
              </li>
              <li class="nav-item me-4">
                <a class="nav-link " href="#">Kampus</a>
              </li>
         
            </ul>
      
            
           


          </div>
        </div>
      </nav>
    <!-- Navbar End -->
  <main>

    <section class="header">
      <div class="container">
        <div class="row d-flex justify-content-center align-items-center ">
                <div class="col-md-7 mt-5">
                  <h1 class="text">Hii, Welcome to my website, 
                    This Is Home Page </h1>
                  </div>
                  
                  <div class="col-md-5 ">
                    <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_iorpbol0.json"
                    background="transparent" speed="1" style="width: 500px;" loop autoplay></lottie-player>
                    
                </div>
              </div>
            </div>
            <div class="route">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    
                    <a  class="btn btn-custom btn-success w-50 "  href="{{ route('home.profile') }}"
                    >Ke Profile</a>
                  </div>
                </div>
              </div>
             
    
              <br>
            </div>

            <div class="route2">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    
                      <a class="btn btn-custom btn-danger w-50"  href="{{ route('home.kampus') }}"
                      >Ke Kampus</a> 

                  </div>
                </div>
              </div>
             
    
              <br>
            </div>
     
    
          </section>
          <!-- Header End -->
          
        
        </main>

 <!-- footer start -->
    <footer>
      <div class="social">
        <a href="https://www.instagram.com/its.dreamcoffe/"
          ><i data-feather="instagram"></i
        ></a>
        <a href="#"><i data-feather="twitter"></i></a>
        <a href="#"><i data-feather="facebook"></i></a>
      </div>
      <div class="links">
        <a href="#home">Home</a>
        <a href="#about">Profile</a>
        <a href="#menu">Kampus</a>
      </div>
      <div class="credit">
        <p>
          Created by
          <a href="https://www.instagram.com/byyaiman/">hasbyaiman</a>. | &copy;
          2023.
        </p>
      </div>
    </footer>
    

    <!-- footer end -->

    <!-- Script Lotiefilles -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <!-- Script Boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
      
     <!-- Feather Icons -->
     <script>
      feather.replace();
    </script>

      </body>
</html>