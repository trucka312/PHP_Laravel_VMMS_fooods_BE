function getImg(x){
  if( x.files.length > 0 ){
      var fr = new FileReader();
      var imgSrc = null;
      var parent = x.parentElement;
      fr.onload = function(e){
          imgSrc = e.target.result;
          if( parent.getElementsByTagName("img").length > 0 ){
              parent.removeChild(parent.getElementsByTagName("img")[0]);
          }
          var img = document.createElement("img");
          img.setAttribute("src",imgSrc);
          img.style.width = "80px";
          img.style.verticalAlign = "top";
          parent.appendChild(img);
      }
      fr.readAsDataURL(x.files[0]);
  }
}