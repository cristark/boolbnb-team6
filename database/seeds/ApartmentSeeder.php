<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
//ModelsBlade:
use App\Apartment;
use App\User;
use App\Message;
use App\Service;
use App\View;
use App\Sponsor;
use App\Image;
//Faker
use Faker\Generator as Faker;


class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // 20 appartamenti totali
        $apartments = [
            [
                '3',
                'Appartamento dentro il cuore di Roma',
                'Appartamento nel centro di Roma. A piccoli passi dal centro con molti servizi integrati',
                '4',
                '4',
                '2',
                '60',
                '50',
                'https://a0.muscache.com/im/pictures/00a45003-57fa-4c79-bb85-99a211e93367.jpg?im_w=960',
                '41.90717',
                '12.465',
                '0',
                'Italia',
                '(ROMA)',
                'Roma'
            ],
            [
                '1',
                'Domus Luxury Colosseum',
                "L’ appartamento è stato progettato da 0039 Design Lab con una particolare cura ai dettagli per rendere esclusivo il vostro soggiorno. L’ ambiente caldo ed accogliente vi darà il benvenuto nel cuore della città eterna e precisamente nel Rione Monti a pochi passi dal Colosseo, Altare della Patria, Fori Imperiali e Palatino.",
                '3',
                '3',
                '1',
                '240',
                '116',
                'https://a0.muscache.com/im/pictures/pro_photo_tool/Hosting-40485370-unapproved/original/f0d778d2-9de4-46db-a4bb-f1007c0d913b.JPEG?im_w=1200',
                '41.90793',
                '12.46557',
                '0',
                'Italia',
                '(ROMA)',
                'Roma'
            ],
            [
                '1',
                'Diamond Suite Verona',
                'Il Diamond Suite è situato a 300 mt dal centro espositivo Veronafiere a soli 5 minuti in automobile dal centro città, la fermata bus si trova a 100 mt, offre un ambiente moderno lussuoso e una zona relax con jacuzzi idromassaggio.',
                '4',
                '3',
                '1',
                '260',
                '226',
                'https://a0.muscache.com/im/pictures/d5196e9e-6b61-467c-9ba5-08addc1a1836.jpg?im_w=960',
                '45.43794',
                '10.99480',
                '0',
                'Italia',
                '(VR)',
                'Verona'
            ],
            [
                '1',
                'Splendido Loft Appartamento panoramico Roma',
                'Loft panoramico vicino a piazza di Spagna, con vista incomparabile su Roma. Luminoso e tranquillo. Quasi tutti i luoghi turistici raggiungibili a piedi. Vicino a 2 stazioni della metro. Climatizzazione, ascensore, Wi-Fi gratis, lavatrice/asciugatrice',
                '3',
                '3',
                '2',
                '67',
                '106',
                'https://a0.muscache.com/im/pictures/29045039/0e7fdd66_original.jpg?im_w=1200',
                '41.92127',
                '12.46378',
                '0',
                'Italia',
                '(ROMA)',
                'Roma'
            ],
            [
                '2',
                'Moderno "Appartamento Malga" con Vista Montagna, Wi-Fi, Giardino e Terrazza; Parcheggio disponibile',
                "Il bellissimo 'Appartamento Malga' appartiene al complesso di appartamenti 'Unterkehrhof', una tipica casa sudtirolese situata all'inizio della famosa Valle di Gröden (Val Gardena), in posizione centrale, vicino a rinomati luoghi d'interesse come l'Alpe di Siusi.",
                '2',
                '3',
                '2',
                '53',
                '66',
                'https://a0.muscache.com/im/pictures/1cad649d-1075-4da3-843d-0d8e9959cac7.jpg?im_w=1200',
                '46.54394',
                '11.61565',
                '0',
                'Italia',
                '(BZ)',
                'Bolzano'
            ],
            [
                '2',
                'Kitty Corner In Kelowna!',
                'Brand New Building Corner Studio is Facing Mountains and City For you to Enjoy! This is one of the most desirable units in the building as it is 10 feet down a private hallway from the Elevator in the building. Very private with no foot traffic outside your door. ',
                '3',
                '4',
                '2',
                '63',
                '88',
                'images/flat-06.jpg',
                '49.8879177',
                '-119.49590',
                '0',
                'Canada',
                'British Columbia Kelowna',
                'Kelowna'
            ],
            [
                '2',
                'A Loft For You in The Center of Florence',
                'Nella mia casa sarete tutti benvenuti; troverete a vostra disposizione un loft con il letto in soppalco, una cucina, un salotto con divano letto e il bagno. Inoltre la casa dispone di Wifi free illimitato. ',
                '3',
                '2',
                '3',
                '47',
                '168',
                'https://a0.muscache.com/im/pictures/pro_photo_tool/Hosting-39028007-unapproved/original/d86ac084-21dc-4ea4-a3f7-9a94e573e729.JPEG?im_w=1200',
                '43.76315',
                '11.25823',
                '0',
                'Italia',
                '(FI)',
                'Firenze'
            ],
            [
                '2',
                'Rossonapoletano B&B Napoli Green',
                'The room includes a double bed and a single bed. Consisting of a desk, cupboard, wardrobe, chair and chest of drawers, air conditioning. the room is chosen by the owner based on the number of people.',
                '4',
                '5',
                '3',
                '83',
                '98',
                'https://a0.muscache.com/im/pictures/c931d94f-a8c2-48de-921e-86b2afa2ac95.jpg?im_w=1200',
                '40.84708',
                '14.26153',
                '0',
                'Italia',
                '(NA)',
                'Napoli'
            ],
            [
                '3',
                'Suite Monolocale a Rimini Marina Centro',
                'A Rimini Marina Centro c’è una novità: Rimini Bay Suite & Residence. 12 appartamenti, tutti completamente ristrutturati a fine 2019, capaci di ospitare da 2 fino a 7 persone e caratterizzati ognuno da arredi, finiture e servizi esclusivi.',
                '4',
                '3',
                '3',
                '63',
                '68',
                'https://a0.muscache.com/im/pictures/f83c7bcb-a141-4269-a9d9-e704438e73c4.jpg?im_w=1200',
                '44.06474',
                '12.58317',
                '0',
                'Italia',
                '(RI)',
                'Rimini'
            ],
            [
                '2',
                'Casa nuova con giardino,bici, a 800mt mare/fiera',
                'Appartamento fra mare e verde, rinnovato completamente in casa bifamiliare: cucina abitabile, due matrimoniali, terza camera x gioco o eventuale lettino per bimbi, sala con divano letto singolo, ampi spazi esterni per pranzare, giardino, 2 posti auto.',
                '4',
                '4',
                '2',
                '73',
                '88',
                'images/flat-12.jpg',
                '44.06469',
                '12.58184',
                '0',
                'Italia',
                '(RA)',
                "Ragusa"
            ],
            [
                '3',
                'Villasimius villa a due passi dal mare',
                'Villa a 150 metri dalla spiaggia di Is Traias e vicinissima al centro di Villasimius.',
                '2',
                '3',
                '2',
                '153',
                '150',
                'https://a0.muscache.com/im/pictures/111446599/63213115_original.jpg?im_w=1200',
                '39.13007',
                '9.534562',
                '0',
                'Italia',
                'Carbonia',
                'Villasimius'
            ],
            [
                '1',
                'La Torretta for 6 persons in Florence',
                '"La Torretta", apt. di 5 locali 220 m2 su 2 piani al 4. piano. Oggetto adatto a 6 adulti. Arredamento curato e elegante: ingresso. Soggiorno con TV (satellite). 2 camere matrimoniali. 1 camera con 2 letti. Cucina (4 punti cottura, forno, lavastoviglie, congelatore).',
                '3',
                '3',
                '2',
                '220',
                '128',
                'https://a0.muscache.com/im/pictures/prohost-api/Hosting-22564525/original/d55f618f-65c0-4ea9-af47-a7f16bc044e1.jpeg?im_w=1200',
                '43.7775719',
                '11.2474177',
                '0',
                'Italia',
                '(FI)',
                'Firenze'
            ],
            [
                '2',
                'Villa a Forte dei Marmi, vicino alle spiagge della versilia',
                '"Dea", villa 3 locali 55 m2, al pianterreno. Luminoso, arredamento funzionale e confortevole: sala da pranzo aperta con TV e tv digitale (schermo piatto). Uscita sulla terrazza. 1 camera matrimoniale con climatizzazione. ',
                '5',
                '3',
                '3',
                '73',
                '170',
                'https://a0.muscache.com/im/pictures/prohost-api/Hosting-22742106/original/3ce11014-cef2-4499-be8c-c9ab43714512.jpeg?im_w=1200',
                '43.9777',
                '10.1993',
                '0',
                'Italia',
                '(LU)',
                'Forte Dei Marmi'
            ],
            [
                '1',
                'Finestra sul naviglio',
                'Immergiti nel mix tra moderno e antico di questo appartamento all\'interno di un tipico palazzo di ringhiera, testimonianza della "Vecchia Milano". Arredato con un particolare gusto per gli accostamenti estrosi, ti avvicinerà al cuore della città.',
                '4',
                '2',
                '4',
                '63',
                '58',
                'https://a0.muscache.com/im/pictures/90dc09f7-de36-426b-bef9-4a755cb41d9b.jpg?im_w=1200',
                '45.47019',
                '9.19407',
                '0',
                'Italia',
                '(MI)',
                'Milano'
            ],
            [
                '3',
                'Open Space Loft Navigli Area Milano',
                'Appartamento Loft appena fuori Zona Navigli con Cucina,Soggiorno,Bagno e un soppalco con un letto matrimoniale e un letto singolo per dormire. Il soggiorno è dotato di un grande e comodo divano.',
                '4',
                '3',
                '2',
                '62',
                '64',
                'https://a0.muscache.com/im/pictures/2b988165-34fd-488f-a295-2b27e853c8aa.jpg?im_w=1200',
                '45.46948',
                '9.19183',
                '0',
                'Italia',
                '(MI)',
                'Milano'
            ],
            [
                '3',
                'Grazioso appartamento ben servito',
                'Grazioso appartamento di recente costruzione situato a Bolzano in zona tranquilla composto da sala cucina con divano letto, camera da letto matrimoniale e bagno con doccia.',
                '2',
                '2',
                '2',
                '42',
                '54',
                'https://a0.muscache.com/im/pictures/bd928d67-56a2-413d-b08b-60b40cafe74f.jpg?im_w=1200',
                '45.46864',
                '9.1902',
                '0',
                'Italia',
                '(MI)',
                'Milano'

            ],
            [
                '2',
                'Relax e Design nel Cuore Artistico della Città milanese',
                'Entra in uno spazio che richiama cadenze e ritmi della zona degli artisti con un design curato e moderno, dove i toni morbidi parlano la lingua dell\'ospitalità e della raffinatezza. Spazio alla creatività, dunque: la tua, e quella che qui respirerai.',
                '3',
                '4',
                '3',
                '72',
                '94',
                'https://a0.muscache.com/im/pictures/e525fb71-38e3-4ea3-bff1-16b170034111.jpg?im_w=1200',
                '45.46663',
                '9.18753',
                '0',
                'Italia',
                '(MI)',
                'Milano'
            ],
            [
                '1',
                'Appartamento a Porta Santa Elena, Siena, Colli sienesi',
                'Appartamento nuovo situato in zona Porta Santi, nel centro storico di Cesena. Zona giorno con cucina, zona notte matrimoniale, bagno con doccia. Può ospitare massimo 4 persone: 2 nel matrimoniale + 2 nei divano/letti.',
                '2',
                '4',
                '2',
                '116',
                '94',
                'https://a0.muscache.com/im/pictures/2c6628d0-c241-4809-aa3a-58d1b27723a7.jpg?im_w=1200',
                '44.14192',
                '12.23137',
                '0',
                'Italia',
                '(SI)',
                'Siena'
            ]
        ];

        foreach ($apartments as $apartment) {
            $newApartment = new Apartment();
            $newApartment->user_id = $apartment[0];
            $newApartment->title = $apartment[1];
            $newApartment->description = $apartment[2];
            $newApartment->num_rooms = $apartment[3];
            $newApartment->num_beds = $apartment[4];
            $newApartment->num_baths = $apartment[5];
            $newApartment->mq = $apartment[6];
            $newApartment->price = $apartment[7];
            $newApartment->main_img = $apartment[8];
            $newApartment->latitude = $apartment[9];
            $newApartment->longitude = $apartment[10];
            $newApartment->slug = Str::finish(Str::slug($newApartment->title), rand(1, 1000));
            $newApartment->active = $apartment[11];
            $newApartment->state = $apartment[12];
            $newApartment->province = $apartment[13];
            $newApartment->city = $apartment[14];


            $newApartment->save();
        }
    }
}

