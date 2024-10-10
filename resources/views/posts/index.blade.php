<!DOCTYPE html>
<html lang="en">
<head>
   @include('posts.css')
<body>
    @include('posts.header')

    <!-- Content section -->
    <div class="content">
        <div class="container mt-4">
            @yield('content')
        </div>
    </div>

    <!-- Footer section -->
  @include('posts.footer')

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
