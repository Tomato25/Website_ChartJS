function myAjaxFunction() {
    $(document).ready(function () {
        var selection = document.getElementById("manufacturer").value;
        var link = "https://udon.ads.ntu.ac.uk/web/itec30151/N0826071/process.php?manufacturer='" + selection + "'";
        $.ajax({
            url: link,
            method: "GET",
            success: function (data = this.responseText) {
                console.log(data);
                var Model = [];
                var Weight = [];
                for (var i in data) {
                    Model.push(data[i].Model);
                    Weight.push(data[i].Weight);
                }
                var universalOptions = {
                    maintainAspectRatio: false,
                    responsice: false,
                    title: {
                        display: false,
                        text: "Product Sales Cost"
                    },
                    legend: { display: false },
                    scales: {
                        yAxes: [{
                            display: true,
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }

                var colours = ["blue", "green", "red", "cyan"];
                var chartdata = {
                    labels: Model,
                    datasets: [{
                        label: selection,
                        data: Weight,
                        backgroundColor: colours,
                        borderWidth: "2",
                        borderColour: "grey",
                        hoverBorderColor: "black"
                    }]
                }

                var ctx = document.getElementById("ChartNo2").getContext("2d");
                var barGraph = new Chart(ctx, {
                    type: "bar",
                    data: chartdata,
                    options: universalOptions
                });
            },
            error: function (data) {
                console.log(data);
            }
        });
    });
}