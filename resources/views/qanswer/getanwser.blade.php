@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">問卷資料</div>
                <div class="panel-body">
                	<p>問卷 : {{$qtitle->no}}. {{$qtitle->title}}</p>
                	@foreach($answer as $key=>$a)
                	<div class=="container">
            			<div class="answer">
					      <p>{{$key+1}} : {{$a->$index}}</p>
					    </div>	
                	</div>
					@endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
