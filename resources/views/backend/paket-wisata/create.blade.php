@extends('layouts.backend.master')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark ml-4">Tambah Paket Wisata</h1>
                    </div>
                </div>
            </div>
        </div>

        <section class="content pr-5 pl-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card shadow">
                            <div class="card-body">
                                <form action="{{ route('backend.paket-wisata.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                    <div class="form-group row">
                                    <label class="col-sm-2 col-form-label font-weight-bold">Thumbnail <span style="color:red;"> *</span></label>
                                        <div class="col-sm-10">
                                            <input type="file" name="image" class="form-control" required>
                                            @if ($errors->has('image'))
                                                <span style="color:red;">{{ $errors->first('image') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                    <label class="col-sm-2 col-form-label font-weight-bold">Kategori Paket<span style="color:red;"> *</span></label>
                                        <div class="col-sm-10">
                                            <select name="kategori_paket_wisata_id" class="form-control" required>
                                                @foreach ($items as $item)
                                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('kategori_paket_wisata_id'))
                                                <span style="color:red;">{{ $errors->first('kategori_paket_wisata_id') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                    <label class="col-sm-2 col-form-label font-weight-bold">Nama Paket Wisata<span style="color:red;"> *</span></label>
                                        <div class="col-sm-10">
                                            <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" required>
                                            @if ($errors->has('nama'))
                                                <span style="color:red;">{{ $errors->first('nama') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                    <label class="col-sm-2 col-form-label font-weight-bold">Deskripsi <span style="color:red;"> *</span></label>
                                        <div class="col-sm-10">
                                            <textarea name="deskripsi" cols="30" rows="5" class="form-control">{{ old('deskripsi') }}</textarea>
                                            @if ($errors->has('deskripsi'))
                                                <span style="color:red;">{{ $errors->first('deskripsi') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                    <label class="col-sm-2 col-form-label font-weight-bold">Harga <span style="color:red;"> *</span></label>
                                        <div class="col-sm-10">
                                            <input type="number" name="harga" class="form-control" value="{{ old('harga') }}" required>
                                            @if ($errors->has('harga'))
                                                <span style="color:red;">{{ $errors->first('harga') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label font-weight-bold">Alamat <span style="color:red;"> *</span></label>
                                            <div class="col-sm-10">
                                                <input type="text" name="address" class="form-control" value="{{ old('address') }}" required>
                                                @if ($errors->has('address'))
                                                    <span style="color:red;">{{ $errors->first('address') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                <button type="submit" class="btn btn-primary btn-save shadow">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
