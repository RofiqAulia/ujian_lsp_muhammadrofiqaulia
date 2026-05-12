<x-filament-panels::page>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');

    .pg-wrap { font-family: 'Inter', sans-serif; }

    /* ── Hero ── */
    .pg-hero {
        position: relative;
        border-radius: 1.5rem;
        overflow: hidden;
        padding: 3rem 2.5rem;
        background: linear-gradient(135deg, #f59e0b 0%, #ef4444 50%, #8b5cf6 100%);
        box-shadow: 0 20px 60px -10px rgba(245,158,11,.45);
        margin-bottom: 2rem;
    }
    .pg-hero::before {
        content: '';
        position: absolute;
        inset: 0;
        background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Ccircle cx='30' cy='30' r='28'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E") repeat;
    }
    .pg-hero-badge {
        display: inline-flex;
        align-items: center;
        gap: .4rem;
        background: rgba(255,255,255,.2);
        backdrop-filter: blur(8px);
        border: 1px solid rgba(255,255,255,.3);
        border-radius: 999px;
        padding: .3rem 1rem;
        font-size: .75rem;
        font-weight: 600;
        color: #fff;
        letter-spacing: .05em;
        text-transform: uppercase;
        margin-bottom: 1rem;
    }
    .pg-hero h1 {
        font-size: 2.25rem;
        font-weight: 800;
        color: #fff;
        line-height: 1.2;
        margin: 0 0 .75rem;
        position: relative;
    }
    .pg-hero p {
        font-size: 1rem;
        color: rgba(255,255,255,.85);
        max-width: 520px;
        position: relative;
    }
    .pg-hero-orb {
        position: absolute;
        right: -60px;
        top: -60px;
        width: 280px;
        height: 280px;
        border-radius: 50%;
        background: rgba(255,255,255,.08);
        pointer-events: none;
    }
    .pg-hero-orb2 {
        position: absolute;
        right: 80px;
        bottom: -80px;
        width: 200px;
        height: 200px;
        border-radius: 50%;
        background: rgba(255,255,255,.06);
        pointer-events: none;
    }

    /* ── Stats Row ── */
    .pg-stats {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1rem;
        margin-bottom: 2rem;
    }
    .pg-stat {
        border-radius: 1.25rem;
        padding: 1.25rem 1.5rem;
        display: flex;
        align-items: center;
        gap: 1rem;
        border: 1px solid rgba(0,0,0,.06);
        background: #fff;
        box-shadow: 0 4px 20px rgba(0,0,0,.06);
        transition: transform .2s, box-shadow .2s;
    }
    .dark .pg-stat { background: #1e293b; border-color: rgba(255,255,255,.07); }
    .pg-stat:hover { transform: translateY(-3px); box-shadow: 0 10px 30px rgba(0,0,0,.1); }
    .pg-stat-icon {
        width: 48px; height: 48px;
        border-radius: .9rem;
        display: flex; align-items: center; justify-content: center;
        font-size: 1.4rem;
        flex-shrink: 0;
    }
    .pg-stat-label { font-size: .75rem; color: #94a3b8; font-weight: 500; }
    .pg-stat-value { font-size: 1.1rem; font-weight: 700; color: #1e293b; }
    .dark .pg-stat-value { color: #f1f5f9; }

    /* ── Section Title ── */
    .pg-section-title {
        font-size: 1.1rem;
        font-weight: 700;
        color: #1e293b;
        display: flex;
        align-items: center;
        gap: .6rem;
        margin-bottom: 1rem;
    }
    .dark .pg-section-title { color: #f1f5f9; }
    .pg-section-title-bar {
        width: 4px; height: 20px;
        border-radius: 99px;
    }

    /* ── Step Cards ── */
    .pg-steps { display: flex; flex-direction: column; gap: 1rem; margin-bottom: 2rem; }
    .pg-step {
        display: flex;
        gap: 1.25rem;
        align-items: flex-start;
        background: #fff;
        border: 1px solid rgba(0,0,0,.06);
        border-radius: 1.25rem;
        padding: 1.5rem;
        box-shadow: 0 2px 12px rgba(0,0,0,.05);
        transition: transform .2s, box-shadow .2s;
        position: relative;
        overflow: hidden;
    }
    .dark .pg-step { background: #1e293b; border-color: rgba(255,255,255,.07); }
    .pg-step:hover { transform: translateX(4px); box-shadow: 0 8px 28px rgba(0,0,0,.1); }
    .pg-step-num {
        min-width: 44px; height: 44px;
        border-radius: .9rem;
        font-size: 1.1rem;
        font-weight: 800;
        color: #fff;
        display: flex; align-items: center; justify-content: center;
        flex-shrink: 0;
    }
    .pg-step-content h3 {
        font-size: .95rem;
        font-weight: 700;
        color: #1e293b;
        margin: 0 0 .5rem;
    }
    .dark .pg-step-content h3 { color: #f1f5f9; }
    .pg-step-content ul, .pg-step-content ol {
        margin: 0;
        padding-left: 1.25rem;
        font-size: .875rem;
        color: #64748b;
        line-height: 1.8;
    }
    .dark .pg-step-content ul, .dark .pg-step-content ol { color: #94a3b8; }
    .pg-step-accent {
        position: absolute;
        right: -20px; top: -20px;
        width: 80px; height: 80px;
        border-radius: 50%;
        opacity: .07;
    }

    /* ── Feature Grid ── */
    .pg-features {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1rem;
        margin-bottom: 2rem;
    }
    .pg-feature {
        border-radius: 1.25rem;
        padding: 1.5rem;
        border: 1px solid rgba(0,0,0,.06);
        background: #fff;
        box-shadow: 0 2px 12px rgba(0,0,0,.05);
        transition: transform .2s, box-shadow .2s;
    }
    .dark .pg-feature { background: #1e293b; border-color: rgba(255,255,255,.07); }
    .pg-feature:hover { transform: translateY(-3px); box-shadow: 0 10px 30px rgba(0,0,0,.1); }
    .pg-feature-icon {
        font-size: 1.75rem;
        margin-bottom: .75rem;
        display: block;
    }
    .pg-feature h3 {
        font-size: .9rem;
        font-weight: 700;
        color: #1e293b;
        margin: 0 0 .4rem;
    }
    .dark .pg-feature h3 { color: #f1f5f9; }
    .pg-feature p {
        font-size: .8rem;
        color: #64748b;
        margin: 0;
        line-height: 1.6;
    }
    .dark .pg-feature p { color: #94a3b8; }

    /* ── Tips ── */
    .pg-tips {
        border-radius: 1.25rem;
        padding: 1.75rem;
        background: linear-gradient(135deg, #fffbeb, #fef3c7);
        border: 1px solid #fcd34d;
        margin-bottom: 2rem;
    }
    .dark .pg-tips {
        background: linear-gradient(135deg, rgba(245,158,11,.12), rgba(245,158,11,.06));
        border-color: rgba(245,158,11,.3);
    }
    .pg-tip-item {
        display: flex;
        gap: .75rem;
        align-items: flex-start;
        font-size: .875rem;
        color: #92400e;
        padding: .5rem 0;
        border-bottom: 1px dashed rgba(245,158,11,.3);
    }
    .pg-tip-item:last-child { border-bottom: none; }
    .dark .pg-tip-item { color: #fcd34d; }
    .pg-tip-dot {
        width: 24px; height: 24px; border-radius: 50%;
        background: #f59e0b;
        color: #fff;
        font-size: .65rem;
        font-weight: 800;
        display: flex; align-items: center; justify-content: center;
        flex-shrink: 0;
        margin-top: 1px;
    }

    /* ── Developer Card ── */
    .pg-dev-card {
        border-radius: 1.5rem;
        overflow: hidden;
        box-shadow: 0 20px 60px -10px rgba(99,102,241,.25);
    }
    .pg-dev-header {
        background: linear-gradient(135deg, #6366f1, #8b5cf6, #ec4899);
        padding: 2rem 2.5rem 3.5rem;
        position: relative;
        overflow: hidden;
    }
    .pg-dev-header::before {
        content: '';
        position: absolute;
        inset: 0;
        background: url("data:image/svg+xml,%3Csvg width='80' height='80' viewBox='0 0 80 80' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none'%3E%3Ccircle cx='40' cy='40' r='38' stroke='white' stroke-opacity='0.05' stroke-width='1'/%3E%3C/g%3E%3C/svg%3E") repeat;
    }
    .pg-dev-avatar {
        width: 72px; height: 72px;
        border-radius: 50%;
        background: rgba(255,255,255,.2);
        backdrop-filter: blur(8px);
        border: 3px solid rgba(255,255,255,.4);
        display: flex; align-items: center; justify-content: center;
        font-size: 2rem;
        margin-bottom: 1rem;
        position: relative;
    }
    .pg-dev-header h2 {
        font-size: 1.4rem;
        font-weight: 800;
        color: #fff;
        margin: 0 0 .25rem;
        position: relative;
    }
    .pg-dev-header p {
        font-size: .85rem;
        color: rgba(255,255,255,.75);
        margin: 0;
        position: relative;
    }
    .pg-dev-body {
        background: #fff;
        margin-top: -1.5rem;
        border-radius: 1.5rem 1.5rem 0 0;
        padding: 2rem 2.5rem;
        position: relative;
    }
    .dark .pg-dev-body { background: #1e293b; }
    .pg-dev-row {
        display: flex;
        align-items: center;
        gap: 1rem;
        padding: .9rem 0;
        border-bottom: 1px solid rgba(0,0,0,.05);
    }
    .dark .pg-dev-row { border-color: rgba(255,255,255,.06); }
    .pg-dev-row:last-child { border-bottom: none; }
    .pg-dev-label {
        font-size: .75rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: .06em;
        color: #94a3b8;
        width: 80px;
        flex-shrink: 0;
    }
    .pg-dev-value {
        font-size: .95rem;
        font-weight: 700;
        color: #1e293b;
    }
    .dark .pg-dev-value { color: #f1f5f9; }
    .pg-dev-badge {
        display: inline-flex;
        align-items: center;
        gap: .3rem;
        background: linear-gradient(135deg, #6366f1, #8b5cf6);
        color: #fff;
        border-radius: 999px;
        padding: .25rem .85rem;
        font-size: .8rem;
        font-weight: 700;
    }

    @media (max-width: 640px) {
        .pg-stats { grid-template-columns: 1fr; }
        .pg-features { grid-template-columns: 1fr; }
        .pg-hero h1 { font-size: 1.5rem; }
    }
</style>

<div class="pg-wrap">

    {{-- ═══ HERO ═══ --}}
    <div class="pg-hero">
        <div class="pg-hero-orb"></div>
        <div class="pg-hero-orb2"></div>
        <div class="pg-hero-badge">
            <span>📖</span> Dokumentasi Resmi
        </div>
        <h1>Panduan Pengguna<br>Sistem Frozeria</h1>
        <p>Pelajari cara menggunakan sistem inventori Frozeria secara efisien. Panduan lengkap dari login hingga pengelolaan data.</p>
    </div>

    {{-- ═══ STATS ROW ═══ --}}
    <div class="pg-stats">
        <div class="pg-stat">
            <div class="pg-stat-icon" style="background: linear-gradient(135deg,#fef3c7,#fcd34d);">📦</div>
            <div>
                <div class="pg-stat-label">Fitur Utama</div>
                <div class="pg-stat-value">Manajemen Barang</div>
            </div>
        </div>
        <div class="pg-stat">
            <div class="pg-stat-icon" style="background: linear-gradient(135deg,#ede9fe,#c4b5fd);">🏷️</div>
            <div>
                <div class="pg-stat-label">Pengelompokan</div>
                <div class="pg-stat-value">Kategori Produk</div>
            </div>
        </div>
        <div class="pg-stat">
            <div class="pg-stat-icon" style="background: linear-gradient(135deg,#dcfce7,#86efac);">📊</div>
            <div>
                <div class="pg-stat-label">Monitoring</div>
                <div class="pg-stat-value">Dashboard Realtime</div>
            </div>
        </div>
    </div>

    {{-- ═══ LANGKAH-LANGKAH ═══ --}}
    <div class="pg-section-title">
        <div class="pg-section-title-bar" style="background: linear-gradient(#f59e0b, #ef4444);"></div>
        Langkah-Langkah Penggunaan
    </div>

    <div class="pg-steps">

        {{-- Step 1 --}}
        <div class="pg-step">
            <div class="pg-step-accent" style="background: #f59e0b;"></div>
            <div class="pg-step-num" style="background: linear-gradient(135deg,#f59e0b,#ef4444);">1</div>
            <div class="pg-step-content">
                <h3>🔐 Login ke Sistem</h3>
                <ol>
                    <li>Buka browser dan akses <strong>http://localhost:8000/admin</strong></li>
                    <li>Masukkan <strong>Email</strong> dan <strong>Password</strong> akun Anda</li>
                    <li>Klik tombol <strong>"Sign in"</strong> untuk masuk ke dasbor utama</li>
                    <li>Jika lupa password, hubungi administrator sistem</li>
                </ol>
            </div>
        </div>

        {{-- Step 2 --}}
        <div class="pg-step">
            <div class="pg-step-accent" style="background: #8b5cf6;"></div>
            <div class="pg-step-num" style="background: linear-gradient(135deg,#8b5cf6,#6366f1);">2</div>
            <div class="pg-step-content">
                <h3>🗂️ Memahami Navigasi Dashboard</h3>
                <ul>
                    <li><strong>Dashboard</strong> — Ringkasan statistik & daftar seluruh barang</li>
                    <li><strong>Kategori</strong> — Kelola pengelompokan produk</li>
                    <li><strong>Panduan Pengguna</strong> — Halaman dokumentasi ini</li>
                    <li>Gunakan <strong>sidebar kiri</strong> untuk berpindah antar menu</li>
                </ul>
            </div>
        </div>

        {{-- Step 3 --}}
        <div class="pg-step">
            <div class="pg-step-accent" style="background: #10b981;"></div>
            <div class="pg-step-num" style="background: linear-gradient(135deg,#10b981,#059669);">3</div>
            <div class="pg-step-content">
                <h3>🏷️ Mengelola Kategori</h3>
                <ul>
                    <li>Klik menu <strong>Kategori</strong> di sidebar</li>
                    <li>Klik tombol <strong>"Tambah Kategori"</strong> untuk menambah baru</li>
                    <li>Isi <em>nama kategori</em> lalu klik <strong>Simpan</strong></li>
                    <li>Klik ikon <strong>✏️ Edit</strong> untuk mengubah data kategori</li>
                    <li>Klik ikon <strong>🗑️ Hapus</strong> dan konfirmasi untuk menghapus</li>
                </ul>
            </div>
        </div>

        {{-- Step 4 --}}
        <div class="pg-step">
            <div class="pg-step-accent" style="background: #3b82f6;"></div>
            <div class="pg-step-num" style="background: linear-gradient(135deg,#3b82f6,#6366f1);">4</div>
            <div class="pg-step-content">
                <h3>📦 Mengelola Data Barang</h3>
                <ul>
                    <li>Daftar barang tampil di halaman <strong>Dashboard</strong></li>
                    <li>Klik <strong>"Tambah Barang"</strong> untuk menambahkan produk baru</li>
                    <li>Isi: <em>Nama, Kategori, Harga, Stok,</em> dan <em>Gambar</em> (opsional)</li>
                    <li>Status stok ditampilkan dengan <strong>badge warna</strong> — hijau (aman), merah (menipis)</li>
                    <li>Gunakan tombol aksi di baris tabel untuk <strong>Edit</strong> atau <strong>Hapus</strong></li>
                </ul>
            </div>
        </div>

        {{-- Step 5 --}}
        <div class="pg-step">
            <div class="pg-step-accent" style="background: #ec4899;"></div>
            <div class="pg-step-num" style="background: linear-gradient(135deg,#ec4899,#f43f5e);">5</div>
            <div class="pg-step-content">
                <h3>🔎 Pencarian & Filter Data</h3>
                <ul>
                    <li>Gunakan <strong>kolom Search</strong> di atas tabel untuk mencari barang/kategori</li>
                    <li>Klik header kolom untuk mengurutkan data (<em>ascending/descending</em>)</li>
                    <li>Gunakan <strong>Filter</strong> untuk menyaring berdasarkan kategori atau stok</li>
                </ul>
            </div>
        </div>

    </div>

    {{-- ═══ FITUR UNGGULAN ═══ --}}
    <div class="pg-section-title" style="margin-top:2rem;">
        <div class="pg-section-title-bar" style="background: linear-gradient(#6366f1, #8b5cf6);"></div>
        Fitur Unggulan
    </div>

    <div class="pg-features">
        <div class="pg-feature" style="border-top: 3px solid #f59e0b;">
            <span class="pg-feature-icon">⚡</span>
            <h3>Realtime Dashboard</h3>
            <p>Pantau total barang, total kategori, dan nilai inventori secara langsung di dasbor tanpa perlu refresh manual.</p>
        </div>
        <div class="pg-feature" style="border-top: 3px solid #10b981;">
            <span class="pg-feature-icon">🎨</span>
            <h3>Badge Status Stok</h3>
            <p>Indikator warna otomatis membantu Anda mengidentifikasi barang dengan stok menipis secara cepat dan visual.</p>
        </div>
        <div class="pg-feature" style="border-top: 3px solid #3b82f6;">
            <span class="pg-feature-icon">🖼️</span>
            <h3>Upload Gambar Produk</h3>
            <p>Unggah foto produk langsung dari form tambah/edit barang. Gambar tersimpan otomatis dan tampil di tabel.</p>
        </div>
        <div class="pg-feature" style="border-top: 3px solid #8b5cf6;">
            <span class="pg-feature-icon">💰</span>
            <h3>Format Mata Uang</h3>
            <p>Harga ditampilkan dalam format Rupiah (Rp) secara otomatis dengan pemisah ribuan yang rapi.</p>
        </div>
    </div>

    {{-- ═══ TIPS ═══ --}}
    <div class="pg-tips">
        <div class="pg-section-title" style="margin-bottom:.75rem;">
            <span style="font-size:1.2rem;">💡</span>
            Tips & Saran Penggunaan
        </div>
        <div class="pg-tip-item">
            <div class="pg-tip-dot">1</div>
            <span>Perbarui stok barang secara <strong>rutin</strong> agar data inventori tetap akurat dan terpercaya.</span>
        </div>
        <div class="pg-tip-item">
            <div class="pg-tip-dot">2</div>
            <span>Buat <strong>kategori dulu</strong> sebelum menambahkan barang agar pengelompokan lebih terstruktur.</span>
        </div>
        <div class="pg-tip-item">
            <div class="pg-tip-dot">3</div>
            <span>Gunakan fitur <strong>pencarian</strong> untuk menemukan produk tertentu dengan cepat di daftar yang panjang.</span>
        </div>
        <div class="pg-tip-item">
            <div class="pg-tip-dot">4</div>
            <span>Selalu klik <strong>Logout</strong> setelah selesai menggunakan sistem untuk menjaga keamanan akun Anda.</span>
        </div>
        <div class="pg-tip-item">
            <div class="pg-tip-dot">5</div>
            <span>Tambahkan <strong>gambar produk</strong> agar tampilan tabel lebih informatif dan mudah dikenali.</span>
        </div>
    </div>

    {{-- ═══ DEVELOPER CARD ═══ --}}
    <div class="pg-section-title" style="margin-top:2rem;">
        <div class="pg-section-title-bar" style="background: linear-gradient(#6366f1,#ec4899);"></div>
        Informasi Pengembang
    </div>

    <div class="pg-dev-card">
        <div class="pg-dev-header">
            <div class="pg-dev-avatar">👨‍💻</div>
            <h2>M. Rofiq Aulia</h2>
            <p>Pengembang Sistem Inventori Frozeria</p>
        </div>
        <div class="pg-dev-body">
            <div class="pg-dev-row">
                <div class="pg-dev-label">Nama</div>
                <div class="pg-dev-value">M. Rofiq Aulia</div>
            </div>
            <div class="pg-dev-row">
                <div class="pg-dev-label">NIM</div>
                <div class="pg-dev-value">
                    <span class="pg-dev-badge">🎓 2241720038</span>
                </div>
            </div>
            <div class="pg-dev-row">
                <div class="pg-dev-label">Kelas</div>
                <div class="pg-dev-value">
                    <span class="pg-dev-badge">🏫 4D</span>
                </div>
            </div>
            <div class="pg-dev-row">
                <div class="pg-dev-label">Sistem</div>
                <div class="pg-dev-value">Frozeria Inventory Management</div>
            </div>
            <div class="pg-dev-row">
                <div class="pg-dev-label">Stack</div>
                <div class="pg-dev-value">Laravel • Filament v3 • MySQL</div>
            </div>
        </div>
    </div>

    <div style="text-align:center; padding: 2rem 0 .5rem; font-size:.8rem; color:#94a3b8;">
        © 2025 Frozeria — Dibuat dengan ❤️ oleh M. Rofiq Aulia
    </div>

</div>

</x-filament-panels::page>
