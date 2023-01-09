
<?php
include('header.php')
?>


   <section id="hero_section">
    <div class="relative flex flex-col-reverse py-16 lg:pt-0 lg:flex-col lg:pb-0 ">
   <div class=" inset-y-0 top-0 right-0 z-0 w-full max-w-xl px-4 mx-auto md:px-0 lg:pr-0 lg:mb-0 lg:mx-0 lg:w-6/12 lg:max-w-full lg:absolute xl:px-0 flex justify-center items-center">
    <!-- slideshow hero -->
    <div id="carouselExampleSlidesOnly" class="carousel slide relative " data-bs-ride="carousel" >
      <div class="carousel-inner relative w-full overflow-hidden sm-h-2">
        <div class="carousel-item active relative float-left w-full h-auto transition ease-in-out duration-10000 delay-600">
          <img
            src="images/slide1.png"
            class="block w-full "
            alt="Wild Landscape"
          />
        </div>
        <div class="carousel-item relative float-left w-full h-auto transition ease-in-out duration-10000 delay-600">
          <img
            src="images/slide2.png"
            class="block w-full"
            alt="Camera"
          />
        </div>
        <div class="carousel-item relative float-left w-full h-auto transition ease-in-out duration-4000 delay-600">
          <img
            src="images/slide3.jpg"
            class="block w-full "
            alt="Exotic Fruits"
          />
        </div>
      </div>
    </div>
     
   </div>
   <div class="relative flex flex-col items-start w-full max-w-xl px-4 mx-auto md:px-0 lg:px-8 lg:max-w-screen-xl hero-left">
     <div class="mb-16 lg:my-40 lg:max-w-lg lg:pr-5 hero-text">
       <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
         Brand new
       </p>
       <h2 class="mb-4 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none hero_heading">
         One of the<br class="hidden md:block">
         Best <span class="orange_text">Coaching Center</span> 
         <span class="inline-block text-deep-purple-accent-400">in Bangladesh</span>
       </h2>
       <p class="pr-5 mb-5 text-base text-gray-700 md:text-lg">
         Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae. explicabo.
       </p>
       <div class="flex items-center hero_button_container">
         <a href="/" class="inline-flex items-center justify-center h-12 px-6 lg:mr-6 font-medium no-underline tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none orange_button">
          Courses
         </a>
         <button onclick="window.location.href = 'https://www.facebook.com/ekeducation.org';" type="button" class="flex inline-flex justify-center w-auto h-12 text-white bg-[#3b5998] hover:bg-[#3b5998]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 mr-2 mb-0">
          <svg class="mr-2 -ml-1 w-4 h-4" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M279.1 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.4 0 225.4 0c-73.22 0-121.1 44.38-121.1 124.7v70.62H22.89V288h81.39v224h100.2V288z"></path></svg>
          EKE Facebook
        </button>
     </div>
   </div>
 </div>
 </section>


<section class="offer_section">
<!-- Container for demo purpose -->

<div class="container my-15 px-6 mx-auto">

  <!-- Section: Design Block -->
  <section class="mb-32">
    <style>
      @media (min-width: 992px) {
        #cta-img-nml-50 {
          margin-left: 50px;
        }
      }
    </style>

    <div class="flex flex-wrap">
      <div class="grow-0 shrink-0 basis-auto w-full lg:w-5/12 mb-12 lg:mb-0">
        <div class="flex lg:py-12">
          <img src="https://mdbootstrap.com/img/new/standard/people/058.jpg" class="w-full rounded-lg shadow-lg"
            id="cta-img-nml-50" style="z-index: 10" alt="" />
        </div>
      </div>

      <div class="grow-0 shrink-0 basis-auto w-full lg:w-7/12">
        <div
          class="bg-yellow-500 h-full rounded-lg p-6 lg:pl-12 text-white flex items-center text-center lg:text-left">
          <div class="lg:pl-8">
            <h2 class="text-4xl font-bold mb-6">What does EKE offer?</h2>
            <p class="mb-6 pb-2 lg:pb-0 lg:text-2xl">
              We specialize in both O and A Level education in all subjects for both Cambridge & Edexcel curriculum.
            </p>

          

           
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->

</div>
<!-- Container for demo purpose -->

</section>

<section class="offer_second_section">
  <div>
  <video id="myVideo" controls autoplay muted >
    <source src="video/video.mp4" type="video/mp4">
  </video>
</div>
</section>

<section class="stats_section">
  <div class="stats_container">
    <div class="common_stats_box"><p class="num" data-val="198">000</p><span>Enrolled Students</span></div>
    <div  class="common_stats_box"><p class="num" data-val="200">000</p><span>Teachers</span></div>
    <div  class="common_stats_box"><p >100%</p><span>Satisfaction rate</span></div>
  </div>
</section>

<?php
include('footer.php')
?>
