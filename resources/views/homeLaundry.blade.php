@extends('partials.bodyPages')
@section('sidebar')
    @include('partials.sidebar')
@endsection
@section('container')
    @if (session()->has('submitted'))
        <div class="alert alert-success" role="alert">
            {{ session('submitted') }}
        </div>
    @endif
    @if (session()->has('update'))
        <div class="alert alert-success" role="alert">
            {{ session('update') }}
        </div>
    @endif
    <div class="profile">
        <h2>Profile</h2>
        <div class="row d-flex flex-row">
            <div class="col-sm-6 bagianKiri d-flex justify-content-center align-items-center">
                <div class="bagianDalem">
                    @if ($laundry->picture)
                        <img src="{{ asset('images/' . $laundry->picture) }}" class="card-img-top">
                    @else
                        <img src="{{ asset('images/shopimagedummy.png') }}" class="card-img-top">
                    @endif
                </div>
            </div>
            <div class="col-sm-6 bagianKanan">
                <div class="row my-3">
                    <h4><strong>{{ $laundry->laundrySepatuName }}</strong></h4>
                </div>
                <div class="row1 my-3">
                    <h6><Strong>Description</Strong>:</h6>
                    <h6>{{ $laundry->bio }}</h6>
                </div>
                <div class="row1 my-3">
                    <h6><Strong>Contact</Strong>:</h6>
                    <h6>{{ $laundry->Contact }}</h6>
                </div>
                <div class="row1 my-3">
                    <h6><Strong>Address</Strong>:</h6>
                    <h6>{{ $laundry->Address }}</h6>
                </div>
                {{-- <div class="row1 my-3">
                <h6><Strong>Services</Strong></h6>
                <div class="rowhori my-3">
                    @if ($services->isEmpty())
                        <h6>There are no services.</h6>
                    @else
                        <div class="row my-3">
                          @foreach ($services as $service)
                              <div class="col-sm-4">
                                  <div class="card mt-3" style="width: 10rem;">
                                      <div class="card-body">
                                          <a href="/service/{{ $service->id }}">
                                              <button class="serviceBtn">
                                                  <h6 class="card-title">{{  $service->serviceName }}</h6>
                                              </button>
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          @endforeach
                        </div>
                    @endif
                </div>
            </div>
            <div class="row" style="justify-content: center">
                {{-- <a href="{{ route('laundrysepatu.edit', $laundry->id) }}" class="btn btn-primary">Edit Laundry Store</a> --}}
                <a href="laundrysepatu/{{ $laundry->id }}/edit" class="btn btn-primary">Edit Laundry Store</a>
            </div>
        </div>
    </div>
    <div class="dashboard my-5">
        <h2>Analytics</h2>
        <br>
        <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" data-toggle="tooltip"
                                    data-placement="top" title="Jumlah order yang sedang kamu kerjakan">
                                    Jumlah Order Aktif</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $activeOrder }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1" data-toggle="tooltip"
                                    data-placement="top" title="Jumlah order yang telah kamu selesaikan">
                                    Jumlah Order Selesai</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $doneOrder }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-danger shadow py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1" data-toggle="tooltip"
                                    data-placement="top" title="Jumlah order yang telah kamu batalkan">
                                    Jumlah Cancel</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $cancelledOrder }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1" data-toggle="tooltip"
                                    data-placement="top"
                                    title="Jumlah order yang telah kamu selesaikan dan sedang dikerjakan">
                                    Jumlah Pendapatan</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. {{ $total }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="withdraw">
        <h2>Withdraw Information</h2>
        <br>
        <div class="card shadow mb-4">
            <!-- Card Header - Accordion -->
            <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button"
                aria-expanded="true" aria-controls="collapseCardExample">
                <h6 class="m-0 font-weight-bold text-primary">Withdraw</h6>
            </a>
            <!-- Card Content - Collapse -->
            <div class="collapse show" id="collapseCardExample">
                <div class="card-body">
                    Informasi Penarikan Dana:
                    <ul>
                        <li>Dana akan dikirimkan setiap awal bulan pada tanggal 5</li>
                        <li>Dana yang dikirim berupa total order pada bulan sebelumnya yang telah selesai</li>
                        <li>Pihak laundry harus mengirimkan nomer rekening melalui nomor WhatsApp Nyepatu:
                            <strong>0896-1573-6938</strong>
                        </li>
                        <li>Pihak laundry hanya perlu mengirimkan nomer rekening sekali saja, tidak setiap bulan</li>
                        <li>Apabila laundry belum mengirimkan nomer rekening sampai awal bulan, maka dana akan dikirimkan
                            pada
                            bulan depan apabila telah mengirimkan nomer rekening melalui WhatsApp Nyepatu:
                            <strong>0896-1573-6938</strong>
                        </li>
                        <li>Apabila ada kendala dapat menghubungi <strong>0896-1573-6938</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
