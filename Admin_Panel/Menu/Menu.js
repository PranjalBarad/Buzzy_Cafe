document.addEventListener('DOMContentLoaded', function() {
    // Show/hide add menu form
    const addBtn = document.getElementById('addMenuBtn');
    const form = document.getElementById('addMenuForm');
    addBtn.addEventListener('click', function() {
        form.style.display = form.style.display === 'none' ? 'flex' : 'none';
    });

    // Add menu item
    const tableBody = document.getElementById('menuTableBody');
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        const imageInput = document.getElementById('menuImage');
        const nameInput = document.getElementById('menuName');
        const priceInput = document.getElementById('menuPrice');
        const descInput = document.getElementById('menuDesc');
        const categoryInput = document.getElementById('menuCategory');
        const bestSellerInput = document.getElementById('bestSeller');

        const reader = new FileReader();
        reader.onload = function(event) {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td><img src="${event.target.result}" class="menu-img"></td>
                <td>${nameInput.value}</td>
                <td>₹${priceInput.value}</td>
                <td>${descInput.value}</td>
                <td>${categoryInput.value}</td>
                <td>${bestSellerInput.checked ? '<span class="best-seller">★</span>' : ''}</td>
                <td>
                    <button class="editBtn">Edit</button>
                    <button class="removeBtn">Remove</button>
                </td>
            `;
            tableBody.appendChild(row);
            form.reset();
            form.style.display = 'none';
        };
        if (imageInput.files[0]) {
            reader.readAsDataURL(imageInput.files[0]);
        }
    });

    // Remove menu item
    tableBody.addEventListener('click', function(e) {
        if (e.target.classList.contains('removeBtn')) {
            e.target.closest('tr').remove();
        }
        // Edit functionality (simple prompt for demo)
        if (e.target.classList.contains('editBtn')) {
            alert('Edit functionality can be implemented here!');
        }
    });

    // Category management
    const addCategoryForm = document.getElementById('addCategoryForm');
    const newCategoryInput = document.getElementById('newCategory');
    const categoryList = document.getElementById('categoryList');
    const menuCategorySelect = document.getElementById('menuCategory');

    addCategoryForm.addEventListener('submit', function(e) {
        e.preventDefault();
        const catName = newCategoryInput.value.trim();
        if (catName) {
            // Add to category list
            const li = document.createElement('li');
            li.innerHTML = `${catName} <button class="removeCatBtn">Remove</button>`;
            categoryList.appendChild(li);
            // Add to dropdown
            const option = document.createElement('option');
            option.value = catName;
            option.textContent = catName;
            menuCategorySelect.appendChild(option);
            newCategoryInput.value = '';
        }
    });

    categoryList.addEventListener('click', function(e) {
        if (e.target.classList.contains('removeCatBtn')) {
            const catName = e.target.parentElement.firstChild.textContent.trim();
            // Remove from dropdown
            Array.from(menuCategorySelect.options).forEach(opt => {
                if (opt.value === catName) opt.remove();
            });
            // Remove from list
            e.target.parentElement.remove();
        }
    });
});