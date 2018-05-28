# select2-autocomplete-laravel5.4

## For Clone
```
Step 1:- Run command on terminal git clone https://github.com/vermaboys/select2-autocomplete-laravel5.4.git
Step 2:- Run command on terminal  php artisan db:seed
Step 3:- Run command on terminal composer install
Step 4:- You can access select2 using http://localhost/select2-autocomplete-laravel5.4/admin/select2
```

## you can also write code in own project using following instructions

Route
```
Route::get('/admin/select2', 'AdminController@editProfile');
Route::get('/admin/get-email','AdminController@getUserEmail');
```


Css and Js File
```
Copy css and js folder in public folder
```

```
Copy Select2 model in app folder
```

blade file and layout file
```
copy full admin folder in resources\views
copy admin.blade file in resources\views\layouts
```

write multiple user-email in select tag that is class
```
<select class="form-control user-email multiple"></select>
```

jquery
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

In Controller
```
Copy AdminController in \app\Http\Controllers
```

```
You can access select2 using http://localhost/select2-autocomplete-laravel5.4/admin/select2
```