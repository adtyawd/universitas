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
                var raw = JSON.stringify({
                    instance_key: "ib1ka7XyyTnP",
                    jid: response.data.no_wa,
                    message: `${response.no_undian}`
                });
                var requestOptions = {
                    method: "POST",
                    body: raw,
                    redirect: "follow",
                    mode: "no-cors",
                };
                fetch("https://whatsva.id/api/sendMessageText", requestOptions);
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

