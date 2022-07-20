window.onscroll = function () {
  const nav = document.querySelector("nav");
  const fixnav = nav.offsetTop;

  if (window.pageYOffset > fixnav) {
    nav.classList.add("navbar-fixed");

  } else {
    nav.classList.remove("navbar-fixed");
  }
};



$('.dark-button').click(function () { 
  document.body.classList.toggle('darkmode')
  $('.first-section').toggleClass('herodark')
  $('.navbar').toggleClass('navdark')
  $('*h1').toggleClass("headingonedark");
  $('h2').toggleClass("headingonedark");
  $('.first-span').toggleClass("headingonedark");
  $('.p1').toggleClass("whiteparagraph");
  $('*.card-text').toggleClass("whiteparagraph");
  $('*.btn-custom').toggleClass("btndark");
  $('*.card').toggleClass("cardintrodark");
  $('*h4').toggleClass("headingonedark");
  $('*.section-1').toggleClass("herodark");
  $('*.inner-card ').toggleClass("innercarddark");
  $('*.section-1 p').toggleClass("whiteparagraph");
  $('*h5').toggleClass("whiteparagraph");
  $('*h6').toggleClass("whiteparagraph");
  $('.section-1 form *label').toggleClass("whiteparagraph");
  $('footer').toggleClass("navdark");
  $('*.nav-link').toggleClass("headingonedark");
  $('.navbar-brand').toggleClass("headingonedark");
  $('*.svg-2').toggleClass('svg-2-dark');
  $('*.svg-1').toggleClass('svg-1-dark');
  $('*.text-muted').removeClass('text-muted')
  
  
});