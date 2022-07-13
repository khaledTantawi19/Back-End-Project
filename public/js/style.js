// nav links

var links = document.getElementById("links");
var link = links.getElementsByClassName("link");
for (var i = 0; i < link.length; i++) {
  link[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}

// Feature links 
var links = document.getElementById("feature-Links");
var featurelink = links.getElementsByClassName("feature-link");
for (var i = 0; i < featurelink.length; i++) {
  featurelink[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("re-active");
  current[0].className = current[0].className.replace(" re-active", "");
  this.className += " re-active";
  });
}