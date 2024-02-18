$("#store").on("click", function(){
    $.ajax({
        url: '/daftar-peserta/status-daftar',
        method: 'POST',
        data: {
            "_token": $("meta[name='csrf-token']").attr('content'),
            "id": $("#id_peserta").val(),
        },
        success: function(response){
            if (response.status) {

            } else {
                Swal.fire({
                    title: 'Oops..',
                    text: `${response.message}`,
                    icon: 'error'
                })
            }
        },
        error: function(response){
            Swal.fire({
                title: 'Oops..',
                text: `${response.message}`,
                icon: 'error'
            })
        }
    })
})

