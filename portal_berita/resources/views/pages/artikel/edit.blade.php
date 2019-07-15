@extends('backend.default')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Artikel</h4>

                    <form class="form-material m-t-40" action="{{route('artikel.update',$artikel->id)}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        {{method_field('PATCH')}}

                        <div class="form-group">
                            <label>Nama Artikel</label>
                            <input type="text" class="form-control form-control-line" name="judul" value="{{$artikel->judul}}">
                        </div>

                        <div class="form-group">
                            <label>Isi Konten</label>
                            <textarea class="form-control" name="konten" rows="5">{{$artikel->konten}}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Pilih Kategori</label>
                            <select class="form-control" name="kategori">
                                @foreach($kategori as $kat)
                                    <option value="{{$kat->id}}"@if($kat->id == $artikel->id_kategori){{"selected"}}@endif>{{$kat->kategori}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <h4 class="card-title">Upload Gambar</h4>
                            <label for="input-file-now">Silahkan upload gambar artikel</label>
                            <input type="hidden" name="old_gambar" value="{{$artikel->gambar}}" data-default-file="{{asset('uploads/artikel/'.$artikel->gambar)}}">
                            <input type="file" id="input-file-now" class="dropify" name="gambar"/>
                        </div>
                        <button type="submit" class="btn waves-effect waves-light btn-outline-success">Edit</button>

                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection