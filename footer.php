  <?php wp_footer(); ?>

  <script>
  // GLOBAL
  (function(){
    "use strict";
    var navPrimary = document.getElementById("nav-primary"),
        navPrimaryLinks = navPrimary.querySelectorAll("a"),
        navPrimaryLinksLength = navPrimaryLinks.length
    ;
    document.addEventListener("click", function(e){
      if(e.target.tagName !== "A"){
        navPrimaryLinks.forEach(function(element){
          element.classList.remove("is-open");
        });
        navPrimary.classList.remove("is-open");
        document.body.classList.remove("no-scroll");
      }
    }, false);

  /* DATA ATTRIBUTES ON NUMBERS PAGE */
  var numbers = document.getElementsByClassName("numbers"),
      students = document.getElementsByClassName("data-students")[0],
      teachers = document.getElementsByClassName("data-teachers")[0],
      studentsCounter = 0,
      teachersCounter = 0,
      countUpTimer = 1000
  ;
  console.log(students.dataset);
  students.innerHTML = studentsCounter;
  teachers.innerHTML = teachersCounter;
  students.style.display = "block";
  teachers.style.display = "block";

  /* REMOVE WIDTH AND HEIGHT ATTRIBUTES FROM IMAGES */
    var images = document.getElementsByTagName("IMG"),
        imagesLength = images.length
    ;

    if(imagesLength){
      for(i = 0; i < imagesLength; i++){
        images[i].removeAttribute("width");
        images[i].removeAttribute("height");
      }
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

  </script>
</body>
</html>
