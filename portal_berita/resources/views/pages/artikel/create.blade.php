@extends('backend.default')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Artikel</h4>

                    <form class="form-material m-t-40" action="{{route('artikel.store')}}" method="post"
                          enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label>Nama Artikel</label>
                            <input type="text" class="form-control form-control-line" name="judul"
                                   placeholder="Masukkan Artikel">
                        </div>

                        <div class="form-group">
                            <label>Isi Konten</label>
                            <textarea class="form-control" name="konten" rows="5"
                                      placeholder="Masukkan Isi Konten"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Pilih Kategori</label>
                            <select class="form-control" name="kategori">
                                @foreach($kategori as $kat)
                                    <option value="{{$kat->id}}">{{$kat->kategori}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <h4 class="card-title">Upload Gambar</h4>
                            <label for="input-file-now">Silahkan upload gambar artikel</label>
                            <input type="file" id="input-file-now" class="dropify" name="gambar"/>
                        </div>
                        <button type="submit" class="btn waves-effect waves-light btn-outline-success">Tambah</button>

                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection