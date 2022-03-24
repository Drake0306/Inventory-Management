<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Logistics</title>
    <!-- Styles -->
    @include('Imports/CSS')

</head>

<body class="sidebar-dark">
    @if(@$LoginPage == true)
        @include($pageName)
    @else
        <div class="container-scroller">
            @include('Imports/Nav')
            <div class="container-fluid page-body-wrapper">
                @include('Imports/skinStyle')
                @include('Imports/sideBar')
                <div class="main-panel">
                    @include($pageName)
                    @include('Imports/alert')
                    @include('Imports/footer')
                </div>
            </div>
        </div>
    @endif
    @include('Imports/JS')
</body>

</html>