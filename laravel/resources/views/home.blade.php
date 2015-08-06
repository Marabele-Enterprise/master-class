@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Dashboard</div>

				<div class="panel-body">
					Total invites: 69

					<!--Div that will hold the pie chart-->
				    <div id="chart_div"></div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
