@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Lapangan</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive small">
        <a href="/dashboard/daftar-lapangan/create" class="btn btn-success mb-3 ">Tambah Lapangan Baru</a>
        @if ($daftarLapangan->isEmpty())
            <div class="">
                <h5>
                    <span class="badge text-danger">Belum Ada Lapangan Yang Terdaftar</span>
                </h5>
            </div>
        @else
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Lapangan</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Status</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Nama Pemilik</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($daftarLapangan as $lapangan)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $lapangan->nama }}</td>
                            <td>{{ $lapangan->kelas }}</td>
                            <td>
                                @if ($lapangan->status == 'tersedia')
                                    <span class="badge bg-success ">{{ $lapangan->status }}</span>
                                @else
                                    <span class="badge bg-danger ">{{ $lapangan->status }}</span>
                                @endif
                            </td>
                            <td>{{ $lapangan->harga }}</td>
                            <td>{{ $lapangan->pemilik->name }}</td>
                            <td>
                                <a href="/dashboard/daftar-lapangan/{{ $lapangan->slug }}" class="badge bg-success"><i
                                        class="bi bi-eye-fill"></i></a>

                                <a href="/dashboard/daftar-lapangan/{{ $lapangan->slug }}/edit"
                                    class="badge bg-warning  "><i class="bi bi-pencil-square"></i></a>

                                <form action="/dashboard/daftar-lapangan/{{ $lapangan->slug }}" method="POST"
                                    class="d-inline ">
                                    @method('delete')
                                    @csrf
                                    <button class="badge bg-danger border-0 "
                                        onclick="return confirm('Yakin Menghapus Data?')"><i
                                            class="bi bi-x-circle"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
