@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('content')

    <div class="detail-form">
        <form action="/products/{{ $product->id }}/update" method="post">
            @csrf

            <div class="detail-form__edit">
            <div class="flex align-items-center detail__ttl">
                <a class="detail__back-btn" href="/products">商品一覧</a>
                <span>＞</span>
                <span>{{ $product->name }}</span>
            </div>
            <div class="detail-group">
                <div class="detail-form__group detail-form__group-image ">
                    <input class="detail-form__edit-input detail-form__image-input"type="file" name="image" id="image" accept="image/*">
                    <div class="error">
                    @error('image')
                        {{ $message }}
                    @enderror
                    </div>

                <div id="imagePreview">

                    <div class="detail-form__edit-inputs">

                        <div class="detail-form__group">
                            <label for="name" class="detail-form__edit-name-label">
                                商品名
                            </label>
                            <input name="name" id="name" type="text" value="{{ old('name') }}" placeholder="{{ $product->name }}" class="detail-form__edit-input">
                            <div class="error">
                            @error('name')
                                {{ $message }}
                            @enderror
                            </div>

                        </div>

                        <div class="detail-form__group">
                            <label for="price" class="detail-form__edit-price-label">
                                値段
                            </label>
                            <input name="price" id="price" type="text" value="{{ old('price') }}" placeholder="{{ $product->price }}" class="detail-form__edit-input">
                            <div class="error">
                            @error('price')
                                {{ $message }}
                            @enderror
                            </div>
                        </div>

                        <div class="detail-form__edit-seasons">
                            <label for="seasons" class="detail-form__edit-seasons-label">
                                季節
                            </label>
                            <label for="spring">
                            <input name="seasons[]" type="checkbox" value="春"  class="checkbox">春
                            </label>

                            <label for="summer">
                            <input name="seasons[]" type="checkbox" value="夏"  class="checkbox">夏
                            </label>

                            <label for="autumn">
                            <input name="seasons[]" type="checkbox" value="秋"  class="checkbox">秋

                            </label>
                            <label for="winter">
                            <input name="seasons[]" type="checkbox" value="冬"  class="checkbox">冬
                            </label>
                            <div class="error">
                            @error('seasons')
                                {{ $message }}
                            @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="products-description">
                <label for="description" class="products-form__description-label">
                    商品説明
                </label>
                <textarea name="description" placeholder="{{ $product->description }}" class="products-form__description-txt"></textarea>
                <div class="error">
                @error('description')
                    {{ $message }}
                @enderror
                </div>
            </div>

            <div class="btn">
                <a href="/products" class="detail-form__btn-back btn">戻る</a>

                <input type="submit" value="変更を保存" name="update" class="products-form__back-btn">
                </form>
                
                <form action="" method="post"
                onsubmit="return confirm('本当に削除しますか？')">
                @csrf
                    <button class="detail__delete-btn" type="submit">
                        削除
                    </button>
                </form>
                </div>
            </div>




@endsection