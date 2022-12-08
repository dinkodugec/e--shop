@extends('template.template')

@section('title', 'Users')




@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
      <form action="{{ route('korisnik.update', $korisnik) }}" method="post">
        @method('PUT')
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Ime</label>
          <input type="text" class="form-control" id="ime" value="{{ $korisnik->ime }}"  name="ime" >
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Prezime</label>
          <input type="text" class="form-control" id="prezime" value="{{ $korisnik->prezime }}" name="prezime" >
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" value="{{ $korisnik->email }}" id="email"
          name="email">
        </div>


        <div class="form-group">
          <label for="exampleFormControlSelect1">Odaberi ulogu</label>
          <select class="form-control" id="name" name="uloga">
            <option value="-1">Izaberi</option>
            @foreach ($uloge  as  $uloga)
                 <option value="{{ $uloga->id }}"
                   @if ($uloga->id == $korisnik->id_uloga)
                       selcted
                   @endif
                  >{{ $uloga->naziv }}</option>
            @endforeach

          </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</div>
@endsection

@section('scripts')



@endsection
