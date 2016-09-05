<!DOCTYPE html>
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-lg-6 col-lg-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    New Task
                </div>
                <div class="panel-body">
                    <form method="post" action="{{ url('/tasks') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="task">Task</label>
                            <input type="text" class="form-control" name="task" id="task">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Add">
                            <a href="{{ url('/home') }}" class="btn btn-default">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
