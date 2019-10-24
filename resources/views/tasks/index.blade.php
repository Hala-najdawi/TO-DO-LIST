@extends('layouts.app')
@section('content')
    <h1>hello from index tasks</h1>
    <table class="table">
        @foreach($tasks as $task)
        <tr>
            <td>{{$task->task}}</td>
            <td><a class="btn btn-primary" href="tasks/{{$task->id}}/edit">Edit</a></td>
            <td>
                <form method="post" action="{{route('tasks.destroy',$task->id)}}">
                    @method("delete")
                    @csrf
                    <button type="submit"  class="btn btn-danger">Delete</button>
            </form>
            </td>
        </tr>
            @endforeach
    </table>
    @endsection
