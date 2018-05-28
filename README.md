# select2-autocomplete-laravel5.4

# For Clone
Step 1:- git clone in your terminal-[https://github.com/vermaboys/select2-autocomplete-laravel5.4.git]
Step 2:- php artisan db:seed

# you can also write code in own project using following instructions

## Route
```
Route::get('/admin/select2', 'AdminController@editProfile');
Route::get('/admin/get-email','AdminController@getUserEmail');
```


## Css and Js File
```
jquery.min.js
jquery-ui.min.js
select2.min.css
select2.min.js
```

## blade file and layout file
```
copy full admin folder in resources\views
copy admin.blade file in resources\views\layouts
```

##write multiple user-email in select tag that is class
```
<select class="form-control user-email multiple"></select>
```

##jquery
```
<script type="text/javascript">
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
```

## In Controller
```
Copy AdminController in \app\Http\Controllers
```

```
You can access select2 using http://localhost/select2-laravel/admin/select2
```