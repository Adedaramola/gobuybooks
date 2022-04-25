<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

<script>
cartData = JSON.parse(localStorage.getItem('cart'));
const url = new URL(window.location.href);
if (url.searchParams.get('status') == 'successful') {
    console.log(url.searchParams.get('tx_ref'));
    console.log(cartData);
    fetch('/order', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                "X-CSRF-Token": document.querySelector('#csrf-token').value
            },
            body: JSON.stringify({
                order_tag: url.searchParams.get('tx_ref'),
                order: cartData
            }),
        })
        .then(response => response.json())
        .then(data => {
            if (data.status == 'success') {
                localStorage.removeItem("cart");
                window.location.href = '/checkout';
            }
        })
        .catch((error) => {
            console.error('Error:', error);
        });
} else {
    window.location.href = '/checkout';
}
</script>