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
                        <h2 class="content-header-title float-left mb-0">البنرات</h2>
                    </div>
                </div>
            </div>

            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrum-right">
                    <a href="{{route('sliders.create')}}" class="btn btn-primary mb-2 waves-effect waves-light"><i class="feather icon-plus"></i>&nbsp; أضف</a>
                </div>
            </div>

        </div>
        @include('dashboard.layouts.inc.alert.success')

        <div class="content-detached">
            <div class="content-body">

                <div class="row" id="table-striped">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-content">
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">العنوان</th>
                                                <th scope="col">الوصف</th>
                                                <th scope="col">الصورة</th>
                                                <th scope="col">تعديل</th>
                                                <th scope="col">حذف</th>
                                            </tr>
                                        </thead>
                                        <tbody id="myTable">
                                            @foreach ($sliders as $slider)

                                            <tr>
                                                <td>{{$slider->id}}</td>
                                                <td>{{$slider->title}}</td>
                                                <td>{{$slider->desc}}</td>
                                                <td>
                                                    <img src="{{asset('public/uploads/sliders/'.$slider->image)}}" style="width: 150px" class="image_thumbnail image-preview" alt="">

                                                </td>
                                                <td><a href="{{route('sliders.edit', $slider->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a></td>
                                                <td>
                                                    <form method="post" action="{{route('sliders.destroy', $slider->id)}}">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button type="submit" class="btn btn-danger  show_confirm btn-xs"><i class="fa fa-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

@endsection
