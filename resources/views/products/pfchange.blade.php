@extends('products.layout')

@section('content')

<div class="row ">
   <div class="col-lg-12 margin-tb" >
    <div class="pull-left">
        <h2>Add New Profile Picture</h2>
        
    </div>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('products.index')}}" >Back</a>
    </div>
    
   </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong>There problem with your input! <br> <br>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    
</div>
@endif

    <form action="{{ route('products.pfchange') }}" method='POST' enctype="multipart/form-data">
        @csrf

        <div class="row">
           
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        
                        <input class="form-control" type="file" style="height:150px" name="pfimage" id="image" placeholder="Image">
                        
                    </div>
                    
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

        </div>
    </form>

@endsection