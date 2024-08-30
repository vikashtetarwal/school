@extends('front.header')


@section('content')

@include('sweetalert::alert')

<main>
        <section>
            <div class="banner">

                <div class="container ">
                    <div class="banner-text">
                        <h1>
                            Learning Today,
                            <br>
                            Leading Tomorrow
                        </h1>
                        <p>We are team of talented designers making websites with Bootstrap</p>
                        <button class=" main-1-but">Get Started</button>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="about">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-mid">
                            <div class="text-sec">
                                <h2 class="animated-element">Voluptatem dignissimos provident quasi corporis</h2>
                                <p class="animated-element">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <ul>
                                    <li class="animated-element">Ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.</li>
                                    <li class="animated-element"> Duis aute irure dolor in reprehenderit in voluptate
                                        velit.</li>
                                    <li class="animated-element"> Ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute</li>
                                </ul>
                                <p class="animated-element">irure dolor in reprehenderit in voluptate trideta
                                    storacalaperda mastiro dolore eu fugiat nulla pariatur.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="img-sec animated-element-2">
                                <img src="{{'asset/images/about.jpg'}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="school-contour">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="contour-box animated-element">
                                <h1 id="counter-1">1000+</h1>
                                <p>Students</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="contour-box animated-element">
                                <h1 id="counter-2">100</h1>
                                <p>Courses</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="contour-box animated-element">
                                <h1 id="counter-3">70</h1>
                                <p>Events</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="contour-box animated-element">
                                <h1 id="counter-4">50</h1>
                                <p>Trainers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>
        </section>
        <section>
            <div class="testimonal-main animated-element">
                <div class="container">
                    <div class="row">
                        <div class="owl-carousel testimonal owl-theme">


                            <div class="item">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="rivivel-left">
                                            <img src="{{'asset/images/testimonials/testimonials-1.jpg'}}" alt="">
                                            <h5>James Thomas</h5>
                                            <p>California, USA</p>
                                        </div>

                                    </div>
                                    <div class="col-md-8">
                                        <div class="rivivel-right">
                                            <h4>Best school Directory <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                    height="12" viewBox="0 0 12 12" fill="none">
                                                    <path
                                                        d="M5.50523 1.13672C5.63403 0.878906 5.84155 0.75 6.12777 0.75C6.414 0.75 6.62152 0.878906 6.75032 1.13672L8.14567 3.97266L11.2799 4.44531C11.5661 4.47396 11.7521 4.62435 11.838 4.89648C11.9239 5.16862 11.8666 5.40495 11.6663 5.60547L9.39076 7.81836L9.92744 10.9551C9.97037 11.2272 9.87735 11.4456 9.64837 11.6104C9.41938 11.7751 9.18325 11.793 8.93995 11.6641L6.12777 10.2031L3.31559 11.6641C3.0723 11.8073 2.83616 11.793 2.60718 11.6211C2.3782 11.4492 2.28518 11.2272 2.32811 10.9551L2.86479 7.81836L0.589283 5.60547C0.388924 5.40495 0.331679 5.16862 0.417547 4.89648C0.503415 4.62435 0.689462 4.47396 0.975689 4.44531L4.10987 3.97266L5.50523 1.13672Z"
                                                        fill="#FFCE4A" />
                                                </svg><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                    viewBox="0 0 12 12" fill="none">
                                                    <path
                                                        d="M5.50523 1.13672C5.63403 0.878906 5.84155 0.75 6.12777 0.75C6.414 0.75 6.62152 0.878906 6.75032 1.13672L8.14567 3.97266L11.2799 4.44531C11.5661 4.47396 11.7521 4.62435 11.838 4.89648C11.9239 5.16862 11.8666 5.40495 11.6663 5.60547L9.39076 7.81836L9.92744 10.9551C9.97037 11.2272 9.87735 11.4456 9.64837 11.6104C9.41938 11.7751 9.18325 11.793 8.93995 11.6641L6.12777 10.2031L3.31559 11.6641C3.0723 11.8073 2.83616 11.793 2.60718 11.6211C2.3782 11.4492 2.28518 11.2272 2.32811 10.9551L2.86479 7.81836L0.589283 5.60547C0.388924 5.40495 0.331679 5.16862 0.417547 4.89648C0.503415 4.62435 0.689462 4.47396 0.975689 4.44531L4.10987 3.97266L5.50523 1.13672Z"
                                                        fill="#FFCE4A" />
                                                </svg><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                    viewBox="0 0 12 12" fill="none">
                                                    <path
                                                        d="M5.50523 1.13672C5.63403 0.878906 5.84155 0.75 6.12777 0.75C6.414 0.75 6.62152 0.878906 6.75032 1.13672L8.14567 3.97266L11.2799 4.44531C11.5661 4.47396 11.7521 4.62435 11.838 4.89648C11.9239 5.16862 11.8666 5.40495 11.6663 5.60547L9.39076 7.81836L9.92744 10.9551C9.97037 11.2272 9.87735 11.4456 9.64837 11.6104C9.41938 11.7751 9.18325 11.793 8.93995 11.6641L6.12777 10.2031L3.31559 11.6641C3.0723 11.8073 2.83616 11.793 2.60718 11.6211C2.3782 11.4492 2.28518 11.2272 2.32811 10.9551L2.86479 7.81836L0.589283 5.60547C0.388924 5.40495 0.331679 5.16862 0.417547 4.89648C0.503415 4.62435 0.689462 4.47396 0.975689 4.44531L4.10987 3.97266L5.50523 1.13672Z"
                                                        fill="#FFCE4A" />
                                                </svg><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                    viewBox="0 0 12 12" fill="none">
                                                    <path
                                                        d="M5.50523 1.13672C5.63403 0.878906 5.84155 0.75 6.12777 0.75C6.414 0.75 6.62152 0.878906 6.75032 1.13672L8.14567 3.97266L11.2799 4.44531C11.5661 4.47396 11.7521 4.62435 11.838 4.89648C11.9239 5.16862 11.8666 5.40495 11.6663 5.60547L9.39076 7.81836L9.92744 10.9551C9.97037 11.2272 9.87735 11.4456 9.64837 11.6104C9.41938 11.7751 9.18325 11.793 8.93995 11.6641L6.12777 10.2031L3.31559 11.6641C3.0723 11.8073 2.83616 11.793 2.60718 11.6211C2.3782 11.4492 2.28518 11.2272 2.32811 10.9551L2.86479 7.81836L0.589283 5.60547C0.388924 5.40495 0.331679 5.16862 0.417547 4.89648C0.503415 4.62435 0.689462 4.47396 0.975689 4.44531L4.10987 3.97266L5.50523 1.13672Z"
                                                        fill="#FFCE4A" />
                                                </svg></h4>
                                            <p>Dolor sitam consectetur sed adipisc
                                                eiusmod tempor cididunt laboret do
                                                magn aliquat enim sed.</p>

                                        </div>
                                    </div>
                                    <div class="right-img">
                                        <img src="{{'asset/images/Vector1.png'}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="rivivel-left">
                                            <img src="{{'asset/images/testimonials/testimonials-2.jpg'}}" alt="">
                                            <h5>Tanya Benson</h5>
                                            <p>California, USA</p>
                                        </div>

                                    </div>
                                    <div class="col-md-8">
                                        <div class="rivivel-right">
                                            <h4>Best school Directory <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                    height="12" viewBox="0 0 12 12" fill="none">
                                                    <path
                                                        d="M5.50523 1.13672C5.63403 0.878906 5.84155 0.75 6.12777 0.75C6.414 0.75 6.62152 0.878906 6.75032 1.13672L8.14567 3.97266L11.2799 4.44531C11.5661 4.47396 11.7521 4.62435 11.838 4.89648C11.9239 5.16862 11.8666 5.40495 11.6663 5.60547L9.39076 7.81836L9.92744 10.9551C9.97037 11.2272 9.87735 11.4456 9.64837 11.6104C9.41938 11.7751 9.18325 11.793 8.93995 11.6641L6.12777 10.2031L3.31559 11.6641C3.0723 11.8073 2.83616 11.793 2.60718 11.6211C2.3782 11.4492 2.28518 11.2272 2.32811 10.9551L2.86479 7.81836L0.589283 5.60547C0.388924 5.40495 0.331679 5.16862 0.417547 4.89648C0.503415 4.62435 0.689462 4.47396 0.975689 4.44531L4.10987 3.97266L5.50523 1.13672Z"
                                                        fill="#FFCE4A" />
                                                </svg><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                    viewBox="0 0 12 12" fill="none">
                                                    <path
                                                        d="M5.50523 1.13672C5.63403 0.878906 5.84155 0.75 6.12777 0.75C6.414 0.75 6.62152 0.878906 6.75032 1.13672L8.14567 3.97266L11.2799 4.44531C11.5661 4.47396 11.7521 4.62435 11.838 4.89648C11.9239 5.16862 11.8666 5.40495 11.6663 5.60547L9.39076 7.81836L9.92744 10.9551C9.97037 11.2272 9.87735 11.4456 9.64837 11.6104C9.41938 11.7751 9.18325 11.793 8.93995 11.6641L6.12777 10.2031L3.31559 11.6641C3.0723 11.8073 2.83616 11.793 2.60718 11.6211C2.3782 11.4492 2.28518 11.2272 2.32811 10.9551L2.86479 7.81836L0.589283 5.60547C0.388924 5.40495 0.331679 5.16862 0.417547 4.89648C0.503415 4.62435 0.689462 4.47396 0.975689 4.44531L4.10987 3.97266L5.50523 1.13672Z"
                                                        fill="#FFCE4A" />
                                                </svg><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                    viewBox="0 0 12 12" fill="none">
                                                    <path
                                                        d="M5.50523 1.13672C5.63403 0.878906 5.84155 0.75 6.12777 0.75C6.414 0.75 6.62152 0.878906 6.75032 1.13672L8.14567 3.97266L11.2799 4.44531C11.5661 4.47396 11.7521 4.62435 11.838 4.89648C11.9239 5.16862 11.8666 5.40495 11.6663 5.60547L9.39076 7.81836L9.92744 10.9551C9.97037 11.2272 9.87735 11.4456 9.64837 11.6104C9.41938 11.7751 9.18325 11.793 8.93995 11.6641L6.12777 10.2031L3.31559 11.6641C3.0723 11.8073 2.83616 11.793 2.60718 11.6211C2.3782 11.4492 2.28518 11.2272 2.32811 10.9551L2.86479 7.81836L0.589283 5.60547C0.388924 5.40495 0.331679 5.16862 0.417547 4.89648C0.503415 4.62435 0.689462 4.47396 0.975689 4.44531L4.10987 3.97266L5.50523 1.13672Z"
                                                        fill="#FFCE4A" />
                                                </svg><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                    viewBox="0 0 12 12" fill="none">
                                                    <path
                                                        d="M5.50523 1.13672C5.63403 0.878906 5.84155 0.75 6.12777 0.75C6.414 0.75 6.62152 0.878906 6.75032 1.13672L8.14567 3.97266L11.2799 4.44531C11.5661 4.47396 11.7521 4.62435 11.838 4.89648C11.9239 5.16862 11.8666 5.40495 11.6663 5.60547L9.39076 7.81836L9.92744 10.9551C9.97037 11.2272 9.87735 11.4456 9.64837 11.6104C9.41938 11.7751 9.18325 11.793 8.93995 11.6641L6.12777 10.2031L3.31559 11.6641C3.0723 11.8073 2.83616 11.793 2.60718 11.6211C2.3782 11.4492 2.28518 11.2272 2.32811 10.9551L2.86479 7.81836L0.589283 5.60547C0.388924 5.40495 0.331679 5.16862 0.417547 4.89648C0.503415 4.62435 0.689462 4.47396 0.975689 4.44531L4.10987 3.97266L5.50523 1.13672Z"
                                                        fill="#FFCE4A" />
                                                </svg></h4>
                                            <p>Dolor sitam consectetur sed adipisc
                                                eiusmod tempor cididunt laboret do
                                                magn aliquat enim sed.</p>

                                        </div>
                                    </div>
                                    <div class="right-img">
                                        <img src="{{'asset/images/Vector1.png'}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="rivivel-left">
                                            <img src="{{'asset/images/testimonials/testimonials-5.jpg'}}" alt="">
                                            <h5>James Thomas</h5>
                                            <p>California, USA</p>
                                        </div>

                                    </div>
                                    <div class="col-md-8">
                                        <div class="rivivel-right">
                                            <h4>Best school Directory <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                    height="12" viewBox="0 0 12 12" fill="none">
                                                    <path
                                                        d="M5.50523 1.13672C5.63403 0.878906 5.84155 0.75 6.12777 0.75C6.414 0.75 6.62152 0.878906 6.75032 1.13672L8.14567 3.97266L11.2799 4.44531C11.5661 4.47396 11.7521 4.62435 11.838 4.89648C11.9239 5.16862 11.8666 5.40495 11.6663 5.60547L9.39076 7.81836L9.92744 10.9551C9.97037 11.2272 9.87735 11.4456 9.64837 11.6104C9.41938 11.7751 9.18325 11.793 8.93995 11.6641L6.12777 10.2031L3.31559 11.6641C3.0723 11.8073 2.83616 11.793 2.60718 11.6211C2.3782 11.4492 2.28518 11.2272 2.32811 10.9551L2.86479 7.81836L0.589283 5.60547C0.388924 5.40495 0.331679 5.16862 0.417547 4.89648C0.503415 4.62435 0.689462 4.47396 0.975689 4.44531L4.10987 3.97266L5.50523 1.13672Z"
                                                        fill="#FFCE4A" />
                                                </svg><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                    viewBox="0 0 12 12" fill="none">
                                                    <path
                                                        d="M5.50523 1.13672C5.63403 0.878906 5.84155 0.75 6.12777 0.75C6.414 0.75 6.62152 0.878906 6.75032 1.13672L8.14567 3.97266L11.2799 4.44531C11.5661 4.47396 11.7521 4.62435 11.838 4.89648C11.9239 5.16862 11.8666 5.40495 11.6663 5.60547L9.39076 7.81836L9.92744 10.9551C9.97037 11.2272 9.87735 11.4456 9.64837 11.6104C9.41938 11.7751 9.18325 11.793 8.93995 11.6641L6.12777 10.2031L3.31559 11.6641C3.0723 11.8073 2.83616 11.793 2.60718 11.6211C2.3782 11.4492 2.28518 11.2272 2.32811 10.9551L2.86479 7.81836L0.589283 5.60547C0.388924 5.40495 0.331679 5.16862 0.417547 4.89648C0.503415 4.62435 0.689462 4.47396 0.975689 4.44531L4.10987 3.97266L5.50523 1.13672Z"
                                                        fill="#FFCE4A" />
                                                </svg><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                    viewBox="0 0 12 12" fill="none">
                                                    <path
                                                        d="M5.50523 1.13672C5.63403 0.878906 5.84155 0.75 6.12777 0.75C6.414 0.75 6.62152 0.878906 6.75032 1.13672L8.14567 3.97266L11.2799 4.44531C11.5661 4.47396 11.7521 4.62435 11.838 4.89648C11.9239 5.16862 11.8666 5.40495 11.6663 5.60547L9.39076 7.81836L9.92744 10.9551C9.97037 11.2272 9.87735 11.4456 9.64837 11.6104C9.41938 11.7751 9.18325 11.793 8.93995 11.6641L6.12777 10.2031L3.31559 11.6641C3.0723 11.8073 2.83616 11.793 2.60718 11.6211C2.3782 11.4492 2.28518 11.2272 2.32811 10.9551L2.86479 7.81836L0.589283 5.60547C0.388924 5.40495 0.331679 5.16862 0.417547 4.89648C0.503415 4.62435 0.689462 4.47396 0.975689 4.44531L4.10987 3.97266L5.50523 1.13672Z"
                                                        fill="#FFCE4A" />
                                                </svg><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                    viewBox="0 0 12 12" fill="none">
                                                    <path
                                                        d="M5.50523 1.13672C5.63403 0.878906 5.84155 0.75 6.12777 0.75C6.414 0.75 6.62152 0.878906 6.75032 1.13672L8.14567 3.97266L11.2799 4.44531C11.5661 4.47396 11.7521 4.62435 11.838 4.89648C11.9239 5.16862 11.8666 5.40495 11.6663 5.60547L9.39076 7.81836L9.92744 10.9551C9.97037 11.2272 9.87735 11.4456 9.64837 11.6104C9.41938 11.7751 9.18325 11.793 8.93995 11.6641L6.12777 10.2031L3.31559 11.6641C3.0723 11.8073 2.83616 11.793 2.60718 11.6211C2.3782 11.4492 2.28518 11.2272 2.32811 10.9551L2.86479 7.81836L0.589283 5.60547C0.388924 5.40495 0.331679 5.16862 0.417547 4.89648C0.503415 4.62435 0.689462 4.47396 0.975689 4.44531L4.10987 3.97266L5.50523 1.13672Z"
                                                        fill="#FFCE4A" />
                                                </svg></h4>
                                            <p>Dolor sitam consectetur sed adipisc
                                                eiusmod tempor cididunt laboret do
                                                magn aliquat enim sed.</p>

                                        </div>
                                    </div>
                                    <div class="right-img">
                                        <img src="{{'asset/images/Vector1.png'}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>

            <div class="container">

                <div class="news">
                    <div class="doctor-slider">

                        <div class="container-fluid">
                            
                            <div class="row">
                                <div class="owl-carousel doctor-slider-2 owl-theme">
                                    <div class="item">
                                        <div class="img-sec">
                                            <img class="rounded" src="{{'asset/images/trainers/trainer-1-2.jpg'}}" alt="">
                                            <div class="reting-s">
                                                <h1>05</h1>
                                                <p>Apr</p>
                                            </div>
                                        </div>
                                        <div class="other-sec">
                                            <div class="user-deselt "> <a href="#">Jilly Smith</a><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="13"
                                                    viewBox="0 0 16 13" fill="none">
                                                    <path
                                                        d="M13.3103 4.60762C14.503 5.41797 15.2645 6.62696 15.2645 7.98348C15.2645 9.13073 14.718 10.1729 13.8311 10.9592C14.0375 11.3866 14.3262 11.8731 14.7419 12.3689C13.9419 12.3689 12.975 12.2911 12.089 11.991C11.3896 12.2522 10.6147 12.4021 9.7938 12.4021C8.92333 12.4021 8.10631 12.2311 7.37708 11.9387C10.8249 11.3896 13.4432 8.8336 13.4432 5.76734C13.4432 5.37048 13.3946 4.98371 13.3103 4.60762ZM0.678462 11.08C0.59246 10.9156 0.60978 10.7161 0.723554 10.5698C1.10847 10.0711 1.42381 9.527 1.66181 8.95144C0.602016 7.96834 0 6.65457 0 5.29538C0 2.37457 2.68518 -8.10623e-05 5.99059 -8.10623e-05C9.29601 -8.10623e-05 11.983 2.37545 11.983 5.29627C11.983 8.26636 9.35125 10.5926 5.99059 10.5926C5.54535 10.5926 4.26965 10.4047 3.70019 10.305C2.63561 10.9764 1.63016 11.3098 1.1249 11.3335C1.11803 11.3344 1.10937 11.3344 1.1019 11.3344C0.925121 11.3344 0.761777 11.2367 0.678462 11.08ZM0.95558 5.29538C0.95558 6.49487 1.51549 7.61392 2.53229 8.44505C2.68727 8.57239 2.7455 8.78314 2.67772 8.97222C2.54573 9.33703 2.38806 9.69025 2.2056 10.0313C2.54184 9.88112 2.92796 9.6769 3.33796 9.40737C3.44308 9.33614 3.57387 9.31328 3.70019 9.33792C4.11288 9.42429 5.61493 9.64187 5.99239 9.64187C8.8639 9.64187 11.0295 7.77243 11.0295 5.29538C11.0295 2.89877 8.77044 0.948887 5.99239 0.948887C3.21463 0.948887 0.95558 2.89877 0.95558 5.29538Z"
                                                        fill="#34A3D5" />
                                                </svg> <a href="#">No Comments</a></div>
                                            <h2>Best school Network Directory
                                                For Physicians & Clients</h2>
                                            <p>Quam arcu pretium quis quam sed, laorey
                                                afficits volutpat lobortis sem consq
                                                consequat lore dolor ...</p>
                                            <button>Read More <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                    height="14" viewBox="0 0 20 14" fill="none">
                                                    <g clip-path="url(#clip0_50_776)">
                                                        <path
                                                            d="M13.6474 1.35498L12.3024 2.73877L15.8298 6.36963H0.476562V8.32471H15.8298L12.3024 11.9556L13.6474 13.3394L19.4715 7.34717L13.6474 1.35498Z"
                                                            fill="#2FC7B6" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_50_776">
                                                            <rect width="19.01" height="13" fill="white"
                                                                transform="matrix(1 0 0 -1 0.46875 13.5298)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg></button>

                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="img-sec">
                                            <img class="rounded" src="{{'asset/images/trainers/trainer-1.jpg'}}" alt="">
                                            <div class="reting-s">
                                                <h1>05</h1>
                                                <p>Apr</p>
                                            </div>
                                        </div>
                                        <div class="other-sec">
                                            <div class="user-deselt "> <a href="#">Jilly Smith</a><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="13"
                                                    viewBox="0 0 16 13" fill="none">
                                                    <path
                                                        d="M13.3103 4.60762C14.503 5.41797 15.2645 6.62696 15.2645 7.98348C15.2645 9.13073 14.718 10.1729 13.8311 10.9592C14.0375 11.3866 14.3262 11.8731 14.7419 12.3689C13.9419 12.3689 12.975 12.2911 12.089 11.991C11.3896 12.2522 10.6147 12.4021 9.7938 12.4021C8.92333 12.4021 8.10631 12.2311 7.37708 11.9387C10.8249 11.3896 13.4432 8.8336 13.4432 5.76734C13.4432 5.37048 13.3946 4.98371 13.3103 4.60762ZM0.678462 11.08C0.59246 10.9156 0.60978 10.7161 0.723554 10.5698C1.10847 10.0711 1.42381 9.527 1.66181 8.95144C0.602016 7.96834 0 6.65457 0 5.29538C0 2.37457 2.68518 -8.10623e-05 5.99059 -8.10623e-05C9.29601 -8.10623e-05 11.983 2.37545 11.983 5.29627C11.983 8.26636 9.35125 10.5926 5.99059 10.5926C5.54535 10.5926 4.26965 10.4047 3.70019 10.305C2.63561 10.9764 1.63016 11.3098 1.1249 11.3335C1.11803 11.3344 1.10937 11.3344 1.1019 11.3344C0.925121 11.3344 0.761777 11.2367 0.678462 11.08ZM0.95558 5.29538C0.95558 6.49487 1.51549 7.61392 2.53229 8.44505C2.68727 8.57239 2.7455 8.78314 2.67772 8.97222C2.54573 9.33703 2.38806 9.69025 2.2056 10.0313C2.54184 9.88112 2.92796 9.6769 3.33796 9.40737C3.44308 9.33614 3.57387 9.31328 3.70019 9.33792C4.11288 9.42429 5.61493 9.64187 5.99239 9.64187C8.8639 9.64187 11.0295 7.77243 11.0295 5.29538C11.0295 2.89877 8.77044 0.948887 5.99239 0.948887C3.21463 0.948887 0.95558 2.89877 0.95558 5.29538Z"
                                                        fill="#34A3D5" />
                                                </svg> <a href="#">No Comments</a></div>
                                            <h2>Best school Network Directory
                                                For Physicians & Clients</h2>
                                            <p>Quam arcu pretium quis quam sed, laorey
                                                afficits volutpat lobortis sem consq
                                                consequat lore dolor ...</p>
                                            <button>Read More <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                    height="14" viewBox="0 0 20 14" fill="none">
                                                    <g clip-path="url(#clip0_50_776)">
                                                        <path
                                                            d="M13.6474 1.35498L12.3024 2.73877L15.8298 6.36963H0.476562V8.32471H15.8298L12.3024 11.9556L13.6474 13.3394L19.4715 7.34717L13.6474 1.35498Z"
                                                            fill="#2FC7B6" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_50_776">
                                                            <rect width="19.01" height="13" fill="white"
                                                                transform="matrix(1 0 0 -1 0.46875 13.5298)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg></button>

                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="img-sec">
                                            <img class="rounded" src="{{'asset/images/trainers/trainer-2-2.jpg'}}" alt="">
                                            <div class="reting-s">
                                                <h1>05</h1>
                                                <p>Apr</p>
                                            </div>
                                        </div>
                                        <div class="other-sec">
                                            <div class="user-deselt "> <a href="#">Jilly Smith</a><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="13"
                                                    viewBox="0 0 16 13" fill="none">
                                                    <path
                                                        d="M13.3103 4.60762C14.503 5.41797 15.2645 6.62696 15.2645 7.98348C15.2645 9.13073 14.718 10.1729 13.8311 10.9592C14.0375 11.3866 14.3262 11.8731 14.7419 12.3689C13.9419 12.3689 12.975 12.2911 12.089 11.991C11.3896 12.2522 10.6147 12.4021 9.7938 12.4021C8.92333 12.4021 8.10631 12.2311 7.37708 11.9387C10.8249 11.3896 13.4432 8.8336 13.4432 5.76734C13.4432 5.37048 13.3946 4.98371 13.3103 4.60762ZM0.678462 11.08C0.59246 10.9156 0.60978 10.7161 0.723554 10.5698C1.10847 10.0711 1.42381 9.527 1.66181 8.95144C0.602016 7.96834 0 6.65457 0 5.29538C0 2.37457 2.68518 -8.10623e-05 5.99059 -8.10623e-05C9.29601 -8.10623e-05 11.983 2.37545 11.983 5.29627C11.983 8.26636 9.35125 10.5926 5.99059 10.5926C5.54535 10.5926 4.26965 10.4047 3.70019 10.305C2.63561 10.9764 1.63016 11.3098 1.1249 11.3335C1.11803 11.3344 1.10937 11.3344 1.1019 11.3344C0.925121 11.3344 0.761777 11.2367 0.678462 11.08ZM0.95558 5.29538C0.95558 6.49487 1.51549 7.61392 2.53229 8.44505C2.68727 8.57239 2.7455 8.78314 2.67772 8.97222C2.54573 9.33703 2.38806 9.69025 2.2056 10.0313C2.54184 9.88112 2.92796 9.6769 3.33796 9.40737C3.44308 9.33614 3.57387 9.31328 3.70019 9.33792C4.11288 9.42429 5.61493 9.64187 5.99239 9.64187C8.8639 9.64187 11.0295 7.77243 11.0295 5.29538C11.0295 2.89877 8.77044 0.948887 5.99239 0.948887C3.21463 0.948887 0.95558 2.89877 0.95558 5.29538Z"
                                                        fill="#34A3D5" />
                                                </svg> <a href="#">No Comments</a></div>
                                            <h2>Best school Network Directory
                                                For Physicians & Clients</h2>
                                            <p>Quam arcu pretium quis quam sed, laorey
                                                afficits volutpat lobortis sem consq
                                                consequat lore dolor ...</p>
                                            <button>Read More <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                    height="14" viewBox="0 0 20 14" fill="none">
                                                    <g clip-path="url(#clip0_50_776)">
                                                        <path
                                                            d="M13.6474 1.35498L12.3024 2.73877L15.8298 6.36963H0.476562V8.32471H15.8298L12.3024 11.9556L13.6474 13.3394L19.4715 7.34717L13.6474 1.35498Z"
                                                            fill="#2FC7B6" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_50_776">
                                                            <rect width="19.01" height="13" fill="white"
                                                                transform="matrix(1 0 0 -1 0.46875 13.5298)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg></button>

                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="img-sec">
                                            <img class="rounded" src="{{'asset/images/trainers/trainer-2.jpg'}}" alt="">
                                            <div class="reting-s">
                                                <h1>05</h1>
                                                <p>Apr</p>
                                            </div>
                                        </div>
                                        <div class="other-sec">
                                            <div class="user-deselt "> <a href="#">Jilly Smith</a><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="13"
                                                    viewBox="0 0 16 13" fill="none">
                                                    <path
                                                        d="M13.3103 4.60762C14.503 5.41797 15.2645 6.62696 15.2645 7.98348C15.2645 9.13073 14.718 10.1729 13.8311 10.9592C14.0375 11.3866 14.3262 11.8731 14.7419 12.3689C13.9419 12.3689 12.975 12.2911 12.089 11.991C11.3896 12.2522 10.6147 12.4021 9.7938 12.4021C8.92333 12.4021 8.10631 12.2311 7.37708 11.9387C10.8249 11.3896 13.4432 8.8336 13.4432 5.76734C13.4432 5.37048 13.3946 4.98371 13.3103 4.60762ZM0.678462 11.08C0.59246 10.9156 0.60978 10.7161 0.723554 10.5698C1.10847 10.0711 1.42381 9.527 1.66181 8.95144C0.602016 7.96834 0 6.65457 0 5.29538C0 2.37457 2.68518 -8.10623e-05 5.99059 -8.10623e-05C9.29601 -8.10623e-05 11.983 2.37545 11.983 5.29627C11.983 8.26636 9.35125 10.5926 5.99059 10.5926C5.54535 10.5926 4.26965 10.4047 3.70019 10.305C2.63561 10.9764 1.63016 11.3098 1.1249 11.3335C1.11803 11.3344 1.10937 11.3344 1.1019 11.3344C0.925121 11.3344 0.761777 11.2367 0.678462 11.08ZM0.95558 5.29538C0.95558 6.49487 1.51549 7.61392 2.53229 8.44505C2.68727 8.57239 2.7455 8.78314 2.67772 8.97222C2.54573 9.33703 2.38806 9.69025 2.2056 10.0313C2.54184 9.88112 2.92796 9.6769 3.33796 9.40737C3.44308 9.33614 3.57387 9.31328 3.70019 9.33792C4.11288 9.42429 5.61493 9.64187 5.99239 9.64187C8.8639 9.64187 11.0295 7.77243 11.0295 5.29538C11.0295 2.89877 8.77044 0.948887 5.99239 0.948887C3.21463 0.948887 0.95558 2.89877 0.95558 5.29538Z"
                                                        fill="#34A3D5" />
                                                </svg> <a href="#">No Comments</a></div>
                                            <h2>Best school Network Directory
                                                For Physicians & Clients</h2>
                                            <p>Quam arcu pretium quis quam sed, laorey
                                                afficits volutpat lobortis sem consq
                                                consequat lore dolor ...</p>
                                            <button>Read More <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                    height="14" viewBox="0 0 20 14" fill="none">
                                                    <g clip-path="url(#clip0_50_776)">
                                                        <path
                                                            d="M13.6474 1.35498L12.3024 2.73877L15.8298 6.36963H0.476562V8.32471H15.8298L12.3024 11.9556L13.6474 13.3394L19.4715 7.34717L13.6474 1.35498Z"
                                                            fill="#2FC7B6" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_50_776">
                                                            <rect width="19.01" height="13" fill="white"
                                                                transform="matrix(1 0 0 -1 0.46875 13.5298)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg></button>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>

        function createCounter(elementId, maxCount, interval) {
            let count = 0;
            const counterElement = document.getElementById(elementId);

            function updateCounter() {
                count++;
                counterElement.textContent = count;
               

                if (count < maxCount) {
                    setTimeout(updateCounter, 10);
                }
            }

            updateCounter();
        }

        createCounter('counter-1', 1000, 100); // Update every 100 milliseconds
        createCounter('counter-2', 100, 100);  // Update every 100 milliseconds
        createCounter('counter-3', 70, 100);   // Update every 100 milliseconds
        createCounter('counter-4', 50, 100);   // Update every 100 milliseconds
        
    </script>


@endsection




























