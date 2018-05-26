// GLOBAL
(function(){
  var navPrimary = document.getElementById("nav-primary"),
      navPrimaryLinks = navPrimary.querySelectorAll("a"),
      navPrimaryLinksLength = navPrimaryLinks.length
  ;
  document.addEventListener("click", function(e){
    if(e.target.tagName !== "A"){
      for(i = 0; i < navPrimaryLinksLength; i += 1){
        navPrimaryLinks[i].classList.remove("is-open");
      }
      navPrimary.classList.remove("is-open");
    }
  }, false);
})();
/* REMOVE WIDTH AND HEIGHT ATTRIBUTES FROM IMAGES */
(function(){
  var images = document.getElementsByTagName("IMG"),
      imagesLength = images.length;
  ;
  if(imagesLength){
    for(i = 0 ; i < imagesLength ; i += 1){
      images[i].removeAttribute("width");
      images[i].removeAttribute("height");
    }
  }
})();

/* NAVIGATION */
(function(){
  var navPrimary = document.getElementById("nav-primary"),
      navTrigger = document.getElementById("nav-trigger"),
      subMenus = document.getElementsByClassName("sub-menu"),
      subMenusLength = subMenus.length
  ;

  navPrimary.addEventListener("click", function(e){
    if(e.target.tagName === "A"){
      e.target.classList.toggle("is-open");
    }
  }, false);

  navTrigger.addEventListener("click", function(){
    navPrimary.classList.toggle("is-open");
  }, false);

})();
