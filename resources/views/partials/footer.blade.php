<!-- footter -->
<div class="bg-dark text-white pt-5">
    <div class="container">
        <div class="row row-cols-1 row-cols-lg-4 py-5">
            <div class="col mb-3">
                <h4>About</h4>
                <div class="pt-3">
                    @foreach($abouts as $about)
                    <div class="opactity-50">
                        {!! $about->description !!}
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col mb-3">
                <h4>Quick Link</h4>
                <div class="pt-3">
                    <p> <a class="text-decoration-none text-white opacity-50" href="#home">Home</a></p>
                    <p> <a class="text-decoration-none text-white opacity-50" href="#About">About</a></p>
                    <p> <a class="text-decoration-none text-white opacity-50" href="#skill">Skill</a></p>
                    <p> <a class="text-decoration-none text-white opacity-50" href="#project">Project</a></p>
                    <p> <a class="text-decoration-none text-white opacity-50" href="#certificate">Certificate</a></p>
                    <p> <a class="text-decoration-none text-white opacity-50" href="#contact">Contact</a></p>
                </div>
            </div>
            <div class="col mb-3">
                <h4>Maps</h4>
                <div class="pt-3">
                    @foreach($alamats as $alamat)
                    {!! $alamat->maps !!}
                    @endforeach
                </div>
            </div>
            <div class="col mb-3">
                <h4>Follow</h4>
                <div class="pt-3">
                    <div class="d-flex">
                        @foreach($sosmeds as $sosmed)
                        <a class="text-decoration-none text-white" href="{{ $sosmed->url }}">{!! $sosmed->icon
                            !!}</i></a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="border border-1 border-white mt-4"></div>
        <div class="text-center py-5">
            <p class="opacity-50">Copyright &copy2022 All rights reserved | by RafiGusti</p>
            <p><i class="bi bi-emoji-smile-fill text-warning"></i></p>
        </div>
    </div>
</div>