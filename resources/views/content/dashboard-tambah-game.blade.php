@extends('Layout.layout')
@section('content')
    @include('Component.navbar')

    <div class="container">
        <h1>Tambah data Game</h1>

        <form action="dashboard-tambah-game" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label>ID Game</label>
                <input type="text" class="form-control mb-3 mt-2" placeholder="ID Game" name="id_game">
            </div>
            <div class="form-group">
                <label>Nama Game</label>
                <input type="text" class="form-control mb-3 mt-2" placeholder="Nama game" name="nama">
            </div>
            <div class="form-group">
                <label>Kategori Game</label>
                <select class="form-select mb-3 mt-2" name="id_kategori" id="id_kategori" required>
                    @foreach ($kategori as $item)
                        <option value="{{ $item->id_kategori }}">{{ $item->id_kategori }} {{ $item->deskripsi }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
