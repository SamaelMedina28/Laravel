<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Mail\PostCreatedMail;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PostController extends Controller
{
    // ? Metodo para mostrar todos los post
    public function index(){

        $posts = Post::orderBy('id','desc')
                        ->paginate(10);


        return view("posts.index", compact('posts'));
    }
    // ? Metodo para mostrar el formulario de creacion de post
    public function create(){
        return view('posts.create');
    }
    // ? Metodo para mostrar solo un post
    public function show(Post $posts, $categoria = null){
        // $posts = Post::find($id);

        //& Pasar datos a la vista con un array asociativo
        /* return view('posts.show', 
            ['post' => $post, 
            'categoria' => $categoria]); */
        //& Pasar datos a la vista con compact
        return view('posts.show', compact('posts', 'categoria'));
    }

    //? Metodo donde se procesara la informacion que s emando del formulario  !Aqui se creara!
    public function store(StorePostRequest $request){   
        // ! Creamos un registro en nuestra base de datos, al conecatrnos a la tabla Post
        // ^ le pasamos los datos que vienen en el request
        // ^ y los guardamos en la base de datos
        // Se puede guardar el contenido de diferentes formas
        /* $posts = new Post();
        $posts->titulo = $request->titulo;
        $posts->slug = $request->slug;
        $posts->contenido = request('contenido');
        $posts->categoria = request()->categoria; 
        $posts->save();*/

        // ^ Diferentes formas de recuperar los datos mandados por un formulario
        // return request()->all();
        // return request('titulo');
        // return request()->contenido;
        //^Validaciones
        // $request->validate([
        //     'titulo'=>'required|min:5|max:50',
        //     'slug'=>'required|unique:posts',
        //     'categoria'=>['required','min:8','max:30'],
        //     'contenido'=>'required'
        // ]);

    // TODO Asignacion masiva (ocupa que en el modelo lo configuremos)
        $post = Post::create($request->all()); 
        Mail::to('Prueba@prueba.mx')->send(new PostCreatedMail($post));

        return redirect()->route('posts.index');
    }

    public function edit(Post $posts){
        // $posts = Post::find($id);


        return view('posts.edit', compact('posts'));
    }

    public function update(Post $posts,Request $request){
        // $posts = Post::find($id);

        // Se puede guardar el contenido de diferentes formas
        /* $posts->titulo = $request->titulo;
        $posts->slug = $request->slug;
        $posts->contenido = request('contenido');
        $posts->categoria = request()->categoria;
        $posts->save(); */

        $request->validate([
            'titulo'=>'required|min:5|max:50',
            'slug'=>"required|unique:posts,slug,$posts->id",
            'categoria'=>['required','min:8','max:30'],
            'contenido'=>'required'
        ]);

        $posts->update($request->all()); // TODO Actualizandolo con asignacion masiva
        return redirect()->route('posts.show',$posts);
    }

    public function destroy(Post $posts){
        // $post = Post::find($id);
        $posts->delete();
        return redirect()->route('posts.index');

    }

}
