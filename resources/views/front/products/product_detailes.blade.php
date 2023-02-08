@include('front.layouts.header')

<div class="all-details">
    <div class="container">

        <div class="row">

            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="info">
                    <h5>{{$product->name}}</h5>
                    <span>{{$product->category->name}}</span>
                    <hr>
                    <p>
                        {{$product->desc}}
                    </p>
                    <a href="{{route('contact_us')}}">تواصل معنا</a>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="pic">
                    <img src="{{asset($product->image)}}" alt="">
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="review">
                    <h4>تفاصيل المنتج</h4>
                    <hr>
                    <p>{{$product->desc}} </p>
                </div>
            </div>




            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="similar-pro">
                    <h4>منتجات مشابهه </h4>

                    @foreach ($related_products as $item)
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="one">
                            <div class="pic">
                                <a href="product-details.html"><img src="{{asset($product->image)}}" alt=""></a>
                            </div>
                            <div class="details">
                                <h4>{{$item->name}}</h4>
                                <span>{{$item->category->name}}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>

        </div>

    </div>
</div>











@include('front.layouts.footer')
