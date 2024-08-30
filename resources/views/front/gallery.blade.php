@extends('front.header')


@section('content')

<div class="container-1">

</div>
<div class="container-fluid bg-danger p-5 text-light text-center">
        <b><a href="{{url('/')}}">Home</a> / Gallery</b>
    </div>

     <div class="container mt-5">
    
    <!-- <div class="btn-group rounded" style="width:100%">
  <button class="gallery-tab-start" style="width:25%">All Function</button>
  <button style="width:25%">Events</button>
  <button style="width:25%">Blogs</button>
  <button class="gallery-tab-end" style="width:25%">Management</button>
</div>  -->

<!-- <div class="tab-container"> -->
        <div class="btn-group">
            <button style="width:25%" class="tab-button active gallery-tab-start" data-tab="tab1">All Function</button>
            <button style="width:25%" class="tab-button border" data-tab="tab2">Events</button>
            <button style="width:25%" class="tab-button border" data-tab="tab3">Blog</button>
            <button style="width:25%" class="tab-button gallery-tab-end border" data-tab="tab4">Awards</button>
        </div>
        <div class="tab-content">
            <div id="tab1" class="tab-content-item active">
                <!-- <p>Content for Tab 1</p> -->
                 <div >
                    
                 <img class="img-fluid shadow all-function" src="{{'asset/images/trainers/trainer-2.jpg'}}" alt="">
                 <img class="img-fluid shadow all-function" src="{{'asset/images/trainers/trainer-2.jpg'}}" alt="">
                 <img class="img-fluid shadow all-function" src="{{'asset/images/trainers/trainer-2.jpg'}}" alt="">
                 <img class="img-fluid shadow all-function" src="{{'asset/images/trainers/trainer-2.jpg'}}" alt="">
                 <img class="img-fluid shadow all-function" src="{{'asset/images/trainers/trainer-2.jpg'}}" alt="">
                 <img class="img-fluid shadow all-function" src="{{'asset/images/trainers/trainer-2.jpg'}}" alt="">
                 <img class="img-fluid shadow all-function" src="{{'asset/images/trainers/trainer-2.jpg'}}" alt="">
                 <img class="img-fluid shadow all-function" src="{{'asset/images/trainers/trainer-2.jpg'}}" alt="">
                 <img class="img-fluid shadow all-function" src="{{'asset/images/trainers/trainer-2.jpg'}}" alt="">
                 <img class="img-fluid shadow all-function" src="{{'asset/images/trainers/trainer-2.jpg'}}" alt="">
                 <img class="img-fluid shadow all-function" src="{{'asset/images/trainers/trainer-2.jpg'}}" alt="">
                 <img class="img-fluid shadow all-function" src="{{'asset/images/trainers/trainer-2.jpg'}}" alt="">
            
                 </div>
                </div>
            <div id="tab2" class="tab-content-item">
                <!-- <p>Content for Tab 2</p> -->
                 <img class="img-fluid shadow all-function" src="{{'asset/images/trainers/trainer-2-2.jpg'}}" alt="">
                 <img class="img-fluid shadow all-function" src="{{'asset/images/trainers/trainer-2-2.jpg'}}" alt="">
                 <img class="img-fluid shadow all-function" src="{{'asset/images/trainers/trainer-2-2.jpg'}}" alt="">
                 <img class="img-fluid shadow all-function" src="{{'asset/images/trainers/trainer-2-2.jpg'}}" alt="">
                 <img class="img-fluid shadow all-function" src="{{'asset/images/trainers/trainer-2-2.jpg'}}" alt="">
                 <img class="img-fluid shadow all-function" src="{{'asset/images/trainers/trainer-2-2.jpg'}}" alt="">
                 <img class="img-fluid shadow all-function" src="{{'asset/images/trainers/trainer-2-2.jpg'}}" alt="">
                 <img class="img-fluid shadow all-function" src="{{'asset/images/trainers/trainer-2-2.jpg'}}" alt="">
                 <img class="img-fluid shadow all-function" src="{{'asset/images/trainers/trainer-2-2.jpg'}}" alt="">
                 <img class="img-fluid shadow all-function" src="{{'asset/images/trainers/trainer-2-2.jpg'}}" alt="">
                 <img class="img-fluid shadow all-function" src="{{'asset/images/trainers/trainer-2-2.jpg'}}" alt="">
                 <img class="img-fluid shadow all-function" src="{{'asset/images/trainers/trainer-2-2.jpg'}}" alt="">
                 
            </div>
            <div id="tab3" class="tab-content-item">
                <!-- <p>Content for Tab 3</p> -->
                 <img class="img-fluid shadow all-function" src="{{'asset/images/trainers/trainer-1-2.jpg'}}" alt="">
                 <img class="img-fluid shadow all-function" src="{{'asset/images/trainers/trainer-1-2.jpg'}}" alt="">
                 <img class="img-fluid shadow all-function" src="{{'asset/images/trainers/trainer-1-2.jpg'}}" alt="">
                 <img class="img-fluid shadow all-function" src="{{'asset/images/trainers/trainer-1-2.jpg'}}" alt="">
                 <img class="img-fluid shadow all-function" src="{{'asset/images/trainers/trainer-1-2.jpg'}}" alt="">
                 <img class="img-fluid shadow all-function" src="{{'asset/images/trainers/trainer-1-2.jpg'}}" alt="">
                 <img class="img-fluid shadow all-function" src="{{'asset/images/trainers/trainer-1-2.jpg'}}" alt="">
                 <img class="img-fluid shadow all-function" src="{{'asset/images/trainers/trainer-1-2.jpg'}}" alt="">
                 <img class="img-fluid shadow all-function" src="{{'asset/images/trainers/trainer-1-2.jpg'}}" alt="">
                 <img class="img-fluid shadow all-function" src="{{'asset/images/trainers/trainer-1-2.jpg'}}" alt="">
                 <img class="img-fluid shadow all-function" src="{{'asset/images/trainers/trainer-1-2.jpg'}}" alt="">
                 <img class="img-fluid shadow all-function" src="{{'asset/images/trainers/trainer-1-2.jpg'}}" alt="">
            </div>

            <div id="tab4" class="tab-content-item">
                <!-- <p>Content for Tab 3</p> -->
                 <img class="img-fluid shadow all-function" src="{{'asset/images/trainers/trainer-1.jpg'}}" alt="">
                 <img class="img-fluid shadow all-function" src="{{'asset/images/trainers/trainer-1.jpg'}}" alt="">
                 <img class="img-fluid shadow all-function" src="{{'asset/images/trainers/trainer-1.jpg'}}" alt="">
                 <img class="img-fluid shadow all-function" src="{{'asset/images/trainers/trainer-1.jpg'}}" alt="">
                 <img class="img-fluid shadow all-function" src="{{'asset/images/trainers/trainer-1.jpg'}}" alt="">
                 <img class="img-fluid shadow all-function" src="{{'asset/images/trainers/trainer-1.jpg'}}" alt="">
                 <img class="img-fluid shadow all-function" src="{{'asset/images/trainers/trainer-1.jpg'}}" alt="">
                 <img class="img-fluid shadow all-function" src="{{'asset/images/trainers/trainer-1.jpg'}}" alt="">
                 <img class="img-fluid shadow all-function" src="{{'asset/images/trainers/trainer-1.jpg'}}" alt="">
                 <img class="img-fluid shadow all-function" src="{{'asset/images/trainers/trainer-1.jpg'}}" alt="">
                 <img class="img-fluid shadow all-function" src="{{'asset/images/trainers/trainer-1.jpg'}}" alt="">
                 <img class="img-fluid shadow all-function" src="{{'asset/images/trainers/trainer-1.jpg'}}" alt="">
                
            </div>
        </div>
    </div>
    <!-- </div>  -->


    <script src="script.js"></script>


    <script>
        document.addEventListener('DOMContentLoaded', () => {
    const buttons = document.querySelectorAll('.tab-button');
    const contents = document.querySelectorAll('.tab-content-item');

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            const targetTab = button.getAttribute('data-tab');

            // Remove active class from all buttons and contents
            buttons.forEach(btn => btn.classList.remove('active'));
            contents.forEach(content => content.classList.remove('active'));

            // Add active class to the clicked button and corresponding content
            button.classList.add('active');
            document.getElementById(targetTab).classList.add('active');
        });
    });

    // Open the first tab by default
    buttons[0].click();
});
    </script>




@endsection