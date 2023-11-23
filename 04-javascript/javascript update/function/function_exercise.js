function doubleFunction1(number) {
    return number ** 2;
}

function doubleFunction2(number) {
    return number + 20;
}

function doubleFunction3(number) {
    return number / 2;
}

function mainFunction(input) {
    let result = input;
    result = doubleFunction1(result);
    result = doubleFunction2(result);
    result = doubleFunction3(result);
    return result;
}
let num3 = 0;
let result = mainFunction(2);
console.log(result);
