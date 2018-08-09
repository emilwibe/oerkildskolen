// GLOBAL
(function(){
  "use strict";
  var navPrimary = document.getElementById("nav-primary"),
      navPrimaryLinks = navPrimary.querySelectorAll("a"),
      navPrimaryLinksLength = navPrimaryLinks.length,
      logoImage = document.getElementsByClassName("logo")[0],
      isIE11 = !!window.MSInputMethodContext && !!document.documentMode
  ;
  if(isIE11){
    logoImage.setAttribute("src", logoImage.dataset.pnglogo);
  }
  document.addEventListener("click", function(e){
    if(e.target.tagName !== "A"){
      navPrimaryLinks.forEach(function(element){
        element.classList.remove("is-open");
      });
      navPrimary.classList.remove("is-open");
      document.body.classList.remove("no-scroll");
    }
  }, false);

  /* REMOVE WIDTH AND HEIGHT ATTRIBUTES FROM IMAGES AND ADDING ->SCROLL REVEAL<- */
    var sr = ScrollReveal(),
        images = document.getElementsByTagName("IMG"),
        imagesLength = images.length
    ;

    if(imagesLength){
      for(var i = 0; i < imagesLength; i++){
        images[i].removeAttribute("width");
        images[i].removeAttribute("height");
        images[i].style.display = "block";
      }
      sr.reveal(images);
    }

/* DATA ATTRIBUTES ON NUMBERS PAGE */
var numbers = document.getElementsByClassName("numbers");

if(numbers.length){
  var students = document.getElementsByClassName("data-students")[0],
      teachers = document.getElementsByClassName("data-teachers")[0],
      studentsCounter = 0,
      studentsTarget = students.dataset.students,
      teachersCounter = 0,
      teachersTarget = teachers.dataset.teachers,
      countUpTimer = 1000
  ;
  students.innerHTML = studentsCounter;
  teachers.innerHTML = teachersCounter;
  students.style.display = "block";
  teachers.style.display = "block";

  var counterMechanics = setInterval(function(){
    if(studentsCounter < studentsTarget){
      studentsCounter += 1;
      students.innerHTML = studentsCounter;
    }
    if(teachersCounter < teachersTarget){
      teachersCounter += 1;
      teachers.innerHTML = teachersCounter;
    }
    if(studentsCounter == studentsTarget && teachersCounter == teachersTarget){
      clearInterval(counterMechanics);
    }
  }, 5);
}
var grades = document.getElementsByClassName("grades");
if(grades.length){
  grades[0].addEventListener("click", function(e){
    if(e.target.tagName == "H3"){
      e.target.parentNode.classList.toggle("is-closed");
    }
  }, false);
}

/* NAVIGATION */
  var navTrigger = document.getElementById("nav-trigger"),
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
    document.body.classList.toggle("no-scroll");
  }, false);

}());
