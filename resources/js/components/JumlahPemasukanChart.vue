<script>
import { Line } from "vue-chartjs";
export default {
    extends: Line,
    data() {
        return {
            chartData: {
                labels: ["Kontol", "Babi"],
                datasets: [
                    {
                        label: "Data Pemasukan",
                        data: [929, 219],
                        fill: false,
                        borderColor: "#2554FF",
                        backgroundColor: "#2554FF",
                        borderWidth: 1,
                    },
                ],
            },
            options: {
                scales: {
                    yAxes: [
                        {
                            ticks: {
                                beginAtZero: true,
                            },
                            gridLines: {
                                display: true,
                            },
                        },
                    ],
                    xAxes: [
                        {
                            gridLines: {
                                display: false,
                            },
                        },
                    ],
                },
                legend: {
                    display: true,
                },
                responsive: true,
                maintainAspectRatio: false,
            },
        };
    },
    mounted() {
        // this.getResult();
        this.renderChart(this.chartData, this.options);
    },
    methods: {
        getResult() {
            this.$axios
                .get(`api/getJumlahPemasukan`)
                .then((response) => {
                    this.chartData.labels = response.data.labels;
                    this.chartData.datasets[0].data = response.data.data;
                })
                .catch(function (error) {
                    console.log(error);
                });
        },
    },
};
</script>
