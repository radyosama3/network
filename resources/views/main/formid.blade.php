
@extends('layouts.app')

@section('title', ' استخراج بطاقة الرقم القومي')

@section('content')
    <div class="container mt-4">
        <h3 class="mb-4 text-center">بطاقة الرقم القومي</h3>
        {{-- {{ route('birth-certificate.search') }} --}}
        <form action="" method="GET">
            <div class="mb-3">
                <label for="national_id" class="form-label">الرقم القومي</label>
                <input type="text" class="form-control" id="national_id" name="national_id" required maxlength="14" placeholder="أدخل الرقم القومي">
            </div>
            <div class="mb-3 text-center ">
                <button type="submit" class="btn btn-primary ">بحث</button>
            </div>
        </form>
    </div>
@endsection
