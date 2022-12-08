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
          <input type="text" class="form-control @error('ime') is-invalid @enderror" id="ime" value="{{ $korisnik->ime }}"  name="ime" >
             @error('ime')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Prezime</label>
          <input type="text" class="form-control  @error('prezime') is-invalid @enderror" id="prezime" value="{{ $korisnik->prezime }}" name="prezime" >
          @error('prezime')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control  @error('email') is-invalid @enderror" value="{{ $korisnik->email }}" id="email"
          name="email">
          @error('email')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>


        <div class="form-group">
          <label for="exampleFormControlSelect1">Odaberi ulogu</label>
          <select class="form-control" id="uloga" name="uloga">
            <option value="-1">Izaberi</option>

            @foreach ($uloge  as  $uloga)
                 <option value="{{ $uloga->id }}" @if ($uloga->id == $korisnik->id_uloga) selected="selected" @endif> {{ $uloga->naziv }} </option>
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
