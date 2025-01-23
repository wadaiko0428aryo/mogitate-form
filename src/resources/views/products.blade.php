@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/products.css') }}">
@endsection

@section('content')
    <div class="products-form">

        <div class="products-form__header">
            <h2>商品一覧</h2>
            <a href="/products/register" class="products-form__register-btn" >
                    + 商品を追加
            </a>
        </div>

        <div class="products-form__view">

            <div class="products-form__search-group">
                <form action="/products/search" method="get" class="search-form">
                @csrf
                    <div class="products-form__search">
                        <div class="search-form__input">
                            <input type="text" id="name" name="name" placeholder="商品名で検索" class="products-form__search-input">
                        </div>
                        <input type="submit" value="検索" class="products-form__search-btn">
                    </div>
                    <div class="products-form__order">
                        <div class="products-form__order-title">
                            <p>価格順で表示</p>
                        </div>
                        <div class="product-lists__search__form--pull-down">
                            <select name="sort" id="select">
                                <option value="" disabled hidden {{ is_null(request()->input('sort')) ? 'selected' : ''
                                }} >価格で並べ替え</option>
                                <option value="asc" {{ request()->input('sort') == 'asc' ? 'selected' : '' }}>価格が低い順</option>
                                <option value="desc" {{ request()->input('sort') == 'desc' ? 'selected' : '' }}>価格が高い順</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>

        <div class="flex wrap product-lists__box">
            @foreach ($products as $product)
            <div class="product-card">
                <a class="product-card__detail-link" href="{{ url('/products/' . $product->id) }}" >
                    <img src="{{ asset('storage/images/fruits-img/' . $product->image) }}" alt="{{ $product->name }}">
                    <div class="flex justify-between align-items-center product-card__txt">
                        <p>{{ $product->name }}</p>
                        <p>￥{{ $product->price }}</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>

    <div class="flex center">
        @if($products->isNotEmpty())
        {{ $products->links('vendor.pagination.custom') }}
        @endif
    </div>

            </div>
        </div>
    </div>




@endsection