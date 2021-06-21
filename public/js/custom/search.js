var app = new Vue({
    el: '#app',
    data: {
        idApartment: '',
        baseUrl: 'https://api.tomtom.com/',
        apiKey: 'Ftk43BCJTsswF7IOGeBv3bPKdUI84Hn4',
        radius: '',
        query: '',
        dropdownResults: true,
        position: [],
        radiusResults: [],
        apartmentsResults: [],
        apartments: [],
        isMenuActive: false,
    },
    methods: {
        /**
         * @description Funzione di ricerca appartamenti
         */
        apartmentsSearch: function() {
            axios.get(this.baseUrl + '/search/2/geocode/' + this.query + '.json',{
                params:{
                    lat: this.position[0],
                    lon: this.position[1],
                    radius: this.radius,
                    key: this.apiKey,
                }
            })
            .then((response) => {
                console.log(response.data.results)
                this.apartmentsResults = response.data.results;
            })
        },

        /**
         * @description Funzione che ricerca il luogo indicato dall'utente
         */
        radiusSearch: function(){
            axios.get(this.baseUrl + '/search/2/geocode/' + this.query + '.json',{
                params:{
                    key: this.apiKey
                }
            })
            .then((response) => {
                console.log(response.data.results)
                this.radiusResults = response.data.results;
            })
        },

        /**
         * @description Restituisce la position(latitudine e longitudine) del luogo indicato 
         * @param {*} index 
         * @returns 
         */
        getPosition: function(index){
            this.position.splice(0);
            this.position.push(this.radiusResults[index].position.lat);
            this.position.push(this.radiusResults[index].position.lon);
            this.dropdownResults = false;
            console.log(this.position);
            return this.position;
        },

        /**
         * @description Show/Hide Menu and toggle document scrolling
         */
        toggleMenu: function() {
            if (this.isMenuActive == false) {
              this.isMenuActive = true;
              document.body.classList.add("stop-scrolling");
            } else {
              this.isMenuActive = false;
              document.body.classList.remove("stop-scrolling");
            }
          },

    },
    mounted: function(){
        let link = 'http://localhost:8000/api/guest'
        axios.get(link).then((result)=>{
            this.apartments = result.data;
        });
    }
})