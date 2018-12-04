$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.addNew').click(function (e) {

        $('.modal').modal('toggle');
        $.ajax({
            type:'post',
            url:'/index1',
            data:{
                'name':$('#name_ajax').val(),
                'parent_id':$('#parent_ajax').val()
            },
            success:function (data) {

                  $('#table_result tr:last-child').after("<tr class='item'><td>"+data.id+"</td><td>"+data.name+"</td><td>"+data.parent_id+"</td></tr>")
            }

        })
    })

})