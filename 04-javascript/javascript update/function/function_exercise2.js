let num = 3;
let finalResult = mainFunction(num);

function squareFunction(number) {
    return number ** 2;
}

function addTenFunction(number) {
    return number + 10;
}

function doubleFunction(number) {
    return number * 2;
}

function mainFunction(input) {
    let result = input;
    result = squareFunction(result);//squareFunction(3);
    result = addTenFunction(result);
    result = doubleFunction(result);
    return result;
}

console.log(finalResult);
