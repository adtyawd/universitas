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

$("#store").on("click", function(){
    $("#large-Modal").modal('hide');
    $.ajax({
        url: '/daftar-jlhmhs/store-admin',
        method: 'POST',
        data: {
            "_token": $("meta[name='csrf-token']").attr('content'),
            "tgl_transaksi": $("#tgl_transaksi").val(),
            "fakultas": $("#fakultas").val(),
            "jurusan": $("#jurusan").val(),
            "prodi": $("#jurusan").val(),
            "kategori": $("#kategori").val(),
            "jumlah": $("#jumlah").val()
        },
        success: function(response){
            if (response.status) {
                $("#tgl_transaksi").val("");
                $("#fakultas").val("");
                $("#jurusan").val("");
                $("#prodi").val("");
                $("#jumlah").val("");
                $("#kategori").val("");

                Swal.fire({
                    title: 'Success',
                    text: "Pendaftaran ada berhasil!",
                    icon: 'success'
                })
                setInterval(function(){
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
                    $("#large-Modal").modal('show');
                }
            })
        }
    })
});

$(".edit").on('click', function () {
    let id = $(this).data('id'); // Pastikan 'data-id' pada elemen sudah benar

    $.ajax({
        url: '/daftar-jlhmhs/edit-data',
        method: 'GET',
        data: {
            "idmhs": id // Menggunakan idmhs sebagai parameter yang dikirim ke controller
        },
        success: function (response) {
            if (response.status) {
                // Mengisi nilai dari respons ke dalam form modal edit
                $("#idmhs").val(response.data.idmhs);
                $("#edit_tgl_transaksi").val(response.data.tgl_transaksi);
                $("#edit_fakultas").val(response.data.fakultas);
                $("#edit_jurusan").val(response.data.jurusan);
                $("#edit_prodi").val(response.data.prodi);
                $("#edit_kategori").val(response.data.kategori);
                $("#edit_jumlah").val(response.data.jumlah);

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
        url: '/daftar-jlhmhs/update-data',
        method: 'POST',
        data: {
            "_token": $("meta[name='csrf-token']").attr('content'),
            "idmhs": $("#idmhs").val(),
            "tgl_transaksi": $("#edit_tgl_transaksi").val(),
            "fakultas": $("#edit_fakultas").val(),
            "jurusan": $("#edit_jurusan").val(),
            "prodi": $("#edit_prodi").val(),
            "kategori": $("#edit_kategori").val(),
            "jumlah": $("#edit_jumlah").val()
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
                url: '/daftar-jlhmhs/delete-data',
                method: 'POST',
                data: {
                    "_token": $("meta[name='csrf-token']").attr('content'),
                    "idmhs": id,
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
