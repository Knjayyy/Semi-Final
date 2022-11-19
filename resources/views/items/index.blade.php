@extends('base')

@section('content')

        <h1 class="invent">Item Inventory</h1>
        <style>
            .invent {
                text-align: center;
                font-family: cursive;
            }
        </style>
        <table class="table table-bordered table-hover table-sm">
            <tr class="att">
            <th>Item Identification <i class="fa-regular fa-lightbulb"></i></th>
            <th>Item Name <i class="fa-solid fa-cart-shopping"></i></th>
            <th>Item Description <i class="fa-solid fa-audio-description"></i></th>
            <th>Value <i class="fa-regular fa-heart"></i></th>
            <th>Status <i class="fa-solid fa-signal"></i>   </th>
            <th class="text-center">Change Inventory <i class="fa-solid fa-wrench"></i></th>
        </tr>
        <div class="div">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
             Add Item <i class="fa-solid fa-plus"></i>
        </button>
    </div>
    <tbody>

        <style>
            .att {
                font-family: cursive;
                font-weight: bolder;
                color: blue;
                background-color: cyan;
            }
            .table{
                font-family: "Times New Roman", Times, serif;
            }
            .div{
                font-family: "Times New Roman", Times, serif;
                float: right;
                margin-bottom: 10px;
                margin-right: 44px;
            }
        </style>

        @foreach($items as  $item)
            <tr class='table'>
                <td class='text-center'>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->description}}</td>
                <td>{{$item->values}}</td>
                <td>{{$item->status}}</td>
                <td class="text-center">
                    <a href="{{url('/edit-item/' . $item->id)}}" class="btn btn-success">
                        <i class="fa-regular fa-pen-to-square"></i>
                    </a>
                    <a href="{{url('/delete-item/'. $item->id)}}" class="btn btn-danger">
                        <i class="fa-solid fa-trash"></i>
                    </a>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>

<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Add Item on the List</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="d-grid gap-4 col-8 mx-auto">
                <div class="row">
                    <div class="col-md-12">
                        {!! Form::open(['url'=>'/items', 'method'=>'post']) !!}

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
                        <div class="float-end">
                            <button class="btn btn-primary" type="submit">Save   <i class="fa-regular fa-bookmark"></i></button>
                        </div>


                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>
<style>
    .row{
        font-family: "Times New Roman", Times, serif;
    }
    .modal-title{
        font-family: "Times New Roman", Times, serif;
        text-align: center;s
    }
</style>
@endsection
