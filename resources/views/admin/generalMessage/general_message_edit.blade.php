@extends('.admin.layouts.default')

@section('content')
           
<div class="page-wrap">
		<div class="box-header">
		  <h3 class="box-title">Edit <strong>{{$generalMessage->title}}</strong> General Message</h3><a class="btn bg-olive margin pull-right" href="{{url('admin/home')}}"><i class="fa fa-fw fa-compass"></i> Back to Dashboard</a>		

		</div>
		<!-- /.box-header -->
		@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
		<div class="form-area" style="width: 95%;">	
			<section class="content">
			
				  <div class="row">

						
					<div class='box box-info'>
					<form class="form-horizontal" role="form" name="general_message"  method="POST"  enctype="multipart/form-data">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">						
						<div class='box-body pad'>
								<label for="exampleInputDescription">Login</label>
								<textarea name="login" id="login"  class="form-control" />{{$generalMessage->login}}</textarea>
						</div>	

						<div class='box-body pad'>
								<label for="exampleInputDescription">Register</label>
								<textarea name="register" id="register"  class="form-control" />{{$generalMessage->register}}</textarea>
						</div>	
						
						 <div class="box-footer pull-right">
							<button type="submit" class="btn btn-primary">Submit</button>
							<button type="reset" class="btn btn-primary">Reset</button>
						  </div>
						 
					</form>
						 
				  </div>				  
				  </div>
					
			</section>
		</div>
</div>


@endsection