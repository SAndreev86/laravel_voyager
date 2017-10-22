@extends('template.layouts')
@section('content')
    <section id="portfolio">
        <div class="container">
            <div class="center">
                <h2>Portfolio</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt
                    ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>


            <ul class="portfolio-filter text-center">
                <li><a class="btn btn-default active" href="#" data-filter="*">Все товары</a></li>


                @if(isset($tags) && is_object($tags))
                    @foreach($tags as $tag)
                        <li><a class="btn btn-default" href="#" data-filter=".{{$tag}}">{{$tag}}</a></li>
                    @endforeach
                @endif
            </ul><!--/#portfolio-filter-->

            <div class="row">
                <div class="portfolio-items">

                    @if(isset($goods) && is_object($goods))
                        @foreach($goods as $good)

                            <div class="portfolio-item {{$good['filter']}} col-xs-12 col-sm-4 col-md-3">
                                <div class="recent-work-wrap">
                                    <h2 class="googs-name--center">{{$good['name']}}</h2>
                                    <img class="img-responsive"
                                         src="{{asset($good['images'])}}"
                                         alt="{{$good['name']}}">
                                    <div class="overlay">
                                        <div class="recent-work-inner">
                                            <h3><a href="#">{{$good['name']}}</a></h3>
                                            <p>{{$good['description']}}</p>
                                            <a class="preview"
                                               href="{{asset($good['images'])}}"
                                               rel="prettyPhoto"><i
                                                        class="fa fa-eye"></i> Показать</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!--/.portfolio-item-->

                        @endforeach
                    @endif

                </div>
            </div>
        </div>
    </section><!--/#portfolio-item-->

    <section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Company</h3>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">We are hiring</a></li>
                            <li><a href="#">Meet the team</a></li>
                            <li><a href="#">Copyright</a></li>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy policy</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Support</h3>
                        <ul>
                            <li><a href="#">Faq</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Forum</a></li>
                            <li><a href="#">Documentation</a></li>
                            <li><a href="#">Refund policy</a></li>
                            <li><a href="#">Ticket system</a></li>
                            <li><a href="#">Billing system</a></li>
                        </ul>
                    </div>
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Developers</h3>
                        <ul>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">SEO Marketing</a></li>
                            <li><a href="#">Theme</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Email Marketing</a></li>
                            <li><a href="#">Plugin Development</a></li>
                            <li><a href="#">Article Writing</a></li>
                        </ul>
                    </div>
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Our Partners</h3>
                        <ul>
                            <li><a href="#">Adipisicing Elit</a></li>
                            <li><a href="#">Eiusmod</a></li>
                            <li><a href="#">Tempor</a></li>
                            <li><a href="#">Veniam</a></li>
                            <li><a href="#">Exercitation</a></li>
                            <li><a href="#">Ullamco</a></li>
                            <li><a href="#">Laboris</a></li>
                        </ul>
                    </div>
                </div><!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->
@endsection