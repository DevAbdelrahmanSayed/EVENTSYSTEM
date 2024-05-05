function openRejectionModal(postId, actionType) {
    const modal = document.getElementById('rejectionModal');
    modal.classList.remove('hidden');
    modal.setAttribute('data-post-id', postId);  // Storing postId
    modal.setAttribute('data-action-type', actionType);  // Storing actionType
}


function closeRejectionModal(event) {
    if (event) event.stopPropagation();
    document.getElementById('rejectionModal').classList.add('hidden');
}

function sendRejection() {
    const modal = document.getElementById('rejectionModal');
    const postId = modal.getAttribute('data-post-id');
    const actionType = modal.getAttribute('data-action-type');
    const reason = document.getElementById('rejectionReason').value;

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        url: '/sks/rejection',
        data: {
            contentId: postId,
            actionType: actionType,
            reason: reason
        },
        success: function(response) {
            toastr.success('Rejection sent successfully');
            closeRejectionModal();
        },
        error: function(xhr) {
            var errorMsg = xhr.responseJSON && xhr.responseJSON.error ? xhr.responseJSON.error : 'Failed to process rejection due to an unknown error.';
            toastr.error(errorMsg);
        }
    });
}

