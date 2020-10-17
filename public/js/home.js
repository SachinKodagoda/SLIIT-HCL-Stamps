var mySwiper = new Swiper(".swiper-container", {
  loop: false,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  allowTouchMove: true,
  centeredSlides: true,
  effect: "fade",
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    renderBullet: function (index, className) {
      return '<span class="' + className + '">' + (index + 1) + "</span>";
    },
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

var initialAccordion = document.getElementById("firstAccordion");
initialAccordion.classList.add("accordionActive");
var initialPanel = initialAccordion.nextElementSibling;
if (initialPanel.style.maxHeight) {
  initialPanel.style.maxHeight = null;
} else {
  initialPanel.style.maxHeight = initialPanel.scrollHeight + "px";
}

function reset() {
  var allAccordions = document.getElementsByClassName("accordion");
  for (let i = 0; i < allAccordions.length; i++) {
    allAccordions[i].classList.remove("accordionActive");
    var panel = allAccordions[i].nextElementSibling;
    panel.style.maxHeight = null;
  }
}
function toggleAccordion() {
  reset();
  this.classList.toggle("accordionActive");
  var panel = this.nextElementSibling;
  if (panel.style.maxHeight) {
    panel.style.maxHeight = null;
  } else {
    panel.style.maxHeight = panel.scrollHeight + "px";
  }
}

var acc = document.getElementsByClassName("accordion");
for (var i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", toggleAccordion);
}

// document.getElementById("starBox").scrollIntoView();
