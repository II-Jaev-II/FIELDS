<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('shared.admin-head')

<body x-data="addressDropdown()">
    @include('components.navigation-header')
    @include('layouts.admin-navigation')

    <div class="container mt-2">
        <form action="{{ route('rtdmf.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <h2 class="bg-success text-white p-2 text-center">Research Techno Demo Model Farm</h2>

            <div class="row">

                <div class="col-md-3">
                    <label for="title" class="form-label label-style">Title</label>
                    <input type="text" class="form-control" name="title" id="title" autocomplete="off"
                        value="{{ old('title') }}">
                    @error('title')
                        <span class="fs-6 text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-3">
                    <label for="commodity" class="form-label label-style">Commodity</label>
                    <select id="commodity" name="commodity" class="form-select">
                        <option value="" disabled selected>Select Commodity</option>
                        @foreach ($commodityValues as $id => $commodityValue)
                            <option value="{{ $id }}">{{ $commodityValue }}</option>
                        @endforeach
                    </select>
                    @error('commodity')
                        <span class="fs-6 text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-3 mb-2">
                    <label for="province" class="form-label label-style">Province</label>
                    <select x-model="province" x-on:change="onProvinceChange" id="province" name="province"
                        class="form-select">
                        <option value="" disabled>Choose Province</option>
                        @foreach ($provinceValues as $id => $provinceValue)
                            <option value="{{ $provinceValue->id }}">{{ $provinceValue->province_name }}</option>
                        @endforeach
                    </select>
                    @error('province')
                        <span class="fs-6 text-danger">Please choose a province.</span>
                    @enderror
                </div>

                <div class="col-md-3 mb-2">
                    <label for="municipality" class="form-label label-style">Municipality</label>
                    <select x-model="municipality" id="municipality" name="municipality" class="form-select">
                        <option value="" disabled>Choose Municipality</option>
                        <template x-for="municipality_row in municipalities" :key="municipality_row.id">
                            <option :value="municipality_row.id" :selected="municipality_row.id == municipality"
                                x-text="municipality_row.municipality_name"></option>
                        </template>
                    </select>
                    @error('municipality')
                        <span class="fs-6 text-danger">Please choose a municipality.</span>
                    @enderror
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-md-3">
                    <label for="startDate" class="form-label label-style">Project
                        Duration (Start)</label>
                    <input type="date" class="form-control" name="startDate" id="startDate"
                        value="{{ old('startDate') }}">
                    @error('startDate')
                        <span class="fs-6 text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-3">
                    <label for="endDate" class="form-label label-style">Project
                        Duration (End)</label>
                    <input type="Date" class="form-control" name="endDate" id="endDate"
                        value="{{ old('endDate') }}">
                    @error('endDate')
                        <span class="fs-6 text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-3">
                    <label for="attachedResult" class="form-label label-style">Attach Result</label>
                    <input type="file" class="form-control" name="attachedResult" id="attachedResult">
                    @error('attachedResult')
                        <span class="fs-6 text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <input type="submit" value="Submit"
                class="btn btn-success text-white col-md-4 rounded-pill mx-auto d-block">
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/admin.js') }}"></script>
</body>

</html>
