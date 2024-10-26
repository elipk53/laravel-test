<section>
    <div class="container">
    @foreach($quotes as $quote)
            <div class="row d-flex justify-content-center align-items-center mb-3">
                <div class="col col-lg-9 col-xl-7">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5">

                            <div class="text-center mb-4 pb-2">
                                <img src="https://picsum.photos/200?{{$loop->index}}"
                                     alt="Bulb" width="100">
                            </div>

                            <figure class="text-center mb-0">
                                <blockquote class="blockquote">
                                    <p class="pb-3">
                                        <i class="fas fa-quote-left fa-xs text-primary"></i>
                                        <span class="lead font-italic">{{ $quote }}</span>
                                        <i class="fas fa-quote-right fa-xs text-primary"></i>
                                    </p>
                                </blockquote>
                                <figcaption class="blockquote-footer mb-0">
                                    Kanye West
                                </figcaption>
                            </figure>

                        </div>
                    </div>
                </div>

            </div>

    @endforeach
    </div>
</section>

