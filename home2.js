

function fx2(){

document.getElementById("a33").style.display = "none"; 
document.getElementById("a44").style.display = "inline";
document.getElementById("55").style.display="inline";
}

function fx3(){

document.getElementById("a33").style.display = "inline"; 
document.getElementById("a44").style.display = "none";
document.getElementById("55").style.display="none";

}


var myIndex = 0;
carousel();

function carousel() 
{
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) 
  {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) 
    {
      myIndex = 1
    }    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); 
}
var myIndex = 0;
carouse2();

function carouse2() 
{
  var i;
  var x1 = document.getElementsByClassName("mySlides1");
  for (i = 0; i < x1.length; i++) 
  {
    x1[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x1.length) 
    {
      myIndex = 1
    }    
  x1[myIndex-1].style.display = "block";  
  setTimeout(carouse2, 3000);
}



var modal2 = document.getElementById('myModal2');

function fx7(){
 modal2.style.display = "block";
}

function fx8(){
  modal2.style.display = "none";
}

window.onclick = function(event1) 
{
  if (event.target == modal2) 
  {
    modal2.style.display = "none";
  }
}