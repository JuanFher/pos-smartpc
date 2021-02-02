<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.includes.head')
</head>
<body class="alt-menu sidebar-noneoverflow">
    <div class="header-container">
        @include('layouts.includes.header')
    </div>
    <div class="main-container" id="container">
        <div class="overlay"></div>
        <div class="search-overlay"></div>
            @include('layouts.includes.navbar')
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                @yield('breadcrumbs')
                @yield('content')
             </div>
            @include('layouts.includes.footer')
        </div>
    </div>
    @include('layouts.includes.foot')
</body>
</html>