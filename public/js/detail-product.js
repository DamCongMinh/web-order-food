document.addEventListener("DOMContentLoaded", function () {
    const imagesContainer = document.querySelector(".prominient");
    let images = Array.from(document.querySelectorAll(".prominient-product"));
    let centerIndex = Math.floor(images.length / 2);

    // Gán chỉ mục ban đầu cho từng ảnh
    images.forEach((img, index) => img.dataset.index = index);

    function updateImageOrder() {
        images.forEach((img, index) => {
            img.style.order = index; 
            img.classList.remove("main-product");
        });
        images[centerIndex].classList.add("main-product");
    }

    function moveImagesToCenter(clickedIndex) {
        const currentOrder = images.map(img => parseInt(img.dataset.index, 10));
        const shift = currentOrder.indexOf(clickedIndex) - centerIndex;

        if (shift > 0) {
            for (let i = 0; i < shift; i++) {
                images.push(images.shift());
            }
        } else {
            for (let i = 0; i < Math.abs(shift); i++) {
                images.unshift(images.pop());
            }
        }

        updateImageOrder();
    }

    images.forEach(img => {
        img.addEventListener("click", function () {
            const clickedIndex = parseInt(this.dataset.index, 10);
            if (clickedIndex !== parseInt(images[centerIndex].dataset.index, 10)) {
                moveImagesToCenter(clickedIndex);
            }
        });
    });

    updateImageOrder();
});
// bộ lọc
function toggleFilter() {
    let filter = document.querySelector(".products-filter");
    let filterIcon = document.querySelector(".filter-float");
    // Lấy phần tử input và span
    const priceInput = document.getElementById("price-filter");
    const priceValue = document.getElementById("price-value");
    //Lấy products-title
    let productsTitle = document.querySelector(".products-title");

    productsTitle.classList.add("active");
    // Kiểm tra xem bộ lọc có đang hiển thị không
    if (filter.classList.contains("active")) {
        filter.classList.remove("active"); // Ẩn bộ lọc
        filterIcon.style.display = "block"; // Hiển thị lại icon
        productsTitle.classList.remove("third");
        productsTitle.classList.add("active"); // Hiển thị lại title
    } else {
        filter.classList.add("active"); // Hiện bộ lọc
        filterIcon.style.display = "none"; // Ẩn icon
        productsTitle.classList.remove("active");
        productsTitle.classList.add("third");
    }

    // Hàm cập nhật giá trị hiển thị
    function updatePrice() {
        priceValue.textContent = parseInt(priceInput.value).toLocaleString("vi-VN") + "đ";
    }

    // Gán sự kiện khi kéo
    priceInput.addEventListener("input", updatePrice);

    // Cập nhật giá trị ngay khi load trang
    updatePrice();
}


document.addEventListener("DOMContentLoaded", function () {
    const locationFilter = document.getElementById("location-filter");

    // Gọi API để lấy danh sách tỉnh/thành phố
    fetch("https://provinces.open-api.vn/api/?depth=2")
        .then(response => response.json()) // Chuyển dữ liệu thành JSON
        .then(data => {
            data.forEach(province => {
                let option = document.createElement("option");
                option.value = province.code;  // Dùng mã tỉnh làm value
                option.textContent = province.name;  // Hiển thị tên tỉnh
                locationFilter.appendChild(option); // Thêm vào select
            });
        })
        .catch(error => console.error("Lỗi khi lấy dữ liệu tỉnh/thành phố:", error));
});






