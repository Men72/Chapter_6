@extends('layouts.app')

@section('title', 'Products')

@section('content')
    <h1>Product Catalog</h1>
    
    <table>
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Stock Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product['name'] }}</td>
                    <td>${{ $product['price'] }}</td>
                    <td>
                        {{ $product['stock'] }}
                    </td>
                    <td>
                        @if($product['stock'] > 0)
                            <span class="in-stock">In Stock</span>
                        @else
                            <span class="out-of-stock">Out of Stock</span>
                        @endif
                    </td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection