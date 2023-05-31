@foreach ($categorias as $categoria)
    <a href="{{ route('productos', $categoria->id) }}">{{ $categoria->name }}</a>
@endforeach
