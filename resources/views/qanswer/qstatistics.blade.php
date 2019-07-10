@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">問卷統計</div>
                <div class="panel-body">
                	<p>問卷總數 : {{$qTotal}}</p>
                	@foreach($qTitle as $title)
                	@if($title->no != 3 and $title->no != 6 and $title->no != 7)
                	<div class=="container">
	                	<div class="title">
	                		<p> {{$title->no}}.{{ $title->title }}</p>
	                	</div>
            			<div class="answer">
					      <p>是：{{$answerTotal["q".$title->no."y"]}} / {{ ($answerTotal["q".$title->no."y"]/$qTotal*100)."%"}}</p>
					      <p>否：{{$answerTotal["q".$title->no."n"]}} / {{ ($answerTotal["q".$title->no."n"]/$qTotal*100)."%"}}</p>
					    </div>	
                	</div>
                	@endif
					@endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
