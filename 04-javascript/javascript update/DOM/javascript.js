//DOM (CRUD) Create, Read , Update , Delete 
//<div>Hi,O-Technique</div>
//Create
const divElement = document.createElement("h1");
const textNode = document.createTextNode("Hi,O-Technique");
divElement.appendChild(textNode);

const bodytagName = document.getElementsByTagName("body");
//console.log(bodytagName);
const bodytag = document.getElementsByTagName("body")[0];
bodytag.appendChild(divElement);

//Read
const readH1 = document.getElementsByTagName("h1")[0];
//console.log(readH1);

//Update 
readH1.textContent = "Aye say bal";

//Remove
readH1.remove()
