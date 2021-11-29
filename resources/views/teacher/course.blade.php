@extends('layouts.app')

@section('content')
<div class="block-header">
    <div class="row clearfix mb-4">
        <div class="col-md-6 col-sm-12">
            <a href="{{ route('dashboard') }}" class="text-dark"><i class="icon-arrow-left text-dark mr-2"></i>Kembali</a>
            <nav aria-label="breadcrumb" class="mt-4">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Learnify.id</a></li>
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">List Bab</li>
                </ol>
            </nav>
        <h3 class="color-blue-2 font-weight-bold my-3 text-uppercase" style="font-size: 1.8rem;">matematika | aljabar</h3>
        </div>
    </div>
    <div class="row-clearfix">
        <p class="font-weight-bold">Terdapat <span class="color-blue-2">10</span> Bab!</p>
        <div class="mt-3">
            <div class="d-flex align-items-center p-3 w-100 bg-white shadow-sm rounded border-hover">
                <div class="d-flex align-items-center justify-content-center w35 bg-blue-2 rounded-circle cursor-pointer" data-toggle="tooltip" data-placement="top" title="materi"><i class="icon-book-open text-white"></i></div>
                <div class="ml-3">
                <a href="#" class="text-dark text-capitalize text-dark pt-3">bentuk operasi aljabar</a>
                </div>
            </div>
        </div>
        <div class="mt-3">
            <div class="d-flex align-items-center p-3 w-100 bg-white shadow-sm rounded border-hover">
                <div class="d-flex align-items-center justify-content-center w35 bg-blue-2 rounded-circle cursor-pointer" data-toggle="tooltip" data-placement="top" title="materi"><i class="icon-book-open text-white"></i></div>
                <div class="ml-3">
                <a href="#" class="text-dark text-capitalize text-dark pt-3">sifat-sifat aljabar</a>
                </div>
            </div>
        </div>
        <div class="mt-3">
            <div class="d-flex align-items-center p-3 w-100 bg-white shadow-sm rounded border-hover">
                <div class="d-flex align-items-center justify-content-center w35 bg-blue-2 rounded-circle cursor-pointer" data-toggle="tooltip" data-placement="top" title="materi"><i class="icon-book-open text-white"></i></div>
                <div class="ml-3">
                <a href="#" class="text-dark text-capitalize text-dark pt-3">contoh soal aljabar</a>
                </div>
            </div>
        </div>
        <div class="mt-4 pl-3">
            <a href="#" class="mt-3 color-blue-2">+ Tambah Bab</a>
        </div>
    </div>
</div>
@endsection

@section('script')
@endsection