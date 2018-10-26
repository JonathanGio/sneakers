@extends('layouts.welcome')

@section('content')

<table class="table">
	<thead>
		<tr>
			<th> </th>
			<th> </th>
			<th>producto</th>
			<th>precio unitario</th>
			<th>cantidad</th>
			<th>precio subtotal </th>

		</tr>
	</thead>
	<tbody>
		<tr>
			<td><i class="material-icons text-danger">close</i></td>
			<td> </td>
			<td>Promoción Capitan Morgan</td>
			<td>Promoción Tequila Azul	</td>
			<td>$599	</td>
			<td>1	</td>
			<td>$599	</td>

		</tr>
		<td colspan="5">subtotal</td>	
		<td >$949</td>	
		</tr>
		<tr>
			<td colspan="5">total</td>
			<td>$949</td>
		</tr>

		
	</tbody>
</table>

@endsection
