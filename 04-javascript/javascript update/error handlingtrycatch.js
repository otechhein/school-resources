//try ... catch 
/*
    try{
        	state1()
    }catch (error)
    {
        console.log("dsfk" , error)
    }
*/


const stakeholders = ["Sithu", "Ko Lwin" , "Ko Min", "Aung Aung", "Myo Myo"];

const state1 = ()=>{
    for (const i = 0; i < stakeholders.length ; i ++)
    {
        console.log(stakeholders[i])
    }
}

const state2 = ()=>{
    console.log("Teachers")
}

const state3 = ()=>{
    console.log("Development Team")
}

const state4 = ()=>{
    console.log("CAD Team")
}

try {
    state1();
}catch(error){
    console.log("Catch error is: " , error )
}
state2();
state3();
