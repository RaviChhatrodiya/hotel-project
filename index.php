<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="images/css/common.css">  
   <style>
        .availability-form{
          margin-top: -50px;
          z-index: 2;
          position: relative;
        }

          @media screen and (max-width: 575px){
            .availability form{
            margin-top: 25px;
           padding: 0 35px;
          }

        }
        
    </style>
  </head>
  <body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">    
        <a class="navbar-brand me-5 fw-bold fs-3" href="index.php">Empire Hotel</a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link  me-2" href="#">Rooms</a>
            </li>
            <li class="nav-item">
            <a class="nav-link  me-2" href="#">Facilities</a>
            </li>
            <li class="nav-item">
            <a class="nav-link  me-2" href="#">About us</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Contact us</a>
            </li>
        </ul>
        <div class="d-flex">
            <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2 " data-bs-toggle="modal" data-bs-target="#loginmodal">
            Login
            </button>
            <button type="button" class="btn btn-outline-dark shadow-none " data-bs-toggle="modal" data-bs-target="#registermodal">
            Register
            </button>
        </div>
        </div>
    </div>
    </nav>
         
    <div class="modal fade" id="loginmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    </div>

    <div class="modal fade" id="registermodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <form>
        <div class="modal-header">
            <h5 class="modal-title d-flex align-items-center">
            <i class="bi bi-person-lines-fill fs-3 me-2"></i>
            User Registration
            </h5>
            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
        <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
        NOte: your details must match with your ID (Adhaar card,passport,driving license,etc.)
        that will be required during check-in.
        </span>
        <div class="coitainer-fluid">
            <div class="row">
                <div class="col-md-6 ps-0 mb-3">
                <label class="form-label">Name</label>
             <input type="text" class="form-control shdow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                <label class="form-label">Email</label>
             <input type="email" class="form-control shdow-none">
                </div>
                <div class="col-md-6 ps-0 mb-3">
                <label class="form-label">phone number</label>
             <input type="number" class="form-control shdow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                <label class="form-label">picture</label>
             <input type="file" class="form-control shdow-none">
                </div>
                <div class="col-md-12 p-0 mb-3">
                <label class="form-label">Address</label>
             <textarea class="form-control shadow-none"rows="1"></textarea>
                </div>
                <div class="col-md-6 ps-0 mb-3">
                <label class="form-label">Pincode</label>
             <input type="number" class="form-control shdow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                <label class="form-label">Date of birth</label>
             <input type="date" class="form-control shdow-none">
                </div>
                <div class="col-md-6 ps-0 mb-3">
                <label class="form-label">Password</label>
             <input type="password" class="form-control shdow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                <label class="form-label">Confirm Password</label>
             <input type="password" class="form-control shdow-none">
                </div>
            </div>
        </div>
        <div class="text-center my-1">
        <button type="submit"class="btn btn-dark shadow-none">
             REGISTER
            </button>
        </div>
      </div>      
    </form>
    </div>
  </div>
</div>

      <!-- carousel -->


<div class="container-fluid px-lg-4  mt-4"> 
  <div class="swiper swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="images/carousel/1.png" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/2.png" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/3.png" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/4.png" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/5.png" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/6.png" class="w-100 d-block">
      </div>
      </div>
  </div>
</div>

      <!-- check availability form -->

       <div class="container availability-form">
        <div class="row">
          <div class="col-lg-12 bg-white shadow p-4 rounded">
            <h5 class="mb-4"> Check Booking Availability</h5>
            <form>
              <div class="row align-items-end">
                <div class="col-lg-3 mb-3">
                <label class="form-label" style="font-weight: 500;">Check-in</label>
               <input type="date" class="form-control shdow-none">
                </div>
                <div class="col-lg-3 mb-3">
                <label class="form-label" style="font-weight: 500;">Check-out</label>
               <input type="date" class="form-control shdow-none">
                </div>
                <div class="col-lg-3 mb-3">
                  <label class="form lable" style="font-weigth: 500;">Adult</label>
                  <select class="form-select shadow-none">
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div class="col-lg-2 mb-3">
                  <label class="form lable" style="font-weigth: 500;">Children</label>
                  <select class="form-select shadow-none">                    
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                  </div>
                <div class="col-lg-1  mb-lg-3 mt-2">
                <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                </div>

                </div>
              </div>
            </form>
          </div>
        </div>
       </div>

<!-- our rooms -->

       <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>


       <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: atuo;">
              <img src="images/rooms/1.jpg" class="card-img-top">
              <div class="card-body">
                <h5>Simple Room name</h5>
                <h6 class="mb-4">₹200 per night</h6>
                <div class="features mb-4">
                  <h6 class=" mb-1">Features</h6>
                  <span class="badge bg-light text-dark  text-wrap lh-base">
                     2 Rooms
                     </span>
                    <span class="badge bg-light text-dark  text-wrap lh-base">
                      1 BathRooms
                       </span>
                     <span class="badge bg-light text-dark  text-wrap lh-base">
                     1 Balcony
                  </span>
                  <span class="badge bg-light text-dark  text-wrap lh-base">
                    3 Sofa
                     </span>
                </div>
                <div class="facilities mb-4">
                  <h6 class=" mb-1">Facilities</h6>
                  <span class="badge bg-light text-dark  text-wrap lh-base">
                    Wifi
                    </span>
                   <span class="badge bg-light text-dark  text-wrap lh-base">
                    Television
                      </span>
                    <span class="badge bg-light text-dark  text-wrap lh-base">
                    AC
                 </span>
                 <span class="badge bg-light text-dark  text-wrap lh-base">
                   Room heater
                    </span>
                </div>
                <div class="rating mb-4">
                <h6 class=" mb-1">Rating</h6>
                <span class="badge rounded-pill-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                </span>
                </div>
                <div class="d-flex justify-content-evenly mb-2">
                 <a href="#" class="btn btn-sm text-white custom-bg shadow-none">BOOK NOW</a>
                <a href="#" class="btn btn-sm  btn-outline-dark  shadow-none">More details</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: atuo;">
              <img src="images/rooms/1.jpg" class="card-img-top">
              <div class="card-body">
                <h5>Simple Room name</h5>
                <h6 class="mb-4">₹200 per night</h6>
                <div class="features mb-4">
                  <h6 class=" mb-1">Features</h6>
                  <span class="badge bg-light text-dark  text-wrap lh-base">
                     2 Rooms
                     </span>
                    <span class="badge bg-light text-dark  text-wrap lh-base">
                      1 BathRooms
                       </span>
                     <span class="badge bg-light text-dark  text-wrap lh-base">
                     1 Balcony
                  </span>
                  <span class="badge bg-light text-dark  text-wrap lh-base">
                    3 Sofa
                     </span>
                </div>
                <div class="facilities mb-4">
                  <h6 class=" mb-1">Facilities</h6>
                  <span class="badge bg-light text-dark  text-wrap lh-base">
                    Wifi
                    </span>
                   <span class="badge bg-light text-dark  text-wrap lh-base">
                    Television
                      </span>
                    <span class="badge bg-light text-dark  text-wrap lh-base">
                    AC
                 </span>
                 <span class="badge bg-light text-dark  text-wrap lh-base">
                   Room heater
                    </span>
                </div>
                <div class="rating mb-4">
                <h6 class=" mb-1">Rating</h6>
                <span class="badge rounded-pill-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                </span>
                </div>
                <div class="d-flex justify-content-evenly mb-2">
                 <a href="#" class="btn btn-sm text-white custom-bg shadow-none">BOOK NOW</a>
                <a href="#" class="btn btn-sm  btn-outline-dark  shadow-none">More details</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: atuo;">
              <img src="images/rooms/1.jpg" class="card-img-top">
              <div class="card-body">
                <h5>Simple Room name</h5>
                <h6 class="mb-4">₹200 per night</h6>
                <div class="features mb-4">
                  <h6 class=" mb-1">Features</h6>
                  <span class="badge bg-light text-dark  text-wrap lh-base">
                     2 Rooms
                     </span>
                    <span class="badge bg-light text-dark  text-wrap lh-base">
                      1 BathRooms
                       </span>
                     <span class="badge bg-light text-dark  text-wrap lh-base">
                     1 Balcony
                  </span>
                  <span class="badge bg-light text-dark  text-wrap lh-base">
                    3 Sofa
                     </span>
                </div>
                <div class="facilities mb-4">
                  <h6 class=" mb-1">Facilities</h6>
                  <span class="badge bg-light text-dark  text-wrap lh-base">
                    Wifi
                    </span>
                   <span class="badge bg-light text-dark  text-wrap lh-base">
                    Television
                      </span>
                    <span class="badge bg-light text-dark  text-wrap lh-base">
                    AC
                 </span>
                 <span class="badge bg-light text-dark  text-wrap lh-base">
                   Room heater
                    </span>
                </div>
                <div class="rating mb-4">
                <h6 class=" mb-1">Rating</h6>
                <span class="badge rounded-pill-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                </span>
                </div>
                <div class="d-flex justify-content-evenly mb-2">
                 <a href="#" class="btn btn-sm text-white custom-bg shadow-none">BOOK NOW</a>
                <a href="#" class="btn btn-sm  btn-outline-dark  shadow-none">More details</a>
                </div>
              </div>
            </div>
          </div>
          <div class="lg-12 text-center mt-5">
            <a href="#"class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
          </div>
        </div>
       </div>

      <!-- our facilities-->

       <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>

     <div class="container">
      <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="images/facilities/wifi.svg" width="80px">
          <h5 class="mt-3">wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="images/facilities/wifi.svg" width="80px">
          <h5 class="mt-3">wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="images/facilities/wifi.svg" width="80px">
          <h5 class="mt-3">wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="images/facilities/wifi.svg" width="80px">
          <h5 class="mt-3">wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="images/facilities/wifi.svg" width="80px">
          <h5 class="mt-3">wifi</h5>
        </div>
        <div class="col-lg-12 text-center mt-5">
        <a href="#"class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>></a>
        
        </div>
      </div>
     </div>

      <!--  testimonials -->

     <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>

    <div class="container mt-5">
     <div class="swiper swiper-testimonials">
    <div class="swiper-wrapper mb-5">


      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
          <img src="images/facilities/star.svg" width="30px">
          <h6 class=" m-0 ms-2">Random user1</h6>
        </div>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
          Sed omnis nesciunt consequuntur voluptates reprehenderit 
          provident quia iste praesentium quod! Sapiente?
        </p>
        <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>  
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
        </div>
       </div>

    <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center p-4">
          <img src="images/facilities/star.svg" width="30px">
          <h6 class=" m-0 ms-2">Random user1</h6>
        </div>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
          Sed omnis nesciunt consequuntur voluptates reprehenderit 
          provident quia iste praesentium quod! Sapiente?
        </p>
        <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>  
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
        </div>
       </div>
     <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center p-4">
          <img src="images/facilities/star.svg" width="30px">
          <h6 class=" m-0 ms-2">Random user1</h6>
        </div>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
          Sed omnis nesciunt consequuntur voluptates reprehenderit 
          provident quia iste praesentium quod! Sapiente?
        </p>
        <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>  
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
        </div>
       </div>


    </div>
    <div class="swiper-pagination"></div>
       </div>
       <div class="col-lg-12 text-center mt-5">
        <a href="#"class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More >>></a>
        
        </div>
     </div>

      <!--  Reach us -->

      <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-8  p-4 mb-lg-0 mb-3 bg-white rounded">
            <iframe  class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.550176191021!2d70.78827227529246!3d22.295023179690368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959ca19b942ac15%3A0x43959c45a1d3f88a!2sThe%20Imperial%20Palace!5e0!3m2!1sen!2sin!4v1721564877941!5m2!1sen!2sin" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col lg-4 col-md-4">
              <div class="bg-white p-4 rounded mb-4">
                <h5>Call us</h5>
                <a href="tel: +919898345656" class="d-inline-block mb-2 text-decoration-none text-dark">
                <i class="bi bi-telephone-fill"></i> +919898345656
                </a>
                <br>
                <a href="tel: +919898345656" class="d-inline-block text-decoration-none text-dark">
                <i class="bi bi-telephone-fill"></i> +919898345656
                </a>
                <br>
              </div>
              <div class="bg-white p-4 rounded mb-4">
                <h5>Follow us</h5>
                <a href="#" class="d-inline-block mb-3">
                <span class="badge bg-light text-dark fs-6 p-2">
                <i class="bi bi-twitter me-1"></i> Twitter
                </span>
                </a>
                <br>
                <a href="#" class="d-inline-block mb-3">
                <span class="badge bg-light text-dark fs-6 p-2">
                <i class="bi bi-facebook me-1"></i> Facebook
                </span>
                </a>
                <br>
                <a href="#" class="d-inline-block mb-3">
                <span class="badge bg-light text-dark fs-6 p-2">
                <i class="bi bi-instagram me-1"></i> Instagram
                </span>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="container-fluid bg-white mt-5">
          <div class="row">
            <div class="col-lg-4">
              <h3 class="h-font fw-bold fs-3 mb-2">Empire Hotel</h3>
              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                 Nulla quae nemo corrupti ut quia voluptatem cumque sapiente neque expedita,
                 id vero aliquid inventore, maxime illo ipsum magni consequuntur. Possimus, deleniti?
              </p>
            </div>
            <div class="col-lg-4">
              <h5 class="mb-3">Links</Link></h5>
              <a href="#" class="d-line-block mb-2 text-dark text-decoration-none">Home</a><br>
              <a href="#" class="d-line-block mb-2 text-dark text-decoration-none">Room</a><br>
              <a href="#" class="d-line-block mb-2 text-dark text-decoration-none">Facilities</a><br>
              <a href="#" class="d-line-block mb-2 text-dark text-decoration-none">Contact us</a><br>
              <a href="#" class="d-line-block mb-2 text-dark text-decoration-none">About us</a>

             
              </div>
              <div class="col-lg-4">
              <h5 class="mb-3">Follow us</h5>
              <a href="#" class="d-inline-block mb-3">
                <span class="badge bg-light text-dark text-decoration-none fs-6 p-2">
                  <i class="bi bi-twitter me-1"></i> Twitter </a>
                  <br>
                  <a href="#" class="d-inline-block mb-3">
                <span class="badge bg-light text-dark text-decoration-none fs-6 p-2">
                  <i class="bi bi-facebook me-1"></i>facebook</a>
                  <br>
                  <a href="#" class="d-inline-block mb-3">
                <span class="badge bg-light text-dark text-decoration-none fs-6 p-2">
                  <i class="bi bi-instagram me-1"></i>instagram</a>
              </div>
          </div>
        </div>

   <h6 class="text-center bg-dark text-white p-3 m-0"> Designed and Developed by ravi and vikram</h6>
       
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


   <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,

      }
    });
    var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      loop:  true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      }
    });
  </script>
</body>
</html>