@extends('layouts.base')
@push('styles')
    <style>
        .f-logo {
            max-width: 70px !important;
        }

        @media only screen and (max-width: 600px) {
            .h-logo {
                max-width: 110px !important;
            }
            .maps{
                max-width: 280px !important;
            }
        }
    </style>
@endpush
@section('content')
<section class="breadcrumb-section section-b-space" style="padding-top:20px;padding-bottom:20px;">
    <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Contact Us</h3>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{route('app.index')}}">
                                <i class="fas fa-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="contact-section">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-7">
                <div class="materialContainer">
                    <div class="material-details">
                        <div class="title title1 title-effect mb-1 title-left">
                            <h2>Contact Us</h2>
                            <p class="ms-0 w-100">Your email address will not be published. Required fields are
                                marked *</p>
                        </div>
                    </div>
                    <div class="row g-4 mt-md-1 mt-2">
                        <div class="col-md-6">
                            <label for="first" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="first" placeholder="Enter Your First Name"
                                required="">
                        </div>
                        <div class="col-md-6">
                            <label for="last" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="last" placeholder="Enter Your Last Name"
                                required="">
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email"
                                placeholder="Enter Your Email Address" required="">
                        </div>
                        <div class="col-md-6">
                            <label for="email2" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="email2"
                                placeholder="Enter Your Phone Number" required="">
                        </div>

                        <div class="col-12">
                            <label for="comment" class="form-label">Comment</label>
                            <textarea class="form-control" id="comment" rows="5" required=""></textarea>
                        </div>

                        <div class="col-auto">
                            <button class="btn btn-solid-default" type="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="contact-details">
                    <div>
                        <h2>Let's get in touch</h2>
                        <h5 class="font-light">We're open for any suggestion or just to have a chat</h5>
                        <div class="contact-box">
                            <div class="contact-icon">
                                <i data-feather="map-pin"></i>
                            </div>
                            <div class="contact-title">
                                <h4>Address :</h4>
                                <p>Jl. Tanjakan Panjang No.12, Pasirwangi, Kec. Ujung Berung, Kota Bandung, Jawa Barat 17117</p>
                                <iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.953675236492!2d107.7064293757966!3d-6.896144567486942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68dddf1c3c45a3%3A0x9d19fe1e4315d380!2sROCKRACK%20OVERLAND%20(SPESIALIS%20ROOFTENT)!5e0!3m2!1sid!2sid!4v1698914312600!5m2!1sid!2sid" width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>

                        <div class="contact-box">
                            <div class="contact-icon">
                                <i data-feather="phone"></i>
                            </div>
                            <div class="contact-title">
                                <h4>Phone Number :</h4>
                                <p>+62 0000000000</p>
                            </div>
                        </div>

                        <div class="contact-box">
                            <div class="contact-icon">
                                <i data-feather="mail"></i>
                            </div>
                            <div class="contact-title">
                                <h4>Email Address :</h4>
                                <p>info@rockrackoverland.id</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
