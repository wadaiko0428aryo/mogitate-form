@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="register-form">
    <div class="register-form__title">
        <h2>商品登録</h2>
    </div>

    <div class="register-form__content">
        <form action="/products/register" method="post">
        @csrf

            <div class="register-form__group register-form__group-name ">
                <label for="name" class="register-form__label">
                    商品名
                    <span class="register-form__required">必須</span>
                </label>
                <input type="text" name="name" id="name" placeholder="商品名を入力" value="{{ old('name') }}" class="register-from__input">
                <div class="register-form__error">
                    @error('name')
                        {{ $message }}
                    @enderror
                </div>
            </div>

            <div class="register-form__group register-form__group-price ">
                <label for="price" class="register-form__label">
                    値段
                    <span class="register-form__required">必須</span>
                </label>
                <input type="text" name="price" id="price" placeholder="値段を入力" value="{{ old('price') }}" class="register-form__error">
                @error('price')
                    {{ $message }}
                @enderror
            </div>

            <div class="register-form__group register-form__group-image ">
                <label for="image" class="register-form__label">
                    商品画像
                    <span class="register-form__required">必須</span>
                </label>

                <input type="file" name="image" id="image" accept="image/*">
                <div class="register-form__error">
                @error('image')
                    {{ $message }}
                @enderror
                </div>
                @error('image')
                    {{ $message }}
                @enderror

                <div id="imagePreview"></div>
            </div>

            <div class="register-form__group register-form__group-season ">
                <label for="season" class="register-form__label">
                    季節
                    <span class="register-form__required">必須</span>
                    <span class="register-form__choice">複数選択可</span>
                </label>
                <label for="spring">
                    <input name="seasons[]" type="checkbox" value="春"  class="register-form__season-input">春
                </label>

                <label for="summer">
                    <input name="seasons[]" type="checkbox" value="夏"  class="detail-form__season-input">夏
                </label>

                <label for="autumn">
                    <input name="seasons[]" type="checkbox" value="秋"  class="detail-form__season-input">秋
                </label>

                <label for="winter">
                    <input name="seasons[]" type="checkbox" value="冬"  class="detail-form__season-input">冬
                </label>
                <div class="register-form__error">
                @error('seasons')
                    {{ $message }}
                @enderror
                </div>
            </div>

            <div class="register-form__group register-form__group-description ">
                <label for="description" class="register-form__label">
                    商品説明
                    <span class="register-form__required">必須</span>
                </label>
                <textarea class="register-form__textarea" name="description" id="description" value="{{ old('description') }}" placeholder="商品の説明を入力"></textarea>
                <div class="register-form__error">
                @error('description')
                    {{ $message }}
                @enderror
                </div>
            </div>

            <div class="register-form__btn">
            <a href="/products" class="register-form__btn-back btn">戻る</a>
            <input type="submit" name="register" class="register-form__btn-register btn">
        </div>

        </form>
    </div>
</div>



<script>
    document.getElementById('image').addEventListener('change', function(event) {
        const imagePreview = document.getElementById('imagePreview');
        imagePreview.innerHTML = ''; // クリア

        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.style.maxWidth = '200px';
                img.style.maxHeight = '200px';
                imagePreview.appendChild(img);
            };
            reader.readAsDataURL(file);
        }
    });
</script>
@endsection