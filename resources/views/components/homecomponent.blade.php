@props(['elevs'])

<div class="article">
    @foreach ($elevs as $elev)
    <div class="card p-2" style="width: 18rem;">
        <img src="{{ asset($elev['img']) }}" alt="{{ $elev['titre'] }}">
        <div class="card-body">
        <h5 class="card-title">{{$elev['titre']}}</h5>
        <p class="card-text">{{$elev['text']}}</p>
        <a href="#" class="btn btn-primary">Lire la suite</a>
        </div>
    </div>
    @endforeach
</div>