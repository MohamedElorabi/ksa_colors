@include('front.layouts.header')


@foreach ($who as $item)
<div class="about-us-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <img src="{{asset('uploads/who_page/'.$item->image)}}" alt="">
                <h3>{{$item->title}}</h3>
                <p>{{$item->desc}}</p>
                <div class="video">
                    @php
                    $url = getYoutubeId($item->url_video);
                    @endphp
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/{{$url}}"  allowfullscreen></iframe>
                </div>
                <h2>{{$item->title_bottom}}</h2>
                <p>{{$item->desc_bottom}}</p>
            </div>
        </div>
    </div>
</div>
@endforeach

@include('front.layouts.footer')
