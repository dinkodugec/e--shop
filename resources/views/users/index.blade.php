@extends('template.template')

@section('title', 'Users')




@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Ime</th>
                        <th>Prezime</th>
                        <th>Email</th>
                        <th>Akcija</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Ime</th>
                        <th>Prezime</th>
                        <th>Email</th>
                        <th>Akcija</th>
                    </tr>
                </tfoot>
                   <tbody>
                    @foreach ($korisnici as $korisnik )
                    <tr>
                        <td>{{ $korisnik->id }}</td>
                        <td>{{ $korisnik->ime }}</td>
                        <td>{{ $korisnik->prezime }}</td>
                        <td>{{ $korisnik->email }}</td>
                        <td><a class="btn btn-primary" href="{{ route('korisnik.edit', $korisnik->id) }}">Edit</a></td>

                    </tr>
                    @endforeach

                   </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('scripts')

     <script>$(document).ready(function() {
        $('#dataTable').DataTable();
      });
      </script>

@endsection
