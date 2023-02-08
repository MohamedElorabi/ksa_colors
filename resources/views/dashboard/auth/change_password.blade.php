@extends('dashboard.layouts.app')

@section('content')
    @include('dashboard.layouts.inc.alert.success')
    @include('dashboard.layouts.inc.alert.errors')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">تغيير كلمة المرور</h2>
                        </div>
                    </div>
                </div>

            </div>
            <div class="content-detached">
                <div class="content-body">

                    <section id="basic-vertical-layouts">
                        <div class="row match-height">
                            <div class="col-md-12 col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">تغيير كلمة المرور</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <form class="form form-vertical" action="{{ route('postChangePassword') }}" method="post">
                                                @csrf
                                                <div class="form-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="first-name-vertical">الاسم</label>
                                                                <input type="text" class="form-control"  value="{{old('name')}}" name="name" placeholder="أدخل الاسم ">
                                                                @error('name')
                                                                <span class=" text-danger">{{$message}}</span>
                                                                @enderror
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="first-name-vertical">كلمة المرور الجديدة</label>
                                                                <input type="password" class="form-control" name="new_password" placeholder="أدخل كلمة المرور الجديدة">
                                                                @error('new_password')
                                                                <span class=" text-danger">{{$message}}</span>
                                                                @enderror
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="first-name-vertical">تأكيد كلمة المرور </label>
                                                                <input type="password" class="form-control" name="new_password_confirmation" placeholder="تأكيد كلمة المرور الجديدة">
                                                                @error('new_password_confirmation')
                                                                <span class=" text-danger">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">حفظ</button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>



                </div>
            </div>

        </div>
    </div>




@endsection
