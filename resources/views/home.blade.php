@extends('layouts.app')

@section('content')

    <div class="row">
       <div class="col-lg-6 col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
            
                <div class="panel-body">

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>

@endsection
