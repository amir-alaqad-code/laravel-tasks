@extends('layouts.app')

@section('content')

<section>
    <div class="card">
        <h2><i class="fas fa-tasks"></i> جميع المهام</h2>

        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>عنوان المهمة</th>
                    <th>تاريخ التسليم</th>
                    <th>الحالة</th>
                    <th>إجراءات</th>
                </tr>
            </thead>

           <tbody>
    @php
        $tasks = session('tasks', []);
    @endphp

    @if(count($tasks) == 0)
        <tr>
            <td colspan="5" style="text-align:center; color:#999;">لا يوجد مهام بعد</td>
        </tr>
    @endif

    @foreach($tasks as $task)
        <tr>
            <td>{{ $task['id'] }}</td>
            <td>{{ $task['title'] }}</td>
            <td>{{ $task['due_date'] }}</td>

            <td>
                @if($task['status'] == 'done')
                    <span class="status-badge bg-done">منجزة</span>
                @else
                    <span class="status-badge bg-pending">قيد التنفيذ</span>
                @endif
            </td>

            <td>
                <a href="{{ route('tasks.show', $task['id']) }}" class="action-btn btn-view">عرض</a>
            </td>
        </tr>
    @endforeach
</tbody>

        </table>

    </div>
</section>

@endsection
