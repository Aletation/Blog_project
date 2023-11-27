<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return "Список постов";
    }

    public function create() {
        return "Создание поста";
    }

    public function store() {
        return "Запрос на создание поста";
    }

    public function show($post) {
        return "Посмотр готового поста {$post}";
    }

    public function edit($post) {
        return "Редактирование поста {$post}";
    }

    public function update() {
        return "Запрос на обновление поста";
    }

    public function delete() {
        return "Удаление поста";
    }

    public function like() {
        return "Лайк + 1";
    }

}
