<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نظام متابعة المهام الدراسية</title>

    {{-- خط تاجوال --}}
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">
    {{-- أيقونات فاونت أويسم --}}
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>

    :root {
    --primary-color: #3498db;
    --primary-dark: #2c82c9;
    --secondary-color: #2c3e50;
    --accent-color: #e67e22;
    --bg-color: #f5f8fc;
    --surface-color: #ffffff;
    --text-color: #333333;
    --muted-text: #7f8c8d;
    --border-soft: #e0e6f0;
    --danger: #e74c3c;
    --success: #2ecc71;

    --radius-lg: 15px;
    --radius-md: 10px;
    --radius-sm: 6px;

    --shadow-soft: 0 8px 24px rgba(0, 0, 0, 0.06);
    --shadow-light: 0 2px 10px rgba(0, 0, 0, 0.05);

    --transition-fast: 0.2s ease;
    --transition-normal: 0.3s ease;
}

/* Reset بسيط */

*,
*::before,
*::after {
    box-sizing: border-box;
}

body {
    font-family: "Tajawal", system-ui, -apple-system, BlinkMacSystemFont, sans-serif;
    background-color: var(--bg-color);
    margin: 0;
    padding: 0;
    color: var(--text-color);
    padding-top: 80px; /* مساحة للنافبار الثابت */
    direction: rtl;
}

h1, h2, h3 {
    margin: 0;
    color: var(--secondary-color);
}

p {
    margin: 0;
    color: var(--muted-text);
}

/* ---------------- Navbar ---------------- */

nav {
    background-color: var(--surface-color);
    height: 70px;
    box-shadow: var(--shadow-light);
    border-bottom: 3px solid rgba(52, 152, 219, 0.12);
    position: fixed;
    top: 0;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 40px;
    z-index: 1000;
}

.logo {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--primary-color);
    display: flex;
    align-items: center;
    gap: 10px;
}

.logo i {
    font-size: 1.6rem;
}

.nav-links {
    display: flex;
    list-style: none;
    gap: 25px;
    padding: 0;
    margin: 0;
    align-items: center;
}

.nav-links li a {
    text-decoration: none;
    color: var(--secondary-color);
    font-weight: 500;
    transition: color var(--transition-normal), transform var(--transition-fast);
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 6px 10px;
    border-radius: 20px;
}

.nav-links li a:hover {
    color: var(--primary-color);
    transform: translateY(-1px);
}

.nav-links li a.active {
    color: var(--primary-color);
    background-color: rgba(52, 152, 219, 0.08);
}

.btn-add {
    background-color: var(--primary-color);
    color: #ffffff !important;
    padding: 8px 20px;
    border-radius: 25px;
    transition: background-color var(--transition-normal), transform var(--transition-fast), box-shadow var(--transition-fast);
    box-shadow: 0 6px 14px rgba(52, 152, 219, 0.35);
    font-weight: 600;
}

.btn-add:hover {
    background-color: var(--primary-dark);
    transform: translateY(-2px);
    box-shadow: 0 10px 20px rgba(52, 152, 219, 0.4);
}

/* --------------- Container & Sections --------------- */

.container {
    max-width: 1000px;
    margin: 20px auto 40px;
    padding: 0 20px 40px;
}

/* لو لسه بتستخدم showPage بالـ JS في نسخة الـ HTML العادية */
.page-section {
    display: none;
    animation: fadeIn 0.4s ease-in-out;
}

.page-section.active {
    display: block;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(8px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* ---------------- Home (Hero + Stats) ---------------- */

.hero-card {
    background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
    color: #ffffff;
    padding: 40px 30px;
    border-radius: var(--radius-lg);
    text-align: center;
    margin-bottom: 30px;
    box-shadow: 0 14px 32px rgba(52, 152, 219, 0.45);
}

.hero-card h1 {
    color: #ffffff;
    font-size: 2rem;
    margin-bottom: 10px;
}

.hero-card p {
    color: rgba(255, 255, 255, 0.9);
    font-size: 1rem;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 18px;
    margin-top: 10px;
}

.stat-card {
    background: var(--surface-color);
    padding: 18px 16px;
    border-radius: var(--radius-md);
    text-align: center;
    box-shadow: var(--shadow-soft);
    border: 1px solid rgba(255,255,255,0.7);
    transition: transform var(--transition-fast), box-shadow var(--transition-fast), border-color var(--transition-fast);
}

.stat-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 10px 24px rgba(0, 0, 0, 0.08);
    border-color: rgba(52, 152, 219, 0.25);
}

.stat-number {
    font-size: 2.2rem;
    font-weight: 700;
    color: var(--primary-color);
    margin-bottom: 6px;
}

.stat-card p {
    font-size: 0.95rem;
    color: var(--muted-text);
}

/* ---------------- Card & Table (Task List) ---------------- */

.card {
    background: var(--surface-color);
    padding: 25px 22px;
    border-radius: var(--radius-md);
    box-shadow: var(--shadow-soft);
    border: 1px solid rgba(255,255,255,0.7);
}

.card h2 {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 1.3rem;
    margin-bottom: 15px;
    color: var(--secondary-color);
}

.card h2 i {
    color: var(--primary-color);
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
    font-size: 0.95rem;
}

th, td {
    padding: 12px 10px;
    text-align: right;
    border-bottom: 1px solid #ecf0f1;
}

th {
    background-color: #f8fafc;
    color: #7f8c8d;
    font-weight: 600;
    font-size: 0.9rem;
}

tbody tr:hover {
    background-color: #f9fbff;
}

/* ---------------- Buttons & Status Badges ---------------- */

.action-btn {
    border: none;
    padding: 6px 12px;
    border-radius: var(--radius-sm);
    cursor: pointer;
    margin-left: 5px;
    font-size: 0.85rem;
    color: #ffffff;
    transition: background-color var(--transition-fast), transform var(--transition-fast), box-shadow var(--transition-fast);
    display: inline-flex;
    align-items: center;
    gap: 5px;
}

.btn-view {
    background-color: var(--primary-color);
    box-shadow: 0 4px 10px rgba(52, 152, 219, 0.3);
}

.btn-view:hover {
    background-color: var(--primary-dark);
    transform: translateY(-1px);
    box-shadow: 0 6px 14px rgba(52, 152, 219, 0.35);
}

.status-badge {
    padding: 5px 12px;
    border-radius: 999px;
    font-size: 0.8rem;
    font-weight: 700;
    display: inline-block;
}

.bg-expired {
    background-color: rgba(231, 76, 60, 0.12);
    color: var(--danger);
}

.bg-pending {
    background-color: rgba(230, 126, 34, 0.12);
    color: var(--accent-color);
}

.bg-done {
    background-color: rgba(46, 204, 113, 0.12);
    color: var(--success);
}

/* ---------------- Forms (Add Task) ---------------- */

.form-group {
    margin-bottom: 18px;
}

.form-group label {
    display: block;
    margin-bottom: 6px;
    font-weight: 500;
    color: var(--secondary-color);
    font-size: 0.95rem;
}

.form-control {
    width: 100%;
    padding: 11px 12px;
    border: 1px solid var(--border-soft);
    border-radius: var(--radius-md);
    font-family: inherit;
    font-size: 0.95rem;
    transition: border-color var(--transition-normal), box-shadow var(--transition-normal), background-color var(--transition-fast);
    background-color: #fbfcff;
}

.form-control:focus {
    outline: none;
    border-color: var(--primary-color);
    box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.18);
    background-color: #ffffff;
}

.form-control::placeholder {
    color: #bdc3c7;
    font-size: 0.9rem;
}

textarea.form-control {
    resize: vertical;
    min-height: 90px;
}

.btn-submit {
    background-color: var(--success);
    color: #ffffff;
    padding: 11px 20px;
    border: none;
    border-radius: var(--radius-md);
    font-size: 1rem;
    cursor: pointer;
    font-weight: 600;
    width: 100%;
    margin-top: 5px;
    box-shadow: 0 6px 16px rgba(46, 204, 113, 0.35);
    transition: background-color var(--transition-fast), transform var(--transition-fast), box-shadow var(--transition-fast);
}

.btn-submit:hover {
    background-color: #27ae60;
    transform: translateY(-1px);
    box-shadow: 0 8px 18px rgba(46, 204, 113, 0.4);
}

/* ---------------- Show Task (Details) ---------------- */

.task-detail-header {
    border-bottom: 1px solid #ecf0f1;
    padding-bottom: 18px;
    margin-bottom: 18px;
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 10px;
}

.detail-row {
    display: flex;
    margin-bottom: 12px;
    border-bottom: 1px dashed #ecf0f1;
    padding-bottom: 8px;
    gap: 10px;
}

.detail-label {
    font-weight: 600;
    width: 180px;
    color: var(--muted-text);
    font-size: 0.9rem;
    display: flex;
    align-items: center;
    gap: 6px;
}

.detail-label i {
    color: var(--primary-color);
}

.detail-value {
    flex: 1;
    font-size: 1rem;
    color: var(--secondary-color);
}

.btn-back {
    background: #f9fafc;
    border: 1px solid #dde3ee;
    padding: 7px 14px;
    border-radius: var(--radius-sm);
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    color: var(--muted-text);
    font-size: 0.9rem;
    margin-bottom: 15px;
    transition: background-color var(--transition-fast), border-color var(--transition-fast), color var(--transition-fast), transform var(--transition-fast);
}

.btn-back:hover {
    background: #ffffff;
    border-color: var(--primary-color);
    color: var(--primary-color);
    transform: translateY(-1px);
}

/* ---------------- Responsive ---------------- */

@media (max-width: 768px) {
    nav {
        padding: 0 16px;
    }

    .nav-links {
        gap: 12px;
    }

    .btn-add {
        padding: 7px 14px;
        font-size: 0.85rem;
    }

    .container {
        padding: 0 15px 30px;
    }

    .hero-card {
        padding: 28px 18px;
    }

    .task-detail-header {
        flex-direction: column;
        align-items: flex-start;
    }

    .detail-row {
        flex-direction: column;
    }

    .detail-label {
        width: 100%;
    }

    table {
        font-size: 0.85rem;
    }

    th, td {
        padding: 10px 6px;
    }
}



    </style>
</head>
<body>

    {{-- Navbar بدون onclick --}}
    <nav>
        <div class="logo">
            <i class="fas fa-graduation-cap"></i>
            مدرستي
        </div>
        <ul class="nav-links">
            <li>
                <a href="{{ route('home') }}">
                    <i class="fas fa-home"></i> الرئيسية
                </a>
            </li>
            <li>
                <a href="{{ route('tasks.index') }}">
                    <i class="fas fa-list"></i> قائمة المهام
                </a>
            </li>
            <li>
                <a href="{{ route('tasks.create') }}" class="btn-add">
                    <i class="fas fa-plus"></i> إضافة مهمة
                </a>
            </li>
        </ul>
    </nav>

    <div class="container">
        {{-- هنا كل صفحة بتحط محتواها --}}
        @yield('content')
    </div>

</body>
</html>
