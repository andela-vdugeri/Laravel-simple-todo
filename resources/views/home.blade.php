@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Pending Task(s)</div>
                <div class="panel-body">
                    @if($pending->count() > 0)
                    <ul class="list-group">
                        @foreach($pending as $task)
                            <li class="list-group-item">
                                {{ $task->body }}
                                <a href="{{ url('/tasks/' . $task->id . '/complete') }}"><span class="pull-right pointer success">&#10003;</span></a>
                                <a href="{{ url('/tasks/' . $task->id . '/delete') }}"><span class="pull-right pointer pad-right danger">&#10007;</span></a>
                            </li>
                        @endforeach
                    </ul>
                    @else
                        <h4>No Tasks yet</h4>
                    @endif
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Completed Task(s)
                </div>
                <div class="panel-body">
                    @if($completed->count() > 0)
                        <ul class="list-group">
                            @foreach($completed as $task)
                                <li class="list-group-item">
                                    {{ $task->body }}
                                    <a href="{{ url('/tasks/' .$task->id . '/undo') }}"><span class="pull-right pointer success">&#8635;</span></a>
                                    <a href="{{ url('/tasks/' .$task->id . '/delete') }}"><span class="pull-right pointer danger pad-right">&#10007;</span></a>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <h4>No completed tasks yet</h4>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
