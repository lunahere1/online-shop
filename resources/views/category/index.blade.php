@extends('backend.layout')

@section('content')
        <div class="row mt-2">
            <div class="col-sm-12 col-md-8">
            <h2>List Category</h2>
            </div>
            <div class="col-sm-12 col-md-4">
                <a href="{{ route('categories.create') }}" class="btn btn-warning float-end">Add Category</a>
            </div>
        </div>
        <div class="table-responsive">
          <table class="table">
            <thead class="bg-secondary text-white">
              <tr>
                <th scope="col">Category</th>
                <th scope="col">Gambar</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category )
                <tr>
                  <th scope="row">{{ $category->nama }}</th>
                    <td>
                        <img src="{{ asset('uploads/' . $category->gambar) }}" alt="" class="img-thumbnail" width="100">
                      </td>
                      <td>
                    <form action="{{ route('categories.delete', ['id' => $category->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                  <button type="submit" class="btn btn-danger">Hapus</button>
                  <a href="{{ route('categories.edit', ['id' => $category->id]) }}" class="btn btn-warning">Edit</a>
                  </form>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
@endsection
