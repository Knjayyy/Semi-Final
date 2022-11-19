@extends('base')

@section('content')

    <h1 class='h1'>Are you sure you want to delele this item?</h1>

    <div class="row">
        <div class="col md-5 ">
            {!! Form::model($items, ['url'=>'/edit-item/' . $items->id]) !!}
                <div class="infos">
                    <div class="mb-3">
                        {!! Form::label("name", "Item Name") !!}
                        {!! Form::text("name", null, ['class'=>'form-control']) !!}
                    </div>

                    <div class="mb-3">
                        {!! Form::label("description", "Item Description") !!}
                        {!! Form::text("description", null, ['class'=>'form-control']) !!}
                    </div>

                    <div class="mb-3">
                        {!! Form::label("values", "Item Value") !!}
                        {!! Form::number("values", null, ['class'=>'form-control']) !!}
                    </div>

                    <div class="mb-3">
                        {!! Form::label("status", "Item Status") !!}
                        {!! Form::text("status", null, ['class'=>'form-control']) !!}
                    </div>
                </div>
            </div>


            {!! Form::close() !!}

            <form action="{{url('/confirmdelete-item/'.$items->id)}}" method="post">
                {{ method_field('DELETE')}}
                {{ csrf_field()}}
                <div class="form-group float-end">
                    <button href="" class="btn btn-danger m-1" type="submit"> <i class="fa-solid fa-box-archive"></i> &nbsp; Delete</button>
                </div>
            </form>
        </div>
    </div>

    <style>
        .h1{
            font-family: cursive;
            font-weight: bolder;
            color: red;
            text-align: center;
        }
        .row {
            display:flex;
            font-family: "Times New Roman", Times, serif;
        }
    </style>
@endsection
