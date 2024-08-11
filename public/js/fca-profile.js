function trainingsAddRow() {
    return {
        rows: [{ id: 1 }],
        addRow() {
            this.rows.push({
                id: Math.random().toString(36).slice(2, 7),
            });
        },
        removeRow(index) {
            this.rows.splice(index, 1);
        },
    };
}

$(document).ready(function () {
    $('.trainingNeeds').select2();
});

function addressDropdown() {
    return {
        province: Alpine.$persist(null).using(sessionStorage),
        municipality: Alpine.$persist(null).using(sessionStorage),
        district: Alpine.$persist(null).using(sessionStorage),
        barangay: Alpine.$persist(null).using(sessionStorage),
        municipalities: [],
        districts: [],
        barangays: [],

        presidentProvince: Alpine.$persist(null).using(sessionStorage),
        presidentMunicipality: Alpine.$persist(null).using(sessionStorage),
        presidentDistrict: Alpine.$persist(null).using(sessionStorage),
        presidentBarangay: Alpine.$persist(null).using(sessionStorage),
        presidentMunicipalities: [],
        presidentDistricts: [],
        presidentBarangays: [],

        init() {
            if (this.province) {
                this.fetchMunicipalities(this.province);
            }
            if (this.municipality) {
                this.fetchDistricts(this.municipality);
            }
            if (this.district) {
                this.fetchBarangays(this.district);
            }

            if (this.presidentProvince) {
                this.fetchPresidentMunicipalities(this.presidentProvince);
            }
            if (this.presidentMunicipality) {
                this.fetchPresidentDistricts(this.presidentMunicipality);
            }
            if (this.presidentDistrict) {
                this.fetchPresidentBarangays(this.presidentDistrict);
            }
        },
        onProvinceChange() {
            this.district = null;
            this.districts = [];

            this.barangay = null;
            this.barangays = [];

            this.municipality = null;
            this.fetchMunicipalities(this.province);
        },
        onMunicipalityChange() {
            this.district = null;
            this.fetchDistricts(this.municipality);
        },
        onDistrictChange() {
            this.barangay = null;
            this.fetchBarangays(this.district);
        },
        fetchMunicipalities(province) {
            axios.get(`/provinces/${province}`).then(res => {
                this.municipalities = res.data;
            }).catch(error => {
                console.error('Error fetching municipalities:', error);
            });
        },
        fetchDistricts(municipality) {
            axios.get(`/municipalities/${municipality}`).then(res => {
                this.districts = res.data;
            }).catch(error => {
                console.error('Error fetching districts:', error);
            });
        },
        fetchBarangays(district) {
            axios.get(`/districts/${district}`).then(res => {
                this.barangays = res.data;
            }).catch(error => {
                console.error('Error fetching barangays:', error);
            });
        },

        onPresidentProvinceChange() {
            this.presidentDistrict = null;
            this.presidentDistricts = [];

            this.presidentBarangay = null;
            this.presidentBarangays = [];

            this.presidentMunicipality = null;
            this.fetchPresidentMunicipalities(this.presidentProvince);
        },
        onPresidentMunicipalityChange() {
            this.presidentDistrict = null;
            this.fetchPresidentDistricts(this.presidentMunicipality);
        },
        onPresidentDistrictChange() {
            this.presidentDistrict = event.target.value;
            this.fetchPresidentBarangays(this.presidentDistrict);
        },
        fetchPresidentMunicipalities(province) {
            axios.get(`/provinces/${province}`).then(res => {
                this.presidentMunicipalities = res.data;
            }).catch(error => {
                console.error('Error fetching president municipalities:', error);
            });
        },
        fetchPresidentDistricts(municipality) {
            axios.get(`/municipalities/${municipality}`).then(res => {
                this.presidentDistricts = res.data;
            }).catch(error => {
                console.error('Error fetching president districts:', error);
            });
        },
        fetchPresidentBarangays(district) {
            axios.get(`/districts/${district}`).then(res => {
                this.presidentBarangays = res.data;
            }).catch(error => {
                console.error('Error fetching president barangays:', error);
            });
        }
    };
}


