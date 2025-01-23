<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/detail.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="detail-form">
        <form action="/products/<?php echo e($product->id); ?>/update" method="post">
            <?php echo csrf_field(); ?>

            <div class="detail-form__edit">
            <div class="flex align-items-center detail__ttl">
                <a class="detail__back-btn" href="/products">商品一覧</a>
                <span>＞</span>
                <span><?php echo e($product->name); ?></span>
            </div>
            <div class="detail-group">
                <div class="detail-form__group detail-form__group-image ">
                    <input class="detail-form__edit-input detail-form__image-input"type="file" name="image" id="image" accept="image/*">
                    <div class="error">
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

                <div id="imagePreview">

                    <div class="detail-form__edit-inputs">

                        <div class="detail-form__group">
                            <label for="name" class="detail-form__edit-name-label">
                                商品名
                            </label>
                            <input name="name" id="name" type="text" value="<?php echo e(old('name')); ?>" placeholder="<?php echo e($product->name); ?>" class="detail-form__edit-input">
                            <div class="error">
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

                        <div class="detail-form__group">
                            <label for="price" class="detail-form__edit-price-label">
                                値段
                            </label>
                            <input name="price" id="price" type="text" value="<?php echo e(old('price')); ?>" placeholder="<?php echo e($product->price); ?>" class="detail-form__edit-input">
                            <div class="error">
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
                    </div>
                </div>
            </div>
            </div>

            <div class="products-description">
                <label for="description" class="products-form__description-label">
                    商品説明
                </label>
                <textarea name="description" placeholder="<?php echo e($product->description); ?>" class="products-form__description-txt"></textarea>
                <div class="error">
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

            <div class="btn">
                <a href="/products" class="detail-form__btn-back btn">戻る</a>

                <input type="submit" value="変更を保存" name="update" class="products-form__back-btn">
                </form>
                
                <form action="" method="post"
                onsubmit="return confirm('本当に削除しますか？')">
                <?php echo csrf_field(); ?>
                    <button class="detail__delete-btn" type="submit">
                        削除
                    </button>
                </form>
                </div>
            </div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/detail.blade.php ENDPATH**/ ?>