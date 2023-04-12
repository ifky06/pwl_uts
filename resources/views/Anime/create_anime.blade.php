@extends('layouts.template')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Anime List</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-body">
        <form method="POST" action="{{$url_form}}" enctype="multipart/form-data">
            @csrf
            {!!isset($anm)?method_field('PUT'):''!!}
            
            <div class="form-group">
                <label for="nim">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Input Title" value="{{isset($anm)?$anm->title:old('title')}}">
                @error('title')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="nama">Image</label>
                <input type="file" class="form-control" id="image" name="image" placeholder="Input Image" value="{{isset($anm)?$anm->image:old('image')}}">
                @error('image')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            
            <div class="form-group">
                <label for="nama">Synopsis</label>
                <input type="text" class="form-control" id="sinopsis" name="sinopsis" placeholder="Input Synopsis" value="{{isset($anm)?$anm->sinopsis:old('sinopsis')}}">
                @error('sinopsis')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="nama">Genre</label>
                <input type="text" class="form-control" id="genre" name="genre" placeholder="Input Genre" value="{{isset($anm)?$anm->genre:old('genre')}}">
                @error('genre')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="nama">Studio</label>
                <input type="text" class="form-control" id="studio" name="studio" placeholder="Input Studio" value="{{isset($anm)?$anm->studio:old('studio')}}">
                @error('studio')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="nama">Release Year</label>
                <input type="text" class="form-control" id="year" name="year" placeholder="Input Release Year" value="{{isset($anm)?$anm->year:old('year')}}">
                @error('year')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>
    <!-- /.card -->
</section>
@endsection