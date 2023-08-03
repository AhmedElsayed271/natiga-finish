<!DOCTYPE html>
<html dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>الشهاده</title>
    <!-- Bootstrap-Link -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap/js/bootstrap.bundle.min.js') }}" />
    <!-- Css file -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/main.css') }}" />
  
    <style>
        @media (max-width: 767px) {
            label {
                text-align: right;
            }
        }
    </style>
</head>

<body>

    <div class="container my-5">
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label text-xs-center">الاسم</label>
            <div class="col-sm-10">
                <input type="text" class="form-control " readonly value="{{ $result->name }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="email" class="col-sm-2 col-form-label ">اسم الام</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" readonly value="{{ $result->name_of_mother }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="email" class="col-sm-2 col-form-label">المدينة</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" readonly value="{{ $result->city }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="email" class="col-sm-2 col-form-label">السلوك</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" readonly value="{{ $result->behavior }}%">
            </div>
        </div>

        <div class="row mb-3">
            <label for="email" class="col-sm-2 col-form-label">الناتج الصافي</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" readonly value="{{ $result->natig_safy }}%">
            </div>
        </div>
        <div class="row mb-3">
            <label for="email" class="col-sm-2 col-form-label">الناتج الكامل</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" readonly value="{{ $result->natig_camel }}%">
            </div>
        </div>
        <div class="row mb-3">
            <label for="email" class="col-sm-2 col-form-label">الحالة</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" readonly value="{{ $result->Result }}">
            </div>
        </div>
    </div>
</body>

<!-- jQuery -->
<script src="{{ asset('assets/dashboard/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</html>
