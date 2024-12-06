@extends('welcome')
@section('content')
    <div class="container" style="background-color: wheat;">
        <div class="col">
            <div class="justify-content-start border border-black">
                <h3>Keranjang</h3>
            </div>
            <div class="row">
                <div class="col border border-black py-2" id="card-item-cart" width="639px" height="126px">
                    <div class="row" width="579px" height="84px">
                        <div class="col border border-black align-items-center" style="width: 83px;height:83px;">
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
                <div class="col border border-black" id="card-transaction">
                    <div class="row">
                        <div class="col border border-black py-2" id="card-item-cart"height="126px">
                            <div class="row"height="84px">
                                <p><b>Ringkasan belanja</b></p>
                                <divr class="row d-flex justify-content-between">
                                    <p class="col d-flex">Total</p>
                                    <p class="col d-flex justify-content-end"><b>Rp 255.000</b></p>
                                </div>
                                <button type="button" class="btn btn-outline-primary ">Beli</button>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection