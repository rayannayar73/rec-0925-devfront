@extends('layouts.app')

@section('content')
<div class="min-h-screen flex flex-col">
<div class="container mx-auto px-20 py-8 flex-1">
    <h1 class="text-2xl font-semibold text-gray-700 mb-10 mt-2">Complétez votre réservation</h1>

    <!-- Pricing Cards Container -->
    <form class="grid grid-cols-3 gap-8">
        <!-- Basic Card -->
        <label class="relative cursor-pointer">
            <input type="radio" name="plan" value="basic" class="peer sr-only">
            <div class="bg-white rounded-3xl shadow-[0_4px_20px_rgba(0,0,0,0.1)] overflow-hidden peer-checked:ring-2 peer-checked:ring-gray-400 h-[640px]">
                <!-- Header -->
                <div class="bg-gray-100 px-6 py-4 relative shadow-[0_4px_10px_rgba(0,0,0,0.2)]">
                    <h2 class="text-2xl font-semibold text-center">Basic</h2>
                    <p class="text-gray-600 text-center">Votre test psychotechnique simple</p>
                </div>
                
                <div class="px-6 py-8">
                    <div class="text-center mb-8">
                        <span class="text-5xl font-semibold inline-flex items-center">+0€</span>
                    </div>

                    <div class="flex justify-center mb-8">
                        <div class="inline-flex items-center gap-3 bg-gray-50 rounded-xl px-6 py-3 shadow-sm">
                            <div class="peer-checked:hidden w-5 h-5 border-2 border-gray-300 rounded-full"></div>
                            <svg class="hidden peer-checked:block w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-xl font-semibold">Sélectionner</span>
                        </div>
                    </div>
                    <hr class="border-gray-300 my-4"/>
                    <div class="space-y-4">
                        <div class="flex items-center gap-3 text-gray-700">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11m0-5.5a1.5 1.5 0 013 0v3m0 0V11"/>
                            </svg>
                            <span>Entrainement illimité et gratuit</span>
                        </div>
                        <div class="flex items-center gap-3 text-gray-700">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span>Annulation jusqu'à 48 heures</span>
                        </div>
                        <div class="flex items-center gap-3 text-gray-700">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                            </svg>
                            <span>Recevez votre test le jour j</span>
                        </div>
                    </div>
                </div>
            </div>
        </label>

        <!-- Assurance Card -->
        <label class="relative cursor-pointer">
            <input type="radio" name="plan" value="assurance" class="peer sr-only">
            <div class="bg-white rounded-3xl shadow-[0_4px_20px_rgba(0,0,0,0.1)] overflow-hidden peer-checked:ring-2 peer-checked:ring-green-500 h-[640px]">
                <!-- Header -->
                <div class="bg-green-500 px-6 py-4 relative shadow-[0_4px_10px_rgba(255,255,255,0.2)]">
                    <h2 class="text-2xl font-semibold text-center text-white">Assurance</h2>
                    <p class="text-white text-center">Votre test psychotechnique sans stress</p>
                </div>
                
                <div class="px-6 py-8">
                    <div class="text-center mb-4">
                        <span class="text-5xl font-semibold inline-flex items-center">+40€</span>
                        <p class="text-sm text-gray-500 mt-2">A peine le prix d'un resto</p>
                    </div>

                    <div class="flex justify-center mb-8">
                        <div class="inline-flex items-center gap-3 bg-green-500 rounded-xl px-6 py-3 shadow-sm text-white">
                            <div class="peer-checked:hidden w-5 h-5 border-2 border-white rounded-full"></div>
                            <svg class="hidden peer-checked:block w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-xl font-semibold">Sélectionner</span>
                        </div>
                    </div>
                    <hr class="border-gray-300 my-4"/>
                    <div class="space-y-4">
                        <div class="flex items-center gap-3 text-gray-700">
                            <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11m0-5.5a1.5 1.5 0 013 0v3m0 0V11"/>
                            </svg>
                            <span>Entrainement illimité et gratuit</span>
                        </div>
                        <div class="flex items-center gap-3 text-gray-700">
                            <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span>Annulation jusqu'à 48 heures</span>
                        </div>
                        <div class="flex items-center gap-3 text-gray-700">
                            <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                            </svg>
                            <span><b>Repassez votre test pour 0€ (si test échoué)</b></span>
                        </div>
                        <div class="flex items-center gap-3 text-gray-700">
                            <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                            </svg>
                            <span>Recevez votre test le jour j</span>
                        </div>
                        <div class="flex items-center gap-3 text-gray-700">
                            <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                            </svg>
                            <span>Livret de préparation au test psychotechnique</span>
                        </div>
                    </div>
                </div>
            </div>
        </label>

        <!-- Complet Card -->
        <label class="relative cursor-pointer">
            <input type="radio" name="plan" value="complet" class="peer sr-only">
            <div class="bg-white rounded-3xl shadow-[0_4px_20px_rgba(0,0,0,0.1)] overflow-hidden peer-checked:ring-2 peer-checked:ring-[#476285] h-[640px]">
                <!-- Header -->
                <div class="bg-[#476285] px-6 py-4 relative shadow-[0_4px_10px_rgba(255,255,255,0.2)]">
                    <h2 class="text-2xl font-semibold text-center text-white">Complet</h2>
                    <p class="text-white text-center">Votre test psychotechnique tout compris</p>
                </div>
                
                <div class="px-6 py-8">
                    <div class="text-center mb-4">
                        <span class="text-5xl font-semibold inline-flex items-center">+60€</span>
                        <p class="text-sm text-gray-500 mt-2">A peine le prix de 4 pizzas</p>
                    </div>

                    <div class="flex justify-center mb-8">
                        <div class="inline-flex items-center gap-3 bg-[#476285] rounded-xl px-6 py-3 shadow-sm text-white">
                            <div class="peer-checked:hidden w-5 h-5 border-2 border-white rounded-full"></div>
                            <svg class="hidden peer-checked:block w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-xl font-semibold">Sélectionner</span>
                        </div>
                    </div>
                    <hr class="border-gray-300 my-4"/>
                    <div class="space-y-4">
                        <div class="flex items-center gap-3 text-gray-700">
                            <svg class="w-6 h-6 text-[#476285]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11m0-5.5a1.5 1.5 0 013 0v3m0 0V11"/>
                            </svg>
                            <span>Entrainement illimité et gratuit</span>
                        </div>
                        <div class="flex items-center gap-3 text-gray-700">
                            <svg class="w-6 h-6 text-[#476285]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span><b>Annulation jusqu'à 24 heures</b></span>
                        </div>
                        <div class="flex items-center gap-3 text-gray-700">
                            <svg class="w-6 h-6 text-[#476285]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                            </svg>
                            <span><b>Repassez votre test pour 0€ (si test échoué)</b></span>
                        </div>
                        <div class="flex items-center gap-3 text-gray-700">
                            <svg class="w-6 h-6 text-[#476285]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                            </svg>
                            <span>Recevez votre test le jour j</span>
                        </div>
                        <div class="flex items-center gap-3 text-gray-700">
                            <svg class="w-6 h-6 text-[#476285]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                            </svg>
                            <span>Livret de préparation au test psychotechnique</span>
                        </div>
                        <div class="flex items-center gap-3 text-gray-700">
                            <svg class="w-6 h-6 text-[#476285]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                            </svg>
                            <span>Téléchargez vos résultats en illimité</span>
                        </div>
                    </div>
                </div>
            </div>
        </label>
    </form>
</div>
<!-- Sticky Footer -->
<div class="fixed bottom-0 left-0 right-0 bg-[#2A2A2A] py-4 mt-auto">
    <div class="container mx-auto px-20 flex items-center justify-between">
        <!-- Test Details -->
        <div class="bg-white rounded-lg p-6 flex items-center gap-4">
            <div class="p-3">
                <svg class="w-6 h-6 text-[#C8286C]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
            </div>
            <div class="text-[#36578A]">
                <h3 class="text-lg font-semibold">Test psychotechnique le 28 mars à 14:00</h3>
                <p class="text-[#36578A]">15 rue de la république Montgeron 91230</p>
            </div>
        </div>
        <!-- Total and Button -->
        <div class="flex flex-col gap-4">
            <div class="flex justify-between gap-20 items-center text-white">
                <span class="text-xl font-semibold">Total</span>
                <span class="text-4xl font-bold">135€</span>
            </div>
            <button type="submit" class="w-full bg-[#C8286C] text-white px-8 py-3 rounded-lg font-bold text-lg flex items-center justify-center gap-2 hover:bg-[#A32058] transition-colors">
                Suivant
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </button>
        </div>
    </div>
</div>
</div>

@endsection