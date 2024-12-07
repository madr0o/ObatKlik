@extends('welcome')
@section('content')
    <div class="container">
        <div class="col">
            <div>
                <h3><b>Keranjang</b></h3>
            </div>
            <div class="container p-0">
                <div class="row gx-2">
                    <div class="col pt-0">
                        <div class="card mb-2" style="width: 50rem;">
                            <div class="container py-2 px-3">
                                <div class="row">
                                    <div class="col d-flex align-items-center" style="width:104px;" id="img-item-cart">
                                        <img class="border border-black rounded-4 border-opacity-10" src="{{asset('images/item.svg')}}" alt="" style="width: 83px;height:83px;padding:4px;">
                                    </div>
                                    <div class="col">
                                        <p><b>Blackmores Vitamin D3 1000 IU / Bio D3 1000 IU 60 Kapsul</b></p>
                                        <p>Per Botol</p>
                                    </div>
                                    <div class="col d-flex flex-column mb-2">
                                        <div class="row mb-auto">
                                            <p class="text-end"><b>Rp 175.800</b></p>
                                        </div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col d-flex justify-content-end">
                                                    <img src="{{asset('images/icon/trash.svg')}}" alt="item-img">
                                                </div>
                                                <div class="card col justify-content-center" style="width: 20px;">
                                                    <div class="row d-flex  align-items-center">
                                                        <a class="col" href="#" style="text-decoration: none; color:black;"><b>-</b></a>
                                                        <p class="col m-0">1</p>
                                                        <a class="col" href="#" style="text-decoration: none; color:black;"><b>+</b></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title"><b>Ringkasan belanja</b></h5>
                                <div class="row">
                                    <p class="col card-text">Total</p>
                                    <p class="col card-text d-flex justify-content-end"><b>Rp 255.000</b></p>
                                </div>
                                <a href="#" class="btn btn-primary d-flex justify-content-center">Beli</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection