<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include __DIR__ . "/modules/header.php";  
include __DIR__ . "/modules/validation.php";
// $_SESSION["name"] = $_POST["name"];
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $validation = new validation();
       //name validation
       if (isset($_POST["name"])) {
           $validation->username_validation($_POST["name"]);
       }   
       //email validation 
       if (isset($_POST["email"])) {
           $validation->email_validation($_POST["email"]);

       }  
       //phone validation
       if (isset($_POST["phone"])) {
           $validation->phone_validation($_POST["phone"]);

       }  

    }
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
                <div class="circle active"><span>1</span></div>
                <div class="circle"><span>2</span></div>
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
                <form action="layer2.php" method="post">
                <!-- layer--1 money& people -->
                <div class="layer" id="layer-1">
                    <div class="buttons-tog"> 
                        <button class="btn selected" id="btn-money">شركات الاموال</button>
                        <button class="btn notseleted" id="btn-people">شركات الأشخاص</button>
                    </div>
                    <div  id="choice-Money">
                        <div class="pref text-center">
                            <p>هو مزيج من الأصول أو الموارد التي يمكن للشركة الاستفادة منها في تمويل أعمالها<br>
                                .ينتج رأس مال الشركات من تمويل الديون وحقوق الملكية</p>
                        </div>
                        <div class="choice d-flex justify-content-center flex-column align-items-end">
                            <div class="form-check d-flex flex-row-reverse mt-3">
                                <div><input class="form-check-input" type="radio" id="exampleRadios1" value="option1" name ="company_type" onclick="check1()" checked></div>
                                <div class="mr-3">
                                    <label class="form-check-label" for="exampleRadios1">
                                        <h2>شركة ذات مسئولية محدودة</h2>
                                        <p>هي شركة مملوكة<br>.لمستثمريها,حيث يمتلك كل مستثمر حصة بناءً على كمية الأسهم المشتراة</p>
                                    </label>
                                </div>
                                <div class="mr-8"><button class="btn down" id="down-1" >تنزيل ملف الشروط</button></div> 
                            </div>
                              <div class="form-check d-flex flex-row-reverse mt-3">
                                <div><input class="form-check-input" type="radio"id="exampleRadios2" value="option2" name ="company_type" onclick="check2()"></div>
                                <div class="mr-3">
                                    <label class="form-check-label" for="exampleRadios1">
                                        <h2>شركة مساهمة مصري</h2>
                                        <p>هو<br> .هيكل أعمال يحمي أصحابه من المسؤولية الشخصية عن ديونه أو التزاماته</p>
                                    </label>
                                </div>
                                <div class="mr-8"><button class="btn down"  id="down-2" style="display: none;">تنزيل ملف الشروط</button></div>
                            </div>
                              <div class="form-check d-flex flex-row-reverse mt-3">
                                <div><input class="form-check-input" type="radio"  id="exampleRadios3" value="option3" name ="company_type" onclick="check3()"></div>
                                <div class="mr-3">
                                    <label class="form-check-label" for="exampleRadios1">
                                        <h2>شركة شخص واحد ذات مسئولية محدودة</h2>
                                        <p> .لا ينصح به</p>
                                    </label>
                                </div>
                                <div class="mr-8"><button class="btn down"  id="down-3" style="display: none;">تنزيل ملف الشروط</button></div>
                            </div>
                        </div>
                    </div>
                    <div  id="choice-people" style="display: none;">
                            <div class="pref mt-2 mb-2 text-center">
                                <p>يتكون من شخصين أو أكثر يجمعون مواردهم لتكوين شركة ويوافقون على مشاركة المخاطر والأرباح والخسائر </p>
                            </div>
                            <div class="choice d-flex justify-content-center flex-column align-items-end">
                                <div class="form-check d-flex flex-row-reverse mt-3">
                                    <div><input class="form-check-input" type="radio" id="exampleRadios4" value="option4" name ="company_type" onclick="check4()" checked></div>
                                    <div class="mr-3">
                                        <label class="form-check-label" for="exampleRadios4">
                                            <h2>المنشاة الفردية</h2>
                                            <p>هي نوع من المشاريع<br> يملكها ويديرها شخص واحد .ولا يوجد فيها تمييز قانوني بين المالك والكيان التجاري </p>
                                        </label>
                                    </div>
                                    <div class="mr-8"><button class="btn down" id="down-4" >تنزيل ملف الشروط</button></div> 
                                </div>
                                  <div class="form-check d-flex flex-row-reverse mt-3">
                                    <div><input class="form-check-input" type="radio"id="exampleRadios5" value="option5" name ="company_type" onclick="check5()"></div>
                                    <div class="mr-3">
                                        <label class="form-check-label" for="exampleRadios1">
                                            <h2>شركة التضامن</h2>
                                            <p> العلاقة القائمة بين شخصين أو أكثر يقومون بأعمال مشتركة بهدف الربح.</p>
                                        </label>
                                    </div>
                                    <div class="mr-8"><button class="btn down"  id="down-5" style="display: none;">تنزيل ملف الشروط</button></div>
                                </div>
                                  <div class="form-check d-flex flex-row-reverse mt-3">
                                    <div><input class="form-check-input" type="radio" id="exampleRadios6" value="option6" name ="company_type"  onclick="check6()"></div>
                                    <div class="mr-3">
                                        <label class="form-check-label" for="exampleRadios1">
                                            <h2>شركة التوصية البسيطة</h2>
                                        <p>لا تتمتع الشراكة بوضع قانوني منفصل بصرف النظر عن شركائها<br>حيث يعرف الشركاء بشكل فردي كشريك ويعرفون بشكل جماعي باسم الشركة</p>
                                        </label>
                                    </div>
                                    <div class="mr-8"><button class="btn down"  id="down-6" style="display: none;">تنزيل ملف الشروط</button></div>
                                </div>
                                </div>
                            </div>
                        </div>
                <div class="btn-chose d-flex justify-content-center pb-3 pt-3">
                    <button class="btn next mr-3" id="next">التالي</button>
                    <button class="btn pre " id="prev">السابق</button>
                </div>
                </form>
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