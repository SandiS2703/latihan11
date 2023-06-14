@extends('Layout.layout')

@section('content')
    @include('Component.navbar')

    <div class="container">
        <h1>Data Kategori</h1>
        {{-- <td><a href="dashboard-tambah-game" class="btn btn-primary">Tambah Data</a></td> --}}
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Kode Kategori</th>
                    <th scope="col">Kategori Game</th>
                    <th scope="col">Action</th>
                    <th scope="col">Print</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kategori as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->id_kategori }}</td>
                        <td>{{ $item->deskripsi }}</td>
                        <td>
                            <form action="{{ url('dashboard-delete-game', $item->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <a href="{{ 'dashboard-edit-game/' . $item->id }}" class="btn btn-warning">Edit</a>
                                <button class="btn btn-danger" type="submit"
                                    onclick="return confirm('are you sure??')">Delete</button>
                            </form>
                        </td>
                        <td><a href="{{ 'print-game' }}" class="btn btn-warning">Print</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
