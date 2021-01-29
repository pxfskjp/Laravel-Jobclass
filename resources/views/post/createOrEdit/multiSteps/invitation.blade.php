@extends('layouts.master')
@section('wizard')
	@include('post.createOrEdit.multiSteps.inc.wizard')
@endsection
@section('content')
	@include('common.spacer')
	<div class="main-container">
		<div class="container">
			<div class="row">
				@if (Session::has('flash_notification'))
					<div class="col-xl-12">
						<div class="row">
							<div class="col-xl-12">
								@include('flash::message')
							</div>
						</div>
					</div>
				@endif
				@include('post.inc.profile')
			</div>
		</div>
	</div>
@endsection
@section('after_scripts')
<script>
	function update_chkbox_state_fnsh(id){
		var val =  $('[name="'
		+id+'"]').val()*1+1;
		$('.btn_invite').val('invite');
		return val%2;
	}
</script>
@endsection