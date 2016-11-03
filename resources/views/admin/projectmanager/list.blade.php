@extends('admin/home')    <!-- resources/views/auth/login.blade.php -->
@section('contenido')
<script src="/js/jquery.dataTables.min.js" type="text/javascript"></script>
<main id="component" class="detalle">
  <div class="breadcrumb-class">You are in:<a href="/" target="_self" title="Inicio">Home</a>/<span>Project Managers</span></div>
  <div class="spacer"></div>
<h1>Project Managers</h1>
<div class="row">
  <div class="col-md-12">
    <p style="text-align: right;">
      <a class="btn btn-primary btn-md" href="/project-managers/register/">Register Project Manager</a>
    </p>
  </div>
</div>
<div class="dataTables_wrapper" role="grid">
    <table class="table" id="tabla-project-managers">
      <thead>
        <tr>
          <th>Code</th><th>Account</th><th>Name</th><th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($project_managers as $project_manager)
          <tr>
            <td>{{ $project_manager->user->code }}</td>
            <td>{{ $project_manager->user->account }}</td>
            <td>{{ $project_manager->user->name }}</td>
            <td><a href='/project-managers/update/{{ $project_manager->id }}/'>See or Update</a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
</div>
<script>
  $('#tabla-project-managers').DataTable({
    "order": [[0, "asc" ]]
  });
</script>
</main>
@endsection
