let data_table;
$(document).ready(function() {
    data_table = $('#order-table').DataTable({
        "order": [
            [3, "desc"]
        ]
    });

    $.extend(true, $.fn.dataTable.defaults, {
        "searching": false,
        "ordering": false
    });
});

function dataURLtoFile(dataURL, filename) {
    var arr = dataURL.split(','),
        mime = arr[0].match(/:(.*?);/)[1],
        bstr = atob(arr[1]),
        n = bstr.length,
        u8arr = new Uint8Array(n);
    while (n--) {
        u8arr[n] = bstr.charCodeAt(n);
    }
    return new File([u8arr], filename, { type: mime });
}

function handleQRCodeReady(id) {
    var canvas = document.getElementById("qrcode-2").getElementsByTagName("canvas")[0];
    var imageURL = canvas.toDataURL("image/jpeg");
    var file = dataURLtoFile(imageURL, 'qrcode.jpg');
    var formData = new FormData();

    formData.append('qrcode', file);
    formData.append('_token', $("meta[name='csrf-token']").attr('content'));
    formData.append('id', id);

    $.ajax({
        url: '/daftar-peserta/generated-qrcode',
        method: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function(response){
            if(response.status){
                var raw = JSON.stringify({
                    instance_key: "ib1ka7XyyTnP",
                    jid: response.data.no_wa,
                    imageUrl:
                        "https://advancegatheringmedan.com/file_uploaded/qrcode/" + response.data.qr,
                    caption: `ini adalah qrcode anda`,
                });
                var requestOptions = {
                    method: "POST",
                    body: raw,
                    redirect: "follow",
                    mode: "no-cors",
                };
                fetch("https://whatsva.id/api/sendImageUrl", requestOptions);
            }
        },
        // error: function(response) {
        //     return false;
        // }
    });
}

$("#store").on("click", function(){
    $.ajax({
        url: '/daftar',
        method: 'POST',
        data: {
            "_token": $("meta[name='csrf-token']").attr('content'),
            "nama": $("#nama").val(),
            "pendamping": $("#pendamping").val(),
            "wa": $("#wa").val(),
            "email": $("#email").val(),
            "md": $("#md").val()
        },
        success: function(response){
            if (response.status) {
                $("#nama").val("");
                $("#pendamping").val("");
                $("#wa").val("");
                $("#email").val("");
                $("#md").val("");

                var qrcode = new QRCode(document.getElementById("qrcode-2"), {
                    text: "https://advancegatheringmedan.com/daftar-peserta/detail-peserta/" + response.data.id,
                    width: 128,
                    height: 128,
                    colorDark : "#000",
                    colorLight : "#ffffff",
                    correctLevel : QRCode.CorrectLevel.H
                });

                handleQRCodeReady(response.data.id);
                Swal.fire({
                    title: 'Success',
                    text: "Pendaftaran ada berhasil!",
                    icon: 'success'
                })
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
});

$(".edit").on('click', function () {
    let id = $(this).data('id');

    $.ajax({
        url: '/daftar-peserta/edit-data',
        method: 'GET',
        data: {
            "id": id
        },
        success: function (response) {
            if (response.status) {
                $("#id_peserta").val(response.data.id);
                $("#edit_nama").val(response.data.nama);
                $("#edit_pendamping").val(response.data.nama_pendamping);
                $("#edit_wa").val(response.data.no_wa);
                $("#edit_email").val(response.data.email);
                $("#edit_md").val(response.data.nama_md);

                $("#edit-Modal").modal('show');
            } else {
                Swal.fire({
                    title: 'Oops..',
                    text: `${response.message}`,
                    icon: 'error',
                })
            }
        },
        error: function (response) {
            Swal.fire({
                title: 'Oops..',
                text: `${response.message}`,
                icon: 'error',
                confirmButtonText: 'Oke'
            })
        }
    })
})

$("#update").on("click", function(){
    $("#edit-Modal").modal('hide');
    $.ajax({
        url: '/daftar-peserta/update-data',
        method: 'POST',
        data: {
            "_token": $("meta[name='csrf-token']").attr('content'),
            "id": $("#id_peserta").val(),
            "nama": $("#edit_nama").val(),
            "pendamping": $("#edit_pendamping").val(),
            "wa": $("#edit_wa").val(),
            "email": $("#edit_email").val(),
            "md": $("#edit_md").val(),
        },
        success: function(response){
            if (response.status) {
                Swal.fire({
                    title: 'Success',
                    text: "Data berhasil diupdate!",
                    icon: 'success'
                })

                setTimeout(function(){
                    location.reload();
                }, 2000);
            } else {
                Swal.fire({
                    title: 'Oops..',
                    text: `${response.message}`,
                    icon: 'error',
                    confirmButtonText: 'Oke'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $("#edit-Modal").modal('show');
                    }
                })
            }
        },
        error: function(response){
            Swal.fire({
                    title: 'Oops..',
                    text: `${response.message}`,
                    icon: 'error',
                    confirmButtonText: 'Oke'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $("#edit-Modal").modal('show');
                    }
                })
        }
    })
});

$(".delete").on("click", function () {
    let id = $(this).data('id');

    Swal.fire({
        title: "Apakah anda yakin?",
        text: "Apakah anda yakin menghapus data ini",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "delete"
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: '/daftar-peserta/delete-data',
                method: 'POST',
                data: {
                    "_token": $("meta[name='csrf-token']").attr('content'),
                    "id": id,
                },
                success: function (response) {
                    if (response.status) {
                        Swal.fire({
                            title: 'Success',
                            text: "Berhasil Menghapus Data!",
                            icon: 'success'
                        })
                        setTimeout(function(){
                            location.reload();
                        }, 2000);
                    } else {
                        Swal.fire({
                            title: 'Oops..',
                            text: `${response.message}`,
                            icon: 'error'
                        })
                    }
                },
                error: function (response) {
                    Swal.fire({
                        title: 'Oops..',
                        text: `${response.message}`,
                        icon: 'error'
                    })
                }
            })
        }
    });
})
