// Get the navbar
let nav = document.getElementById("main-nav");
let header = document.getElementById("wrapper-navbar");

// scroll listener
window.addEventListener('scroll', function(e) {
  e.preventDefault();

  if(window.scrollY >= 70 && window.innerWidth > 769) {

    // remove class from header
    header.classList.remove('top');

    if(window.scrollY < 140)  {
      header.style.transform = 'translateY(-70px)';
    }

    setTimeout( ()=> {
      header.style.transform = 'translateY(0px)';
      scrolled = true;
    }, 200);


  } else {
    header.classList.add('top');
  }

});