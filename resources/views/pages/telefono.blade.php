@extends('template')
@section ('title', 'telefonos')
@section('class','telefonos')

@section ('content')
<div class="container">
	<table class="table table-hover">
		<thead>
			<tr class="active">
				<th style="text-align:center">DESCRIPCIÓN</th>
				<th style="text-align:center">FIJO</th>
				<th style="text-align:center">CELULAR</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Cuerpo de Bomberos Voluntarios</td>
				<td style="text-align: center">116<br>464413<br>462333<br></td>
				<td style="text-align: center">953634789</td>
			</tr>
			<tr>
				<td>Electro sur</td>
				<td style="text-align: center">462464</td>
				<td style="text-align: center">953634851</td>
			</tr>
			<tr>
				<td>Municipalidad Provincial Mariscal Nieto</td>
				<td style="text-align: center">462494</td>
				<td style="text-align: center">953640664</td>
			</tr>
			<tr>
				<td>Policía</td>
				<td style="text-align: center">105<br>461271</td>
				<td style="text-align: center">-</td>
			</tr>
			<tr>
				<td>Secretario Técnico del CPDC</td>
				<td style="text-align: center">-</td>
				<td style="text-align: center">953666527</td>
			</tr>
			<tr>
				<td>Dirección Regional de defensa Civil</td>
				<td style="text-align: center">462930<br>053635379</td>
				<td style="text-align: center">-</td>
			</tr>
			<tr>
				<td>Pdte. Jefe de Brigada</td>
				<td style="text-align: center">-</td>
				<td style="text-align: center">999229071</td>
			</tr>
			<tr>
				<td>Brigada de Primeros Auxilios</td>
				<td style="text-align: center">-</td>
				<td style="text-align: center">991130914</td>
			</tr>
			<tr>
				<td>Brigada Contra Incendios</td>
				<td style="text-align: center">-</td>
				<td style="text-align: center">982132523</td>
			</tr>
			<tr>
				<td>Brigada de Rescate y Evacuación</td>
				<td style="text-align: center">-</td>
				<td style="text-align: center">956507777</td>
			</tr>									
		<tfoot>
			<tr>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</tfoot>
	</table>
</div>
@endsection