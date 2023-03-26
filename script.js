//console.log("Javascript");

//Alert DialogBox
//window.alert("Hello");

//Confirm Dialog Box
//let answer=window.confirm("Are You sure you want to continue")
//console.log(answer);

//let answer=window.prompt("Where do you live")
//console.log(answer);
//document.body.style.backgroundColor="red";
//document.body.style.fontFamily="sans-serif"


//selector
//let movies=document.getElementById("Movies");
//movies.style.backgroundColor="cyan";
//console.log("Movies")

//class selector
//let movies =document.getElementsByClassName("MoviesList")
//Query Selector
let Movies =document.querySelector(".MoviesList");
Movies.classList.add("big-red");
//Movies.classList.remove("big-red")
//Movies.classList.toggle("big-red")

//Query Selector All
//let Movies1=document.querySelectorAll(".MoviesList")
//Movies1[1].style.backgroundColor="blue";

//Event Listner
//document.addEventListener("click",function(){
  //  window.alert("You clicked");
//});

let button=document.querySelector(".click");
button.addEventListener("click",function(){
    document.body.classList.toggle("dark");
    if(button.textContent=="Dark Mode"){
        button.textContent="Light Mode";
    }else{
    button.textContent="Dark Mode";
    }
});