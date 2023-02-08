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
                        <h2 class="content-header-title float-left mb-0">صفحة من نحن</h2>
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
                            <h4 class="card-title">صفحة من نحن</h4>
                        </div>
                        @foreach ($whos as $item)

                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-vertical" action="{{route('who.update')}}" enctype="multipart/form-data"
                                method="post">
                                <input type="hidden" name="_method" value="PUT">
                                    @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">

                                                <div class="form-group">
                                                    <label for="first-name-vertical">العنوان</label>
                                                    <input type="text" class="form-control" value="{{$item->title}}" name="title" placeholder="عنوان الصفحة">
                                                    @error('title')
                                                        <span class=" text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="first-name-vertical">صورة الصفحة الرئيسية</label>
                                                    <input type="file" class="form-control" name="image_home">
                                                    @error('image_home')
                                                        <span class=" text-danger">{{$message}}</span>
                                                    @enderror
                                                    <img src="{{asset('public/uploads/who_page/'.$item->image_home)}}" style="width: 150px" class="image_thumbnail image-preview" alt="">

                                                </div>



                                                <div class="form-group">
                                                    <label for="first-name-vertical">صورة</label>
                                                    <input type="file" class="form-control" name="image">
                                                    @error('image')
                                                        <span class=" text-danger">{{$message}}</span>
                                                    @enderror
                                                    <img src="{{asset('public/uploads/who_page/'.$item->image)}}" style="width: 150px" class="image_thumbnail image-preview" alt="">

                                                </div>



                                                <div class="form-group">
                                                    <label for="first-name-vertical">الوصف</label>
                                                    <textarea name="desc" class="form-control" id="" cols="30" rows="10">{{$item->desc}}</textarea>
                                                    @error('desc')
                                                        <span class=" text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>


                                                <div class="form-group">
                                                    <label for="first-name-vertical">رابط الفيديو</label>
                                                    <input type="text" id="first-name-vertical" value="{{$item->url_video}}" class="form-control" name="url_video" placeholder="رابط الفيديو">
                                                    @error('url_video')
                                                        <span class=" text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-4">
                                                    @php
                                                        $url = getYoutubeId($item->url_video);
                                                    @endphp

                                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/{{$url}}"  allowfullscreen></iframe>
                                                </div>


                                                <div class="form-group">
                                                    <label for="first-name-vertical">عنوان أسفل الصفحة</label>
                                                    <input type="text" class="form-control" name="title_bottom" value="{{$item->title_bottom}}" placeholder="عنوان الصفحة">
                                                    @error('title_bottom')
                                                        <span class=" text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="first-name-vertical">وصف أسفل الصفحة</label>
                                                    <textarea name="desc_bottom" class="form-control" id="" cols="30" rows="10">{{$item->desc_bottom}}</textarea>
                                                    @error('desc_bottom')
                                                        <span class=" text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>

                                                @endforeach



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
