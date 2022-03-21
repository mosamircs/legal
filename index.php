<?php 

    include __DIR__ . "/modules/header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Legal Clnic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.16/css/intlTelInput.css" integrity="sha512-gxWow8Mo6q6pLa1XH/CcH8JyiSDEtiwJV78E+D+QP0EVasFs8wKXq16G8CLD4CJ2SnonHr4Lm/yY2fSI2+cbmw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <div class="page-wrapper">
        <div class="logo-box">
            <div class="container">
                <div class="d-flex justify-content-center">
                    <div class="image">
                        <img src="images/logo.svg" alt="the legal clinic logo" srcset="" width="100%">
                    </div>
                </div>
            </div>
        </div>
        <div class="welcome-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6  col-md-6 col-sm-12 my-auto mx-auto">
                        <div class="welcome-msg text-center">
                            <h2>مرحبا بك</h2>
                            <h3>ابدا شركتك الان</h3>
                            <p>نسهل عليك دمج عملك على الإنترنت. تضمن عمليتنا خطوة بخطوة حصولك على شركة دقيقة وفي الوقت المناسب. ما عليك سوى اتباع نموذجنا البسيط واختيار نوع الشركة الذي تريده. يستغرق الأمر بضع دقائق فقط من وقتك لتأسيس شركتك عبر الإنترنت!</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 " style="text-align: -webkit-right; ">
                        <div class="card  mb-3">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="header-img">
                                            <img src="images/Login Image.svg" alt="login image" srcset="" width="100%">
                                        </div>
                                    </div>
                                    <div class="col-6 my-auto">
                                        <div class="header-content">
                                            <h3>مرحبا بك</h3>
                                            <p>برجاء تسجيل الدخول</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <form method = "POST" action = "layer1.php">
                                    <div class="mb-3">
                                        <label for="exampleInputusername1" class="form-label">اسم المستخدم</label>
                                        <input type="text" class="form-control" id="exampleInputusername1" name = "name" dir="rtl"required>
                                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                            من فضلك ادخل اسمك 
                                        </div>
                                        <label for="phone" hidden ></label>
                                    </div>
                                    <div class="mb-3">
                                      <label for="exampleInputEmail1" class="form-label">البريد الالكتروني</label>
                                      <input type="email" class="form-control" id="exampleInputEmail1" name = "email" aria-describedby="emailHelp"required>
                                      <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                            من فضلك ادخل بريدك الالكتروني 
                                        </div> 
                                      <label for="email" hidden></label>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exapleInputPhone1" class="form-label">رقم الهاتف</label>
                                        <input type="number"  name = "phone" />
                                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                 من فضلك ادخل رقم هاتفك  
                                        </div>    
                                    </div>
                                    <button type="submit" class="btn btn-primary" onclick="">التالي</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="turn-en">
                    <div class="cir-4">
                        <button>EN</button>
                        <img src="images/circle-en.svg" alt="" srcset="">
                    </div> -->
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.16/js/intlTelInput.min.js" integrity="sha512-Po9nSdYOcWIcoADdRjkAbRYPpR8OHjxzA/3RDUERZcDewTLzRTxbG4bUX7Sr7lVEcO3wTCzphdOBWgNFKVmxaA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        var input = document.querySelector("#exapleInputPhone1");
        window.intlTelInput(input,({
      // options here
    }));
 
    $(document).ready(function() {
        $('.iti__flag-container').click(function() { 
          var countryCode = $('.iti__selected-flag').attr('title');
          var countryCode = countryCode.replace(/[^0-9]/g,'')
          $('#exapleInputPhone1').val("");
          $('#exapleInputPhone1').val("+"+countryCode+" "+ $('#exapleInputPhone1').val());
       });
    });
    </script>
</body>
</html>