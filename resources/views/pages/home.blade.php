@extends('layouts.app')

@php
    use Jenssegers\Agent\Agent;

    $agent = new Agent();
@endphp

@section('content')
    @if ($agent->isDesktop())
        {{-- Desktop Version --}}
        <div class="row">
            <div class="col-7 my-auto" style="padding-left: 3rem;">
                <div class="align-middle">
                    <h2 class="" style="font-family: 'Euphoria Script', cursive; font-weight:bolder; color: rgb(56, 136, 241)">Hello, I'm</h2>
                    <h1 class="pb-3" style="font-family:'Fredoka', sans-serif; font-weight:500; font-size:4.8rem;">Siti Nur A'dilah</h1>
                    <span class="py-3" style="font-family:'Fredoka', sans-serif; font-weight:300; font-size: 1.1rem;">A fresh graduates passionate in web development and front-end web development, willingness to learn in any new technologies for web development.</span>
                    <div class="row" style="padding-top: 4.5rem;">
                        <div class="col-4">
                            <a class="btn btn-primary" style="padding: 10px 45px; font-weight:500;" href="#contact" role="button">Hire Me</a>
                        </div>
                        <div class="col-8">
                            <a class="btn btn-outline-primary" style="padding: 10px 45px; font-weight:500;" href="#aboutme" role="button">About Me</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div class="card rounded shadow-lg">
                    <img class="card-img-top rounded-top" src="{{ asset('photos/img1.jpeg') }}" alt="my photo"/>
                    <div class="card-body border">
                        <div class="row text-center">
                            <div class="col">
                                <a href="https://www.linkedin.com/in/nur-adilah/"><img src="https://img.icons8.com/ios-glyphs/24/000000/linkedin.png"/></a>
                            </div>
                            <div class="col">
                                <a href="https://github.com/adel14524"><img src="https://img.icons8.com/ios-glyphs/24/000000/github.png"/></a>
                            </div>
                            <div class="col">
                                <a href="https://wa.link/hw06ls"><img src="https://img.icons8.com/ios-glyphs/24/000000/whatsapp.png"/></a>
                            </div>
                            {{-- <div class="col">
                                <a href="https://instagram.com/_adhas?utm_medium=copy_link"><img src="https://img.icons8.com/ios-glyphs/24/000000/instagram-new.png"/></a>
                            </div> --}}
                            <div class="col">
                                <a href="mailto:nuradilah778@gmail.com"><img src="https://img.icons8.com/material-rounded/24/000000/gmail-login.png"/></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @elseif ($agent->isTablet())
        {{-- Tablet Version --}}
        <div class="row">
            <div class="col-12">
                <div class="card rounded shadow-lg">
                    <img class="card-img-top rounded-top" src="{{ asset('photos/img1.jpeg') }}" alt="my photo"/>
                    <div class="card-body border">
                        <div class="row text-center">
                            <div class="col">
                                <a href="https://www.linkedin.com/in/nur-adilah/"><img src="https://img.icons8.com/ios-glyphs/24/000000/linkedin.png"/></a>
                            </div>
                            <div class="col">
                                <a href="https://github.com/adel14524"><img src="https://img.icons8.com/ios-glyphs/24/000000/github.png"/></a>
                            </div>
                            <div class="col">
                                <a href="https://wa.link/hw06ls"><img src="https://img.icons8.com/ios-glyphs/24/000000/whatsapp.png"/></a>
                            </div>
                            {{-- <div class="col">
                                <a href="https://instagram.com/_adhas?utm_medium=copy_link"><img src="https://img.icons8.com/ios-glyphs/24/000000/instagram-new.png"/></a>
                            </div> --}}
                            <div class="col">
                                <a href="mailto:nuradilah778@gmail.com"><img src="https://img.icons8.com/material-rounded/24/000000/gmail-login.png"/></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 my-auto" style="padding-top: 3rem; padding-bottom: 3rem;">
                <div class="align-middle">
                    <h2 class="text-center" style="font-family: 'Euphoria Script', cursive; font-weight:bolder; color: rgb(56, 136, 241); font-size: 2.1rem;">Hello, I'm</h2>
                    <h1 class="pb-3 mb-0 text-center" style="font-family:'Fredoka', sans-serif; font-weight:500; font-size:3rem;">Siti Nur A'dilah</h1>
                    <p class="py-1 text-center" style="font-family:'Fredoka', sans-serif; font-weight:300; font-size: 1rem;">A fresh graduates passionate in web development and front-end web development, willingness to learn in any new technologies for web development.</p>
                    <div class="row d-flex justify-content-center px-3" style="padding-top: 2rem;">
                        <div class="col d-flex justify-content-center p-0">
                            <a class="btn btn-primary" style="padding: 10px 30px; font-weight:500;" href="#contact" role="button">Hire Me</a>
                        </div>
                        <div class="col d-flex justify-content-center p-0">
                            <a class="btn btn-outline-primary" style="padding: 10px 30px; font-weight:500;" href="#aboutme" role="button">About Me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @elseif ($agent->isMobile())
        {{-- Mobile Vesion --}}
        <div class="row">
            <div class="col-12">
                <div class="card rounded shadow-lg">
                    <img class="card-img-top rounded-top" src="{{ asset('photos/img1.jpeg') }}" alt="my photo"/>
                    <div class="card-body border">
                        <div class="row text-center">
                            <div class="col">
                                <a href="https://www.linkedin.com/in/nur-adilah/"><img src="https://img.icons8.com/ios-glyphs/24/000000/linkedin.png"/></a>
                            </div>
                            <div class="col">
                                <a href="https://github.com/adel14524"><img src="https://img.icons8.com/ios-glyphs/24/000000/github.png"/></a>
                            </div>
                            <div class="col">
                                <a href="https://wa.link/hw06ls"><img src="https://img.icons8.com/ios-glyphs/24/000000/whatsapp.png"/></a>
                            </div>
                            {{-- <div class="col">
                                <a href="https://instagram.com/_adhas?utm_medium=copy_link"><img src="https://img.icons8.com/ios-glyphs/24/000000/instagram-new.png"/></a>
                            </div> --}}
                            <div class="col">
                                <a href="mailto:nuradilah778@gmail.com"><img src="https://img.icons8.com/material-rounded/24/000000/gmail-login.png"/></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 my-auto" style="padding-top: 3rem; padding-bottom: 3rem;">
                <div class="align-middle">
                    <h2 class="text-center" style="font-family: 'Euphoria Script', cursive; font-weight:bolder; color: rgb(56, 136, 241); font-size: 2.1rem;">Hello, I'm</h2>
                    <h1 class="pb-3 mb-0 text-center" style="font-family:'Fredoka', sans-serif; font-weight:500; font-size:3rem;">Siti Nur A'dilah</h1>
                    <p class="py-1 text-center" style="font-family:'Fredoka', sans-serif; font-weight:300; font-size: 1rem;">A fresh graduates passionate in web development and front-end web development, willingness to learn in any new technologies for web development.</p>
                    <div class="row d-flex justify-content-center px-3" style="padding-top: 2rem;">
                        <div class="col d-flex justify-content-center p-0">
                            <a class="btn btn-primary" style="padding: 10px 30px; font-weight:500;" href="#contact" role="button">Hire Me</a>
                        </div>
                        <div class="col d-flex justify-content-center p-0">
                            <a class="btn btn-outline-primary" style="padding: 10px 30px; font-weight:500;" href="#aboutme" role="button">About Me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection

@section('aboutme')
    @if (!$agent->isMobile())
        {{-- Desktop Version --}}
        <div class="card rounded shadow-lg">
            <div class="card-body" style="padding-bottom: 30px;">
                <h1 class="p-3 text-center" style="font-family: 'Fredoka', sans-serif; font-weight:600; font-size: 3.2rem;">About Me</h1>
                <hr>
                <p class="m-0 pt-3 text-center" style="font-weight: 300; font-family:'Fredoka', sans-serif; font-size: 1.1rem;">Young professional with a passion for web designing and web development.</p>
                <p class="m-0 pt-1 text-center" style="font-weight: 300; font-family:'Fredoka', sans-serif; font-size: 1.1rem;">A fresh graduates from University of Technology MARA (UiTM) with a Bachelor of Computer Science.</p>
                <p class="m-0 pt-1 text-center" style="font-weight: 300; font-family:'Fredoka', sans-serif; font-size: 1.1rem;">Aiming to leverage a proven knowledge of web development, web design and programming skills to successfully fill the</p>
                <p class="m-0 pt-1 text-center" style="font-weight: 300; font-family:'Fredoka', sans-serif; font-size: 1.1rem;">numerous development projects.</p>
                <p class="pt-3 mt-3 text-center" style="font-weight: 300; font-family:'Fredoka', sans-serif; font-size: 1.1rem;"><strong>My background includes: Web Development | Computer Science | Front-End Web Development</strong></p>
                <div class="row" style="padding-top: 2.5rem;">
                    <div class="col" style="padding: 0 2rem;">
                        <p class="m-0" style="font-weight: 400; font-family:'Fredoka', sans-serif; font-size: 0.9rem;">HTML 90%</p>
                        <div class="progress my-3">
                            <div class="progress-bar" style="width:90%" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="m-0" style="font-weight: 400; font-family:'Fredoka', sans-serif; font-size: 0.9rem;">CSS 85%</p>
                        <div class="progress my-3">
                            <div class="progress-bar" style="width:85%" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="m-0" style="font-weight: 400; font-family:'Fredoka', sans-serif; font-size: 0.9rem;">PHP 75%</p>
                        <div class="progress my-3">
                            <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col" style="padding: 0 2rem;">
                        <p class="m-0" style="font-weight: 400; font-family:'Fredoka', sans-serif; font-size: 0.9rem;">JAVASCRIPT 60%</p>
                        <div class="progress my-3">
                            <div class="progress-bar" style="width:60%" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="m-0" style="font-weight: 400; font-family:'Fredoka', sans-serif; font-size: 0.9rem;">JQUERY 50%</p>
                        <div class="progress my-3">
                            <div class="progress-bar w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="m-0" style="font-weight: 400; font-family:'Fredoka', sans-serif; font-size: 0.9rem;">WORDPRESS 80%</p>
                        <div class="progress my-3">
                            <div class="progress-bar" style="width:80%" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        {{-- Mobile Version --}}
        <div class="card rounded shadow-lg">
            <div class="card-body" style="padding-bottom: 30px;">
                <h1 class="p-3 text-center" style="font-family: 'Fredoka', sans-serif; font-weight:600; font-size: 2.8rem;">About Me</h1>
                <hr>
                <p class="m-0 pt-3 text-center" style="font-weight: 300; font-family:'Fredoka', sans-serif; font-size: 1rem; padding-left:1rem; padding-right:1rem;">
                    Young professional with a passion for web designing and web development.
                    A fresh graduates from University of Technology MARA (UiTM) with a Bachelor of Computer Science.
                    Aiming to leverage a proven knowledge of web development, web design and programming skills to successfully fill the
                    numerous development projects.
                </p>
                {{-- <p class="m-0 pt-1 text-center" style="font-weight: 300; font-family:'Fredoka', sans-serif; font-size: 1rem;">A fresh graduates from University of Technology MARA (UiTM) with a Bachelor of Computer Science.</p>
                <p class="m-0 pt-1 text-center" style="font-weight: 300; font-family:'Fredoka', sans-serif; font-size: 1rem;">Aiming to leverage a proven knowledge of web development, web design and programming skills to successfully fill the</p>
                <p class="m-0 pt-1 text-center" style="font-weight: 300; font-family:'Fredoka', sans-serif; font-size: 1rem;">numerous development projects.</p> --}}
                <p class="pt-3 mt-3 text-center" style="font-weight: 300; font-family:'Fredoka', sans-serif; font-size: 1rem;"><strong>My background includes: Web Development | Computer Science | Front-End Web Development</strong></p>
                <div class="row" style="padding-top: 2.1rem; padding-bottom: 2.1rem;">
                    <div class="col-12" style="padding: 0 2rem;">
                        <p class="m-0" style="font-weight: 400; font-family:'Fredoka', sans-serif; font-size: 0.9rem;">HTML 90%</p>
                        <div class="progress my-3">
                            <div class="progress-bar" style="width:90%" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="m-0" style="font-weight: 400; font-family:'Fredoka', sans-serif; font-size: 0.9rem;">CSS 85%</p>
                        <div class="progress my-3">
                            <div class="progress-bar" style="width:85%" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="m-0" style="font-weight: 400; font-family:'Fredoka', sans-serif; font-size: 0.9rem;">PHP 75%</p>
                        <div class="progress my-3">
                            <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-12" style="padding: 0 2rem;">
                        <p class="m-0" style="font-weight: 400; font-family:'Fredoka', sans-serif; font-size: 0.9rem;">JAVASCRIPT 60%</p>
                        <div class="progress my-3">
                            <div class="progress-bar" style="width:60%" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="m-0" style="font-weight: 400; font-family:'Fredoka', sans-serif; font-size: 0.9rem;">JQUERY 50%</p>
                        <div class="progress my-3">
                            <div class="progress-bar w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="m-0" style="font-weight: 400; font-family:'Fredoka', sans-serif; font-size: 0.9rem;">WORDPRESS 80%</p>
                        <div class="progress my-3">
                            <div class="progress-bar" style="width:80%" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection

@section('experience')
    @if ($agent->isDesktop())
        {{-- Desktop Version --}}
        <h1 class="p-3 text-center" style="font-family: 'Fredoka', sans-serif; font-weight:600; font-size: 3.2rem;">Experience</h1>
        <div class="card-deck" style="padding-top: 3rem;">
            <div class="card shadow" style="border-radius: 8px;">
                <div class="card-body">
                    <button type="button" class="btn btn-outline-primary btn-sm m-3 px-3" style="font-family: 'Work Sans', sans-serif; font-weight:900;">2021 - 2022</button>
                    <h2 class="card-title ml-3 my-2 font-weight-bold">Internship</h2>
                    <h6 class="card-title ml-3 my-3 font-weight-bold" style="color: rgb(56, 136, 241);">Doerpreneur Soft Sdn Bhd</h6>
                    <p class="p-3 mb-0" style="font-weight: 100; font-family:'Work Sans', sans-serif; font-size: 1rem;">
                        Design, build and enhance current internal modules in the websites using authoring or scripting languagesuch as OOP PHP, Javascript.
                        Helping maintaining the websites,
                        ensure that directory structure is well-defined, logical, secure, responsive and that files are named properly.
                        Report daily progress to HOD.
                    </p>
                </div>
            </div>
            <div class="card shadow" style="border-radius: 8px;">
                <div class="card-body">
                    <button type="button" class="btn btn-outline-primary btn-sm m-3 px-3" style="font-family: 'Work Sans', sans-serif; font-weight:900;">2020</button>
                    <h2 class="card-title ml-3 my-2 font-weight-bold">Freelance</h2>
                    <h6 class="card-title ml-3 my-3 font-weight-bold" style="color: rgb(56, 136, 241);">Web Developer</h6>
                    <p class="p-3 mb-0" style="font-weight: 100; font-family:'Work Sans', sans-serif; font-size: 1rem;">
                        Develop Restaurant Reservation Web System for Ungku Omar Polytechnic's student.
                        Involve in front-end process using HTML, CSS, JavaScript.
                        Involved in back-end process using PHP language.
                        Design the database for the web system.
                    </p>
                </div>
            </div>
            <div class="card shadow" style="border-radius: 8px;">
                <div class="card-body">
                    <button type="button" class="btn btn-outline-primary btn-sm m-3 px-3" style="font-family: 'Work Sans', sans-serif; font-weight:900;">2017</button>
                    <h2 class="card-title ml-3 my-2 font-weight-bold">Part-Time</h2>
                    <h6 class="card-title ml-3 my-3 font-weight-bold" style="color: rgb(56, 136, 241);">Store Cashier @ 7-Eleven Malaysia</h6>
                    <p class="p-3 mb-3" style="font-weight: 100; font-family:'Work Sans', sans-serif; font-size: 1rem;">
                        Authentically greeted guests and interacted with them in order to provide an inclusive experience for them.
                        Items were scanned and bagged in an organized and efficient manner in accordance with safety requirements.
                        In terms of returns, I strictly adhered to 7-Eleven corporate policies and accepted management assistance while dealing with tough customers.
                    </p>
                </div>
            </div>
        </div>
    @elseif ($agent->isTablet())
        {{-- Tablet Version --}}
        <h1 class="p-3 text-center" style="font-family: 'Fredoka', sans-serif; font-weight:600; font-size: 2.8rem;">Experience</h1>
        <div class="card-deck" style="padding-top: 2rem;">
            <div class="card shadow" style="border-radius: 8px;">
                <div class="card-body">
                    <button type="button" class="btn btn-outline-primary btn-sm m-3 px-3" style="font-family: 'Work Sans', sans-serif; font-weight:900;">2021 - 2022</button>
                    <h2 class="card-title ml-3 my-2 font-weight-bold">Internship</h2>
                    <h6 class="card-title ml-3 my-3 font-weight-bold" style="color: rgb(56, 136, 241);">Doerpreneur Soft Sdn Bhd</h6>
                    <p class="p-3 mb-0" style="font-weight: 100; font-family:'Work Sans', sans-serif; font-size: 0.9rem;">
                        Design, build and enhance current internal modules in the websites using authoring or scripting languagesuch as OOP PHP, Javascript.
                        Helping maintaining the websites,
                        ensure that directory structure is well-defined, logical, secure, responsive and that files are named properly.
                        Report daily progress to HOD.
                    </p>
                </div>
            </div>
            <div class="card shadow" style="border-radius: 8px;">
                <div class="card-body">
                    <button type="button" class="btn btn-outline-primary btn-sm m-3 px-3" style="font-family: 'Work Sans', sans-serif; font-weight:900;">2020</button>
                    <h2 class="card-title ml-3 my-2 font-weight-bold">Freelance</h2>
                    <h6 class="card-title ml-3 my-3 font-weight-bold" style="color: rgb(56, 136, 241);">Web Developer</h6>
                    <p class="p-3 mb-0" style="font-weight: 100; font-family:'Work Sans', sans-serif; font-size: 0.9rem;">
                        Develop Restaurant Reservation Web System for Ungku Omar Polytechnic's student.
                        Involve in front-end process using HTML, CSS, JavaScript.
                        Involved in back-end process using PHP language.
                        Design the database for the web system.
                    </p>
                </div>
            </div>
            <div class="card shadow mb-0" style="border-radius: 8px;">
                <div class="card-body">
                    <button type="button" class="btn btn-outline-primary btn-sm m-3 px-3" style="font-family: 'Work Sans', sans-serif; font-weight:900;">2017</button>
                    <h2 class="card-title ml-3 my-2 font-weight-bold">Part-Time</h2>
                    <h6 class="card-title ml-3 my-3 font-weight-bold" style="color: rgb(56, 136, 241);">Store Cashier @ 7-Eleven Malaysia</h6>
                    <p class="p-3 mb-3" style="font-weight: 100; font-family:'Work Sans', sans-serif; font-size: 0.9rem;">
                        Authentically greeted guests and interacted with them in order to provide an inclusive experience for them.
                        Items were scanned and bagged in an organized and efficient manner in accordance with safety requirements.
                        In terms of returns, I strictly adhered to 7-Eleven corporate policies and accepted management assistance while dealing with tough customers.
                    </p>
                </div>
            </div>
        </div>
    @elseif ($agent->isMobile())
        {{-- Mobile Version --}}
        <h1 class="p-3 text-center" style="font-family: 'Fredoka', sans-serif; font-weight:600; font-size: 2.8rem;">Experience</h1>
        <div class="card-deck" style="padding-top: 2rem;">
            <div class="card shadow" style="border-radius: 8px; margin-bottom: 2rem;">
                <div class="card-body">
                    <button type="button" class="btn btn-outline-primary btn-sm m-3 px-3" style="font-family: 'Work Sans', sans-serif; font-weight:900;">2021 - 2022</button>
                    <h2 class="card-title ml-3 my-2 font-weight-bold">Internship</h2>
                    <h6 class="card-title ml-3 my-3 font-weight-bold" style="color: rgb(56, 136, 241);">Doerpreneur Soft Sdn Bhd</h6>
                    <p class="p-3 mb-0" style="font-weight: 100; font-family:'Work Sans', sans-serif; font-size: 0.9rem;">
                        Design, build and enhance current internal modules in the websites using authoring or scripting languagesuch as OOP PHP, Javascript.
                        Helping maintaining the websites,
                        ensure that directory structure is well-defined, logical, secure, responsive and that files are named properly.
                        Report daily progress to HOD.
                    </p>
                </div>
            </div>
            <div class="card shadow" style="border-radius: 8px; margin-bottom: 2rem;">
                <div class="card-body">
                    <button type="button" class="btn btn-outline-primary btn-sm m-3 px-3" style="font-family: 'Work Sans', sans-serif; font-weight:900;">2020</button>
                    <h2 class="card-title ml-3 my-2 font-weight-bold">Freelance</h2>
                    <h6 class="card-title ml-3 my-3 font-weight-bold" style="color: rgb(56, 136, 241);">Web Developer</h6>
                    <p class="p-3 mb-0" style="font-weight: 100; font-family:'Work Sans', sans-serif; font-size: 0.9rem;">
                        Develop Restaurant Reservation Web System for Ungku Omar Polytechnic's student.
                        Involve in front-end process using HTML, CSS, JavaScript.
                        Involved in back-end process using PHP language.
                        Design the database for the web system.
                    </p>
                </div>
            </div>
            <div class="card shadow mb-0" style="border-radius: 8px;">
                <div class="card-body">
                    <button type="button" class="btn btn-outline-primary btn-sm m-3 px-3" style="font-family: 'Work Sans', sans-serif; font-weight:900;">2017</button>
                    <h2 class="card-title ml-3 my-2 font-weight-bold">Part-Time</h2>
                    <h6 class="card-title ml-3 my-3 font-weight-bold" style="color: rgb(56, 136, 241);">Store Cashier @ 7-Eleven Malaysia</h6>
                    <p class="p-3 mb-3" style="font-weight: 100; font-family:'Work Sans', sans-serif; font-size: 0.9rem;">
                        Authentically greeted guests and interacted with them in order to provide an inclusive experience for them.
                        Items were scanned and bagged in an organized and efficient manner in accordance with safety requirements.
                        In terms of returns, I strictly adhered to 7-Eleven corporate policies and accepted management assistance while dealing with tough customers.
                    </p>
                </div>
            </div>
        </div>
    @endif
@endsection

@section('portfolio')
    @if (!$agent->isMobile())
        {{-- Desktop Version --}}
        <h1 class="p-3 text-center" style="font-family: 'Fredoka', sans-serif; font-weight:600; font-size: 3.2rem;">Portfolio</h1>
        <div class="card-deck" style="padding-top: 3rem;">
            <div class="card shadow">
                <div class="bg-image" style="overflow:hidden;">
                    <img class="card-img-top" src="{{ asset('photos/pexels-angele-j-128402.jpg') }}"/>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-10">
                            <h3 class="card-title my-2 font-weight-bold">GrocHome</h3>
                            <p class="card-text py-3 mb-0" style="font-weight: 100; font-family:'Work Sans', sans-serif; font-size: 1rem;">Group Project - Online Grocery Ordering Web-Based System</p>
                        </div>
                        <div class="col-2 text-right my-auto">
                            <a href="{{ url('/portfolio/1') }}"><img src="https://img.icons8.com/external-tanah-basah-detailed-outline-tanah-basah/48/4a90e2/external-plus-user-interface-tanah-basah-detailed-outline-tanah-basah.png"/></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow"> 
                <div class="bg-image" style="overflow:hidden;">
                    <img class="card-img-top" src="{{ asset('photos/pexels-chan-walrus-958545.jpg') }}"/>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-10">
                            <h3 class="card-title my-2 font-weight-bold">AllSet</h3>
                            <p class="card-text py-3 mb-0" style="font-weight: 100; font-family:'Work Sans', sans-serif; font-size: 1rem;">Freelance Project - Restaurant Reservation System</p>
                        </div>
                        <div class="col-2 text-right my-auto">
                            <a href="{{ url('/portfolio/2') }}" ><img src="https://img.icons8.com/external-tanah-basah-detailed-outline-tanah-basah/48/4a90e2/external-plus-user-interface-tanah-basah-detailed-outline-tanah-basah.png"/></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-deck" style="padding-top: 3rem;">
            <div class="card shadow">
                <div class="bg-image" style="overflow:hidden;">
                    <img class="card-img-top" src="{{ asset('photos/pexels-burak-kebapci-186461.jpg') }}"/>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-10">
                            <h3 class="card-title my-2 font-weight-bold">Malaysian's Citizens Emotion Analysis</h3>
                            <p class="card-text py-3 mb-0" style="font-weight: 100; font-family:'Work Sans', sans-serif; font-size: 1rem;">FYP Project - Sentiment Analysis that analyze emotion of Malaysians using Machine Learning method</p>
                        </div>
                        <div class="col-2 text-right my-auto">
                            <a href="{{ url('/portfolio/3') }}" ><img src="https://img.icons8.com/external-tanah-basah-detailed-outline-tanah-basah/48/4a90e2/external-plus-user-interface-tanah-basah-detailed-outline-tanah-basah.png"/></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow">
                <div class="bg-image" style="overflow:hidden;">
                    <img class="card-img-top" src="{{ asset('photos/pexels-pixabay-265087.jpg') }}"/>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-10">
                            <h3 class="card-title my-2 font-weight-bold">DoerHRM</h3>
                            <p class="card-text py-3 mb-0" style="font-weight: 100; font-family:'Work Sans', sans-serif; font-size: 1rem;">Internship Project - Enhance Budget & Compensation module from DoerHRM System.</p>
                        </div>
                        <div class="col-2 text-right my-auto">
                            <a href="{{ url('/portfolio/4') }}" ><img src="https://img.icons8.com/external-tanah-basah-detailed-outline-tanah-basah/48/4a90e2/external-plus-user-interface-tanah-basah-detailed-outline-tanah-basah.png"/></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        {{-- Mobile Version --}}
        <h1 class="p-3 text-center" style="font-family: 'Fredoka', sans-serif; font-weight:600; font-size: 3.2rem;">Portfolio</h1>
        <div class="card-deck" style="padding-top: 3rem;">
            <div class="card shadow" style="margin-bottom: 2rem;">
                <div class="bg-image" style="overflow:hidden;">
                    <img class="card-img-top" src="{{ asset('photos/pexels-angele-j-128402.jpg') }}"/>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-10">
                            <h4 class="card-title my-2 font-weight-bold">GrocHome</h4>
                            <p class="card-text py-3 mb-0" style="font-weight: 100; font-family:'Work Sans', sans-serif; font-size: 0.9rem;">Group Project - Online Grocery Ordering Web-Based System</p>
                        </div>
                        <div class="col-2 my-auto pr-3 d-flex justify-content-center">
                            <a href="{{ url('/portfolio/1') }}"><img src="https://img.icons8.com/external-tanah-basah-detailed-outline-tanah-basah/48/4a90e2/external-plus-user-interface-tanah-basah-detailed-outline-tanah-basah.png"/></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow" style="margin-bottom: 2rem;"> 
                <div class="bg-image" style="overflow:hidden;">
                    <img class="card-img-top" src="{{ asset('photos/pexels-chan-walrus-958545.jpg') }}"/>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-10">
                            <h4 class="card-title my-2 font-weight-bold">AllSet</h4>
                            <p class="card-text py-3 mb-0" style="font-weight: 100; font-family:'Work Sans', sans-serif; font-size: 0.9rem;">Freelance Project - Restaurant Reservation System</p>
                        </div>
                        <div class="col-2 my-auto pr-3 d-flex justify-content-center">
                            <a href="{{ url('/portfolio/2') }}" ><img src="https://img.icons8.com/external-tanah-basah-detailed-outline-tanah-basah/48/4a90e2/external-plus-user-interface-tanah-basah-detailed-outline-tanah-basah.png"/></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-deck">
            <div class="card shadow" style="margin-bottom: 2rem;">
                <div class="bg-image" style="overflow:hidden;">
                    <img class="card-img-top" src="{{ asset('photos/pexels-burak-kebapci-186461.jpg') }}"/>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-10">
                            <h4 class="card-title my-2 font-weight-bold">Malaysian's Citizens Emotion Analysis</h4>
                            <p class="card-text py-3 mb-0" style="font-weight: 100; font-family:'Work Sans', sans-serif; font-size: 0.9rem;">FYP Project - Sentiment Analysis that analyze emotion of Malaysians using Machine Learning method</p>
                        </div>
                        <div class="col-2 my-auto pr-3 d-flex justify-content-center">
                            <a href="{{ url('/portfolio/3') }}" ><img src="https://img.icons8.com/external-tanah-basah-detailed-outline-tanah-basah/48/4a90e2/external-plus-user-interface-tanah-basah-detailed-outline-tanah-basah.png"/></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow" style="margin-bottom: 2rem;">
                <div class="bg-image" style="overflow:hidden;">
                    <img class="card-img-top" src="{{ asset('photos/pexels-pixabay-265087.jpg') }}"/>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-10">
                            <h4 class="card-title my-2 font-weight-bold">DoerHRM</h4>
                            <p class="card-text py-3 mb-0" style="font-weight: 100; font-family:'Work Sans', sans-serif; font-size: 0.9rem;">Internship Project - Enhance Budget & Compensation module from DoerHRM System.</p>
                        </div>
                        <div class="col-2 my-auto pr-3 d-flex justify-content-center">
                            <a href="{{ url('/portfolio/4') }}" ><img src="https://img.icons8.com/external-tanah-basah-detailed-outline-tanah-basah/48/4a90e2/external-plus-user-interface-tanah-basah-detailed-outline-tanah-basah.png"/></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection

@section('contact')
    @if (!$agent->isMobile())
        {{-- Desktop Version --}}
        <div class="card shadow">
            <div class="card-body">
                <div class="row">
                    <div class="col px-3">
                        <h1 class="p-3" style="font-family: 'Fredoka', sans-serif; font-weight:600; font-size: 2.3rem;">Send Message to Me</h1>
                        <hr style="margin-left: 0.9rem;">
    
                        @if (Session::has('success'))
                            <div class="alert alert-success alert-dismissible fade show ml-3" role="alert">
                                <strong>{{ Session::get('success') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('contact-me') }}" style="padding-top: 2rem;">
                            {{ csrf_field() }}
                            <div class="form-group" style="margin-bottom: 2rem;">
                                <input type="text" class="form-control ml-3 rounded-0 @error('name') is-invalid @enderror" id="name" name="name" placeholder="Your Name"  style="height: 50px; width: -webkit-fill-available;"/>
                                @error('name')
                                    <span class="invalid-feedback ml-3" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group" style="margin-bottom: 2rem;">
                                <input type="email" class="form-control ml-3  rounded-0 @error('email') is-invalid @enderror" id="email" name="email" placeholder="Your Email" style="height: 50px; width: -webkit-fill-available;"/>
                                @error('email')
                                    <span class="invalid-feedback ml-3" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group" style="margin-bottom: 2rem;">
                                <input type="text" class="form-control ml-3  rounded-0 @error('subject') is-invalid @enderror" id="subject" name="subject" placeholder="Subject" style="height: 50px; width: -webkit-fill-available;"/> 
                                @error('subject')
                                    <span class="invalid-feedback ml-3" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <textarea class="form-control ml-3  rounded-0 @error('message') is-invalid @enderror" id="message" name="message" placeholder="Message" rows="6" style="width: -webkit-fill-available;"></textarea>
                                @error('message')
                                    <span class="invalid-feedback ml-3" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary ml-3 my-3 px-3">Send Message</button>
                        </form>
                    </div>
                    <div class="col px-3">
                        <h1 class="p-3" style="font-family: 'Fredoka', sans-serif; font-weight:600; font-size: 2.3rem;">Get in Touch</h1>
                        <hr style="margin-left: 0.9rem;">
                        <p class="px-3 pb-3 mb-0" style="font-weight: 100; font-family:'Work Sans', sans-serif; font-size: 1.1rem; padding-top: 2rem;">
                            Feel free to contact me for any inquiries and hiring purposes. 
                            Let's build project together !
                        </p>
                        <div class="d-flex flex-row">
                            <div class="p-3"><img src="https://img.icons8.com/ios-glyphs/24/000000/marker--v1.png"/></div>
                            <p class="p-3 mb-0" style="font-weight: 400; font-family:'Work Sans', sans-serif; font-size: 1rem;">SHAH ALAM, SELANGOR</p>
                        </div>
                        
                        <div class="d-flex flex-row">
                            <div class="px-3 pt-2 pb-3"><img src="https://img.icons8.com/ios-glyphs/24/000000/iphone.png"/></div>
                            <p class="px-3 pt-2 pb-3 mb-0" style="font-weight: 400; font-family:'Work Sans', sans-serif; font-size: 1rem;">016-6193667</p>
                        </div>
                        
                        <div class="d-flex flex-row">
                            <div class="px-3 pt-2 pb-3"><img src="{{ asset('photos/icons8-mail-24.png') }}"/></div>
                            <p class="px-3 pt-2 pb-3 mb-0" style="font-weight: 400; font-family:'Work Sans', sans-serif; font-size: 1rem;">nuradilah778@gmail.com</p>
                        </div>
                        
                        <div class="d-flex flex-row">
                            <a class="ml-3 my-3 btn btn-outline-primary rounded-circle py-2 px-2" style="border-width: 3px ;" href="https://www.linkedin.com/in/nur-adilah/"><img src="https://img.icons8.com/ios-glyphs/24/000000/linkedin.png"/></a>
                            <a class="ml-3 my-3 btn btn-outline-primary rounded-circle py-2 px-2" style="border-width: 3px ;" href="https://github.com/adel14524"><img src="https://img.icons8.com/ios-glyphs/24/000000/github.png"/></a>
                            <a class="ml-3 my-3 btn btn-outline-primary rounded-circle py-2 px-2" style="border-width: 3px ;" href="https://wa.link/hw06ls"><img src="https://img.icons8.com/ios-glyphs/24/000000/whatsapp.png"/></a>
                            {{-- <a class="ml-3 my-3 btn btn-outline-primary rounded-circle py-2 px-2" style="border-width: 3px ;" href="https://instagram.com/_adhas?utm_medium=copy_link"><img src="https://img.icons8.com/material-outlined/24/000000/instagram-new--v1.png"/></a> --}}
                            <a class="ml-3 my-3 btn btn-outline-primary rounded-circle py-2 px-2" style="border-width: 3px ;" href="mailto:nuradilah778@gmail.com"><img src="https://img.icons8.com/material-rounded/24/000000/gmail-login.png"/></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        {{-- Mobile Version --}}
        <div class="card shadow">
            <div class="card-body">
                <div class="row">
                    <div class="col pl-0">
                        <h1 class="p-3 text-center" style="font-family: 'Fredoka', sans-serif; font-weight:600; font-size: 2.1rem;">Send Message to Me</h1>
                        <hr style="margin-left: 0.9rem;">

                        @if (Session::has('success'))
                            <div class="alert alert-success alert-dismissible fade show ml-3" role="alert">
                                <strong>{{ Session::get('success') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('contact-me') }}" style="padding-top: 2rem;">
                            {{ csrf_field() }}
                            <div class="form-group" style="margin-bottom: 2rem;">
                                <input type="text" class="form-control ml-3 rounded-0 @error('name') is-invalid @enderror" id="name" name="name" placeholder="Your Name"  style="height: 50px; width: -webkit-fill-available;"/>
                                @error('name')
                                    <span class="invalid-feedback ml-3" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group" style="margin-bottom: 2rem;">
                                <input type="email" class="form-control ml-3  rounded-0 @error('email') is-invalid @enderror" id="email" name="email" placeholder="Your Email" style="height: 50px; width: -webkit-fill-available;"/>
                                @error('email')
                                    <span class="invalid-feedback ml-3" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group" style="margin-bottom: 2rem;">
                                <input type="text" class="form-control ml-3  rounded-0 @error('subject') is-invalid @enderror" id="subject" name="subject" placeholder="Subject" style="height: 50px; width: -webkit-fill-available;"/> 
                                @error('subject')
                                    <span class="invalid-feedback ml-3" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <textarea class="form-control ml-3  rounded-0 @error('message') is-invalid @enderror" id="message" name="message" placeholder="Message" rows="6" style="width: -webkit-fill-available;"></textarea>
                                @error('message')
                                    <span class="invalid-feedback ml-3" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="submit-button d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary m-3  px-3">Send Message</button>
                            </div>   
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="card shadow" style="margin-top: 2rem;">
            <div class="card-body">
                <div class="row">
                    <div class="col pt-3">
                        <h1 class="p-3 text-center" style="font-family: 'Fredoka', sans-serif; font-weight:600; font-size: 2.1rem;">Get in Touch</h1>
                        <hr style="margin-left: 0.9rem;">
                        <p class="px-3 pb-3 mb-0 text-center" style="font-weight: 100; font-family:'Work Sans', sans-serif; font-size: 0.9rem; padding-top: 2rem;">
                            Feel free to contact me for any inquiries and hiring purposes. 
                            Let's build project together !
                        </p>
                        <div class="d-flex flex-row justify-content-center">
                            <div class="pl-0 py-3 pr-3"><img src="https://img.icons8.com/ios-glyphs/20/000000/marker--v1.png"/></div>
                            <p class="pl-1 py-3 pr-3 mb-0" style="font-weight: 400; font-family:'Work Sans', sans-serif; font-size: 0.9rem;">SHAH ALAM, SELANGOR</p>
                        </div>
                        
                        <div class="d-flex flex-row justify-content-center">
                            <div class="pl-0 pt-2 pb-3 pr-3"><img src="https://img.icons8.com/ios-glyphs/20/000000/iphone.png"/></div>
                            <p class="pl-1 pt-2 pb-3 pr-3 mb-0" style="font-weight: 400; font-family:'Work Sans', sans-serif; font-size: 0.9rem;">016-6193667</p>
                        </div>
                        
                        <div class="d-flex flex-row justify-content-center">
                            <div class="pl-0 pt-2 pb-3 pr-3"><img src="{{ asset('photos/icons8-mail-24.png') }}"/></div>
                            <p class="pl-1 pt-2 pb-3 pr-3 mb-0" style="font-weight: 400; font-family:'Work Sans', sans-serif; font-size: 0.9rem;">nuradilah778@gmail.com</p>
                        </div>
                        
                        <div class="d-flex flex-row justify-content-center py-3">
                            <a class="d-flex justify-content-center mx-2 my-auto btn btn-outline-primary rounded-circle py-2 px-2" style="border-width: 3px ;" href="https://www.linkedin.com/in/nur-adilah/"><img src="https://img.icons8.com/ios-glyphs/20/000000/linkedin.png"/></a>
                            <a class="d-flex justify-content-center mx-2 my-auto btn btn-outline-primary rounded-circle py-2 px-2" style="border-width: 3px ;" href="https://github.com/adel14524"><img src="https://img.icons8.com/ios-glyphs/20/000000/github.png"/></a>
                            <a class="d-flex justify-content-center mx-2 my-auto btn btn-outline-primary rounded-circle py-2 px-2" style="border-width: 3px ;" href="https://wa.link/hw06ls"><img src="https://img.icons8.com/ios-glyphs/20/000000/whatsapp.png"/></a>
                            {{-- <a class="d-flex justify-content-center mx-2 my-auto btn btn-outline-primary rounded-circle py-2 px-2" style="border-width: 3px ;" href="https://instagram.com/_adhas?utm_medium=copy_link"><img src="https://img.icons8.com/material-outlined/20/000000/instagram-new--v1.png"/></a> --}}
                            <a class="d-flex justify-content-center mx-2 my-auto btn btn-outline-primary rounded-circle py-2 px-2" style="border-width: 3px ;" href="mailto:nuradilah778@gmail.com"><img src="https://img.icons8.com/material-rounded/20/000000/gmail-login.png"/></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection