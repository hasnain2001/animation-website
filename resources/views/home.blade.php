@extends('welcome')
@section('title', 'Animators | Creative Video Animation Services USA')
@section('description','AFX presents in-depth project documentation! Our project documentation offers a behind-the-scenes look at our innovative and captivating creations!')
@section('keywords', 'Animators | Creative Video Animation Services USA')
@section('robots','index, follow')

@section('main-content')

<style>
.cta-section {
  background-color: #ffeae8;
  border-top: 5px solid #ff5733;
}

.cta-heading {
  font-size: 2rem;
  font-weight: bold;
  margin-bottom: 1rem;
}

.cta-text {
  font-size: 1.25rem;
  margin-bottom: 1.5rem;
}

.cta-button {
  background: linear-gradient(to right, #ff5733, #ff794d);
  color: #fff;
  border: none;
  border-radius: 30px;
  padding: 10px 25px;
  font-size: 1rem;
  transition: all 0.3s ease;
}

.cta-button:hover {
  background: linear-gradient(to right, #ff794d, #ff5733);
  box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
  transform: scale(1.05);
}
#gallery {
    position: relative; /* Ensures content layers properly */
    padding-top: 70px;
    padding-bottom: 100px; /* Makes space for the visible background image */
    background-image: url('{{ asset('images/2d-1.jpg') }}');
    background-size: cover; /* Ensures the image covers the entire section */
    background-position: center;
    background-repeat: no-repeat;
    color:white;
}

#gallery::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black overlay */
    z-index: 1; /* Sends the overlay behind the content but above the image */
}

#gallery * {
    position: relative;
    z-index: 2; /* Ensures the content stays above the overlay */
}

.detail-section-end {
   background-image: url('{{asset('images/2d-1.jpg')}}');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  padding: 50px 0;
}
.detail-section-end::before{
  background: rgba(17, 17, 17, 0.541);
}

.detail-section-end h3 {
  font-size: 2rem;
  line-height: 1.5;
}

.btn-custom {
  color: white;
  background-color: #007bff;
  border: none;
  padding: 10px 20px;
  text-transform: uppercase;
  font-weight: bold;
}

.btn-custom:hover {
  background-color: #0056b3;
  color: white;
}
.hero-contact {
  background-image: url('{{ asset('images/home.png') }}');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  width: 100%;
  height: 480px;
  padding: 120px 0;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  overflow: hidden;
}


  /* .hero-contact::before {
  content: '';
  position: absolute;
  top: -50px;
  left: 0;
  width: 200%;
  height: 120px;
  background: #6ca5d1; 
  z-index: 1;
  clip-path: polygon(0% 50%, 25% 75%, 50% 50%, 75% 100%, 100% 50%, 100% 100%, 0% 100%);
  animation: wave-loop 6s linear infinite;
  } */

  .hero-contact::after {
  content: '';
  position: absolute;
  top: 380px;
  left: 0;
  width: 200%;
  height: 100px;
  background: #083241;
  z-index: 0;
  clip-path: polygon(0% 75%, 25% 50%, 50% 75%, 75% 50%, 100% 75%, 100% 100%, 0% 100%);
  animation: wave-loop 8s linear infinite reverse;
  }


/* Animation for looping waves */
@keyframes wave-loop {
  from {
    transform: translateX(0);
  }
  to {
    transform: translateX(-50%);
  }
}




.wave-container {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 150px;
  overflow: hidden;
}

.waves {
  position: absolute;
  top: -5px;
  left: 0;
  width: 100%;
  height: auto;
  z-index: 1;
  animation: wave-animation 6s infinite linear;
}



.btn-custom {
  background-color: #ff5722;
  color: #fff;
  padding: 10px 20px;
  border-radius: 5px;
  text-decoration: none;
  font-weight: bold;
  transition: background-color 0.3s ease;
}

.btn-custom:hover {
  background-color: #ff784e;
  color: #fff;
}

  .gif-1{
  height: 200px;
  width: 100%;
}
.img-services{
  height:150px ;
  max-height: 150px;
}
@media screen  (max-width: 600px) {
  .gif-1{
  height: 100px;
  width: 100%;
  padding-right:100px;
  
}
.img-services{
  height:auto ;
 width: 100%;
}
}

</style>
<main class="main">
  

  <!-- Hero Section -->
  <section id="hero" class="hero section dark-background">

    <video class="hero-bg" autoplay loop muted playsinline loading="lazy">
      <source src="{{asset('video/v-1.mp4')}}" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    <div class="container">
      <div class="row gy-4 justify-content-between">
        <div class="col-lg-4 order-lg-last hero-img" data-aos="zoom-out" data-aos-delay="100">
          {{-- <img src="{{asset("assets/img/hero-img.png")}}" class="img-fluid animated" alt="" loading="lazy"> --}}
        </div>

        <div class="col-lg-6  d-flex flex-column justify-content-center" data-aos="fade-in">
          <h1 class="animate__animated animate__backInRight">Tired of Snooze Fests?
              AFX Video Animation Company Will
              
             <span>  Blow Your Mind!</span></h1>
          <p>We breathe life into your vision through vibrant animations tailored to your brand needs.</p>
          <div class="d-flex">
            <a href="{{route('contact')}}" class="btn btn-get-started">Get Started</a>
            {{-- <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> --}}
          </div>
        </div>

      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3"></use>
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0"></use>
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9"></use>
      </g>
    </svg>

  </section>
  <!-- /Hero Section -->

  <!-- About Section -->
  <section id="about" class="about section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row align-items-xl-center gy-5">

        <div class="content text-center">
          <h1 class="animate__animated animate__backInRight">Our Animation Video Makers Taking a Leap into Animation Magic</h1>
                  <p>Need a video? AFX animators are your go-to! Our animation video creators craft captivating videos that speak directly to your audience. We have skillfully handled countless corporate video projects from start-ups to well-known international businesses. Not sure yet? Let our videos do the talking! To put it simply, we always raise the bar to provide greatness..</p>
          <a href="{{route('contact')}}" class="cta-button btn"><span>Get In Touch </span><i class="bi bi-arrow-right"></i></a>
        </div>

        

          </div>
        </div>

      </div>
    </div>

  </section><!-- /About Section -->
<!-- Features Section -->
  <section id="features" class="features section py-5" style="background-color: #ce412f;" >
    <div class="container">
      <div class="row text-white mb-5">
        <div class="col-lg-6">
          <h2 class="text-white">Video Animation Agency Offering Services</h2>
          <p class="">
            We create epic animations beyond traditional whiteboard animation and bring engagement to life with mind-blowing 3D animation videos. Let’s transform your idea into an exceptional video!
          </p>
          <a href="#" class="btn btn-dark">Consult Now</a>
        </div>
        <div class="col-lg-3">
          <div class="card text-center border-0 shadow">
            <a href="{{{route('animation-2d')}}}" class=" text-decoration-none text-dark">
            <img src="{{asset('images/2d-animation.png')}}" class="card-img-top mx-auto  p-3 h-50 img-services" alt="Motion Graphic" loading="lazy">
            <div class="card-body">
              <h5 class="d-animate">2D Animation</h5>
            </div>
          </a>
          </div>
       
        </div>
   <div class="col-lg-3">
    <div class="card text-center border-0 shadow">
      <a href="{{{route('animation-3d')}}}" class=" text-decoration-none text-dark">
      <img src="{{asset('images/3d animation-01.png')}}" class="card-img-top img-services mx-auto p-3" alt="Motion Graphic" loading="lazy" >
      <div class="card-body">

        <h5 class="text-dark text-capitalize">3D Animation</h5>
      </div>
     </a>
    </div>
   </div>
      </div>
  
      <div class="row gy-4">
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="card text-center border-0 shadow">
          <a href="{{route('motion-graphics')}}"  class=" text-decoration-none text-dark">
            <img src="{{asset('images/motion-graphir.png')}}" class="card-img-top mx-auto p-3 img-services " alt="Motion Graphic" loading="lazy">
        
            <div class="card-body">
              <h5 class="text-capitalize">Motion Graphic</h5>
            </div>
          </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="card text-center border-0 shadow">
            <a href="{{route('explain-video')}}"  class=" text-decoration-none text-dark">
            <img src="{{asset('images/explainer.png')}}" class="card-img-top mx-auto p-3 img-services " alt="Explainer Videos" loading="lazy"> 
            <div class="card-body">
              <h5 class="text-capitalize">Explainer Videos</h5>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="card text-center border-0 shadow">
            <a href="{{route('promotional_video')}}" class=" text-decoration-none text-dark">
            <img src="{{asset('images/promotional-videos.png')}}" class="card-img-top mx-auto p-3 img-services " alt="Promotional Videos"loading="lazy">
            <div class="card-body">
              <h5 class="text-capitalize">Promotional Videos</h5>
            </div>
          </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="card text-center border-0 shadow">
            <a href="{{route('video-editing')}}" class=" text-decoration-none text-dark">
            <img src="{{asset('images/video editing.png')}}" class="card-img-top mx-auto p-3 img-services " alt="Video Editing" loading="lazy">
            <div class="card-body">
              <h5 class="text-capitalize">Video Editing</h5>
            </div>
          </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="card text-center border-0 shadow">
            <a href="{{route('logo_animation')}}" class=" text-decoration-none text-dark">
            <img src="{{asset('images/logo animation.png')}}" class="card-img-top mx-auto p-3 img-services " alt="Video Editing" loading="lazy">
            <div class="card-body">
              <h5 class="text-capitalize">Logo Animation</h5>
            </div>
          </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="card text-center border-0 shadow">
            <a href="{{route('stop_motion')}}" class=" text-decoration-none text-dark">
            <img src="{{asset('images/stop motion.png')}}" class="card-img-top mx-auto p-3 img-services " alt="Video Editing" loading="lazy">
            <div class="card-body">
              <h5 class="text-capitalize">stop motion animation </h5>
            </div>
          </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="card text-center border-0 shadow">
            <a href="{{route('rotoscoping')}}" class=" text-decoration-none text-dark">
            <img src="{{asset('images/rotoscoping.png')}}" class="card-img-top mx-auto p-3  img-services " alt="Video Editing" loading="lazy">
            <div class="card-body">
              <h5 class="text-capitalize">rotoscoping services </h5>
            </div>
          </a>
          </div>
        </div>  <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="card text-center border-0 shadow">
            <a href="{{route('storyboard')}}" class=" text-decoration-none text-dark">
            <img src="{{asset('images/storyboard animation.png')}}" class="card-img-top mx-auto p-3  img-services " alt="Video Editing" loading="lazy">
            <div class="card-body">
              <h5 class="text-capitalize">story board animation</h5>
            </div>
          </a>
          </div>
        </div>
     
      </div>
    </div>
  </section>
  <!-- End Features section -->
  <!-- Start Section -->
<section class="cta-section py-5">
  <div class="container">
    <h3 class="cta-heading text-danger">Stop Blending In!</h3>
    <p class="cta-text">
      Click for Show-Stopping Animation Solutions!
    </p>
    <div class="d-flex justify-content-end">
      <a href="" type="button" class="cta-button btn btn-dark">Act Now!</a>
    </div>
  </div>
</section>
<!-- End Section -->
 <!-- Gallery Section -->
<!-- Gallery Section -->
<section id="gallery" class="gallery section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">

      <div class=" text-center  animate__animated  animate__backInRight">
        <h2 class=" ">Our Jaw-Dropping Animation Awaits</h2>
        <span class=" ">Check Out Our Portfolio</span>
      </div>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row g-0">

          <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                  <a href="{{ asset('assets/img/gallery/gallery-1.jpg') }}" class="glightbox" data-gallery="images-gallery">
                      <img src="{{ asset('assets/img/gallery/gallery-1.jpg') }}" alt="" class="img-fluid" loading="lazy">
                  </a>
              </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                  <a href="{{ asset('assets/img/gallery/gallery-2.jpg') }}" class="glightbox" data-gallery="images-gallery">
                      <img src="{{ asset('assets/img/gallery/gallery-2.jpg') }}" alt="" class="img-fluid" loading="lazy">
                  </a>
              </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                  <a href="{{ asset('assets/img/gallery/gallery-3.jpg') }}" class="glightbox" data-gallery="images-gallery">
                      <img src="{{ asset('assets/img/gallery/gallery-3.jpg') }}" alt="" class="img-fluid" loading="lazy">
                  </a>
              </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                  <a href="{{ asset('assets/img/gallery/gallery-4.jpg') }}" class="glightbox" data-gallery="images-gallery">
                      <img src="{{ asset('assets/img/gallery/gallery-4.jpg') }}" alt="" class="img-fluid" loading="lazy">
                  </a>
              </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                  <a href="{{ asset('assets/img/gallery/gallery-5.jpg') }}" class="glightbox" data-gallery="images-gallery">
                      <img src="{{ asset('assets/img/gallery/gallery-5.jpg') }}" alt="" class="img-fluid" loading="lazy">
                  </a>
              </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                  <a href="{{ asset('assets/img/gallery/gallery-6.jpg') }}" class="glightbox" data-gallery="images-gallery">
                      <img src="{{ asset('assets/img/gallery/gallery-6.jpg') }}" alt="" class="img-fluid" loading="lazy">
                  </a>
              </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                  <a href="{{ asset('assets/img/gallery/gallery-7.jpg') }}" class="glightbox" data-gallery="images-gallery">
                      <img src="{{ asset('assets/img/gallery/gallery-7.jpg') }}" alt="" class="img-fluid" loading="lazy">
                  </a>
              </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                  <a href="{{ asset('assets/img/gallery/gallery-8.jpg') }}" class="glightbox" data-gallery="images-gallery">
                      <img src="{{ asset('assets/img/gallery/gallery-8.jpg') }}" alt="" class="img-fluid" loading="lazy">
                  </a>
              </div>
          </div><!-- End Gallery Item -->

      </div>

  </div>

</section>

<!-- /Gallery Section -->

  <!-- Details Section -->
  <section id="details" >

    {{-- <!-- Section Title -->
    <div class="container text-center section-title " data-aos="fade-up">
      <div class="animate__animated  animate__backInRight">


      <h2 class=" text-dark">Details</h2>
     <span>Check Our Details</span></div>
    </div> --}}
    <!-- End Section Title -->

    <div class="container">

      <div class="row gy-4 align-items-center features-item">
        <div class="col-md-5 " data-aos="zoom-out" data-aos-delay="100">
          <img src="{{asset('images/gif.gif')}}" class=" img-fluid" alt="gif-1" loading="lazy" >

        </div>
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
          <h3 class="animate__animated animate__backInRight">The All-in-One Video Company Bringing Your Story To Life!</h3>
          <p class="fst-italic animate__animated animate__backInUp">
            At AFX Animators, we’re a team of passionate animators for hire dedicated to turning your ideas into animated masterpieces. Since our start, we’ve been crafting top-quality animations for clients across industries to help them achieve their goals.
           <br>       <br>         
         AFX is an award-winning custom animation services provider that specializes in creating exceptional video content to make businesses shine and stir emotions in viewers. Our animated video company handles every step of the production process. 
         <br>      <br> 
            We start by learning about your company to craft a script that tells your story and connects with potential buyers. Then, we bring that story to life with vibrant animations and stunning visuals. AFX is your go-to creative animate video maker company, here to impress, explain, and help you reach your marketing goals with eye-catching videos.</p>
          <a href="{{route('contact')}}" type="button" class="cta-button btn btn-dark">Get in Touch!</a>
        </div>
      </div>
      
      <!-- Features Item -->

      <div class="row gy-4 align-items-center features-item" style="background-image: ">
        <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          <img src="{{asset('images/gif2.gif')}}" class="img-fluid" alt="" loading="lazy">
        </div>
        <div class="col-md-7 order-2 order-md-1" data-aos="fade-up" data-aos-delay="200">
          <h3 class="animate__animated  animate__backInRight">Why AFX Animators Should Be Your Top Pick?</h3>
       <ul class=" animate__animated animate__backInUp">
        <li><strong>We offer custom solutions:</strong>We do not provide one-size-fits-all solutions. We customize our video animation services to meet your specific brand objectives and desired audience</li>
        <li><strong>We have award-winning expertise: </strong>Our team is proud to have a history of making animations that make a strong impression and grab attention (as displayed in our portfolio)</li>
        <li><strong>We offer fast turnaround times:</strong>We acknowledge the significance of meeting deadlines. We efficiently provide animations of high quality in the shortest possible time.</li>
        <li><strong>We have unmatched creativity:</strong> Our animated video agency innovates and effectively breathes life into your vision by exploring the limits of animation.</li>
       </ul>
       <a href="{{route('contact')}}" type="button" class="cta-button btn btn-dark">Get in Touch!</a>
        </div>
      </div><!-- Features Item -->

      <div class="row gy-4 align-items-center features-item">
        <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out">
          <img src="{{asset('images/gif4.gif')}}" class="img-fluid" alt="" loading="lazy">
        </div>
        <div class="col-md-7" data-aos="fade-up">
          <h3 class="animate__animated animate__backInRight">AFX's Explainer Videos Spark Action and Results!</h3>
  <p class=" animate__animated animate__backInUp">At AFX Animators commercial animation studios, our services serve as the vital link between you and your audience. We engage viewers with our carefully produced video content, motivating them to take action and deliver real outcomes for your company.
    <br>
    Our method entails producing explainer movies with targeted messages so that each frame conveys information. Our explainer videos are crafted by hand with an emphasis on quality, so they connect with your audience and increase interaction. Discover the impact of our explainer video creation and take the narrative for your company to new levels.</p>
     <a href="{{route('contact')}}" type="button" class="cta-button btn btn-dark">Get in Touch!</a>
        </div>
      </div>
      <!-- Features Item -->

    

    </div>

  </section>
  <!-- /Details Section -->

  <section id="hero" class="hero-contact">
    <div class="container">
      <div class="row align-items-center gy-4">
        <div class="col-md-6">
          <!-- Add content here if needed -->
        </div>
        <div class="col-md-6 text-end animate__animated animate__backInRight">
          <h3 class="text-white">
            Step into Our Animation Wonderland<br>From Ordinary to Extraordinary!
          </h3>
          <a href="/" class="btn btn-custom">Let’s Start A Conversation!</a>
        </div>
      </div>
    </div>
  </section>
  
  <!--  Blog Section -->
  <section class="blog py-5 bg-light">
    <div class="container">
      <div class="row mb-4">
        <div class="col-12 text-center">
          <h2 class="heading-1 fw-bold">Shopping Hacks & Savings Tips & Tricks</h2>
          <p class="text-muted">Discover the best tips and tricks to save money and shop smarter!</p>
        </div>
      </div>
      <div id="blogCarousel" class="carousel slide" data-bs-ride="false">
        <div class="carousel-inner">
          @foreach ($blogs->chunk(3) as $chunk)
            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
              <div class="row gx-3">
                @foreach ($chunk as $blog)
                  <div class="col-md-4">
                    <div class="card shadow-sm border-0 h-100">
                      <img class="card-img-top img-fluid rounded" src="{{ asset($blog->category_image) }}" alt="Blog Post Image" style="height:200px; object-fit:cover;">
                      <div class="card-body">
                        <h5 class="card-title  fw-bold">{{ $blog->title }}</h5>
                        <p class="card-text text-muted">{{ Str::limit($blog->excerpt, 100) }}</p>
                        @if ($blog->slug)
                          <a href="{{ route('blog-details', ['slug' => Str::slug($blog->slug)]) }}" class="btn btn-dark btn-sm">Read More</a>
                        @else
                          <a href="javascript:;" class="btn btn-secondary btn-sm disabled">No Slug</a>
                        @endif
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          @endforeach
        </div>
        <!-- Carousel controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#blogCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#blogCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </section>
  

 <!-- FAQ Section -->
<section id="faq" class="faq section light-background">
  <div class="container-fluid">
    <div class="row gy-4">
      <!-- FAQ Content -->
      <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">
        <div class="content px-xl-5 animate__animated animate__backInRight" data-aos="fade-up" data-aos-delay="100">
          <h3><span>Frequently Asked </span><strong>Questions</strong></h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit.
          </p>
        </div>

        <!-- FAQ Container -->
        <div class="accordion px-xl-5" id="faqAccordion" data-aos="fade-up" data-aos-delay="200">
          <!-- FAQ Item 1 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <i class="faq-icon bi bi-question-circle"></i>
                Non consectetur a erat nam at lectus urna duis?
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
              </div>
            </div>
          </div>

          <!-- FAQ Item 2 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <i class="faq-icon bi bi-question-circle"></i>
                Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </div>
            </div>
          </div>

          <!-- FAQ Item 3 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <i class="faq-icon bi bi-question-circle"></i>
                Dolor sit amet consectetur adipiscing elit pellentesque?
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis.
              </div>
            </div>
          </div>
        </div>
        <!-- End FAQ Container -->
      </div>

      <!-- FAQ Image -->
      <div class="col-lg-5 order-1 order-lg-2">
        <img src="assets/img/faq.jpg" class="img-fluid" alt="FAQ Image" data-aos="zoom-in" data-aos-delay="100" loading="lazy">
      </div>
    </div>
  </div>
</section>
<!-- /FAQ Section -->


  <!-- Stats Section -->
  <section id="stats" class="stats section light-background">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">

        <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
          <i class="bi bi-emoji-smile"></i>
          <div class="stats-item">
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Happy Clients</p>
            <span>100</span>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
          <i class="bi bi-journal-richtext"></i>
          <div class="stats-item">
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
            <p>Projects</p>
            <span>100</span>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
          <i class="bi bi-headset"></i>
          <div class="stats-item">
            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hours Of Support</p>
            <span>24hr</span>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
          <i class="bi bi-people"></i>
          <div class="stats-item">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p>Employes</p>
            <span>1000</span>
          </div>
        </div><!-- End Stats Item -->

      </div>

    </div>

  </section><!-- /Stats Section -->

</main>
@endsection
