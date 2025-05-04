@extends('layouts.app')

@section('title', 'الرئيسية')

@section('content')
    <header class="text-center py-5" style="background-image: url('{{ asset('storage/images/Egyptian_Police_Emblem.svg') }}'); background-size: cover; background-position: center; min-height: 600px; position: relative; width: 100vw; margin-left: calc(-50vw + 50%); margin-right: calc(-50vw + 50%);">
        <div class="container" style="position: relative; z-index: 2;">
            <h1 class="display-4 text-white">مرحباً بكم في البوابة الإلكترونية للوزارات المصرية</h1>
            <p class="lead text-white">يمكنك من هنا الوصول إلى خدمات جميع الوزارات بسهولة وسرعة.</p>
        </div>
        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(0,0,0,0.5);"></div>
    </header>

    <section class="py-5 text-center">
        <div class="container">
            <h2>خدمات مميزة</h2>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card p-3">
                        <h5>وزارة الداخلية</h5>
                        <p>استخراج أوراق رسمية مثل شهادة الميلاد والبطاقة.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3">
                        <h5>وزارة التعليم</h5>
                        <p>متابعة نتائج الطلاب وتنسيق الجامعات والمدارس.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3">
                        <h5>وزارة الصحة</h5>
                        <p>حجز مواعيد الكشف الطبي والحصول على الخدمات الصحية.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
