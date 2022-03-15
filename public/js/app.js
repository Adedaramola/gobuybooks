
let cart = JSON.parse(localStorage.getItem('cart'));

function addToCart(id, name, price){
    let item = {
        id: id,
        name: name,
        price: price
    }

    cart.push(item);
    addToLocalStorage(cart);
}

function addToLocalStorage(){
    localStorage.setItem('cart', JSON.stringify(cart)); 
    document.querySelector('#CartCount').innerHTML = JSON.parse(localStorage.getItem('cart')).length;
}