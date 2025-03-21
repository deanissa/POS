@extends('adminlte::page')

{{-- Extend and customize the browser title --}}

@section('title')
    {{ config('adminlte.title') }}
    @hasSection('subtitle') | @yield('subtitle') @endif
@stop

@vite('resources/js/app.js')

{{-- Extend and customize the page content header --}}

@section('content_header')
    @hasSection('content_header_title')
        <h1 class="text-muted">
            @yield('content_header_title')

            @hasSection('content_header_subtitle')
            <small class="text-dark">
                <i class="fas fa-xs fa-angle-right text-muted"></i>
                @yield('content_header_subtitle')
            </small>
        @endif
    </h1>
@endif
@stop

{{-- Navbar Customization --}}
@section('content_top_nav_right')
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('kategori.index') }}">
                <i class="fas fa-list"></i> Kategori
            </a>
        </li>
    </ul>
@endsection


{{-- Navbar Menu --}}
@section('adminlte_navbar')
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">

    <li class="nav-item">
        <a href="../kategori.index" class="nav-link">
            <i class="nav-icon fas fa-list"></i>
            <p>Kategori</p>
        </a>
    </li>
</ul>
@endsection

{{-- Rename section content to content_body --}}

@section('content')
@yield('content_body')
@stop

{{-- Create a common footer --}}

@section('footer')
<div class="float-right">
    Version: {{ config('app.version', '1.0.0') }}
</div>

<strong>
    <a href="{{ config('app.company_url', '#') }}">
        {{ config('app.company_name', 'My company') }}
    </a>
</strong>
@stop


{{-- Add common Javascript/Jquery code --}}



@push('js')
<script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>

@endpush

@stack('scripts')


{{-- Add common CSS customizations --}}

@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css" />

<style type="text/css">

    {{-- You can add AdminLTE customizations here --}}
    /*
    .card-header {
        border-bottom: none;
    }
    .card-title {
        font-weight: 600;
    }
    */

</style>

@endpush
