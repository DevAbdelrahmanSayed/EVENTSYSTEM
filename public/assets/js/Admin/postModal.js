 function openModal() {
    document.getElementById('postModal').classList.remove('hidden');
}
    function closeModal() {
    document.getElementById('postModal').classList.add('hidden');
}
    window.onclick = function(event) {
    var modal = document.getElementById('postModal');
    if (event.target === modal) {
    closeModal();
}
}
