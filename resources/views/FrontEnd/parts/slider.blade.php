<div class="axil-main-slider-area main-slider-style-5">
    <div class="container">
        <div class="slider-box-wrap">
            <div class="slider-activation-two axil-slick-dots">
                @foreach($sliders as $slider)
                <div class="single-slide slick-slide">
                    <div class="main-slider-content">
                        <span class="subtitle"><i class="fa-regular fa-face-thinking"></i>{{$slider->title}}</span>
                        <h1 class="title"> {{$slider->text}} </h1>
                        <div class="shop-btn">
                            <a href="{{$slider->button_link}}" class="axil-btn btn-bg-white">{{$slider->button_text}} </a>
                        </div>
                    </div>
                    <div class="main-slider-thumb">
                        <img src="{{get_file($slider->image)}}" alt="timer">
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
