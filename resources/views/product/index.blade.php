@extends('backend.layout')

@section('content')
        <div class="row mt-2">
            <div class="col-sm-12 col-md-8">
            <h2>List Products</h2>
            </div>
            <div class="col-sm-12 col-md-4">
                <a href="{{ route('products.create') }}" class="btn btn-warning float-end">Add Product</a>
            </div>
        </div>
        <div class="table-responsive">
          <table class="table">
            <thead class="bg-secondary text-white">
              <tr>
                <th scope="col">Nama</th>
                <th scope="col">Gambar</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Harga</th>
                <th scope="col">Discount</th>
                <th scope="col">Category</th>
                <th scope="col">Tanggal Dibuat</th>
                <th scope="col">Tanggal Diperbarui</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($products as $product )
                <tr>
                  <th scope="row">{{ $product->nama }}</th>
                  <td>
                    <img src="{{ asset('uploads/' . $product->gambar) }}" alt="" class="img-thumbnail" width="100">
                  </td>
                  <td>{{ $product->deskripsi }}</td>
                  <td>{{ $product->harga }}</td>
                  <td>{{ $product->discount }}</td>
                  <td>{{ $product->category ? $product->category->nama : 'Kategori Tidak Ada' }}</td>
                  <td>{{ $product->created_at }}</td>
                  <td>{{ $product->updated_at }}</td>
                  <td>
                    <form action="{{ route('products.delete', ['id' => $product->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                  <button type="submit" class="btn btn-danger">Hapus</button>
                  <a href="{{ route('products.edit', ['id' => $product->id]) }}" class="btn btn-warning">Edit</a>
                  </form>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
@endsection
