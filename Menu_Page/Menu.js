document.addEventListener('DOMContentLoaded', function() {
    // Cart logic
    let cartCount = 0;
    const cartCountEl = document.getElementById('cart-countW');
    document.querySelectorAll('.add-cartW').forEach(btn => {
        btn.addEventListener('click', function() {
            cartCount++;
            if (cartCountEl) cartCountEl.textContent = cartCount;
            btn.textContent = "Added!";
            btn.disabled = true;
            setTimeout(() => {
                btn.textContent = "Add to Cart";
                btn.disabled = false;
            }, 1200);
        });
    });

    // Smooth scroll to section on icon click
    document.querySelectorAll('.iconW').forEach(icon => {
        icon.addEventListener('click', function() {
            const targetId = icon.getAttribute('data-target');
            const section = document.getElementById(targetId);
            if (section) {
                section.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });

    // Arrow navigation for horizontal cards (scroll 2 cards per click)
    document.querySelectorAll('.cards-containerW').forEach(container => {
        const cards = container.querySelector('.cardsW');
        const card = cards.querySelector('.cardW');
        const cardWidth = card ? card.offsetWidth + 32 : 240; // 32px gap
        const left = container.querySelector('.leftW');
        const right = container.querySelector('.rightW');
        left.addEventListener('click', () => {
            cards.scrollBy({ left: -2 * cardWidth, behavior: 'smooth' });
        });
        right.addEventListener('click', () => {
            cards.scrollBy({ left: 2 * cardWidth, behavior: 'smooth' });
        });
    });

    // Scroll to top when arrow is clicked
    document.querySelector('.scroll-to-top').addEventListener('click', function(e) {
        e.preventDefault();
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
});