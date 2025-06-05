<script setup lang="ts">
import AppLogoIcon from '@/components/AppLogoIcon.vue';
</script>

<template>
  <div class="flex items-center space-x-2">
    <!-- Logo principal -->
    <div class="flex aspect-square size-9 items-center justify-center rounded-xl bg-primary shadow-md ring-1 ring-black/5 dark:bg-white">
      <AppLogoIcon class="size-5 text-white dark:text-black" />
    </div>

    <!-- Titre + drapeau -->
    <div class="flex items-center gap-2">
      <span class="text-sm font-bold text-gray-900 dark:text-white tracking-tight">KingStreamPanel</span>
      <img
        src="https://upload.wikimedia.org/wikipedia/commons/c/ce/Flag_of_Tunisia.svg"
        alt="Tunisie"
        class="h-4 w-6 rounded-sm shadow-sm ring-1 ring-black/10"
      />
    </div>
  </div>
</template>
