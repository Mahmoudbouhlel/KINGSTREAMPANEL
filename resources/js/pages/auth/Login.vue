<script setup lang="ts">
import InputError from '@/components/InputError.vue';
import TextLink from '@/components/TextLink.vue';
import { Button } from '@/components/ui/button';
import { Checkbox } from '@/components/ui/checkbox';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import AuthBase from '@/layouts/AuthLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';
import { LoaderCircle, Mail, Lock, Eye, EyeOff } from 'lucide-vue-next';
import { ref } from 'vue';

defineProps<{
    status?: string;
    canResetPassword: boolean;
}>();

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const showPassword = ref(false);
const isLoading = ref(false);

const submit = () => {
    isLoading.value = true;
    form.post(route('login'), {
        onFinish: () => {
            form.reset('password');
            isLoading.value = false;
        },
    });
};

// Remplir automatiquement les infos de démonstration
const fillDemo = (type: 'admin' | 'reseller') => {
    if (type === 'admin') {
        form.email = 'admin@kingstream.com';
        form.password = 'password';
    } else if (type === 'reseller') {
        form.email = 'reseller@test.com';
        form.password = 'password';
    }
};

const togglePasswordVisibility = () => {
    showPassword.value = !showPassword.value;
};
</script>

<template>
    <div class="min-h-screen relative overflow-hidden bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900 flex items-center justify-center p-4">
        <Head title="Welcome Back - KingStreamPanel TN" />

        <!-- Animated Background Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -top-40 -right-40 w-80 h-80 bg-purple-500/20 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-blue-500/20 rounded-full blur-3xl animate-pulse delay-1000"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-pink-500/10 rounded-full blur-3xl animate-pulse delay-500"></div>
        </div>

        <!-- Login Container -->
        <div class="relative z-10 w-full max-w-md">
            <!-- Logo & Header -->
            <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-gradient-to-br from-purple-500 to-pink-500 shadow-2xl mb-6 animate-bounce">
                    <span class="text-2xl font-bold text-white">K</span>
                </div>
                <h1 class="text-3xl font-black text-transparent bg-clip-text bg-gradient-to-r from-white via-purple-200 to-pink-200 mb-2">
                    Welcome Back! 👋
                </h1>
                <p class="text-white/60 text-sm">
                    Sign in to continue to KingStreamPanel TN
                </p>
            </div>

            <!-- Login Card -->
            <div class="backdrop-blur-xl bg-white/10 rounded-3xl shadow-2xl border border-white/20 p-8 hover:bg-white/15 transition-all duration-500">

                <!-- Status Alert -->
                <div v-if="status" class="mb-6 p-4 rounded-2xl bg-gradient-to-r from-green-500/20 to-emerald-500/20 border border-green-500/30 text-green-200 text-sm text-center animate-fadeIn">
                    {{ status }}
                </div>

                <!-- Demo Login Buttons -->
                <div class="mb-8 space-y-3">
                    <p class="text-white/70 text-xs text-center mb-4">Quick Demo Access:</p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <button
                            @click="() => fillDemo('admin')"
                            class="group p-3 rounded-xl bg-gradient-to-r from-yellow-500/20 to-orange-500/20 border border-yellow-500/30 text-yellow-200 text-xs font-medium hover:from-yellow-500/30 hover:to-orange-500/30 transition-all duration-300 hover:scale-105 hover:shadow-lg hover:shadow-yellow-500/20"
                        >
                            <span class="flex items-center justify-center gap-2">
                                👑 <span>Super Admin</span>
                            </span>
                        </button>
                        <button
                            @click="() => fillDemo('reseller')"
                            class="group p-3 rounded-xl bg-gradient-to-r from-blue-500/20 to-cyan-500/20 border border-blue-500/30 text-blue-200 text-xs font-medium hover:from-blue-500/30 hover:to-cyan-500/30 transition-all duration-300 hover:scale-105 hover:shadow-lg hover:shadow-blue-500/20"
                        >
                            <span class="flex items-center justify-center gap-2">
                                💼 <span>Reseller</span>
                            </span>
                        </button>
                    </div>
                </div>

                <!-- Login Form -->
                <form @submit.prevent="submit" class="space-y-6">

                    <!-- Email Field -->
                    <div class="space-y-2">
                        <Label for="email" class="text-white/80 font-medium">Email Address</Label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <Mail class="h-5 w-5 text-white/40 group-focus-within:text-purple-400 transition-colors" />
                            </div>
                            <Input
                                id="email"
                                type="email"
                                v-model="form.email"
                                placeholder="you@example.com"
                                autocomplete="email"
                                required
                                autofocus
                                class="pl-12 h-12 bg-white/5 border-white/20 rounded-xl text-white placeholder:text-white/40 focus:bg-white/10 focus:border-purple-400/50 focus:ring-2 focus:ring-purple-400/20 transition-all duration-300"
                                :tabindex="1"
                            />
                        </div>
                        <InputError :message="form.errors.email" class="text-red-400 text-xs" />
                    </div>

                    <!-- Password Field -->
                    <div class="space-y-2">
                        <div class="flex items-center justify-between">
                            <Label for="password" class="text-white/80 font-medium">Password</Label>
                            <TextLink
                                v-if="canResetPassword"
                                :href="route('password.request')"
                                class="text-xs text-purple-300 hover:text-purple-200 transition-colors"
                            >
                                Forgot password?
                            </TextLink>
                        </div>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <Lock class="h-5 w-5 text-white/40 group-focus-within:text-purple-400 transition-colors" />
                            </div>
                            <Input
                                id="password"
                                :type="showPassword ? 'text' : 'password'"
                                v-model="form.password"
                                placeholder="••••••••"
                                autocomplete="current-password"
                                required
                                class="pl-12 pr-12 h-12 bg-white/5 border-white/20 rounded-xl text-white placeholder:text-white/40 focus:bg-white/10 focus:border-purple-400/50 focus:ring-2 focus:ring-purple-400/20 transition-all duration-300"
                                :tabindex="2"
                            />
                            <button
                                type="button"
                                @click="togglePasswordVisibility"
                                class="absolute inset-y-0 right-0 pr-4 flex items-center"
                            >
                                <Eye v-if="!showPassword" class="h-5 w-5 text-white/40 hover:text-white/60 transition-colors" />
                                <EyeOff v-else class="h-5 w-5 text-white/40 hover:text-white/60 transition-colors" />
                            </button>
                        </div>
                        <InputError :message="form.errors.password" class="text-red-400 text-xs" />
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center gap-3">
                        <Checkbox
                            id="remember"
                            v-model="form.remember"
                            :tabindex="3"
                            class="border-white/30 data-[state=checked]:bg-purple-600 data-[state=checked]:border-purple-600"
                        />
                        <Label for="remember" class="text-white/70 text-sm cursor-pointer">
                            Remember me for 30 days
                        </Label>
                    </div>

                    <!-- Submit Button -->
                    <Button
                        type="submit"
                        :tabindex="4"
                        :disabled="form.processing"
                        class="w-full h-12 bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-500 hover:to-pink-500 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl hover:shadow-purple-500/25 transition-all duration-300 hover:scale-105 disabled:opacity-50 disabled:cursor-not-allowed disabled:hover:scale-100"
                    >
                        <LoaderCircle v-if="form.processing || isLoading" class="mr-2 h-5 w-5 animate-spin" />
                        <span v-if="!form.processing && !isLoading" class="flex items-center justify-center gap-2">
                            🚀 <span>Sign In</span>
                        </span>
                        <span v-else>Signing in...</span>
                    </Button>

                    <!-- Divider -->
                    <div class="relative my-6">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-white/20"></div>
                        </div>
                        <div class="relative flex justify-center text-xs">
                            <span class="bg-slate-900 px-4 text-white/50">New to KingStreamPanel?</span>
                        </div>
                    </div>

                    <!-- Register Link -->
                    <div class="text-center">
                        <TextLink
                            :href="route('register')"
                            :tabindex="5"
                            class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-gradient-to-r from-white/10 to-white/5 border border-white/20 text-white font-medium hover:from-white/20 hover:to-white/10 hover:border-white/30 transition-all duration-300 hover:scale-105"
                        >
                            <span>✨ Create New Account</span>
                        </TextLink>
                    </div>
                </form>
            </div>

            <!-- Trust Indicators -->
            <div class="mt-8 flex justify-center items-center gap-6 text-white/40 text-xs">
                <div class="flex items-center gap-2">
                    <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                    <span>Secure Login</span>
                </div>
                <div class="flex items-center gap-2">
                    <div class="w-2 h-2 bg-blue-500 rounded-full animate-pulse"></div>
                    <span>24/7 Support</span>
                </div>
                <div class="flex items-center gap-2">
                    <div class="w-2 h-2 bg-purple-500 rounded-full animate-pulse"></div>
                    <span>Instant Access</span>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(-10px); }
    to { opacity: 1; transform: translateY(0); }
}

.animate-fadeIn {
    animation: fadeIn 0.5s ease-out;
}

/* Custom input focus styles */
.group:focus-within .transition-colors {
    transition: all 0.3s ease;
}

/* Smooth hover effects */
button, .hover\:scale-105:hover {
    transform-origin: center;
}

/* Loading state */
.disabled\:opacity-50:disabled {
    pointer-events: none;
}
</style>
