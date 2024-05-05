//approve

    function approve(postId, actionType) {
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        url: "/sks/approve",
        data: {
            contentId: postId,
            actionType: actionType
        },

        success: function(response) {
            toastr.success(response.success);
            setTimeout(function() {
                location.reload();
            }, 2000)
        },
        error: function(xhr) {
            var errorMsg = xhr.responseJSON && xhr.responseJSON.error ? xhr.responseJSON.error : 'Failed to process approval due to an unknown error.';
            toastr.error(errorMsg);
        }
    });
}
