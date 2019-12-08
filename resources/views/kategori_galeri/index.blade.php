@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Kategori Galeri</div>

                <div class="card-body">
                <a href="{!!route('kategori_galeri.create')!!}" class="btn btn-primary">Tambah Data</a><br><br>
                    
                <table border="1">
                <tr>
                <td>ID</td>
                <td>Nama</td>
                <td>Users Id</td>
                <td>Create</td>
                <td>Update</td>
                <td>Aksi</td>
                </tr>

                @foreach($listKategoriGaleri as $item)

                <tr>
                <td>{!!$item->id!!}</td>
                <td>{!!$item->nama!!}</td>
                <td>{!!$item->users_id!!}</td>
                <td>{!!$item->created_at!!}</td>
                <td>{!!$item->updated_at->format('d/M/Y H:i')!!}</td>
                

                <td>
                    <a href="{!!route('kategori_galeri.show',[$item->id])!!}" class="btn-sm btn-primary">Lihat</a>
                    <a href="{!!route('kategori_galeri.edit',[$item->id])!!}" class="btn-sm btn-warning">Ubah</a>
                    {!! Form::open(['route' => ['kategori_galeri.destroy', $item->id], 'method' =>'delete']) !!}
                    {!! Form::submit('Hapus', ['class'=>'btn-sm btn-danger', 'onClick'=>"return confirm('Apakah Anda yakin menghapus data ini?')"]); !!}
                    {!! Form::close() !!}
                 </td>
                 </tr>

                @endforeach
                </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection