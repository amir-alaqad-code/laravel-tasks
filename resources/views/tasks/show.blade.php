@extends('layouts.app')

@section('content')

<div class="card" style="max-width: 950px; margin: 0 auto;">

    {{-- رأس البطاقة: الحالة + العنوان + زر الرجوع --}}
    <div style="display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:25px; gap:15px;">

        {{-- الحالة في اليسار --}}
        <div>
            @if($task['status'] === 'done')
                <span class="status-badge bg-done" style="font-size:1rem;">منجزة</span>
            @elseif(isset($task['status']) && $task['status'] === 'expired')
                <span class="status-badge bg-expired" style="font-size:1rem;">متأخرة</span>
            @else
                <span class="status-badge bg-pending" style="font-size:1rem;">قيد التنفيذ</span>
            @endif
        </div>

        {{-- العنوان في المنتصف --}}
        <div style="text-align:center; flex:1;">
            <h2 style="margin:0 0 5px 0; font-size:2rem;">
                {{ $task['title'] }}
            </h2>
            <span style="color:#7f8c8d; font-size:0.9rem;">
                رقم المهمة: #{{ $task['id'] }}
            </span>
        </div>

        {{-- زر العودة للقائمة في اليمين --}}
        <div>
            <a href="{{ route('tasks.index') }}" class="btn-back" style="margin-bottom:0;">
                <i class="fas fa-arrow-left"></i> عودة للقائمة
            </a>
        </div>
    </div>

    {{-- التفاصيل سطر بسطر --}}
    <div class="detail-row">
        <span class="detail-label">
            <i class="far fa-calendar-alt"></i> تاريخ التسليم:
        </span>
        <span class="detail-value">
            {{ $task['due_date_ar'] ?? $task['due_date'] }}
        </span>
    </div>

    <div class="detail-row">
        <span class="detail-label">
            <i class="far fa-calendar-plus"></i> تاريخ الإضافة:
        </span>
        <span class="detail-value">
            {{ $task['created_at_ar'] ?? '-' }}
        </span>
    </div>

    <div class="detail-row">
        <span class="detail-label">
            <i class="fas fa-info-circle"></i> الوصف:
        </span>
        <span class="detail-value">
            {{ $task['description'] ? $task['description'] : 'لا يوجد وصف' }}
        </span>
    </div>

    <div class="detail-row">
        <span class="detail-label">
            <i class="far fa-clock"></i> المدة المنقضية:
        </span>
        <span class="detail-value">
            {{ $elapsed_text }}
        </span>
    </div>

    {{-- أزرار تعديل / حذف (شكل فقط، لو حاب تعملهم حقيقيين نضبطهم لاحقاً) --}}
    <div style="margin-top:25px; display:flex; gap:10px;">
        <button type="button" class="action-btn" style="background:#7f8c8d;">
            تعديل
        </button>
        <button type="button" class="action-btn" style="background:var(--danger);">
            حذف
        </button>
    </div>

</div>

@endsection
