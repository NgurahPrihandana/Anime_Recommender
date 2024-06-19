{{-- resources/views/favorit.blade.php --}}
@extends('layouts.app')

@section('title', 'Favoritku')

@section('content')
<div class="container">

  {{-- Recomended Content --}}
  <div class="row mt-4">
    <div class="col-lg-3">
      <div class="card mt-2" style="width: 18rem;">
        {{-- <img src="..." class="card-img-top" alt="..."> --}}
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>

    <div class="col-lg-3">
      <div class="card mt-2" style="width: 18rem;">
        {{-- <img src="..." class="card-img-top" alt="..."> --}}
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>

    <div class="col-lg-3">
      <div class="card mt-2" style="width: 18rem;">
        {{-- <img src="..." class="card-img-top" alt="..."> --}}
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>

    <div class="col-lg-3">
      <div class="card mt-2" style="width: 18rem;">
        {{-- <img src="..." class="card-img-top" alt="..."> --}}
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
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