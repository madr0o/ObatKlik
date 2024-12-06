@extends('welcome')
@section('content')
    <div class="container">
        {{-- <div class="col">
            <div class="justify-content-start">
                <h3>Keranjang</h3>
            </div>
            <div class="row">
                <div class="col border border-black ps-2 pe-5" id="card-item-cart" width="639px" height="fit-content">
                    <div class="row" width="579px">
                        <div class="col" style="width: 83px;">
                            <img class="p-0" src="{{asset('images/item.svg')}}" alt="item-img" style="width: 83px;height:83px;">
                        </div>
                        <div class="col" id="desc-card" style="">
                            <p class="m-0"><b>Neurobion 10 Tablet</b></p>
                            <p>Per Botol</p>
                        </div>
                        <div class="col d-flex flex-column align-items-end" id="prize-&-qty" style="">
                            <h6><b>Rp 29.900</b></h6>
                            <div class="d-flex" style="width: 99px;">
                                <img class="col p-0" src="{{asset('images/icon/trash.svg')}}" alt="trasch-icn" height="21px">
                                <div class="col p-0 border border-black" id="btn-qty" style="height: fit-content" width="70px">
                                    test
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col d-flex" id="card-transaction">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">Ringkasan belanja</h5>
                          <p class="card-text"><b>Total</b><br> Rp 255.000</p>
                          <a href="#" class="btn btn-primary">Beli</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="col">
            <div>
                <h3><b>Keranjang</b></h3>
            </div>
            <div class="container p-0">
                <div class="row gx-2">
                    <div class="col pt-0">
                        <div class="card" style="width: 50rem;">
                            <h1>test</h1>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                              <h5 class="card-title"><b>Ringkasan belanja</b></h5>
                              <p class="card-text"><b>Total</b><br> Rp 255.000</p>
                              <a href="#" class="btn btn-primary">Beli</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection