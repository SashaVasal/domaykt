@extends('layouts.app')

@section('content')
    <div class="main">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach($slide_cards as $slide_card)
                    <div class="carousel-item">
                        <img src="storage/{{$slide_card->image}}" width="100%" height="300pt">
                    </div>
                @endforeach
            </div>

            <a
                class="carousel-control-prev"
                href="#carouselExampleControls"
                role="button"
                data-slide="prev"
            >
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a
                class="carousel-control-next"
                href="#carouselExampleControls"
                role="button"
                data-slide="next"
            >
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="container">
            @for($i = 0; $i < count($houses)/3 +1; $i++)
                <div class="row row-cols-3">
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="storage/{{$houses[$i]->image}}" class="card-img-top" height="100%">
                            <div class="card-body">
                                <p class="card-text">{{$houses[$i]->address}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="storage/{{$houses[$i+1]->image}}" class="card-img-top" height="100%">
                            <div class="card-body">
                                <p class="card-text">{{$houses[$i+1]->address}}</p>
                            </div>
                        </div>
                    </div><div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="storage/{{$houses[$i+2]->image}}" class="card-img-top" height="100%">
                            <div class="card-body">
                                <p class="card-text">{{$houses[$i+2]->address}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>

        <div>
            {{$houses->links()}}
        </div>
    </div>

<script>
    $('.carousel-item').first().addClass("active");
</script>
@endsection
