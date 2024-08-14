<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="needs-validation" novalidate>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-2">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- User type -->
        <div class="mt-2" x-data="{ userType: $persist([]) }">
            <x-input-label for="userType" :value="__('User type')" />
            <select x-model="userType" id="userType" name="userType"
                class="form-select mt-1 rounded-3 border border-black border-opacity-50" aria-label="Select userType"
                required>
                <option selected></option>
                <option value="BUYER">Buyer</option>
                <option value="FCA">FCA</option>
                <option value="MLGU">MLGU</option>
                <option value="PLGU">PLGU</option>
            </select>
            <x-input-error :messages="$errors->get('userType')" class="mt-2" />
        </div>

        <div class="mt-2">
            <label for="province" class="form-label label-style">Province</label>
            <select x-model="province" x-on:change="onProvinceChange" id="province" name="province"
                class="form-select mt-1 rounded-3 border border-black border-opacity-50">
                <option value="">Choose Province</option>
                @foreach ($provinceValues as $id => $provinceValue)
                    <option value="{{ $provinceValue->id }}">{{ $provinceValue->province_name }}</option>
                @endforeach
            </select>
            @error('province')
                <span class="fs-6 text-danger">Please choose a province.</span>
            @enderror
        </div>

        <div class="mt-2">
            <label for="municipality" class="form-label label-style">Municipality</label>
            <select x-model="municipality" x-on:change="onMunicipalityChange" id="municipality" name="municipality"
                class="form-select mt-1 rounded-3 border border-black border-opacity-50">
                <option value="">Choose Municipality</option>
                <template x-for="municipality_row in municipalities" :key="municipality_row.id">
                    <option :value="municipality_row.id" :selected="municipality_row.id == municipality"
                        x-text="municipality_row.municipality_name">
                    </option>
                </template>
            </select>
            @error('municipality')
                <span class="fs-6 text-danger">Please choose a municipality.</span>
            @enderror
        </div>

        <div class="mt-2">
            <label for="district" class="form-label label-style">District</label>
            <select x-model="district" x-on:change="onDistrictChange" id="district" name="district"
                class="form-select mt-1 rounded-3 border border-black border-opacity-50">
                <option value="">Choose District</option>
                <template x-for="district_row in districts" :key="district_row.id">
                    <option :value="district_row.id" :selected="district_row.id == district"
                        x-text="district_row.district_name">
                    </option>
                </template>
            </select>
            @error('district')
                <span class="fs-6 text-danger">Please choose a district.</span>
            @enderror
        </div>

        <div class="mt-2">
            <label for="barangay" class="form-label label-style">Barangay</label>
            <select x-model="barangay" id="barangay" name="barangay"
                class="form-select mt-1 rounded-3 border border-black border-opacity-50">
                <option value="">Choose Barangay</option>
                <template x-for="barangay_row in barangays" :key="barangay_row.id">
                    <option :value="barangay_row.id" :selected="barangay_row.id == barangay"
                        x-text="barangay_row.barangay_name"></option>
                </template>
            </select>
            @error('barangay')
                <span class="fs-6 text-danger">Please choose a barangay.</span>
            @enderror
        </div>

        <div class="row">
            <!-- Birthdate -->
            <div class="mt-2 col-md-6">
                <x-input-label for="birthDate" :value="__('Birthdate')" />
                <x-text-input id="birthDate" class="block mt-1 w-full" type="date" name="birthDate" :value="old('birthDate')"
                    required />
                <x-input-error :messages="$errors->get('birthDate')" class="mt-2" />
            </div>

            <!-- Phone Number -->
            <div class="mt-2 col-md-6">
                <x-input-label for="phoneNumber" :value="__('Phone Number')" />
                <x-text-input id="phoneNumber" class="block mt-1 w-full" type="text" name="phoneNumber"
                    :value="old('phoneNumber')" required />
                <x-input-error :messages="$errors->get('phoneNumber')" class="mt-2" />
            </div>
        </div>

        <!-- Password -->
        <div class="mt-2">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-2">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-2">
            <a class="text-sm custom-forgot" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-2">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
