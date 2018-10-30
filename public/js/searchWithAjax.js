$(document).ready(function () {
    function fetch_data(event) {
        let text=$(this).val();
        event.preventDefault();
        $.ajax({
            type: "GET",
            url: "{{URL::route('livesearch')}}",
            data: text,
            dataType:'json',
            success: function (data) {
               $('.result').html(data)
            },
            error:function (error) {
                console.log(error)
            }

        })
    }

fetch_data();
})
