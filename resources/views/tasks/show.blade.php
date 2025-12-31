@extends('layouts.app')

@section('content')

@if(session('success'))
<div style="background: #e8f5e9; padding:10px; border-radius:8px; margin-bottom:20px; color:#2e7d32;">
    {{ session('success') }}
</div>
@endif

<button class="btn-back" onclick="window.history.back()">
    <i class="fas fa-arrow-right"></i> عودة للقائمة
</button>

<div class="card">
    <div class="task-detail-header">
        <div>
            <h2 style="margin:0; font-size: 1.8rem;">{{ $task['title'] }}</h2>
            <span style="color: #7f8c8d; font-size: 0.9rem;">رقم المهمة: #{{ $task['id'] }}</span>
        </div>

        @if($task['status'] == 'done')
            <span class="status-badge bg-done" style="font-size: 1.2rem;">منجزة</span>
        @else
            <span class="status-badge bg-pending" style="font-size: 1.2rem;">قيد التنفيذ</span>
        @endif
    </div>

    <div class="detail-row">
        <span class="detail-label"><i class="far fa-calendar-alt"></i> تاريخ التسليم:</span>
        <span class="detail-value">{{ $task['due_date'] }}</span>
    </div>

    <div class="detail-row">
    <span class="detail-label"><i class="far fa-calendar-plus"></i> تاريخ الإضافة:</span>
    <span class="detail-value">{{ $task['created_at_ar'] }}</span>
</div>


    <div class="detail-row">
        <span class="detail-label"><i class="fas fa-info-circle"></i> الوصف:</span>
        <span class="detail-value">
            {{ $task['description'] ?? 'لا يوجد وصف' }}
        </span>
    </div>

</div>

@endsection
