@extends('layouts.app')
@section('content')
    <div class="container">
        <form method="POST" action="{{route('tasks.store')}}">
          @csrf
            <div class="form-group">
                <label for="task">Task</label>
                <input type="text" name="task" class="form-control" id="task" aria-describedby="taskName"
                       placeholder="Add your Task">
            </div>
            <button type="submit" class="btn btn-primary">Add Task</button>
        </form>
    </div>
@endsection
