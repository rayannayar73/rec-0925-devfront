@extends('layouts.app')

@section('content')
<div class="container mx-auto px-20 py-8">
    <h1 class="text-[32px] font-bold text-gray-800 mb-4">Confirmer et payer</h1>

    <!-- Main content wrapper with max height and overflow control -->
    <div class="flex gap-8">
        <!-- Left Column - Fixed Content -->
        <div class="flex-1 overflow-y-auto pr-18" style="height: fit-content;">
            <!-- Alert Banner -->
            <div class="rounded-lg p-4 mb-8 flex items-start gap-3 border border-gray-200">
                <svg class="w-8 h-10 text-red-500 mt-3 mx-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                </svg>
                <div>
                    <div class="text-xl font-semibold text-gray-900">Date de réservation en forte demande</div>
                    <div class="text-xl font-semibold text-gray-900">Les réservations sont fréquentes pour ce centre</div>
                </div>
            </div>

            <!-- Personal Information Section -->
            <div class="mb-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Vos informations personnelles</h2>
                <div class="space-y-4">
                    <div>
                        <input type="text" placeholder="Nom Prénom" class="w-full px-4 py-3 border border-gray-300 bg-gray-100 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 font-semibold text-lg">
                    </div>
                    <div>
                        <input type="email" placeholder="Email" class="w-full px-4 py-3 border border-gray-300 bg-gray-100 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 font-semibold text-lg">
                    </div>
                    <div>
                        <input type="tel" placeholder="Numéro de téléphone" class="w-full px-4 py-3 border border-gray-300 bg-gray-100 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 font-semibold text-lg">
                    </div>
                </div>
            </div>

            <hr/>
            
            <!-- Test Details Section -->
            <div class="py-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Votre test psychotechnique</h2>
                <div class="space-y-4">
                    <div class="flex items-center gap-3">
                        <svg class="w-8 h-8 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        <div>
                            <div class="font-bold text-2xl">Date</div>
                            <div class="text-gray-600 font-semibold text-xl">12 mai 2025</div>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <svg class="w-8 h-8 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <div>
                            <div class="font-bold text-2xl">Horaire</div>
                            <div class="text-gray-600 font-semibold text-xl">12:30</div>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <svg class="w-8 h-8 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <div>
                            <div class="font-bold text-2xl">Adresse</div>
                            <div class="text-gray-600 font-semibold text-xl">39 Rue Emile Steiner, 27200 Vernon</div>
                        </div>
                    </div>
                </div>
            </div>

            <hr/>
            
           <!-- Payment Method Section -->
            <div class="py-8">
                <h2 class="text-3xl font-bold text-gray-800">Choisissez votre moyen de paiement</h2>
                <p class="text-gray-800 text-xl font-bold mb-4 flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                    100% SÉCURISÉ
                </p>
                <div class="space-y-4">
                    <div class="flex items-center justify-between p-4 border-b-1 border-gray-300">
                        <div class="flex items-center gap-6">
                            <input type="radio" name="payment" class="w-4 h-4 text-blue-600">
                            <div class="w-[100px] h-8 flex items-center">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b7/MasterCard_Logo.svg/2560px-MasterCard_Logo.svg.png" alt="Credit Card" class="h-8 object-contain">
                            </div>
                            <span class="font-semibold text-xl">Carte bancaire</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between p-4 border-b-1 border-gray-300">
                        <div class="flex items-center gap-6">
                            <input type="radio" name="payment" class="w-4 h-4 text-blue-600">
                            <div class="w-[100px] h-8 flex items-center">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/Apple_Pay_logo.svg/2560px-Apple_Pay_logo.svg.png" alt="Apple Pay" class="h-8 object-contain">
                            </div>
                            <span class="font-semibold text-xl">Apple Pay</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between p-4 border-b-1 border-gray-300">
                        <div class="flex items-center gap-6">
                            <input type="radio" name="payment" class="w-4 h-4 text-blue-600">
                            <div class="w-[100px] h-8 flex items-center">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/PayPal.svg/2560px-PayPal.svg.png" alt="PayPal" class="h-8 object-contain">
                            </div>
                            <span class="font-semibold text-xl">PayPal</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between p-4 border-b-1 border-gray-300">
                        <div class="flex items-center gap-6">
                            <input type="radio" name="payment" class="w-4 h-4 text-blue-600">
                            <div class="w-[100px] h-8 flex items-center">
                                <img src="https://upload.wikimedia.org/wikipedia/fr/thumb/5/5b/Alma_Logo.svg/2560px-Alma_Logo.svg.png" alt="Alma" class="h-8 object-contain">
                            </div>
                            <span class="font-semibold text-xl">Alma</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="py-8">
                <button class="w-full bg-[#C8286C] text-white text-lg py-4 rounded-lg font-bold hover:bg-[#A62259] transition-colors">
                    Je réserve mon test psychotechnique
                    <svg class="w-6 h-6 inline-block ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Right Column - Sticky Summary -->
        <div class="w-2/5">
            <div class="sticky top-1/2 transform -translate-y-1/2 flex flex-col gap-8">
                <!-- Summary Card -->
                <div class="bg-white rounded-lg border border-gray-200 p-6">
                    <div class="mx-auto px-7 py-5">
                        <h2 class="text-xl font-bold text-[#C8286C] mb-4">Récapitulatif de votre test psychotechnique</h2>
                        
                        <div class="mb-6">
                            <div class="flex justify-start items-center mb-4">
                                <span class="text-xl">Total à payer : </span>
                                <span class="text-xl font-bold"> 130.00€</span>
                            </div>
                            <p class="text-gray-600 font-semibold">
                                En passant votre commande, vous acceptez les conditions générales de vente de la société AAAEP. 
                                Veuillez consulter notre politique de protection des données.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Features Grid -->
                <div class="grid grid-cols-3 gap-4">
                    <div class="flex flex-col items-center text-center">
                        <div class="w-16 h-16 rounded-full bg-white border border-green-200 shadow-md flex items-center justify-center mb-3">
                            <svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11m0-5.5a1.5 1.5 0 013 0v3m0 0V11"/>
                            </svg>
                        </div>
                        <div class="font-bold text-lg">Entraînement</div>
                        <div class="text-gray-600 font-semibold">Gratuit Illimité</div>
                    </div>

                    <div class="flex flex-col items-center text-center">
                        <div class="w-16 h-16 rounded-full bg-white border border-green-200 shadow-md flex items-center justify-center mb-3">
                            <svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                            </svg>
                        </div>
                        <div class="font-bold text-lg">Résultats</div>
                        <div class="text-gray-600 font-semibold">le Jour Même</div>
                    </div>

                    <div class="flex flex-col items-center text-center">
                        <div class="w-16 h-16 rounded-full bg-white border border-green-200 shadow-md flex items-center justify-center mb-3">
                            <svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div class="font-bold text-lg">Annulation</div>
                        <div class="text-gray-600 font-semibold">Gratuite jusqu'à 48h</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection