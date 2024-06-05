<!--- FOOTER -->
<footer>
    <div class="footer-bottom">
        <div class="container"> <img src="<?= ASSETS ?>/images/payment.png" alt="payment method" class="payment-img">
            <p class="copyright"> Copyright 2024 &copy; <a href="#">eKantin STIS</a> All Rights Reserved. </p>
        </div>
    </div>
</footer>

<!--- custom js link  -->
<script src="<?= ASSETS ?>/js/script.js"></script>
<!--- ionicon link  -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<script>
    function searchProduct() {
        xhttpSearch = new XMLHttpRequest();
        let body = "";
        let input = document.getElementById("search");
        body += "q=" + encodeURIComponent(input.value);
        body += "&canteen_id=" + encodeURIComponent(document.getElementById('canteen_id').value);
        body += "&category_id=" + encodeURIComponent(document.getElementById('category_id').value);

        xhttpSearch.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                console.log(xhttpSearch.responseText);
                document.getElementById('product-grid').innerHTML = xhttpSearch.responseText;
            }
        };
        console.log("<?= BASE_URL ?>/home/searchProducts")

        xhttpSearch.open("POST", "<?= BASE_URL ?>/home/searchProducts", false);
        xhttpSearch.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttpSearch.send(body);
    }
</script>
</body>

</html>