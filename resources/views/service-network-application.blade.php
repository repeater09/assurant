<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Assurant</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>

<body class="bg-gray-100">
    <div class="bg-slate-100">
        <div class="max-w-6xl mx-auto">
            <div class="p-4 font-bold text-slate-700 tracking-wide">
                <div class="pb-2"><span class="text-base md:text-lg uppercase">Assurant</span></div>
                <div class="pb-2">
                    <h1 class="text-2xl">Service Network Application</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center p-8 leading-8 text-slate-600 bg-gray-100">
        <div class="max-w-6xl mx-auto">
            @if (session()->has('success'))
                <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
                    role="alert">
                    <span class="font-medium">Success!</span> {{ session()->get('success') }}
                </div>
            @endif
            <p class="pb-5">Please provide us with the information requested below and one of our service
                recruiters will contact you within two business days.</p>
            <p>If you are a customer with a question about your service plan please visit our claims and support center.
            </p>
        </div>
    </div>
    <div class="py-5">
        <main class="max-w-6xl mx-auto bg-white rounded-lg shadow">
            <div class="p-8">
                <div class="py-4">
                    <h3 class="text-2xl text-slate-700 tracking-wide">Service Network Application</h3>
                </div>
                <form method="post" action="{{ route('service-network-application.store') }}">
                    @csrf
                    <div class="flex flex-col md:flex-row md:items-stretch md:gap-8">
                        <x-input type="text" name="first_name" label="First Name" required />
                        <x-input type="text" name="last_name" label="Last Name" required />
                    </div>
                    <div class="flex flex-col md:flex-row md:items-stretch md:gap-8">
                        <x-input type="text" name="company" label="Company" required />
                        <x-input type="text" name="industry" label="Industry"
                            information="Please enter your industry / area of service expertise" />
                    </div>
                    <div class="flex flex-col md:flex-row md:items-stretch md:gap-8">
                        <x-input type="email" name="email" label="Email" required />
                        <x-input type="text" name="phone" label="Phone Number" />
                    </div>
                    <div class="flex flex-col md:flex-row md:gap-8">
                        <x-input type="text" name="city" label="City" />
                        <x-select />
                        <x-input type="text" name="zip_code" label="Zip Code" />
                    </div>
                    <div class="flex flex-col md:flex-row md:gap-8">
                        <x-textarea label="Coverage Area" name="coverage_area"
                            information="Please indicate the coverage area you are able to assist (mileage, cities, states, regions, etc.)" />
                    </div>
                    <div class="flex flex-col md:flex-row md:gap-8">
                        <x-textarea label="Message" name="message" required />
                    </div>
                    <button type="submit" value="Send Message"
                        class="uppercase text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Send
                        Message</button>
                </form>
            </div>
        </main>
    </div>
    <!-- Scripts -->
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
</body>

</html>
