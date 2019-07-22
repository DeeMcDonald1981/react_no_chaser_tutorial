let navBtn = document.querySelector('.navbtn');
let mobileNav = document.querySelector('.navright');



navBtn.addEventListener('click', function(){

  mobileNav.classList.toggle('shownav');
})