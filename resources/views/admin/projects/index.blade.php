@extends('layouts.app')

@section('content')
<section>
<div class="container py-4">

<div class="row">
    @foreach($projects as $project)
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h2>{{$project['name']}}</h2>
            </div>
            <div class="card-body">
                <ul>
                    <li><b>date: </b>{{$project['date']}}</li>
                    <li><b>description: </b>{{$project['description']}}</li>
                    <li><b>image: </b>{{$project['image']}}</li>
                </ul>
            </div>
            <!-- <div class="card-footer">
            </div> -->
        </div>
    </div>
    
    @endforeach
</div>

</div>
</section>@endsection