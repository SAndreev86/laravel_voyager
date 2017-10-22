@extends('template.layouts')
@section('content')
<section id="contact-info">
    <div class="center">
        <h2>Как связаться с нами?</h2>
        <p class="lead">Ниже приведены контактный почтовый адрес, факс и адрес электронной почты.
        </p>
    </div>
    <div class="gmap-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 text-center">
                    <div class="gmap">
                        <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/d/embed?mid=1lo22nBeb_gAOfWID3zdR5MOcDW8" ></iframe>
                    </div>
                </div>

                <div class="col-sm-7 map-content">
                    <ul class="row">
                        <li class="col-sm-6">
                            <address>
                                <h5>Главный офис</h5>
                                <p>г. Ульяновск,<br>
                                    932071 Урицкого, д. 29д</p>
                                <p>Телефон:+7 (8422) 46-01-61 <br>
                                    Факс:+7 (8422) 46-26-28 <br>
                                    Email Upakovkin73@mail.ru</p>
                            </address>

                            <address>
                                <h5>Склад</h5>
                                <p>г. Ульяновск,<br>
                                     Герасимова, д. 10м.</p>
                                <p>Телефон:+7 (987) 685-85-26 <br>
                            </address>
                        </li>


                        <li class="col-sm-6">

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection