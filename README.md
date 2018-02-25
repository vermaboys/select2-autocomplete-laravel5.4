# select2-autocomplete-laravel5.4

#For Clone
Step 1:- git clone in your terminal-[https://github.com/vermaboys/select2-autocomplete-laravel5.4.git]
Step 2:- php artisan db:seed

##You tube=>https://youtu.be/Vsj1rukgCMk

##Route
-[You can access select2 using http://localhost/select2-laravel/admin/select2]

##Css File
-[include select2.min.css file]

##Js File
-[include select2.min.js file]

##blade file
<select class="form-control multiple user-email"></select>

##jquery
-[<script type="text/javascript">
$(document).ready(function() {
  	$('.user-email').select2({
        placeholder: 'Select Email Address',
        multiple:true,
        ajax: {
          url: '{{url('admin/get-email')}}',
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

##In Controller

##function getUserEmail(Request $request)
{
	$data = [];
	if($request->has('q')){
		$search = $request->q;
		$data = Select2::select("id","email")->where('name','LIKE',"%$search%")->get();
	}
    return response()->json($data);
}