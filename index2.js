$(document).ready(function () {
    $(".category-product").hide();

    $(".categories__item").on("click", function () {
        $(".category-product").hide();
        $(".general-product").hide();

        var categoryId = $(this).data("category");

        $("#" + categoryId).show();

        $(".categories__item").removeClass("active");
        $(this).addClass("active");
    });
});

function redirectToDetailProduit(nom) {
    window.location.href = "view/detailProduit.php?nomOfProduit=" + nom + "";
};


function setCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + value + expires + "; path=/";
}

function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) === ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}



function displayProductsInModal() {
    var modalBody = document.querySelector('.row.border-top.border-bottom.rowpanier');
    var totalProductsCountElement = document.getElementById('nombreProduits');

    var cartItems = JSON.parse(getCookie('cartItems')) || [];
    var cartCount = cartItems.length;

    modalBody.innerHTML = '';

    cartItems.forEach(function (product) {
        var productDiv = document.createElement('div');
        productDiv.classList.add('row', 'main', 'align-items-center', 'rowpanier', 'mainpanier', 'product');

        productDiv.innerHTML = `
        <div class="col-2 col-2Panier aa">
        <img class="img-fluid" src="view/${product.image}">
        </div>
        
        <div class="col-4 col-2Panier">
            <div class="row text-muted rowpanier mb-2">${product.category}</div>
            <div class="row rowpanier mt-1">${product.name}</div>
        </div>
        
        <div class="col col-2Panier proQty ml-4">
        <a href="#" class="qtybtn minus">-</a>
        <a href="#" class="border lien quantity">${product.quantity}</a>
        <a href="#" class="qtybtn plus">+</a>
        </div>

        <div class="col col-2Panier">
            <label id="totalPriceProduct">${(product.price * product.quantity).toFixed(2)}</label>
            <span class="close">&#10005;</span>
        </div>
        `;

        modalBody.appendChild(productDiv);
    });

    totalProductsCountElement.textContent = cartCount;
}


document.addEventListener("DOMContentLoaded", function () {
    var cartCountElement = document.querySelector('.cart-count');
    var addToCartButtons = document.querySelectorAll('.addToCart');

    var cartItems = JSON.parse(getCookie('cartItems')) || [];

    var cartCount = cartItems.length;
    cartCountElement.textContent = cartCount;

    addToCartButtons.forEach(function (button) {
        button.addEventListener('click', function (event) {
            event.preventDefault();

            var productId = button.getAttribute('data-id');
            var productImage = button.getAttribute('data-image');
            var productName = button.getAttribute('data-name');
            var productPrice = button.getAttribute('data-price');
            var productCategory = button.getAttribute('data-category');
            var productQuantity = button.getAttribute('data-quantité');
            var productPriceUnitaire = button.getAttribute('data-priceUnitaire');

            cartItems.push({
                id: productId,
                image: productImage,
                name: productName,
                price: parseFloat(
                    productPrice),
                category: productCategory,
                quantity: productQuantity,
                priceUnitaire: productPriceUnitaire
            });

            cartCount = cartItems.length;
            cartCountElement.textContent = cartCount;
            setCookie('cartItems', JSON.stringify(cartItems), 6);
        });

    });

    displayProductsInModal();


$('.proQty').on('click', '.qtybtn', function () {
    var $button = $(this);
    var productContainer = $button.closest('.product');
    var quantityElement = productContainer.find('.border.lien.quantity');
    var totalPriceProduct = productContainer.find('#totalPriceProduct');
    var oldValue = parseInt(quantityElement.text(), 10);

    var productId = productContainer.find('.addToCart').data('id');

    var productIndex = cartItems.findIndex(item => item.id === productId);

    if (productIndex !== -1) {
        var product = cartItems[productIndex];

        var newVal;
        if ($button.hasClass('plus')) {
            newVal = oldValue + 1;
        } else if ($button.hasClass('minus') && oldValue > 0) {
            newVal = oldValue - 1;
        } else {
            newVal = 0;
        }

        quantityElement.text(newVal.toString());

        product.quantity = newVal;
        product.totalPrice = (newVal * product.priceUnitaire).toFixed(2);

        totalPriceProduct.text(product.totalPrice);

    }

});
});


