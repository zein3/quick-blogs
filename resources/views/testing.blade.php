@extends('layouts.app')

@section('body')
    <form action="/testing/" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image" accept="image/*">
        <button type="submit">submit</button>
    </form>
@endsection
