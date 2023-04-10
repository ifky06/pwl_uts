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

            <a href="{{url('anime/create')}}" class="btn btn-sm btn-success my-2">Tambah Data</a>
            <form action="{{url('anime')}}" method="get">
                <div class="input-group mb-3">
                    <input type="text" name="search" class="form-control" placeholder="Search" value="{{request()->search}}">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Search</button>
                    </div>
                </div>
            </form>
            <table class="table table-bordered table-striped">
                <Head>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Synopsis</th>
                        <th>Genre</th>
                        <th>Studio</th>
                        <th>Release Year</th>
                        <th>Action</th>
                    </tr>
                </Head>
                <tbody>
                    @if (count($anm) > 0)
                        @foreach ($anm as $i => $a)
                        <tr>
                            <td>{{ $i+1 }}</td>
                            <td>{{ $a->title }}</td>
                            <td>{{ $a->sinopsis }}</td>
                            <td>{{ $a->genre }}</td>
                            <td>{{ $a->studio }}</td>
                            <td>{{ $a->year }}</td>
                            <td>
                                <a href="{{url('/anime/' .$a->id. '/edit')}}" class="btn btn-warning">Edit</a>
                                <form method="POST" action="{{url('/anime/'.$a->id)}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    @else 
                        <tr>
                            <td colspan="7" class="text-center">Data Tidak Ada</td>
                        </tr>
                    @endif
                </tbody>
            </table>
            <div class="my-3">
                {{$anm->links()}}
            </div>
        </div>
    </div>
    <!-- /.card -->

</section>

@endsection