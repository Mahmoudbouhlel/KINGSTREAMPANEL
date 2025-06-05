<script setup lang="ts">
import AppLogoIcon from '@/components/AppLogoIcon.vue';
import { Link } from '@inertiajs/vue3';

defineProps<{
  title?: string;
  description?: string;
}>();
</script>

<template>
  <div class="flex min-h-svh flex-col items-center justify-center gap-6 bg-background p-6 md:p-10">
    <div class="w-full max-w-sm">
      <div class="flex flex-col gap-8">
        <!-- Logo + title -->
        <div class="flex flex-col items-center gap-4">
          <Link :href="route('home')" class="flex flex-col items-center gap-2 font-medium">
            <div class="mb-1 flex h-20 w-20 items-center justify-center rounded-2xl bg-primary/10 shadow-md">
              <AppLogoIcon class="h-12 w-12 fill-current text-[var(--foreground)] dark:text-white" />
            </div>
            <span class="sr-only">{{ title }}</span>
          </Link>
          <div class="space-y-2 text-center">
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">{{ title }}</h1>
            <p class="text-sm text-muted-foreground">{{ description }}</p>
          </div>
        </div>

        <!-- Slot: login/register form -->
        <slot />
      </div>
    </div>
  </div>
</template>
