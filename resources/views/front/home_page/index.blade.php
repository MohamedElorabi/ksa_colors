

@include('front.layouts.header')
<!--=====================================================================-->
@foreach ($who as $item)
<div class="about-us">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="content">
                    <h2>{{$item->title}}</h2>
                    <p>{{$item->desc}}</p>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="pic">
                    <img src="{{asset('uploads/who_page/'.$item->image_home)}}" class="image_thumbnail image-preview" alt="">

                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
<!--=====================================================================-->
<div class="our-products">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="head">
                    <h2>منتجاتنا</h2>
                    <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.</p>
                </div>
            </div>



            @foreach ($products as $product)
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="one">
                    <div class="pic">
                        <img src="{{asset($product->image)}}" class="image_thumbnail image-preview" alt="">
                    </div>
                    <div class="details">
                        <h4>{{$product->name}}</h4>
                        <span>{{$product->category->name}}</span>
                    </div>
                </div>
            </div>
            @endforeach


            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="see-more">
                    <a href="{{route('products')}}">تصفح باقي المنتجات</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=====================================================================-->
@foreach ($who as $item)

<div class="tube">
    <div class="container">
        <div class="row">
            <img class="paper" src="images/paper.png" alt="">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="content">
                    <h4>{{$item->title_bottom}}</h4>
                    <p>{{$item->desc_bottom}}</p>
                </div>
            </div>
            <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="video">
                @php
                    $url = getYoutubeId($item->url_video);
                @endphp

                <iframe width="560" height="315" src="https://www.youtube.com/embed/{{$url}}"  allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=====================================================================-->
<div class="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="content">
                    <h2>{{$item->title_bottom}}</h2>
                    <p>{{$item->desc_bottom}}</p>
                    <a href="{{route('contact_us')}}">اتصل بنا</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endforeach


@include('front.layouts.footer')
