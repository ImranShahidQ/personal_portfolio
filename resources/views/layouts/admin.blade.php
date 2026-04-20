<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/icon.png') }}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <title>Admin Panel - @yield('title', 'Dashboard')</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>
<body>
    <div class="admin-container">

        {{-- Sidebar --}}
        <aside class="sidebar">
            <div class="sidebar-brand">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Logo">
                <h2>Next Logic Hub</h2>
            </div>
            <nav class="sidebar-nav">
                <a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i> Dashboard</a>
                <a href="{{ route('admin.courses') }}"><i class="fas fa-book"></i> Courses</a>
                <a href="{{ route('admin.projects.index') }}"><i class="fas fa-project-diagram"></i> Projects</a>
                <a href="{{ route('admin.contacts.index') }}"><i class="fas fa-envelope"></i> Messages</a>
                <a href="{{ route('admin.logout') }}"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </nav>
        </aside>

        {{-- Main Content --}}
        <main class="admin-main">
            <header class="admin-header">
                <h1>@yield('page-title', 'Dashboard')</h1>
            </header>

            <div class="admin-content">
                @yield('content')
            </div>
        </main>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "timeOut": "4000",
            "extendedTimeOut": "1000",
            "showDuration": "300",
            "hideDuration": "300",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
    </script>
    <script>
        @if(session('success'))
            toastr.success("{{ session('success') }}");
        @endif

        @if(session('error'))
            toastr.error("{{ session('error') }}");
        @endif

        @if($errors->any())
            @foreach($errors->all() as $error)
                toastr.error("{{ $error }}");
            @endforeach
        @endif
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const deleteForms = document.querySelectorAll('.delete-form');

            deleteForms.forEach(form => {
                form.addEventListener('submit', function(e){
                    e.preventDefault();

                    Swal.fire({
                        title: 'Are you sure?',
                        text: "This action cannot be undone!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
                        }
                    });
                });
            });
        });
    </script>
</body>
</html>
