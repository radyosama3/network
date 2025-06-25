
@extends('layouts.app')

@section('title', ' شهادة ميلاد')

@section('content')
<div class="container my-5" id="certificate-content">
    <h2 class="mb-4 text-center">شهادة الميلاد</h2>

    <div class="card p-4 shadow">
        <p><strong>الاسم:</strong> {{ $birthCertificate->name }}</p>
        <p><strong>الرقم القومي:</strong> {{ $birthCertificate->national_id }}</p>
        <p><strong>تاريخ الميلاد:</strong> {{ $birthCertificate->birth_date }}</p>
        <p><strong>العنوان:</strong> {{ $birthCertificate->address }}</p>
        <p><strong>النوع:</strong> {{ $birthCertificate->gender == 'male' ? 'ذكر' : 'أنثى' }}</p>
    </div>

    <div class="text-center mt-4 d-print-none">
        <button class="btn btn-primary" onclick="printCertificate()">طباعة الشهادة</button>
    </div>
</div>

<script>
    function printCertificate() {
        const content = document.getElementById('certificate-content').innerHTML;
        const win = window.open('', '', 'width=900,height=700');
        win.document.write(`
            <html>
                <head>
                    <title>شهادة الميلاد</title>
                    <style>
                        body { font-family: 'Arial'; direction: rtl; text-align: right; padding: 20px; }
                        .card { border: 1px solid #ddd; padding: 20px; }
                        .d-print-none { display: none !important; }
                    </style>
                </head>
                <body>${content}</body>
            </html>
        `);
        win.document.close();
        win.print();
    }
</script>
@endsection
