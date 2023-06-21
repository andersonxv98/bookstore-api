<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index(Request $request)
    {
        $query = Book::query();

        // Verifica se o parâmetro 'search' está presente na solicitação
        if ($request->has('nome')) {
            $searchTerm = $request->input('nome');
            $query->where("nome" ,'like', '%' . $searchTerm . '%');
        }
    
        if ($request->has('idlivro')) {
            $searchTerm = $request->input('idlivro');
            $query->where("idlivro" , $searchTerm );
        }
    

        if ($request->has('valor')) {
            $searchTerm = $request->input('valor');
            $query->where("valor" ,'like', '%' . $searchTerm . '%');
        }

        if ($request->has('isbn')) {
            $searchTerm = $request->input('isbn');
            $query->where("isbn" ,'like', '%' . $searchTerm . '%');
        }
        // Execute a consulta para recuperar os livros
        $books = $query->get();
    
        // Retorne os livros em formato JSON
        return response()->json($books);
    }

    public function store(Request $request)
    {
        $dados = Book::create($request->all());

        return response()->json($dados, 201);
    }

    public function update(Request $request, $id)
    {
        $book = Book::find($id);
    
        if (!$book) {
            return response()->json(['message' => 'Livro não encontrado'], 404);
        }
        
        $book->nome = $request->input('nome');

        // Defina os demais campos que você deseja atualizar
        
        $book->save();
        
        return response()->json(['message' => 'Livro atualizado com sucesso'], 200);
    }

    public function destroy($id)
{
    // Localize o livro pelo ID
    $book = Book::find($id);

    // Verifique se o livro foi encontrado
    if (!$book) {
        return response()->json(['message' => 'Livro não encontrado'], 404);
    }

    // Exclua o livro
    $book->delete();

    // Retorne uma resposta de sucesso
    return response()->json(['message' => 'Livro excluído com sucesso']);
}
}
