// MODAL JS CODE
$(document).ready(function () {
    $('#fcaModal').on('shown.bs.modal', function () {
        if (!$.fn.DataTable.isDataTable('#fcaTable')) {
            $('#fcaTable').DataTable({
                responsive: true,
                layout: {
                    topStart: {
                        buttons: ['copy', 'csv', 'excel']
                    }
                }
            });
        }
    });
});

$(document).ready(function () {
    $('#fcaModal').on('shown.bs.modal', function () {
        if (!$.fn.DataTable.isDataTable('#waterSourceTable')) {
            $('#waterSourceTable').DataTable({
                responsive: true,
                layout: {
                    topStart: {
                        buttons: ['copy', 'csv', 'excel']
                    }
                }
            });
        }
    });
});

$(document).ready(function () {
    $('#eRequestModal').on('shown.bs.modal', function () {
        if (!$.fn.DataTable.isDataTable('#eRequestTable')) {
            $('#eRequestTable').DataTable({
                responsive: true,
                layout: {
                    topStart: {
                        buttons: ['copy', 'csv', 'excel']
                    }
                }
            });
        }
    });
});

$(document).ready(function () {
    $('#accreditationModal').on('shown.bs.modal', function () {
        if (!$.fn.DataTable.isDataTable('#accreditationTable')) {
            $('#accreditationTable').DataTable({
                responsive: true,
                layout: {
                    topStart: {
                        buttons: ['copy', 'csv', 'excel']
                    }
                }
            });
        }
    });
});

$(document).ready(function () {
    $('#eLinkageModal').on('shown.bs.modal', function () {
        if (!$.fn.DataTable.isDataTable('#eLinkageTable')) {
            $('#eLinkageTable').DataTable({
                responsive: true,
                layout: {
                    topStart: {
                        buttons: ['copy', 'csv', 'excel']
                    }
                }
            });
        }
    });
});

$(document).ready(function () {
    $('#interventionModal').on('shown.bs.modal', function () {
        if (!$.fn.DataTable.isDataTable('#machineriesTable')) {
            $('#machineriesTable').DataTable({
                responsive: true,
                layout: {
                    topStart: {
                        buttons: ['copy', 'csv', 'excel']
                    }
                }
            });
        }
    });
});

$(document).ready(function () {
    $('#interventionModal').on('shown.bs.modal', function () {
        if (!$.fn.DataTable.isDataTable('#facilitiesTable')) {
            $('#facilitiesTable').DataTable({
                responsive: true,
                layout: {
                    topStart: {
                        buttons: ['copy', 'csv', 'excel']
                    }
                }
            });
        }
    });
});

$(document).ready(function () {
    $('#rtdmfModal').on('shown.bs.modal', function () {
        if (!$.fn.DataTable.isDataTable('#rtdmfTable')) {
            $('#rtdmfTable').DataTable({
                responsive: true,
                layout: {
                    topStart: {
                        buttons: ['copy', 'csv', 'excel']
                    }
                }
            });
        }
    });
});
/////////////////////////////////////////////////////////////////////////////////////

// FCA Chart
document.addEventListener('DOMContentLoaded', function () {
    const chartDataElement = document.getElementById('chart-data');
    const labels = JSON.parse(chartDataElement.getAttribute('data-labels'));
    const counts = JSON.parse(chartDataElement.getAttribute('data-counts'));

    const data = {
        labels: labels,
        datasets: [{
            data: counts,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
            ],
            borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
            ],
            borderWidth: 1,
            hoverOffset: 4
        }]
    };

    const config = {
        type: 'doughnut',
        data: data,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Number of registered FCA per province'
                }
            }
        },
    };

    const ctx = document.getElementById('fcaChart').getContext('2d');
    const fcaChart = new Chart(ctx, config);
});
/////////////////////////////////////////////////////////////////////////////////////

// E Request Chart
document.addEventListener('DOMContentLoaded', function () {
    const chartDataElement = document.getElementById('request-chart-data');
    const labels = JSON.parse(chartDataElement.getAttribute('data-request-labels'));
    const counts = JSON.parse(chartDataElement.getAttribute('data-request-counts'));

    const data = {
        labels: labels,
        datasets: [{
            data: counts,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(201, 203, 207, 0.2)'
            ],
            borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(201, 203, 207)'
            ],
            borderWidth: 1,
            hoverOffset: 4
        }]
    };

    const config = {
        type: 'bar',
        data: data,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            indexAxis: 'y',
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Number of nature of requests'
                }
            }
        },
    };

    const ctx = document.getElementById('requestChart').getContext('2d');
    const requestChart = new Chart(ctx, config);
});

document.addEventListener('DOMContentLoaded', function () {
    const chartDataElement = document.getElementById('request-type-chart-data');
    const labels = JSON.parse(chartDataElement.getAttribute('data-request-type-labels'));
    const counts = JSON.parse(chartDataElement.getAttribute('data-request-type-counts'));

    const data = {
        labels: labels,
        datasets: [{
            data: counts,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(201, 203, 207, 0.2)'
            ],
            borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(201, 203, 207)'
            ],
            borderWidth: 1,
            hoverOffset: 4
        }]
    };

    const config = {
        type: 'bar',
        data: data,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Number of requests(per Machinery)'
                }
            }
        },
    };

    const ctx = document.getElementById('requestTypeChart').getContext('2d');
    const requestTypeChart = new Chart(ctx, config);
});

document.addEventListener('DOMContentLoaded', function () {
    const chartDataElement = document.getElementById('facility-type-chart-data');
    const labels = JSON.parse(chartDataElement.getAttribute('data-facility-type-labels'));
    const counts = JSON.parse(chartDataElement.getAttribute('data-facility-type-counts'));

    const data = {
        labels: labels,
        datasets: [{
            data: counts,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(201, 203, 207, 0.2)'
            ],
            borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(201, 203, 207)'
            ],
            borderWidth: 1,
            hoverOffset: 4
        }]
    };

    const config = {
        type: 'bar',
        data: data,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            indexAxis: 'y',
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Number of requests(per Facility)'
                }
            }
        },
    };

    const ctx = document.getElementById('facilityTypeChart').getContext('2d');
    const facilityTypeChart = new Chart(ctx, config);
});

document.addEventListener('DOMContentLoaded', function () {
    const chartDataElement = document.getElementById('tool-type-chart-data');
    const labels = JSON.parse(chartDataElement.getAttribute('data-tool-type-labels'));
    const counts = JSON.parse(chartDataElement.getAttribute('data-tool-type-counts'));

    const data = {
        labels: labels,
        datasets: [{
            data: counts,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(201, 203, 207, 0.2)'
            ],
            borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(201, 203, 207)'
            ],
            borderWidth: 1,
            hoverOffset: 4
        }]
    };

    const config = {
        type: 'bar',
        data: data,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            indexAxis: 'y',
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Number of requests(per Tool)'
                }
            }
        },
    };

    const ctx = document.getElementById('toolTypeChart').getContext('2d');
    const toolTypeChart = new Chart(ctx, config);
});

document.addEventListener('DOMContentLoaded', function () {
    const chartDataElement = document.getElementById('equipment-type-chart-data');
    const labels = JSON.parse(chartDataElement.getAttribute('data-equipment-type-labels'));
    const counts = JSON.parse(chartDataElement.getAttribute('data-equipment-type-counts'));

    const data = {
        labels: labels,
        datasets: [{
            data: counts,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(201, 203, 207, 0.2)'
            ],
            borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(201, 203, 207)'
            ],
            borderWidth: 1,
            hoverOffset: 4
        }]
    };

    const config = {
        type: 'doughnut',
        data: data,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Number of requests(per Equipment)'
                }
            }
        },
    };

    const ctx = document.getElementById('equipmentTypeChart').getContext('2d');
    const equipmentTypeChart = new Chart(ctx, config);
});

document.addEventListener('DOMContentLoaded', function () {
    const chartDataElement = document.getElementById('agricultural-type-chart-data');
    const labels = JSON.parse(chartDataElement.getAttribute('data-agricultural-type-labels'));
    const counts = JSON.parse(chartDataElement.getAttribute('data-agricultural-type-counts'));

    const data = {
        labels: labels,
        datasets: [{
            data: counts,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(201, 203, 207, 0.2)'
            ],
            borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(201, 203, 207)'
            ],
            borderWidth: 1,
            hoverOffset: 4
        }]
    };

    const config = {
        type: 'doughnut',
        data: data,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Number of requests(per Agricultural)'
                }
            }
        },
    };

    const ctx = document.getElementById('agriculturalTypeChart').getContext('2d');
    const agriculturalTypeChart = new Chart(ctx, config);
});

document.addEventListener('DOMContentLoaded', function () {
    const chartDataElement = document.getElementById('animal-type-chart-data');
    const labels = JSON.parse(chartDataElement.getAttribute('data-animal-type-labels'));
    const counts = JSON.parse(chartDataElement.getAttribute('data-animal-type-counts'));

    const data = {
        labels: labels,
        datasets: [{
            data: counts,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(201, 203, 207, 0.2)'
            ],
            borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(201, 203, 207)'
            ],
            borderWidth: 1,
            hoverOffset: 4
        }]
    };

    const config = {
        type: 'doughnut',
        data: data,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Number of requests(per Animal)'
                }
            }
        },
    };

    const ctx = document.getElementById('animalTypeChart').getContext('2d');
    const animalTypeChart = new Chart(ctx, config);
});
/////////////////////////////////////////////////////////////////////////////////////

// CSO CHART JS
document.addEventListener('DOMContentLoaded', function () {
    const chartDataElement = document.getElementById('cso-data');
    const labels = JSON.parse(chartDataElement.getAttribute('cso-data-labels'));
    const counts = JSON.parse(chartDataElement.getAttribute('cso-data-counts'));

    const data = {
        labels: labels,
        datasets: [{
            data: counts,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(201, 203, 207, 0.2)'
            ],
            borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(201, 203, 207)'
            ],
            borderWidth: 1,
            hoverOffset: 4
        }]
    };

    const config = {
        type: 'doughnut',
        data: data,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Number of FCA who submitted CSO Accreditation(per province)'
                }
            }
        },
    };

    const ctx = document.getElementById('csoChart').getContext('2d');
    const csoTypeChart = new Chart(ctx, config);
});
/////////////////////////////////////////////////////////////////////////////////////

// RCEF CHART JS
document.addEventListener('DOMContentLoaded', function () {
    const chartDataElement = document.getElementById('rcef-data');
    const labels = JSON.parse(chartDataElement.getAttribute('rcef-data-labels'));
    const counts = JSON.parse(chartDataElement.getAttribute('rcef-data-counts'));

    const data = {
        labels: labels,
        datasets: [{
            data: counts,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(201, 203, 207, 0.2)'
            ],
            borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(201, 203, 207)'
            ],
            borderWidth: 1,
            hoverOffset: 4
        }]
    };

    const config = {
        type: 'doughnut',
        data: data,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Number of FCA who submitted RCEF Accreditation(per province)'
                }
            }
        },
    };

    const ctx = document.getElementById('rcefChart').getContext('2d');
    const rcefTypeChart = new Chart(ctx, config);
});
/////////////////////////////////////////////////////////////////////////////////////

// E LINKAGE CHART JS
document.addEventListener('DOMContentLoaded', function () {
    const chartDataElement = document.getElementById('commodity-data');
    const labels = JSON.parse(chartDataElement.getAttribute('commodity-data-labels'));
    const counts = JSON.parse(chartDataElement.getAttribute('commodity-data-counts'));

    const data = {
        labels: labels,
        datasets: [{
            data: counts,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(201, 203, 207, 0.2)'
            ],
            borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(201, 203, 207)'
            ],
            borderWidth: 1,
            hoverOffset: 4
        }]
    };

    const config = {
        type: 'doughnut',
        data: data,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Number of listed commodities'
                }
            }
        },
    };

    const ctx = document.getElementById('commodityChart').getContext('2d');
    const commodityChart = new Chart(ctx, config);
});

document.addEventListener('DOMContentLoaded', function () {
    const chartDataElement = document.getElementById('subCommodity-data');
    const labels = JSON.parse(chartDataElement.getAttribute('subCommodity-data-labels'));
    const counts = JSON.parse(chartDataElement.getAttribute('subCommodity-data-counts'));

    const data = {
        labels: labels,
        datasets: [{
            data: counts,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(201, 203, 207, 0.2)',
                'rgba(149, 40, 166, 0.2)',
                'rgba(83, 201, 24, 0.2)',
                'rgba(148, 109, 10, 0.2)',
                'rgba(173, 14, 40, 0.2)'
            ],
            borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(201, 203, 207)',
                'rgba(149, 40, 166)',
                'rgba(83, 201, 24)',
                'rgba(148, 109, 10)',
                'rgba(173, 14, 40)'
            ],
            borderWidth: 1,
            hoverOffset: 4
        }]
    };

    const config = {
        type: 'doughnut',
        data: data,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Number of listed sub commodities'
                }
            }
        },
    };

    const ctx = document.getElementById('subCommodityChart').getContext('2d');
    const subCommodityChart = new Chart(ctx, config);
});
/////////////////////////////////////////////////////////////////////////////////////

// INTERVENTIONS CHART JS
document.addEventListener('DOMContentLoaded', function () {
    const chartDataElement = document.getElementById('equipment-data');
    const labels = JSON.parse(chartDataElement.getAttribute('equipment-data-labels'));
    const counts = JSON.parse(chartDataElement.getAttribute('equipment-data-counts'));

    const data = {
        labels: labels,
        datasets: [{
            data: counts,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(201, 203, 207, 0.2)',
                'rgba(149, 40, 166, 0.2)',
                'rgba(83, 201, 24, 0.2)',
                'rgba(148, 109, 10, 0.2)',
                'rgba(173, 14, 40, 0.2)',
                'rgba(124, 40, 143, 0.2)',
                'rgba(40, 191, 133, 0.2)',
                'rgba(40, 209, 10, 0.2)',
                'rgba(173, 134, 3, 0.2)',
                'rgba(133, 32, 9, 0.2)',
                'rgba(86, 5, 237, 0.2)'
            ],
            borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(201, 203, 207)',
                'rgba(149, 40, 166)',
                'rgba(83, 201, 24)',
                'rgba(148, 109, 10)',
                'rgba(173, 14, 40)',
                'rgba(124, 40, 143)',
                'rgba(40, 191, 133)',
                'rgba(40, 209, 10)',
                'rgba(173, 134, 3)',
                'rgba(133, 32, 9)',
                'rgba(86, 5, 237)'
            ],
            borderWidth: 1,
            hoverOffset: 4
        }]
    };

    const config = {
        type: 'doughnut',
        data: data,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Number of interventions(in Machinery)'
                }
            }
        },
    };

    const ctx = document.getElementById('equipmentChart').getContext('2d');
    const equipmentChart = new Chart(ctx, config);
});

document.addEventListener('DOMContentLoaded', function () {
    const chartDataElement = document.getElementById('fundingAgency-data');
    const labels = JSON.parse(chartDataElement.getAttribute('fundingAgency-data-labels'));
    const counts = JSON.parse(chartDataElement.getAttribute('fundingAgency-data-counts'));

    const data = {
        labels: labels,
        datasets: [{
            data: counts,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(201, 203, 207, 0.2)',
                'rgba(149, 40, 166, 0.2)',
                'rgba(83, 201, 24, 0.2)',
                'rgba(148, 109, 10, 0.2)',
                'rgba(173, 14, 40, 0.2)',
                'rgba(124, 40, 143, 0.2)',
                'rgba(40, 191, 133, 0.2)',
                'rgba(40, 209, 10, 0.2)',
                'rgba(173, 134, 3, 0.2)',
                'rgba(133, 32, 9, 0.2)',
                'rgba(86, 5, 237, 0.2)'
            ],
            borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(201, 203, 207)',
                'rgba(149, 40, 166)',
                'rgba(83, 201, 24)',
                'rgba(148, 109, 10)',
                'rgba(173, 14, 40)',
                'rgba(124, 40, 143)',
                'rgba(40, 191, 133)',
                'rgba(40, 209, 10)',
                'rgba(173, 134, 3)',
                'rgba(133, 32, 9)',
                'rgba(86, 5, 237)'
            ],
            borderWidth: 1,
            hoverOffset: 4
        }]
    };

    const config = {
        type: 'doughnut',
        data: data,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Number of funding agencies(in Machinery)'
                }
            }
        },
    };

    const ctx = document.getElementById('fundingAgencyChart').getContext('2d');
    const fundingAgencyChart = new Chart(ctx, config);
});

document.addEventListener('DOMContentLoaded', function () {
    const chartDataElement = document.getElementById('fundSource-data');
    const labels = JSON.parse(chartDataElement.getAttribute('fundSource-data-labels'));
    const counts = JSON.parse(chartDataElement.getAttribute('fundSource-data-counts'));

    const data = {
        labels: labels,
        datasets: [{
            data: counts,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(201, 203, 207, 0.2)',
                'rgba(149, 40, 166, 0.2)',
                'rgba(83, 201, 24, 0.2)',
                'rgba(148, 109, 10, 0.2)',
                'rgba(173, 14, 40, 0.2)',
                'rgba(124, 40, 143, 0.2)',
                'rgba(40, 191, 133, 0.2)',
                'rgba(40, 209, 10, 0.2)',
                'rgba(173, 134, 3, 0.2)',
                'rgba(133, 32, 9, 0.2)',
                'rgba(86, 5, 237, 0.2)'
            ],
            borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(201, 203, 207)',
                'rgba(149, 40, 166)',
                'rgba(83, 201, 24)',
                'rgba(148, 109, 10)',
                'rgba(173, 14, 40)',
                'rgba(124, 40, 143)',
                'rgba(40, 191, 133)',
                'rgba(40, 209, 10)',
                'rgba(173, 134, 3)',
                'rgba(133, 32, 9)',
                'rgba(86, 5, 237)'
            ],
            borderWidth: 1,
            hoverOffset: 4
        }]
    };

    const config = {
        type: 'doughnut',
        data: data,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Number of fund sources(in Machinery)'
                }
            }
        },
    };

    const ctx = document.getElementById('fundSourceChart').getContext('2d');
    const fundSourceChart = new Chart(ctx, config);
});

document.addEventListener('DOMContentLoaded', function () {
    const chartDataElement = document.getElementById('facility-data');
    const labels = JSON.parse(chartDataElement.getAttribute('facility-data-labels'));
    const counts = JSON.parse(chartDataElement.getAttribute('facility-data-counts'));

    const data = {
        labels: labels,
        datasets: [{
            data: counts,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(201, 203, 207, 0.2)',
                'rgba(149, 40, 166, 0.2)',
                'rgba(83, 201, 24, 0.2)',
                'rgba(148, 109, 10, 0.2)',
                'rgba(173, 14, 40, 0.2)',
                'rgba(124, 40, 143, 0.2)',
                'rgba(40, 191, 133, 0.2)',
                'rgba(40, 209, 10, 0.2)',
                'rgba(173, 134, 3, 0.2)',
                'rgba(133, 32, 9, 0.2)',
                'rgba(86, 5, 237, 0.2)'
            ],
            borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(201, 203, 207)',
                'rgba(149, 40, 166)',
                'rgba(83, 201, 24)',
                'rgba(148, 109, 10)',
                'rgba(173, 14, 40)',
                'rgba(124, 40, 143)',
                'rgba(40, 191, 133)',
                'rgba(40, 209, 10)',
                'rgba(173, 134, 3)',
                'rgba(133, 32, 9)',
                'rgba(86, 5, 237)'
            ],
            borderWidth: 1,
            hoverOffset: 4
        }]
    };

    const config = {
        type: 'bar',
        data: data,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            indexAxis: 'y',
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Number of interventions(in Facilities)'
                }
            }
        },
    };

    const ctx = document.getElementById('facilityChart').getContext('2d');
    const facilityChart = new Chart(ctx, config);
});

document.addEventListener('DOMContentLoaded', function () {
    const chartDataElement = document.getElementById('facilityAgency-data');
    const labels = JSON.parse(chartDataElement.getAttribute('facilityAgency-data-labels'));
    const counts = JSON.parse(chartDataElement.getAttribute('facilityAgency-data-counts'));

    const data = {
        labels: labels,
        datasets: [{
            data: counts,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(201, 203, 207, 0.2)',
                'rgba(149, 40, 166, 0.2)',
                'rgba(83, 201, 24, 0.2)',
                'rgba(148, 109, 10, 0.2)',
                'rgba(173, 14, 40, 0.2)',
                'rgba(124, 40, 143, 0.2)',
                'rgba(40, 191, 133, 0.2)',
                'rgba(40, 209, 10, 0.2)',
                'rgba(173, 134, 3, 0.2)',
                'rgba(133, 32, 9, 0.2)',
                'rgba(86, 5, 237, 0.2)'
            ],
            borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(201, 203, 207)',
                'rgba(149, 40, 166)',
                'rgba(83, 201, 24)',
                'rgba(148, 109, 10)',
                'rgba(173, 14, 40)',
                'rgba(124, 40, 143)',
                'rgba(40, 191, 133)',
                'rgba(40, 209, 10)',
                'rgba(173, 134, 3)',
                'rgba(133, 32, 9)',
                'rgba(86, 5, 237)'
            ],
            borderWidth: 1,
            hoverOffset: 4
        }]
    };

    const config = {
        type: 'bar',
        data: data,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            indexAxis: 'y',
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Number of funding agencies(in Facilities)'
                }
            }
        },
    };

    const ctx = document.getElementById('facilityAgencyChart').getContext('2d');
    const facilityAgencyChart = new Chart(ctx, config);
});

document.addEventListener('DOMContentLoaded', function () {
    const chartDataElement = document.getElementById('facilitySource-data');
    const labels = JSON.parse(chartDataElement.getAttribute('facilitySource-data-labels'));
    const counts = JSON.parse(chartDataElement.getAttribute('facilitySource-data-counts'));

    const data = {
        labels: labels,
        datasets: [{
            data: counts,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(201, 203, 207, 0.2)',
                'rgba(149, 40, 166, 0.2)',
                'rgba(83, 201, 24, 0.2)',
                'rgba(148, 109, 10, 0.2)',
                'rgba(173, 14, 40, 0.2)',
                'rgba(124, 40, 143, 0.2)',
                'rgba(40, 191, 133, 0.2)',
                'rgba(40, 209, 10, 0.2)',
                'rgba(173, 134, 3, 0.2)',
                'rgba(133, 32, 9, 0.2)',
                'rgba(86, 5, 237, 0.2)'
            ],
            borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(201, 203, 207)',
                'rgba(149, 40, 166)',
                'rgba(83, 201, 24)',
                'rgba(148, 109, 10)',
                'rgba(173, 14, 40)',
                'rgba(124, 40, 143)',
                'rgba(40, 191, 133)',
                'rgba(40, 209, 10)',
                'rgba(173, 134, 3)',
                'rgba(133, 32, 9)',
                'rgba(86, 5, 237)'
            ],
            borderWidth: 1,
            hoverOffset: 4
        }]
    };

    const config = {
        type: 'bar',
        data: data,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            indexAxis: 'y',
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Number of fund sources(in Facilities)'
                }
            }
        },
    };

    const ctx = document.getElementById('facilitySourceChart').getContext('2d');
    const facilitySourceChart = new Chart(ctx, config);
});
////////////////////////////////////////////////////////////////////////////////////

// WATER SOURCE PROFILE CHART JS
document.addEventListener('DOMContentLoaded', function () {
    const chartDataElement = document.getElementById('water-source-data');
    const labels = JSON.parse(chartDataElement.getAttribute('water-source-data-labels'));
    const counts = JSON.parse(chartDataElement.getAttribute('water-source-data-counts'));

    const data = {
        labels: labels,
        datasets: [{
            data: counts,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(201, 203, 207, 0.2)',
                'rgba(149, 40, 166, 0.2)',
                'rgba(83, 201, 24, 0.2)',
                'rgba(148, 109, 10, 0.2)',
                'rgba(173, 14, 40, 0.2)',
                'rgba(124, 40, 143, 0.2)',
                'rgba(40, 191, 133, 0.2)',
            ],
            borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(201, 203, 207)',
                'rgba(149, 40, 166)',
                'rgba(83, 201, 24)',
                'rgba(148, 109, 10)',
                'rgba(173, 14, 40)',
                'rgba(124, 40, 143)',
                'rgba(40, 191, 133)',
            ],
            borderWidth: 1,
            hoverOffset: 4
        }]
    };

    const config = {
        type: 'doughnut',
        data: data,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Number of Water Source(per Association)'
                }
            }
        },
    };

    const ctx = document.getElementById('waterSourceChart').getContext('2d');
    const waterSourceChart = new Chart(ctx, config);
});

////////////////////////////////////////////////////////////////////////////////////

// COC STATUS CHART JS
document.addEventListener('DOMContentLoaded', function () {
    const data = {
        labels: [
            'Expired',
            'Not Expired'
        ],
        datasets: [{
            data: [window.chartData.expiredCount, window.chartData.notExpiredCount],
            backgroundColor: [
                'rgb(255, 99, 132)',
                'rgb(54, 162, 235)'
            ],
            borderWidth: 1,
            hoverOffset: 4
        }]
    };

    const config = {
        type: 'doughnut',
        data: data,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'COC Status (per Association)'
                }
            }
        },
    };

    const ctx = document.getElementById('statusChart').getContext('2d');
    const statusChart = new Chart(ctx, config);
});
