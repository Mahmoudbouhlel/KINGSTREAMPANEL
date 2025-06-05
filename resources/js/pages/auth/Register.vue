<script setup lang="ts">
import InputError from '@/components/InputError.vue';
import TextLink from '@/components/TextLink.vue';
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import AuthBase from '@/layouts/AuthLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';
import { LoaderCircle, User, Mail, Lock, Eye, EyeOff, Shield } from 'lucide-vue-next';
import { ref } from 'vue';

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
});

const showPassword = ref(false);
const showConfirmPassword = ref(false);
const isLoading = ref(false);

const submit = () => {
    isLoading.value = true;
    form.post(route('register'), {
        onFinish: () => {
            form.reset('password', 'password_confirmation');
            isLoading.value = false;
        },
    });
};

const togglePasswordVisibility = () => {
    showPassword.value = !showPassword.value;
};

const toggleConfirmPasswordVisibility = () => {
    showConfirmPassword.value = !showConfirmPassword.value;
};
</script>

<template>
    <div class="min-h-screen relative overflow-hidden bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900 flex items-center justify-center p-4">
        <Head title="Create Account - KingStreamPanel TN" />

        <!-- Animated Background Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -top-40 -right-40 w-80 h-80 bg-purple-500/20 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-blue-500/20 rounded-full blur-3xl animate-pulse delay-1000"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-pink-500/10 rounded-full blur-3xl animate-pulse delay-500"></div>
            <div class="absolute top-20 left-20 w-32 h-32 bg-green-500/10 rounded-full blur-2xl animate-pulse delay-700"></div>
        </div>

        <!-- Register Container -->
        <div class="relative z-10 w-full max-w-md">
            <!-- Logo & Header -->
            <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-gradient-to-br from-green-500 to-blue-500 shadow-2xl mb-6 animate-bounce">
                    <span class="text-2xl font-bold text-white">K</span>
                </div>
                <h1 class="text-3xl font-black text-transparent bg-clip-text bg-gradient-to-r from-white via-green-200 to-blue-200 mb-2">
                    Join KingStream! ✨
                </h1>
                <p class="text-white/60 text-sm">
                    Create your account to access premium IPTV services
                </p>
            </div>

            <!-- Register Card -->
            <div class="backdrop-blur-xl bg-white/10 rounded-3xl shadow-2xl border border-white/20 p-8 hover:bg-white/15 transition-all duration-500">

                <!-- Benefits Banner -->
                <div class="mb-6 p-4 rounded-2xl bg-gradient-to-r from-green-500/20 to-blue-500/20 border border-green-500/30">
                    <div class="flex items-center justify-center gap-4 text-xs text-green-200">
                        <div class="flex items-center gap-1">
                            <div class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></div>
                            <span>Instant Access</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <div class="w-2 h-2 bg-blue-400 rounded-full animate-pulse"></div>
                            <span>24/7 Support</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <div class="w-2 h-2 bg-purple-400 rounded-full animate-pulse"></div>
                            <span>Premium Quality</span>
                        </div>
                    </div>
                </div>

                <!-- Register Form -->
                <form @submit.prevent="submit" class="space-y-5">

                    <!-- Name Field -->
                    <div class="space-y-2">
                        <Label for="name" class="text-white/80 font-medium">Full Name</Label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <User class="h-5 w-5 text-white/40 group-focus-within:text-green-400 transition-colors" />
                            </div>
                            <Input
                                id="name"
                                type="text"
                                v-model="form.name"
                                placeholder="Enter your full name"
                                autocomplete="name"
                                required
                                autofocus
                                class="pl-12 h-12 bg-white/5 border-white/20 rounded-xl text-white placeholder:text-white/40 focus:bg-white/10 focus:border-green-400/50 focus:ring-2 focus:ring-green-400/20 transition-all duration-300"
                                :tabindex="1"
                            />
                        </div>
                        <InputError :message="form.errors.name" class="text-red-400 text-xs" />
                    </div>

                    <!-- Email Field -->
                    <div class="space-y-2">
                        <Label for="email" class="text-white/80 font-medium">Email Address</Label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <Mail class="h-5 w-5 text-white/40 group-focus-within:text-blue-400 transition-colors" />
                            </div>
                            <Input
                                id="email"
                                type="email"
                                v-model="form.email"
                                placeholder="you@example.com"
                                autocomplete="email"
                                required
                                class="pl-12 h-12 bg-white/5 border-white/20 rounded-xl text-white placeholder:text-white/40 focus:bg-white/10 focus:border-blue-400/50 focus:ring-2 focus:ring-blue-400/20 transition-all duration-300"
                                :tabindex="2"
                            />
                        </div>
                        <InputError :message="form.errors.email" class="text-red-400 text-xs" />
                    </div>

                    <!-- Password Field -->
                    <div class="space-y-2">
                        <Label for="password" class="text-white/80 font-medium">Password</Label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <Lock class="h-5 w-5 text-white/40 group-focus-within:text-purple-400 transition-colors" />
                            </div>
                            <Input
                                id="password"
                                :type="showPassword ? 'text' : 'password'"
                                v-model="form.password"
                                placeholder="Create a strong password"
                                autocomplete="new-password"
                                required
                                class="pl-12 pr-12 h-12 bg-white/5 border-white/20 rounded-xl text-white placeholder:text-white/40 focus:bg-white/10 focus:border-purple-400/50 focus:ring-2 focus:ring-purple-400/20 transition-all duration-300"
                                :tabindex="3"
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

                    <!-- Confirm Password Field -->
                    <div class="space-y-2">
                        <Label for="password_confirmation" class="text-white/80 font-medium">Confirm Password</Label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <Shield class="h-5 w-5 text-white/40 group-focus-within:text-pink-400 transition-colors" />
                            </div>
                            <Input
                                id="password_confirmation"
                                :type="showConfirmPassword ? 'text' : 'password'"
                                v-model="form.password_confirmation"
                                placeholder="Confirm your password"
                                autocomplete="new-password"
                                required
                                class="pl-12 pr-12 h-12 bg-white/5 border-white/20 rounded-xl text-white placeholder:text-white/40 focus:bg-white/10 focus:border-pink-400/50 focus:ring-2 focus:ring-pink-400/20 transition-all duration-300"
                                :tabindex="4"
                            />
                            <button
                                type="button"
                                @click="toggleConfirmPasswordVisibility"
                                class="absolute inset-y-0 right-0 pr-4 flex items-center"
                            >
                                <Eye v-if="!showConfirmPassword" class="h-5 w-5 text-white/40 hover:text-white/60 transition-colors" />
                                <EyeOff v-else class="h-5 w-5 text-white/40 hover:text-white/60 transition-colors" />
                            </button>
                        </div>
                        <InputError :message="form.errors.password_confirmation" class="text-red-400 text-xs" />
                    </div>

                    <!-- Terms & Privacy Notice -->
                    <div class="p-4 rounded-xl bg-white/5 border border-white/10">
                        <p class="text-xs text-white/60 text-center leading-relaxed">
                            By creating an account, you agree to our
                            <TextLink href="#" class="text-purple-300 hover:text-purple-200 underline">Terms of Service</TextLink>
                            and
                            <TextLink href="#" class="text-purple-300 hover:text-purple-200 underline">Privacy Policy</TextLink>
                        </p>
                    </div>

                    <!-- Submit Button -->
                    <Button
                        type="submit"
                        :tabindex="5"
                        :disabled="form.processing"
                        class="w-full h-12 bg-gradient-to-r from-green-600 to-blue-600 hover:from-green-500 hover:to-blue-500 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl hover:shadow-green-500/25 transition-all duration-300 hover:scale-105 disabled:opacity-50 disabled:cursor-not-allowed disabled:hover:scale-100"
                    >
                        <LoaderCircle v-if="form.processing || isLoading" class="mr-2 h-5 w-5 animate-spin" />
                        <span v-if="!form.processing && !isLoading" class="flex items-center justify-center gap-2">
                            ✨ <span>Create Account</span>
                        </span>
                        <span v-else>Creating account...</span>
                    </Button>

                    <!-- Divider -->
                    <div class="relative my-6">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-white/20"></div>
                        </div>
                        <div class="relative flex justify-center text-xs">
                            <span class="bg-slate-900 px-4 text-white/50">Already have an account?</span>
                        </div>
                    </div>

                    <!-- Login Link -->
                    <div class="text-center">
                        <TextLink
                            :href="route('login')"
                            :tabindex="6"
                            class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-gradient-to-r from-white/10 to-white/5 border border-white/20 text-white font-medium hover:from-white/20 hover:to-white/10 hover:border-white/30 transition-all duration-300 hover:scale-105"
                        >
                            <span>🚀 Sign In Instead</span>
                        </TextLink>
                    </div>
                </form>
            </div>

            <!-- Security Features -->
            <div class="mt-8 grid grid-cols-3 gap-4 text-center">
                <div class="p-3 rounded-xl bg-white/5 border border-white/10">
                    <div class="text-2xl mb-1">🔒</div>
                    <div class="text-xs text-white/60">Secure</div>
                </div>
                <div class="p-3 rounded-xl bg-white/5 border border-white/10">
                    <div class="text-2xl mb-1">⚡</div>
                    <div class="text-xs text-white/60">Fast Setup</div>
                </div>
                <div class="p-3 rounded-xl bg-white/5 border border-white/10">
                    <div class="text-2xl mb-1">🎯</div>
                    <div class="text-xs text-white/60">Premium Access</div>
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

/* Password strength indicator could be added here */
.password-strength {
    height: 2px;
    background: linear-gradient(to right, #ef4444, #f97316, #eab308, #22c55e);
    border-radius: 1px;
    transition: all 0.3s ease;
}
</style>
