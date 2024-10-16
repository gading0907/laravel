@extends('layouts.app')

@section('content')
<div class="container-fluid min-vh-100 d-flex justify-content-center align-items-center" style="background-color: #36D1DC; padding: 0; margin: 0;">
    <div class="row w-100">
        <div class="col-md-12 d-flex justify-content-center">
            <div class="card shadow-lg border-0" style="width: 100%; max-width: 500px; border-radius: 15px;">
                <div class="card-body p-5" style="background-color: #ffffff; border-radius: 15px;">
                    <h3 class="text-center mb-4" style="color: #333333;">Tambah Pelanggan</h3>
                    <form action="{{ route('pelanggan.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label" style="color: #333333;">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" required style="border-radius: 10px; background-color: #F9F9F9;">
                        </div>
                        <div class="mb-3">
                            <label for="paket" class="form-label" style="color: #333333;">Paket</label>
                            <input type="text" class="form-control" id="paket" name="paket" required style="border-radius: 10px; background-color: #F9F9F9;">
                        </div>
                        <div class="mb-3">
                            <label for="kampus" class="form-label" style="color: #333333;">Kampus</label>
                            <input type="text" class="form-control" id="kampus" name="kampus" required style="border-radius: 10px; background-color: #F9F9F9;">
                        </div>
                        <div class="mb-3">
                            <label for="telepon" class="form-label" style="color: #333333;">Telepon</label>
                            <input type="text" class="form-control" id="telepon" name="telepon" required style="border-radius: 10px; background-color: #F9F9F9;">
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn" style="background: linear-gradient(90deg, #36D1DC, #5B86E5); color: white; border-radius: 50px; font-weight: bold;">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
