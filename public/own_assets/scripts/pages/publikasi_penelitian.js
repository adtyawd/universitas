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

$("#store").on("click", function () {
    $("#large-Modal").modal('hide');
    $.ajax({
        url: '/daftar-penelitian/store-admin',
        method: 'POST',
        data: {
            "_token": $("meta[name='csrf-token']").attr('content'),
            "tgl_transaksi": $("#tgl_transaksi").val(),
            "unit": $("#unit").val(),
            "nasional": $("#nasional").val(),
            "internasional": $("#internasional").val(),
            "internasional_index": $("#internasional_index").val(),
            "prosiding": $("#prosiding").val(),
            "seminar": $("#seminar").val(),
            "kategori": $("#kategori").val()
        },
        success: function (response) {
            if (response.status) {
                // Reset nilai input setelah berhasil
                $("#tgl_transaksi").val("");
                $("#unit").val("");
                $("#nasional").val("");
                $("#internasional").val("");
                $("#internasional_index").val("");
                $("#prosiding").val("");
                $("#seminar").val("");
                $("#kategori").val("");

                Swal.fire({
                    title: 'Success',
                    text: "Data publikasi penelitian berhasil ditambahkan!",
                    icon: 'success'
                });
                setTimeout(function () {
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
                        $("#large-Modal").modal('show');
                    }
                });
            }
        },
        error: function (response) {
            Swal.fire({
                title: 'Oops..',
                text: 'Terjadi kesalahan saat menyimpan data.',
                icon: 'error',
                confirmButtonText: 'Oke'
            }).then((result) => {
                if (result.isConfirmed) {
                    $("#large-Modal").modal('show');
                }
            });
        }
    });
});


$(".edit").on('click', function () {
    let id = $(this).data('id'); // Pastikan 'data-id' pada elemen sudah benar

    $.ajax({
        url: '/daftar-penelitian/edit-data',
        method: 'GET',
        data: {
            "idpenelitian": id // Menggunakan idpenelitian sebagai parameter yang dikirim ke controller
        },
        success: function (response) {
            if (response.status) {
                // Mengisi nilai dari respons ke dalam form modal edit
                $("#idpenelitian").val(response.data.idpenelitian);
                $("#edit_tgl_transaksi").val(response.data.tgl_transaksi);
                $("#edit_unit").val(response.data.unit);
                $("#edit_nasional").val(response.data.nasional);
                $("#edit_internasional").val(response.data.internasional);
                $("#edit_internasional_index").val(response.data.internasional_index);
                $("#edit_prosiding").val(response.data.prosiding);
                $("#edit_seminar").val(response.data.seminar);
                $("#edit_kategori").val(response.data.kategori);

                // Menampilkan modal edit
                $("#edit-Modal").modal('show');
            } else {
                Swal.fire({
                    title: 'Oops..',
                    text: response.message || 'Terjadi kesalahan saat mengambil data.',
                    icon: 'error',
                });
            }
        },
        error: function (xhr) {
            // Mengatasi error saat permintaan AJAX
            let errorMessage = xhr.responseJSON?.message || 'Terjadi kesalahan pada server.';
            Swal.fire({
                title: 'Oops..',
                text: errorMessage,
                icon: 'error',
                confirmButtonText: 'Oke'
            });
        }
    });
});

$("#update").on("click", function(){
    $("#edit-Modal").modal('hide');
    $.ajax({
        url: '/daftar-penelitian/update-data',
        method: 'POST',
        data: {
            "_token": $("meta[name='csrf-token']").attr('content'),
            "idpenelitian": $("#idpenelitian").val(),
            "tgl_transaksi": $("#edit_tgl_transaksi").val(),
            "unit": $("#edit_unit").val(),
            "nasional": $("#edit_nasional").val(),
            "internasional": $("#edit_internasional").val(),
            "internasional_index": $("#edit_internasional_index").val(),
            "prosiding": $("#edit_prosiding").val(),
            "seminar": $("#edit_seminar").val(),
            "kategori": $("#edit_kategori").val()
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
                text: `${response.responseJSON.message}`,
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



$(".change-password").on("click", function(){
    $("#id_user_password").val($(this).data('id'));
    $("#edit-password").modal('show');
})

$("#update_password").on("click", function(){
    $("#edit-password").modal('hide');
    $.ajax({
        url: '/daftar-admin/update-password',
        method: 'POST',
        data: {
            "_token": $("meta[name='csrf-token']").attr('content'),
            "id": $("#id_user_password").val(),
            "password": $("#edit_password").val()
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
                        $("#edit-password").modal('show');
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
                        $("#edit-password").modal('show');
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
                url: '/daftar-penelitian/delete-data',
                method: 'POST',
                data: {
                    "_token": $("meta[name='csrf-token']").attr('content'),
                    "idpenelitian": id,
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
