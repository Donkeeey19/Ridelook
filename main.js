
const navMenu = document.getElementById('nav-menu'),
      navToggle = document.getElementById('nav-toggle'),
      navClose = document.getElementById('nav-close')

/*===== MENU SHOW =====*/
/* Validate if constant exists */
if(navToggle){
    navToggle.addEventListener('click', () =>{
        navMenu.classList.add('show-menu')
    })
}

/*===== MENU HIDDEN =====*/
/* Validate if constant exists */
if(navClose){
    navClose.addEventListener('click', () =>{
        navMenu.classList.remove('show-menu')
    })
}

const navLink = document.querySelectorAll('.nav__link')

const linkAction = () =>{
    const navMenu = document.getElementById('nav-menu')
    // When we click on each nav__link, we remove the show-menu class
    navMenu.classList.remove('show-menu')
}
navLink.forEach(n => n.addEventListener('click', linkAction))


const scrollHeader = () => {
    const header = document.getElementById('header');
    
    // Use window.scrollY to get the scroll position
    if (window.scrollY >= 50) {
        header.classList.add('scroll-header');
    } else {
        header.classList.remove('scroll-header');
    }
};

window.addEventListener('scroll', scrollHeader);

let swiperPopular = new Swiper(".popular__container", {
        loop: true,
        spaceBetween: 24,
        slidesPerView: 'auto',
        grabCursor: true,
        pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
    },
    breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 40,
        },
        1024: {
          spaceBetween: 48,
        },
      },
  });

  let mixerFeatured = mixitup('.featured__content', {
    selectors: {
        target: '.featured__card'
    },
    animation: {
        duration: 300
    }
});

const linkFeatured = document.querySelectorAll('.featured__item');

function activeFeatured(clickedItem) {
    linkFeatured.forEach(item => item.classList.remove('active-featured'));
    clickedItem.classList.add('active-featured');
}

linkFeatured.forEach(item => {
    item.addEventListener('click', function() {
        activeFeatured(this);
    });
});


function scrollUp (){
	const scrollUp = document.getElementById('scroll-up')
    // When the scroll is higher than 350 viewport height, add the show-scroll class to the a tag with the scrollup class
	this.scrollY >= 350 ? scrollUp.classList.add('show-scroll')
						: scrollUp.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollUp)

const sections = document.querySelectorAll('section[id]')
    
function scrollActive(){
  	const scrollDown = window.scrollY

	sections.forEach(current =>{
		const sectionHeight = current.offsetHeight,
			  sectionTop = current.offsetTop - 58,
			  sectionId = current.getAttribute('id'),
			  sectionsClass = document.querySelector('.nav__menu a[href*=' + sectionId + ']')

		if(scrollDown > sectionTop && scrollDown <= sectionTop + sectionHeight){
			sectionsClass.classList.add('active-link')
		}else{
			sectionsClass.classList.remove('active-link')
		}                                                    
	})
}
window.addEventListener('scroll', scrollActive)

const sr = ScrollReveal({
    origin: 'top',
    distance: '60px',
    duration: 2500,
    delay: 400,
})

sr.reveal('.home__title, .popular__container, .features__img, .featured__filters')
sr.reveal('.home__subtitle', {delay: 500})
sr.reveal('.home__elec', {delay: 600})
sr.reveal('.home__img', {delay: 800})
sr.reveal('.home__car-data', {delay: 900, interval: 100, origin: 'bottom'})
sr.reveal('.home__button', {delay: 1000, origin: 'bottom'})
sr.reveal('.about__group, .offer__data', {origin: 'left'})
sr.reveal('.about__data, .offer__img', {origin: 'right'})
sr.reveal('.features__map', {delay: 600, origin: 'bottom'})
sr.reveal('.features__card', {interval: 300})
sr.reveal('.featured__card, .logos__content, .footer__content', {interval: 100})

 document.getElementById('btn').addEventListener('click', function() {
            // Set the URL of the new page
            window.location.href = 'popular1.html'; // Replace with the desired page URL
 });

 document.addEventListener('DOMContentLoaded', function () {
    // Your code here
 let previewContainer = document.querySelector('.products-preview');
 let previewBox = previewContainer.querySelectorAll('.preview');
 
 document.querySelectorAll('.products-container .product').forEach(product => {
     product.addEventListener('click', () => {
         previewContainer.style.display = 'flex';
         let name = product.getAttribute('data-name');
         previewBox.forEach(preview => {
             let target = preview.getAttribute('data-target');
             if (name == target) {
                 preview.classList.add('active');
             } else {
                 preview.classList.remove('active'); // Remove 'active' class from other previews
             }
         });
     });
 });
 
 previewBox.forEach(close => {
     close.querySelector('.fa-times').addEventListener('click', () => {
         previewContainer.style.display = 'none';
     });
 });
 
});


