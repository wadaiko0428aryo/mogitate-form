<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/products.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
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
                <?php echo csrf_field(); ?>
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
                                <option value="" disabled hidden <?php echo e(is_null(request()->input('sort')) ? 'selected' : ''); ?> >価格で並べ替え</option>
                                <option value="asc" <?php echo e(request()->input('sort') == 'asc' ? 'selected' : ''); ?>>価格が低い順</option>
                                <option value="desc" <?php echo e(request()->input('sort') == 'desc' ? 'selected' : ''); ?>>価格が高い順</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>

        <div class="flex wrap product-lists__box">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="product-card">
                <a class="product-card__detail-link" href="<?php echo e(url('/products/' . $product->id)); ?>" >
                    <img src="<?php echo e(asset('storage/images/fruits-img/' . $product->image)); ?>" alt="<?php echo e($product->name); ?>">
                    <div class="flex justify-between align-items-center product-card__txt">
                        <p><?php echo e($product->name); ?></p>
                        <p>￥<?php echo e($product->price); ?></p>
                    </div>
                </a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

    <div class="flex center">
        <?php if($products->isNotEmpty()): ?>
        <?php echo e($products->links('vendor.pagination.custom')); ?>

        <?php endif; ?>
    </div>

            </div>
        </div>
    </div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/products.blade.php ENDPATH**/ ?>