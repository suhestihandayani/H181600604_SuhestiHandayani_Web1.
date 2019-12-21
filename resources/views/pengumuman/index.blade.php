@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Pengumuman</div>                
                <div class="card-body">
                <a href="{!!route('pengumuman.create')!!}" class="btn btn-primary">Tambah Data</a><br><br>
           
                <table border="1">
                    <tr>
                        <td align="center">ID</td>
                        <td align="center">Judul</td>
                        <td align="center">Isi</td>
                        <td align="center">Users Id</td>
                        <td align="center">Create</td>
                        <td align="center">Update</td>
                        <td align="center" colspan="3">Aksi</td>
                    </tr>

                    @foreach ($listPengumuman as $item)

                    <tr>
                        <td>{!! $item->id !!}</td>
                        <td>{!! $item->judul !!}</td>
                        <td>{!! $item->isi !!}</td>
                        <td>{!! $item->users_id !!}</td>
                        <td>{!! $item->created_at->format('d/m/Y H:i') !!}</td>
                        <td>{!! $item->updated_at->format('d/M/Y H:i')!!}</td>
                        <td>
                        <a href="{!! route('pengumuman.show' ,[$item->id]) !!}" class="btn btn-sm btn-primary">Lihat</a></td>
                        <td><a href="{!! route('pengumuman.edit',[$item->id])!!}" class="btn-sm btn-success">Ubah</a></td>
                        <td>{!! Form::open(['route' => ['pengumuman.destroy', $item->id], 'method' =>'delete']) !!}
                        {!! Form::submit('Hapus', ['class'=>'btn-sm btn-danger', 'onClick'=>"return confirm('Apakah Anda yakin menghapus data ini?')"]); !!}
                        {!! Form::close() !!}</td>
                    </tr>

                        @endforeach

                </table>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection