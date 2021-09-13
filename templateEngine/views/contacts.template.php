@include 'main'

@section('title') 3D Contacts Page @endsection
@section('styleFile') <link rel="stylesheet" href="resources/css/style.css"> @endsection

@section('body')
<div class="container">
    <div class="menu">
        <div class="menuFront"><i class="fas fa-map-marker-alt"></i></div>
        <div class="menuBack">{{$data['location']}}</div>
    </div>
    <div class="menu">
        <div class="menuFront"><i class="fab fa-github"></i></div>
        <div class="menuBack">{{$data['github']}}</div>
    </div>
    <div class="menu">
        <div class="menuFront"><i class="fab fa-instagram"></i></div>
        <div class="menuBack">{{$data['instagram']}}</div>
    </div>
</div>
@endsection