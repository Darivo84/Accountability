<!DOCTYPE html>
<html lang="en">
<head>

    {{-- META DATA--}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Acountability is a web-based service that was created with the aim of ">
    <meta name="author" content="">
    <meta name="keywords"
          content="Accountability, Commercial credit Risk Management, Online credit checks for consumers, Debt Collection Agencies">
    <meta name="Accountability" content="">
    <meta name="theme-color" content="#52BC71">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    @if(isset($post) && !empty($post))
        <meta property="og:url" content="{{ Request::url() }}"/>
        <meta property="og:type" content="website"/>
        <meta property="og:title" content="{{ strtoupper($post->title) }}"/>
        <meta property="og:description" content="{{ strtoupper($post->title) }}"/>
        <meta property="og:image" content="{{ url('/') . $post->photo->file }}"/>
    @endif
    {{-- FAVICON --}}
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- TITLE --}}
    <title>{{ config('app.name', 'Laravel') }}</title>

    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <!-- STYLES -->
    <link href="{{ asset('/css/app.css') }}" type='text/css' rel="stylesheet">

    {{-- CSS-CDN --}}
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- SCRIPTS -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>



</head>
<body>
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<div id="app">

    {{-- NAVIGATION --}}
    @include('partials.navigation')

    {{-- CONTENT --}}
    @yield('content')

    {{-- FOOTER --}}
    @include('partials.footer')

</div>

<!-- Scripts -->
<script src="{{ asset('/js/app.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/accordion.js') }}"></script>

<script>
    $(document).ready(function () {


            $('.pm-eft').click(function(){
                $('.eft-area').removeClass('display-none');
                $('.eft-area').addClass('display-block');


                $('.credit-card-area').removeClass('display-block');
                $('.credit-card-area').addClass('display-none');

                $('.cash-area').removeClass('display-block');
                $('.cash-area').addClass('display-none');
            });

        $('.pm-cd').click(function(){
            $('.credit-card-area').removeClass('display-none');
            $('.credit-card-area').addClass('display-block');


            $('.eft-area').removeClass('display-block');
            $('.eft-area').addClass('display-none');

            $('.cash-area').removeClass('display-block');
            $('.cash-area').addClass('display-none');
        });

        $('.pm-cash').click(function(){
            $('.cash-area').removeClass('display-none');
            $('.cash-area').addClass('display-block');


            $('.eft-area').removeClass('display-block');
            $('.eft-area').addClass('display-none');

            $('.credit-card-area').removeClass('display-block');
            $('.credit-card-area').addClass('display-none');
        });

//---------------------------------------------------------------------------
// ADD SELECTED REGION
//---------------------------------------------------------------------------

        // click event - add selected button
        $('.add_selected_region').click(function (e) {
            e.preventDefault();

            // loop through each item checked
            $(".region_id:checked").each(function () {

                //Check if inbox has already been added to selected box
                if (!$(this).is(':disabled')) {

                    // create new input and label
                    var newInput = '<input type="checkbox" class="newRegion pull-right" name="selectedRegion[]" value="' + $(this).val() + '">';
                    var newLabel = '<label ' + 'id="region_label_' + $(this).val() + '" ' + 'class="selectedRegionLabel">' + $(this).attr('id') + '</label>' +
                        '<br class="br_' + $(this).val() + '">';
                    var newHidden = '<input class="hidden_region_' + $(this).val() + '" type="hidden" name="region_ids[]" value="' + $(this).val() + '">';

                    // append new inputs and label to selected area
                    $('.selectedRegionBox').append(newHidden);
                    $('.selectedRegionBox').append(newInput);
                    $('.selectedRegionBox').append(newLabel);
                }

                // disable checked input
                $(this).attr('disabled', true);
            });
        });

//---------------------------------------------------------------------------
// REMOVE SELECTED REGION
//---------------------------------------------------------------------------

        // click event - remove selected button
        $('.remove_selected_region').click(function (e) {
            e.preventDefault();

            // loop through each item checked
            $(".newRegion:checked").each(function () {

                //set This to self
                var self = $(this).val();

                //enable matching disabled checkbox and uncheck
                $(".region_id:checked").each(function () {
                    if ($(this).val() == self) {
                        $(this).attr('disabled', false);
                        $(this).prop('checked', false);
                    }
                });

                //remove region label
                $("#region_label_" + self).each(function () {
                    $(this).remove();
                    $(".br_" + self).remove();
                });

                //remove hidden region input
                $(".hidden_region_" + self).each(function () {
                    $(this).remove();
                    $(".br_" + self).remove();
                });

                //remove selected input
                $(this).remove();
            });
        });

//---------------------------------------------------------------------------
// ADD SELECTED CATEGORY
//---------------------------------------------------------------------------

        // click event - add selected button
        $('.add_selected_category').click(function (e) {
            e.preventDefault();

            // loop through each item checked
            $(".category_id:checked").each(function () {

                //Check if inbox has already been added to selected box
                if (!$(this).is(':disabled')) {

                    // create new input and label
                    var newInput = '<input type="checkbox" class="newCategory pull-right" name="selectedCategory[]" value="' + $(this).val() + '">';
                    var newLabel = '<label ' +
                        'id="category_label_' + $(this).val() + '" ' + 'class="selectedCategoryLabel">' + $(this).attr('id') + '</label><br class="br_' + $(this).val() + '">';
                    var newHidden = '<input class="hidden_category_' + $(this).val() + '" type="hidden" name="category_ids[]" value="' + $(this).val() + '">';

                    // append new inputs and label to selected area
                    $('.selectedCategoryBox').append(newHidden);
                    $('.selectedCategoryBox').append(newInput);
                    $('.selectedCategoryBox').append(newLabel);
                }

                // disable checked input
                $(this).attr('disabled', true);
            });
        });

//---------------------------------------------------------------------------
// ADD SELECTED CATEGORY
//---------------------------------------------------------------------------

        // click event - remove selected button
        $('.remove_selected_category').click(function (e) {
            e.preventDefault();

            // loop through each item checked
            $(".newCategory:checked").each(function () {

                //set This to self
                var self = $(this).val();

                //enable matching disabled checkbox and uncheck
                $(".category_id:checked").each(function () {
                    if ($(this).val() == self) {
                        $(this).attr('disabled', false);
                        $(this).prop('checked', false);
                    }
                });

                //remove category label
                $("#category_label_" + self).each(function () {
                    $(this).remove();
                    $(".br_" + self).remove();
                });

                //remove hidden category input
                $(".hidden_category_" + self).each(function () {
                    $(this).remove();
                    $(".br_" + self).remove();
                });

                //remove selected input
                $(this).remove();
            });
        });


//---------------------------------------------------------------------------
// CONTACT FORM CATEGORIES FILTER
//---------------------------------------------------------------------------
        $('#member-cats').addClass('display-none');


        $('#member_status').click(function(){
            if($(this).val() === 'member'){
                $('#member-cats').addClass('display-block');
                $('#not-a-member-cats').removeClass('display-block');
                $('#not-a-member-cats').addClass('display-none');
            }
        })

        $('#member_status').click(function(){
            if($(this).val() === 'not_member'){
                $('#not-a-member-cats').addClass('display-block');
                $('#member-cats').removeClass('display-block');
                $('#member-cats').addClass('display-none');
            }
        })


//---------------------------------------------------------------------------
// SEARCH FUNTIONALITY
//---------------------------------------------------------------------------

        $('.search-trigger').click(function () {
            $('.search-bar').slideToggle(100);
        });

//---------------------------------------------------------------------------
// DOCUMENT.READY END
//---------------------------------------------------------------------------
    });
</script>
</body>
</html>
