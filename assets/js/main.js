
function openNav() {
    document.getElementById("myNav").style.width = "100%";
  }
  
  function closeNav() {
    document.getElementById("myNav").style.width = "0%";
  }







const header = document.querySelector('header');

let actualScroll = 0

window.addEventListener('scroll',()=>{
  const top = Math.min(-(window.scrollY - actualScroll + header.clientHeight), 0)

  if (window.scrollY  > actualScroll) {
    actualScroll = window.scrollY
  }

  if (top === 0) {
    actualScroll = window.scrollY + header.clientHeight
  }
  
  header.setAttribute("style", `--_top:${top}px`);
  header.classList.toggle('active',window.scrollY < actualScroll)
  header.classList.toggle('clr',window.scrollY > header.clientHeight * 1.5)


})


const swiper = new Swiper('.swiper-container', {
  loop: true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  // autoplay: {
  //   delay: 5000, // Automatically transitions slides every 5 seconds
  // },
  slidesPerView: 1, // Only show one slide at a time
  spaceBetween: 0, // No spacing between slides
  breakpoints: {
    640: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 1,
    },
    1024: {
      slidesPerView: 1,
    },
  },
});





const tabButtons = document.querySelectorAll('.tab-button');
const tabContents = document.querySelectorAll('.tab-content');

tabButtons.forEach(button => {
  button.addEventListener('click', () => {
    // Remove active class from all buttons
    tabButtons.forEach(btn => btn.classList.remove('active'));
    // Add active class to the clicked button
    button.classList.add('active');

    // Hide all tab contents
    tabContents.forEach(content => content.classList.remove('active'));
    // Show the corresponding tab content
    const tabId = button.getAttribute('data-tab');
    document.getElementById(tabId).classList.add('active');
  });
});