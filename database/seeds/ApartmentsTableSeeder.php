<?php

use Illuminate\Database\Seeder;
use App\Apartment;
use App\User;
use Illuminate\Support\Str;

class ApartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $apartment_1 = new Apartment();

        $user_1 = User::inRandomOrder()->first();

        $apartment_1->user_id = $user_1->id;
        $apartment_1->name = 'Villa Madrigali';
        $apartment_1->slug = Str::slug($apartment_1->name, '-');
        $apartment_1->visibility = 1;
        $apartment_1->image = 'https://placeholder.com/300';
        $apartment_1->description = 'Questo carinissimo alloggio si trova nel cuore del centro di Napoli, a due passi dal Museo Archeologico Nazionale e dalla più antica porta della città, la Porta di San Gennaro.
        E\' composto da un comodo letto matrimoniale e un bagno con doccia.
        E\' in una posizione perfetta per esplorare la città a piedi (ma è anche molto vicino ai principali mezzi di trasporto pubblico).';
        $apartment_1->num_room = 5;
        $apartment_1->num_bath = 2;
        $apartment_1->num_bed = 4;
        $apartment_1->mq = 200;
        $apartment_1->price_day = 400;
        $apartment_1->country = 'Italia';
        $apartment_1->region = 'Liguria';
        $apartment_1->city = 'Levanto';
        $apartment_1->street = 'Via Madrigali, 10';
        $apartment_1->zip_code = '19015';
        $apartment_1->floor = 1;
        $apartment_1->latitude = 44.17405634;
        $apartment_1->longitude = 9.62696406;
        $apartment_1->save();

        $apartment_2 = new Apartment();

        $user_2 = User::inRandomOrder()->first();

        $apartment_2->user_id = $user_2->id;
        $apartment_2->name = 'Hidden Gem of Cremona City Centre';
        $apartment_2->slug = Str::slug($apartment_2->name, '-');
        $apartment_2->visibility = 1;
        $apartment_2->image = 'https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=973&q=80';
        $apartment_2->description = 'Ampio bilocale nel centro di Cremona posizionato di fronte al Museo Civico e alla Biblioteca comunale a pochi passi dal centro storico e a 10 minuti a piedi dalla Stazione ferroviaria.';
        $apartment_2->num_room = 3;
        $apartment_2->num_bath = 1;
        $apartment_2->num_bed = 4;
        $apartment_2->mq = 80;
        $apartment_2->price_day = 100;
        $apartment_2->country = 'Italia';
        $apartment_2->region = 'Lombardia';
        $apartment_2->city = 'Cremona';
        $apartment_2->street = 'Via Dati Ugolani, 22';
        $apartment_2->zip_code = '26100';
        $apartment_2->floor = 2;
        $apartment_2->latitude = 45.13831569;
        $apartment_2->longitude = 10.02210615;
        $apartment_2->save();

        $apartment_3 = new Apartment();

        $apartment_3->user_id = $user_2->id;
        $apartment_3->name = 'Vila Guerreiro';
        $apartment_3->slug = Str::slug($apartment_3->name, '-');
        $apartment_3->visibility = 0;
        $apartment_3->image = 'https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80';
        $apartment_3->description = 'Situata a 1,7 km da Praia do Canavial, la Vila Guerreiro offre sistemazioni climatizzate con balcone e connessione WiFi gratuita.
        Le unità sono dotate di pavimenti piastrellati, angolo cottura completamente attrezzato con forno a microonde, zona pranzo, TV a schermo piatto con canali via cavo e bagno privato con doccia. A vostra disposizione un frigorifero, un piano cottura, un tostapane e una macchina da caffè.
        In loco troverete anche un\'area giochi per bambini.
        La Vila Guerreiro fornisce il servizio di autonoleggio, mentre nei dintorni potrete praticare l\'escursionismo.
        I luoghi di interesse nelle vicinanze includono il Lagos Live Science Center, la Chiesa di Santa Maria e il Mercato degli schiavi europei. La Vila Guerreiro dista 64 km dall\'aeroporto più vicino, quello di Faro, e fornisce un servizio di navetta aeroportuale a pagamento.
        Questa zona di Lagos è una delle preferite dai nostri ospiti, in base alle recensioni indipendenti.
        Le coppie apprezzano molto la posizione: l\'hanno valutata 8,7 per un viaggio a due.';
        $apartment_3->num_room = 7;
        $apartment_3->num_bath = 2;
        $apartment_3->num_bed = 6;
        $apartment_3->mq = 300;
        $apartment_3->price_day = 100;
        $apartment_3->country = 'Portugal';
        $apartment_3->region = 'Algarve';
        $apartment_3->city = 'Lagos';
        $apartment_3->street = 'Beco Josè da Gloria, 24';
        $apartment_3->zip_code = '8600';
        $apartment_3->floor = 1;
        $apartment_3->latitude = 37.09991;
        $apartment_3->longitude = -8.67812;
        $apartment_3->save();

        $apartment_4 = new Apartment();

        $user_3 = User::inRandomOrder()->first();

        $apartment_4->user_id = $user_3->id;
        $apartment_4->name = 'Industrial style Chicago Loft with FREE parking';
        $apartment_4->slug = Str::slug($apartment_4->name, '-');
        $apartment_4->visibility = 1;
        $apartment_4->image = 'https://images.unsplash.com/photo-1505873242700-f289a29e1e0f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1055&q=80';
        $apartment_4->description = 'Chicago is packed! So if you stay with us we will give you free parking. As a plus, by saying “Industrial Style” they indicate that they are new and modern.';
        $apartment_4->num_room = 4;
        $apartment_4->num_bath = 1;
        $apartment_4->num_bed = 2;
        $apartment_4->mq = 120;
        $apartment_4->price_day = 110;
        $apartment_4->country = 'USA';
        $apartment_4->region = 'Illinois';
        $apartment_4->city = 'Chicago';
        $apartment_4->street = 'Walters Ave, 12';
        $apartment_4->zip_code = '60062';
        $apartment_4->floor = 1;
        $apartment_4->latitude = 42.12726;
        $apartment_4->longitude = -87.81758;

        $apartment_4->save();
    }
}
