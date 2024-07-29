<x-nav-link href="/admin" :active="request()->is('admin')">Home</x-nav-link>
<x-nav-link href="/admin/peserta" :active="request()->is('admin/peserta')">Rekap Peserta</x-nav-link>
<x-nav-link href="/admin/nilai" :active="request()->is('admin/nilai')">Rekap Nilai</x-nav-link>
<x-nav-link href="/admin/liveskor" :active="request()->is('admin/liveskor')">Liveskor</x-nav-link>