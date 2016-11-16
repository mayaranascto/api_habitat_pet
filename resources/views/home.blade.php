@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <a href="/users"><button type="button" name="button">Usuários</button></a>
                    <a href="/plantas"><button type="button" name="button">Plantas</button></a>
                    <a href="/peixes"><button type="button" name="button">Peixes</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
