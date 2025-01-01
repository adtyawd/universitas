@extends('dashboard.template')

@section('own_style')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/assets/icon/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/assets/icon/icofont/css/icofont.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/assets/pages/data-table/css/buttons.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/assets/css/sweetalert.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/assets/css/component.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/assets/pages/advance-elements/css/bootstrap-datetimepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bower_components/datedropper/datedropper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bower_components/spectrum/spectrum.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bower_components/jquery-minicolors/jquery.minicolors.css') }}">
@endsection

@section('content')
<div class="pcoded-content">
    <div class="pcoded-inner-content">

        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-header">
                    <div class="row align-items-end">
                        <div class="col-lg-6">
                            <div class="page-header-title">
                                <div class="d-inline">
                                    <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#large-Modal">Tambah Data</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item" style="float: left;">
                                        <a href="/"> <i class="feather icon-home"></i> </a>
                                    </li>
                                    <li class="breadcrumb-item" style="float: left;"><a href="#!">Daftar Mahasiswa Berprestasu</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                  <h5>Daftar Mahasiswa Berprestasi</h5>
                                </div>
                                <div class="card-block">
                                  <div class="dt-responsive table-responsive">
                                    <table id="order-table" class="table table-striped table-bordered nowrap">
                                      <thead>
                                        <tr>
                                            <th>No. </th>
                                            <th>ID Prestasi</th>
                                            <th>Tanggal Transaksi</th>
                                            <th>Fakultas</th>
                                            <th>Jurusan</th>
                                            <th>Prodi</th>
                                            <th>Kategori</th>
                                            <th>Bidang</th>
                                            <th>Jumlah</th>
                                            <th>Jenis</th>
                                            <th>Aksi</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <?php $index = 1; ?>
                                        @foreach ($tbl_jlh_mahasiswa_berprestasi as $tbl_jlh_mahasiswa_berprestasi)
                                            <tr>
                                                <td>{{ $index++ }}</td>
                                                <td>{{ $tbl_jlh_mahasiswa_berprestasi->idprestasi }}</td>
                                                <td>{{ $tbl_jlh_mahasiswa_berprestasi->tgl_transaksi }}</td>
                                                <td>{{ $tbl_jlh_mahasiswa_berprestasi->fakultas }}</td>
                                                <td>{{ $tbl_jlh_mahasiswa_berprestasi->jurusan }}</td>
                                                <td>{{ $tbl_jlh_mahasiswa_berprestasi->prodi }}</td>
                                                <td>{{ $tbl_jlh_mahasiswa_berprestasi->kategori }}</td>
                                                <td>{{ $tbl_jlh_mahasiswa_berprestasi->bidang }}</td>
                                                <td>{{ $tbl_jlh_mahasiswa_berprestasi->jenis }}</td>
                                                <td>{{ $tbl_jlh_mahasiswa_berprestasi->jumlah }}</td>
                                                <td>
                                                    <i class="ti-pencil text-success edit" style="font-size: 18px" data-id={{ $tbl_jlh_mahasiswa_berprestasi->idprestasi }}></i>
                                                    <i class="ti-trash text-danger delete" style="font-size: 18px" data-id={{ $tbl_jlh_mahasiswa_berprestasi->idprestasi }}></i>
                                                </td>
                                            </tr>
                                        @endforeach
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

modal tambah data
<div class="modal fade" id="large-Modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add User</h4>
          <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="card">
                <div class="card-block">
                  <form id="main" novalidate>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Tanggal Transaksi</label>
                        <div class="col-sm-8">
                          <input type="date" class="form-control" name="tgl_transaksi" id="tgl_transaksi" placeholder="Masukkan Tanggal">
                          <span class="messages"></span>
                        </div>
                      </div>
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label">Fakultas</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="fakultas" id="fakultas" placeholder="Masukkan Fakultas">
                        <span class="messages"></span>
                      </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Jurusan</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="jurusan" id="jurusan" placeholder="Masukkan Jurusan">
                          <span class="messages"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Prodi</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="prodi" id="prodi" placeholder="Masukkan Prodi">
                          <span class="messages"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Kategori</label>
                        <div class="col-sm-8">
                            <select class="form-control" name="kategori" id="kategori">
                                <option value="0">:: Pilih Kategori ::</option>
                                <option value="akademik">Akademik</option>
                                <option value="nonakademik">NonAkademik</option>
                            </select>
                            <span class="messages"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Bidang</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="bidang" id="bidang" placeholder="Masukkan Bidang">
                          <span class="messages"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Jenis</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="jenis" id="jenis" placeholder="Masukkan Jenis">
                          <span class="messages"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Jumlah</label>
                        <div class="col-sm-8">
                          <input type="number" class="form-control" name="jumlah" id="jumlah" placeholder="Masukkan Jumlah">
                          <span class="messages"></span>
                        </div>
                    </div>
                  </form>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default waves-effect close-btn" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary waves-effect waves-light" id="store">Save changes</button>
        </div>
      </div>
    </div>
</div>



{{-- modal edit data --}}
<div class="modal fade" id="edit-Modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Jumlah Mahasiswa</h4>
          <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="card">
                <div class="card-block">
                    <form id="edit-form" novalidate>
                        <input type="hidden" name="idprestasi" id="idprestasi">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Tanggal Transaksi</label>
                            <div class="col-sm-8">
                              <input type="date" class="form-control" name="edit_tgl_transaksi" id="edit_tgl_transaksi" placeholder="Masukkan Tanggal">
                              <span class="messages"></span>
                            </div>
                          </div>
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Fakultas</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" name="edit_fakultas" id="edit_fakultas" placeholder="Masukkan Fakultas">
                            <span class="messages"></span>
                          </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Jurusan</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="edit_jurusan" id="edit_jurusan" placeholder="Masukkan Jurusan">
                              <span class="messages"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Prodi</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="edit_prodi" id="edit_prodi" placeholder="Masukkan Prodi">
                              <span class="messages"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Kategori</label>
                            <div class="col-sm-8">
                                <select class="form-control" name="edit_kategori" id="edit_kategori">
                                    <option value="0">:: Pilih Kategori ::</option>
                                    <option value="akademik">akademik</option>
                                    <option value="nonakademik">Nonakademik</option>
                                </select>
                                <span class="messages"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Bidang</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="edit_bidang" id="edit_bidang" placeholder="Masukkan Bidang">
                              <span class="messages"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Jenis</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="edit_jenis" id="edit_jenis" placeholder="Masukkan Jenis">
                              <span class="messages"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Jumlah</label>
                            <div class="col-sm-8">
                              <input type="number" class="form-control" name="edit_jumlah" id="edit_jumlah" placeholder="Masukkan Jumlah">
                              <span class="messages"></span>
                            </div>
                        </div>
                      </form>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default waves-effect close-btn" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary waves-effect waves-light" id="update">Save changes</button>
        </div>
      </div>
    </div>
</div>

{{-- modal ubah password --}}
{{-- <div class="modal fade" id="edit-password" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Ubah Password</h4>
          <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="card">
                <div class="card-block">
                    <form id="main" novalidate>
                        <input type="hidden" name="" id="id_user_password">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Password Baru</label>
                            <div class="col-sm-8">
                              <input type="password" class="form-control" name="nama" id="edit_password" placeholder="Masukkan Password Baru">
                              <span class="messages"></span>
                            </div>
                        </div>
                      </form>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default waves-effect close-btn" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary waves-effect waves-light" id="update_password">Save changes</button>
        </div>
      </div>
    </div>
</div> --}}
@endsection

@section('own_js')
    <script src="{{ asset('assets/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/assets/pages/data-table/js/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/assets/pages/data-table/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/assets/pages/data-table/js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/bower_components/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/bower_components/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/assets/pages/data-table/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/bower_components/i18next/i18next.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/bower_components/jquery-i18next/jquery-i18next.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/assets/js/sweetalert.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/assets/js/modal.js') }}"></script>


    <script type="text/javascript" src="{{ asset('assets/assets/js/modalEffects.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/assets/js/classie.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/assets/pages/form-validation/validate.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/assets/pages/form-validation/form-validation.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/bower_components/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/assets/pages/advance-elements/bootstrap-datetimepicker.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/bower_components/datedropper/datedropper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/bower_components/spectrum/spectrum.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/bower_components/jscolor/jscolor.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/bower_components/jquery-minicolors/jquery.minicolors.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/assets/pages/advance-elements/custom-picker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/assets/pages/advance-elements/moment-with-locales.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('own_assets/scripts/pages/mahasiswa_berprestasi.js') }}"></script>
@endsection
