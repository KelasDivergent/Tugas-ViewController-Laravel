<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
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
<main>
    <!-- about start -->
    <section>
        <div class="about"> 
          <div class="container">
            <div class="judul">
              <h1 class="text-center text-light m-5">My Profile</h1>
            </div>
          
            <div class="row d-flex justify-content-center align-items-center">
              <div class="col-md-8 ">
                <div class="judul">
                </div>
                <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              FullName, Age, Place of birth
                          </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <p>
                              Fullname: Hasby Aiman
                            </p> 
                            <p>
                              Age: 20 Years Old
                            </p>
                            <p>
                              Place of birth: 06, august 2003
                            </p>
                          </div>
                      </div>
                  </div>
                  <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTwo">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Education
                          </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <p>
                              2009-2015 SDN BARUNAWATI 03
                            </p>

                            <p>
                              2015-2018 SMPN 114
                            </p>

                            <p>
                              2018-2021 SMK CIKINI 1 NORT Jakarta
                            </p>

                            <p>
                              2021-2024 Institut Teknologi Telkom Purwokerto
                            </p>
                          </div>
                      </div>
                  </div>
                  <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Home address, Nationality, Marital status
                          </button>
                      </h2>
                      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <p>
                              Home address : Kp Walang Street RT 013 RW 03 No 58 Kec.Koja RBS Nort Jakarta 

                            </p>

                            <p>
                              Nationality : Indonesia 
                            </p>

                            <p>
                              Marital status: Single
                            </p>
                          </div>
                      </div>
                  </div>

                  <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                              E-mail, Phone number, 
                          </button>
                      </h2>
                      <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                           <p>
                            E-mail: kelasdivergent@gmai.com
                           </p>

                           <p>
                            Phone number: 089512286465
                           </p>
                          </div>
                      </div>
                  </div>
                  <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                              Motivation Me
                          </button>
                      </h2>
                      <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <p>
                              I really want to be a frontend developer, back end developer, and full stack developer. because that is my goal for now because, my past goals have been buried by the development of time
                            </p>
                          </div>
                      </div>
                  </div>
              </div>  
              </div>
              
              <div class="col-md-4 ">
                <div class="card img-thumbnail " style="width: 25rem;">
                  <img src="https://scontent.fcgk6-2.fna.fbcdn.net/v/t39.30808-6/278254282_3106180549623909_7408852114116188619_n.jpg?stp=dst-jpg_p526x296&_nc_cat=103&ccb=1-7&_nc_sid=a2f6c7&_nc_eui2=AeGQMR01Ng3Hqsd3_FJlI3ZUS5ki4WHSCnlLmSLhYdIKeR4qpD6zexqqo8sHel1ioXjH5CZQpgCNDoPwuu50nmAz&_nc_ohc=mJEOplwifbQAX_qR4y_&_nc_ht=scontent.fcgk6-2.fna&oh=00_AfCCo5y33z7UJ91nEwe_Yo1fwsYhnY8IjYIReEQ-P1T8TQ&oe=65150BAF" class="card-img-top" alt="...">
                </div>
              </div>


            </div>              

              </div>
            </div>
          </div>
        </div>

    </div>
  </div>
</div>
<!-- Skills End -->
<div class="route mt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        
        <a  class="btn btn-custom btn-danger w-50 "  href="{{ route('home.kampus') }}"
        >Ke Kampus</a>
      </div>
    </div>
  </div>
 

  <br>
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


</section>
<!-- About End -->
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
        <!-- Script Boostrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

          
     <!-- Feather Icons -->
     <script>
      feather.replace();
    </script>

</body>
</html>