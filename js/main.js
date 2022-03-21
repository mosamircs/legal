let areaMoney = document.getElementById('choice-Money')
let areaPeolple = document.getElementById('choice-people');

let btnMoney = document.getElementById('btn-money');
let btnPeople = document.getElementById('btn-people');

btnMoney.addEventListener('click',()=>{
    // console.log('cjfh')
    if(areaMoney.style.display === 'none'){
        areaMoney.style.display = 'block';
        areaPeolple.style.display = 'none';
        btnMoney.classList.replace('notseleted','selected');
        btnPeople.classList.replace('selected','notseleted');
        btnPeople.classList.add('text-align');
        // console.log('hhhg');
    }
});
btnPeople.addEventListener('click',()=>{
    if(areaPeolple.style.display === 'none'){
        areaPeolple.style.display = 'block';
        areaMoney.style.display = 'none';
        btnPeople.classList.replace('notseleted','selected');
        btnMoney.classList.replace('selected','notseleted');
        btnMoney.classList.add('set-position');
        // console.log('jjj');
    }
});
// // //////////////////////////////////////////////////////////////////////////
let btnPre = document.getElementById('previous');
let btnNext = document.getElementById('nxt');

let mainContent = document.getElementById('main');

// btnNext.addEventListener('click',()=>{
//     if(){

//     }
// });
//////////////////////////////////////////////////////////////////////
let checkbox1 = document.getElementById('exampleRadios1');
let downBtn1 = document.getElementById('down-1');
let checkbox2 = document.getElementById('exampleRadios2');
let downBtn2 = document.getElementById('down-2');
let checkbox3 = document.getElementById('exampleRadios3');
let downBtn3 = document.getElementById('down-3');
let checkbox4 = document.getElementById('exampleRadios4');
let downBtn4 = document.getElementById('down-4');
let checkbox5 = document.getElementById('exampleRadios5');
let downBtn5 = document.getElementById('down-5');
let checkbox6 = document.getElementById('exampleRadios6');
let downBtn6 = document.getElementById('down-6');

function check1(){
    if (checkbox1.checked){
        downBtn1.style.display = 'block';
        downBtn2.style.display = 'none';
        downBtn3.style.display = 'none';
    }
}
function check2(){
    if (checkbox2.checked){
        downBtn1.style.display = 'none';
        downBtn2.style.display = 'block';
        downBtn3.style.display = 'none';
    }
}
function check3(){
    if (checkbox3.checked){
        downBtn1.style.display = 'none';
        downBtn2.style.display = 'none';
        downBtn3.style.display = 'block';
    }
}
function check4(){
    if (checkbox4.checked){
        downBtn5.style.display = 'none';
        downBtn6.style.display = 'none';
        downBtn4.style.display = 'block';
    }
}
function check5(){
    if (checkbox5.checked){
        downBtn4.style.display = 'none';
        downBtn6.style.display = 'none';
        downBtn5.style.display = 'block';
    }
}function check6(){
    if (checkbox6.checked){
        downBtn4.style.display = 'none';
        downBtn5.style.display = 'none';
        downBtn6.style.display = 'block';
    }
}
/////////////////////////////////////////////////////////////////
const progress = document.getElementById('progress');
const next = document.getElementById('next');
const prev = document.getElementById('prev');
const circles = document.querySelectorAll('.circle');
const layers = document.querySelectorAll('.layer');
const layer1 = document.getElementById('layer-1');

// const arrLayers = [layers];
// console.log(arrLayers);
let currentActive = 1;
let currentLayer = 1;
next.addEventListener('click',()=>{
    currentActive++;
    currentLayer++;
    // console.log(currentActive);
    if(currentActive > circles.length){
        currentActive = circles.length;
    }
    if(currentLayer > layers.length){
        currentLayer = layers.length;
    }
    // console.log(currentActive);
    // console.log(currentLayer);
    update();
});
prev.addEventListener('click',()=>{
    currentActive--;
    currentLayer--;
    // console.log(currentActive);
    if(currentActive < 1){
        currentActive = 1;
    }
    if(currentLayer < 1){
        currentLayer = 1;
    }
    update();
});

function update(){
    circles.forEach((circles , cirIndx)=>{
        if(cirIndx < currentActive){
            circles.classList.add('active');
        } else{
            circles.classList.remove('active')
        }
    });
    layers.forEach((layers,layIndx)=>{
        
            if(layIndx < currentLayer){
                // layers.previousElementSibling.style.display = 'none';
                layers.style.display = 'block';
            }else{
            layers.style.display = 'none';
        }
    });
    const actives = document.querySelectorAll('.active');

    progress.style.width =( (actives.length - 1) / (circles.length - 1) ) * 100 + '%';
     
    if(currentActive === 1){
        prev.disabled = true;
    } else if (currentActive === circles.length){
        next.disabled = true;
    }else{
        prev.disabled = false;
        next.disabled = false;
    }
}
/////////////////////////////////////////////////////////////
// const btnAdd = document.getElementById('btn-add-sug');
// const parentEl = document.getElementById('parent-el');
// btnAdd.addEventListener('click',()=>{
//     const newEl = document.createElement(`div`);
// parentEl.appendChild(newEl);
// });





// //////////////////////////////////////////////////////
const date = new Date();

function renderCalc(){
const months = ['January','February','March','April','May','June','July','August','September','October','November','December'];  

const monthdays = document.querySelector('.days');

const lastDay = new Date(date.getFullYear(), date.getMonth() + 1, 0).getDate();
// console.log(lastDay);
const prevLastDay = new Date(date.getFullYear(), date.getMonth(), 0).getDate();
const firstDayIndex = date.getDay();
const lastDayIndex = new Date(date.getFullYear(), date.getMonth()+1,0).getDay();
console.log(lastDayIndex);
const nextDays = 7-lastDayIndex -1;
// console.log(new Date(date.getFullYear(), date.getMonth() + 1, 0).getDay());

document.querySelector('.date h6').innerHTML = months[date.getMonth()];

document.querySelector('.date p').innerHTML = date.toDateString();

let days = '';

for(let x=firstDayIndex; x>0; x--){
    days += `<div class="prev-date">${prevLastDay - x +1}</div>`;
}
for(let i=1; i <= lastDay; i++){
    if(i === new Date().getDate() && date.getMonth() === new Date().getMonth()){
        days += `<div class="today">${i}</div>`
    } else{

        days += `<div>${i}</div>`;
        }
        // console.log(days);
    }
    for(let j=1; j <= nextDays; j++){
            days += `<div class="next-date">${j}</div>`;
        monthdays.innerHTML = days;
}
}
// date.setMonth(5);
// date.setDate(1);


document.querySelector('.prev').addEventListener('click',()=>{
    date.setMonth(date.getMonth()-1);
    renderCalc();

    
});
document.querySelector('.next').addEventListener('click',()=>{
    date.setMonth(date.getMonth()+1);
    renderCalc();


})

renderCalc();



