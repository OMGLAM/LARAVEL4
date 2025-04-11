// app/Http/Controllers/PostController.php
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'author' => 'required',
            'published_at' => 'nullable|date',
        ]);
        Post::create($data);
        return redirect('/posts');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $data = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'author' => 'required',
            'published_at' => 'nullable|date',
        ]);
        $post->update($data);
        return redirect('/posts');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect('/posts');
    }
}
