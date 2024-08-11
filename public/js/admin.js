function addressDropdown() {
    return {
        province: Alpine.$persist(null).using(sessionStorage),
        municipality: Alpine.$persist(null).using(sessionStorage),
        municipalities: [],

        init() {
            if (this.province) {
                this.fetchMunicipalities(this.province);
            }
        },
        onProvinceChange() {
            this.municipality = null;
            this.fetchMunicipalities(this.province);
        },
        fetchMunicipalities(province) {
            axios.get(`/provinces/${province}`).then(res => {
                this.municipalities = res.data;
            }).catch(error => {
                console.error('Error fetching municipalities:', error);
            });
        }
    };
}
