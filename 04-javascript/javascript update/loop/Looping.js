//for loop
for(let yyo = 0 ; yyo < 5 /* condition */ ; i++/* Incremental or decremental */)
{
 console.log("Hello" , yyo )
}



//for + array

const stakeholders = ["Sithu", "Ko Lwin" , "Ko Min", "Aung Aung", "Myo Myo"];
for(let i = 0 ; i < stakeholders.length; i++)
{
    console.log(stakeholders[i])  
}

//for + array + function

const customers =[{name:"yyo" , phoneNumber:"123456", email:"sdaflk@gmail.com"},
                  {name:"hh" , phoneNumber:"893212", email:"hh@gmail.com"},
                  {name:"nh" , phoneNumber:"234212", email:"nh@gmail.com"},
                  {name:"kt" , phoneNumber:"923013", email:"kt@gmail.com"}];
for ( let i = 0 ; i < customers.length; i++)
{
    //output all email
}



//for in 
const person = {fname:"John", lname:"Doe", age:25}; 

let txt = " ";
for (let x in person) {
  txt += person[x] + " ";
}
console.log(txt)

const students = { name : "mgmg" , phoneNumber : "093242340", email:"dsfojwr@gmail.com"}
for (let propertyName in customers)
{
  console.log(customers[propertyName]) 
}





//while loop
let i = 0;
while (i < 10)
{
  console.log(i);
  i++;
  
}


//do-while loop
/*
do{
 code that will be excuted
}while
*/

let a = 1;
do{
  console.log(a);
  a++;
  
}while (a < 10);


//log in form using do while loop
var password = "otechniquemyanmar";
do {
      var enterPassword = prompt("Enter Your Password");
      if (enterPassword === password)
      {
        alert("Your Password is correct");
      }
      else
      {
        alert("Wrong Password")
      }
}while ( enterPassword != password) //use var --- value always change













                