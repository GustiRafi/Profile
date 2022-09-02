<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
    .card-hover1 :hover {
        background-color: darkgray;
        color: white;
    }
    </style>
    <title>Rafi Gusti | Profile </title>
</head>

<body class="bg-white text-dark" id="body">
    @include('partials.nav')
    <section id="home">
        @include('partials.jum')
    </section>
    <div class="container mb-5">
        <section class="mt-5 my-4" id="About">
            @foreach($abouts as $about)
            <div data-aos="fade-right">
                <div class="card mb-3 border-0 pt-5 bg-transparent">
                    <div class="row g-0">
                        <div class="col-md-6">
                            <img src="{{ asset('storage/' . $about->image) }}" class="img-fluid rounded-start"
                                alt="...">
                        </div>
                        <div class="col-md-6 justify-content-center">
                            <div class="card-body ">
                                <h1 class="card-title text-primary"><strong>{{ $about->title }}</strong></h1>
                                <div class="card-text">
                                    {!! $about->description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </section>
        <section id="skill" class="mt-5 my-4">
            <div class="text-center">
                <div data-aos="fade-right">
                    <h3 class="text-primary"><strong>Skill</strong></h3>
                </div>
                <div class="row row-cols-2 row-cols-lg-4 mt-3 justify-content-center">
                    @foreach($skills as $skill)
                    <div data-aos="zoom-in">
                        <div class="card-hover1">
                            <div class="col mb-3 ">
                                <div class="card bg-transparent">
                                    <h1>{!! $skill->icon !!}</h1>
                                    <p>{{ $skill->name }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section id="project" class="mt-5 my-4">
            <div class="text-center">
                <div data-aos="fade-right">
                    <p class="text-success">Project</p>
                    <h3 class="text-primary"><strong>My Project</strong></h3>
                </div>
                <div class="row row-cols-1 row-cols-lg-3 mt-3 justify-content-center">
                    @foreach($projects as $project)
                    <div class="col mb-3">
                        <div data-aos="zoom-in">
                            <a href="{{ $project->url }}" target="_blank">
                                <div class="card" style="max-width:1348px ;">
                                    <img src="{{ asset('storage/'. $project->thumb) }}" class="card-img img-thumbnail"
                                        alt="" srcset="">
                                    <div class="card-img-overlay bg-dark opacity-50 text-white py-5">
                                        <h5 class="card-title">{{ $project->name }}</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section id="certificate" class="mt-5 my-4">
            <div class="text-center">
                <div data-aos="fade-right">
                    <h3 class="text-primary"><strong>My Certificate</strong></h3>
                </div>
                <div class="row row-cols-1 row-cols-lg-3 justify-content-center mt-3">
                    @foreach($certificates as $certificate)
                    <div class="col mb-3">
                        <div data-aos="zoom-in">
                            <div class="card" style="max-width:400px ;">
                                <img src="{{ asset('storage/' . $certificate->image) }}" class="card-img-top" alt=""
                                    srcset="">
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section id="contact" class="mt-5 my-4">
            <div class="row row-cols-1 row-cols-lg-2">
                <div class="col-12 col-lg-7">
                    <div data-aos="fade-right">
                        <div class="mb-3">
                            <h3>Contact Form</h3>
                        </div>
                    </div>
                    <div data-aos="fade-right">
                        <div class="pe-3">
                            @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show my-3" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @endif
                            <form action="/sendMail" method="post">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control  @error('name')is-invalid @enderror"
                                        name="name" id="name" placeholder="Your Name" value="{{ old('name') }}">
                                    <label class="text-dark" for="name">Your Name</label>
                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control  @error('email')is-invalid @enderror"
                                        name="email" id="email" placeholder="Mail" value="{{ old('email') }}">
                                    <label class="text-dark" for="email">Email address</label>
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control  @error('body')is-invalid @enderror" cols="30"
                                        rows="8" placeholder="Leave a message here" name="body" id="body"
                                        value="{{ old('body') }}"></textarea>
                                    @error('body')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    <!-- <label class="text-dark" for="message">message</label> -->
                                </div>
                                <div class="mb-3 float-end">
                                    <button type="submit" class="btn btn-success"><i
                                            class="bi bi-send-fill">Send</i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="ps-3">
                        <div data-aos="fade-right">
                            @foreach($alamats as $alamat)
                            <h4>Address</h4>
                            <p>{{ $alamat->addres }}</p>
                            <h4>Maps</h4>
                            {!! $alamat->maps !!}
                            @endforeach
                        </div>
                        <div data-aos="fade-right">
                            @foreach($contacts as $contact)
                            <h4 class="pt-3">{{ $contact->title }}</h4>
                            <p>{{ $contact->body }}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @include('partials.footer')
    <script src="/js/script.js"></script>
    <script src="/js/bootstrap.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
</body>

</html>