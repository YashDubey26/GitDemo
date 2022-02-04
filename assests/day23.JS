let value = 15

const myFirstPromise = new Promise((resolve) => {
    setTimeout(() => {
        if (value > 10) resolve([{ id: 1, data: "this is data" }])
    }, 5000)
})

console.log(myFirstPromise)

setTimeout(() => {
    console.log(myFirstPromise)
}, 3999)

myFirstPromise.then(val => {
    console.log(val)
})
