<?php

namespace Controller;

use Model\Post;
use Src\View;
use Src\Request;
use Model\User;
use Src\Auth\Auth;


class Site
{
    public function index(Request $request): string
    {
        $posts = Post::where('id', $request->id)->get();
        return (new View())->render('site.post', ['posts' => $posts]);
    }

    public function lecturers(): string
    {
        return new View('site.lecturers', ['message' => 'hello working']);
    }

    public function departments(): string
    {
        return new View('site.departments', ['message' => 'hello working']);
    }

    public function disciplines(): string
    {
        return new View('site.disciplines', ['message' => 'hello working']);
    }

    public function add_lecturer(Request $request): string
    {
        if ($request->method==='POST' && User::create($request->all())){
            return new View('site.lecturers', []);
        }
        return new View('site.add_lecturer');
    }


    public function login(Request $request): string
    {
        //Если просто обращение к странице, то отобразить форму
        if ($request->method === 'GET') {
            return new View('site.login');
        }
        //Если удалось аутентифицировать пользователя, то редирект
        if (Auth::attempt($request->all())) {
            app()->route->redirect('/lecturers');
        }
        //Если аутентификация не удалась, то сообщение об ошибке
        return new View('site.login', ['message' => 'Неправильные логин или пароль']);
    }

    public function logout(): void
    {
        Auth::logout();
        app()->route->redirect('/lecturers');
    }



}
