
let cart = JSON.parse(localStorage.getItem('cart')) || [];

function addToCart(id, name, price, quantity, image){
    let item = {
        id: id,
        name: name,
        price: price,
        quantity: quantity,
        image: image
    }

    cart.push(item);
    addToLocalStorage(cart);
}

function removeItem(id){
    cart = cart.filter(function(item) {
        return item.id != id;
    });
    
    addToLocalStorage(cart);
    window.location.replace("/cart");
}

function clearCart(){
    window.localStorage.clear();
}

function addToLocalStorage(){
    localStorage.setItem('cart', JSON.stringify(cart)); 
    document.querySelector('#CartCount').innerHTML = JSON.parse(localStorage.getItem('cart')).length;
}

