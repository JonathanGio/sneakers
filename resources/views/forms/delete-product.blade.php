{{ Form::open(['route' => ['products.destroy', $element->id], 'method' => 'DELETE']) }} 
	
	<button class="btn btn-danger btn-sm "><i class="material-icons">clear</i></button>    
{{ Form::close() }}	