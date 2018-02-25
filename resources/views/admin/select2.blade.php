@extends('layouts.admin')
@section('content')
<section class="content-header">
	 <h1>Select2</h1>
	 <ol class="breadcrumb">
		<li>
		<i class="fa fa-dashboard"></i> 
		<li class="active">Select2</li>
	 </ol>
 </section>
 <style type="text/css">
.select2-container--default .select2-selection--multiple .select2-selection__choice {
background-color: #3c8dbc;}
 </style>
<section class="content">
  <div class="container">
   	<div class="row">
   		<div class="col-md-6">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Select2</h3>
            </div>
            <div class="box-body">
              <div class="form-group">
              		<label class="col-sm-3 control-label">Email</label>
      		         <div class="col-sm-9">
                		<select class="form-control user-email multiple"></select>
              		</div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</section>
<script type="text/javascript">
   $(document).ready(function() {
  $('.user-email').select2({
        placeholder: 'Select Email Address',
        multiple:true,
        ajax: {
          url: '<?php echo url('admin/get-email'); ?>',
          dataType: 'json',
          processResults: function (data) {
            return {
              results:  $.map(data, function (item) {
                return {
                        text: item.email,
                        id: item.id
                    }
                })
            };
          },
          cache: true
        }
      });
  });
</script>
@endsection