{{-- resources/views/favorit.blade.php --}}
@extends('layouts.app')

@section('title', 'Favoritku')

@section('content')
<div class="container">
    <div class="row mt-4">
        <h4>Anime Favoritmu</h4>
        <div class="col-lg-12">
            <table id="myTable" class="display table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Genre</th>
                        <th>Score</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>"Judul"</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>"Judul"</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>
@endsection