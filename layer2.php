<?php 
    if (isset($_POST['company_type'])) {
        $company_radio = $_POST['company_type'];
        if ($company_radio == 'option1') {
            $_SESSION["company_type"] = "شركة ذات مسئولية محدودة"; 
        }else if ($company_radio == 'option2'){
            $_SESSION["company_type"]  = "شركة مساهمة مصري";
        }else if ($company_radio == 'option3'){
            $_SESSION["company_type"]  = "شركة شخص واحد ذات مسئولية محدودة";
        }else if ($company_radio == 'option4'){
            $_SESSION["company_type"]  = "شركة شخص واحد ذات مسئولية محدودة";
        }else if ($company_radio == 'option5'){
            $_SESSION["company_type"]  = "شركة شخص واحد ذات مسئولية محدودة";
        }else if ($company_radio == 'option6'){
            $_SESSION["company_type"]  = "شركة شخص واحد ذات مسئولية محدودة";
        }
        echo $_SESSION["company_type"];
?>
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
                <div class="circle active"><span>2</span></div>
                <div class="circle"><span>3</span></div>
                <div class="circle"><span>4</span></div>
                <div class="circle"><span>5</span></div>
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
                <!-- layer--2 chose name -->
                <div class="layer">
                    <div class="comp-name pt-4">
                        <h3>اقترح اسم لشركتك</h3>
                        <div id="form-in" dir="rtl">
                            <form class="row g-3 justify-content-evenly pt-3" id="parent-el">
                                <div class="col-md-4">
                                  <label for="inputtext1" class="form-label">الاقتراح الاول</label>
                                  <input type="text" class="form-control" id="inputtext1">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputtext2" class="form-label">الاقتراح الثانى</label>
                                    <input type="text" class="form-control" id="inputtext2">
                                  </div>
                                <div class="col-md-4 align-self-end text-center" >
                                    <button class="btn btn-add" id="btn-add-sug">اضافه اقتراحات</button>
                                    <button class="btn btn-outline-danger" id="btn-delete-sug">حذف اقتراحات</button>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputtext1" class="form-label">الاقتراح الاول</label>
                                    <input type="text" class="form-control" id="inputtext1">
                                  </div>
                                  <div class="col-md-4">
                                    <label for="inputtext2" class="form-label">الاقتراح الثانى</label>
                                    <input type="text" class="form-control" id="inputtext2">
                                  </div>
                            </form>
                            <form class="row g-3 justify-content-evenly pt-3" id="parent-el">
                                <div class="col-md-4">
                                  <label for="inputtext1" class="form-label">الاقتراح الاول</label>
                                  <input type="text" class="form-control" id="inputtext1">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputtext2" class="form-label">الاقتراح الثانى</label>
                                    <input type="text" class="form-control" id="inputtext2">
                                  </div>
                                <div class="col-md-4 align-self-end text-center" >
                                    <button class="btn btn-add" id="btn-add-sug">اضافه اقتراحات</button>
                                    <button class="btn btn-outline-danger" id="btn-delete-sug">حذف اقتراحات</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="comp-info pt-4">
                        <h3>معلومات اساسيه</h3>
                        <div class="form-in" dir="rtl">
                            <form class="row g-3 justify-content-start pt-3">
                                <div class="col-md-4">
                                  <label for="floatingTextarea" class="form-label">نشاط الشركه</label>
                                  <textarea class="form-control" placeholder="نشاط الشركه" id="floatingTextarea"></textarea>
                                </div>
                                <div class="col-md-4">
                                    <label for="floatingTextarea2" class="form-label">عنوان الشركه</label>
                                    <textarea class="form-control" placeholder="عنوان الشركه" id="floatingTextarea2"></textarea>
                                </div>
                            </form>
                            <form class="row g-3 justify-content-start pt-3 pb-3">
                                <div class="col-md-4">
                                  <label for="inputtext3" class="form-label">قيمه رأس المال</label>
                                  <input type="text" class="form-control" id="inputtext3"></input>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputtext4" class="form-label">قيمه السهم</label>
                                    <input type="text" class="form-control" id="inputtext4"></input>
                                </div>
                            </form>
                        </div>
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
        const btnAdd = document.querySelector('#btn-add-sug');

        const parentForm = document.querySelector('#parent-el');
        const newform = document.createElement('div');
        // console.log(parentDiv)
        
        btnAdd.addEventListener('click',(e)=>{
            e.preventDefault();
            newform.classList.add('col-md-4');
            newform.setAttribute('dir','rtl');
            // newform.classList.add('row', 'g-3', 'justify-content-evenly' ,'pt-3');
            newform.innerHTML = `
                <label for="inputtext1" class="form-label">الاقتراح الاول</label>
                <input type="text" class="form-control" id="inputtext1">`;
                        
            parentForm.appendChild(newform);
            //  console.log(newform);
        });
        const btnDel = document.querySelector('#btn-delete-sug');
        const parentNode = document.querySelector('.form-in');
        // console.log(parentDiv.children)
        btnDel.addEventListener('click',(e)=>{
            e.preventDefault();
            parentForm.removeChild(parentForm.lastElementChild);
        })
    </script>
</body>
</html>