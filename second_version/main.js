
const App = new Vue({   
        el: '#app',
        data : {         
            discs : [ ], 
        },  
        created(){
            axios.get('http://localhost/php-ajax-dischi/server.php')
                .then( (response) => {

                    console.log(response);
                    this.discs = response.data;
                    console.log(this.discs);
                })
                .catch(function (error) {

                    console.log(error);
                })
        }   
    })