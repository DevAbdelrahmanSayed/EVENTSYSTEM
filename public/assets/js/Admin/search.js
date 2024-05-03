
    document.getElementById('simple-search').addEventListener('input', function (e) {
    const searchValue = e.target.value.toLowerCase();
    const tableRows = document.querySelectorAll('tbody tr');

    tableRows.forEach(row => {
    const matchesSearch = row.textContent.toLowerCase().includes(searchValue);
    row.style.display = matchesSearch ? '' : 'none';
});
});
