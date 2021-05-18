@extends('landing_layout.app')
    <!--Start Navbar section-->
    <!--Bootstrap inclusion-->
        
    <!--bootstrap inclusion-->
    <!--End Navbar section-->
    <!--Start header section-->

@section('content')
@include('landing_layout.inc.nav')
@include('landing_layout.inc.banners_slideshow')    
   
    
    <!--Start header section-->
    <main>
        <!--Start section training and skills building-->
        @include('landing_layout.inc.skills_building')
        <!--Start section  training certification-->
        @include('landing_layout.inc.training_sponsor')
        @include('landing_layout.inc.expert_road')
        {{-- <section class="training-cert">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="heading">
                            <h2>
                                جميع الدورات التدريبية المقدمة معتمدة من
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="icons">
                            <div class="row">
                                <div class="col-3 ">
                                    <a href="">
                                        <img src="../images/cert-icon.png">
                                    </a>
                                </div>
                                <div class="col-3 ">
                                    <a href="">
                                        <img src="../images/cert-icon.png">
                                    </a>
                                </div>
                                <div class="col-3">
                                    <a href="">
                                        <img src="../images/cert-icon.png">
                                    </a>
                                </div>
                                <div class="col-3">
                                    <a href="">
                                        <img src="../images/cert-icon.png">
                                    </a>
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!--end section  training certification-->
      
        <!--start section training-topics -->
        <section class="training-topics text-right pt-2">
            
            <div class="container">
                <div class="title my-4 mr-0">
                    <div class="m-0 p-0 d-inline" style="display: inline">
                        <img class="icon ml-4" src="../images/line-1.png">
                    </div>
                    
                    <h2 >
                        أهم موضوعات التدريب
                    </h2> 
                </div>
                <div class="topics">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                            <div class="topic position-relative">
                                <div class="overlay"></div>
                                <div class="content">
                                    <a href="" class="title">الإدارةلمالية</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                            <div class="topic position-relative">
                                <div class="overlay"></div>
                                <div class="content">
                                    <a href="" class="title">الإدارةلمالية</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                            <div class="topic position-relative">
                                <div class="overlay"></div>
                                <div class="content">
                                    <a href="" class="title">الإدارةلمالية</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-md-5 mt-3">
                        <a href="#" class="btn btn-show-more ml-3">
                            اكتشف كل الموضوعات
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!--End section training-topics -->
        <!--start section most recent trainings-->
        {{-- <section class="recent-trainings">
            <div class="container">
                <div class="heading">
                    <img class="icon" src="../images/line-1.png">
                    <h2>
                        احدث الدورات التدريبية
                    </h2>    
                </div>
                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <!--booststrap card-->
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="../images/tracks-3.png" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">اسس التقييم والمتابعة وإدارة
                                المشروعات</h5>
                                <span class="title">موضوع الدورة</span>
                              <p class="start-date">تبدأ فى: 5 مارس2021</p>
                              <div class="star-icons text-left">
                                    <span>
                                        <img class="star-icon" src="../images/star.png" width="25px" height="25px">
                                    </span>
                                    <span>
                                        <img class="star-icon" src="../images/star.png"width="25px" height="25px">
                                        </span>
                                    <span>
                                        <img class="star-icon" src="../images/star.png" width="25px" height="25px">
                                    </span>
                                    <span>
                                        <img class="star-icon" src="../images/star.png"width="25px" height="25px">
                                    </span>
                              </div>
                              <a href="#" class="btn know-more">اعرف المزيد</a>
                            </div>
                          </div>
                        <!--bootstrap card-->
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <!--booststrap card-->
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="../images/tracks-3.png" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">اسس التقييم والمتابعة وإدارة
                                المشروعات</h5>
                                <span class="title">موضوع الدورة</span>
                              <p class="start-date">تبدأ فى: 5 مارس2021</p>
                              <div class="star-icons text-left">
                                    <span>
                                        <img class="star-icon" src="../images/star.png" width="25px" height="25px">
                                    </span>
                                    <span>
                                        <img class="star-icon" src="../images/star.png"width="25px" height="25px">
                                        </span>
                                    <span>
                                        <img class="star-icon" src="../images/star.png" width="25px" height="25px">
                                    </span>
                                    <span>
                                        <img class="star-icon" src="../images/star.png"width="25px" height="25px">
                                    </span>
                              </div>
                              <a href="#" class="btn know-more">اعرف المزيد</a>
                            </div>
                          </div>
                        <!--bootstrap card-->
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <!--booststrap card-->
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="../images/tracks-3.png" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">اسس التقييم والمتابعة وإدارة
                                المشروعات</h5>
                                <span class="title">موضوع الدورة</span>
                              <p class="start-date">تبدأ فى: 5 مارس2021</p>
                              <div class="star-icons text-left">
                                    <span>
                                        <img class="star-icon" src="../images/star.png" width="25px" height="25px">
                                    </span>
                                    <span>
                                        <img class="star-icon" src="../images/star.png"width="25px" height="25px">
                                        </span>
                                    <span>
                                        <img class="star-icon" src="../images/star.png" width="25px" height="25px">
                                    </span>
                                    <span>
                                        <img class="star-icon" src="../images/star.png"width="25px" height="25px">
                                    </span>
                              </div>
                              <a href="#" class="btn know-more">اعرف المزيد</a>
                            </div>
                          </div>
                        <!--bootstrap card-->
                    </div>
                    <div class="col-md-6 col-xl-3 ">
                        <!--booststrap card-->
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="../images/tracks-3.png" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">اسس التقييم والمتابعة وإدارة
                                المشروعات</h5>
                                <span class="title">موضوع الدورة</span>
                              <p class="start-date">تبدأ فى: 5 مارس2021</p>
                              <div class="star-icons text-left">
                                    <span>
                                        <img class="star-icon" src="../images/star.png" width="25px" height="25px">
                                    </span>
                                    <span>
                                        <img class="star-icon" src="../images/star.png"width="25px" height="25px">
                                        </span>
                                    <span>
                                        <img class="star-icon" src="../images/star.png" width="25px" height="25px">
                                    </span>
                                    <span>
                                        <img class="star-icon" src="../images/star.png"width="25px" height="25px">
                                    </span>
                              </div>
                              <a href="#" class="btn know-more">اعرف المزيد</a>
                            </div>
                          </div>
                        <!--bootstrap card-->
                    </div>
                </div>
            </div>
        </section> --}}
        <!--end section most recent trainings-->
        <!--start section evaluation-->
        {{-- <section class="evaluation">
            <div class="container-fluid p-0 m-0">
                <div class="row p-0 m-0">
                    <div class="col-lg-5 col-sm-12  order-sm-first  order-xs-first p-0 m-0">
                        <div class="img-container">
                            <img class="img-fluid" src="../images/eval-1.png">
                        </div>
                    </div>
                    <div class="col-lg-7 col-sm-12 p-0 m-0">
                        <div class="text-info">
                            <div class="heading">
                                <img class="icon" src="../images/line-1.png">
                                <h2>
                                    التقييم المؤسسى 
                                </h2>    
                            </div>
                            <p>
                                يُشير مفهوم التقييم المؤسسي إلى العملية الاستراتيجية التي تشكل الجزء الأخير من
                                مجموعة الأنشطة التي تتضمنها الإدارة الاستراتيجية، بحيث يركز هذا الجانب على القيام
                                بنشاطين رئيسين؛ هما: تقييم أداء المؤسسة، ورصد الأخطاء والانحرافات بشكل مرحلي،
                                وعند نهاية العمل، واتخاذ كافة الإجراءات التصحيحية والتقويمية التي تعالج كافة الأخطاء،
                                وتحقق الأهداف المطلوبة، بناًء على دراسة لمنظومة العمل المتكاملة في المؤسسة،
                                والناتجة عن تفاعل عناصرها الداخلية الخاصة بما في ذلك نقاط القوة والضعف مع عناصرها
                                الخارجية المتمثلة في البيئة المحيطة، بما في ذلك الفرص والتهديدات.
                            </p>
                            <div class="button-holder">
                                <a href="" class="btn discover-more">
                                    اكتشف المزيد
                                </a>
                                <a href="" class="btn create-acc">
                                    انشء حساب لمؤسستك
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!--end section evaluation-->
        <!--Start section new-events-->
        {{-- <section class="new-events">
            <div class="container-fluid p-0 m-0">
                <div class="heading w-100 text-center">
                    <h2>اهم وأحدث الاخبار والفاعليات</h2>
                </div>
                <div class="nav-holder">
                     <!--Bootstrap nav-->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item " role="presentation">
                        <button class="nav-link news-tab active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">الاخبار</button>
                        </li>
                        <li class="nav-item " role="presentation">
                        <button class="nav-link funding" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">فرص التمويل و الشراكة</button>
                        </li>
                        <li class="nav-item " role="presentation">
                        <button class="nav-link articles" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">المقالات</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="news">
                                <div class="row m-0 p-0">
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="card">
                                            <div class="card-content position-relative">
                                                <div class="overlay"></div>
                                                <div class="on-top">
                                                    <div class="heading row">
                                                            <div class="col-8">
                                                                <h3>مصر الخير" و "الشباب والرياضة" يطلقان المرحلة"
                                                                    الأولى من مشروع ”دراجتك دخلك
                                                                </h3>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="icon">
                                                                    <a href="">
                                                                        <img src="../images/news-icon.png" width="50px" height="50px">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="date">
                                                        <p>الخميس 25 مارس 2</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="card margin-right">
                                            <div class="card-content position-relative">
                                                <div class="overlay"></div>
                                                <div class="on-top">
                                                    <div class="heading row">
                                                            <div class="col-8">
                                                                <h3>مصر الخير" و "الشباب والرياضة" يطلقان المرحلة"
                                                                    الأولى من مشروع ”دراجتك دخلك
                                                                </h3>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="icon">
                                                                    <a href="">
                                                                        <img src="../images/news-icon.png" width="50px" height="50px">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    
                                                    <div class="date">
                                                        <p>الخميس 25 مارس 2</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="button-holder">
                                    <a href="" class="btn discover-more">اكتشف المزيد</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="news">
                                <div class="row m-0 p-0">
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="card">
                                            <div class="card-content position-relative">
                                                <div class="overlay"></div>
                                                <div class="on-top">
                                                    <div class="heading row">
                                                            <div class="col-8">
                                                                <h3>مصر الخير" و "الشباب والرياضة" يطلقان المرحلة"
                                                                    الأولى من مشروع ”دراجتك دخلك
                                                                </h3>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="icon">
                                                                    <a href="">
                                                                        <img src="../images/news-icon.png" width="50px" height="50px">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="date">
                                                        <p>الخميس 25 مارس 2</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="card margin-right">
                                            <div class="card-content position-relative">
                                                <div class="overlay"></div>
                                                <div class="on-top">
                                                    <div class="heading row">
                                                            <div class="col-8">
                                                                <h3>مصر الخير" و "الشباب والرياضة" يطلقان المرحلة"
                                                                    الأولى من مشروع ”دراجتك دخلك
                                                                </h3>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="icon">
                                                                    <a href="">
                                                                        <img src="../images/news-icon.png" width="50px" height="50px">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    
                                                    <div class="date">
                                                        <p>الخميس 25 مارس 2</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="button-holder">
                                    <a href="" class="btn discover-more">اكتشف المزيد</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="news">
                                    <div class="row m-0 p-0">
                                        <div class="col-lg-6 col-sm-12">
                                            <div class="card">
                                                <div class="card-content position-relative">
                                                    <div class="overlay"></div>
                                                    <div class="on-top">
                                                        <div class="heading row">
                                                                <div class="col-8">
                                                                    <h3>مصر الخير" و "الشباب والرياضة" يطلقان المرحلة"
                                                                        الأولى من مشروع ”دراجتك دخلك
                                                                    </h3>
                                                                </div>
                                                                <div class="col-4">
                                                                    <div class="icon">
                                                                        <a href="">
                                                                            <img src="../images/news-icon.png" width="50px" height="50px">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <div class="date">
                                                            <p>الخميس 25 مارس 2</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-12">
                                            <div class="card margin-right">
                                                <div class="card-content position-relative">
                                                    <div class="overlay"></div>
                                                    <div class="on-top">
                                                        <div class="heading row">
                                                                <div class="col-8">
                                                                    <h3>مصر الخير" و "الشباب والرياضة" يطلقان المرحلة"
                                                                        الأولى من مشروع ”دراجتك دخلك
                                                                    </h3>
                                                                </div>
                                                                <div class="col-4">
                                                                    <div class="icon">
                                                                        <a href="">
                                                                            <img src="../images/news-icon.png" width="50px" height="50px">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        
                                                        <div class="date">
                                                            <p>الخميس 25 مارس 2</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="button-holder">
                                        <a href="" class="btn discover-more">اكتشف المزيد</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!--Bootstrap nav-->
                </div>
               
            </div>
        </section> --}}
        <!--end section new-events-->
        <!--Start section techincal advice-->
        {{-- <section class="training technical-advice">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-7 col-lg-7 col-sm-12 order">
                        <div class="text-info">
                            <div class="heading">
                                <img class="icon" src="../images/line-1.png">
                                <h2>
                                    الإستشارات الفنية  
                                </h2>    
                            </div>
                            <p>هي خدمةُتعنى بتقديم الاستشارات العامة في مجال براءات الاختراع
                                للمخترعين السعوديين من طلاب
                                التعليم العام، يُ قدمها عدد من المختصين بهدف مساعدة المخترع في
                                الجوانب الفنية لحماية براءة
                                اختراعه مجاًنا.
                            </p>
                            <div class="service-goals">
                                <h4>أهداف الخدمة:</h4>
                                <p class="goal"><i class="fas fa-circle"></i>
                                     تقديم استشارت فنية و إرشادية للمخترعين مجاًنا.</p>
                                <p class="goal"><i class="fas fa-circle"></i>
                                     تسهيل و توضيح خطوات التقديم للحصول على براءة اختراع.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-sm-12   img-aligner">
                        <div class="img-container">
                            <img class="img-fluid" src="../images/technical-1.png">
                        </div>
                    </div>
                </div>
               <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-2 col-lg-2 col-sm-4">
                            <div class="icon-holder">
                                <img class="img-fluid" src="../images/eval.png">
                                <p class="text">تقييم ومتابعة</p>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-sm-4">
                            <div class="icon-holder">
                                <img class="img-fluid" src="../images/finance.png">
                                <p class="text">مالية وحسابات</p>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-sm-4">
                            <div class="icon-holder">
                                <img class="img-fluid" src="../images/mangement.png">
                                <p class="text"> ادارة مشروعات</p>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-sm-4">
                            <div class="icon-holder">
                                <img class="img-fluid" src="../images/agriculture.png">
                                <p class="text"> زراعة </p>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-sm-4">
                            <div class="icon-holder">
                                <img class="img-fluid" src="../images/education.png">
                                <p class="text"> تعليم</p>
                            </div>
                        </div>
                        <div class="button-holder">
                            <a class="discover-more btn">سجل للحصول على استشارة</a>
                        </div>
                    </div>
               </div>
            </div>
        </section> --}}
        <!--Start section techincal advice-->
        <!--start section teachers and trainers-->
        {{-- <section class="trainers">
            <div class="container-fluid">
                <div class="heading">
                    <h2>مستشارى ومدربى مصر الخير</h2>
                </div>
                <!--bootstrap inclusion-->
                <div class="slider-holder">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <div class="trainers-group">
                                <div class="row justify-content-center">
                                    <div class="col-md-2 col-xl-3 col-sm-12">
                                        <div class="trainer">
                                            <img  class="img-fluid" src="../images/trainer-1.png">
                                            <p class="name">الاسم</p>
                                            <p class="name">المنصب و بعض المعلومات</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-xl-3 col-sm-12">
                                        <div class="trainer">
                                            <img  class="img-fluid" src="../images/trainer-2.png">
                                            <p class="name">الاسم</p>
                                            <p class="name">المنصب و بعض المعلومات</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-xl-3 col-sm-12">
                                        <div class="trainer">
                                            <img  class="img-fluid" src="../images/trainer-3.png">
                                            <p class="name">الاسم</p>
                                            <p class="name">المنصب و بعض المعلومات</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-xl-3 col-sm-12">
                                        <div class="trainer">
                                            <img  class="img-fluid" src="../images/trainer-4.png">
                                            <p class="name">الاسم</p>
                                            <p class="name">المنصب و بعض المعلومات</p>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                          </div>
                          <div class="carousel-item">
                            <div class="trainers-group">
                                <div class="row justify-content-center">
                                    <div class="col-md-2 col-xl-3 col-sm-12">
                                        <div class="trainer">
                                            <img  class="img-fluid" src="../images/trainer-1.png">
                                            <p class="name">الاسم</p>
                                            <p class="name">المنصب و بعض المعلومات</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-xl-3 col-sm-12">
                                        <div class="trainer">
                                            <img  class="img-fluid" src="../images/trainer-2.png">
                                            <p class="name">الاسم</p>
                                            <p class="name">المنصب و بعض المعلومات</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-xl-3 col-sm-12">
                                        <div class="trainer">
                                            <img  class="img-fluid" src="../images/trainer-3.png">
                                            <p class="name">الاسم</p>
                                            <p class="name">المنصب و بعض المعلومات</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-xl-3 col-sm-12">
                                        <div class="trainer">
                                            <img  class="img-fluid" src="../images/trainer-4.png">
                                            <p class="name">الاسم</p>
                                            <p class="name">المنصب و بعض المعلومات</p>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                          </div>
                          <div class="carousel-item">
                            <div class="trainers-group">
                                <div class="row justify-content-center">
                                    <div class="col-md-2 col-xl-3 col-sm-12">
                                        <div class="trainer">
                                            <img  class="img-fluid" src="../images/trainer-1.png">
                                            <p class="name">الاسم</p>
                                            <p class="name">المنصب و بعض المعلومات</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-xl-3 col-sm-12">
                                        <div class="trainer">
                                            <img  class="img-fluid" src="../images/trainer-2.png">
                                            <p class="name">الاسم</p>
                                            <p class="name">المنصب و بعض المعلومات</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-xl-3 col-sm-12">
                                        <div class="trainer">
                                            <img class="img-fluid" src="../images/trainer-3.png">
                                            <p class="name">الاسم</p>
                                            <p class="name">المنصب و بعض المعلومات</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-xl-3 col-sm-12">
                                        <div class="trainer">
                                            <img  class="img-fluid" src="../images/trainer-4.png">
                                            <p class="name">الاسم</p>
                                            <p class="name">المنصب و بعض المعلومات</p>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>
                <!--bootstrap inclusion-->
            </div>
        </section> --}}
        <!--end section teachers and trainers-->
    </main>
    <!--start footer section -->
    <footer class="footer">
        <section class="main-section container-fluid">
            <div class="row">
                <div class="col-lg-6 col-xl-6 col-md-6 col-sm-12">
                   <div class="part-container d-flex">
                    <div class="logo-holder">
                        <a href="">
                            <img class="img-fluid logo" src="../images/footer-logo-1.png">
                        </a>
                    </div>
                    <div class="links-holder">
                        <ul class="links list-unstyled">
                            <li>
                                <a href="">من نحن</a>
                            </li>
                            <li>
                                <a href="">التدريب وبناء القدرات</a>
                            </li>
                            <li>
                                <a href="">التقيم المؤسسي</a>
                            </li>
                            <li>
                                <a href="">الاخبار </a>
                            </li>
                            <li>
                                <a href=""> تواصل معنا</a>
                            </li>
                        </ul>
                    </div>
                   </div>
                </div>
                <div class="col-lg-6 col-xl-6 col-md-6 col-sm-12">
                    <div class="part-container d-flex">
                        <div class="heading">
                            <h4>شركائنا<br>والرعاة</h4>
                        </div>
                        <div class="logo-holder d-flex left-part">
                           <a href="" class="first-logo">
                                <img class="img-fluid" src="../images/footer-logo-2.JPG">
                           </a>
                           <a href="" class="second-logo">
                                <img class="img-fluid" src="../images/footer-logo-2.JPG">
                           </a>
                        </div>
                    </div>
                 </div>
            </div>
        </section>
        <section class="hotline">
            <div class="content container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="info">
                            <img class="img-fluid img-sizer" src="../images/phone-icon.png" >
                            <span class="text-content">الخط الساخن</span>
                            <span class="number">16140</span>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="info-left">
                            <img class="img-fluid img-sizer" src="../images/home-icon.png" >
                            <span class="text-content"> اتبرع على حساب</span>
                            <span class="number">100100</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="hotline app">
            <div class="content container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6  col-md-6 col-sm-12">
                        <div class="info">
                            <p class="text-content">حمل التطبيق من</p>
                            <a href="">
                                <p class="text-capitalize">App Store</p>
                                <i class="fab fa-apple"></i>
                            </a>
                            <a href="">
                                <p class="text-capitalize">google play</p>
                                <i class="fab fa-google-play"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6  col-md-6 col-sm-12">
                        <div class="info-left">
                            <p class="text-content"> تابعنا على</p>
                            <a href="">
                                <i class="fab fa-twitter-square fa-3x"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-facebook-square fa-3x"></i>
                            </a>   
                            <a href="">
                                <i class="fab fa-youtube fa-3x"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d-flex justify-content-end">
                        <p class="text">
                            <span>سياسة الخصوصية</span>بيان ملفات تعريف الارتباط 
                        </p>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <p class="text">
                                مؤسسة مصر الخير&copy;- جميع الحقوق محفوظة 2021
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    <!--end footer section -->

    <!--start js files-->
    @endsection     
    
    