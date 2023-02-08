@extends('dashboard.layouts.app')

@section('content')

<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">عرض الرسالة </h2>
                    </div>
                </div>
            </div>
            <div class="btn-back">
                <a href="{{route('contact_us.index')}}" class="btn btn-primary"><i class="fa fa-reply" aria-hidden="true"></i></a>
            </div>
        </div>
        
        <div class="content-detached">
            <div class="content-body">
               
                <section id="basic-vertical-layouts">
                    <div class="row match-height">
                        <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-vertical" action="" method="">
                                          
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-vertical">الأسم</label>
                                                            <input type="text" id="first-name-vertical" disabled value="{{$contact->name}}" class="form-control">
                                                            
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-vertical">رقم الهاتف</label>
                                                            <input type="text" id="first-name-vertical" disabled value="{{$contact->phone}}" class="form-control">
                                                            
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-vertical">البريد الإلكترونى</label>
                                                            <input type="text" id="first-name-vertical" disabled value="{{$contact->email}}" class="form-control">
                                                            
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-vertical">نوع الرسالة</label>
                                                            <input type="text" id="first-name-vertical" disabled value="{{$contact->status}}" class="form-control">
                                                            
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-vertical">الرسالة</label>
                                                            <textarea  class="form-control" disabled id="" cols="30"  rows="10">{{$contact->message}}</textarea>
                                                            
                                                        </div>
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