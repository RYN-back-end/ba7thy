<div class="about-us-video axil-section-gapcommon">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-6 col-12 ab-content">
                <h2 class="title"><span class="subtitle"><i class="fas fa-fire"></i> {{helperTrans('web.whatPresent')}}</span></h2>
                {!! $whatPresent->text !!}
            </div>
            <div class="col-lg-6 col-12">
                <div class="video-wrapper" style="background-image: url('{{get_file($whatPresent->image)}}')!important;background-size: contain !important;">
                    <a href="{{get_file($whatPresent->video)}}" data-fancybox="about-us-video"
                       class="play-btn"><i class="fa-light fa-play"></i>
                        <div class="waves-block">
                            <div class="waves wave-1"></div>
                            <div class="waves wave-2"></div>
                            <div class="waves wave-3"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
