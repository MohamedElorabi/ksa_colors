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
                        <h2 class="content-header-title float-left mb-0">المنتجات</h2>
                    </div>
                </div>
            </div>

            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrum-right">
                    <a href="{{route('products.create')}}" class="btn btn-primary mb-2 waves-effect waves-light"><i class="feather icon-plus"></i>&nbsp; أضف</a>
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
                                @if(count($products))
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">اسم المنتج</th>
                                                <th scope="col">وصف المنتج</th>
                                                <th scope="col">صورة المنتج</th>
                                                <th scope="col">القسم</th>
                                                <th scope="col">تعديل</th>
                                                <th scope="col">حذف</th>
                                            </tr>
                                        </thead>
                                        <tbody id="myTable">
                                            @foreach ($products as $product)

                                            <tr>
                                                <td>{{$product->id}}</td>
                                                <td>{{$product->name}}</td>
                                                <td>{{$product->desc}}</td>
                                                <td>
                                                    <img src="{{asset('public/'.$product->image)}}" width="150px" class="image_thumbnail image-preview" alt="">
                                                </td>
                                                <td>{{$product->category->name}}</td>
                                                <td><a href="{{route('products.edit', $product->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a></td>
                                                <td>
                                                    {{-- <form method="post" action="{{route('products.destroy', $product->id)}}">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button type="submit" class="btn btn-danger  show_confirm btn-xs"><i class="fa fa-trash"></i></button>
                                                    </form> --}}

                                                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">
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

{{ $products->links('dashboard.layouts.inc.my-paginate') }}


@endsection
