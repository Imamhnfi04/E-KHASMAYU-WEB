
@extends('admin')
     

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('product.create') }}"> Create New Product</a>

            </div>

        </div>

    </div>

    

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif

     

    <table class="table table-bordered">

        <tr>

            <th>No</th>

            <th>Image</th>

            <th>Name</th>

            <th>Details</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($product as $product)

        <tr>

            <td>{{ ++$i }}</td>

            <td><img src="/image/{{ $product->image }}" width="100px"></td>

            <td>{{ $product->name }}</td>

            <td>{{ $product->detail }}</td>

            <td>

                <form action="{{ route('product.destroy',$product->id) }}" method="POST">

     

                    <a class="btn btn-info" href="{{ route('product.show',$product->id) }}">Show</a>

      

                    <a class="btn btn-primary" href="{{ route('product.edit',$product->id) }}">Edit</a>

     

                    @csrf

                    @method('DELETE')

        

                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

    

    {{-- {!! $product->links() !!} --}}

        

@endsection