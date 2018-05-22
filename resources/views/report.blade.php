@extends('master')

@section('content')
    <section class="bg-primary" id="report">
        <div class="container">
            <div class="row">
                    <h2 class="margin-top-0 text-primary">Report</h2>
                    <br>
                    <h4>All suggestions</h4>
					<table id="datatable" class="mdl-data-table" style="background-color:#333">
					    <thead>
					        <tr>
					            <th>Name</th>
					            <th>E-mail</th>
					            <th>Age</th>
					            <th>Suggestion</th>
					            <th>Created at</th>
					        </tr>
					    </thead>
					    <tbody >
                    	@foreach($suggestions as $suggestion)
					        <tr style="background-color: #333">
					            <td>{{$suggestion->name}}</td>
					            <td>{{$suggestion->email}}</td>
					            <td>{{$suggestion->age}}</td>
					            <td>{{$suggestion->suggestion}}</td>
					            <td>{{date('d/m/Y',strtotime($suggestion->name))}}</td>
					        </tr>
                    	@endforeach
					    </tbody>
					</table>                    
                    <div>
                    </div>
            </div>
        </div>
    </section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.material.min.js"></script>
<script type="text/javascript">
	$(document).ready( function () {
    $('#datatable').DataTable( {
    	"info" : false,
    	"search" : false,
    	"paging": false,
	    language: {
	        searchPlaceholder: "Search..."
	    },	    	
        columnDefs: [
            {
                className: 'mdl-data-table__cell--non-numeric'
            }
        ]
    } );
	} );	
</script>
@stop
