<?php require_once __DIR__ . "/../template/header.php" ?>
<?php require_once __DIR__ . "/../template/navbar.php" ?>

<section id="detailProduct">
    <div class="detailContainer">
        <div class="detailImage">
            <img id="productImage"></img>
        </div>
        <div class="productInfo">
            <div id="productName"></div>
            <div class="productStockCategory">
                <div class="categorySec">
                    <img src="/public/images/category.png" class="detailIcon">
                    <div id="productCategory"></div>
                </div>
                <div class="stockSec">
                    <img src="/public/images/quantity.png" class="detailIcon">
                    <div id="productStock"></div>
                </div>
            </div>
            <div id="productPrice"></div>
            <div id="productDesc"></div>
            <button type="button" class="buttonSec">Buy</button>
        </div>
    </div>
</section>

<?php require_once __DIR__ . "/../template/footer.php" ?>

<script>
	/* required scripts */
	<?php include '../../public/js/detailProduct.js'; ?>
</script>