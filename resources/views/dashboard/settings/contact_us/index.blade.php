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
                        <h2 class="content-header-title float-left mb-0">تواصل معنا</h2>
                    </div>
                </div>
            </div>


        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6">
            
            </div>
        </div>
        
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
                                                <th scope="col">الأسم</th>
                                                <th scope="col">رقم الجوال</th>
                                                <th scope="col">الإيميل</th>       
                                                <th scope="col">النوع</th>
                                                <th scope="col">عرض</th>
                                            </tr>
                                        </thead>
                                        <tbody id="myTable">
        
                                            @foreach ($contacts as $contact)          
                                            <tr>
                                                <td>{{$contact->id}}</td>
                                                <td>{{$contact->name}}</td>
                                                <td>{{$contact->phone}}</td>
                                                <td>{{$contact->email}}</td>
                                                <td>{{$contact->status}}</td>
                                                @if ($contact->status_read == 0)
                                                <td><a href="{{route('contact_us.show', $contact->id)}}" class="btn btn-primary"><i class="fa fa-eye"></i></a></td>
                                                @elseif ($contact->status_read == 1)
                                                <td><a href="{{route('contact_us.show', $contact->id)}}" class="btn btn-info"><i class="fa fa-edit"></i></a></td>                                                
                                                @endif
                                                                             
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