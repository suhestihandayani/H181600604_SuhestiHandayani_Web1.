@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">List Galeri</div>                
                <div class="card-body">
                <a href="{!! route('galeri.create') !!}" class="btn btn-primary">Tambahkan Data</a><br><br>
                <table border="1">
                        
                    <tr>
                        <td align="center">ID</td>
                        <td align="center">Nama</td>
                        <td align="center">Keterangan</td>
                        <td align="center">Path</td>
                        <td align="center">Users Id</td>
                        <td align="center">Create</td>
                        <td align="center">Update</td>
                        <td align="center" colspan="3">Aksi</td>
                    </tr>
                        

                    @foreach ($listGaleri as $item)

                    <tr>
                        <td>{!! $item->id !!}</td>
                        <td>{!! $item->nama !!}</td>
                        <td>{!! $item->keterangan !!}</td>
                        <td><img src="{!! asset($item->path) !!}" width="200px"></td>
                        <td>{!! $item->users_id !!}</td>
                        <td>{!! $item->created_at->format('d/M/Y H:i') !!}</td>
                        <td>{!! $item->updated_at->format('d/M/Y H:i')!!}</td>
                        <td>
                        <a href="{!! route('galeri.show' ,[$item->id]) !!}" class="btn btn-sm btn-primary">Lihat</a></td>
                        <td><a href="{!! route('galeri.edit',[$item->id])!!}" class="btn-sm btn-success">Ubah</a></td>
                        <td>{!! Form::open(['route' => ['galeri.destroy', $item->id], 'method' =>'delete']) !!}
                        {!! Form::submit('Hapus', ['class'=>'btn-sm btn-danger', 'onClick'=>"return confirm('Apakah Anda yakin menghapus data ini?')"]); !!}
                        {!! Form::close() !!} </td>
                    </tr>

                        @endforeach

                </table>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection