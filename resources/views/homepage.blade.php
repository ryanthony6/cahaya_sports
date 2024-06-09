{{-- @extends('layouts.app') --}}
@extends('layouts.app')

@section('content')
<section id="hero_section" style="background-image: url('{{ asset('Images/badminton_field.png') }}')">
    <div class="container text-center container_hero ">
        <h1 class="display-4 text-white title_hero">Introduce Your Product Quickly & Effectively</h1>
        <p class="lead text-white px-md-3"> <!-- Adding padding on medium and larger devices -->
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
        </p>
        <a class="btn btn-primary btn-lg mt-3" href="#" role="button">Book Now!</a>
    </div>
</section>


<section id="field_section">
    <div class="container">
        <h2 class="text-center pt-5 pb-4">Lapangan</h2>
            <div class="row">
                @for ($i = 1; $i <= 6; $i++)
                    <div class="col-md-4 mb-5 mb-md-4">
                        <div class="card">
                            <img src="{{ asset('/Images/badminton_field.png') }}" class="card-img-top" alt="Lapangan">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Lapangan {{ $i }}</h5>
                                    <h5 class="card-title">Rp. 100.000 / jam</h5>
                                        <a href="#" class="btn btn-primary">Details</a>
                                </div>
                        </div>
                    </div>
                @endfor
            </div>
    </div>
</section>

<section id="testimonials-section">
    <div class="gtco-testimonials">
        <h2>Reviews</h2>
        <div class="owl-carousel owl-carousel1 owl-theme">
      
            <div class="card text-center"><img class="card-img-top" src="https://images.unsplash.com/photo-1572561300743-2dd367ed0c9a?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=300&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=300" alt="">
              <div class="card-body">
                <h5>Marvel Juan <br />
            
                </h5>
                <p class="card-text">“ Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia illo quod ipsa cupiditate dolorum laboriosam et ex veniam quis? Nemo. ” </p>
              </div>
            </div>
            <div class="card text-center"><img class="card-img-top" src="https://images.unsplash.com/photo-1572561300743-2dd367ed0c9a?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=300&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=300" alt="">
              <div class="card-body">
                <h5>Edward Djohan <br />
                </h5>
                <p class="card-text">“ Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque illo, non voluptates nisi quo possimus culpa eius porro. A, adipisci!” </p>
              </div>
            </div>
            <div class="card text-center"><img class="card-img-top" src="https://images.unsplash.com/photo-1572561300743-2dd367ed0c9a?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=300&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=300" alt="">
              <div class="card-body">
                <h5>Kelvin Wu <br />
                </h5>
                <p class="card-text">“ Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam ducimus provident deserunt aut cumque quibusdam repudiandae, cupiditate natus labore perspiciatis!” </p>
              </div>
            </div>
    

        </div>
    </div>
</section>

<section id="contact-us">
    <div class="container">
        <h2 class="text-center pt-5 pb-4">Contact Us</h2>
        <div class="row">
            <div class="col-md-6">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="3"></textarea>
    </div>
</section>

@endsection

