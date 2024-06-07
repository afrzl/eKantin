<main style="margin-top: 50px">
    <!--- PRODUCT -->
    <div class="product-container">
        <div class="container">
            <div class="product-box" style="width: 100%">
                <div class="product-minimal">
                    <div class="product-showcase">
                        <div class="showcase-wrapper">
                            <div class="showcase-container">
                                <div class="showcase-order">
                                    <div class="order-title">
                                        <p class="text-transaction">Transaksi
                                            <b>#<?= str_pad($data['transactions'][0]['id'], 6, '0', STR_PAD_LEFT) ?></b>
                                        </p>
                                        <p class="text-transaction" style="color: green">
                                            <?= $data['transactions'][0]['status'] ?>
                                        </p>
                                    </div>
                                    <?php foreach ($data['transactions'][0]['details'] as $trans_detail) { ?>
                                    <div class="order" id="" style="overflow: auto">
                                        <a href="#" class="showcase-img-box" style="width: 5rem">
                                            <img src="<?= ASSETS ?>/images/products/geprek.png" alt="" width="70"
                                                class="showcase-img">
                                        </a>
                                        <div class="showcase-content" style="width: 30rem">
                                            <h4 class="showcase-title"><?= $trans_detail['product_name'] ?></h4>
                                            <a href="<?= BASE_URL ?>/canteen/" style="font-size: 13px">Kantin Bang
                                                Aming</a>
                                        </div>
                                        <div class="showcase-content" style="width: 15rem">
                                            <p class="price-qty">
                                                Rp<?= number_format($trans_detail['price'], 0, '', '.') ?></p>
                                        </div>
                                        <div class="showcase-content"
                                            style="width: 20rem; display: flex; align-items: center; gap: 10px">
                                            <p class="price-qty">x <?= $trans_detail['qty'] ?>
                                                item</p>
                                        </div>
                                        <div class="showcase-content" style="width: 15rem">
                                            <div class="price-box">
                                                <p class="price" id="subtotal-">
                                                    Rp<?= number_format($trans_detail['price'] * $trans_detail['qty'], 0, '', '.') ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="showcase-rating" style="display: flex; gap: 1px; cursor: pointer">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star-outline"></ion-icon>
                                            <ion-icon name="star-outline"></ion-icon>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>