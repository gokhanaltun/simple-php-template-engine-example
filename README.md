# Simple PHP Template Engine Example

It was prepared as an example. It is already available and open for development.

### Valid Drectives

- `@if`, `@elseif` and `@else`
- `@foreach`, `@endforeach`
- `@php`, `@endphp`
- `@include`
- `@section`, `@endsection`
- `@yield`

### Usage

```php
<?php
    require_once 'templateRenderer.php';
    $renderer = new TemplateRenderer();

    $data = ['data'=>[
        'location' => 'Türkiye',
        'github' => 'github.com/gokhanaltun',
        'instagram' => '@gkhan3591',
    ]];

    $renderer->render_template('contacts', $data);
?>
```

### Note:

You need to make changes in templateEngine.php and other required files according to your own folder structure.