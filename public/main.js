document.addEventListener('DOMContentLoaded', function() {
    const sidebarToggleBtn = document.getElementById('sidebarToggleBtn');
    const sidebar = document.getElementById('sidebar');
    const profileToggleBtn = document.getElementById('profileToggleBtn');
    const profileToggleBtnText = document.getElementById('profileToggleBtnText');
    const profileDropDown = document.getElementById('ProfileDropDown');

    // Fungsi untuk toggle visibilitas sidebar
    function toggleSidebar() {
        if (sidebar) {
            sidebar.classList.toggle('-translate-x-full');
            sidebar.classList.toggle('translate-x-0');
        }
    }

    // Fungsi untuk toggle visibilitas dropdown profil
    function toggleProfileDropdown() {
        if (profileDropDown) {
            profileDropDown.classList.toggle('hidden');
        }
    }

    // Pastikan sidebarToggleBtn dan sidebar telah didefinisikan
    if (sidebarToggleBtn && sidebar) {
        sidebarToggleBtn.addEventListener('click', toggleSidebar);
    }

    // Pastikan profileToggleBtn dan profileToggleBtnText telah didefinisikan
    if (profileToggleBtn && profileToggleBtnText) {
        profileToggleBtn.addEventListener('click', toggleProfileDropdown);
        profileToggleBtnText.addEventListener('click', toggleProfileDropdown);
    }

    // Tutup dropdown ketika klik di luar elemen
    window.addEventListener('click', function(e) {
        if (!profileToggleBtn.contains(e.target) && 
            !profileToggleBtnText.contains(e.target) && 
            !profileDropDown.contains(e.target)) {
            profileDropDown.classList.add('hidden');
        }
    });
});
