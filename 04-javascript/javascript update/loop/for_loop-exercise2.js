function doubleArray(arr) {
    let doubledArray = [];
    for (let i = 0; i < arr.length; i++) {
        doubledArray.push(arr[i] * 2);
    }
    return doubledArray;
}

const numbers = [1, 2, 3, 4, 5];
console.log(doubleArray(numbers)); 


















// Output: [2, 4, 6, 8, 10]