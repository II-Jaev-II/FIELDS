function eLinkageAddRow() {
    return {
        rows: [{ id: 1 }],
        commodities: [],
        subCommodities: [],
        selectedSubCommodity: [],

        onCommodityChange(event, index) {
            axios.get(`/commodities/${event.target.value}`).then(res => {
                const selectedId = this.selectedSubCommodity[index];
                this.subCommodities[index] = res.data;
                this.$nextTick(() => {
                    this.selectedSubCommodity[index] = selectedId;
                });
            });
        },

        addRow() {
            this.rows.push({ id: Math.random().toString(36).slice(2, 7) });
            this.commodities.push(null);
            this.subCommodities.push([]);
            this.selectedSubCommodity.push(null);
        },

        removeRow(index) {
            this.rows.splice(index, 1);
            this.commodities.splice(index, 1);
            this.subCommodities.splice(index, 1);
            this.selectedSubCommodity.splice(index, 1);
        },
    };
}
