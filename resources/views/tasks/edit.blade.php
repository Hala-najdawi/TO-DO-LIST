@extends('layouts.app')
@section('content')
    <div class="container">
        <form method="POST" action="{{route('tasks.update',$task->id)}}">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="task">Task</label>
                <input type="text" name="task" class="form-control" id="task" aria-describedby="taskName"
                       placeholder="Add your Task" value="{{$task->task}}">
            </div>
            <button type="submit" class="btn btn-primary">Add Task</button>
        </form>
    </div>
@endsection
