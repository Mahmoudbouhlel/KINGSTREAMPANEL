<script setup lang="ts">
import { ref } from 'vue';
import type { HTMLAttributes } from 'vue';

defineOptions({
  inheritAttrs: false,
});

interface Props {
  className?: HTMLAttributes['class'];
  alt?: string;
  darkSrc?: string; // Optional dark-mode logo
}

const props = defineProps<Props>();

const logoUrl = ref('/storage/logo2.png');

// Optionnel : fallback si image cassée
const handleError = () => {
  logoUrl.value = '/fallback-logo.svg'; // ou autre chemin par défaut
};
</script>

<template>
  <picture>
    <!-- Mode sombre si fourni -->
    <source
      v-if="props.darkSrc"
      srcset="props.darkSrc"
      media="(prefers-color-scheme: dark)"
    />
    <!-- Logo principal -->
    <img
      :src="logoUrl"
      :alt="props.alt || 'KingStream Logo'"
      :class="className"
      loading="lazy"
      @error="handleError"
      v-bind="$attrs"
    />
  </picture>
</template>
