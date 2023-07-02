@extends ('layouts.layout')
@section ('content')
@include ('sweetalert::alert')
<div class="card shadow mb-4">
    <div class="card-header py-3 border-left-primary">
        <h4 class="m-0 font-weight-bold text-primary"> CRUD Data Karyawan</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <button class="btn btn-success" data-toggle="modal" data-target="#tambah"><i class="fas fa-plus fa-sm text-white-50"></i>  Tambah</button>
                </div>
                <br><br><br> 
            </div>
                <table id="dataTable" class="table table-striped table-bordered text-gray-900 text-center" cellspacing="0">
                <thead align="center" bgcolor="#679DF5">
                                <tr>
                                    <th width="5%">No</th>
                                    <th>NIP</th>
                                    <th>Nama Pegawai</th>
                                    <th>Foto</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Jabatan</th>
                                    <th>Kontrak Kerja</th>
                                    <th>Email</th>
                                    <th>Alamat</th>
                                    <th>No. Ponsel</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody align="center">
                                @foreach ($pegawai as $i => $pgw)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $pgw->nip }}</td>
                                    <td>{{ $pgw->nm_pegawai}}</td>
                                    <!-- <td><img src="{{ Storage::url($pgw->foto) }}" width="50%"></td> -->
                                    <td><img src="{{ url('/images/'. $pgw->foto) }}" width="100px">
                                    <td>{{ $pgw->jkl}}</td>
                                    <td>{{ Carbon\Carbon::parse($pgw->tgl_lahir)->translatedFormat('j F Y') }}</td>
                                    <td>{{ $pgw->jabatan}}</td>
                                    <td>{{ $pgw->kontrak }}</td>
                                    <td>{{ $pgw->email }}</td>
                                    <td>{{ $pgw->alamat}}</td>
                                    <td>{{ $pgw->tlp }}</td>
                                    <td>
                                        <a href="{{ route('pegawai.edit', [$pgw->nip])}}"class="d-none d-sm-inline-block btn-sm btn-outline-success shadow-sm">
                                <i class="fas fa-edit fa-sm text-gray-50"></i>
                            </a>
                                            <a href="/pegawai/hapus/{{$pgw->nip}}" onclick="return confirm('Yakin Ingin menhapus data pegawai {{$pgw->nm_pegawai}} ?')" class="d-none d-sm-inline-block btn-sm btn-outline-danger shadow-sm">
                            <i class="fas fa-trash-alt fa-sm-text-gray-50"></i>
                            </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
            </table>
        </div>
    </div>
</div>
<!-- modal -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">

    <div class="modal-content">
        <div class="modal-header bg-primary text-gray-100">
            <h5 class="modal-title font-weight-bold ">Tambah Data Pegawai</h5>
        </div>
        <form action="{{ route('pegawai.store') }}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
            @csrf 
            <div class="modal-body  text-dark">
                <div class="form-group">
                    <label for="">Nomor Induk Pegawai</label>
                    <input type="text" name="nip" class="form-control" required maxlength="7">
                </div>
                <div class="form-group">
                    <label for="">Nama Pegawai</label>
                    <input type="text" name="add_nm" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Foto</label>
                    <div class="col-sm-9">
                        <div class="custom-file">
                            <label for="foto" class="custom-file-label">Pilih file...</label>
                            <input class="custom-file-input" type="file" name="foto" id="foto" required>
                        </div>
                    </div>

                </div>
                <div class="form-group">
                    <label for="">Jenis Kelamin</label><br>
                    <input type="radio" name="jkl" value="Perempuan" required> Perempuan &nbsp; &nbsp;
                    <input type="radio" name="jkl" value="Laki-laki" required> Laki - Laki
                </div>
                <div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" class="form-control" required>
                </div>
                <div class="form-group">
                <label for="">Jabatan</label>
                <select name="jabatan" class="form-control" required>
                    <option value="" disabled selected>---Pilih Jabatan ---</option>
                    @foreach ($jabatan as $jbt)
                    <option value="{{ $jbt->jabatan}}">{{ $jbt->jabatan}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Kontrak</label>
                <select name="kontrak" class="form-control" required>
                    <option value="" disabled selected>---Pilih---</option>
                    @foreach ($kontrak as $ktr)
                    <option value="{{ $ktr->kontrak}}">{{ $ktr->kontrak}}</option>
                    @endforeach
                </select>
            </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" name="alamat" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Nomor Ponsel</label>
                    <input type="text" name="tlp" class="form-control" required maxlength="13">
                </div>
            </div>
            <div class="modal-footer ">
                    <button type="button" class="btn btn-secondary text-gray-100" data-dismiss="modal">Batal</button>
                    <input type="submit" class="btn btn-primary btn-send text-gray-100" value="Simpan">
                </div>
        </form>
    </div>
    </div>
</div>


@endsection