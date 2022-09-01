<nav class="navbar-light bg-transparent " id="nav">
    <div class="container">
        <div class="d-flex">
            <div class="float-start d-flex">
                <ul class="nav me-auto mb-2 mb-lg-0 ">
                    @foreach($sosmeds as $sosmed)
                    <li class="nav-item">
                        <a class="nav-link text-success" href="{{ $sosmed->url }}">{!! $sosmed->icon !!}</i></a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="float-end ms-auto d-flex">
                <ul class="nav mb-2 mb-lg-0 ">
                    @foreach($contacts as $contact)
                    <li class="nav-item">
                        <a class="nav-link text-success">
                            <div class="d-flex">
                                {!! $contact->icon !!}
                                <p class="d-none d-lg-block">{{ $contact->body }}</p>
                            </div>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-white" id="navBar">
    <div class="container py-3">
        <h3>GustiRafi</h3>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"
            aria-controls="offcanvasScrolling" aria-expanded="false aria-controls" offcanvasExample">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end bg-white" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
            aria-labelledby="offcanvasRightLabel" id="offcanvasScrolling">
            <div class="offcanvas-header">
                <div class="float-start"></div>
                <div class="float-end">
                    <button type="button" class="btn-close text-reset bg-transparent" data-bs-dismiss="offcanvas"
                        aria-label="Close" id="cls-btn"></button>
                </div>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav text-success ms-auto mb-2 mb-lg-0" id="menu">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#About">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skill">Skill</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#project">Project</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#certificate">Certificate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-none d-lg-block"> <i class="bi bi-brightness-high-fill"
                                onclick="myFunction()" id="mode"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>