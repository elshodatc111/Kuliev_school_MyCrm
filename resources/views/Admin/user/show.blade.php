@extends('Admin.layout.home')
@section('title','Talaba')
@section('content')

<main id="main" class="main">

<div class="pagetitle">
    <h1>Talaba</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('Admin') }}">Bosh sahifa</a></li>
            <li class="breadcrumb-item"><a href="{{ route('Student') }}">Talabalar</a></li>
            <li class="breadcrumb-item active">Talaba</li>
        </ol>
    </nav>
</div>
@if (Session::has('success'))
    <div class="alert alert-success">{{Session::get('success') }}</div>
@elseif (Session::has('error'))
    <div class="alert alert-danger">{{Session::get('error') }}</div>
@endif

    <section class="section dashboard">
        <div class="card">
            <div class="card-body pt-3">
                <div class="tab-content pt-2" id="myTabjustifiedContent">
                    <div class="tab-pane fade show active" id="home-justified" role="tabpanel" aria-labelledby="home-tab">
                        <h5 class="card-title w-100 text-center py-1">{{ $Users['name'] }}</h5>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <b>Telefon Raqam:</b>
                                        <span class="badge text-dark">{{ $Users['phone'] }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <b>Telefon Raqam:</b>
                                        <span class="badge text-dark">{{ $Users['phone2'] }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <b>Yashash Manzil:</b>
                                        <span class="badge text-dark">{{ $Users['addres'] }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <b>Tug'ilgan Kuni:</b>
                                        <span class="badge text-dark">{{ $Users['tkun'] }}</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <b>Talaba Balansi:</b>
                                        @if($Users['balans']>0)
                                        <span class="badge bg-success">{{ $Users['balans'] }}</span>
                                        @elseif($Users['balans'] < 0)
                                        <span class="badge bg-danger">{{ $Users['balans'] }}</span>
                                        @else
                                        <span class="badge bg-primary">0</span>
                                        @endif
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <b>Talaba Haqida:</b>
                                        <span class="badge text-dark">{{ $Users['about'] }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <b>Biz Haqimizda:</b>
                                        <span class="badge text-dark">{{ $Users['smm'] }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <b>Login:</b>
                                        <span class="badge text-dark">{{ $Users['email'] }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                

    </section>
    <div class="card">
        <div class="card-body pt-3">
            <div class="tab-content pt-2" id="myTabjustifiedContent">
                <div class="tab-pane fade show active" id="home-justified" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <button class="btn my-1 btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#tulovPlus"><i class="bi bi-cash-coin"></i> To'lov qilish</button>
                        </div>
                        <div class="col-lg-3 col-6">
                            <button class="btn my-1 btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#sendMessege"><i class="bi bi-messenger"></i> SMS yuborish</button>
                        </div>
                        <div class="col-lg-3 col-6">
                            <button class="btn my-1 btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#eslatmaQoldirish"><i class="bi bi-messenger"></i> Eslatma qoldirish</button>
                        </div>
                        <div class="col-lg-3 col-6">
                            <button class="btn my-1 btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#guruhPlusUser"><i class="bi bi-cash-coin"></i> Guruhga qo'shish</button>
                        </div>
                        <div class="col-lg-3 col-6">
                            <button class="btn my-1 btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#userEdit"><i class="bi bi-pencil-square"></i> Taxrirlash</button>
                        </div>
                        <div class="col-lg-3 col-6">
                            <button class="btn my-1 btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#resetPassword"><i class="bi bi-lock"></i> Parolni yangilash</button>
                        </div>
                        @if(Auth::user()->type!='Operator')
                        <div class="col-lg-3 col-6">
                            <button class="btn my-1 btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#parRepetUsr"><i class="bi bi-cash-stack"></i> To'lovni qaytarish</button>
                        </div>
                        <div class="col-lg-3 col-6">
                            <button class="btn my-1 btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#chegirmaPlus"><i class="bi bi-coin"></i> Chegirma kiritish</button>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
                
    <!-- To'lov qilish -->
    <div class="modal fade" id="tulovPlus" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">To'lov qilish</h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <button type="button" class="btn btn-secondary w-100" data-bs-dismiss="modal">Bekor qilish</button>
                        </div>
                        <div class="col-6">
                            <button type="button" class="btn btn-primary w-100">Yangilash</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- To'lov qilish -->
    <div class="modal fade" id="sendMessege" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">SMS yuborish</h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <button type="button" class="btn btn-secondary w-100" data-bs-dismiss="modal">Bekor qilish</button>
                        </div>
                        <div class="col-6">
                            <button type="button" class="btn btn-primary w-100">Yangilash</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Eslatma qilish -->
    <div class="modal fade" id="eslatmaQoldirish" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Eslatma qoldirish</h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <button type="button" class="btn btn-secondary w-100" data-bs-dismiss="modal">Bekor qilish</button>
                        </div>
                        <div class="col-6">
                            <button type="button" class="btn btn-primary w-100">Yangilash</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Guruhga qo'shish -->
    <div class="modal fade" id="guruhPlusUser" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title w-100 text-center">Guruhga qo'shish</h5>
                </div>
                <div class="modal-body">
                    <form action="{{ route('AdminUserGuruhPlus') }}" method="post">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ $Users['id'] }}">
                        <label for="" class="mb-1">Guruhni tanlang</label>
                        <select name="guruh_id" class="form-select" required>
                            <option value="guruh_id">Tanlang</option>
                            @foreach($Guruhs as $item)
                            <option value="{{ $item['guruh_id'] }}">{{ $item['guruh_name']." (".$item['techer']." )" }}</option>
                            @endforeach
                        </select>
                        <label for="commit_start" class="mb-1 mt-3">Guruhga qo'shish uchun izoh</label>
                        <input type="text" name="commit_start" class="form-control mb-3" required>
                        <div class="row">
                            <div class="col-6">
                                <button type="button" class="btn btn-secondary w-100" data-bs-dismiss="modal">Bekor qilish</button>
                            </div>
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary w-100">Saqlash</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- User Edet -->
    <div class="modal fade" id="userEdit" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Talaba edit</h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <button type="button" class="btn btn-secondary w-100" data-bs-dismiss="modal">Bekor qilish</button>
                        </div>
                        <div class="col-6">
                            <button type="button" class="btn btn-primary w-100">Yangilash</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Parolni yangilash -->
    <div class="modal fade" id="resetPassword" tabindex="-1">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title w-100 text-center">Paroni yangilash</h5>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-6">
                                <button type="button" class="btn btn-secondary w-100" data-bs-dismiss="modal">Bekor qilish</button>
                            </div>
                            <div class="col-6">
                                <button type="button" class="btn btn-primary w-100">Yangilash</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- To'lovni qaytarish -->
    <div class="modal fade" id="parRepetUsr" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">To'lovni qaytarish</h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <button type="button" class="btn btn-secondary w-100" data-bs-dismiss="modal">Bekor qilish</button>
                        </div>
                        <div class="col-6">
                            <button type="button" class="btn btn-primary w-100">Yangilash</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Chegirma kiritish -->
    <div class="modal fade" id="chegirmaPlus" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Chegirma kiritish</h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <button type="button" class="btn btn-secondary w-100" data-bs-dismiss="modal">Bekor qilish</button>
                        </div>
                        <div class="col-6">
                            <button type="button" class="btn btn-primary w-100">Yangilash</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="card">
        <div class="card-body pt-3">
            <ul class="nav nav-tabs d-flex row" id="myTabjustified" role="tablist">
                <li class="nav-item flex-fill col-lg-3 col-6" role="presentation">
                    <button class="nav-link w-100 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#Talaba_Tarixi" 
                    type="button" role="tab" aria-controls="history" aria-selected="true"><i class="bi bi-clock-history"></i> Talaba tarixi</button>
                </li>
                <li class="nav-item flex-fill col-lg-3 col-6" role="presentation">
                    <button class="nav-link w-100" id="profile-tab" data-bs-toggle="tab" data-bs-target="#Talaba_guruhlari" 
                    type="button" role="tab" aria-controls="guruhlar" aria-selected="false"><i class="bi bi-people"></i> Talaba guruhlari</button>
                </li>
                <li class="nav-item flex-fill col-lg-3 col-6" role="presentation">
                    <button class="nav-link w-100" id="contact-tab" data-bs-toggle="tab" data-bs-target="#Talaba_eslatma" 
                    type="button" role="tab" aria-controls="eslatma" aria-selected="false"><i class="bi bi-messenger"></i> Eslatma</button>
                </li>
                <li class="nav-item flex-fill col-lg-3 col-6" role="presentation">
                    <button class="nav-link w-100" id="contact-tab" data-bs-toggle="tab" data-bs-target="#Talaba_Tulovlari" 
                    type="button" role="tab" aria-controls="tulovlar" aria-selected="false"><i class="bi bi-cash-stack"></i> Talaba to'lovlari</button>
                </li>
            </ul>
            <div class="tab-content pt-2" id="myTabjustifiedContent">
                <hr class="p-0 m-0">
                <div class="tab-pane fade show active" id="Talaba_Tarixi" role="tabpanel" aria-labelledby="history-tab">
                    <h5 class="card-title w-100 pt-1 p-0 text-center">Talaba tarixi</h5>
                    <div class="table-responsive" style="font-size:12px;">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Status</th>
                                    <th>Guruh</th>
                                    <th>Summa</th>
                                    <th>To'lov turi</th>
                                    <th>Hisoblash</th>
                                    <th>Balans</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($userHistory as $item)
                                    @if($item->status=='Markazga tashrif')
                                    <tr>
                                        <td class="text-center">{{ $loop->index+1 }}</td>
                                        <td>{{ $item['status'] }}</td>
                                        <td>_</td>
                                        <td>_</td>
                                        <td>_</td>
                                        <td>_</td>
                                        <td>{{ $item['balans'] }}</td>
                                    </tr> 
                                    @else
                                    <tr>
                                        <td class="text-center">{{ $loop->index+1 }}</td>
                                        <td>{{ $item['status'] }}</td>
                                        <td>{{ $item['type'] }}</td>
                                        <td>{{ $item['summa'] }}</td>
                                        <td>_</td>
                                        <td>{{ $item['xisoblash'] }}</td>
                                        <td>{{ $item['balans'] }}</td>
                                    </tr> 
                                    @endif
                                @empty

                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade show" id="Talaba_guruhlari" role="tabpanel" aria-labelledby="guruhlar-tab">
                    <h5 class="card-title w-100 p-0 pt-1 text-center">Talaba Guruhlari</h5>
                    <div class="table-responsive" style="font-size:12px;">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>FIO</th>
                                    <th>Manzil</th>
                                    <th>Telefon raqam</th>
                                    <th>Guruhlar</th>
                                    <th>Ro'yhatdan o'tdi</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>Bo'sh</td>
                                    <td>Bo'sh</td>
                                    <td>Bo'sh</td>
                                    <td>Bo'sh</td>
                                    <td>Bo'sh</td>
                                    <td>Bo'sh</td>
                                </tr> 
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade show" id="Talaba_eslatma" role="tabpanel" aria-labelledby="eslatma-tab">
                    <h5 class="card-title w-100 p-0 pt-1 text-center">Talaba haqida eslatma</h5>
                    <div class="table-responsive" style="font-size:12px;">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>FIO</th>
                                    <th>Manzil</th>
                                    <th>Telefon raqam</th>
                                    <th>Guruhlar</th>
                                    <th>Ro'yhatdan o'tdi</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>Bo'sh</td>
                                    <td>Bo'sh</td>
                                    <td>Bo'sh</td>
                                    <td>Bo'sh</td>
                                    <td>Bo'sh</td>
                                    <td>Bo'sh</td>
                                </tr> 
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade show" id="Talaba_Tulovlari" role="tabpanel" aria-labelledby="tulovlar-tab">
                    <h5 class="card-title w-100 p-0 pt-1 text-center">Talaba to'lovlari</h5>
                    <div class="table-responsive" style="font-size:12px;">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>FIO</th>
                                    <th>Manzil</th>
                                    <th>Telefon raqam</th>
                                    <th>Guruhlar</th>
                                    <th>Ro'yhatdan o'tdi</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>Bo'sh</td>
                                    <td>Bo'sh</td>
                                    <td>Bo'sh</td>
                                    <td>Bo'sh</td>
                                    <td>Bo'sh</td>
                                    <td>Bo'sh</td>
                                </tr> 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

@endsection