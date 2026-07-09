document.addEventListener('DOMContentLoaded', () => {
	document.querySelectorAll('[data-filter-scope]').forEach((scope) => {
		const input = scope.querySelector('[data-filter-input]');
		const filterButtons = scope.querySelectorAll('[data-filter-chip]');
		const items = scope.querySelectorAll('[data-filter-item]');
		const emptyState = scope.querySelector('[data-filter-empty]');
		let activeFilter = 'all';
		let searchValue = '';

		const applyFilter = () => {
			let visibleCount = 0;

			items.forEach((item) => {
				const searchText = (item.dataset.searchText || item.textContent || '').toLowerCase();
				const category = (item.dataset.category || 'all').toLowerCase();
				const matchesSearch = searchValue === '' || searchText.includes(searchValue);
				const matchesCategory = activeFilter === 'all' || category === activeFilter;
				const visible = matchesSearch && matchesCategory;

				item.hidden = !visible;

				if (visible) {
					visibleCount += 1;
				}
			});

			if (emptyState) {
				emptyState.hidden = visibleCount > 0;
			}
		};

		if (input) {
			input.addEventListener('input', (event) => {
				searchValue = event.target.value.trim().toLowerCase();
				applyFilter();
			});
		}

		filterButtons.forEach((button) => {
			button.addEventListener('click', () => {
				activeFilter = button.dataset.filter || 'all';
				filterButtons.forEach((otherButton) => {
					otherButton.classList.toggle('is-active', otherButton === button);
				});
				applyFilter();
			});
		});

		applyFilter();
	});
});