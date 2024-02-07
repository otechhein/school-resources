/*
let name = "Mg Mg";
let age = 21;
let height = 160;
Let place = "Yangon"
*/



//Case1
//{} object
const person1 = {
    name: "Mg Mg",
    age: 21,
    height: 160,
    place: "Yangon",
    isStudent : true,  
}



//Accessing object's properties
//1
person1.name
person1.age // primitive datatype placing inside object is called properties
//or
person1["name"]
person1["age"]




//Case2
//properties + function
const person2 = {
    name: "Lwin Naing Tun",
    age: 21,
    height: 160,
    place: "Yangon",
    isStudent : true,
    learning : () =>{ //method
        alert("LNT is learning Js");
    }
}
person2.name
person2.learning()


//or
person2["name"]
person2["learning"]()





//Case3
const person3 = {
    name: "Si Thu Min Htet",
    age: 21,
    height: 160,
    place: "Yangon",
    isStudent : true,
    learning : () =>{
        alert("STMH is learning Js")
    }
}


person3.hobby="programming";//add more 
person1.isMale = true;//add more
person3.height=130; // fixing
person3.eating= () => {alert ("He is eating now ...")} //fixing







const person4 ={
    name : "Ye Yint",
    age : 16,
    height : 160,
    walk : () =>
    {
        alert(" He is walking")
    }
}
const input1Value = "Daw Sandar Lwin";
;
const propertyName  = "Guide by " + input1Value;
person4[propertyName] = input2Value;
//Guide by Daw Sandar Lwin = Programming


//prompt --->  (value) ---> object()