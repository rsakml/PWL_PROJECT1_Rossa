@extends('admin.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-center mt-2">
                <Center>DATA PRODUCT</Center>
            </div>
<br>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('product.create') }}"> Input Product</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-striped table-hover">
        <tr>
            <th>ID Product</th>
            <th>Foto</th>
            <th>Nama Product</th>
            <th>Merk</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
            <th>Stok</th>
            <th width="290px">Action</th>
        </tr>
        @foreach ($product as $produk)
        <tr>

            <td>{{ $produk->id_product }}</td>
            <td><img width="100px" height="100px" src="{{asset('storage/'.$produk->foto)}}"></td>       
            <td>{{ $produk->nama_product }}</td>
            <td>{{ $produk->merk }}</td>
            <td>{{ $produk->harga_beli}}</td>
            <td>{{ $produk->harga_jual }}</td>          
            <td>{{ $produk->stok }}</td>
            <td>
            <form action="{{ route('product.destroy',$produk->id_product ) }}" method="POST">
                <a class="btn btn-info" href="{{ route('product.show',$produk->id_product ) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('product.edit',$produk->id_product ) }}">Edit</a>
                {{-- <a class="btn btn-warning" href="{{route('nilai',$produk->nim) }}"> Nilai</a> --}}
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"
                onclick="return confirm('Anda yakin akan menghapus data ?');">Delete</button>
            </form>
            </td>
        </tr>
    @endforeach
    </table>
        {{ $product->links() }}
        
@endsection



