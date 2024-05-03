 function openRejectionModal() {
    document.getElementById('rejectionModal').classList.remove('hidden');
}

    function closeRejectionModal(event) {
    if (event) event.stopPropagation();
    document.getElementById('rejectionModal').classList.add('hidden');
}

    function sendRejection() {
    const reason = document.getElementById('rejectionReason').value;
    console.log('Rejection reason:', reason);
    closeRejectionModal();
}
