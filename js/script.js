const { createApp } = Vue;

createApp({
    data() {
        return {
            list: [],
            apiUrl: 'server.php',
            newElement: ''
        }
    },
    methods: {
        getList() {
            axios.get(this.apiUrl).then((el) => {
                console.log(el.data);
                this.list = el.data;
            })
        },
        addElement(){
            if(this.newElement){
                console.log(this.newElement);
                const newArray = {
                    newItem: {
                        itemList: this.newElement
                    }
                };
                axios.post(this.apiUrl, newArray, { headers: {'Content-Type': 'multipart/form-data'} }).then((el) => {
                    console.log(el.data);
                    this.newElement = '';
                    this.list = el.data;
                });
            }
        }
    },
    mounted(){
        this.getList();
    }
}).mount('#app');