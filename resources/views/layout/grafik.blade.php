<script type="text/javascript">
    //bar chart
    var ctx = document.getElementById("barChart");
    //    ctx.height = 200;
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["January", "February", "March", "April", "May", "June", "July", "Agustus", "September",
                "Oktober", "November", "Desember"
            ],
            datasets: [{
                    label: "Target",
                    data: [65, 59, 80, 81, 56, 55, 40, 90, 15, 56, 43, 56],
                    borderColor: "rgba(0, 123, 255, 0.9)",
                    borderWidth: "0",
                    backgroundColor: "rgba(0, 123, 255, 0.5)"
                },
                {
                    label: "Realisasi",
                    data: [28, 48, 40, 19, 86, 27, 90, 15, 52, 53, 95, 57],
                    borderColor: "rgba(64, 64, 64, 1.0)",
                    borderWidth: "0",
                    backgroundColor: "rgba(0,0,0,0.07)"
                }
            ]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });


    // pie chart
    var ctx = document.getElementById("pieChart");
    ctx.height = 300;
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            datasets: [{
                data: [4500000, 25000000, 2000000, 1000000],
                backgroundColor: [
                    "rgba(0, 123, 255, 0.5)",
                    "rgba(255, 0, 0, 0.5)",
                    "rgba(255, 206, 86, 0.7)",
                    "rgba(40, 167, 69, 0.7)"
                ],
                hoverBackgroundColor: [
                    "rgba(0, 123, 255, 0.5)",
                    "rgba(255, 0, 0, 0.5)",
                    "rgba(255, 206, 86, 0.7)",
                    "rgba(40, 167, 69, 0.7)"
                ]
            }],
            labels: [
                "Telkomsss (Rp 4,500,000)",
                "Telkom Group (Rp 25,000,000)",
                "Governance (Rp 2,000,000)",
                "Enterprise (Rp 1,000,000)"
            ]
        },
        options: {
            responsive: true
        }
    });

    // pie chart
    var ctx2 = document.getElementById("pieChart2");
    ctx2.height = 300;
    var myChart2 = new Chart(ctx2, {
        type: 'pie',
        data: {
            datasets: [{
                data: [4500000, 25000000, 2000000, 1000000],
                backgroundColor: [
                    "rgba(0, 123, 255, 0.5)",
                    "rgba(255, 0, 0, 0.5)",
                    "rgba(255, 206, 86, 0.7)",
                    "rgba(40, 167, 69, 0.7)"
                ],
                hoverBackgroundColor: [
                    "rgba(0, 123, 255, 0.5)",
                    "rgba(255, 0, 0, 0.5)",
                    "rgba(255, 206, 86, 0.7)",
                    "rgba(40, 167, 69, 0.7)"
                ]
            }],
            labels: [
                "Telkomsss (Rp 4,500,000)",
                "Telkom Group (Rp 25,000,000)",
                "Governance (Rp 2,000,000)",
                "Enterprise (Rp 1,000,000)"
            ]
        },
        options: {
            responsive: true
        }
    });

    // Function to generate random color
    function getRandomColor() {
        var letters = "0123456789ABCDEF";
        var color = "#";
        for (var i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    }
</script>