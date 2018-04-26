@extends('layouts.admin-app')

@section('content')
            <div class="panel panel-default">
                <div class="panel-heading">Admin Dashboard</div>

                <div class="panel-body">
                    <!-- @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


                    @component('components.who')
                                    @endcomponent -->
                    You are logged in as Admin!
                </div>
            </div>

@endsection
