const app = Vue.createApp({
    el: "#q-app",
    delimiters: ['{{', '}}'],
    data() {
        return {
            
        }
    },
});
app.use(Quasar);
app.mount('#q-app');

const plot = document.getElementById('plot');
const bar_type = document.getElementById('type').value;

const layout = {
    title: "Graphs",
}

const data = [
    {
        x: ['giraffes', 'orangutans', 'monkeys'],
        y: [20, 14, 23],
        type: 'bar'
    }
];

const pie_data = [
    {
        labels: ['giraffes', 'orangutans', 'monkeys'],
        values: [20, 14, 23],
        type: 'pie'
    }
];

const plot_data = [
    {
        x: ['giraffes', 'orangutans', 'monkeys'],
        y: [20, 14, 23]
    }
]
if(bar_type == 'Bar Graph'){
    Plotly.newPlot(plot, data, layout);
}
else if(bar_type == 'Pie Chart'){
    Plotly.newPlot(plot, pie_data, layout);
}
else if(bar_type == 'Plot'){
    Plotly.newPlot(plot, plot_data, layout);
}