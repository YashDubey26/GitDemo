// let brand="mercedes";
// console.log(brand.toUpperCase());

// //JSON
// const temp={
//     age:20,
//     brand:'Mercedes',
//     greet:()=>{console.log('hi')}
// }
// console.log(temp.age)
// temp.greet()

// literal notation to create an object
// const car = {
//     age: 18,
//     brand: "Mercedes",
//     getBrand: function() { console.log(this.age)}
// }

// // console.log(temp.age)
// // console.log(temp['brand'])

// car.getBrand()


// console.log(window.innerWidth);
// console.log(window.innerHeight);

// // window.prompt("What is ur name");
// console.warn("Warning");
// console.error("Hey i am an error");


//For Loop
// let arr=[1,2,3,4,5]

// for (let i=0; i<arr.length; i++){
//     console.log(arr[i]);
// }

// let arr=[1,2,3,4,5]

// const callback=function(element){
//     console.log(element)
// }

// arr.forEach(()=>{
//     console.log('You called me')
// })

// let elements = document.getElementsByClassName('temp')
// let elements = document.getElementsByTagName('div')
let elements=document.querySelectorAll('div.temp');

let arr = [1, 2, 3, 4, 5]

console.log(elements)
console.log(arr)


// for (let i = 0; i < elements.length; i++) {
//     elements[i].innerHTML = `Element ${i}`

// }

elements.forEach((ele, i) => {
    ele.innerHTML = `Element ${i}`
});

// const tasks=['GO to GYM', 'Take Medicine','Eat'];
// const ol=document.createElement('ol')

// tasks.forEach(task=>{
//     const li=document.createElement("li")
//     const textNode=document.createTextNode(task)
//     li.appendChild(textNode)
//     ol.appendChild(li)
// })
// console.log(ol)

// body.appendChild(ol)