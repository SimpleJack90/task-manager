@extends('layouts.app')


@section('content')

   <h1 class="text-center my-5"> Create Task </h1>

    <div class="row justify-content-center" >


        <div class="col-md-8">
            <div class="card">
           <div class="card-header">
            Create new task:
           </div>
            <div class="card-body">

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="list-group">

                            @foreach($errors->all() as $error)

                            <li class="list-group-item">
                                {{$error}}
                            </li>

                            @endforeach


                        </ul>
                    </div>
                    @endif
                <form action="{{url('/store-task')}}" method="POST">

                    @csrf
                    <div class="form-group">

                        <input placeholder="Name" type="text" class="form-control" name="name">

                    </div>

                    <div class="form-group">
                        <textarea placeholder="Description..."
                                  name="description"
                                  class="form-control" id=""
                                  cols="5" rows="5"></textarea>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-success">Create Task</button>
                    </div>


                </form>


            </div>
        </div>
        </div>

    </div>


    @endsection