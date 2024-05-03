
    function filterTable() {
    const editChecked = document.getElementById('edit').checked;
    const deleteChecked = document.getElementById('delete').checked;
    const createChecked = document.getElementById('create').checked;
    const searchTerm = document.getElementById('simple-search').value.toLowerCase();

    const tableRows = document.querySelectorAll('#table-body tr');

    tableRows.forEach(row => {
    const type = row.cells[2].textContent.trim();
    const searchableText = row.textContent.toLowerCase();

    const typeMatch = (!editChecked && !deleteChecked && !createChecked) ||
    (editChecked && type === 'Edit') ||
    (deleteChecked && type === 'Delete') ||
    (createChecked && type === 'Create');

    const searchMatch = searchTerm === '' || searchableText.includes(searchTerm);

    row.style.display = typeMatch && searchMatch ? '' : 'none';
});
}

    document.getElementById('simple-search').addEventListener('input', filterTable);
