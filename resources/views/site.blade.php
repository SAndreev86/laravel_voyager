@extends('template.layouts')
@section('content')



    @if(isset($goods) && is_object($goods))
        <section id="main-slider" class="no-margin">
            <div class="carousel slide">
                <ol class="carousel-indicators">
                    @foreach($slider as $index => $slide)
                        <li data-target="#main-slider" data-slide-to="0"
                            class="<?=($index == 0 ? " active" : "")?>"></li>
                    @endforeach
                </ol>
                <div class="carousel-inner">
                    @foreach($slider as $index => $slide)
                        <div class="item <?=($index == 0 ? " active" : "")?>"
                             style="background-image: url({{'/storage/app/public/'.$slide['background']}})">
                            <div class="container">
                                <div class="row slide-margin">
                                    <div class="col-sm-6">
                                        <div class="carousel-content">
                                            {!!$slide['description']!!}
                                            <a class="btn-slide animation animated-item-3" href="{{$slide['link']}}">Read
                                                More</a>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 hidden-xs animation animated-item-4">
                                        <div class="slider-img">
                                            <img src="{{'/storage/app/public/'.$slide['photo']}}" class="img-responsive">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div><!--/.item-->
                    @endforeach
                </div><!--/.carousel-inner-->
            </div><!--/.carousel-->
            <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
                <i class="fa fa-chevron-left"></i>
            </a>
            <a class="next hidden-xs" href="#main-slider" data-slide="next">
                <i class="fa fa-chevron-right"></i>
            </a>
        </section><!--/#main-slider-->
    @endif


    <section id="feature">
        {!!$page['body']!!}
    </section><!--/#feature-->

    {{--<section id="recent-works">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Последние поступления</h2>
            </div>
            <div class="row">
                @if(isset($goods) && is_object($goods))
                    @foreach($goods as $good)
                        <div class="col-xs-12 col-sm-4 col-md-3">
                            <div class="recent-work-wrap">
                                <h2 class="googs-name--center">{{$good['name']}}</h2>
                                <img class="img-responsive" src="{{$good['images']}}" alt="{{$good['name']}}">
                                <div class="overlay">
                                    <div class="recent-work-inner">
                                        <h3><a href="#">{{$good['name']}}</a></h3>
                                        <p>{{$good['description']}}</p>
                                        <a class="preview" href="{{$good['images']}}" rel="prettyPhoto"><i
                                                    class="fa fa-eye"></i> Показать</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#recent-works-->--}}

    <section id="partner">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Наши партнеры</h2>
            </div>

            <div class="partners">
                <ul>
                    @foreach($partner as $item)
                        <li><a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms"
                                             data-wow-delay="300ms" src="{{'/storage/app/public/'.$item['photo']}}"></a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div><!--/.container-->
    </section><!--/#partner-->

@endsection