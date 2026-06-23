<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Portal</title>
    <!-- Google Fonts for better typography -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased selection:bg-green-600 selection:text-white">

<!-- Main Modal Wrapper -->
<!-- Main Modal Wrapper -->
<div id="registerModal" class="fixed inset-0 bg-slate-900/50 backdrop-blur-sm z-50 flex items-center justify-center hidden">
    
    <!-- Modal Content Box -->
    <div class="bg-white rounded-2xl shadow-xl w-full max-w-lg p-6 relative mx-4 max-h-[90vh] overflow-y-auto">
        
        <!-- Close Button -->
        <button id="closeModalBtn" class="absolute top-4 right-4 text-slate-400 hover:text-slate-600 font-bold text-xl">&times;</button>
        
        <h3 class="text-xl font-bold text-slate-900 mb-1">User Registration Form</h3>
        <p class="text-xs text-slate-500 mb-4">Please verify or fill up your profile information below.</p>
        
        <!-- Registration Form -->
        <form id="registrarForm" class="space-y-4">
            
            <!-- Grid Row: First Name & Last Name -->
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1">First Name</label>
                    <input type="text" id="firstName" class="w-full px-3 py-2 border border-slate-200 rounded-lg text-sm focus:outline-none focus:border-amber-400" required>
                </div>
                <div>
                    <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1">Last Name</label>
                    <input type="text" id="lastName" class="w-full px-3 py-2 border border-slate-200 rounded-lg text-sm focus:outline-none focus:border-amber-400" required>
                </div>
            </div>

            <!-- Single Row: Email Address -->
            <div>
                <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1">Email Address</label>
                <input type="email" id="userEmail" class="w-full px-3 py-2 border border-slate-200 rounded-lg text-sm focus:outline-none focus:border-amber-400" required>
            </div>

            <!-- Grid Row: Phone & Birthdate -->
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1">Contact Number</label>
                    <input type="text" id="userPhone" class="w-full px-3 py-2 border border-slate-200 rounded-lg text-sm focus:outline-none focus:border-amber-400">
                </div>
                <div>
                    <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1">Birthdate</label>
                    <input type="date" id="userBirthdate" class="w-full px-3 py-2 border border-slate-200 rounded-lg text-sm focus:outline-none focus:border-amber-400">
                </div>
            </div>

            <!-- Single Row: Complete Address -->
            <div>
                <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1">Home Address</label>
                <input type="text" id="userAddress" class="w-full px-3 py-2 border border-slate-200 rounded-lg text-sm focus:outline-none focus:border-amber-400">
            </div>

            <!-- Action Buttons -->
            <div class="pt-2">
                <button type="submit" class="w-full bg-amber-400 hover:bg-amber-300 text-slate-900 py-2.5 rounded-xl font-bold text-sm shadow-md transition-all duration-200 hover:-translate-y-0.5 active:translate-y-0">
                    Submit Registration
                </button>
            </div>
        </form>
    </div>
</div>



    <!-- Navbar -->
    <nav class="sticky top-0 z-50 bg-green-800/95 backdrop-blur-md border-b border-green-700/50 shadow-sm transition-all">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo & Brand -->
                <div class="flex items-center gap-4 group cursor-pointer">
                    <div class="bg-white p-1.5 rounded-xl shadow-inner transition-transform group-hover:scale-105">
                        <img src="{{ asset('images/logo.png') }}" alt="Barangay Logo" class="w-12 h-12 object-contain">
                    </div>
                    <div>
                        <h1 class="text-white font-extrabold text-xl tracking-tight leading-tight">Barangay Portal</h1>
                        <p class="text-green-200 text-xs font-medium tracking-wide">Digital Community Services</p>
                    </div>
                </div>
                
                <!-- Action Buttons -->
                <div class="flex items-center gap-3">
                    <a href="{{ route('login') }}" class="text-white hover:text-green-100 px-5 py-2.5 rounded-xl font-semibold text-sm transition-all duration-200 border border-transparent hover:border-green-600">
                        Login
                    </a>
                    <a href="javascript:void(0)" id="registerBtn" class="bg-amber-400 hover:bg-amber-300 text-slate-900 px-5 py-2.5 rounded-xl font-bold text-sm shadow-md shadow-amber-500/10 transition-all duration-200 hover:-translate-y-0.5 active:translate-y-0">
                        Register
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-gradient-to-br from-green-800 via-green-700 to-emerald-600 text-white py-24 lg:py-32">
        <!-- Abstract Background Shapes -->
        <div class="absolute inset-0 opacity-10 pointer-events-none">
            <div class="absolute -top-40 -right-40 w-96 h-96 rounded-full bg-white blur-3xl"></div>
            <div class="absolute -bottom-20 -left-20 w-80 h-80 rounded-full bg-emerald-300 blur-3xl"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-12 gap-12 items-center">
                <!-- Hero Text -->
                <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                    <span class="inline-flex items-center gap-1.5 bg-green-900/40 text-green-200 px-3 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider border border-green-600/30">
                        🇵🇭 Transact Anywhere, Anytime
                    </span>
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black tracking-tight leading-none text-white">
                        Welcome to the <br class="hidden sm:inline">
                        <span class="text-amber-300">Barangay Digital Portal</span>
                    </h1>
                    <p class="text-base sm:text-lg text-emerald-50 max-w-2xl mx-auto lg:mx-0 leading-relaxed font-normal">
                        Access official barangay services online, request documents, stay updated with real-time community announcements, and connect with your local leaders seamlessly.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start pt-2">
                        <a href="#services" class="bg-amber-400 hover:bg-amber-300 text-slate-900 px-8 py-4 rounded-xl font-bold text-center shadow-lg shadow-amber-500/20 transition-all hover:-translate-y-0.5">
                            Explore Services
                        </a>
                        <a href="#announcements" class="bg-white/10 hover:bg-white/20 text-white border border-white/20 backdrop-blur px-8 py-4 rounded-xl font-semibold text-center transition-all hover:border-white/40">
                            Latest News
                        </a>
                    </div>
                </div>
                
                <!-- Hero Image -->
                <div class="lg:col-span-5 hidden lg:flex justify-center relative animate-fade-in">
                    <div class="absolute inset-0 bg-gradient-to-tr from-emerald-500/20 to-transparent rounded-3xl blur-2xl"></div>
                    <img src="{{ asset('images/barangay-hero.png') }}" alt="Barangay Hall Visual" class="w-full max-w-md drop-shadow-2xl relative z-10 transform transition-transform duration-500 hover:scale-102">
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="relative -mt-10 z-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white border border-slate-100 rounded-2xl shadow-xl p-8 sm:p-10 grid grid-cols-2 md:grid-cols-4 gap-8 md:gap-4 divide-y-0 divide-x-0 md:divide-x divide-slate-100">
            <div class="text-center p-2">
                <span class="text-4xl sm:text-5xl font-black text-green-700 tracking-tight block mb-1">12,500</span>
                <span class="text-xs sm:text-sm font-bold text-slate-400 uppercase tracking-wider">Total Residents</span>
            </div>
            <div class="text-center p-2 md:pl-4">
                <span class="text-4xl sm:text-5xl font-black text-green-700 tracking-tight block mb-1">3,450</span>
                <span class="text-xs sm:text-sm font-bold text-slate-400 uppercase tracking-wider">Households</span>
            </div>
            <div class="text-center p-2 md:pl-4">
                <span class="text-4xl sm:text-5xl font-black text-green-700 tracking-tight block mb-1">125</span>
                <span class="text-xs sm:text-sm font-bold text-slate-400 uppercase tracking-wider">Pending Requests</span>
            </div>
            <div class="text-center p-2 md:pl-4">
                <span class="text-4xl sm:text-5xl font-black text-emerald-600 tracking-tight block mb-1">24/7</span>
                <span class="text-xs sm:text-sm font-bold text-slate-400 uppercase tracking-wider">Online Service</span>
            </div>
        </div>
    </section>

    <!-- NEW SECTION: Quick Document Tracker -->
    <section class="pt-20 pb-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-r from-slate-900 to-slate-800 rounded-3xl p-8 sm:p-12 shadow-lg relative overflow-hidden">
            <div class="absolute inset-0 opacity-5 bg-[radial-gradient(#fff_1px,transparent_1px)] [background-size:16px_16px]"></div>
            <div class="grid lg:grid-cols-12 gap-8 items-center relative z-10">
                <div class="lg:col-span-5 text-center lg:text-left">
                    <span class="text-emerald-400 font-bold text-xs uppercase tracking-widest block mb-2">Live Status Tracking</span>
                    <h3 class="text-2xl sm:text-3xl font-black text-white tracking-tight">Suriin ang Status ng Dokumento</h3>
                    <p class="text-slate-400 text-sm mt-2 max-w-sm mx-auto lg:mx-0">I-type ang iyong Document Request Reference Number upang malaman kung ito ay aprubado na.</p>
                </div>
                <div class="lg:col-span-7">
                    <form onsubmit="event.preventDefault();" class="flex flex-col sm:flex-row gap-3 bg-white/5 p-2 rounded-2xl border border-white/10 backdrop-blur-sm">
                        <input id='docTrackerVal' type="text" placeholder="Ipasok ang Reference ID (gaya ng: BRGY-2026-XXXX)" class="w-full bg-slate-900/50 border border-slate-700/50 rounded-xl px-4 py-3.5 text-sm font-medium text-white placeholder-slate-500 focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition-all">
                        <button id='docTracker' type="submit" class="bg-emerald-500 hover:bg-emerald-600 text-slate-950 font-bold px-6 py-3.5 rounded-xl text-sm transition-colors whitespace-nowrap">
                            I-track Ngayon
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
<section id="services" class="py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="text-center max-w-3xl mx-auto mb-16">
        <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
            Online Services Offered
        </h2>

        <div class="w-12 h-1 bg-green-600 mx-auto mt-4 rounded-full"></div>

        <p class="text-slate-500 mt-4 text-base sm:text-lg">
            Fast, secure, and convenient processing of barangay certificates and transactions right at your fingertips.
        </p>
    </div>

    <div class="grid md:grid-cols-3 gap-8">

        <!-- Service 1 -->
        <div class="group bg-white rounded-2xl border border-slate-100 shadow-sm p-8 hover:shadow-xl hover:border-green-100 transition-all duration-300">
            <div class="text-4xl">📄</div>
            <h3 class="font-bold text-xl mt-4">Barangay Clearance</h3>
            <p class="text-slate-500 mt-2">Apply and receive clearance certificates online.</p>
        </div>

        <!-- Service 2 -->
        <div class="group bg-white rounded-2xl border border-slate-100 shadow-sm p-8 hover:shadow-xl hover:border-green-100 transition-all duration-300">
            <div class="text-4xl">🏠</div>
            <h3 class="font-bold text-xl mt-4">Certificate of Residency</h3>
            <p class="text-slate-500 mt-2">Proof of residency issuance made easy.</p>
        </div>

        <!-- Service 3 -->
        <div class="group bg-white rounded-2xl border border-slate-100 shadow-sm p-8 hover:shadow-xl hover:border-green-100 transition-all duration-300">
            <div class="text-4xl">🏢</div>
            <h3 class="font-bold text-xl mt-4">Business Clearance</h3>
            <p class="text-slate-500 mt-2">Register and request business permits online.</p>
        </div>

    </div>

</section>

<script>
document.addEventListener("DOMContentLoaded", function () {

const docTracker = document.getElementById("docTracker");

if (docTracker) {
    docTracker.addEventListener("click", function () {
        const val = document.getElementById("docTrackerVal").value;
        alert(val);
    });
}


const registerBtn = document.getElementById("registerBtn");
    const registerModal = document.getElementById("registerModal");
    const closeModalBtn = document.getElementById("closeModalBtn");

    if (registerBtn) {
        registerBtn.addEventListener("click", function (e) {
            e.preventDefault(); // Pinipigilan ang pag-jump o reload ng page

            // Opsyonal: Kunin ang ID mula sa isang input tracker field kung mayroon man
            const trackerInput = document.getElementById("docTrackerVal");
            const lookupId = trackerInput ? trackerInput.value : "101"; // Default o mock ID muna

            // Buksan muna ang modal (makikita ng user na naglo-load)
            registerModal.classList.remove("hidden");

            // AJAX Request gamit ang Fetch API papuntang Laravel backend
            fetch('/get-registrar-data', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ lookup_id: lookupId })
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    // Kusang pofill-up-an ang mga input fields sa loob ng modal
                    document.getElementById("studentName").value = data.payload.name;
                    document.getElementById("studentCourse").value = data.payload.course;
                    document.getElementById("docType").value = data.payload.document;
                } else {
                    alert("Error: " + data.message);
                    registerModal.classList.add("hidden"); // Isara kung walang nahanap
                }
            })
            .catch(error => {
                console.error("Error fetching registrar data:", error);
                registerModal.classList.add("hidden");
            });
        });
    }

    // Isara ang modal kapag clinic-click ang 'X' button
    closeModalBtn.onclick = () => registerModal.classList.add("hidden");

    // Isara ang modal kapag clinic-click ang labas ng modal box
    window.onclick = (e) => {
        if (e.target === registerModal) {
            registerModal.classList.add("hidden");
        }
    }

});
</script>