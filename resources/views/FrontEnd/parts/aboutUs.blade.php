<div class="axil-about-area about-style-3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="section-title-wrapper">
                            <span class="title-highlighter highlighter-primary2"><i class="fal fa-star"></i> {{helperTrans('web.about')}}
                            </span>
                    <h2 class="title">{{helperTrans('web.know about')}} </h2>
                </div>
                <div class="row">
                    @foreach($aboutUs as $key=>$row)
                        <div class="col-sm-6">
                            <div class="about-features">
                                <div class="spam sl-number">{{$key+1}}.</div>
                                <h4 class="title"> {{$row->title}} </h4>
                                <p style="font-size: 18px">
                                    {{$row->text}}
                                </p>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            <div class="col-lg-5">
                <div class="about-gallery">
                    <div class="row row--10">
                        <div class="col-12">
                            @foreach($aboutUsImages as $key=>$image)
                                @if(($key+1) % 2 == 1)
                                    <div class="thumbnail thumbnail-1">
                                        <img src="{{get_file($image->image)}}" alt="About">
                                    </div>
                                @endif
                            @endforeach

                        </div>
                        <div class="col-6">
                            @foreach($aboutUsImages as $key2=>$image)

                                @if(($key2+1) % 2 != 1)
                                    <div class="thumbnail thumbnail-1">
                                        <img src="{{get_file($image->image)}}" alt="About">
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
