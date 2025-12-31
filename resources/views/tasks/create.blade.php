@extends('layouts.app')

@section('content')

<section>
    <div class="card" style="max-width: 600px; margin: 0 auto;">
        <h2 style="margin-bottom: 25px;"><i class="fas fa-file-signature"></i> مهمة جديدة</h2>

        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label>عنوان المهمة</label>
                <input type="text" name="title" class="form-control" placeholder="أدخل عنوان المهمة..." required>
            </div>

            <div class="form-group">
                <label>تاريخ التسليم</label>
                <input type="date" name="due_date" class="form-control" required>
            </div>

            <div class="form-group">
                <label>الحالة</label>
                <select name="status" class="form-control">
                    <option value="pending">قيد التنفيذ</option>
                    <option value="done">منجزة</option>
                </select>
            </div>

            <div class="form-group">
                <label>وصف إضافي</label>
                <textarea name="description" class="form-control" rows="4" placeholder="تفاصيل المهمة..."></textarea>
            </div>

            <button type="submit" class="btn-submit">حفظ المهمة</button>
        </form>
    </div>
</section>

@endsection
