<h1>Ajouter un article</h1>
<form action="/posts" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Titre"><br>
    <textarea name="content" placeholder="Contenu"></textarea><br>
    <input type="text" name="author" placeholder="Auteur"><br>
    <input type="datetime-local" name="published_at"><br>
    <button type="submit">Enregistrer</button>
</form>
