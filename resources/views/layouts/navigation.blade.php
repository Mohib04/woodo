<nav class="navbar navbar-expand-lg ">
    <!-- <a class="navbar-brand" href="#">Menu</a> -->
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
           <li class="nav-item active">
            <a class="nav-link active" href="{{ route('home') }}">Home<span class="sr-only">(current)</span></a> </li>
           <li class="nav-item">
            <a class="nav-link" href="{{ route('about') }}">About</a></li>
           <li class="nav-item">
            <a class="nav-link" href="{{ route('company') }}">Company</a></li>
           <li class="#" href="#">
              <a class="nav-link" href="{{ route('founitures') }}">Furnitures</a></li>
           <li class="nav-item" href="#">
              <a class="nav-link" href="{{ route('contact-us') }}">Contact Us</a></li>
        </ul>
    </div>
</nav>