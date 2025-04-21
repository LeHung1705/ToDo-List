@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-6">
        <h1 class="text-2xl font-semibold text-gray-900 dark:text-gray-100 mb-6">Danh sách công việc của tôi</h1>

        <!-- Thông báo thành công hoặc lỗi -->
        @if (session('success'))
            <div class="mb-4 p-4 bg-green-100 text-green-700 rounded-lg">{{ session('success') }}</div>
        @endif
        @if ($errors->has('error'))
            <div class="mb-4 p-4 bg-red-100 text-red-700 rounded-lg">{{ $errors->first('error') }}</div>
        @endif

        <!-- Form thêm công việc -->
        <form method="POST" action="{{ route('tasks.store') }}" class="mb-6 flex gap-4">
            @csrf
            <input type="text" name="title" placeholder="Nhập tên công việc" required value="{{ old('title') }}"
                   class="block w-full sm:w-64 px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100">
            @error('title')
                <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
            @enderror
            <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                Thêm công việc
            </button>
        </form>

        <!-- Danh sách công việc -->
        <ul class="space-y-4 task-list">
            @foreach ($tasks as $task)
                <li class="flex items-center justify-between p-4 bg-white dark:bg-gray-800 rounded-md shadow-sm">
                    <span class="text-gray-900 dark:text-gray-100">{{ $task->title }}</span>
                    <form method="POST" action="{{ route('tasks.destroy', $task->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:text-red-800 focus:outline-none">
                            Xóa
                        </button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
@endsection