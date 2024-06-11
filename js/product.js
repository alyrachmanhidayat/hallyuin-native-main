const products = [
	{ id: 1, name: "Product 1", price: "$40.00", imgSrc: "https://dummyimage.com/450x300/dee2e6/6c757d.jpg", description: "Description of Product 1", capacity: "360ml", heatResistant: "0-100°C", material: "Glass" },
	{ id: 2, name: "Product 2", price: "$50.00", imgSrc: "https://dummyimage.com/450x300/dee2e6/6c757d.jpg", description: "Description of Product 2", capacity: "360ml", heatResistant: "0-100°C", material: "Glass" },
	{ id: 3, name: "Product 3", price: "$60.00", imgSrc: "https://dummyimage.com/450x300/dee2e6/6c757d.jpg", description: "Description of Product 3", capacity: "360ml", heatResistant: "0-100°C", material: "Glass" }
    // Tambahkan lebih banyak produk di sini
];

const list_element = document.getElementById('list');
const pagination_element = document.getElementById('pagination');

let current_page = 1;
let rows = 6; // Jumlah produk per halaman

function DisplayList(items, wrapper, rows_per_page, page) {
	wrapper.innerHTML = "";
	page--;

	let start = rows_per_page * page;
	let end = start + rows_per_page;
	let paginatedItems = items.slice(start, end);

	paginatedItems.forEach(item => {
		let item_element = document.createElement('div');
		item_element.classList.add('col');
		item_element.innerHTML = `
		<div class="card h-100">
			<img class="card-img-top" src="${item.imgSrc}" alt="${item.name}" />
			<div class="card-body p-4">
				<div class="text-center">
					<h5 class="fw-bolder">${item.name}</h5>
					${item.price}
				</div>
			</div>
			<div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
				<div class="text-center">
					<a class="btn btn-outline-dark mt-auto view-options" data-id="${item.id}" href="v_details.php?id=${item.id}">View options</a>
				</div>
			</div>
		</div>
		`;
		wrapper.appendChild(item_element);
	});

	// Event listener for view options button
	const viewOptionsButtons = document.querySelectorAll('.view-options');
	viewOptionsButtons.forEach(button => {
		button.addEventListener('click', function(event) {
			event.preventDefault();
			const productId = this.getAttribute('data-id');
			window.location.href = `v_details.php?id=${productId}`;
		});
	});
}

function SetupPagination(items, wrapper, rows_per_page) {
	wrapper.innerHTML = "";

	let page_count = Math.ceil(items.length / rows_per_page);
	for (let i = 1; i < page_count + 1; i++) {
		let btn = PaginationButton(i, items);
		wrapper.appendChild(btn);
	}
}

function PaginationButton(page, items) {
	let button = document.createElement('button');
	button.innerText = page;
	button.classList.add('btn', 'btn-outline-primary', 'mx-1');

	if (current_page == page) button.classList.add('active');

	button.addEventListener('click', function () {
		current_page = page;
		DisplayList(items, list_element, rows, current_page);

		let current_btn = document.querySelector('.pagination button.active');
		current_btn.classList.remove('active');

		button.classList.add('active');
	});

	return button;
}

DisplayList(products, list_element, rows, current_page);
SetupPagination(products, pagination_element, rows);
