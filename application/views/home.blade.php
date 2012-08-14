@layout('templates.main')
@section('content')
	
 	@if (Session::has('success_message'))
 		<div class="span8">
        {{ Alert::success("Success! Album deleted!") }}
    	</div>
    @endif


    @foreach ($albums -> results as $album)
        <div class="span8">
            <h1>{{ $album->album_name }}</h1>
            <p>{{ $album->album_body }}</p>
            <p>{{ $album->album_songs }}</p>
            <p>{{ $album->album_price }}</p>
            <p>{{ $album->album_quantity }}</p>
            <p>{{ $album->album_tags }}</p>
            <span class="badge badge-success">Post&eacute; {{$album->updated_at}}</span>
         
			@if ( !Auth::guest() )
              	{{ Form::open('album/'.$album->id, 'DELETE')}}
	        	<p>{{ Form::submit('Delete', array('class' => 'btn-small')) }}</p>
	    		{{ Form::close() }}
    		@endif
    		<hr />
		</div>
        
    @endforeach
@endsection

@section('pagination')
    	<div class="row">
    		<div class="span8">
	    		{{ $albums -> links(); }}
	   		 </div>
		</div>
@endsection