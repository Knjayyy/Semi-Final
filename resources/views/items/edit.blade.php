@extends('base')

@section('content')
<h1 class="h1">Edit</h1>

<div class="row1">
    <div class="row2">
        {!! Form::model($items, ['url'=>'/edit-item/' . $items->id, 'method'=>'put']) !!}

        <div class="mb-3">
            {!! Form::label("name", "Item Name") !!}
            {!! Form::text("name", null, ['class'=>'form-control']) !!}
        </div>

        <div class="mb-3">
            {!! Form::label("description", "Item Description") !!}
            {!! Form::text("description", null, ['class'=>'form-control']) !!}
        </div>

        <div class="mb-3">
            {!! Form::label("values", "Values:") !!}
            {!! Form::number("values", null, ['class'=>'form-control']) !!}
        </div>

        <div class="mb-3">
            {!! Form::label("status", "Status:") !!}
            {!! Form::text("status", null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group float-end">
            <button class="btn btn-success" type="submit">Save   <i class="fa-regular fa-bookmark"></i></button>
        </div>

        {!! Form::close() !!}
    </div>
</div>

<style>
    .h1{
        font-family: cursive;
        font-weight: bolder;
        color: green;
        text-align: center;
    }
    .row1 {
        display: block;
        font-family: "Times New Roman", Times, serif;
    }
    .row2 {
        display: block;
    }
</style>
@endsection
