<main style="margin-top: 50px">
    <!--- PRODUCT -->
    <div class="product-container">
        <div class="container">
            <div class="product-box" style="width: 100%">
                <div class="product-minimal">
                    <div class="product-showcase">
                        <h2 class="title">Keranjang</h2>
                        <div class="showcase-wrapper">
                            <div class="showcase-container">
                                <?php if (empty($data['products'])) { ?>
                                <p style="margin-bottom: 20px">
                                    <em> Keranjang masih kosong. Silahkan berbelanja terlebih dahulu..</em>
                                </p>
                                <?php } else { ?>
                                <?php foreach ($data['products'] as $product) { ?>
                                <div class="showcase" id="<?= $product['id'] ?>" style="overflow: auto">
                                    <a href="#" class="showcase-img-box" style="width: 5rem">
                                        <img src="<?= ASSETS ?>/images/products/geprek.png"
                                            alt="<?= $product['product_name'] ?>" width="70" class="showcase-img">
                                    </a>
                                    <div class="showcase-content" style="width: 30rem">
                                        <h4 class="showcase-title"><?= $product['product_name'] ?></h4>
                                        <a href="<?= BASE_URL ?>/canteen/<?= $product['canteen']['email'] ?>"
                                            style="font-size: 13px"><?= $product['canteen']['name'] ?></a>
                                    </div>
                                    <div class="showcase-content" style="width: 15rem">
                                        <p class="price-qty">
                                            Rp<?= number_format($product['product_price'], 0, '', '.') ?></p>
                                    </div>
                                    <div class="showcase-content"
                                        style="width: 20rem; display: flex; align-items: center; gap: 10px">
                                        <input type="hidden" id="price-<?= $product['id'] ?>" class="quantity-field"
                                            value="<?= $product['product_price'] ?>">
                                        <input type="number" min="1" data-qty='<?= $product['qty'] ?>'
                                            onchange="changeCart(this, '<?= $product['product_id'] ?>')"
                                            style="width: 80px" name="search" id="<?= $product['id'] ?>"
                                            class="quantity-field" value="<?= $product['qty'] ?>">
                                        <p class="price-qty">item</p>
                                    </div>
                                    <div class="showcase-content" style="width: 15rem">
                                        <div class="price-box">
                                            <p class="price" id="subtotal-<?= $product['id'] ?>">
                                                Rp<?= number_format($product['product_price'] * $product['qty'], 0, '', '.') ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="showcase-content" style="width: 10%">
                                        <button onclick="deleteCart('<?= $product['id'] ?>')" class="delete-cart-btn">
                                            <ion-icon name="trash-outline"></ion-icon> Hapus
                                        </button>
                                    </div>
                                </div>
                                <?php }
                                } ?>
                                <div class="showcase" style="overflow: auto">
                                    <div class="showcase-content" style="width:60rem">
                                        <h4 class="showcase-title">Total Belanja: </h4>
                                    </div>
                                    <div class="showcase-content"
                                        style="width: 20rem; display: flex; align-items: center; gap: 10px">
                                        <p id="totalItem">0 item</p>
                                    </div>
                                    <div class="showcase-content" style="width: 17rem">
                                        <div class="price-box">
                                            <p class="price" id="totalPrice">
                                                Rp0
                                            </p>
                                        </div>
                                    </div>
                                    <div class="showcase-content" style="width: 5rem">
                                        <?php if ($data['products']) { ?>
                                        <button class="pay-cart-btn" onclick="pay()">
                                            <ion-icon name="card-outline"></ion-icon> Bayar
                                        </button>
                                        <?php } ?>
                                    </div>
                                </div>
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

function deleteCart(id) {
    xhttp = new XMLHttpRequest();
    let body = "";
    body += "id=" + encodeURIComponent(id);

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById(id).replaceWith('');
            countTotal();
            countCart();
        }
    };

    xhttp.open("POST", "<?= BASE_URL ?>/cart/delete", false);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(body);
}

function countTotal() {
    xhttpCount = new XMLHttpRequest();

    xhttpCount.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            let res = JSON.parse(xhttpCount.responseText);
            document.getElementById("totalItem").innerText = res.total_item + ' item';
            document.getElementById("totalPrice").innerText = 'Rp' + res.total_harga;
        }
    };

    xhttpCount.open("GET", "<?= BASE_URL ?>/cart/total", true);
    xhttpCount.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttpCount.send();
}

function countCart() {
    xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.querySelectorAll('.bag-count').forEach(function(bag) {
                bag.innerText = xhttp.responseText;
            });
        }
    };

    xhttp.open("GET", "<?= BASE_URL ?>/cart/countCart", false);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send();
}

function changeCart(input, product_id, qtyOld) {
    if (input.value < 1) {
        alert('QTY tidak boleh kurang dari 1');
        return;
    }
    xhttpChange = new XMLHttpRequest();
    const userId = <?= $_SESSION['id'] ?>;
    let body = "";
    body += "user_id=" + encodeURIComponent(userId);
    body += "&product_id=" + encodeURIComponent(product_id);
    body += "&qty=" + encodeURIComponent(input.value);

    xhttpChange.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            let res = JSON.parse(xhttpChange.responseText);
            if (res.code === 200) {
                let price = document.getElementById("price-" + input.id).value
                countTotal();
                countCart();
                const formatter = new Intl.NumberFormat('id-ID');
                const formattedNumber = formatter.format(input.value * price);
                document.getElementById("subtotal-" + input.id).innerHTML = 'Rp' + formattedNumber;
                input.dataset.qty = input.value;
                return;
            }

            input.value = input.dataset.qty;
            alert(res.msg);
        }
    };

    xhttpChange.open("POST", "<?= BASE_URL ?>/cart/update", false);
    xhttpChange.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttpChange.send(body);
}

function pay() {
    xhttpPay = new XMLHttpRequest();

    xhttpPay.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(xhttpPay.responseText);
            let res = JSON.parse(xhttpPay.responseText);
            console.log(res);
            if (res.code === 200) {
                window.location.reload();
                return;
            }

            alert(res.msg);
        }
    };

    xhttpPay.open("POST", "<?= BASE_URL ?>/cart/payment", false);
    xhttpPay.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttpPay.send();
}
</script>