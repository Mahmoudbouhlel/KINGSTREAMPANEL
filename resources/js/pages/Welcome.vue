<script setup lang="ts">
import AppLogoIcon from '@/components/AppLogoIcon.vue';
import { Link, Head } from '@inertiajs/vue3';
</script>

<template>
<div class="min-h-screen relative overflow-hidden bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900">
    <Head title="Welcome to KingStreamPanel TN - Premium IPTV & Digital Services" />

    <!-- Animated Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
    <div class="absolute -top-20 -right-20 sm:-top-40 sm:-right-40 w-40 h-40 sm:w-80 sm:h-80 bg-purple-500/20 rounded-full blur-3xl animate-pulse"></div>
    <div class="absolute -bottom-20 -left-20 sm:-bottom-40 sm:-left-40 w-40 h-40 sm:w-80 sm:h-80 bg-blue-500/20 rounded-full blur-3xl animate-pulse delay-1000"></div>
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-48 h-48 sm:w-96 sm:h-96 bg-pink-500/10 rounded-full blur-3xl animate-pulse delay-500"></div>
    </div>

    <!-- Main Content -->
    <div class="relative z-10 min-h-screen flex flex-col">
    <!-- Header -->
   <header class="p-4 sm:p-6 flex flex-col sm:flex-row justify-between items-center gap-4 sm:gap-0 backdrop-blur-sm bg-white/5 border-b border-white/10">
    <!-- Logo + Title -->
    <div class="flex items-center gap-3">
      <div class="h-10 w-10 sm:h-12 sm:w-12 flex items-center justify-center rounded-xl bg-gradient-to-br from-purple-500 to-pink-500 shadow-lg overflow-hidden">
        <img
          src="https://img.pikbest.com/origin/09/25/73/25qpIkbEsT5w8.png!w700wp"
          alt="KingStream Logo"
          class="h-7 w-7 sm:h-8 sm:w-8 object-contain"
        />
      </div>
      <span class="text-lg sm:text-xl font-bold text-white">KingStreamPanel</span>
    </div>

    <!-- Right side: Country + Auth buttons -->
    <div class="flex flex-col sm:flex-row items-center gap-4 sm:gap-6 w-full sm:w-auto">
      <!-- Tunisia Flag -->
      <div class="flex items-center gap-3 sm:gap-4">
        <img
          src="https://upload.wikimedia.org/wikipedia/commons/c/ce/Flag_of_Tunisia.svg"
          alt="Tunisia"
          class="h-5 w-7 sm:h-6 sm:w-8 rounded shadow-lg ring-2 ring-white/20"
        />
        <span class="text-xs sm:text-sm text-white/80 font-medium">Tunisia</span>
      </div>

      <!-- Auth Links -->
      <div class="flex items-center gap-2 sm:gap-3">
        <Link
          href="/login"
          class="px-3 py-2 sm:px-4 sm:py-2 text-white/90 hover:text-white font-medium text-xs sm:text-sm transition-colors duration-200 hover:bg-white/10 rounded-lg"
        >
          Login
        </Link>
        <Link
          href="/register"
          class="px-3 py-2 sm:px-4 sm:py-2 bg-gradient-to-r from-purple-600 to-pink-600 text-white font-medium text-xs sm:text-sm rounded-lg hover:from-purple-500 hover:to-pink-500 transition-all duration-200 hover:scale-105 shadow-lg"
        >
          Sign Up
        </Link>
      </div>
    </div>
  </header>

    <!-- Hero Section -->
    <main class="flex-1 flex items-center justify-center p-4 sm:p-6">
        <div class="max-w-6xl mx-auto text-center">
        <!-- Hero Title -->
        <div class="mb-6 sm:mb-8">
            <h1 class="text-3xl sm:text-5xl md:text-7xl font-black text-transparent bg-clip-text bg-gradient-to-r from-white via-purple-200 to-pink-200 mb-3 sm:mb-4 tracking-tight leading-tight">
            KINGSTREAM
            <span class="block text-2xl sm:text-4xl md:text-6xl mt-1 sm:mt-2 text-purple-300">PANEL TN</span>
            </h1>
            <p class="text-base sm:text-xl md:text-2xl text-white/70 max-w-3xl mx-auto leading-relaxed px-2">
            Your premium gateway to <span class="text-purple-300 font-semibold">IPTV</span>,
            <span class="text-pink-300 font-semibold">streaming services</span>, and
            <span class="text-blue-300 font-semibold">digital entertainment</span> in Tunisia
            </p>
        </div>

        <!-- Features Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 mb-8 sm:mb-12">
            <div class="group p-4 sm:p-6 rounded-2xl bg-gradient-to-br from-white/10 to-white/5 backdrop-blur-sm border border-white/10 hover:from-purple-500/20 hover:to-purple-600/10 transition-all duration-300 hover:scale-105 hover:shadow-2xl">
            <div class="text-3xl sm:text-4xl mb-3 sm:mb-4">🎬</div>
            <h3 class="text-lg sm:text-xl font-bold text-white mb-2">Premium IPTV</h3>
            <p class="text-white/70 text-xs sm:text-sm leading-relaxed">Ultra HD 4K streaming with global channel access and lightning-fast delivery</p>
            </div>

            <div class="group p-4 sm:p-6 rounded-2xl bg-gradient-to-br from-white/10 to-white/5 backdrop-blur-sm border border-white/10 hover:from-green-500/20 hover:to-green-600/10 transition-all duration-300 hover:scale-105 hover:shadow-2xl">
            <div class="text-3xl sm:text-4xl mb-3 sm:mb-4">⚽</div>
            <h3 class="text-lg sm:text-xl font-bold text-white mb-2">BINS SPORT</h3>
            <p class="text-white/70 text-xs sm:text-sm leading-relaxed">Live sports coverage with all major leagues, matches, and tournaments worldwide</p>
            </div>

            <div class="group p-4 sm:p-6 rounded-2xl bg-gradient-to-br from-white/10 to-white/5 backdrop-blur-sm border border-white/10 hover:from-red-500/20 hover:to-red-600/10 transition-all duration-300 hover:scale-105 hover:shadow-2xl">
            <div class="text-3xl sm:text-4xl mb-3 sm:mb-4">🎭</div>
            <h3 class="text-lg sm:text-xl font-bold text-white mb-2">Streaming Giants</h3>
            <p class="text-white/70 text-xs sm:text-sm leading-relaxed">Netflix, Disney+, Prime Video and more at unbeatable wholesale prices</p>
            </div>

            <div class="group p-4 sm:p-6 rounded-2xl bg-gradient-to-br from-white/10 to-white/5 backdrop-blur-sm border border-white/10 hover:from-yellow-500/20 hover:to-yellow-600/10 transition-all duration-300 hover:scale-105 hover:shadow-2xl">
            <div class="text-3xl sm:text-4xl mb-3 sm:mb-4">🎮</div>
            <h3 class="text-lg sm:text-xl font-bold text-white mb-2">Digital Cards</h3>
            <p class="text-white/70 text-xs sm:text-sm leading-relaxed">PSN, Xbox, Steam, Google Play gift cards at wholesale rates with instant delivery</p>
            </div>
        </div>

        <!-- Stats Section -->
        <div class="grid grid-cols-2 sm:flex sm:flex-wrap justify-center gap-4 sm:gap-8 mb-8 sm:mb-12 p-4 sm:p-6 rounded-2xl bg-gradient-to-r from-white/5 to-white/10 backdrop-blur-sm border border-white/10">
            <div class="text-center">
            <div class="text-2xl sm:text-3xl font-black text-purple-300">24/7</div>
            <div class="text-white/70 text-xs sm:text-sm">Support</div>
            </div>
            <div class="text-center">
            <div class="text-2xl sm:text-3xl font-black text-pink-300">99.9%</div>
            <div class="text-white/70 text-xs sm:text-sm">Uptime</div>
            </div>
            <div class="text-center">
            <div class="text-2xl sm:text-3xl font-black text-blue-300">1000+</div>
            <div class="text-white/70 text-xs sm:text-sm">Channels</div>
            </div>
            <div class="text-center">
            <div class="text-2xl sm:text-3xl font-black text-green-300">Instant</div>
            <div class="text-white/70 text-xs sm:text-sm">Delivery</div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center px-4">
            <Link
            href="tel:+28981448"
            class="group relative px-6 py-3 sm:px-8 sm:py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-bold text-base sm:text-lg rounded-2xl shadow-2xl hover:from-blue-500 hover:to-purple-500 transition-all duration-300 hover:scale-105 hover:shadow-blue-500/25 w-full sm:w-auto text-center"
            >
            <span class="relative z-10">📞 Contact Us + 28 981 448</span>
            <div class="absolute inset-0 bg-gradient-to-r from-white/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity rounded-2xl"></div>
            </Link>
        </div>

        <!-- Trust Indicators -->
        <div class="mt-8 sm:mt-12 flex flex-col sm:flex-row flex-wrap justify-center items-center gap-4 sm:gap-6 text-white/50 text-xs sm:text-sm px-4">
            <div class="flex items-center gap-2">
            <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
            <span>Secure Payments TN</span>
            </div>
            <div class="flex items-center gap-2">
            <div class="w-2 h-2 bg-blue-500 rounded-full animate-pulse"></div>
            <span>Instant Activation</span>
            </div>
            <div class="flex items-center gap-2">
            <div class="w-2 h-2 bg-purple-500 rounded-full animate-pulse"></div>
            <span>Money Back Guarantee</span>
            </div>
        </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="p-4 sm:p-6 text-center border-t border-white/10 backdrop-blur-sm">
        <p class="text-white/60 text-xs sm:text-sm">
        © 2025 KingStreamPanel TN. Bouhlel Mahmoud
        </p>
    </footer>
    </div>
</div>
</template>

<style scoped>
@keyframes float {
0%, 100% { transform: translateY(0px); }
50% { transform: translateY(-10px); }
}

.group:hover .animate-float {
animation: float 2s ease-in-out infinite;
}

/* Ensure proper text wrapping on mobile */
@media (max-width: 640px) {
h1 {
    word-break: break-word;
    hyphens: auto;
}
}
</style>
