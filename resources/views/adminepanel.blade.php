@extends('layouts.app')

@section('content')

    <div class="butt" style="margin-left: 500px">

        <a href="{{ route('products.index') }}" class="btn btn-primary">product</a>
        <a href="{{ route('categories.index') }}" class="btn btn-primary">Category</a>

    </div>
@endsection
