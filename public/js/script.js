//
if (document.getElementById("v-home")) {
    alert("welcome to home page my friend");
}

const toggleOpen = document.getElementById('toggleOpen');
const toggleClose = document.getElementById('toggleClose');
const menu = document.getElementById('collapseMenu');

let lastFocusedElement = null;

function openMenu() {
    lastFocusedElement = document.activeElement;
    menu
        .classList
        .remove('hidden');
    toggleOpen.setAttribute('aria-expanded', 'true');

    // Move focus into menu
    menu.focus();
}

function closeMenu() {
    menu
        .classList
        .add('hidden');
    toggleOpen.setAttribute('aria-expanded', 'false');

    // Restore focus
    lastFocusedElement
        ?.focus();
}

toggleOpen.addEventListener('click', openMenu);
toggleClose.addEventListener('click', closeMenu);

document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && !menu.classList.contains('hidden')) {
        closeMenu();
    }
});

/* ==========================================================
   CONTACT FORM LOGIC & INTERACTIVITY
   ================================================---------- */

document.addEventListener('DOMContentLoaded', function () {
    const contactForm = document.getElementById('contactForm');
    const pesanInput = document.getElementById('pesan');
    const charCount = document.getElementById('charCount');
    
    const alertSuccess = document.getElementById('alertSuccess');
    const alertError = document.getElementById('alertError');
    const alertMessage = document.getElementById('alertMessage');
    const alertErrorMessage = document.getElementById('alertErrorMessage');

    const closeSuccessAlert = document.getElementById('closeSuccessAlert');
    const closeErrorAlert = document.getElementById('closeErrorAlert');

    // 1. Fitur Hitung Karakter Pesan (Real-time Character Counter)
    if (pesanInput && charCount) {
        pesanInput.addEventListener('input', function () {
            const currentLength = this.value.length;
            
            // Batasi maksimal 500 karakter
            if (currentLength > 500) {
                this.value = this.value.substring(0, 500);
            }
            
            charCount.textContent = this.value.length;
            
            // Ubah warna indikator jika mendekati batas
            if (this.value.length >= 450) {
                charCount.classList.add('text-amber-400', 'font-bold');
            } else {
                charCount.classList.remove('text-amber-400', 'font-bold');
            }
        });
    }

    // 2. Tombol Tutup Alert Manual
    if (closeSuccessAlert) {
        closeSuccessAlert.addEventListener('click', function () {
            alertSuccess.classList.add('hidden');
        });
    }

    if (closeErrorAlert) {
        closeErrorAlert.addEventListener('click', function () {
            alertError.classList.add('hidden');
        });
    }

    // 3. Validasi Form saat tombol Kirim Pesan ditekan
    if (contactForm) {
        contactForm.addEventListener('submit', function (e) {
            e.preventDefault();

            const nama = document.getElementById('nama');
            const email = document.getElementById('email');
            const pesan = document.getElementById('pesan');

            const errorNama = document.getElementById('errorNama');
            const errorEmail = document.getElementById('errorEmail');
            const errorPesan = document.getElementById('errorPesan');

            let isValid = true;

            // Sembunyikan alert sebelumnya
            alertSuccess.classList.add('hidden');
            alertError.classList.add('hidden');

            // Validasi Nama (minimal 3 karakter)
            if (nama.value.trim().length < 3) {
                errorNama.classList.remove('hidden');
                nama.classList.add('border-rose-500');
                isValid = false;
            } else {
                errorNama.classList.add('hidden');
                nama.classList.remove('border-rose-500');
            }

            // Validasi Format Email Sederhana
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email.value.trim())) {
                errorEmail.classList.remove('hidden');
                email.classList.add('border-rose-500');
                isValid = false;
            } else {
                errorEmail.classList.add('hidden');
                email.classList.remove('border-rose-500');
            }

            // Validasi Pesan (minimal 10 karakter)
            if (pesan.value.trim().length < 10) {
                errorPesan.classList.remove('hidden');
                pesan.classList.add('border-rose-500');
                isValid = false;
            } else {
                errorPesan.classList.add('hidden');
                pesan.classList.remove('border-rose-500');
            }

            // Hasil Validasi
            if (!isValid) {
                alertErrorMessage.textContent = "Mohon periksa kembali input form Anda yang belum sesuai.";
                alertError.classList.remove('hidden');
                // Scroll ke atas agar alert terlihat
                window.scrollTo({ top: 150, behavior: 'smooth' });
            } else {
                // Simulasi Pengiriman Berhasil (bisa disesuaikan dengan AJAX / Fetch ke Laravel Controller)
                alertMessage.textContent = `Terima kasih, ${nama.value}! Pesan Anda berhasil dikirim dan akan segera saya respons.`;
                alertSuccess.classList.remove('hidden');
                alertError.classList.add('hidden');
                
                // Reset form otomatis setelah berhasil
                contactForm.reset();
                if (charCount) charCount.textContent = '0';
                
                window.scrollTo({ top: 150, behavior: 'smooth' });
            }
        });
    }

    // 4. Handle Tombol Reset Form
    const resetBtn = document.getElementById('resetBtn');
    if (resetBtn && contactForm) {
        resetBtn.addEventListener('click', function () {
            document.querySelectorAll('[id^="error"]').forEach(el => el.classList.add('hidden'));
            document.querySelectorAll('.custom-input').forEach(el => el.classList.remove('border-rose-500'));
            alertSuccess.classList.add('hidden');
            alertError.classList.add('hidden');
            if (charCount) charCount.textContent = '0';
        });
    }
});
