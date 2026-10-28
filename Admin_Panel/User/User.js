document.addEventListener('DOMContentLoaded', function() {
    // Delete user
    document.querySelectorAll('.deleteBtn').forEach(btn => {
        btn.addEventListener('click', function() {
            btn.closest('tr').remove();
        });
    });

    // Edit popup logic
    const editPopup = document.getElementById('editPopup');
    const closeBtn = document.querySelector('.close-btn');
    let currentRow = null;
    document.querySelectorAll('.editBtn').forEach(btn => {
        btn.addEventListener('click', function() {
            editPopup.style.display = 'flex';
            currentRow = btn.closest('tr');
            // Show/hide block/unblock based on user
            const blockBtn = editPopup.querySelector('.blockBtn');
            const unblockBtn = editPopup.querySelector('.unblockBtn');
            if (btn.closest('tr').querySelector('.blockBtn')) {
                blockBtn.style.display = 'inline-block';
                unblockBtn.style.display = 'none';
            } else {
                blockBtn.style.display = 'none';
                unblockBtn.style.display = 'inline-block';
            }
        });
    });
    closeBtn.addEventListener('click', function() {
        editPopup.style.display = 'none';
    });
    window.addEventListener('click', function(e) {
        if (e.target === editPopup) {
            editPopup.style.display = 'none';
        }
    });

    // Reset password
    editPopup.querySelector('.resetBtn').addEventListener('click', function() {
        alert('Password reset link sent to user email!');
    });

    // Block/unblock logic
    editPopup.querySelector('.blockBtn').addEventListener('click', function() {
        alert('User blocked!');
        editPopup.querySelector('.blockBtn').style.display = 'none';
        editPopup.querySelector('.unblockBtn').style.display = 'inline-block';
    });
    editPopup.querySelector('.unblockBtn').addEventListener('click', function() {
        alert('User unblocked!');
        editPopup.querySelector('.unblockBtn').style.display = 'none';
        editPopup.querySelector('.blockBtn').style.display = 'inline-block';
    });
});