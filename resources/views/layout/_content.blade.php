<div class="container">
    <div class="row">
        {{--                kolom 1 081266279692 irus--}}
        @for($i = 0; $i < 6; $i++)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card mx-auto mt-3" style="width: 18rem;">
                    <div class="card-body d-flex flex-column">
                        <img src="{{ asset('minato.jpg') }}" class="card-img-top" alt="gambar tidak ada">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary align-self-center">Go somewhere</a>
                    </div>
                </div>
            </div>
        @endfor
    </div>
</div>