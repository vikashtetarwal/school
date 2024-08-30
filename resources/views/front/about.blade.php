@extends('front.header')


@section('content')
<style>
    p {
        font-size: 17px;
    }
</style>
<div class="container-1">

</div>
<div class="container-fluid bg-danger p-5 text-light text-center">
    <b><a href="{{url('/')}}">Home</a> / About</b>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-3">
            <img class="img-fluid shadow rounded-circle" src="{{'asset/images/about-image-1.jpg'}}" alt="">

        </div>
        <div class="col">
            <h4><b>Vision</b></h4>
            <p class="text-grey">TO BE THE FOREMOST AND MOST SOUGHT-AFTER EDUCATION PROVIDER IN CBSE, IB AND CAMBRIDGE<br>
                PROGRAMMES ACROSS ALL DISTRICTS OF TAMILNADU, ESTABLISHING A PAN-INDIA AND WORLDWIDE<br>
                PRESENCE BY OFFERING EXTRAORDINARY EDUCATION, EXPOSURE AND EXPERIENCE</p>

            <h4><b>Misssion</b></h4>
            <p class="text-grey">To:</p>
            <div class="row">
                <div class="col">

                    <div class="d-flex">
                        <span style="font-size: 30px; margin-left: 30px; margin-right: 10px; ">&#x25E6;</span>
                        <p class="mt-2 p-0 m-0 text-grey">Deliver an infrastructure that is on par with global standards, conducive for collaborative learning and performing</p>
                    </div>

                    <div class="d-flex">
                        <span style="font-size: 30px; margin-left: 30px; margin-right: 10px; ">&#x25E6;</span>
                        <p class="mt-2 p-0 m-0 text-grey">Provide an open, happy and secure environment where all stakeholders are treated with care and respect</p>
                    </div>

                    <div class="d-flex">
                        <span style="font-size: 30px; margin-left: 30px; margin-right: 10px; ">&#x25E6;</span>
                        <p class="mt-2 p-0 m-0 text-grey">Ensure curriculum is rigorous and has an integrated engaging approach to teaching and learning, with engagements focusing on knowledge, skills and has relevance to real-life applications</p>
                    </div>

                    <div class="d-flex">
                        <span style="font-size: 30px; margin-left: 30px; margin-right: 10px; ">&#x25E6;</span>
                        <p class="mt-2 p-0 m-0 text-grey">Identify and continuously support all levels of Learners at every step by setting high expectation standards and ensuring documented progress</p>
                    </div>

                    <div class="d-flex">
                        <span style="font-size: 30px; margin-left: 30px; margin-right: 10px; ">&#x25E6;</span>
                        <p class="mt-2 p-0 m-0 text-grey">Create ample opportunities for children and teachers to get exposure to grow their confidence, knowledge and skills beyond the written curriculum</p>
                    </div>

                    <div class="d-flex">
                        <span style="font-size: 30px; margin-left: 30px; margin-right: 10px; ">&#x25E6;</span>
                        <p class="mt-2 p-0 m-0 text-grey">Achieve 3E’s – Extraordinary Education, Extraordinary Exposure & Extraordinary Experience to compete globally</p>
                    </div>




                </div>
            </div>

        </div>
    </div>

    <div class="row mt-5">
        <div class="col d-flex">
            <div>
                <h4 class="mb-3"><b>Our Philosophy</b></h4>
                <p class="text-grey about-para">We facilitate a safe, friendly and constructive school climate for our stakeholders, where they can be themselves<br>
                    and openly express their opinions, where they feel secure and learn to live virtuously. We believe that every child<br>
                    is unique and that children learn better when they are in a happy state of mind. Our learning engagements are<br>
                    designed to focus on developing skills that are required to become confident, lifelong learners to face the future.<br>
                    Integration of academic knowledge and skills across different scholastic and co-scholastic disciplines makes<br>
                    sure every learning leads to meaningful action.</p>

                <p class="text-grey about-para">We provide curriculum that is dynamic, encompassing, balanced, rigorous and relevant towards supporting<br>
                    children to be confident and well rounded. It is incessantly reviewed and revised to enhance student learning.<br>
                    Building research attitude in children to comprehend and approach local to global issues, and to create new<br>
                    knowledge is our commitment towards a brighter and better world. We are committed to creating ample<br>
                    opportunities for children to explore, learn and grow, thus providing exposure to the immediate world and<br>
                    beyond. We recognize and identify the strengths of children; foster them to follow their heart, motivate them to<br>
                    take up new challenges, believe in competing with themselves and improve, and help them realize the need to<br>
                    grow responsibly.</p>
            </div>
            <div>
                <img class="img-fluid shadow rounded-circle" src="{{'asset/images/about-right-2.jpg'}}" alt="" width="250px" style="margin-left: 50px;">
            </div>
        </div>


    </div>

</div>


@endsection