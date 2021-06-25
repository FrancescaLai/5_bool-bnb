var app = new Vue({
    el: '#app',
    data: {
        idApartment: '',
        baseUrl: 'https://api.tomtom.com/',
        apiKey: 'Ftk43BCJTsswF7IOGeBv3bPKdUI84Hn4',
        radius: 20000,
        query: '',
        lastQuery: '',
        isQueryActive: false,
        dropdownResults: false,
        position: [],
        radiusResults: [],
        randomApartments: [],
        searchResults: [],
        myApartments: [],
        myApartmentsResults: [],
        container: 'map',
        lat: '0',
        long: '0',
        isMenuActive: false,
        images: [
            {
                url: 'images/section-slider-1.jpg',
                firstUser: 'Scott Russell',
                firstUserImg: 'images/slider-user-1.svg',
                firstRewiew: '4.5',
                secondUser: 'Giulia Trevisani',
                secondUserImg: 'images/slider-user-2.svg',
                secondRewiew: '4.8',
            },
            {
                url: 'images/section-slider-2.jpg',
                firstUser: 'Lucilla Gianello',
                firstUserImg: 'images/slider-user-3.svg',
                firstRewiew: '4.9',
                secondUser: 'Rachel Bailey',
                secondUserImg: 'images/slider-user-4.svg',
                secondRewiew: '4.1',
            },
            {
                url: 'images/section-slider-3.jpg',
                firstUser: 'Tullio Pedroni',
                firstUserImg: 'images/slider-user-5.svg',
                firstRewiew: '4.8',
                secondUser: 'Dante Fattori',
                secondUserImg: 'images/slider-user-6.svg',
                secondRewiew: '4.4',
            },
        ],
        imgIndex: 0,
        autoplay: null,
        priceOrder: '',
        count: 0,
        numBedList: ['Tutti'],
        selectedNumBed: 'Tutti',
        numMqList: [
            'Tutti'
        ],
        selectedMq: 'Tutti',
        servicesList: [
            'Tutti'
        ],
        selectedService: 'Tutti'
        services: [],
        selectedServices: [],
        servicesDropdwon: false,
    },

    methods: {
        /**
         * @description Funzione di ricerca appartamenti
         */
        apartmentsSearch: function () {

            axios.get(this.baseUrl + '/search/2/geocode/' + this.query + '.json', {
                params: {
                    lat: this.position[0],
                    lon: this.position[1],
                    radius: this.radius,
                    key: this.apiKey,
                }
            })
                .then((response) => {
                    this.searchResults = response.data.results;
                    this.lastQuery = this.query;
                    this.query = '';
                    this.myApartmentsResults = [];
                    this.radiusResults = [];
                    this.dropdownResults = false;
                    this.isQueryActive = true;
                    let search = this.searchResults[0];
                    let my = this.myApartments;
                    let pickRadius = (this.radius / 1000) / 111;
                    for (var k = 0; k < my.length; k++) {

                        if ((my[k].latitude > (search.position.lat - pickRadius)) &&
                            (my[k].latitude < (search.position.lat + pickRadius)) &&
                            (my[k].longitude > (search.position.lon - pickRadius)) &&
                            (my[k].longitude < (search.position.lon + pickRadius))) {
                            
                            if (!this.myApartmentsResults.includes(my[k])) {
                                this.myApartmentsResults.push(this.myApartments[k]);
                            }
                        }
                    }

                    this.createMap();

                    this.myApartmentsResults.forEach(this.addMarker);
                    
                });
        },

        /**
         * @description Funzione che ricerca il luogo indicato dall'utente
         */
        radiusSearch: function () {
            axios.get(this.baseUrl + '/search/2/geocode/' + this.query + '.json', {
                params: {
                    key: this.apiKey
                }
            })
                .then((response) => {
                    this.radiusResults = response.data.results;
                    this.dropdownResults = true;
                })
        },

        /**
         * @description Restituisce la position(latitudine e longitudine) del luogo indicato 
         * @param {*} index 
         * @returns 
         */
        getPosition: function (index) {
            this.position.splice(0);
            this.position.push(this.radiusResults[index].position.lat);
            this.position.push(this.radiusResults[index].position.lon);
            this.dropdownResults = false;
            return this.position;
        },

        /**
         * @description Show/Hide Menu and toggle document scrolling
         */
        toggleMenu: function () {
            if (this.isMenuActive == false) {
                this.isMenuActive = true;
                document.body.classList.add("stop-scrolling");
            } else {
                this.isMenuActive = false;
                document.body.classList.remove("stop-scrolling");
            }
        },

        /**
         * @description Create map
         */
        createMap: function () {
            // setMap = [this.lat, this.long];
            const city = {lng: this.position[1], lat: this.position[0]};
            map = tt.map({
                key: this.apiKey,
                container: 'map',
                // setMap: center,
                center: city,
                zoom: 11,
                minZoom: 5,
            });

        },

        /**
         * @description Add markers to map
         */
        addMarker: function (item) {
            var location = [item.longitude, item.latitude]; 
            var marker = new tt.Marker().setLngLat(location).addTo(map)
        },

        /**
         * @description Slider next image
         */
        nextImage: function () {
            this.imgIndex++;

            if (this.imgIndex == this.images.length) {
                this.imgIndex = 0;
            }
        },

        /**
         * @description Slider prev image
         */
        prevImage: function () {
            this.imgIndex--;

            if (this.imgIndex < 0) {
                this.imgIndex = this.images.length - 1;
            }
        },

        /**
         * @description Funzione per filtrare gli appartamneti per i numeri di letti
         */
        /**
         * @description 
         */
        clearAutoplay: function() {
            clearInterval(this.autoplay);
            this.autoplay = setInterval(this.carouselNext, 4000);
        },

        numBed: function () {
            while (this.count < this.myApartmentsResults.length) {
                if (this.numBedList.indexOf(this.myApartmentsResults[this.count].num_bed) == -1) {
                    this.numBedList.push(this.myApartmentsResults[this.count].num_bed);
                }
                this.count++;
            }
            this.count = 0;
        },

        /**
         * @description Funzione per ordinare gli appartamenti per prezzo al giorno in ordine crescente o decrescente  
         * @param {} a 
         * @param {*} b 
         */
        ordina: function (a, b) {
            this.myApartmentsResults.sort((a, b) => {
                if (this.priceOrder == "asc") {
                    return a.price_day - b.price_day;
                } else if (this.priceOrder == "dis") {
                    return b.price_day - a.price_day;
                }
            });
        },

        /**
         * @description Funzione che 'dovrebbe' filtrare gli appartamenti per i servizi
         */
        isServices: function () {
            while (this.count < this.myApartmentsResults.length) {
                if (this.servicesList.indexOf(this.myApartmentsResults[this.count].num_bed) == -1) {
                    this.servicesList.push(this.myApartmentsResults[this.count].num_bed);
                }
                this.count++;
        /**
         * 
         * @description mostra/nasconde checkbox
         * @returns results
         */
        showCheckboxes: function () {
        var checkboxes = document.getElementById("checkboxes");
            if (!this.servicesDropdwon) {
                checkboxes.style.display = "block";
                this.servicesDropdwon = true;
            } else {
                checkboxes.style.display = "none";
                this.servicesDropdwon = false;
            }
        },

        /**
         * @description Funzione che filtra gli appartamenti per i Mq
         */
        numMq: function(){
            while (this.count < this.myApartmentsResults.length) {
                if (this.numMqList.indexOf(this.myApartmentsResults[this.count].mq) == -1) {
                    this.numMqList.push(this.myApartmentsResults[this.count].mq);
                }
                this.count++;
            }
            this.count = 0;
        }
    },

    mounted: function () {
        // Get all services
        let apartmentslink = 'http://localhost:8000/api/guest'
        axios.get(apartmentslink).then((result) => {
            this.myApartments = result.data;

            /* Randomize array in-place */
            this.randomApartments = result.data;
            for (let i = this.randomApartments.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));
                [this.randomApartments[i], this.randomApartments[j]] = [this.randomApartments[j], this.randomApartments[i]];
            }
        });

        // Get all services
        let servicesLink = 'http://localhost:8000/api/services'
        axios.get(servicesLink).then((result) => {
            this.services = result.data;
        });

        // Carousel autoplay
        this.autoplay = setInterval(this.nextImage, 4000);

        // Initial map
        map = tt.map({
            key: this.apiKey,
            container: 'map'
        });
    },

    computed: {
        selectFilters: function() {
            if( this.selectedServices.length == 0 ) {
                return this.myApartmentsResults;
            }
        }
    },

})