@extends('layouts.app')

@section('content')

    <h1 class="text-center my-5">Tasks Page:</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="container">

                <div class="card card-default">

                    <div class="card-header">
                        Tasks
                    </div>
                    <div class="card-body">

                        <ul class="list-group">
                            @foreach($tasks as $task)

                                <li class="list-group-item">
                                    {{$task->name}}

                                    @if(!$task->completed)
                                        <a href="{{url('/tasks/'.$task->id.'/complete')}}" style="color:white;" class="btn btn-warning btn-sm mx-1 float-right">Complete</a>

                                    @endif
                                    <a href="{{url('/tasks/'.$task->id)}}" class="btn btn-primary btn-sm float-right">View</a>

                                </li>


                            @endforeach
                        </ul>

                    </div>
                </div>

            </div>

        </div>
    </div>


    @endsection