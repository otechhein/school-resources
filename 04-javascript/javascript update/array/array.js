{} // object , unordered 
[] // empty array, ordered elements


//array - single element
const ordered = [
    "Si Thu Min Htet" , 
    "Nyein Chan Si Thu", 
    "Nay Htet "]

//elements
//index (element_position)
// start with 0
// position 0 is "Si Thu Min Htet"

//Array Element Position
ordered [0]  //output Si Thu Min Htet
ordered [1]  // output Nyein Chan Si Thu



//Array length property
ordered.length //output position 0 to  3



//get last element of arrays
const index = ordered.length - 1;  // 3 - 1
ordered [index]


//push_method
ordered.push("Mg Mg")//add elements ---- last 

//pop_method
ordered.pop() // remove last elements


//unshift
ordered.unshift("Mg Mg") //add elements ---- first 

//shift
ordered.shift("Mg Mg")//remove first elements


//splice_method
ordered.splice(pos, 1) //pos is position (index)
                      // start pos to how many elements you want to remove (pos , 1)


//indexOf_method
ordered.indexOf("") //find index of element you want to find
//if the output is -1, it means index of element that you type doesn't exit in array) 





//Two Dimensional Array or Multi dimensional array

/*const ordered = [1,2,3,4,5,6]; */ //one dimensional array

const ordered2 = [ [1,2],[3,4],[5,6] ]; //two dimensional array
ordered2[0] //output [1,2]
ordered2[ordered2.length - 1] //output [5,6]


//object inside array
let hk = [{"sectionA":["mgmg","aye aye","kyaw kyaw"], 
            "sectionB":["ko soe", "mya mya","kyaw thu"]}]
console.log(hk[0].sectionA)


//array inside array    
let hk1 = [["mgmg",["apple","banana", "mango"],"kyaw kyaw"],
           ["ko soe", "mya mya","kyaw thu",["pajeo", "marcedes", "toyota"]]]


console.log(hk1[0][1][1]); 
