// REMOVE WIDTH AND HEIGHT ATTRIBUTES FROM IMAGES
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
