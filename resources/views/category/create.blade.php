@extends('backend.layout')

@section('content')
<form method="POST" action="{{ route('categories.store') }}" class="mt-3" enctype="multipart/form-data">
    @csrf
    <!-- /resources/views/post/create.blade.php -->

<h1>Create Post</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Create Post Form -->
    <div class="row mt-3">
    <div class="col-lg-6">
        <div class="mb-3">
  <label for="nama" class="form-label">Nama Category</label>
  <input type="text" class="form-control" id="nama" name="nama">
       </div>
    </div>
    <div class="col-lg-6">
        <div class="mb-3">
  <label for="gambar" class="form-label">File Gambar</label>
  <input type="file" class="form-control" id="gambar" name="gambar">
       </div>
    </div>
    <div class="col-lg-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
  </form>
@endsection
