@extends('layouts.app')

@section('title')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Product</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary">Add Product</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary" >
            <tr>
                <th style="text-align: center">#</th>
                <th style="text-align: center">Product Code</th>
                <th style="text-align: center">Product Name</th>
                <th style="text-align: center">Description</th>
                <th style="text-align: center">Price</th>
                <th style="text-align: center">Action</th>
            </tr>
        </thead>
        <tbody>
            @if($product->count() > 0)
                @foreach($product as $rs)
                    <tr>
                        <td class="align-middle" style="text-align: center">{{ $loop->iteration }}</td>
                        <td class="align-middle" style="text-align: center">{{ $rs->product_code }}</td>
                        <td class="align-middle" style="text-align: center">{{ $rs->title }}</td>
                        <td class="align-middle" style="text-align: center">{{ $rs->description }}</td>
                        <td class="align-middle" style="text-align: center">{{ $rs->price }}</td>
                        <td class="align-middle" style="text-align: center">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('products.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('products.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('products.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Product not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
