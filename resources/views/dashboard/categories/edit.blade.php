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
                        <h2 class="content-header-title float-left mb-0">تعديل بيانات القسم </h2>
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
                                    <h4 class="card-title">تعديل بيانات القسم</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-vertical" action="{{route('categories.update', $category->id)}}" method="post">
                                            <input type="hidden" name="_method" value="PUT">
                                            @csrf
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-vertical">اسم القسم</label>
                                                            <input type="text" id="first-name-vertical" value="{{$category->name}}" class="form-control" name="name" placeholder="اسم القسم">
                                                            @error('name')
                                                                <span class=" text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                   
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">تعديل</button>
                
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