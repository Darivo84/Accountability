<!DOCTYPE html>
<html>
<head>
    <title>Accountability - Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="{{ asset('/css/admin.css') }}" type='text/css' rel="stylesheet">
    <link href="{{ asset('/css/nav.css') }}" type='text/css' rel="stylesheet">

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="{{ asset('/js/nav.js') }}"></script>
    <script src="{{ asset('/js/jquery-ui.min.js') }}"></script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

    <link href="/images/favicon.png" rel="shortcut icon" type="image/x-icon">

</head>
<body>
<div>
    @section('sidebar')
        <div class='sidebar'>
            @include("partials/nav")
        </div>
    @show

    <div class="content_container">
        @yield('content')
    </div>
</div>

<script src="{{asset('js/tinymce/js/tinymce/tinymce.min.js')}}"></script>
<script>
       //TinyMCE editor
       var editor_config = {
              path_absolute: "{{ URL::to('/') }}/",
              selector: "textarea",
              plugins: [
                     "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                     "searchreplace wordcount visualblocks visualchars code fullscreen",
                     "insertdatetime media nonbreaking save table contextmenu directionality",
                     "emoticons template paste textcolor colorpicker textpattern"
              ],
              toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
              relative_urls: false,
              file_browser_callback: function (field_name, url, type, win) {
                     var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                     var y = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;
                     var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                     if (type == 'image') {
                            cmsURL = cmsURL + "&type=Images";
                     } else {
                            cmsURL = cmsURL + "&type=Files";
                     }
                     tinyMCE.activeEditor.windowManager.open({
                            file: cmsURL,
                            title: 'Filemanager',
                            width: x * 0.8,
                            height: y * 0.8,
                            resizable: "yes",
                            close_previous: "no"
                     });
              }
       };
       tinymce.init(editor_config);
</script>
</body>
</html>