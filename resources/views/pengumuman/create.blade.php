@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Pengumuman</div>
                <div class="card-body">
                <form method="post" action="{!!route('pengumuman.store')!!}">
                 @include('pengumuman.form')
         

                
                 </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection