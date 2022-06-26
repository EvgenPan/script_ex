const arr = [{name:'Apple', price: 100},
    {name:'Orange', price: 32}, {name:'Potato', price: 72}, {name:'Orange', price: 32}, {name:'Orange', price: 32}]
let arr1 = [];
const table = document.querySelector('table tbody');
arr.forEach(function (value,key,ar) {
   const node = document.createElement('tr')
     node.innerHTML = `<td>${value.name}</td>
                       <td>${value.price}</td>`
    console.log(node)
   table.append(node)
    arr1.push(value['name']);
})
/*Add script*/
/*document.getElementById('progress').value = '50';*/

// fetch('https://api2.binance.com/api/v3/ticker/24hr')
//     .then((r) => { return r.json()})
//     .then(data => {
//
//         return bit(data)
//     })
// let arrgs
// function bit (data){
//
//     return (arrgs = data)
// }
/*Add script*/
const int = () =>{
    let count = 1;
    return () =>{

       return  count++;
    }

}
let ret = int()

const set = setInterval(function (){return ret()},1000)
console.log(int())

var elem = document.getElementById('task');
elem.addEventListener('click', func);
var elem1 = document.getElementsByClassName('cls');

function func() {
    var sum = 0;
    for (var i = 0; i < elem1.length; i++) {
        sum += Number(elem1[i].value);
    }
    var newElem = document.getElementById('sum');
    newElem.value = sum;
}
function listener(e) {
    var l = document.createElement("li");
    switch(e.type) {
        case "animationstart":
            l.innerHTML = "Started: elapsed time is " + e.elapsedTime;
            break;
        case "animationend":
            l.innerHTML = "Ended: elapsed time is " + e.elapsedTime;
            break;
        case "animationiteration":
            l.innerHTML = "New loop started at time " + e.elapsedTime;
            break;
    }
    document.getElementById("output").appendChild(l);
}
const playStop = document.getElementById('pl_st');
const play = document.querySelector('.video');
play.addEventListener("click", function() {
    this.classList.toggle('active');

})

const formId = document.getElementById('cartForm');
formId.addEventListener('submit', (event) => {
    const reg = formId.childNodes[1];
    console.log(reg.value)
    event.preventDefault()

})
const link = document.querySelector('.link');
link.addEventListener('click', (e) => {
    e.target.dataset.link ? link.style.color="red" : console.log('dddddddd');
});


window.addEventListener('load', () => {
    document.body.classList.add('preload');
    setTimeout(()=>{document.body.classList.add('loaded');
                           document.body.classList.remove('preload');
                               },2000)
})





let parent = document.querySelector('#parent');
let nodes = parent.childNodes;

for (let node of nodes) {
    console.log(node);
}


/*Light theme*/
const btn = document.getElementById('b_theme');
const cube = document.querySelector('.cube')
let truFalse = false;
btn.addEventListener('click', () =>{
   truFalse = !truFalse;
   if(truFalse){
       cube.classList.add('active');
   } else {
       cube.classList.remove('active')
   }
})
