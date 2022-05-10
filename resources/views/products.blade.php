@extends('layouts.app')

@section('content')
    @foreach ($products as $product)
        <p>This is product {{ $product->id }} {{$product->name}}</p>
    @endforeach
    <form id='form' method='GET' action="{{route('products.create')}}">
        
        <h3>Add Product</h3>
        <p id='form-notification' ></p>
        <label>Product Name</label><input class='input-product-name' name='name' type="text"><br>
        <input name='submit' type="submit">
    </form>
    <script>
        $(document).ready(function(){
            $("#form").submit(function(e){
                
                let name = $("#form .input-product-name").val();

                if(name == ''){
                    e.preventDefault();
                    $('#form-notification').html('Please Input Name.');
                }

            });
        });
    </script>
@endsection
