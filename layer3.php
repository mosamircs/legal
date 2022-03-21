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
                <div class="circle active"><span>3</span></div>
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
                <!-- layer--3 count parts-->
                <div class="layer">
                    <div class="count">
                        <div class="col-sm-3" dir="rtl">
                            <label class="visually-hidden" for="specificSizeSelect">Preference</label>
                            <select class="form-select" id="specificSizeSelect">
                              <option selected disabled>اختر عدد المساهمين</option>
                            </select>
                          </div>
                    </div>
                    <form></form>
                    <form class="row g-3 justify-content-around pt-3" dir="rtl">
                        <div class="col-md-3">
                          <label for="inputtext1" class="form-label">اسم المساهم</label>
                          <input type="text" class="form-control" id="inputtext1">
                        </div>
                        <div class="col-md-3">
                            <label for="inputtext2" class="form-label">جنسيه المساهم</label>
                            <input type="text" class="form-control" id="inputtext2">
                        </div>
                        <div class="col-md-3">
                            <label for="inputtext3" class="form-label">نسبه المساهمه</label>
                            <input type="text" class="form-control" id="inputtext3">
                        </div>
                        <form class="row g-3 pt-4">
                            <div class="col-md-5 mb-3">
                                <label for="formFileMultiple" class="form-label">اضافه البطاقه الشخصية</label>
                                <input class="form-control" type="file" id="formFileMultiple" multiple>
                              </div>
                            <div class="col-md-3 x-last align-self-center">
                                <button class="btn btn-outline-danger">حذف المساهم</button>
                            </div>
                            <hr>
                        </form>
                    </form>
                    <!-- <form class="row g-3 justify-content-around pt-5" dir="rtl">
                        <div class="col-md-3">
                          <label for="inputtext1" class="form-label">اسم المساهم</label>
                          <input type="text" class="form-control" id="inputtext1">
                        </div>
                        <div class="col-md-3">
                            <label for="inputtext2" class="form-label">جنسيه المساهم</label>
                            <input type="text" class="form-control" id="inputtext2">
                        </div>
                        <div class="col-md-3">
                            <label for="inputtext3" class="form-label">نسبه المساهمه</label>
                            <input type="text" class="form-control" id="inputtext3">
                        </div>
                        <form class="row g-3 pt-4">
                            <div class="col-md-5 mb-3">
                                <label for="formFileMultiple" class="form-label">اضافه البطاقه الشخصية</label>
                                <input class="form-control" type="file" id="formFileMultiple" multiple>
                              </div>
                            <div class="col-md-3 x-last align-self-center">
                                <button class="btn btn-outline-danger">حذف المساهم</button>
                            </div>
                        </form> -->
                    </form>
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
        const select = document.querySelector('#specificSizeSelect');
        const parentCountEl = document.querySelector('form');
        
        for(let i=1; i<= 50; i++){
            const newOption = document.createElement('option');
            const optionText = document.createTextNode(i);
            // set option text
            newOption.appendChild(optionText);
            // and option value
            newOption.setAttribute('value',i);
            select.appendChild(newOption);
        }
        select.addEventListener('change',(e)=>{
            e.preventDefault();
            // console.log(select.value);
            
            for(let j=1; j < select.value; j++){
                const newEl = document.createElement('form');
                newEl.classList.add('row','g-3','justify-content-around','pt-3');
                newEl.setAttribute('dir','rtl');
                newEl.innerHTML = `<div class="col-md-3">
                          <label for="inputtext1" class="form-label">اسم المساهم</label>
                          <input type="text" class="form-control" id="inputtext1">
                        </div>
                        <div class="col-md-3">
                            <label for="inputtext2" class="form-label">جنسيه المساهم</label>
                            <input type="text" class="form-control" id="inputtext2">
                        </div>
                        <div class="col-md-3">
                            <label for="inputtext3" class="form-label">نسبه المساهمه</label>
                            <input type="text" class="form-control" id="inputtext3">
                        </div>
                        <form class="row g-3 pt-4">
                            <div class="col-md-5 mb-3">
                                <label for="formFileMultiple" class="form-label">اضافه البطاقه الشخصية</label>
                                <input class="form-control" type="file" id="formFileMultiple" multiple>
                              </div>
                              <div class="col-md-3 x-last align-self-center">
                                <button class="btn btn-outline-danger">حذف المساهم</button>
                            </div>
                            <hr>
                        </form>`;
                    parentCountEl.appendChild(newEl);
                    // ! how to remove the default one 
                    // if he tries to change the number it adds on the pre selection;
            }
            
        })
        

    </script>
</body>
</html>