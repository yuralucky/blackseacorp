$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.delete_ajax').click(function (e) {
        let id = $(this).val();
        $.ajax({
            type: 'DELETE',
            url: '/index1',
            data: {id: id},
            success: function () {
                $('.item'+id).remove();
            },
            error:function () {
                console.log('No')
            }


        })

    })
})