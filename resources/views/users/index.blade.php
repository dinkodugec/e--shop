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
                        <th>Ime</th>
                        <th>Prezime</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Ime</th>
                        <th>Prezime</th>
                        <th>Email</th>
                    </tr>
                </tfoot>
                   <tbody>
                    @foreach ($korisnici as $korisnik )
                    <tr>
                        <td>{{ $korisnik->ime }}</td>
                        <td>{{ $korisnik->prezime }}</td>
                        <td>{{ $korisnik->email }}</td>

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
