<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>The Legal Clnic</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.16/css/intlTelInput.css" integrity="sha512-gxWow8Mo6q6pLa1XH/CcH8JyiSDEtiwJV78E+D+QP0EVasFs8wKXq16G8CLD4CJ2SnonHr4Lm/yY2fSI2+cbmw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/layer-1.css">
</head>
<body>
    <div class="page-wrapper">
        <div class="container pro-bar">
            <!-- operations progress bar -->
            <div class="progress-container" dir="rtl">
                <div class="progress" id="progress"></div>
                <div class="circle"><span>1</span></div>
                <div class="circle"><span>2</span></div>
                <div class="circle"><span>3</span></div>
                <div class="circle"><span>4</span></div>
                <div class="circle active"><span>5</span></div>
            </div>
            <div class="operations-container" dir="rtl">
                <div class="type">
                    <p>نوع الشركه</p>
                </div>
                <div class="type">
                    <p>بيانات الشركه</p>
                </div>
                <div class="type">
                    <p>بيانات المساهمين</p>
                </div>
                <div class="type">
                    <p>بيانات المديرين</p>
                </div>
                <div class="type">
                    <p>الموعد النهائي</p>
                </div>
            </div>
        </div>
        <div class="main-content" id="main">
            <div class="container">
                <!-- layer---5 -->
                <div class="layer d-flex justify-content-center">
                    <div class="down-paper mt-5 text-center">
                        <button class="btn btn-down-paper"><img src="images/Vector (1).svg">الحصول علي التوكيل الرسمي</button>
                            <h6 class="pt-3 sec">برجاء تحديد موعد لتوقيع التوكيل</h6>
                        <div class="calender mt-3 mb-3">
                            <div class="month">
                                <button class="prev"><i class="fa-solid fa-angle-left"></i></button>
                                <div class="date">
                                    <h6></h6>
                                    <p></p>
                                </div>
                               <button class="next"><i class="fa-solid fa-angle-right"></i></button> 
                            </div>
                            <div class="weekdays">
                                <div>SUN</div>
                                <div>MON</div>
                                <div>TUE</div>
                                <div>WED</div>
                                <div>THR</div>
                                <div>FRI</div>
                                <div>SAT</div>
                            </div>
                            <div class="days">
                            </div>
                        </div>
                        <p class="sec pb-4">المواعيد متاحة من الساعة 9:00 صباحًا حتى 1:00 ظهرًا</p>
                    </div>
                </div>
                <div class="btn-chose d-flex justify-content-center pb-3">
                    <button class="btn next mr-3" id="next">التالي</button>
                    <button class="btn pre " id="prev">السابق</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/js/all.min.js" integrity="sha512-Cvxz1E4gCrYKQfz6Ne+VoDiiLrbFBvc6BPh4iyKo2/ICdIodfgc5Q9cBjRivfQNUXBCEnQWcEInSXsvlNHY/ZQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.16/js/intlTelInput.min.js" integrity="sha512-Po9nSdYOcWIcoADdRjkAbRYPpR8OHjxzA/3RDUERZcDewTLzRTxbG4bUX7Sr7lVEcO3wTCzphdOBWgNFKVmxaA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- <script src="js/main.js"></script> -->
    <script>
        const date = new Date();

function renderCalc(){
const months = ['January','February','March','April','May','June','July','August','September','October','November','December'];  

const monthdays = document.querySelector('.days');

const lastDay = new Date(date.getFullYear(), date.getMonth() + 1, 0).getDate();
// console.log(lastDay);
const prevLastDay = new Date(date.getFullYear(), date.getMonth(), 0).getDate();
const firstDayIndex = date.getDay();
const lastDayIndex = new Date(date.getFullYear(), date.getMonth()+1,0).getDay();
// console.log(lastDayIndex);
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

document.querySelector('.prev').addEventListener('click',()=>{
    date.setMonth(date.getMonth()-1);
    renderCalc();
});
document.querySelector('.next').addEventListener('click',()=>{
    date.setMonth(date.getMonth()+1);
    renderCalc();
})
renderCalc();
    </script>
</body>
</html>