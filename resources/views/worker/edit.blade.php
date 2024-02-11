@extends('layout.worker.form')
@section('create')
    <form class="my-8 text-sm" action="{{route('workers.update',$worker->id)}}" method="post">
        @method('PATCH')
        @csrf
        <div class="flex flex-col my-4">
            <label for="name"
                   class="text-gray-700">Полное имя</label>
            <input type="text"
                   name="worker_name"
                   id="name"
                   value="{{$worker->worker_name}}"
                   class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900"
                   placeholder="Введите имя">
        </div>

        <div class="flex flex-col my-4">
            <label for="email"
                   class="text-gray-700">E-mail</label>
            <input type="email"
                   name="worker_email"
                   value="{{$worker->worker_email}}"
                   id="email"
                   class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900"
                   placeholder="Введите E-mail">
        </div>

        <div class="flex flex-col my-4">
            <label for="proff"
                   class="text-gray-700">Должность</label>
            <input type="text"
                   name="worker_profession"
                   value="{{$worker->worker_profession}}"
                   id="proff"
                   class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900"
                   placeholder="Введите профессию">
        </div>

        <div class="flex flex-col my-4">
            <div for="email"
                 class="mb-4 text-gray-700">Технологии</div>
            <label>
                <input type="checkbox"
                       name="worker_technologies[]"
                       value="php"
                       @if(in_array('php',json_decode($worker->worker_technologies))) checked @endif
                       id="email"
                >
                <span>PHP</span>
            </label>
            <label>
                <input type="checkbox"
                       name="worker_technologies[]"
                       @if(in_array('java',json_decode($worker->worker_technologies))) checked @endif
                       value="java"
                       id="email"
                >
                <span>JAVA</span>
            </label>
            <label>
                <input type="checkbox"
                       name="worker_technologies[]"
                       @if(in_array('javascript',json_decode($worker->worker_technologies))) checked @endif
                       value="javascript"
                       id="email"
                >
                <span>JAVASCRIPT</span>
            </label>
            <label>
                <input type="checkbox"
                       name="worker_technologies[]"
                       @if(in_array('html',json_decode($worker->worker_technologies))) checked @endif
                       value="html"
                       id="email"
                >
                <span>HTML</span>
            </label>
            <label>
                <input type="checkbox"
                       name="worker_technologies[]"
                       @if(in_array('css',json_decode($worker->worker_technologies))) checked @endif
                       value="css"
                       id="email"
                >
                <span>CSS</span>
            </label>
        </div>

        <div class="my-4">
            <label class="text-gray-700">
                <input type="radio"
                       name="is_online"
                       value="1"
                       @if($worker->is_online) checked @endif
                >
                <span>Online</span>
            </label>
            <label class="text-gray-700">
                <input type="radio"
                       name="is_online"
                       value="0"
                       @if(!$worker->is_online) checked @endif
                >
                <span>Offline</span>
            </label>
        </div>



        <div class="my-4 flex items-center justify-end space-x-4">
            <button class="bg-blue-600 hover:bg-blue-700 rounded-lg px-8 py-2 text-gray-100 hover:shadow-xl transition duration-150 uppercase">
                Изменить
            </button>
        </div>
    </form>
@endsection
