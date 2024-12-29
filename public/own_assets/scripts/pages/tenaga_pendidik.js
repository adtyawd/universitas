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
        url: '/daftar-dosen/store-admin',
        method: 'POST',
        data: {
            "_token": $("meta[name='csrf-token']").attr('content'),
            "tgl_transaksi": $("#tgl_transaksi").val(),
            "unit": $("#unit").val(),
            "jurusan": $("#jurusan").val(),
            "prodi": $("#prodi").val(),
            "professor_pns": $("#professor_pns").val(),
            "professor_non_pns": $("#professor_non_pns").val(),
            "lektor_kepala_pns": $("#lektor_kepala_pns").val(),
            "lektor_kepala_non_pns": $("#lektor_kepala_non_pns").val(),
            "lektor_pns": $("#lektor_pns").val(),
            "lektor_non_pns": $("#lektor_non_pns").val(),
            "asisten_ahli_pns": $("#asisten_ahli_pns").val(),
            "asisten_ahli_non_pns": $("#asisten_ahli_non_pns").val(),
            "tenaga_pengajar_pns": $("#tenaga_pengajar_pns").val(),
            "tenaga_pengajar_non_pns": $("#tenaga_pengajar_non_pns").val(),
            "terkualifikasi_s3": $("#terkualifikasi_s3").val(),
            "terkualifikasi_kompetensi_profesi": $("#terkualifikasi_kompetensi_profesi").val(),
            "terkualifikasi_praktisi": $("#terkualifikasi_praktisi").val(),
            "pegawai_pppk": $("#pegawai_pppk").val(),
            "nidn": $("#nidn").val()
        },
        success: function (response) {
            if (response.status) {
                // Kosongkan nilai form setelah data berhasil disimpan
                $("#tgl_transaksi").val("");
                $("#unit").val("");
                $("#jurusan").val("");
                $("#prodi").val("");
                $("#professor_pns").val("");
                $("#professor_non_pns").val("");
                $("#lektor_kepala_pns").val("");
                $("#lektor_kepala_non_pns").val("");
                $("#lektor_pns").val("");
                $("#lektor_non_pns").val("");
                $("#asisten_ahli_pns").val("");
                $("#asisten_ahli_non_pns").val("");
                $("#tenaga_pengajar_pns").val("");
                $("#tenaga_pengajar_non_pns").val("");
                $("#terkualifikasi_s3").val("");
                $("#terkualifikasi_kompetensi_profesi").val("");
                $("#terkualifikasi_praktisi").val("");
                $("#pegawai_pppk").val("");
                $("#nidn").val("");

                Swal.fire({
                    title: 'Success',
                    text: "Data berhasil ditambahkan!",
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
            let errorMessage = response.responseJSON?.message || "Terjadi kesalahan saat mengirim data.";
            Swal.fire({
                title: 'Oops..',
                text: errorMessage,
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
    let id = $(this).data('id'); // Mengambil ID dari elemen yang diklik

    $.ajax({
        url: '/daftar-dosen/edit-data',
        method: 'GET',
        data: {
            "idpendidik": id // Menggunakan idpendidik sebagai parameter yang dikirim ke controller
        },
        success: function (response) {
            if (response.status) {
                // Mengisi nilai dari respons ke dalam form modal edit
                $("#idpendidik").val(response.data.idpendidik);
                $("#edit_tgl_transaksi").val(response.data.tgl_transaksi);
                $("#edit_unit").val(response.data.unit);
                $("#edit_jurusan").val(response.data.jurusan);
                $("#edit_prodi").val(response.data.prodi);
                $("#edit_professor_pns").val(response.data.professor_pns);
                $("#edit_professor_non_pns").val(response.data.professor_non_pns);
                $("#edit_lektor_kepala_pns").val(response.data.lektor_kepala_pns);
                $("#edit_lektor_kepala_non_pns").val(response.data.lektor_kepala_non_pns);
                $("#edit_lektor_pns").val(response.data.lektor_pns);
                $("#edit_lektor_non_pns").val(response.data.lektor_non_pns);
                $("#edit_asisten_ahli_pns").val(response.data.asisten_ahli_pns);
                $("#edit_asisten_ahli_non_pns").val(response.data.asisten_ahli_non_pns);
                $("#edit_tenaga_pengajar_pns").val(response.data.tenaga_pengajar_pns);
                $("#edit_tenaga_pengajar_non_pns").val(response.data.tenaga_pengajar_non_pns);
                $("#edit_terkualifikasi_s3").val(response.data.terkualifikasi_s3);
                $("#edit_terkualifikasi_kompetensi_profesi").val(response.data.terkualifikasi_kompetensi_profesi);
                $("#edit_terkualifikasi_praktisi").val(response.data.terkualifikasi_praktisi);
                $("#edit_pegawai_pppk").val(response.data.pegawai_pppk);
                $("#edit_nidn").val(response.data.nidn);

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

$("#update").on("click", function () {
    $("#edit-Modal").modal('hide');
    $.ajax({
        url: '/daftar-dosen/update-data',
        method: 'POST',
        data: {
            "_token": $("meta[name='csrf-token']").attr('content'),
            "idpendidik": $("#idpendidik").val(),
            "tgl_transaksi": $("#edit_tgl_transaksi").val(),
            "unit": $("#edit_unit").val(),
            "jurusan": $("#edit_jurusan").val(),
            "prodi": $("#edit_prodi").val(),
            "professor_pns": $("#edit_professor_pns").val(),
            "professor_non_pns": $("#edit_professor_non_pns").val(),
            "lektor_kepala_pns": $("#edit_lektor_kepala_pns").val(),
            "lektor_kepala_non_pns": $("#edit_lektor_kepala_non_pns").val(),
            "lektor_pns": $("#edit_lektor_pns").val(),
            "lektor_non_pns": $("#edit_lektor_non_pns").val(),
            "asisten_ahli_pns": $("#edit_asisten_ahli_pns").val(),
            "asisten_ahli_non_pns": $("#edit_asisten_ahli_non_pns").val(),
            "tenaga_pengajar_pns": $("#edit_tenaga_pengajar_pns").val(),
            "tenaga_pengajar_non_pns": $("#edit_tenaga_pengajar_non_pns").val(),
            "terkualifikasi_s3": $("#edit_terkualifikasi_s3").val(),
            "terkualifikasi_kompetensi_profesi": $("#edit_terkualifikasi_kompetensi_profesi").val(),
            "terkualifikasi_praktisi": $("#edit_terkualifikasi_praktisi").val(),
            "pegawai_pppk": $("#edit_pegawai_pppk").val(),
            "nidn": $("#edit_nidn").val()
        },
        success: function (response) {
            if (response.status) {
                Swal.fire({
                    title: 'Success',
                    text: "Data berhasil diperbarui!",
                    icon: 'success'
                });

                setTimeout(function () {
                    location.reload();
                }, 2000);
            } else {
                Swal.fire({
                    title: 'Oops..',
                    text: response.message,
                    icon: 'error',
                    confirmButtonText: 'Oke'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $("#edit-Modal").modal('show');
                    }
                });
                }
            },
        error: function (xhr) {
            Swal.fire({
                title: 'Oops..',
                text: xhr.responseJSON?.message || 'Terjadi kesalahan saat mengupdate data.',
                icon: 'error',
                confirmButtonText: 'Oke'
            }).then((result) => {
                if (result.isConfirmed) {
                    $("#edit-Modal").modal('show');
                }
            });
        }
    });
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
                url: '/daftar-dosen/delete-data',
                method: 'POST',
                data: {
                    "_token": $("meta[name='csrf-token']").attr('content'),
                    "idpendidik": id,
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
