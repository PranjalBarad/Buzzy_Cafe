document.addEventListener('DOMContentLoaded', function() {
    // Mark as read
    document.querySelectorAll('.readBtn').forEach(btn => {
        btn.addEventListener('click', function() {
            btn.textContent = 'Read';
            btn.style.background = '#c8e6c9';
            btn.style.color = '#388e3c';
            btn.disabled = true;
        });
    });

    // Remove message
    document.querySelectorAll('.removeBtn').forEach(btn => {
        btn.addEventListener('click', function() {
            btn.closest('tr').remove();
        });
    });
});