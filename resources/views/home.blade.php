@extends('layouts.app')

@section('content')

    <!-- الصفحة 1: الرئيسية (Home) -->
    <section>
        <div class="hero-card">
            <h1>مرحباً بك في نظام متابعة المهام الدراسية</h1>
            <p>النظام الذي يساعدك على تنظيم واجباتك ومواعيد التسليم بكل سهولة</p>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-number">{{ $stats['total'] }}</div>
                <p>إجمالي المهام</p>
            </div>
            <div class="stat-card">
             <div class="stat-number" style="color: #e67e22">{{ $stats['pending'] }}</div>
                <p>قيد الانتظار</p>
            </div>
            <div class="stat-card">
               <div class="stat-number" style="color: var(--danger)">{{ $stats['expired'] }}</div>
                <p>متأخرة</p>
            </div>
            <div class="stat-card">
                <div class="stat-number" style="color: var(--success)">{{ $stats['done'] }}</div>
                <p>منجزة</p>
            </div>
        </div>
    </section>

@endsection
