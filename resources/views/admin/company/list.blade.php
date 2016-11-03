@extends('admin/home')    <!-- resources/views/auth/login.blade.php -->
@section('contenido')
<script src="/js/jquery.dataTables.min.js" type="text/javascript"></script>
<main id="component" class="detalle">
  <div class="breadcrumb-class">You are in:<a href="/" target="_self" title="Inicio">Home</a>/<span>Companies</span></div>
  <div class="spacer"></div>
<h1>Companies</h1>
<div class="row">
  <div class="col-md-12">
    <p style="text-align: right;">
      <a class="btn btn-primary btn-md" href="/companies/register/">Register Company</a>
    </p>
  </div>
</div>
<div class="dataTables_wrapper" role="grid">
    <table class="table" id="tabla-companies">
      <thead>
        <tr>
          <th>Name</th><th>Bidding Capacity</th><th>Resource</th><th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($companies as $company)
          <tr>
            <td>{{ $company->name }}</td>
            <td>{{ $company->bidding_capacity }}</td>
            <td>{{ $company->resource }}</td>
            <td><a href='/companies/update/{{ $company->id }}/'>See or Update</a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
</div>
<script>
  $('#tabla-companies').DataTable({
    "order": [[0, "asc" ]]
  });
</script>
</main>
@endsection
