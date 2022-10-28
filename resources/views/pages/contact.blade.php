@extends('layout.master')
@section('content')

    <section class="section-padding section-bg" id="section_2" xmlns="http://www.w3.org/1999/html">
        <form class="custom-form custom-text-box contact-form col-8 container text-center"   action="/contact" method="post" role="form">
            @csrf
            <h2 class="text-center ">Contact Us</h2>


            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <input type="text" name="first-name" id="first-name" class="form-control"
                           placeholder="First Name" required>
                </div>

                <div class="col-lg-6 col-md-6 col-12">
                    <input type="text" name="last-name" id="last-name" class="form-control"
                           placeholder="Last Name" required>
                </div>
            </div>

            <input type="email" name="email" id="email" class="form-control"
                   placeholder="Email" required>
            <input type="text" name="number" id="email"  class="form-control"
                   placeholder="Phone Number" required>
            <input type="text" name="country" id="email" class="form-control"
                   placeholder="Country" required>
            <input type="text" name="location" id="email"  class="form-control"
            placeholder="Location">
            <textarea name="message" rows="5" class="form-control" id="message"
                      placeholder="Your Message"></textarea>




            <button type="submit" class="form-control col-8">Send Message</button>

        </form>

    </section>
@endsection
