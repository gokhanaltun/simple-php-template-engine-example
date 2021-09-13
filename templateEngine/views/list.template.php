@include 'main'

@section('title') List Page @endsection
@section('styleFile') <link rel="stylesheet" href="resources/css/style-index.css"> @endsection

@section('body')
<main>
  <ol class="gradient-list">
    @foreach($listData as $data)
      <li>{{$data}}</li>
    @endforeach
  </ol>
</main>
@endsection