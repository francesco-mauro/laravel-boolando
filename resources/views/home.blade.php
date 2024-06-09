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
                            @if ($product['isInFavorites'])
                                <p>Preferito</p>
                            @endif
                            @foreach ($product['badges'] as $badge)
                                <span class="badge badge-primary">{{ $badge['value'] }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

