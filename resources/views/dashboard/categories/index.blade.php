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
                        <h2 class="content-header-title float-left mb-0">الأقسام</h2>
                    </div>
                </div>
            </div>

            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrum-right">
                    <a href="{{route('categories.create')}}" class="btn btn-primary mb-2 waves-effect waves-light"><i class="feather icon-plus"></i>&nbsp; أضف</a>
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

                                @if(count($categories))
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">اسم القسم</th>
                                                <th scope="col">تعديل</th>
                                                <th scope="col">حذف</th>
                                            </tr>
                                        </thead>
                                        <tbody id="myTable">
                                            @foreach ($categories as $category)

                                            <tr>
                                                <td>{{$category->id}}</td>
                                                <td>{{$category->name}}</td>
                                                <td><a href="{{route('categories.edit', $category->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a></td>
                                                <td>
                                                    <form action="{{ route('categories.destroy',$category->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-xs"
                                                                onclick="return confirm('هل أنت متأكد من الحذف ؟')">
                                                                <i class="fa fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                @else
                                <div class="alert alert-danger" role="alert">
                                  للأسف لا يوجد بيانات
                                </div>
                              @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>




@endsection



