@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Artikel</div>

                <div class="card-body">
               

                <table border="1">
                <tr>
                <td>ID</td>
                <td>Nama</td>
                <td>Users Id</td>
                <td>Create</td>
                <td>Aksi</td>
                </tr>

                 @foreach($listArtikel as $item)

                 <tr>
                 <td>{!!$item->id!!}</td>
                 <td>{!!$item->nama!!}</td>
                 <td>{!!$item->users_id!!}</td>
                 <td>{!!$item->created_at->format('d/M/Y H:i')!!}</td>

                 <td>
                    <a href="{!!route('artikel.show',[$item->id])!!}" class="btn-sm btn-primary">Lihat</a>
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