<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Validate form data (you can add more validation here)
    if (empty($name) || empty($email) || empty($message) || empty($subject)) {
        // echo "Please fill out all the fields.";
       
        echo '<script> alert("Please fill out all the fields."); document.location.href= "index.php"  </script>';
        exit;
    }

    // Send the email
    $to = "kifayatjimoh2@gmail.com"; // Replace with your email address
    $subject = "New Contact Form Submission";
    $headers = "From: $email\r\n" .
               "Reply-To: $email\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // You can customize the email content as per your requirement
    $emailContent = "Name: $name\nEmail: $email\nsubject:  $subject\nMessage: $message";

    if (mail($to, $subject, $emailContent, $headers)) {
        // echo "Thank you for your message. We'll get back to you soon!";
        echo '<script> alert("Thank you for your message."); </script>';
    } else {
        // echo "Oops! Something went wrong. Please try again later.";
        echo '<script> alert("Oops! Something went wrong. Please try again later."); </script>';
    }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./asssets/css/bootstrap.min.css">
  <link rel="stylesheet" href="./asssets/css/line-awesome.min.css">
  <link rel="stylesheet" href="./asssets/css/style.css">
  <link rel="stylesheet" href="./asssets/css/aos.css">
  <title>My Portfolio</title>
</head>

<body  data-bs-spy="scroll" data-bs-target=".navbar">
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container flex-lg-column">
      <a class="navbar-brand mb-lg-4 mx-lg-auto" href="#">
        <span class="h3 fw-bold d-block d-lg-none">Kifayat Jimoh</span>
        <img src="./asssets/images/imag.jpg" class="d-none d-lg-block rounded-circle">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto flex-lg-column" text-lg-center>

          <li class="nav-item">
            <a class="nav-link" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#work">Work</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#skills">Skills</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#portfolio">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- end of navbar -->


  <!-- contents wrapper -->
  <div id="content-wrapper">

    <!-- home section -->
    <section id="home" class="full-height px-lg-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <h1 class="display-4 fw-bold " data-aos="fade-up">I'M A <span class="text-brand">FRONTEND DEVELOPER</span>
              FROM NIGERIA </h1>
            <P class="lead mt-2 mb-4" data-aos="fade-up" data-aos-delay="300">I am Kifayat Jimoh, And i craft
              high-performing and delightful experiences tailored and conversion-focused</P>
            <div data-aos="fade-up" data-aos-delay="600">
              <a href="#work" class="btn btn-brand me-3">Explore My Work</a>
              <a href="#" class="link-custom">Call: 080 352 10372</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end of home section -->
    <!-- services section -->
    <section id="services" class="full-height px-lg-5">
      <div class="container">
        <div class="row pb-4" data-aos="fade-up">
          <div class="col-lg-8">
            <h6 class="text-brand">SERVICES</h6>
            <h1>Services That I Provide</h1>
          </div>
        </div>
        <div class="row gy-4 ">
          <div class="col-md-4" data-aos="fade-up">
            <div class="service p-4 bg-base rounded-4 shadow-effect">
              <div class="iconbox rounded-4">
                <i class="las la-feather"></i>
              </div>
              <h5 class="mt-4 mb-2">UX Design</h5>
              <p>I craft high and delightful experiences tailored and conversion-focused</p>
              <a href="" class="link-custom">Read More</a>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="service p-4 bg-base rounded-4 shadow-effect">
              <div class="iconbox rounded-4">
                <i class="las la-pencil-ruler"></i>
              </div>
              <h5 class="mt-4 mb-2">Branding</h5>
              <p>I craft high and delightful experiences tailored and conversion-focused</p>
              <a href="" class="link-custom">Read More</a>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
            <div class="service p-4 bg-base rounded-4 shadow-effect">
              <div class="iconbox rounded-4">
                <i class="las la-laptop-code"></i>
              </div>
              <h5 class="mt-4 mb-2">Web Designing</h5>
              <p>I craft high and delightful experiences tailored and conversion-focused</p>
              <a href="" class="link-custom">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end of services section -->
    <!-- work section -->
    <secion id="work" class="full-height px-lg-5">
      <div class="container">
        <div class="row pb-4" data-aos="fade-up">
          <div class="col-lg-8">
            <h6 class="text-brand"> WORK</h6>
            <h1>My Recent Projects</h1>
          </div>
          <div class="row gy-4">
            <div class="col-md-6" data-aos="fade-up">
              <div class="card-custom rounded-4 bg-base shadow-effect">
                <div class="card-custom-image rounded-4">
                  <img class="rounded-4" src="./asssets/images/{0739AC09-1834-4B4E-B9D5-2D3EF39FA935}.png.jpg" alt="">
                </div>
                <div class="card-custom-content p-4">
                  <h4>Web Course Landing Page</h4>
                  <p>Innovation that exceeds expectations. Astra is a true template equiped with all the elements you
                    could ever need to put together</p>
                  <a href="" class="link-custom">Read More</a>
                </div>
              </div>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="card-custom rounded-4 bg-base shadow-effect">
                <div class="card-custom-image rounded-4">
                  <img class="rounded-4" src="./asssets/images/{0739AC09-1834-4B4E-B9D5-2D3EF39FA935}.png.jpg" alt="">
                </div>
                <div class="card-custom-content p-4">
                  <h4>Web Course Landing Page</h4>
                  <p>Innovation that exceeds expectations. Astra is a true template equiped with all the elements you
                    could ever need to put together</p>
                  <a href="" class="link-custom">Read More</a>
                </div>
              </div>
            </div>
            <div class="col-md-6" data-aos="fade-up">
              <div class="card-custom rounded-4 bg-base shadow-effect">
                <div class="card-custom-image rounded-4">
                  <img class="rounded-4" src="./asssets/images/{0739AC09-1834-4B4E-B9D5-2D3EF39FA935}.png.jpg" alt="">
                </div>
                <div class="card-custom-content p-4">
                  <h4>Web Course Landing Page</h4>
                  <p>Innovation that exceeds expectations. Astra is a true template equiped with all the elements you
                    could ever need to put together</p>
                  <a href="" class="link-custom">Read More</a>
                </div>
              </div>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
              <div class="card-custom rounded-4 bg-base shadow-effect">
                <div class="card-custom-image rounded-4">
                  <img class="rounded-4" src="./asssets/images/{0739AC09-1834-4B4E-B9D5-2D3EF39FA935}.png.jpg" alt="">
                </div>
                <div class="card-custom-content p-4">
                  <h4>Web Course Landing Page</h4>
                  <p>Innovation that exceeds expectations. Astra is a true template equiped with all the elements you
                    could ever need to put together</p>
                  <a href="" class="link-custom">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </secion>
    <!-- end of work section -->

    <!-- about section -->
    <section id="about" class="full-height px-lg-5">
      <div class="container">
        <div class="row pb-4" data-aos="fade-up">
          <div class="col-lg-8">
            <h6 class="text-brand">ABOUT ME</h6>
            <h1>My Experience</h1>
            <p data-aos="fade-up" data-aos-delay="300">As a Frontend Developer, i find myself constantly immersed in the
              fascinating world of web dvelopment.What started as a hobby soon turned into a full-blown love affair with
              crafting elegant and interactiveuser interfaces that leaves a lasting impression</p>
          </div>
          <div data-aos="fade-up" data-aos-delay="600">
            <a href="#contact" class="btn btn-brand me-3">Contact Me</a>
          </div>
        </div>
    </section>
    <!-- end of about section -->
    <!-- skills section -->
<section id="skills" class="full-height px-lg-5  g-col-4">
      <div class="container">
        <div class="row pb-4" data-aos="fade-up">
          <div class="col-lg-8">
            <h6 class="text-brand">SKILLS</h6>
            <h1>MY SKILLS</h1>
          </div>
        </div>
        <div class="pb-4  ">
          <div data-aos="fade-up">
            <div class="d-flex justify-content-between">
              <b> HTML5 </b>
              <p>80%</p>
            </div>
            <div class="progress">
              <div class="progress-bar" style="width:80%">
              </div>
            </div>
          </div>
          <div data-aos="fade-up" data-aos-delay="300" >
            <div class="d-flex justify-content-between mt-5">
              <b> CSS3 </b>
              <p>75</p>
            </div>
            <div class="progress">
              <div class="progress-bar" style="width:75%">
              </div>
            </div>
          </div>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="d-flex justify-content-between mt-5">
              <b> JAVASCRIPT</b>
              <p>30</p>
            </div>
            <div class="progress">
              <div class="progress-bar" style="width:30%">
              </div>
            </div>
          </div>
          <div data-aos="fade-up" data-aos-delay="900">
            <div class="d-flex justify-content-between mt-5">
              <b> Bootstrap</b>
              <p>80</p>
            </div>
            <div class="progress">
              <div class="progress-bar" style="width:80%">
              </div>
            </div>
          </div>
          <div data-aos="fade-up" data-aos-delay="1000">
            <div class="d-flex justify-content-between mt-5">
              <b> PHP</b>
              <p>50</p>
            </div>
            <div class="progress">
              <div class="progress-bar" style="width:50%">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end of skills section -->
    <!-- portfolio section -->
    <div id="portfolio" class="full-height px-lg-5">
      <div class="container">
        <div class="row pb-4" data-aos="fade-up">
          <div class="col-lg-8">
            <h6 class="text-brand"> WORK</h6>
            <h1>My Recent Projects</h1>
          </div>
        </div>
        <div class="row gy-4">
          <div class="col-md-4" data-aos="fade-up">
            <div class="card-custom-two rounded-4 bg-base shadow-effect">
              <div class="card-custom-imag rounded-4">
                <img class="rounded-4" src="./asssets/images/blog3.jpg" alt="">
              </div>
              <div class="card-custom-content p-4">
                <h4>Web Course Landing Page</h4>
                <p>Lorem ipsum dolor sit amet.</p>
                <a href="" class="link-custom">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card-custom-two rounded-4 bg-base shadow-effect">
              <div class="card-custom-imag rounded-4">
                <img class="rounded-4" src="./asssets/images/portfolio1.jpg" alt="">
              </div>
              <div class="card-custom-content p-4">
                <h4>Web Course Landing Page</h4>
                <p>Lorem ipsum dolor sit amet.</p>
                <a href="" class="link-custom">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up">
            <div class="card-custom-two rounded-4 bg-base shadow-effect">
              <div class="card-custom-imag rounded-4">
                <img class="rounded-4" src="./asssets/images/port2.jpg" alt="">
              </div>
              <div class="card-custom-content p-4">
                <h4>Web Course Landing Page</h4>
                <p>Lorem ipsum dolor sit amet.</p>
                <a href="" class="link-custom">Read More</a>
              </div>
            </div>
          </div>

        </div>
      </div>
 </div>
 <!-- end of portfolio section -->
 <!-- contact section -->
 <section id="contact" class="full-height px-lg-5">
  <div class="container">
   
  
    <div class="row justify-content-center text-center" data-aos="fade-up">
      <div class="col-lg-8 pb-4">
        <h6 class="text-brand">CONTACT</h6>
        <h1>Interested in working together? let's talk.</h1>
      </div>
          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="300">
         
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="row g-lg-3 gy-3">
              <div class="form-group col-md-6">
                <input type="text" class="form-control" name="name" placeholder="Enter your name">
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" placeholder="Enter your email">
              </div>
              <div class="form-group col-md-12">
                <input type="text" class="form-control" name="subject" placeholder="Enter your subject">
              </div>
              <div class="form-group col-md-12">
                <textarea  rows="4" class="form-control" name="message" placeholder="Enter your message"></textarea>
              </div>
              <div class="form-group col-md-12 d-grid">
                <button name="submit" type="submit" class="btn btn-brand">Contact me </button>
              </div>
          </div>
      </form>

    </div>

  </div>





 </section>
<!-- end of contact section -->
<!-- footer section -->
<footer class="py-5 px-lg-5">
  <div class="container">
    <div class="row gy-4 justify-content-between">
      <div class="col-auto">
         <p class="mb-0">Copyright</p>
      </div>
      <div class="col-auto">
         <div class="social-icons">
          <a href="#"><i class="lab la-twitter"></i></a>
          <a href="#"><i class="lab la-instagram"></i></a>
          <a href="#"><i class="lab la-github"></i></a>
          <a href="#"><i class="lab la-facebook"></i></a>
         </div>
     </div>
    </div>
  </div>
</footer>


<!-- end of footer section -->









    


</div>
 







  <!-- end of content wrapper -->













  <script src="./asssets/js/bootstrap.bundle.min.js"></script>
  <script src="./asssets/js/aos.js"></script>
  <script src="./asssets/js/min.js"></script>
</body>

</html>