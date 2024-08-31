<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>www.wramomc.com</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
</head>
<body>
    {{-- navbar wram --}}
    <nav class="container">
        <header class="justify-content-between d-flex ">
            <img class="mt-4 ms-5" src="img/wram.png" alt="logo" width="100" height="100">
            <span><img class="d-flex justify-content-center" src="img/frameworkwram.png" alt="logo"></span>
        </header>
        <hr>
        <nav class="d-flex justify-content-end">
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                <label class="btn btn-outline-primary" for="btnradio1">HTML</label>

                <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                <label class="btn btn-outline-primary" for="btnradio2">CSS</label>

                <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                <label class="btn btn-outline-primary" for="btnradio3">JavaScript</label>
              </div>
        </nav>
    </nav>
</body>
</html>
