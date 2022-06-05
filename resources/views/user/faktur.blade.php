@extends('layouts.app')

@section('judul', 'Faktur')

@section('style')

@endsection

@section('content')

{{-- Manage Banner --}}
<div class="container bg-light rounded-3 pt-2 pb-2 mt-4">
    <div class="col-md-12 bg-light table-wrapper">
        <h3 style="font-weight: bold"><i class="uil uil-shopping-cart"></i>Faktur</h3>
        <hr>

        {{-- Manage Book --}}
        <table class="table">
            <thead>
                <tr align="center">
                    <th>#</th>
                    <th>Kategori</th>
                    <th>Barang</th>
                    <th>Quantity</th>
                    <th>Invoice</th>
                    <th>Alamat</th>
                    <th>Kode Pos</th>
                    <th>Sub Total</th>
                    <th>Total Harga</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor = 1;
                ?>
                @foreach ($transactions as $transaction)
                <tr align="center">
                    <th>{{$nomor++}}</th>
                    <td>{{$transaction->barang->kategori->name}}</td>
                    <td>{{$transaction->barang->name}}</td>
                    <td>{{$transaction->quantity}}</td>
                    <td>{{$transaction->invoice}}</td>
                    <td>{{$transaction->alamat}}</td>
                    <td>{{$transaction->pos}}</td>
                    <td>Rp.{{$transaction->barang->harga}}</td>
                    <td>Rp.{{$transaction->barang->harga * $transaction->quantity}}</td>
                    <td>{{$transaction->status}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<br><br>
@endsection
