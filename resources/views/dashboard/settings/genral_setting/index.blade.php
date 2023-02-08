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
                        <h2 class="content-header-title float-left mb-0">الإعدادات العامة</h2>
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
                            <h4 class="card-title">الإعدادات العامة</h4>
                        </div>

                        @foreach ($settings as $item)

                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-vertical" action="{{route('setting.update')}}" enctype="multipart/form-data"
                                method="post">
                                <input type="hidden" name="_method" value="PUT">
                                    @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">عنوان الموقع</label>
                                                    <input type="text" class="form-control" value="{{$item->name_site}}" name="name_site" placeholder="عنوان الموقع">
                                                    @error('name_site')
                                                        <span class=" text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="first-name-vertical">العنوان</label>
                                                    <input type="text" class="form-control" value="{{$item->address}}"  name="address" placeholder="العنوان">
                                                    @error('address')
                                                        <span class=" text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="first-name-vertical">رقم الجوال الأول</label>
                                                    <input type="text" class="form-control" value="{{$item->phone_1}}" name="phone_1" placeholder="رقم الجوال الأول">
                                                    @error('phone_1')
                                                        <span class=" text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="first-name-vertical">رقم الجوال الثانى</label>
                                                    <input type="text" class="form-control" value="{{$item->phone_2}}" name="phone_2" placeholder="رقم الجوال الثانى">
                                                    @error('phone_2')
                                                        <span class=" text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="first-name-vertical">رقم الجوال الثالث</label>
                                                    <input type="text" class="form-control" value="{{$item->phone_3}}" name="phone_3" placeholder="رقم الجوال الثالث">
                                                    @error('phone_3')
                                                        <span class=" text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="first-name-vertical">رقم الجوال الرابع</label>
                                                    <input type="text" class="form-control" value="{{$item->phone_4}}" name="phone_4" placeholder="رقم الجوال الرابع">
                                                    @error('phone_1')
                                                        <span class=" text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="first-name-vertical">رقم الواتساب</label>
                                                    <input type="text" class="form-control" value="{{$item->whats_num}}" name="whats_num" placeholder="رقم الواتساب">
                                                    @error('whats_num')
                                                        <span class=" text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="first-name-vertical">لوجو الموقع</label>
                                                    <input type="file" class="form-control" name="logo" placeholder="لوجو الموقع">

                                                    @error('logo')
                                                        <span class=" text-danger">{{$message}}</span>
                                                    @enderror
                                                    <img src="{{asset('public/uploads/genral_setting/'.$item->logo)}}" style="width: 150px" class="image_thumbnail image-preview" alt="">

                                                </div>

                                                <div class="form-group">
                                                    <label for="first-name-vertical">رابط الفيس بوك</label>
                                                    <input type="text" class="form-control" value="{{$item->face_url}}" name="face_url" placeholder="رابط الفيس بوك">
                                                    @error('face_url')
                                                        <span class=" text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="first-name-vertical">رابط تويتر</label>
                                                    <input type="text" class="form-control" value="{{$item->twitter_url}}" name="twitter_url" placeholder="رابط تويتر">
                                                    @error('twitter_url')
                                                        <span class=" text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="first-name-vertical">رابط سناب شات</label>
                                                    <input type="text" class="form-control" name="snap_url" value="{{$item->snap_url}}" placeholder="رابط سناب شات">
                                                    @error('snap_url')
                                                        <span class=" text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>


                                                <div class="form-group">
                                                    <label for="first-name-vertical"> لوجو الموقع بأسفل الصفحة</label>
                                                    <input type="file" class="form-control" name="logo_bottom" placeholder="لوجو الموقع">

                                                    @error('logo_bottom')
                                                        <span class=" text-danger">{{$message}}</span>
                                                    @enderror
                                                    <img src="{{asset('public/uploads/genral_setting/'.$item->logo_bottom)}}" style="width: 150px" class="image_thumbnail image-preview" alt="">

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

                        @endforeach
                    </div>
                </div>
            </div>
        </section>



    </div>
</div>

    </div>
</div>

@endsection
