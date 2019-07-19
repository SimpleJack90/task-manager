@extends('layouts.app')

@section('content')

    <h1 class="text-center my-5">{{$task->name}}</h1>

    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card card-default">
                <div class="card-header">
                    Details
                </div>

                <div class="card-body">

                    {{$task->description}}
                </div>

            </div>
            <a href="{{url('/tasks/'.$task->id.'/edit')}}" class="btn btn-info my-2">Edit</a>
            <a href="{{url('/tasks/'.$task->id.'/delete')}}" class="btn btn-danger my-2">Delete</a>
        </div>


    </div>

    @endsection