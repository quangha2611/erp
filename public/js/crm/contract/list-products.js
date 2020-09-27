var listProducts = '';
var addProduct = document.getElementById('addProduct');
addProduct.addEventListener('click', function () {
    if (checkProduct()) {
                
    }

})


function checkProduct() {
    productId = document.getElementById('productId');
    if (productId.value != null && productId.value != '' && productId.value != NaN) {
        return true;
    }

    return false;
}