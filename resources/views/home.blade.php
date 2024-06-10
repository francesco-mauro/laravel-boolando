@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-4">
                    <div class="card">
                        <img src="{{ asset($product['frontImage']) }}" class="card-img-top" alt="{{ $product['name'] }}">
                        <div class="card-body">
                            <h4>{{ $product['name'] }}</h4>
                            <p>{{ $product['brand'] }}</p>
                            <p>{{ $product['price'] }}€</p>
                            @foreach ($product['badges'] as $badge)
                                <p class="badge text-primary">{{ $badge['value'] }}</p>
                            @endforeach
                            @if ($product['isInFavorites'])
                                <p>Preferito</p>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

