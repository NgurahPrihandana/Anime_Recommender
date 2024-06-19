{{-- resources/views/favorit.blade.php --}}
@extends('layouts.app')

@section('title', 'Favoritku')

@section('content')
<div class="container">

  {{-- Analitik --}}
  <div class="row mt-4">
    <h4>Analitik dan Trend Anime</h4>

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