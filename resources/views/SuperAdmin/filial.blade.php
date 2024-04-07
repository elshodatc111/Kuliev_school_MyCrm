@extends('SuperAdmin.layout.home')
@section('title','Filiallar')
@section('content')

<main id="main" class="main">

<div class="pagetitle">
    <h1>Filiallar</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('SuperAdmin')}}">Bosh sahifa</a></li>
            <li class="breadcrumb-item active">Filiallar</li>
        </ol>
    </nav>
</div>
@if (Session::has('success'))
    <div class="alert alert-success">{{Session::get('success') }}</div>
@elseif (Session::has('error'))
    <div class="alert alert-danger">{{Session::get('error') }}</div>
@endif
<section class="section dashboard">
  <div class="card info-card sales-card">
    <div class="card-body text-center">
      <h5 class="card-title">Filiallar</span></h5>
      <div class="table-responsive">
          <table class="table table-bordered text-center table-striped table-hover" style="font-size:14px;">
            <thead>
              <tr>
                <th>#</th>
                <th>Filial</th>
                <th>Manzil</th>
                <th>Naqt</th>
                <th>Plastik</th>
                <th>Payme</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              @forelse($Filial as $item)
              <tr>
                <td>{{ $loop->index+1 }}</td>
                <td style="text-align:left;">{{ $item->filial_name }}</td>
                <td style="text-align:left;">{{ $item->filial_addres }}</td>
                <td>{{ $item->naqt-$item->xarajat_naqt }}</td>
                <td>{{ $item->plastik-$item->xarajat_plastik }}</td>
                <td>{{ $item->payme-$item->xarajat_payme }}</td>
                <td>
                  <a href="{{ route('filial.show',$item->id ) }}" class="btn btn-primary px-1 py-0"><i class="bi bi-gear"></i></a>
                  <a href="{{ route('filailCrm',$item->id) }}" class="btn btn-warning px-1 text-white py-0"><i class="bi bi-eye"></i></a>
                </td>
              </tr>
              @empty

              @endforelse
            </tbody>
          </table>
        </div>
    </div>
  </div>

  <div class="card info-card sales-card">
    <div class="card-body text-center">
      <h5 class="card-title mb-0 pb-0">Yangi filial qo'shish</span></h5>
      <form action="{{ route('filialcreate') }}" method="post" class="row">
        @csrf 
        <div class="col-lg-5">
          <label for="filial_name" class="mt-lg-0 mt-2">Filial nomi</label>
          <input type="text" name="filial_name" class="form-control" required>
        </div>
        <div class="col-lg-5">
          <label for="filial_addres" class="mt-lg-0 mt-2">Filial manzili</label>
          <input type="text" name="filial_addres" class="form-control" required>
        </div>
        <div class="col-lg-2">
          <label for="" class="mt-lg-0 mt-2">.</label>
          <button class="btn btn-primary w-100">Filialni Saqlash</button>
        </div>
      </form>
    </div>
  </div>
     
</section>

</main>

@endsection