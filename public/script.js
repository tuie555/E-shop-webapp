// This is your test publishable API key.
const stripe = Stripe("pk_test_51QvZD8I6b8l0vEZDvOd4MEf94qDrUsrT4s9fppQowwOmVnsJfSnu1UVpvQ93QQELX9ebU9Pt8AiXqfcfSrawYuzG00DGdphXQb");

initialize();

// Create a Checkout Session as soon as the page loads
async function initialize() {
  const response = await fetch("/create.php", {
    method: "POST",
  });

  const { clientSecret } = await response.json();

  const checkout = await stripe.initEmbeddedCheckout({
    clientSecret,
  });

  // Mount Checkout
  checkout.mount('#checkout');
}