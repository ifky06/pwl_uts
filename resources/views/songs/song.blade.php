@extends('layouts.template')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Songs</h1>
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
                <a href="{{url('songs/create')}}" class="btn btn-sm btn-success my-2">Tambah Data</a>
                <form action="{{url('songs')}}" method="get">
                    <div class="input-group mb-3 w-25">
                        <input type="text" name="search" class="form-control" placeholder="Search" value="{{request()->search}}">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </div>
                    </div>
                </form>
                <table class="table table-striped mb-3">
                    <thead>
                    <tr>
{{--                        <th>No</th>--}}
                        <th>Title</th>
                        <th>Artist</th>
                        <th>Genre</th>
                        <th>Year</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($songs->count() > 0)
                        @foreach($songs as $row)
                            <tr>
{{--                                <td>{{ $row->no }}</td>--}}
                                <td>{{ $row->title }}</td>
                                <td>{{ $row->artist }}</td>
                                <td>{{ $row->genre }}</td>
                                <td>{{$row->year }}</td>
                                <td>
                                    <a href="{{url('/songs/'.$row->id.'/edit')}}" class="btn btn-sm btn-primary">edit</a>
                                    <form action="{{url('/songs/'.$row->id)}}" method="post" style="display: inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6" class="text-center">Data tidak ada</td>
                        </tr>
                    @endif

                    </tbody>
                </table>
                {{ $songs->links() }}
            </div>
        </div>
        <!-- /.card -->

    </section>
@endsection

@push('css')

@endpush

@push('scripts')

    {{--    <script>--}}
    {{--        alert('Selamat Datang');--}}
    {{--    </script>--}}

@endpush
