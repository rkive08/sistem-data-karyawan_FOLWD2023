@extends ('layouts.layout')
@section ('content')
@include ('sweetalert::alert')

<div class="card shadow mb-4">
    <div class="card-header py-3 border-left-primary">
        <h4 class="m-0 font-weight-bold text-primary">Edit Data Karyawan</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <div class="row">
            </div>
            <div class="card shadow mb-4">
                <form action="{{ route('pegawai.update', [$pegawai->nip]) }}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                    @csrf
                    <input type="hidden" name="_method" value="PUT">

                    <div class="card-body">
                        <div class="form-group ">
                            <label for="">Nomor Induk Pegawai</label>
                            <input class="form-control" type="text" name="nip" value="{{ $pegawai->nip }}" required maxlength="7">
                        </div>
                        <div class="form-group">
                            <label for="">Nama Pegawai</label>
                            <input type="text" name="add_nm" class="form-control" value="{{ $pegawai->nm_pegawai }}" required>
                        </div>
                        <div class="form-group">
                            @if($pegawai->jkl == "Perempuan")
                            <label>Jenis Kelamin :</label> <br>
                            <input type="radio" name="jkl" value="Perempuan" id="jkl" checked> &nbsp;Perempuan &nbsp; &nbsp;
                            <input type="radio" name="jkl" value="Laki-laki" id="jkl"> &nbsp;Laki-laki

                            @elseif($pegawai->jkl == "Laki-laki")
                            <label for="jkl">Jenis Kelamin :</label> <br>
                            <input type="radio" name="jkl" value="Perempuan" id="jkl"> &nbsp;Perempuan &nbsp; &nbsp;
                            <input type="radio" name="jkl" value="Laki-laki" id="jkl" checked> &nbsp;Laki-laki

                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Foto</label>
                            <div class="col-sm-4">
                                <div class="custom-file">
                                    <label for="foto" class="custom-file-label">Ubah File...</label>
                                    <input class="custom-file-input" type="file" name="foto">
                                </div>
                                <img class="img-thumbnail mt-2" src="{{ asset('images/'.$pegawai['foto']) }}" width="150">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control" value="{{ $pegawai->tgl_lahir }}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Jabatan</label>
                            <select name="jabatan" class="form-control" required>
                                <option value="" disabled selected>---Pilih Jabatan---</option>
                                @foreach ($jabatan as $jbt)
                                @if ($pegawai->jabatan == $jbt->jabatan)
                                <option value="{{ $jbt->jabatan}}" selected>{{ $jbt->jabatan}}</option>
                                @else
                                <option value="{{ $jbt->jabatan}}">{{$jbt->jabatan}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Kontrak</label>
                            <select name="kontrak" class="form-control" required>
                                <option value="" disabled selected>---Pilih---</option>
                                @foreach ($kontrak as $ktr)
                                @if ($pegawai->kontrak == $ktr->kontrak)
                                <option value="{{ $ktr->kontrak}}" selected>{{ $ktr->kontrak}}</option>
                                @else
                                <option value="{{ $ktr->kontrak}}">{{$ktr->kontrak}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group ">
                            <label for="">Email</label>
                            <input id="email" type="email" name="email" class="form-control" value="{{ $pegawai->email }}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="text" name="alamat" class="form-control" value="{{ $pegawai->alamat }}" required>
                        </div>
                        <div class="form-gorup">
                            <label for="">No Ponsel</label>
                            <input type="text" name="tlp" class="form-control" value="{{ $pegawai->tlp }}" required maxlength="13">
                        </div>
                        <br>
                        <input type="submit" class="btn btn-success btn-send" value="Update">
                        <a href="{{ route('pegawai.index') }}"><input type="button" class="btn btn-primary btn-send" value="Kembali"></a>



                </form>
            </div>
        </div>


        @endsection