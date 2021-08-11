<?php 

namespace Dinushchathurya\Division;

class Division {

    public static function getDistricts(){
        return array_keys(self::$Division);
    }

    public static function getDivisionalSecretariats($district){
        return array_keys(self::$Division[$district]);
    }

    public static function getDivisions($division){
        foreach(self::$Division as $district => $curDivision){
            if(in_array($division,array_keys($curDivision))){
                return $curDivision[$division];
            }
        }
    }

    public static $Division = array(

        'Colombo' => array(
            'Colombo' => array(
                'Sammanthranapura-(සම්මන්ත්‍රණපුර)',
                'Mattakkuliya-(මට්ටක්කුලිය)',
                'Modara-(මෝදර)',
                'Madampitiya-(මාදම්පිටිය)',
                'Mahawatta-(මහවත්ත)',
                'Aluthmawatha-(අළුත්මාවත)',
                'Lunupokuna-(ලුණුපොකුණ)',
                'Bloemendhal-(බ්ලුමැන්ඩල්)',
                'Kotahena East-(කොටහේන නැගෙනහිර)',
                'Kotahena West-(කොටහේන බටහිර)',
                'Kochchikade North-(කොච්චිකඩේ උතුර)',
                'Jinthupitiya-(ජින්තුපිටිය)',
                'Massangar Street-(මසංගස් විදිය)',
                'New Bazaar-(නිව් බසාර්)',
                'Grandpass South-(ග්‍රෑන්ඩ්පාස් දකුණ)',
                'Grandpass North-(ග්‍රෑන්ඩ්පාස් උතුර)',
                'Nawagampura-(නවගම්පුර)',
                'Maligawatta East-(මාලිගාවත්ත නැගෙනහිර)',
                'Kettarama-(ඛෙත්තාරාම)',
                'Aluthkade East-(අළුත්කඩේ නැගෙනහිර)',
                'Aluthkade West-(අළුත්කඩේ බටහිර)',
                'Kochchikade South-(කොච්චිකඩේ දකුණ)',
                'Pettah-(පිටකොටුව)',
                'Fort-(කොටුව)',
                'Galle Face-(ගාලුමුවදොර)',
                'Slave Island-(කොම්පඤ්ඤ වීදිය)',
                'Hunupitiya-(හුණුපිටිය)',
                'Suduwella-(සුදුවැල්ල)',
                'Keselwatta-(කෙසෙල්වත්ත)',
                'Panchikawatta-(පංචිකාවත්ත)',
                'Maligawatta West-(මාලිගාවත්ත බටහිර)',
                'Maligakanda-(මාලිගාකන්ද)',
                'Maradana-(මරදාන)',
                'Ibbanwala-(ඉබ්බන්වල)',
                'Wekanda-(වෑකන්ද)'
            ),
            'Kolonnawa' => array(
                'Wathulla-(වදුල්ල)',
                'Sedawatta-(සේදවත්ත)',
                'Halmulla-(හල්මුල්ල)',
                'Kotuvila-(කොටුවිල)',
                'Veheragoda-(වෙහෙරගොඩ)',
                'Orugodawatta-(ඔරුගොඩවත්ත)',
                'Meethotamulla-(මිතොටමුල්ල)',
                'Welewaththa-(වෙලේවත්ත)',
                'Kiththampahuwa-(කිත්තම්පහුව)',
                'Wennawatta-(වෙන්නවත්ත)',
                'Maha Buthgamuwa B-(මහබුත්ගමුව B)',
                'Kuda Buthgamuwa-(කුඩා බුත්ගමුව)',
                'Kelanimulla-(කැලණිමුල්ල)',
                'Ambathale-(අඔත‍ලේ)',
                'Mulleriyawa North-(මුල්ලේරියාව උතුර)',
                'Belagama-(බැලගම)',
                'Kotikawatta East-(කොටිකාවත්ත නැගෙනහිර)',
                'Maha Buthgamuwa A-(මහ බුත්ගමුව A)',
                'Maha Buthgamuwa C-(මහ බුත්ගමුව C)',
                'Wellampitiya-(වැල්ලමිපිටිය)',
                'Kuriniyawatta-(කුරුණියාවත්ත)',
                'Kolonnawa-(කොළොන්නාව)',
                'Dahampura-(දහම්පුර)',
                'Singhapura-(සිංහපුර)',
                'Megoda Kolonnawa-(මෙගොඩ කොලොන්නාව)',
                'Bopeththa-(බෝපැත්ත)',
                'Batalandahena-(බටලන්ද‍හේන)',
                'Kotikawatta West-(කොටිකාවත්ත බටහිර	)',
                'Mulleriyawa South-(මුල්ලේරියාව දකුණ)',
                'Malgama-(මල්ගම)',
                'Udumulla North-(උඩුමුල්ල උතුර)',
                'Maligagodella-(මාළිගාගොඩැල්ල)',
                'Rajasinghagama-(රාජසිංහගම)',
                'Udumulla South-(උඩුමුල්ල දකුණ)',
                'Himbutana East-(හිඹුටාන නැගෙනහිර)',
                'Himbutana West-(හිඹුටාන බටහිර)',
                'Malpura-(මල්පුර)',
                'Gothatuwa New Town-(ගොතටුව නව නගරය)',
                'Kajugahawatta-(කජුගහවත්ත)',
                'Gothatuwa-(ගොතටුව)',
                'Salamulla-(සාලමුල්ල)',
                'Wijayapura-(විජයපුර)',
                'Gajabapura-(ගජබාපුර)',
                'Madinnagoda-(මාදින්නාගොඩ)',
                'Elhena-(ඇල්හේන)',
                'Dodamgahahena-(දොඩමිගහහේන)'
            ),
            'Kaduwela' => array(
                'Welivita-(වැලිවිට)',
                'Raggahawatta-(රග්ගහවත්ත)',
                'Hewagama-(හේවාගම)',
                'Kaduwela-(කඩුවෙල)',
                'Pahala Bomiriya-(පහළ බෝමිරිය)',
                'Ihala Bomiriya-(ඉහළ බෝමිරිය)',
                'Wekewatta-(වැකේවත්ත)',
                'Nawagamuwa-(නවගමුව)',
                'Pahala Bomiriya B-(පහළ බෝමිරිය බි)',
                'Welihinda-(වැලිහිඳ)',
                'Kothalawala-(කොතලාවල)',
                'Mahadeniya-(මහදෙනිය)',
                'Thalahena North-(තලාහේන උතුර)',
                'Malabe North-(මාළ‍‍ෙඔ උතුර)',
                'Thunadahena-(තුන්අදහේන)',
                'Korathota-(කොරතොට)',
                'Nawagamuwa South-(නවගමුව දකුණ)',
                'Batewela-(බටේ‍වෙල)',
                'Ranala-(රණාල)',
                'Dedigamuwa-(දැඩිගමුව)',
                'Embilladeniya-(ඇඔල්ලදෙණිය)',
                'Welipillewa-(වැළිපිල්ලැව)',
                'Shanthalokagama-(ශාන්තාලෝකගම)',
                'Pore-(පෝරේ)',
                'Malabe East-(මාළ‍බේ නැගනහිර)',
                'Malabe West-(මාල‍බේ බටහිර)',
                'Thalangama North B-(තලංගම උතුර B)',
                'Thalahena South-(තලාහේන දකුණ)',
                'Muttettugoda-(මුත්තෙට්ටුගොඩ)',
                'Thalangama North A-(තලංගම උතුර ඒ)',
                'Walpola-(වල්පොල)',
                'Kalapaluwawa-(කළපලුවාව)',
                'Kotuwegoda-(කොටුවේගොඩ)',
                'Subhoothipura-(සුභූතිපුර)',
                'Udumulla-(උඩුමුල්ල)',
                'Battaramulla North-(බත්තරමුල්ල උතුර)',
                'Batapotha-(බටපොත)',
                'Pothuarawa-(පොතුඅරාව)',
                'Hokandara North-(හෝකන්දර උතුර)',
                'Oruwala-(ඔරුවල)',
                'Athurugiriya-(අතුරුගිරිය)',
                'Thaldiyawala-(තල්දියවල)',
                'Boralugoda-(බොරලුගොඩ)',
                'Hokandara East-(හෝකන්දර නැගෙනහිර)',
                'Arangala-(අරංගල)',
                'Evarihena-(ඇවරිහේන)',
                'Kumaragewatta-(කුමාරගේ වත්ත)',
                'Jayawadanagama-(ජයවඩනගම)',
                'Aruppitiya-(අරුප්පිටිය)',
                'Asiri Uyana-(ආසිරි උයන)',
                'Battaramulla South-(බත්තරමුල්ල ‍ දකුණ)',
                'Rajamalwatta-(රජමල්වත්ත)',
                'Pahalawela-(පහළවෙළ)',
                'Wickramasinghapura-(වික්‍රමසිංහපුර)',
                'Wellangiriya-(වැල්ලන්ගිරිය)',
                'Hokandara South-(හෝකන්දර දකුණ)',
                'Athurugiriya South-(අතුරුගිරිය දකුණ)'
            ),
            'Homagama' => array(
                'Jalthara-(ජල්තර)',
                'Henpita-(හේන්පිට)',
                'Atigala West-(ආටිගල බස්නාහිර)',
                'Atigala East-(අටිගල නැගෙනහිර)',
                'Batawala-(බටවල)',
                'Walpita-(වල්පිට)',
                'Nawalamulla-(නාවලමුල්ල)',
                'Meegasmulla-(මිගස්මුල්ල)',
                'Habarakada North-(හබරකඩ උතුර)',
                'Mullegama North-(මුල්ලේගම උතුර)',
                'Mullegama South-(මුල්ලේගම දකුණ)',
                'Habarakada South-(හබරකඩ දකුණ)',
                'Panagoda Town-(පනාගොඩ නගරය)',
                'Henawatta-(හේනවත්ත)',
                'Meegoda North-(මිගොඩ උතුර)',
                'Panaluwa-(පානලුව)',
                'Watareka North-(වටරැක උතුර)',
                'Meegoda South-(මීගොඩ දකුණ)',
                'Godagama North-(ගොඩගම උතුර)',
                'Panagoda West-(පනාගොඩ බස්නාහිර)',
                'Panagoda East-(පනාගොඩ නැගනහිර)',
                'Habarakada Watta-(හබරකඩ වත්ත)',
                'Homagama North-(හෝමාගම උතුර)',
                'Homagama West-(හෝමාගම බස්නාහිර)',
                'Homagama South-(හෝමාගම දකුණ)',
                'Galavilawatta North-(ගලවිලවත්ත උතුර)',
                'Homagama Town-(හෝමාගම නගරය)',
                'Homagama East-(හෝමාගම නැගනහිර)',
                'Pitipana Town-(පිටිපන නගරය)',
                'Godagama South-(ගොඩගම දකුණ)',
                'Kurunduwatta-(කුරුදුවත්ත)',
                'Gehenuwala-(ගැහැනුවල)',
                'Watareka South-(වටරැක දකුණ)',
                'Ovitigama-(ඕවිටිගම)',
                'Kandhanawatta-(කඳනවත්ත)',
                'Kiriberiyakele-(කිරිබෙරියකැළේ)',
                'Mawathagama-(මාවතගම)',
                'Katuwana-(කටුවාන)',
                'Galavilawatta South-(ගලවිලවත්ත දකුණ)',
                'Niyadagala-(නියඳගල)',
                'Hiripitiya-(හිරිපිටිය)',
                'Mambulgoda-(මාම්බුල්ගොඩ)',
                'Kithulhena-(කිතලුහේන)',
                'Siddamulla North-(සිද්ධමුල්ල උතුර)',
                'Siddamulla South-(සිද්ධමුල්ල දකුණ)',
                'Mattegoda West-(මත්තේගොඩ බටහිර)',
                'Mattegoda Central A-(මත්තේගොඩ මධ්‍යම / ඒ)',
                'Mattegoda East-(මත්තේගොඩ නැගෙනහිර)',
                'Brahmanagama-(බ්‍රහ්මණගම)',
                'Deepangoda-(ධිපාන්ගොඩ)',
                'Magammana West-(මාගම්මන බස්නාහිර)',
                'Magammana East-(මාගම්මන නැගනහිර)',
                'Uduwana-(උධුවන)',
                'Prasannapura-(ප්‍රසන්නපුර)',
                'Pitipana North-(පිටිපන උතුර)',
                'Suwapubudugama-(සුවපුබුදුගම)',
                'Pitipana South-(පිටිපන දකුණ)',
                'Dolahena-(දොළහේන)',
                'Diyagama East-(දියගම නැගනහිර)',
                'Diyagama West-(දියගම බස්නාහිර)',
                'Kirigampamunuwa-(කිරිගම්පමුනුව)',
                'Mattegoda Central B-(මත්තේගොඩ මධ්‍යම / බී)',
                'Siyambalagoda North-(සියබලාගොඩ උතුර)',
                'Kudamaduwa-(කුඩමාදුව)',
                'Sangarama-(සංඝාරාම)',
                'Siyambalagoda South-(සියඔලාගොඩ දකුණ)',
                'Rilawala-(රිලාවල)',
                'Kahathuduwa West-(කහතුඩුව බස්නාහිර)',
                'Kiriwattuduwa South-(කිරිවත්තුඩුව දකුණ)',
                'Kiriwattuduwa North-(කිරිවත්තුඩුව උතුර)',
                'Moonamale-Yakahaluwa-(මුණමලේ- යකහලුව)',
                'Undurugoda-(උන්දුරුගොඩ)',
                'Wethara-(වැතර)',
                'Ambalangoda-(අම්බලන්ගොඩ)',
                'Heraliyawala-(හෙරලියාවල)',
                'Palagama-(පාලගම)',
                'Weniwelkola-(වෙනිවැල්කොල)'
            ),
            'Hanwella' => array(
                'Bollathawa-(බොල්ලතාව)',
                'Kanampella West-(කනම්පැල්ල බස්නාහිර)',
                'Kanampella East-(කනම්පැල්ල නැගෙනහිර)',
                'Manakada-(මානකඩ)',
                'Eswatta North-(ඇස්වත්ත උතුර)',
                'Kiriwandala North-(කිරිවන්දල උතුර)',
                'Kudagama-(කුඩගම)',
                'Weralupitiya-(වෙරළුපිටිය)',
                'Seethagama-(සීතාගම)',
                'Avissawella-(අවිස්සාවේල්ල)',
                'Ukwatta-(උක්වත්ත)',
                'Agra place-(අග්‍රාපෙදෙස)',
                'Eswatta South-(ඇස්වත්ත දකුණ)',
                'Ihala Kosgama North-(ඉහළ කොස්ගම උතුර)',
                'Thawalgoda-(තාවල්ගොඩ)',
                'Muruthagama-(මුරුතගම)',
                'Akaravita-(අකරවිට)',
                'Kahatapitiya-(කහටපිටිය)',
                'Kalu Aggala-(කළුඅග්ගල)',
                'Salawa-(සාලාව)',
                'Pahala Kosagama West-(පහළ කොස්ගම බස්නාහිර)',
                'Pahal Kosgama East-(පහළ කොස්ගම නැගෙනහිර)',
                'Ihala Kosgama South-(ඉහළ කොස්ගම දකුණ)',
                'Miriswatta-(මිරිස්වත්ත)',
                'Aluth Ambalama-(අලුත් අම්බලම)',
                'Kiriwandala South-(කිරිවන්දල දකුණ)',
                'Kotahera-(කොටහැර)',
                'Seethawaka-(සිතාවක)',
                'Aradhana Kanda-(ආරාධනාකන්ද)',
                'Puwakpitiya South-(පුවක්පිටිය දකුණ)',
                'Puwakpitiya-(පුවක්පිටිය)',
                'Egodagama-(එගොඩගම)',
                'Weragolla North-(වේරගොල්ල උතුර)',
                'Hingurala-(හිගුරල)',
                'Kadugoada North-(කඩුගොඩෙ උතුර)',
                'Mawalgama-(මාවල්ගම)',
                'Suduwella-(සුදුවැල්ල)',
                'Gira Imbula-(ගිරා ඉඹුළ)',
                'Walauwathta-(වලවීවත්ත)',
                'Pahala Hanwella-(පහළ හංවැල්ල)',
                'Hanwella Town-(හංවැල්ල නගරය)',
                'Ihala Hanwella North-(ඉහළ හංවැල්ල උතුර)',
                'Niripola-(නිරිපොළ)',
                'Brandigampala-(බ්‍රැන්ඩිගම්පළ)',
                'Kadugoda South-(කඩුගොඩ දකුණ)',
                'Weragolla South-(වේරගොල්ල දකුණ)',
                'Digana-(දිගන)',
                'Lahirugama-(ලහිරුගම)',
                'Mabula-(මාඹුල)',
                'Welikanna-(වැලිකත්න)',
                'Kahahena-(කහහේන)',
                'Neluwattuduwa-(නෙලුවත්තුඩුව)',
                'Diddeniya North-(දිද්දෙණිය උතුර)',
                'Ihala Hanwella South-(ඉහළ හංවැල්ල දකුණ)',
                'Pahathgama-(පහත්ගම)',
                'Jayaweeragoda-(ජයවීරගොඩ)',
                'Koodaluvila-(කුඩළුවිල)',
                'Thunnana East-(තුන්නාන නැගෙනහිර)',
                'Diddeniya South-(දිද්දෙනිය දකුණ)',
                'Elamalawala-(එළමලවල)',
                'Ilukovita-(ඉලුක්ඕවිට)',
                'Koswatta-(කොස්වත්ත)',
                'Pagnagula-(පඤ්ඤාගුල)',
                'Pelpola-(පැල්පොල)',
                'Kudakanda-(කුඩාකන්ද)',
                'Thunnana West-(තුන්නාන බටහිර)',
                'Mawathagama West-(මාවතගම බටහිර)',
                'Mawathagama East-(මාවතගම නැගනහිර)'
            ),
            'Padukka' => array(
                'Pinnawala North-(පින්නවල උතුර)',
                'Pinnawala South-(පින්නවල දකුණ)',
                'Waga North-(වග උතුර)',
                'Waga East-(වග නැගෙනහිර)',
                'Thummodara-(තුම්මෝදර)',
                'Waga South-(වග දකුණ)',
                'Siyambalawa-(සියඔලාව)',
                'Pahala Bope-(පහළ බෝපේ)',
                'Halpe-(හල්පේ)',
                'Waga West-(වග බටහිර)',
                'Uggalla-(උග්ගල්ල)',
                'Wewelpanawa-(වේවැල්පනාව)',
                'Pitumpe North-(පිටුමිපේ උතුර)',
                'Pitumpe South-(පිටුමිපේ දකුණ)',
                'Galagedara East-(ගළගෙදර නැගෙනහිර)',
                'Galagedara North-(ගළගෙදර උතුර)',
                'Galagedara South-(ගළගෙදර දකුණ)',
                'Padukka-(පාදුක්ක)',
                'Arukwatta North-(අරුක්වත්ත උතුර)',
                'Arukwatta South-(අරුක්වත්ත දකුණ)',
                'Ganegoda-(ගනේගොඩ)',
                'Angampitiya-(අංගම්පිටිය)',
                'Weragala-(වේරගල)',
                'Angamuwa-(අංගමුව)',
                'Udumulla-(උඩුමුල්ල)',
                'Poregedara-(පෝරෙගෙදර)',
                'Pahala Padukka-(පහළ පාදුක්ක)',
                'Liyanwala-(ලියත්වල)',
                'Kurugala-(කුරුගල)',
                'Madulawa South-(මාදුලාව දකුණ)',
                'Madulawa North-(මාදුලාව උතුර)',
                'Horakandawala-(හොරකඳවල)',
                'Dampe-(දම්පේ)',
                'Beruketiya-(බෙරුකැටිය)',
                'Horagala West-(හොරගල බටහිර)',
                'හොරගල නැගනහිර-(Horagala East)',
                'Beliattavila-(බෙලිඅත්තවිල)',
                'Miriyagalla-(මිරියගල්ල)',
                'Malagala-(මලගල)',
                'Kahawala-(කහවල)',
                'Yatawathura-(යටවතුර)',
                'Mahingala-(මාහිංගල)',
                'Ihala Bope-(ඉහළ බෝපේ)',
                'Gurulana-(ගුරුලාන)',
                'Udagama-(උඩගම)',
                'Dabora-(දඹෝර)'
            ),
            'Maharagama' => array(
                'Mirihana North-(මිරිහාන උතුර)',
                'Madiwela-(මාදිවෙල)',
                'Thalawathugoda West-(තළවතුගොඩ බටහිර)',
                'Thalawathugoda East-(තළවතුගොඩ නැගනහිර)',
                'Kalalgoda-(කළල්ගොඩ)',
                'Kottawa East-(කොට්ටාව නැගනහිර)',
                'Rukmale West-(රුක්මළේ බටහිර)',
                'Rukmale East A-(රැක්මළේ නැගනහිර ඒ)',
                'Rukmale East B-(රුක්මළේ නැගනහිර බි)',
                'Liyanagoda-(ලියනගොඩ)',
                'Kottawa North-(කොට්ටාව උතුර)',
                'Depanama-(දෙපානම)',
                'Polwatta-(පොල්වත්ත)',
                'Pamunuwa-(පමුණුව)',
                'Thalapathpitiya-(තළපත්පිටිය)',
                'Pragathipura-(ප්‍රගතිපුර)',
                'Udahamulla East-(උඩහාමුල්ල නැගනහිර)',
                'Udahamulla West-(උඩහමුල්ල බටහිර)',
                'Pathiragoda-(පති‍රගොඩ)',
                'Maharagama East-(මහරගම නැගනහිර)',
                'Maharagama West-(මහරගම බටහිර)',
                'Dambahena-(දඔහේන)',
                'Pannipitiya North-(පන්නිපිටිය උතුර)',
                'Kottawa West-(කොට්ටාව බටහිර)',
                'Kottawa South-(කොට්ටාව දකුණ)',
                'Malapalla West-(මාලපල්ල බටහිර)',
                'Malapalla East-(මාලපල්ල නැගෙනහිර)',
                'Makumbura North-(මාකුඹුර උතුර)',
                'Makumbura South-(මාකුඹුර දකුණ)',
                'Kottawa Town-(කොට්ටාව නගරය)',
                'Pannipitiya South-(පන්නිපිටිය දකුණ)',
                'Maharagama Town-(මහරගම නගරය)',
                'Godigamuwa South-(ගොඩිගමුව දකුණ)',
                'Godigamuwa South B-(ගොඩිගමුව දකුණ බි)',
                'Godigamuwa North-(ගොඩිගමුව උතුර)',
                'Wattegedara-(වත්තේගෙදර)',
                'Navinna-(නාවින්න)',
                'Wijerama-(විජේරාම)',
                'Gangodavila South B-(ගංගොඩවිල දකුණ බි)',
                'Jambugasmulla-(ජම්බුගස්මුල්ල)'
            ),
            'Sri Jayawardanapura Kotte' => array(
                'Welikada West-(වැලිකඩ බටහිර)',
                'Welikada East-(වැලිකඩ නැගෙනහිර)',
                'Rajagiriya-(රාජගිරිය)',
                'Welikada North-(වැළිකඩ උතුර)',
                'Nawala West-(නාවල බටහිර)',
                'Koswatta-(කොස්වත්ත)',
                'Ethulkotte West-(ඇතුල්කෝට්ටේ බටහිර)',
                'Ethulkotte-(ඇතුල්කොට්ටේ)',
                'Pitakotte East-(පිටකොට්ටේ නැගෙනහිර)',
                'Pitakotte-(පිටකෝට්ටේ)',
                'Pitakotte West-(පිටකොට්ටේ බටහිර)',
                'Nawala East-(නාවළ නැගෙනහිර)',
                'Nugegoda West-(නුගේගොඩ බටහිර)',
                'Nugegoda West-(නුගේගොඩ බටහිර)',
                'Pagoda-(පා‍ගොඩ)',
                'Nugegoda-(නුගේගොඩ)',
                'Pagoda East-(පා‍ගොඩ නැගනහිර)',
                'Gangodavila North-(ගංගොඩවිල උතුර)',
                'Gangodavila South-(ගංගොඩවිළ දකුණ)',
                'Gangodavila East-(ගංගොඩවිළ නැගනහිර)'
            ),
            'Thimbirigasyaya' => array(
                'Kollupitiya-(කොල්ලුපිටිය)',
                'Bambalapitiya-(බම්බලපිටිය)',
                'Kurunduwatta-(කුරුදුවත්ත)',
                'Kuppiyawatta West-(කුප්පියාවත්ත බටහිර)',
                'Kuppiyawatta East-(කුප්පියාවත්ත නැගෙනහිර)',
                'Dematagoda-(දෙමටගොඩ)',
                'Wanathamulla-(වනාතමුල්ල)',
                'Borella North-(බොරැල්ල උතුර)',
                'Borella South-(බොරැල්ල දකුණ)',
                'Gothamipura-(ගෝතමිපුර)',
                'Narahenpita-(නාරාහේන්පිට)',
                'Thimbirigasyaya-(තිඹිරිගස්යාය)',
                'Milagiriya-(මිලාගිරිය)',
                'Havelock Town-(හැවිලොක් නගරය)',
                'Kirula-(කිරැළ)',
                'Kirulapone-(කිරුළපන)',
                'Wellawatta North-(වැල්ලවත්ත උතුර)',
                'Wellawatta South-(වැල්ලවත්ත දකුණ)',
                'Pamankada West-(බටහිර පාමංකඩ)',
                'Pamankada East-(නැගෙනහිර පාමංකඩ)'
            ),
            'Dehiwala-Mount Lavinia' => array(
                'Dehiwala-Mount Lavinia-(ශ්‍රී සරණංකර)',
                'Vilawala-(විලවල)',
                'Dutugemunu-(දුටුගැමුණු)',
                'Kohuwala-(කොහුවල)',
                'Kalubowila-(කළුබෝවිල)',
                'Hathbodhiya-(හත්බෝධිය)',
                'Galwala-(ගල්වල)',
                'Dehiwala West-(දෙහිවල බටහිර)',
                'Dehiwala East-(දෙහිවල නැගෙනහිර)',
                'Udyanaya-(උද්‍යානය)',
                'Nedimala-(නැඳිමාල)',
                'Malwatta-(මල්වත්ත)',
                'Jayathilaka-(ජයතිලක)',
                'Karagampitiya-(කරගම්පිටිය)',
                'Kawdana East-(නැගෙනහිර කව්ඩාන)'
            ),
            'Ratmalana' => array(
                'Mount Lavinia-(ගල්කිස්ස)',
                'Kawdana West-(කවුඩාන බටහිර)',
                'Watarappala-(වටරප්පල)',
                'Wathumulla-(වතුමුල්ල)',
                'Katukurunduwatta-(කටුකුරුඳුවත්ත)',
                'Attidiya North-(අත්තිඩිය උතුර)',
                'Attidiya South-(අත්තිඩිය දකුණ)',
                'Piriwena-(පිරිවෙන)',
                'Wedikanda-(වෙඩිකන්ද)',
                'Vihara-(විහාර)',
                'Rathmalana West-(රත්මලාන බටහිර)',
                'Rathmalana Eastරත්මලාන නැගෙනහිර)',
                'Kandawala-(කඳවල)',
            ),
            'Moratuwa' =>array(
                'Angulana North-(අගුලාන උතුර)',
                'Kaldemulla-(කල්දෙමුල්ල)',
                'Soysapura North-(සොයියාපුර උතුර)',
                'Soysapura South-(සොයියාපුර දකුණ)',
                'Dahampura-(දහම්පුර)',
                'Thelawala North-(‍තෙලවල උතුර)',
                'Borupana-(බොරුපණ)',
                'Thelawala South-(තෙල්වල දකුණ)',
                'Lakshapathiya North-(ලක්ෂපතිය උතුර)',
                'Lakshapathiya Central-(ලක්ෂපතිය මධ්‍යම)',
                'Angulana South-(අගුළාන දකුණ)',
                'Uyana South-(උයන දකුණ)',
                'Uyana North-(උයන උතුර)',
                'Rawathawatta South-(රාවතාවත්ත දකුණ)',
                'Rawathawatta East-(රාවතාවත්ත නැගනහිර)',
                'Lakshapathiya South-(ලක්ෂපතිය දකුණ)',
                'Kuduwamulla-(කුඩුවාමුල්ල)',
                'Katubedda-(කටුබැද්ද)',
                'Molpe-(මොල්පේ)',
                'Moratumulla North-(මොරටු මුල්ල උතුර)',
                'Kadalana-(කඩළාන)',
                'Rawathawatta West-(රාවතාවත්ත බටහිර)',
                'Idama-(ඉඩම)',
                'Uswatta-(උස්වත්ත)',
                'Moratumwella South-(මොරටුවැල්ල දකුණ)',
                'Indibedda West-(ඉඳිබැද්ද බටහිර)',
                'Moratumulla East-(මොරටු මුල්ල නැ‍‍ගෙනහිර)',
                'Moratumulla West-(මොරටු මුල්ල බටහිර)',
                'Villorawatta East-(විල්ලෝරාවත්ත නැගෙනහිර)',
                'Villorawatta West-(විල්ලෝරාවත්ත බටහිර)',
                'Indibedda East-(ඉදිබැද්ද නැෙගනහිර)',
                'Moratuwella North-(මොරටු වැල්ල උතුර)',
                'Moratuwella West-(මොරටු වැල්ල බටහිර)',
                'Koralawella North-(කොරලවැල්ල උතුර)',
                'Koralawella East-(කොරළවැල්ල නැගනහිර)',
                'Koralawella West-(කොරළවැල්ල බටහිර)',
                'Koralawella South-(කොරළවැල්ල දකුණ)',
                'Katukurunda North-(කටුකුරැන්ද උතුර)',
                'Katukurunda South-(කටුකුරැන්ද දකුණ)',
                'Egoda Uyana North-(ඒගොඩ උයන උතුර)',
                'Egoda Uyana Central-(ඒගොඩ උයන මධ්‍යම)',
                'Egoda Uyana South-(ඒගොඩ උයන දකුණ)',
            ),
            'Kesbewa' => array(
                'Pepiliyana East-(පැපිලියාන නැගෙනහිර)',
                'Divulpitiya East-(දිවුලපිටිය නැගෙනහිර)',
                'Divulpitiya West-(දිවුල්පිටිය බටහිර)',
                'Bellanvila-(බෙල්ලන්විල)',
                'Boralesgamuwa West A-(බොරලැස්ගමුව බටහිර ඒ)',
                'Boralesgamuwa West C-(බොරලැස්ගමුව බටහිර සි)',
                'Rattanapitiya-(රත්නපිටිය)',
                'Egodawatta-(එගොඩවත්ත)',
                'Boralesgamuwa East A-(බොරලැස්ගමුව නැගනහිර ඒ)',
                'Boralesgamuwa West B-(බොරලැස්ගමුව බටහිර බි)',
                'Werahera North-(වේරහැර උතුර)',
                'Boralesgamuwa East B-(බොරලැස්ගමුව නැගනහිර බි)',
                'Neelammahara-(නිලම්මහර)',
                'Katuwawala North-(කටුවාවල උතුර)',
                'Vishwakalawa-(විස්වකලාව)',
                'Werahera South-(වේරහැර දකුණ)',
                'Katuwawala South-(කටුවාවළ දකුණ)',
                'Niwanthidiya-(නිවන්තිඩිය)',
                'Erewwala West-(ඇරැව්වල බටහිර)',
                'Erewwala North-(ඇරැව්වල උතුර)',
                'Erewwala East-(ඇරැව්වල නැගෙනහිර)',
                'Rathmaldeniya-(රත්මල්දෙනිය)',
                'Mahalwarawa-(මහල්වරාව)',
                'Bangalawatta-(බංගලාවත්ත)',
                'Pelenwatta East-(පැලන්වත්ත නැගනහිර)',
                'Pelenwatta North-(පැලන්වත්ත උතුර)',
                'Pelenwatta West-(පැලන්වත්ත බටහිර)',
                'Paligedara	-(පලිගෙදර)',
                'Kaliyammahara-(කළියම්මහර)',
                'Bokundara-(බෝකුන්දර)',
                'Thumbovila South-(තුම්බෝවිල දකුණ)',
                'Thumbovila North-(තුම්බෝවිල උතුර)',
                'Wewala West-(වෑවල බටහිර)',
                'Wewala East-(වෑවල නැගෙනහිර)',
                'Thumbovila West-(තුම්බෝවිල බටහිර)',
                'Mampe North-(මාම්පේ උතුර)',
                'Makuludoowa-(මකුළුදුව)',
                'Gorakapitiya-(ගොරකපිටිය)',
                'Nampamunuwa-(නාම්පමුණුව)',
                'Mavittara North-(මාවිත්තර උතුර)',
                'Mampe East-(මාම්පේ නැගෙනහිර)',
                'Bodhirajapura-(බෝධිරාජපුර)',
                'Mampe West-(මාම්පේ බටහිර)',
                'Mampe South-(මාම්පේ දකුණ)',
                'Kolamunna-(කොළමුන්න)',
                'Suwarapola East-(සුවරපොළ නැගනහිර)',
                'Suwarapola West-(සුවරපොළ බටහිර)',
                'Hedigama-(හැඩිගම)',
                'Batakettara North-(බටකැත්තර උතුර)',
                'Kesbewa North-(කැස්බැව උතුර)',
                'Kesbewa East-(කැස්බැව නැගෙනහිර)',
                'Mavittara South-(	මාවිත්තර දකුණ)',
                'Honnanthara North-(හොන්නත්තර උතුර)',
                'Honnanthara South-(හොන්නන්තර දකුණ)',
                'Makandana East-(මාකන්දන නැගෙනහිර)',
                'Kesbewa South-(කැස්බැව දකුණ)',
                'Batakettara South-(බටකැත්තර දකුණ)',
                'Madapatha-(මඩපාත)',
                'Delthara West-(‍දැල්තර බටහිර)',
                'Delthara East-(දැල්තර නැගෙනහිර)',
                'Dampe-(දාම්පේ)',
                'Makandana West-(මාකන්දන බටහිර)',
                'Nivungama-(නිවුන්ගම)',
                'Halpita-(හල්පිට)',
                'Horathuduwa-(හොරතුඩුව)',
                'Morenda-(මො‍රැද)',
                'Batuwandara North-(බටුවන්දර උතුර)',
                'Batuwandara South-(බටුවන්දර දකුණ)',
                'Jamburaliya-(ජඹුරලිය)',
                'Polhena-(පොල්හේක)',
                'Regidel Watta-(රෙජිඩේල්වත්ත)',
                'Kahapola-(කහපොල)'
            )
        ),
        'Gamapaha' => array(
            'Negombo' => array(
                'Kammalthura-(කම්මල්තුර)',
                'Pallansena North-(උතුරු පල්ලන්සේන)',
                'Kochchikade-(කොච්චිකඩේ)',
                'Pallansena South-(දකුණු පල්ලන්සේන)',
                'Daluwakotuwa-(දළුවකොටුව)',
                'Palangathure-(පලඟතුරේ)',
                'Ettukala-(එත්තුකල)',
                'Daluwakotuwa East-(නැගෙනහිර දළුවකොටුව)',
                'Kattuwa-(කට්ටුව)',
                'Dalupotha East-(නැගෙනහිර දළුපත)',
                'Dalupotha-(දළුපත)',
                'Kudapaduwa-(කුඩපාඩුව)',
                'Kudapaduwa North-(කුඩපාඩුව උතුර)',
                'Kudapaduwa South-(කුඩපාඩුව දකුණ)',
                'Wella Weediya-(වැල්ල වීදිය)',
                'Wella Weediya East-(වෙල්ල වීදිය නැගෙනහිර)',
                'Periyamulla-(පෙරියමුල්ල)',
                'Hunupitiya-(හුනුපිටිය)',
                'Angurukaramulla-(අගුරූකාරමුල්ල)',
                'Udayarthoppuwa-(උඩයාර්තෝප්පුව)',
                'Wella Weediya South-(දකුණු වැල්ල වීදිය)',
                'Munnakkarai North-(උතුරු මුන්නක්කරය)',
                'Doowa-(දූව)',
                'Pitipana North-(උතුරු පිටිපන)',
                'Pitipana Central-(මැද පිටිපන)',
                'Munnakkaraya-(මුන්නක්කරය)',
                'Munnakkarai East-(නැගෙනහිර මුන්නක්කරය)',
                'Thaladuwa-(තලාදූව)',
                'Udayarthoppuwa South-(දකුණු උඩයාර්තෝප්පුව)',
                'Bolawalana-(බෝලවලාන)',
                'Kurana West-(බටහිර කුරණ)',
                'Kurana East-(නැගෙනහිර කුරණ)',
                'Siriwardana Pedesa-(සිරිවර්ධන පෙදෙස)',
                'South Pitipana East-(දකුණ පිටිපන නැගෙනහිර)',
                'Pitipana South-(දකුණු පිටිපන)',
                'Thalahena-(තලාහේන)',
                'Dungalpitiya-(දුන්ගාල්පිටිය)',
                'Seththappaduwa-(සෙත්තප්පාඩුව)',
                'Kepungoda-(කැපුන්ගොඩ)'
            ),
        )
    );
}