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
                <div class="circle active"><span>4</span></div>
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
                <!-- layer---4 mangers names -->
                <div class="layer">
                    <div class="mang-names pt-4">
                        <form class="row g-3 justify-content-center" dir="rtl">
                            <div class="col-md-6">
                              <label for="inputtext" class="form-label" value="Amsterdam,Washington,Sydney,Beijing,Cairo" data-role="tagsinput" >ادخل اسماء المديرين</label>
                              <input type="text" class="form-control" id="inputtext">
                            </div>
                            <div class="col-3 align-self-end" style="text-align: center;">
                                <button class="btn bttn-add" style="width: 10rem;">اضافه</button>
                            </div>
                        </form>
                    </div>
                    <div class="mang-details pt-5 pb-5" dir="rtl">
                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="close"><i class="fa-solid fa-x"></i></div>
                                        <div class="row">
                                            <div class="col-6">
                                                <form class=" g-3 justify-content-around" dir="rtl">
                                                    <div class="">
                                                      <label for="inputtext1" class="form-label">اسم المدير</label>
                                                      <input type="text" class="form-control" id="inputtext1" disabled>
                                                    </div>
                                                    <div class="">
                                                        <label for="inputtext2" class="form-label">جنسيه المساهم</label>
                                                        <input type="text" class="form-control" id="inputtext2" disabled>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-6 align-self-center">
                                                <div class="id"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h6>صلاحيات المدير</h6>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1" checked>
                                            <label class="form-check-label" for="flexCheckDefault1">
                                                صلاحية التوقيع امام البنوك وفتح حسابات بنكية والتعامل على حساب الشركة
                                            </label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2">
                                            <label class="form-check-label" for="flexCheckChecked2">
                                                صلاحية توقيع العقود بالنيابه عن الشركة
                                            </label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked3">
                                            <label class="form-check-label" for="flexCheckChecked3">
                                                صلاحية التعامل امام الجهات الحكوميه بالنيابه عن الشركة
                                            </label>
                                          </div>
                                    </div>
                                    <div class="card-footer align-self-center">
                                        <div class="">
                                            <button class="btn save">حفظ</button>
                                            <button class="btn edit">تعديل</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="close"><i class="fa-solid fa-x"></i></div>
                                        <div class="row">
                                            <div class="col-6">
                                                <form class=" g-3 justify-content-around" dir="rtl">
                                                    <div class="">
                                                      <label for="inputtext1" class="form-label">اسم المدير</label>
                                                      <input type="text" class="form-control" id="inputtext1" disabled>
                                                    </div>
                                                    <div class="">
                                                        <label for="inputtext2" class="form-label">جنسيه المساهم</label>
                                                        <input type="text" class="form-control" id="inputtext2" disabled>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-6 align-self-center">
                                                <div class="id"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h6>صلاحيات المدير</h6>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
                                            <label class="form-check-label" for="flexCheckDefault4">
                                                صلاحية التوقيع امام البنوك وفتح حسابات بنكية والتعامل على حساب الشركة
                                            </label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked5">
                                            <label class="form-check-label" for="flexCheckChecked5">
                                                صلاحية توقيع العقود بالنيابه عن الشركة
                                            </label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked6">
                                            <label class="form-check-label" for="flexCheckChecked6">
                                                صلاحية التعامل امام الجهات الحكوميه بالنيابه عن الشركة
                                            </label>
                                          </div>
                                    </div>
                                    <div class="card-footer  align-self-center">
                                        <div class="">
                                            <button class="btn save">حفظ</button>
                                            <button class="btn edit">تعديل</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="close"><i class="fa-solid fa-x"></i></div>
                                        <div class="row">
                                            <div class="col-6">
                                                <form class=" g-3 justify-content-around" dir="rtl">
                                                    <div class="">
                                                      <label for="inputtext1" class="form-label">اسم المدير</label>
                                                      <input type="text" class="form-control" id="inputtext1" >
                                                    </div>
                                                    <div class="">
                                                        <label for="inputtext2" class="form-label">جنسيه المساهم</label>
                                                        <input type="text" class="form-control" id="inputtext2" >
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-6 align-self-center">
                                                <div class="id"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h6>صلاحيات المدير</h6>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault7">
                                            <label class="form-check-label" for="flexCheckDefault7">
                                                صلاحية التوقيع امام البنوك وفتح حسابات بنكية والتعامل على حساب الشركة
                                            </label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked8" checked>
                                            <label class="form-check-label" for="flexCheckChecked8">
                                                صلاحية توقيع العقود بالنيابه عن الشركة
                                            </label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked9" checked>
                                            <label class="form-check-label" for="flexCheckChecked9">
                                                صلاحية التعامل امام الجهات الحكوميه بالنيابه عن الشركة
                                            </label>
                                          </div>
                                    </div>
                                    <div class="card-footer  align-self-center">
                                        <div class="">
                                            <button class="btn save">حفظ</button>
                                            <button class="btn edit">تعديل</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
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
    <script src="js/main.js"></script>
</body>
</html>