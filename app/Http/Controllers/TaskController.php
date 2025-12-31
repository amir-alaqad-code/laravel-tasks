<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    // الصفحة الرئيسية
   public function home()
{
    $tasks = session('tasks', []);

    $stats = [
        'total' => count($tasks),
        'pending' => collect($tasks)->where('status', 'pending')->count(),
        'done' => collect($tasks)->where('status', 'done')->count(),
        'expired' => 0 // لاحقاً ممكن نحسب الانتهاء الفعلي
    ];

    return view('home', compact('stats'));
}


    // صفحة قائمة المهام
    public function index()
    {
        return view('tasks.index');
    }

    // صفحة إضافة مهمة
    public function create()
    {
        return view('tasks.create');
    }

    // حفظ المهمة
   public function store(Request $request)
{
    // التحقق من صحة البيانات
    $request->validate([
        'title' => 'required',
        'due_date' => 'required|date',
        'status' => 'required',
    ]);

    // جلب المهمات الحالية من السيشن أو مصفوفة فاضية
    $tasks = session()->get('tasks', []);

    // تجهيز بيانات المهمة الجديدة
    $task = [
        'id' => count($tasks) + 1,
        'title' => $request->title,
        'due_date' => $request->due_date,
        'status' => $request->status,
        'description' => $request->description,
        'created_at' => now(),
    ];

    // إضافة المهمة لمصفوفة المهام
    $tasks[] = $task;

    // حفظها داخل السيشن
    session()->put('tasks', $tasks);

    // إعادة التوجيه لقائمة المهام
    return redirect()->route('tasks.index')->with('success', 'تمت إضافة المهمة بنجاح!');
}


    // صفحة عرض مهمة واحدة)
   public function show($id)
{
    $tasks = session('tasks', []);

    $task = collect($tasks)->firstWhere('id', $id);

    if (!$task) {
        return redirect()->route('tasks.index')->with('error', 'المهمة غير موجودة');
    }

    // تعديل التاريخ إلى صيغة عربية
    $task['due_date_ar'] = $this->arabicDate($task['due_date']);
    $task['created_at_ar'] = $this->arabicDate($task['created_at']);

    return view('tasks.show', compact('task'));
}

private function arabicDate($date)
{
    $months = [
        1 => 'يناير', 2 => 'فبراير', 3 => 'مارس', 4 => 'أبريل',
        5 => 'مايو', 6 => 'يونيو', 7 => 'يوليو', 8 => 'أغسطس',
        9 => 'سبتمبر', 10 => 'أكتوبر', 11 => 'نوفمبر', 12 => 'ديسمبر'
    ];

    $timestamp = strtotime($date);
    $day = date('j', $timestamp);
    $month = $months[(int)date('n', $timestamp)];
    $year = date('Y', $timestamp);

    return "{$day} {$month} {$year}";
}


}
