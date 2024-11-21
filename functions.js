/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function hamburger() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
  function color(){
  var btns = document.getElementsByClassName("btn");
  for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
      var current = document.getElementsByClassName("active");
      current[0].className = current[0].className.replace(" active", "");
      if (current.length > 0) {
        current[0].className = current[0].className.replace(" active", "");
      }
      this.className += " active";
    });
  }
}
function showDropDown() {
  document.getElementById("dropdown-content").style.display = 'block';
}

function hideDropDown() {
  document.getElementById("dropdown-content").style.display = 'none';
}
function openModal(){
  $("#open").click(function(){
    $("#a").css("display","block");
    $("#b").css("display","block");
                });
$(".cancel").click(function(){
    $("#a").fadeOut();
    $("#b").fadeOut();
});
}
function services(number){
  var p1 = document.getElementById('pic1');
  var headr = document.getElementById('sv-title');
  headr.innerHTML = 'testing';
  if(number == 'one'){
    headr.style.display = 'none';
    headr.innerHTML = 'Individualization';
    headr.style.display = 'block';
  }
  if(number == 'two'){
    headr.style.display = 'none';
    headr.innerHTML = 'Bible- centered';
    headr.style.display = 'block';
  }
  if(number == 'three'){
    headr.style.display = 'none';
    headr.innerHTML = 'Values- oriented';
    headr.style.display = 'block';
  }
  if(number == 'four'){
    headr.style.display = 'none';
    headr.innerHTML = 'Positivity';
    headr.style.display = 'block';
  }
}