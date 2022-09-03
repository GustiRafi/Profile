@foreach($intros as $intro )
<div class="jumbotron"
    style="background:url( {{asset('storage/' . $intro->image) }} )no-repeat; background-size: cover; height: 100%;">
    <div class="container text-white py-5">
        <div class="float-start"></div>
        <div class="float-end">
            <div class="bg-white text-center rounded d-block d-lg-none" style="cursor:pointer;">
                <h4><i class="bi bi-brightness-high-fill text-dark my-3 mx-2" onclick="myFunction()" id="mode2"></i>
                </h4>
            </div>
        </div>
        <div class="me-auto py-5">
            <div class="col-12 col-lg-4 py-5">
                {!! $intro->body !!}
            </div>
        </div>
    </div>
</div>
@endforeach