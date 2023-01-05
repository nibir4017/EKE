
const mobile_icons_container = document.querySelector(".mobile-icons-container");
const nav_header = document.querySelector("header");
const nav_ul = document.querySelector(".nav_ul")
const toggleNavbar = () => {
   
   nav_header.classList.toggle("active");
   
};

mobile_icons_container.addEventListener("click", () => toggleNavbar());

      var responsiveSlider = function() {
  
  var slider = document.getElementById("slider");
  var sliderWidth = slider.offsetWidth;
  var slideList = document.getElementById("slideWrap");
  var count = 1;
  var items = slideList.querySelectorAll("li").length;
  var prev = document.getElementById("prev");
  var next = document.getElementById("next");
  
  window.addEventListener('resize', function() {
    sliderWidth = slider.offsetWidth;
  });
  
  var prevSlide = function() {
    if(count > 1) {
      count = count - 2;
      slideList.style.left = "-" + count * sliderWidth + "px";
      count++;
    }
    else if(count = 1) {
      count = items - 1;
      slideList.style.left = "-" + count * sliderWidth + "px";
      count++;
    }
  };
  
  var nextSlide = function() {
    if(count < items) {
      slideList.style.left = "-" + count * sliderWidth + "px";
      count++;
    }
    else if(count = items) {
      slideList.style.left = "0px";
      count = 1;
    }
  };
  
  next.addEventListener("click", function() {
    nextSlide();
  });
  
  prev.addEventListener("click", function() {
    prevSlide();
  });
  
  setInterval(function() {
    nextSlide()
  }, 1000);
  
  };
  
  window.onload = function() {
  responsiveSlider();  
  }
  
/* video playable on visibility  */
let options = {
  root:null,
  rootMargin:'0px',
  threshold:1.0
};

let callback = (entries, observer)=>{
  entries.forEach(entry => {
    if(entry.target.id=='myVideo')
    {
      if(entry.isIntersecting){
        entry.target.play();
      }
      else{
        entry.target.pause();
      }
    }
  });
}

let observer = new IntersectionObserver(callback, options);
observer.observe(document.querySelector('#myVideo'));


/* Number counting animation */
let valueDisplays = document.querySelectorAll(".num");
let interval = 4000;

valueDisplays.forEach((valueDisplay) => {
  let startValue = 0;
  let endValue = parseInt(valueDisplay.getAttribute("data-val"));
  let duration = Math.floor(interval / endValue);
  let counter = setInterval(function () {
    startValue += 1;
    valueDisplay.textContent = startValue;
    if (startValue == endValue) {
      clearInterval(counter);
    }
  }, duration);
});
  //HEro SLideshow
 
  
    



// var myIndex = 0;
// carousel();

// function carousel() {
//   var i;
//   var x = document.getElementsByClassName("mySlides");
//   for (i = 0; i < x.length; i++) {
//     x[i].style.display = "none";  
//   }
//   myIndex++;
//   if (myIndex > x.length) {myIndex = 1}    
//   x[myIndex-1].style.display = "block";  
//   setTimeout(carousel, 2500);    
// }


