<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Requests\UserRequest;
use App\Models\User;

class UserController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    public function show()
    {
        $users = User::all();
        return view('users', ['users' => $users]);
    }

    public function showDetail(User $user)
    {
        return view('user', ['user' => $user]);
    }

    public function register()
    {
        return view('register');
    }

    public function store(UserRequest $request)
    {
        $firstname = $request->validated()['firstname'];
        $lastname = $request->validated()['lastname'];
        $username = $request->validated()['username'];
        $email = $request->validated()['email'];
        $password = $request->validated()['password'];

        $user = new User;
        $user->firstname = $firstname;
        $user->lastname = $lastname;
        $user->username = $username;
        $user->email = $email;
        $user->password = $password;
        $user->save();

        return redirect('/')->with('success', 'You registered successfully');
    }

    // public function delete(User $user)
    // {
    //     $user->delete();
    //     return redirect('/')->with('success', 'User deleted successfully');
    // }

    // public function edit(User $user)
    // {
    //     return view('edit-user', ['user' => $user]);
    // }

    // public function update(BookRequest $request, Book $book)
    // {
    //     $title = $request->validated()['title'];
    //     $description = $request->validated()['description'];
    //     $language = $request->validated()['language'];
    //     $status = $request->validated()['status'];

    //     // Assign to author if already existing, otherwise create new author
    //     $author = Author::firstOrCreate([
    //         'firstname' => $request->validated()['authorFirstname'],
    //         'lastname' => $request->validated()['authorLastname'],
    //         'slug' => Str::slug($request->validated()['authorFirstname'] . '-' . $request->validated()['authorLastname'])
    //     ]);

    //     // Update slug only if book title is changed (since slug is based on title)
    //     if ($title !== $book->title) {
    //         $book->slug = Str::slug($title);
    //     }

    //     $book->title = $title;
    //     $book->description = $description;
    //     $book->language_id = $language;
    //     $book->status = $status;
    //     $book->author_id = $author->id;

    //     $book->save();

    //     return redirect('/books')->with('success', 'Book updated successfully');
    // }
}
