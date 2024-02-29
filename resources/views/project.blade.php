@extends('website')
@section('main')
    <div class="container py-4 py-xl-5">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2 style="text-align: center;font-family: Lora, serif;font-weight: bold;">Projects</h2>
                <p class="w-lg-50">Curae hendrerit donec commodo hendrerit egestas tempus, turpis facilisis nostra nunc. Vestibulum dui eget ultrices.</p>
            </div>
        </div>
        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
            <div class="col">
                <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">
                    <div class="card-body p-4">
                        <h4 class="card-title" style="font-family: Lora, serif;">Sample Project</h4>
                        <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p><a class="btn btn-primary" href="{{ route('project.list') }}" style="background: rgb(21,21,21);border-radius: 0;border-style: none;">See more ...</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">
                    <div class="card-body p-4">
                        <h4 class="card-title" style="font-family: Lora, serif;">Sample Project</h4>
                        <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p><a class="btn btn-primary" href="{{ route('project.list') }}" style="background: rgb(21,21,21);border-radius: 0;border-style: none;">See more ...</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">
                    <div class="card-body p-4">
                        <h4 class="card-title" style="font-family: Lora, serif;">Lorem libero donec</h4>
                        <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p><a class="btn btn-primary" href="{{ route('project.list') }}" style="background: rgb(21,21,21);border-radius: 0;border-style: none;">See more ...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
