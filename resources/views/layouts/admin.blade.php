<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Admin') - Learning English Grammar</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('css/admin/vars.css') }}">
  <style>
  
  body {
    margin: 0;
    padding: 0;
    overflow-x: hidden;
  }
  .scale-wrapper {
    width: 1440px;
    transform-origin: top left;
  }

</style>
  @yield('styles')
</head>
<body>
  <div class="scale-wrapper">
    @yield('content')
  </div>
  <script>
  function fitToScreen() {
    const scale = window.innerWidth / 1440;
    document.querySelector('.scale-wrapper').style.transform = `scale(${scale})`;
    document.body.style.height = (1273 * scale) + 'px';
  }
  window.addEventListener('resize', fitToScreen);
  fitToScreen();
</script>
</body>
</html>