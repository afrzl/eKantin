<main style="margin-top: 50px">
    <!--- PRODUCT -->
    <div class="product-container">
        <div class="container">
            <div class="product-box" style="width: 100%">
                <div class="product-minimal">
                    <div class="product-showcase">
                        <h2 class="title"><?= $data['title'] ?></h2>
                        <div class="showcase-wrapper">
                            <div class="showcase-container">
                                <?php if (empty($data['transactions'])) { ?>
                                <p style="margin-bottom: 20px">
                                    <em> Riwayat pesanan masih kosong. Silahkan berbelanja terlebih dahulu..</em>
                                </p>
                                <?php } else { ?>
                                <?php foreach ($data['transactions'] as $transaction) { ?>
                                <div class="showcase-order">
                                    <div class="order-title">
                                        <a href="<?= BASE_URL ?>/order/<?= $transaction['id'] ?>"
                                            class="text-transaction">Transaksi
                                            <b>#<?= str_pad($transaction['id'], 6, '0', STR_PAD_LEFT) ?></b>
                                        </a>
                                        <p class="text-transaction" style="color: green"><?= $transaction['status'] ?>
                                        </p>
                                    </div>
                                    <?php foreach ($transaction['details'] as $trans_detail) { ?>
                                    <div class="order" id="" style="overflow: auto">
                                        <a href="#" class="showcase-img-box" style="width: 5rem">
                                            <img src="<?= ASSETS ?>/images/products/geprek.png" alt="" width="70"
                                                class="showcase-img">
                                        </a>
                                        <div class="showcase-content" style="width: 30rem">
                                            <a href="<?= BASE_URL ?>/product/<?= $trans_detail['product_slug'] ?>"
                                                class="showcase-title"><?= $trans_detail['product_name'] ?></a>
                                            <a href="<?= BASE_URL ?>/canteen/<?= $trans_detail['canteen_slug'] ?>"
                                                style="font-size: 13px"><?= $trans_detail['canteen_name'] ?></a>
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
                                <?php }
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>