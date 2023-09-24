<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kampus</title>
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
.about {
  margin-top: 100px;
}

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

    <!-- about start -->
    <section>
        <div class="about"> 
          <div class="container">
            <div class="judul">
              <h1 class="text-center text-light mb-3">My Kampus</h1>

                <br>
    <section class="obyek" id="obyek">
      <div class="container">
        <h1 class="text-center text-light mb-5 mt-5">
          INSTITUT TEKNOLOGI TELKOM PURWOKERTO

        <div class="row">
          <div class="col-md-6 mb-5">
            <div class="card rounded-15 p-3" >
              <img src=" https://i0.wp.com/ittelkom-pwt.ac.id/wp-content/uploads/2023/03/top_5_universities.png?fit=2560%2C1358&ssl=1" class="img-fluid rounded-15" alt="...">
             
            </div>
          </div>
     
          <div class="col-md-6 mb-5">
            <div class="card rounded-15 p-3" >
             
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.2708044739916!2d109.24651767413216!3d-7.435257773252294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655ea49d9f9885%3A0x62be0b6159700ec9!2sInstitut%20Teknologi%20Telkom%20Purwokerto!5e0!3m2!1sid!2sid!4v1695585024094!5m2!1sid!2sid" width="500" height="266" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
             
            </div>
          </div>
        </div>
      </div>
    </section>
      </section>
      <!-- About End -->
      <div class="route2">
        <div class="container">
          <div class="row">
            <div class="col-md-6 mb-5">
              
              <a  class="btn btn-custom text-light btn-success w-50 "  href="{{ route('home.profile') }}"
              >Ke Profile</a>
            </div>
          </div>
        </div>
      
      </div>
      <div class="route2">
        <div class="container">
          <div class="row">
            <div class="col-md-6 mb-5">
              
              <a  class="btn btn-custom text-light btn-info w-50 "  href="{{ route('home.home') }}"
              >Ke Home</a>
            </div>
          </div>
        </div>
      
      </div>


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
    
        <!-- Script Boostrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>