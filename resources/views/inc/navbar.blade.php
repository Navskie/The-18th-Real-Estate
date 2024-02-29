<nav class="navbar navbar-expand-md bg-body py-3">
    <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"><span><img style="width: 50px;height: 50px;" width="50" height="50" src="{{ asset('assets/img/IMG_0395.jpg') }}">&nbsp;<span style="font-family: Lora, serif;font-size: 21px;padding-right: 0px;padding-left: 9px;font-weight: bold;">The 18th Realstate</span></span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-2">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="{{ route('index') }}">Home</a></li>
                <li class="nav-item"></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('project') }}" style="color: var(--bs-navbar-active-color);">Project</a></li>
            </ul><a class="btn btn-primary ms-md-2" role="button" href="{{ route('brochure') }}" style="border-style: none;background: rgb(25,25,25);border-radius: 0;">Brochure</a>
        </div>
    </div>
</nav>
