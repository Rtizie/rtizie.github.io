var t=setInterval(scrollFunction,1000);

function scrollFunction() {
    if (window.innerWidth > 1024) {
        if(document.body.scrollTop != 0){
            topFunction();
        }
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}