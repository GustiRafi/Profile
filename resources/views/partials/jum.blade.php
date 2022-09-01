@foreach($intros as $intro )
<div class="jumbotron"
    style="background:url( {{asset('storage/' . $intro->image) }} ); background-repeat: no-repeat; background-size: cover;height: 100%;">
    <div class="container text-white py-5">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link d-block d-lg-none"> <i class="bi bi-brightness-high-fill text-white"
                            onclick="myFunction()" id="mode"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="me-auto py-5">
            <div class="col-12 col-lg-4 py-5">
                {!! $intro->body !!}
            </div>
        </div>
    </div>
</div>
@endforeach