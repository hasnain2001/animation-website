@extends('welcome')

@section('title')
2D Video Animation Services - Create Stunning 2D Animations|
@endsection

@section('main-content')
<style>



  .content h4{
    font-weight: 600;
    color: black;
  }
  .content h5{
    font-weight: 400;
    color: rgba(20, 12, 12, 0.918);
  }
  .cl-img{
    height: 150px;
    width: 200px;
  }
  .btn-custom{
    background-color: red;
    color: white;
  }
  .btn-custom:hover{
    background-color: rgba(168, 8, 8, 0.904);
    color: black;
  }
  h1{
 font-size: 25px;
 font-weight: 400;  
  }
 
  .header-2d {
            background-color: #fe5b36;
            color: white;
            text-align: center;
            padding: 20px;
            font-size: 1.8rem;
            font-weight: bold;
        }

        .section-content {
            margin-top: 30px;
        }

        .request-quote-btn {
            margin-top: 20px;
            display: block;
        }

        .illustration {
            max-width: 100%;
            height: auto;
        }

    

    .slide-text {
      font-size: 24px;
      animation: slideInFromLeft 1.8s ease-out;
    }
</style>

  <!-- Hero Section -->
  <section id="hero" class="hero section dark-background">

    <video class="hero-bg" autoplay loop muted playsinline>
      <source src="{{asset('images/2d-animation/2d-animation.mp4')}}" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    <div class="container">
      <div class="row gy-4 justify-content-between">
        <div class="col-lg-4 order-lg-last hero-img" data-aos="zoom-out" data-aos-delay="100">
   
        </div>
        <div class="col-lg-5">
          <h1 class="animate__animated  animate__backInRight">2D Animation Video Company Capturing Hearts & Driving Sales!</h1>
          <p class="animate__animated  animate__backInUp">Tired of bland, forgettable marketing videos?  AFX Animators’ creative 2D animation services will transform your brand message into a captivating visual experience.</p>

            <a href="{{route('contact')}}" class="btn-get-started btn">Get Started</a>
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


<!-- client Section -->
<section>
<div class="container">
    <div class="row">
        <div class=" col-md-6 ">
            <h1 class="animate__animated  animate__backInRight">Our 2D Animation Video Makers Breathe Life into Your Brand Message!</h1>
            <p class="animate__animated  animate__backInUp">At AFX, we create 2D animations to capture and hold the attention of your audience. Our 2D animators combine realistic elements with emotions to evoke laughter, singing, or the intended message in your audience. Our main objective is to create an animated video that reflects your specific desires. 
                We are the go-to 2D animation service providers throughout the USA, handling everything from characters to creatures, props to VFX, and music background. Our clients consider us their top 2D animation creators because of the high level of detailing and quality of our video animations.
                </p>
                <a href="{{route('contact')}}" class="btn-custom btn">Get Started</a>
        </div>
        <div class="col-md-6">
     <img src="{{asset('images/2d-animation/img-1.png')}}" alt="" srcset="" class="" height="300" >
        </div>
    </div>
  
</div>
</section>

  <!-- /client Section -->
<!-- Gallery Section -->
<section id="gallery" class="gallery section">

    <!-- Section Title -->
    <div class="container " data-aos="fade-up">
        <div class=" text-center">
            <h2 class=" card-title animate__animated animate__zoomIn">See What's Possible With Our Portfolio of 2D Masterpieces!</h2>
            <p class=" animate__animated animate__zoomIn">Check out our AFX Animators’ portfolio of professional 2D animation services. From appealing advertisements to engaging Animated Explainer Videos, discover how our animations have helped brands like yours stand out and make a lasting impact.</p>
        </div>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="{{ asset('video/v-1.mp4') }}" class="glightbox video-container" data-gallery="images-gallery">
                        <video id="video-player" class="img-fluid" poster="{{ asset('images/poster.png') }}">
                            <source src="{{ asset('video/v-1.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                     
                    </a>
                    
                    
                </div>
            </div>
            <!-- End Gallery Item -->

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="{{ asset('assets/img/gallery/gallery-2.jpg') }}" class="glightbox" data-gallery="images-gallery">
                        <img src="{{ asset('assets/img/gallery/gallery-2.jpg') }}" alt="" class="img-fluid">
                    </a>
                </div>
            </div><!-- End Gallery Item -->

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="{{ asset('assets/img/gallery/gallery-3.jpg') }}" class="glightbox" data-gallery="images-gallery">
                        <img src="{{ asset('assets/img/gallery/gallery-3.jpg') }}" alt="" class="img-fluid">
                    </a>
                </div>
            </div><!-- End Gallery Item -->

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="{{ asset('assets/img/gallery/gallery-4.jpg') }}" class="glightbox" data-gallery="images-gallery">
                        <img src="{{ asset('assets/img/gallery/gallery-4.jpg') }}" alt="" class="img-fluid">
                    </a>
                </div>
            </div><!-- End Gallery Item -->

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="{{ asset('assets/img/gallery/gallery-5.jpg') }}" class="glightbox" data-gallery="images-gallery">
                        <img src="{{ asset('assets/img/gallery/gallery-5.jpg') }}" alt="" class="img-fluid">
                    </a>
                </div>
            </div><!-- End Gallery Item -->

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="{{ asset('assets/img/gallery/gallery-6.jpg') }}" class="glightbox" data-gallery="images-gallery">
                        <img src="{{ asset('assets/img/gallery/gallery-6.jpg') }}" alt="" class="img-fluid">
                    </a>
                </div>
            </div><!-- End Gallery Item -->

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="{{ asset('assets/img/gallery/gallery-7.jpg') }}" class="glightbox" data-gallery="images-gallery">
                        <img src="{{ asset('assets/img/gallery/gallery-7.jpg') }}" alt="" class="img-fluid">
                    </a>
                </div>
            </div><!-- End Gallery Item -->

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="{{ asset('assets/img/gallery/gallery-8.jpg') }}" class="glightbox" data-gallery="images-gallery">
                        <img src="{{ asset('assets/img/gallery/gallery-8.jpg') }}" alt="" class="img-fluid">
                    </a>
                </div>
            </div><!-- End Gallery Item -->

        </div>

    </div>

</section>
<section style="background-color: #ffc6ba; padding: 20px;">
    <div class="container" style="display: flex; align-items: center; justify-content: space-between;">
        <div>
            <span style="font-size: 1.5em; font-weight: bold; " class="animate__animated animate__slideInLeft">Ready to Wow Your Audience?</span>
            <p>Contact us now to experience our professional 2D animation services!</p>
        </div>
        <a href="{{route('contact')}}" class="btn btn-custom" style="margin-left: 20px;">Message Us</a>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class=" col-md-6 ">
                <img src="{{asset('images/2d-animation/gif-1.gif')}}" alt="" srcset="" height="300" width="100%"  >
             
            </div>
            <div class="col-md-6">
                <h1 class=" animate__animated animate__backInUp">Why Do You Need An Outstanding 2D Animation Designer?</h1>
                <p class="animate__animated animate__backInUp">2D animation production services remain a classic foundation in the field of visual storytelling, providing endless opportunities for artistic innovation and storytelling complexity. Its lasting appeal and flexibility make it a top choice for infusing characters, settings, and ideas with energy and involvement. Whether you aim to entertain, educate, or inspire, 2D character animation service is a strong tool for getting your message across effectively and meaningfully.               
                    </p>
                    <p class="animate__animated animate__backInUp">    The fluid movements and lively visuals can enchant viewers of any age, overcoming linguistic and cultural differences to create a lasting impact on the audience’s imagination. 2D animation marketing video services offer limitless opportunities to create stories that leave a lasting impact on your audience, resonating in their hearts and minds for years to come.</p>
                    <a href="{{route('contact')}}" class="btn btn-custom">Get Started</a>
            </div>
        </div>
      
    </div>
    </section>
    <section style="background-color: #920063;">
        <div class="container text-white">
            <div class="row">
              
                <div class="col-md-6">
                    <h1>Let’s See Why AFX Animators Lead the Way!?</h1>
                    <span>Our team of 2D animators will work together with you every step of the way, providing the following benefits.</span>
    <ul>
    <li><strong>Business Growth:</strong> Our skilled team collaborates closely, understanding your goals to craft a strategic plan aligning with your vision. From boosting online presence to optimizing marketing, we offer expert guidance throughout.</li>
    <li><strong>Deeper Engagement:</strong> We prioritize client satisfaction and growth. With our expertise, create unique experiences that distinguish you in the market. Together, we’ll forge connections to propel your brand forward.</li>
    <li><strong>Boost Brand Awareness:</strong> We specialize in crafting custom 2D animated videos to boost your brand’s visibility and recognition, leaving a lasting impression on your audience’s hearts and minds.</li>
    
    </ul>
                        <a href="{{route('contact')}}" class="btn btn-custom">Get Started</a>
                </div>
                <div class=" col-md-6 ">
                    <img src="{{asset('images/2d-animation/gif-2.gif')}}" alt="" srcset="" class="" height="400" width="100%" >
                 
                </div>
            </div>
          
        </div>
        </section>
        <section>
            <div class="container">
                <!-- Header Section -->
                <div class="header-2d">
                    Our Comprehensive 2D Animation Services!
                </div>
        
                <!-- Main Content Section -->
                <div class="row section-content">
                    <!-- Text Content -->
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <h4>Motion Graphics</h4>
                                <p>
                                    At AFX, we create motion graphics that effectively communicate your idea while also having a striking visual appeal. Discover the impact of our motion graphics services as they flawlessly communicate your message and enhance your content.
                                </p>
                            </div>
                            <div class="col-md-6 mb-4">
                                <h4>Character Animation</h4>
                                <p>
                                    With our professional 2D animation design services, we design animated figures that dynamically and captivatingly portray actions and emotions. Our animators take on the role of operators, giving the characters they design life and a genuine, sympathetic sense.
                                </p>
                            </div>
                            <div class="col-md-6 mb-4">
                                <h4>Whiteboard Animation</h4>
                                <p>
                                    We at AFX recognize the power of images in communicating a story. Our hand-drawn graphics and animations are utilized in our Whiteboard Animation Services to help explain difficult ideas and increase the reliability of your material.
                                </p>
                            </div>
                            <div class="col-md-6 mb-4">
                                <h4>Typography Animation</h4>
                                <p>
                                    Your multimedia projects will have an artistic touch with our typographic animation services. We animate words, phrases, and letters using various modern methods, giving your material a dynamic and rhythmic appearance.
                                </p>
                            </div>
                        </div>
                        <a href="#" class="btn btn-dark request-quote-btn">Request A Quote</a>
                    </div>
        
                    <!-- Illustration -->
                    <div class="col-md-4 text-center">
                        <img src="{{asset('images/2d-animation/gif-3.gif')}}" alt="Illustration" class="illustration">
                    </div>
                </div>
            </div>
        
        </section>

@endsection