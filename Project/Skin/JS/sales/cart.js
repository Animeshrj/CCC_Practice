// Sample products
const products = [
    { id: 1, name: 'Product 1', price: 10 },
    { id: 2, name: 'Product 2', price: 20 },
    { id: 3, name: 'Product 3', price: 30 }
];

const cart = [];

// Function to display products in the cart
function displayCart() {
    const cartDiv = document.getElementById('cart');
    cartDiv.innerHTML = '';

    cart.forEach(item => {
        const cartItem = document.createElement('div');
        cartItem.classList.add('cart-item');
        cartItem.innerHTML = `<span>${item.name}</span> - $${item.price}`;
        cartDiv.appendChild(cartItem);
    });

    // Calculate total
    const total = cart.reduce((acc, item) => acc + item.price, 0);
    document.getElementById('total').innerText = `Total: $${total}`;
}

// Function to add a product to the cart
function addToCart(productId) {
    const product = products.find(item => item.id === productId);
    if (product) {
        cart.push(product);
        displayCart();
    }
}

// Initialize cart display
displayCart();
