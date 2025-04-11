<h1>Liste des articles</h1>
<a href="/posts/create">Créer un nouvel article</a>

<ul>
@foreach($posts as $post)
    <li>
        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a> - {{ $post->author }}
        <a href="/posts/{{ $post->id }}/edit">Modifier</a>
        <form action="/posts/{{ $post->id }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Supprimer</button>
        </form>
    </li>
@endforeach
</ul>
