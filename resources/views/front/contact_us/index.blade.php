@include('front.layouts.header')
@include('dashboard.layouts.inc.alert.success')

<!--=======================================================================-->
<div class="requset-form">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-12">
                <form action="{{route('contact_us.store')}}" method="POST">
                    @csrf
                    <label> الاسم </label>
                    <input type="text" value="{{old('name')}}" name="name">
                    @error('name')
                        <span class=" text-danger">{{$message}}</span>
                    @enderror
                    <label> البريد الالكترونى </label>
                    <input type="email"  value="{{old('email')}}" name="email">
                    @error('email')
                        <span class=" text-danger">{{$message}}</span>
                    @enderror
                    <label> رقم الجوال </label>
                    <input type="text"  value="{{old('phone')}}" name="phone">
                    @error('phone')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                    <label for="">تحديد عنوان اتصالك   </label>
                    <select name="status" id="">
                        <option value="شكوى">شكوى</option>
                        <option value="إقتراح">إقتراح</option>
                    </select>
                    @error('status')
                    <span class="text-danger">{{$message}}</span>
                     @enderror

                    <label for="">محتوى رسالتك  </label>
                    <textarea name="message" id="">{{old('message')}}</textarea>
                    @error('message')
                    <span class=" text-danger">{{$message}}</span>
                     @enderror


                    <button>ارسال طلب</button>                    

                </form>
            </div>
            @foreach ($settings as $setting)
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="info" style="margin-top: 20px">
                        <i class="fa fa-map-marker-alt"></i>
                        <h5>العنوان</h5>
                        <h5>{{$setting->address}}</h5>
                        <span> <i class="fa fa-map-marked-alt"></i> خرائط جوجل </span>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="info" style="margin-top: 20px">
                        <i class="fa fa-headset"></i>
                        <h4>أرقام الاتصال الهاتفي</h4>
                        <span> <i class="fa fa-phone"></i>{{$setting->phone_1}}</span>
                        <span> <i class="fa fa-phone"></i>{{$setting->phone_2}}</span>
                        <span> <i class="fa fa-phone"></i>{{$setting->phone_3}}</span>
                        <span> <i class="fa fa-phone"></i>{{$setting->phone_4}}</span>

                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="map" >
    <iframe src="https://www.google.com/maps/d/embed?mid=19mM22zvMAjHy8YThLomJzdY7v5Q&ehbc=2E312F" width="100%" height="480"></iframe>
</div>
<!--=======================================================================-->
@include('front.layouts.footer')
