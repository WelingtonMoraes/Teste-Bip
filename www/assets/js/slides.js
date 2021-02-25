$(function(){

	var energia = new Swiper('.swiper-container.home__publicacoes--swiper', {
    slidesPerView: 1,
    spaceBetween: 60,
    slidesPerGroup: 1,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    breakpoints: {
      768: {
        slidesPerView: 2,
        spaceBetween: 20,
        slidesPerGroup: 2,
        loop: true,
        loopFillGroupWithBlank: true,
      }
    }
  });

  var tributario = new Swiper('.swiper-container.tributario', {
    autoHeight: true, //enable auto height
    spaceBetween: 100,
    observer: true, 
    observeParents: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });

  var bancario = new Swiper('.swiper-container.bancario', {
    autoHeight: true, //enable auto height
      spaceBetween: 100,
      observer: true, 
      observeParents: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
  });

  var empresarial = new Swiper('.swiper-container.empresarial', {
    autoHeight: true, //enable auto height
      spaceBetween: 100,
      observer: true, 
      observeParents: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
  });

})

// --------------tabs--------------
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" activeLondon", "");
    tablinks[i].className = tablinks[i].className.replace(" activeParis", "");
    tablinks[i].className = tablinks[i].className.replace(" activeTokyo", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active" + cityName;
}

$(document).ready(function(){
  document.getElementById("defaultOpen").click();
});
// --------------------------------

// --------------dropdown--------------
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
// --------------------------------

// --------------Navibar--------------
window.onscroll = function() {FunctionScroll()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function FunctionScroll() {

  //alert('scroll');

  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
// --------------------------------

// --------------menu mobile--------------
function openNav() {
  document.getElementById("mySidepanel").style.width = "100%";
}

function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
}
// --------------------------------    