$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.send').click(function (e) {

        e.preventDefault();
        let id=44;
        $.ajax({
            type: 'GET',
            url:'/ajax',
            data:{id:id},
            success:function () {
               console.log('oj')
            },

        })
    })
})