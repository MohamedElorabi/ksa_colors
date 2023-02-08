<!--=====================================================================-->
<div class="footer">
    <div class="container">
        @foreach ($settings as $setting)
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="content">
                    <img src="{{asset('uploads/genral_setting/'.$setting->logo_bottom)}}" class="image_thumbnail image-preview" alt="">

                    <h3>{{$setting->name_site}}</h3>
                    <ul class="social">
                        <li><a href="{{$setting->whats_num}}"><i class="fab fa-whatsapp"></i></a></li>
                        <li><a href="{{$setting->face_url}}"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="{{$setting->snap_url}}"><i class="fab fa-snapchat-ghost"></i></a></li>
                        <li><a href="{{$setting->twitter_url}}"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                    <ul class="menu">
                        <li><a href="{{route('home')}}"> الرئيسيه </a></li>
                        <li><a href="{{route('about')}}"> من نحن </a></li>
                        <li><a href="{{route('products')}}"> منتجاتنا </a></li>
                        <li><a href="{{route('contact_us')}}"> اتصل بنا </a></li>
                    </ul>
                    <p>مؤسسة محمد عبد الرحمن الصالب بن عفيف التجارية</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!--=====================================================================-->
<div class="chat">
    <ul>
        <li class="whats"><a href="{{$setting->whats_num}}"><i class="fab fa-whatsapp"></i></a></li>
        <li><a href="{{$setting->phone_1}}"><i class="fa fa-phone-alt"></i></a></li>
    </ul>
</div>
<!--=====================================================================-->
<script src="{{asset('front/js/jquery-1.11.0.min.js')}}"></script>
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/js/wow.min.js')}}"></script>
<script>new WOW().init();</script>
<script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('front/js/script.js')}}"></script>

<script type="text/javascript">

    $('#search').on('keyup', function (){

       $value= $(this).val();
       $.ajax({
           type:'get',
           url: '{{URL::to('search')}}',
           data: {'search':$value},
           success:function (data)
           {
               console.log(data);
               $(#content).html(data);
           }
       })
    });

</script>

</body>
</html>
