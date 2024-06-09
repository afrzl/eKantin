<main style="margin-top: 50px">
    <!--- PRODUCT -->
    <div class="product-container">
        <div class="container">
            <div class="product-box" style="width: 100%">
                <div class="product-minimal">
                    <div class="product-showcase">
                        <h2 class="title">Checkout <?= $data['product'][0]['canteen']['name'] ?></h2>
                        <div class="showcase-wrapper">
                            <div class="showcase-container">
                                <?php if (empty($data['products'])) { ?>
                                <p style="margin-bottom: 20px">
                                    <em> Keranjang masih kosong. Silahkan berbelanja terlebih dahulu..</em>
                                </p>
                                <?php } else { ?>
                                <div class="showcase-order" id="showcase-order-<?= $key ?>">
                                    <div class="order-title">
                                        <a href="<?= BASE_URL ?>/order/<?= $data['product'][0]['canteen']['email'] ?>"
                                            class="text-transaction">
                                            <?= $data['product'][0]['canteen']['name'] ?></b>
                                        </a>
                                    </div>
                                    <?php foreach ($data['products'] as $product) { ?>
                                    <div class="order" id="order-<?= $product['id'] ?>" style="overflow: auto">
                                        <a href="#" class="showcase-img-box" style="width: 5rem">
                                            <img src="<?= ASSETS ?>/images/products/<?= $product['product_image'] ?>"
                                                alt="" width="70" class="showcase-img">
                                        </a>
                                        <div class="showcase-content" style="width: 30rem">
                                            <a href="<?= BASE_URL ?>/product/<?= $product['product_slug'] ?>"
                                                class="showcase-title"><?= $product['product_name'] ?></a>
                                        </div>
                                        <div class="showcase-content" style="width: 15rem">
                                            <p class="price-qty">
                                                Rp<?= number_format($product['product_price'], 0, '', '.') ?></p>
                                        </div>
                                        <div class="showcase-content"
                                            style="width: 20rem; display: flex; align-items: center; gap: 10px">
                                            <p class="price-qty">x <?= $product['qty'] ?> item</p>
                                        </div>
                                        <div class="showcase-content" style="width: 15rem">
                                            <div class="price-box">
                                                <p class="price" id="subtotal-<?= $product['id'] ?>">
                                                    Rp<?= number_format($product['product_price'] * $product['qty'], 0, '', '.') ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <div class="order" id="" style="overflow: auto">
                                        <div class="showcase-content" style="width:52rem">
                                            <h4 class="showcase-title">Total Belanja: </h4>
                                        </div>
                                        <div class="showcase-content"
                                            style="width: 20rem; display: flex; align-items: center; gap: 10px">
                                            <p class="price-qty" id="totalItem">0 item</p>
                                        </div>
                                        <div class="showcase-content" style="width: 15rem">
                                            <div class="price-box">
                                                <p class="price" id="totalPrice">
                                                    Rp0
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order" id="" style="overflow: auto">
                                        <div class="showcase-content"
                                            style="width: 72rem; display: flex; align-items: right; text-align: right; flex-direction: column">
                                            <p class="price-qty" style="margin-bottom: 30px; margin-right: 10px">Jenis
                                                pemesanan :</p>
                                            <p class="price-qty dine-in"
                                                style="margin-bottom: 30px; margin-right: 10px">Nomor
                                                meja :</p>
                                            <p class="price-qty" style="margin-bottom: 30px; margin-right: 10px"></p>
                                        </div>
                                        <div class="showcase-content" style="width: 15rem">
                                            <form action=""
                                                style="display: flex; align-items: left; gap: 15px; flex-direction: column">
                                                <select name="jenis_pemesanan" onchange="cekJenisPemesanan(this)"
                                                    id="jenis_pemesanan">
                                                    <option value="1">Dine In</option>
                                                    <option value="2">Take Away</option>
                                                </select>
                                                <input type="number" class="dine-in" name="no_meja" id="no_meja"
                                                    placeholder="Cth: 10">
                                                <button type="button" class="pay-cart-btn"
                                                    onclick="pay('<?= $data['product'][0]['canteen']['id'] ?>'); return;">
                                                    <ion-icon name="card-outline"></ion-icon> Bayar
                                                </button>
                                            </form>
                                        </div>
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
</main>

<script type="text/javascript">
document.addEventListener("DOMContentLoaded", function() {
    countTotal();
});

function cekJenisPemesanan(input) {
    let dineIn = document.getElementsByClassName("dine-in");
    if (input.value == '1') {
        Array.from(dineIn).forEach(function(item) {
            item.style.display = 'block';
            item.required = true;
        });
    } else {
        Array.from(dineIn).forEach(function(item) {
            item.style.display = 'none';
            item.required = false;
        });
    }
}

function countTotal() {
    xhttpCount = new XMLHttpRequest();
    let canteen_id = '<?= $data['product'][0]['canteen']['id'] ?>'

    xhttpCount.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            let res = JSON.parse(xhttpCount.responseText);
            for (let i = 0; i < res.total_item.length; i++) {
                if (res.canteen_id[i] == canteen_id) {
                    document.getElementById("totalItem").innerText = res.total_item[i] + ' item';
                    document.getElementById("totalPrice").innerText = 'Rp' + res.total_harga[i];
                }
            }
        }
    };

    xhttpCount.open("GET", "<?= BASE_URL ?>/cart/total", true);
    xhttpCount.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttpCount.send();
}

function pay(canteen_id) {
    xhttpPay = new XMLHttpRequest();
    let jenis_pemesanan = document.getElementById('jenis_pemesanan').value;
    let no_meja = document.getElementById('no_meja').value;
    if (jenis_pemesanan == 1 && no_meja == "") {
        toast("No meja wajib diisi");
        return;
    }
    let body = "canteen_id=" + encodeURIComponent(canteen_id);
    body += "&jenis_pemesanan=" + encodeURIComponent(jenis_pemesanan);
    body += "&no_meja=" + encodeURIComponent(no_meja);

    xhttpPay.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            // return;
            let res = JSON.parse(this.responseText);
            if (res.code === 200) {
                console.log(this.responseText);
                window.snap.pay(res.msg, {
                    onSuccess: function(result) {
                        xhttpSuccessPay = new XMLHttpRequest();
                        let body = "";
                        body += "id=" + encodeURIComponent(res.id_transaction);

                        xhttpSuccessPay.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
                                console.log(this.responseText);
                                let res = JSON.parse(this.responseText);
                                if (res.code === 200) {
                                    window.location = '<?= BASE_URL ?>/order';
                                    return;
                                }
                            }
                        };

                        xhttpSuccessPay.open("POST", "<?= BASE_URL ?>/cart/callback_pay", false);
                        xhttpSuccessPay.setRequestHeader("Content-type",
                            "application/x-www-form-urlencoded");
                        xhttpSuccessPay.send(body);

                        console.log(result);
                    },
                    onPending: function(result) {
                        /* You may add your own implementation here */
                        alert("wating your payment!");
                        console.log(result);
                    },
                    onError: function(result) {
                        /* You may add your own implementation here */
                        alert("payment failed!");
                        console.log(result);
                    },
                    onClose: function() {
                        window.location = '<?= BASE_URL ?>/order';
                        // alert('you closed the popup without finishing the payment');
                    }
                })
            }
        }
    };

    xhttpPay.open("POST", "<?= BASE_URL ?>/cart/payment", false);
    xhttpPay.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttpPay.send(body);
}
</script>