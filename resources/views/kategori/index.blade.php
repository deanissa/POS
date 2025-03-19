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
        // Event handler untuk tombol Edit
        $(document).on('click', '.btn-edit', function () {
            var id = $(this).data('id');
            window.location.href = '/kategori/' + id + '/edit';
        });

        // Event handler untuk tombol Delete
        $(document).on('click', '.btn-delete', function () {
        var id = $(this).data('id');

        if (confirm("Apakah Anda yakin ingin menghapus kategori ini?")) {
        $.ajax({
            url: '/kategori/' + id,
            type: 'POST',  // Harus POST karena DELETE perlu _method
            data: {
                _method: 'DELETE', // Laravel membutuhkan ini untuk DELETE request
                _token: '{{ csrf_token() }}'
            },
            success: function (response) {
                alert(response.success);
                $('#kategori-table').DataTable().ajax.reload(); // Refresh DataTables setelah delete
            },
            error: function (xhr) {
                alert('Terjadi kesalahan saat menghapus data.');
            }
        });
    }
});

    });
</script>
@endpush




