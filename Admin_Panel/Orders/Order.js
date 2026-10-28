document.addEventListener('DOMContentLoaded', function() {
    // Complete order
    document.querySelectorAll('.completeBtn').forEach(btn => {
        btn.addEventListener('click', function() {
            const statusCell = btn.closest('tr').querySelector('.status');
            statusCell.textContent = 'Completed';
            statusCell.classList.remove('pending');
            statusCell.classList.add('completed');
            btn.remove(); // Remove complete button after completion
        });
    });

    // Remove order
    document.querySelectorAll('.removeBtn').forEach(btn => {
        btn.addEventListener('click', function() {
            btn.closest('tr').remove();
        });
    });

    // User popup
    const userPopup = document.getElementById('userPopup');
    const userDetails = document.getElementById('userDetails');
    const closeBtn = document.querySelector('.close-btn');
    document.querySelectorAll('.user-popup-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            // Demo user details (replace with dynamic data if needed)
            const userId = btn.getAttribute('data-user');
            let details = '';
            if (userId === '1') {
                details = `
                    <p><strong>User ID:</strong> U001</p>
                    <p><strong>Name:</strong> Rahul Sharma</p>
                    <p><strong>Email:</strong> rahul@example.com</p>
                    <p><strong>Phone:</strong> 9876543210</p>
                    <p><strong>Address:</strong> 12, MG Road, Delhi</p>
                `;
            } else if (userId === '2') {
                details = `
                    <p><strong>User ID:</strong> U002</p>
                    <p><strong>Name:</strong> Priya Singh</p>
                    <p><strong>Email:</strong> priya@example.com</p>
                    <p><strong>Phone:</strong> 9123456780</p>
                    <p><strong>Address:</strong> 45, Park Street, Mumbai</p>
                `;
            } else {
                details = `<p>No details found.</p>`;
            }
            userDetails.innerHTML = details;
            userPopup.style.display = 'flex';
        });
    });
    closeBtn.addEventListener('click', function() {
        userPopup.style.display = 'none';
    });
    window.addEventListener('click', function(e) {
        if (e.target === userPopup) {
            userPopup.style.display = 'none';
        }
    });
});