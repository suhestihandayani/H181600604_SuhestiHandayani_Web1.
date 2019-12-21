@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Artikel</div>                
                <div class="card-body">
                <a href="{!!route('artikel.create')!!}" class="btn btn-primary">Tambah Data</a><br><br>
           
                <table border="1">
                    <tr>
                        <td align="center">ID</td>
                        <td align="center">Judul</td>
                        <td align="centr">Isi</td>
                        <td align="center">Users Id</td>
                        <td align="center">Create</td>
                        <td align="center">Update</td>
                        <td colspan="3" align="center"> Aksi  </td>
                    </tr>
                    
                    @foreach ($listArtikel as $item)

                    <tr>
                        <td>{!! $item->id !!}</td>
                        <td>{!! $item->judul !!}</td>
                        <td>{!! $item->isi !!}</td>
                        <td>{!! $item->users_id !!}</td>
                        <td>{!! $item->created_at->format('d/m/Y H:i') !!}</td>
                        <td>{!!$item->updated_at->format('d/M/Y H:i')!!}</td>
                        
                        <td>
                        <a href="{!! route('artikel.show' ,[$item->id]) !!}" class="btn btn-sm btn-primary">Lihat</a></td>
                        <td><a href="{!! route('artikel.edit',[$item->id])!!}" class="btn-sm btn-success">Ubah</a></td>
                        <td>{!! Form::open(['route' => ['artikel.destroy', $item->id], 'method' =>'delete']) !!}
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