@extends('layouts.template')

@section('title', 'Tambah Kategori')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-xl">
                <div class="col-xl">
                    <div class="card mb-6">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Tambah Kategori</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('barang.kategori.store') }}" method="post">
                                @csrf
                                <div class="input-group input-group-merge mb-6">
                                    <span id="nama" class="input-group-text"><i class="ri-user-line"></i></span>
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" name="nama" value="{{ old('nama') }}"
                                            class="form-control" @error('nama') is-invalid @enderror id="nama"
                                            placeholder="Nama kategori..." aria-describedby="nama" required />
                                        <label for="nama">Nama Kategori</label>
                                        @error('nama')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ ('barang.kategori.index') }}" class="btn btn-danger">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
