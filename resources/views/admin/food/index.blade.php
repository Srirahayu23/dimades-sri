@extends('admin.layout')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                        <h2>Data Produk</h2>
                    </div>
                    <div class="card-body">
                        @include('admin.partials.flash')
                        <table class="table table-bordered table-stripped">
                            <thead>
                                <th>No</th>
                                <th>Nama Produk</th>
                                <th>Kategori</th>
                                <th>Mitra</th>
                                <th>Harga</th>
                                <th>stock</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                @php
                                    $i = 0;
                                @endphp
                                @forelse($products as $product)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->kategori->name }}</td>
                                        <td>{{ $product->mitra->name }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->stock }}</td>
                                        <td>
                                            <form action="{{ route('food.destroy', Crypt::encrypt($product->id)) }}"
                                                method="POST">
                                                <a href="{{ route('food.edit', Crypt::encrypt($product->id)) }}" class="btn btn-warning btn-sm">Edit</a>
                                                @csrf
                                                @method("DELETE")
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7">Data Tidak Ditemukan</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $products->links() }}
                    </div>
                    <div class="card-footer text-right">
                        <a href="{{ route('food.create') }}" class="btn btn-primary">Tambah Data</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
