@extends('layouts.app')

@section('content')
<div class="block-header">
    <div class="row clearfix mb-2">
        <div class="col-md-6 col-sm-12">
            <h1 class="color-blue-2 font-weight-bold my-4" style="font-size: 1.8rem;">Dashboard</h1>
        </div>
    </div>
    <div class="row-clearfix mt-3">
        <h5 class="color-blue-2 font-weight-bold text-uppercase">matematika | xii</h5>
        <div class="d-flex justify-content-between mt-3 align-items-end font-weight-bold">
            <a class="color-black">Terdapat <span class="color-blue-2">100</span> Materi!</a>
            <a href="{{ route('subject') }}" class="color-blue-2">Lihat Semua</a>
        </div>
        <div class="mt-1">
            <a href="{{ route('subject.course') }}" class="d-flex align-items-center p-2 w-100 bg-white shadow-sm rounded border-hover">
                <div class="d-flex align-items-center justify-content-center w35 bg-blue-2 rounded-circle cursor-pointer ml-2" data-toggle="tooltip" data-placement="top" title="materi"><i class="icon-book-open text-white"></i></div>
                <div class="ml-3">
                <p class="text-dark text-uppercase text-dark pt-3">matematika | aljabar</p>
                </div>
            </a>
        </div>
        <div class="mt-3">
            <div class="d-flex align-items-center p-3 w-100 bg-white shadow-sm rounded border-hover">
                <div class="d-flex align-items-center justify-content-center w35 bg-blue-2 rounded-circle cursor-pointer" data-toggle="tooltip" data-placement="top" title="materi"><i class="icon-book-open text-white"></i></div>
                <div class="ml-3">
                <a href="#" class="text-dark text-uppercase text-dark pt-3">matematika | logaritma</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row-clearfix mt-5">
        <h1 class="color-blue-2 font-weight-bold text-uppercase" style="font-size: 1.8rem;">bahasa indonesia</h1>
        <div class="d-flex justify-content-between align-items-top mt-3 font-weight-bold">
            <p>Terdapat <span class="color-blue-2">150</span> Materi!</p>
            <a href="#" class="color-blue-2">Lihat Semua</a>
        </div>
        <div class="mt-3">
            <div class="d-flex align-items-center p-3 w-100 bg-white shadow-sm rounded border-hover">
                <div class="d-flex align-items-center justify-content-center w35 bg-blue-2 rounded-circle cursor-pointer" data-toggle="tooltip" data-placement="top" title="materi"><i class="icon-book-open text-white"></i></div>
                <div class="ml-3">
                <a href="#" class="text-dark text-uppercase text-dark pt-3">bahasa indonesia | puisi</a>
                </div>
            </div>
        </div>
        <div class="mt-3">
            <div class="d-flex align-items-center p-3 w-100 bg-white shadow-sm rounded border-hover">
                <div class="d-flex align-items-center justify-content-center w35 bg-blue-2 rounded-circle cursor-pointer" data-toggle="tooltip" data-placement="top" title="materi"><i class="icon-book-open text-white"></i></div>
                <div class="ml-3">
                <a href="#" class="text-dark text-uppercase text-dark pt-3">bahasa indonesia | cerpen</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
@endsection