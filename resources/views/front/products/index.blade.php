@include('front.layouts.header')


<div class="all-pro">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12"></div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="the-tabs">
                    <ul>
                    @foreach($category as $key =>$item)
                    <li class="{{ $key==0 ? 'active' : ''}}"><a href="#tab_{{ $item->id }}" data-toggle="tab" >{{$item->name}}</a></li>
                    @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="tab-content">
                    @foreach($category as $key => $item)
                    <div class="tab-pane tab-pane {{ $key==0 ? 'active' : ''}}"  id="tab_{{ $item->id }}">
                        <div id="menu1" class="tab-pane fade active in">
                            <div class="all">
                                @foreach($item->products as $product)
                                <div class="col-md-3 col-sm-3 col-xs-6">
                                    <div class="one">
                                        <div class="pic">
                                            <a href="{{route('product_detailes',$product->id)}}"><img src="{{asset($product->image)}}" alt=""></a>
                                        </div>
                                        <div class="details">
                                            <h4>{{$product->name}}</h4>
                                            <span>{{$product->category->name}}</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
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
