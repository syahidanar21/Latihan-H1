@extends('layouts.master')
@section('title','user')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Tambah Data User</h3>
                            <a class="btn btn-primary" href="/user">Kembali</a>
                        </div>
                        <div class="card-body">
                            <form action="/user/simpan" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama User</label>
                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="name"
                                        id=""
                                        aria-describedby="helpid"
                                        placeholder=""
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Email</label>
                                    <input 
                                        type="email"
                                        class="form-control"
                                        name="email"
                                        id=""
                                        aria-describedby="helpid"
                                        placeholder=""
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Password</label>
                                    <input 
                                        type="password"
                                        class="form-control"
                                        name="password"
                                        id=""
                                        aria-describedby="helpid"
                                        placeholder=""
                                    />
                                </div>
                                <button class="btn btn-primary" type="submit">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection