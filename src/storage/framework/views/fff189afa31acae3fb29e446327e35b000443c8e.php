<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/register.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="register-form">
    <div class="register-form__title">
        <h2>商品登録</h2>
    </div>

    <div class="register-form__content">
        <form action="/products/register" method="post">
        <?php echo csrf_field(); ?>

            <div class="register-form__group register-form__group-name ">
                <label for="name" class="register-form__label">
                    商品名
                    <span class="register-form__required">必須</span>
                </label>
                <input type="text" name="name" id="name" placeholder="商品名を入力" value="<?php echo e(old('name')); ?>" class="register-from__input">
                <div class="register-form__error">
                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <?php echo e($message); ?>

                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>

            <div class="register-form__group register-form__group-price ">
                <label for="price" class="register-form__label">
                    値段
                    <span class="register-form__required">必須</span>
                </label>
                <input type="text" name="price" id="price" placeholder="値段を入力" value="<?php echo e(old('price')); ?>" class="register-form__error">
                <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <?php echo e($message); ?>

                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="register-form__group register-form__group-image ">
                <label for="image" class="register-form__label">
                    商品画像
                    <span class="register-form__required">必須</span>
                </label>

                <input type="file" name="image" id="image" accept="image/*">
                <div class="register-form__error">
                <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <?php echo e($message); ?>

                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <?php echo e($message); ?>

                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

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
                <?php $__errorArgs = ['seasons'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <?php echo e($message); ?>

                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>

            <div class="register-form__group register-form__group-description ">
                <label for="description" class="register-form__label">
                    商品説明
                    <span class="register-form__required">必須</span>
                </label>
                <textarea class="register-form__textarea" name="description" id="description" value="<?php echo e(old('description')); ?>" placeholder="商品の説明を入力"></textarea>
                <div class="register-form__error">
                <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <?php echo e($message); ?>

                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/register.blade.php ENDPATH**/ ?>