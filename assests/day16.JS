// const button = document.querySelector('button')

// const bmw = (e) => {
//     const ele = e.target
//     ele.style = "background:red"
// }

// button.addEventListener('click',bmw)

// button.addEventListener('dblclick', e => {
//     e.target.style = "background:orange"
// })

// button.addEventListener('mouseover', e => {
//     e.target.style = "background:pink"

// })

// const button=document.querySelector('button')
// const input=document.querySelector('input#todo_input')
// const list=document.querySelector('ol')

// input.addEventListener('keydown', e=>{
//     const key=e.key;
//     if(key=='Enter'){
//         // console.log("Enter key");
//         handleAdd()
//     }
// })

// const handleAdd=(e)=>{


//     const textToAdd=input.value;

//     if(textToAdd.length>0){

//     const ele=document.createElement('li');
//     const text_node=document.createTextNode(textToAdd);

//     ele.appendChild(text_node);
//     list.appendChild(ele);

//     //create a dynamic button element
//     const button=document.createElement('button');
//     button.classList.add("delete_buton");
//     button.innerHTML="Delete";
//     ele.appendChild(button);

//     button.addEventListener('click',(e)=>{
//         console.log("Button to delete");
//         ele.remove();
//     })

//     //clears the list
//     input.value=''
//     }else{
//         window.alert("Task cannot be empty");
        
//     }

    
// }

// button.addEventListener('click',handleAdd);

const button = document.querySelector('button')
const div = document.querySelector('div')
const body = document.querySelector('body')



button.addEventListener('click', (e) => {
    // check if the body has dark class
    //  yes  -> remove it
    //  no  -> add it
    body.classList.toggle('dark')
})

// const random = () => {
//     const val = Math.floor(Math.random().toFixed(1) * 3)
//     switch (val) {
//         case 0:
//             return "rock"
//         case 1:
//             return "paper"
//         case 2:
//             return "scissor"

//         default:
//             return "paper"
//     }
// }
