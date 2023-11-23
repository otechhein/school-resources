// let myArray = [12, "dog", 123.5, true, fruit];

// Looping Array
let myArray = ["cat", "dog", "bird", "rabbit"];
for(let i = 0; i < myArray.length;  i++) {
    console.log(myArray[i]);
}

// Getting length of Array
// const myArr = ["cat", "dog", "bird", "rabbit"];
// console.log(myArr.length);

// Getting individual element using their index of array
const myArr = ["cat", "dog", "bird", "rabbit"];
console.log(myArr[0]);

// Cloning Array
let arrOne = ["Aung Aung", "Maung Maung", "Naung Naung", "Daung Daung"];
let myCopyArr = [...arrOne];
console.log(myCopyArr);

// Adding and Removing Value in Array
const arrTwo = ["Toyota", "Lexus", "Mazda", "Nissan" ];
arrTwo.push("Mitsubishi");
console.log(arrTwo);

// Removing the last element of an Array
arrTwo.pop();
console.log(arrTwo);

// Array map()
// Create new array from calling a function for every array element
const numbers = [4, 9, 16, 25];
const newArr = numbers.map(Math.sqrt);
// Return a new array with the square root of all element values
console.log(newArr);

const numArray = [10, 20, 30, 40];
const result = numArray.map((x) => x * 2);

console.log(result);

const myArry = [5, 10, 15];
const mappingResult = myArry.map((element) => {
    return element * 2;
});
console.log(mappingResult);

// Getting index of Array element
const myAr = [5, 10, 15];
const index = myAr.indexOf(10);
console.log(index);

// Finding the value according to the condition
const ages = [3, 10, 18, 20];
const foundResult = ages.find(e => e < 15);
console.log(foundResult);

// Array filter()
// Created a new array filled with elements that pass a test provided by a function
const customArr = [5, 10, 15, 20, 25];
const filteredResult = customArr.filter(e => e < 15);
console.log(filteredResult);

// Array reduce()
const customArray = [5, 10, 15, 20, 30];
const sum = customArray.reduce((acc, num) => acc + num, 0);
console.log(sum);
