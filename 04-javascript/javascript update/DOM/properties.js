/*
const bodyTag = document.getElementsByTagName("body");//HTML Collection
//console.log("Body Tag is : ", bodyTag)



const parentDiv = document.getElementsByClassName("parent")[0];//HTMl Collection
parentDiv.innerHTML="";
console.log(parentDiv);

//id
const idDiv = document.getElementById("myid");
console.log(idDiv);
*/











/*
<div class="parent">
        <div class="child">Child One</div>
        <div class="child">Child Two</div>
    </div>
*/


/*

const parentDiv = document.createElement("div");
parentDiv.classList.add("parent" , "mother");
parentDiv.classList.remove("mother");


const childOne = document.createElement("div");
childOne.classList.add("child");
childOne.append("Child One");


const childTwo = document.createElement("div");
childTwo.classList.add("child");
childTwo.append("Child Two");


parentDiv.append(childOne, childTwo)
const bodyTag = document.getElementsByTagName("body")[0];
bodyTag.appendChild(parentDiv)

*/



const styleTestDiv = document.getElementsByClassName("styleTest")[0];
console.log("Background-color is : ", styleTestDiv.style.backgroundColor);


/*console.log("Height is : ", getComputedStyle(styleTestDiv).height);
console.log("Width is : ", getComputedStyle(styleTestDiv).width);
console.log("Background-color is : ", getComputedStyle(styleTestDiv).backgroundColor); */







/*
const styleTestDiv = document.getElementsByClassName("styleTest")[0];
console.log("Height is : ", styleTestDiv.style.height);
console.log("Width is : ", styleTestDiv.style.width);
console.log("Background-color is : ", styleTestDiv.style.backgroundColor);
*/