@extends('layout.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Kategori')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Kategori')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Manage Kategori</div>

            <div class="card-body">
                <!-- Tombol Add -->
                <a href="./kategori/create" class="btn btn-primary mb-3">Add</a>

                {!! $dataTable->table() !!}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {!! $dataTable->scripts() !!}

    <script>
        $(document).ready(function () {
            // Menambahkan kolom Action dengan tombol Edit
            $('table').on('draw.dt', function () {
                $('.btn-edit').on('click', function () {
                    var id = $(this).data('id');
                    window.location.href = '/kategori/' + id + '/edit';
                });
            });
        });
    </script>
@endpush

