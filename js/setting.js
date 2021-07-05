const bar_type = document.getElementById('default_type').value;
const app = Vue.createApp({
    el: "#q-app",
    delimiters: ['{{', '}}'],
    data() {
        return {
            options: [
                'Bar Graph', 'Pie Chart', 'Plot'
            ],
            model: 'Bar Graph'
        }
    }
});
app.use(Quasar);
app.mount('#q-app');