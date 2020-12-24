@extends('layouts.app')

@section('content')

    <section class="bg-dark p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 py-5">
                    <h1 class="h1 text-center  text-white">سامانه پاسخگویی تلفنی امداد خراسان رضوی</h1>
                    <strong>برای ورود به پنل پاسخگویی لطفا
                        <a href="{{ route("answering.responding.stage") }}" class="btn btn-outline-light">اینجا</a>
                        کلیک کنید</strong>
                </div>
            </div>
        </div>
    </section>

@endsection
