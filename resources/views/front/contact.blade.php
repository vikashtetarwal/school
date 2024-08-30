@extends('front.header')


@section('content')
<div class="container-fluid">
    <div class="mapouter">
        <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=302012 Kr memorial senior secondary school vijayura bindayaka&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://embed-googlemap.com">embed-googlemap.com</a></div>
        
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <!-- Contact Details -->
        <div class="col-md-4 text-center border p-2 mt-5 rounded">
            <i class="fas fa-map-marker-alt fa-2x mb-3"></i>
            <h5>Address</h5>
            <p>1234 Street Name, City Name, State, 12345</p>
        </div>
        <div class="col-md-4 text-center border p-2 mt-5 rounded">
            <i class="fas fa-phone-alt fa-2x mb-3"></i>
            <h5>Phone Number</h5>
            <p>+1 234 567 890</p>
        </div>
        <div class="col-md-4 text-center border p-2 mt-5 rounded">
            <i class="fas fa-envelope fa-2x mb-3"></i>
            <h5>Email Address</h5>
            <p>support@yourwebsite.com</p>
        </div>
    </div>

    <hr>

    <!-- Contact Form -->


    <div class="row contact-form">
        <div class="col-md-12">
            <h4 class="mt-5 mb-4">Contact Form</h4>
            <form action="" method="post">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="visitor_name">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" class="form-control" name="visitor_email">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" class="form-control" name="visitor_phone">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea name="visitor_message" class="form-control h-200" cols="30" rows="10"></textarea>
                </div>

                <button type="submit" class="btn btn-danger mt_10">Send Message</button>
            </form>
        </div>
    </div>
    <!-- <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <form method="POST" action="">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="phone">Phone Number</label>
                        <input type="text" name="phone" id="phone" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" class="form-control" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-danger">Send Message</button>
                </form>
            </div>
        </div> -->
</div>
</div>
@endsection