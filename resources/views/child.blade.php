@extends('layouts.master')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <h2>Users</h2>
@endsection

@section('content')
   	<table class="table table-hover"> 
	   	<thead> 
		   <tr> 
			   <th>#</th> 
			   <th>First Name</th> 
			   <th>Last Name</th> 
			   <th>Email</th> 
			   <th>Mobile</th> 
		   </tr> 
	   	</thead> 
	   	<tbody> 
	   		<?php
	   			foreach ($users as $user) {?>
		   			<tr> 
					   <th scope="row">1</th> 
					   <td><?=$user->first_name?></td> 
					   <td><?=$user->last_name?></td> 
					   <td><?=$user->email?></td> 
					   <td><?=$user->phone['number']?></td> 
				   	</tr> 
	   			
	   			<?php
	   			}
	   		?>
		</tbody> 
	</table>
@endsection