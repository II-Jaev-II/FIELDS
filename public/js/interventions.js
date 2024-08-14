function machineriesAddRow() {
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

function facilitiesAddRow() {
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

function livestockAddRow() {
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
