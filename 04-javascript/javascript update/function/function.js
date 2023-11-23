//function


//Case1
let num1 = 0;
//function declaration
function square(){
    num1 = 4 ** 2;
}
square()
//call declare fuction to use






//Case2
let num2 =0; 
function yyo(number)
{
    num2 = number ** 2;

}
yyo(4); // switch to yyo(3)
//num2 ----- NaN(not a number)









//Case3
let num3 = 0;
function js1(number)
{
    num3 = number ** 2;
    num3 += 20;
    num3 /= 2; 
}
js1(2);


// for number=2
/*
let num3 = 0;
let number = 2;
total = number ** 2;
total += 20;
total /= 2;

let num3=2;
total = number ** 2;
total += 20;
total /= 2;

*/




//Case4 (using two parameters)

let num4 =0;
function js2(firstNumber, secondNumber) 
{
    num4 = firstNumber * secondNumber
    num4 += 4;
    num4 += 2;    
}
js2(2, 2) 

//variable to number








//Case5 (return value function)

function js3(number)
{
    return number 
}
let num = js3(5);
//number to variable





//Case5 ( Arrow function)
() =>    // No function name so it is called anonymous function
{
}


//
const arrowFunction = (myNumber1 , myNumber2) =>
    { 
        return myNumber1 * myNumber2
    }
arrowFunction(4 , 5)