
const filters = document.querySelectorAll('.gallery-filter');
const items = document.querySelectorAll('.gallery-item');
const emptyMessage = document.querySelector('.gallery-empty');

filters.forEach(filter => {
    filter.addEventListener('click', () => {
        const category = filter.dataset.filter;
        let visibleCount = 0;

        filters.forEach(button => {
            const active = button === filter;
            button.classList.toggle('active', active);
            button.setAttribute('aria-pressed', active);
        });

        items.forEach(item => {
            const visible =
                category === 'all' ||
                item.dataset.category === category;

            item.hidden = !visible;

            if (visible) visibleCount++;
        });

        emptyMessage.hidden = visibleCount > 0;
    });
});

filters.forEach(button => {
    button.setAttribute(
        'aria-pressed',
        button.classList.contains('active')
    );
});
