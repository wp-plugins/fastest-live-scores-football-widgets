<div class="wrap">
<?php screen_icon(); ?>
<h2>Commercial Crowdscores settings</h2>
<style>
.description_inner {
	display: none;
}
</style>
<script type="text/javascript">
	jQuery(function(){
		function settings(){
			var widget_default = {
				topscorers_widget 	: ["data-competition-id", "data-max-players"],
				assists_widget 		: ["data-competition-id", "data-max-players"],
				lineups_widget 		: ["data-match-id"],
				livescores_widget 	: ["data-type", "data-max-matches", "data-competition-id", "data-team-id"],
				leaguetable_widget 	: ["data-round-id", "data-max-rows", "data-team-id"],
				squadlist_widget	: ["data-team-id"],
				matchcentre_widget 	: [/*"data-match-id"*/"data-team-id"],
				teamstats_widget	: ["data-team-id", "data-competition-id"],
				playerstats_widget	: ["data-round-id", "data-team-id", "data-max-rows"],
				nextmatch_widget	: ["data-team-id"],
			};
			var widget = jQuery("#select_widget").val();
			jQuery(".description_inner").hide();
			jQuery("#"+widget).show();
			var widgets = widget.replace(/_|-/g, "_");
			jQuery(".parimeters").hide();
			console.log(widget_default[widgets]);
			widget_default[widgets].forEach(function(unique){
				console.log("#"+unique);
				jQuery("#"+unique).show();
			});
		}
		settings();
		jQuery("#select_widget").change(function(){
			settings();
		});
	});
</script>
<form method="post" action="options.php">
    <?php settings_fields( 'cc_group' ); ?>
    <?php $cc_settings = get_option('cc_group_setting'); ?>	
	<?php 		
			$widget = array(					
		/*		"topscorers-widget" 	=> "Top Scorers Widget",
				"assists-widget" 		=> "Assists Widget",
				"lineups-widget" 		=> "Lineups Widget",*/
				"livescores-widget" 	=> "Live Scores Widget",
				"leaguetable-widget" 	=> "League Table Widget",
		/*		"squadlist-widget" 		=> "Squad List Widget",*/
				"matchcentre-widget" 	=> "Match Centre Widget",
		/*		"teamstats-widget" 		=> "Team Stats Widget",
				"secondphase-widget" 	=> "Second Phase Widget",*/
				"playerstats-widget"	=> "Player Stats Widget",
				"nextmatch-widget"		=> "Next Match Widget"
				);
			$widget_default = array(
				"topscorers-widget" 	=> array("data-competition-id", "data-max-players"),					
				"assists-widget" 		=> array("data-competition-id", "data-max-players"),					
				"lineups-widget" 		=> array("data-match-id"), 					
				"livescores-widget" 	=> array("data-type", "data-max-matches", "data-competition-id", "data-team-id"),			
				"leaguetable-widget" 	=> array("data-round-id", "data-max-rows", "data-team-id"),				
				"squadlist-widget" 		=> array("data-team-id"), 					
				"matchcentre-widget" 	=> array(/*"data-match-id"*/"data-team-id"), 					
				"teamstats-widget" 		=> array("data-team-id", "data-competition-id"),
				"playerstats-widget"	=> array("data-round-id", "data-team-id", "data-max-rows"),
				"nextmatch-widget"		=> array("data-team-id")
			);
			$data_competition_id = array(
				74 => 	"A-League",
				48 =>   "Bundesliga",
				42 =>   "Championship",
				36 =>   "Champions League",
				23 =>   "Community Shield",
				65 =>   "Conference North",
				55 =>   "Conference Premier",
				66 =>   "Conference South",
				50 =>   "Copa del Rey",
				54 =>   "Coupe de la Ligue",
				61 =>   "DFB Pokal",
				77 =>   "Eredivisie",
				63 =>   "Euro 2016 Qualifying",
				37 =>   "Europa League",
				43 =>   "FA Cup",
				75 =>   "Football League Trophy",
				60 =>   "Friendlies",
				35 =>   "International Friendlies",
				70 =>   "Isthmian Division One South",
				69 =>   "Isthmian Premier League",
				46 =>   "La Liga",
				41 =>   "League Cup",
				44 =>   "League One",
				45 =>   "League Two",
				47 =>   "Ligue 1",
				59 =>   "MLS",
				76 =>   "NIFL Premiership",
				67 =>   "Northern Premier League",
				 2 =>   "Premier League",
				71 =>   "Premier Soccer League",
				72 =>   "Scottish Championship",
				51 =>   "Scottish Cup",
				11 =>   "Scottish Premiership",
				49 =>   "Serie A",
				68 =>   "Southern Premier League",
				38 =>   "Spanish Supercup",
				58 =>   "SPL Play-Off",
				39 =>   "UEFA Super Cup",
				56 =>   "World Cup",
				40 =>   "World Cup Qualifying",
			);
		$teams = array(
			"" 	=> "Select a Team",
			/*
			385 => "Russia",           
			403 => "Bos & Herz",       
			406 => "France",           
			408 => "Netherlands",      
			411 => "Switzerland",
			414 => "Spain",            
			416 => "Croatia",          
			417 => "Italy",            
			419 => "Germany",         
			424 => "Portugal",         
			426 => "Greece",           
			430 => "Belgium",          
			431 => "England",          
			523 => "Chile",            
			514 => "USA",
			625 => "Brazil",
			637 => "Mexico",
			638 => "Ecuador",
			669 => "Cameroon",
			670 => "Australia",
			671 => "Colombia",
			672 => "Ivory Coast",
			673 => "Japan",
			674 => "Uruguay",
			675 => "Costa Rica",
			676 => "Honduras",
			677 => "Argentina",
			679 => "Iran",
			680 => "Nigeria",
			681 => "Ghana",
			682 => "Algeria",
			683 => "South Korea",
			*/
			831 => "1874 Northwich",
			1047 => "Aalborg BK",
			121 => "Aberdeen",
			794 => "Aberystwyth Town",
			587 => "Accrington Stanley",
			847 => "Adelaide United",
			1078 => "ADO Den Haag",
			973 => "AEL Limassol",
			854 => "AFC Flyde ",
			896 => "AFC Hornchurch",
			521 => "AFC Wimbledon ",
			815 => "AIK",
			786 => "Airbus UK",
			694 => "Ajaccio",
			463 => "Ajax",
			956 => "Ajax Cape Town",
			630 => "Albion Rovers",
			666 => "Aldershot Town",
			653 => "Alfreton Town",
			970 => "Alloa Athletic",
			613 => "Almeria",
			768 => "Altrincham",
			957 => "AmaZulu",
			470 => "Anzhi Makhachkala",
			499 => "APOEL Nicosia",
			514 => "Apollon Limassol",
			924 => "Arlesey Town",
			18 => "Arsenal",
			884 => "Ashton United",
			611 => "AS Monaco",
			705 => "AS Saint-Etienne",
			1037 => "Asteras Tripolis",
			5 => "Aston Villa",
			381 => "Astra Giurgiu",
			873 => "AS Trencin",
			699 => "Atalanta",
			608 => "Athletic Club de Bilbao",
			383 => "Atletico de Madrid",
			688 => "Augsburg",
			460 => "Austria Vienna",
			518 => "AZ Alkmaar",
			1058 => "Ballinamallard United",
			1053 => "Ballymena United",
			926 => "Banbury United",
			791 => "Bangor City",
			382 => "Barcelona",
			652 => "Barnet",
			486 => "Barnsley",
			855 => "Barrow ",
			885 => "Barwell",
			871 => "Basingstoke Town",
			1028 => "BATE Borisov",
			785 => "Bath City ",
			438 => "Bayer 04 Leverkusen",
			384 => "Bayern Munchen",
			829 => "Beckenham Town",
			886 => "Belper Town",
			445 => "Benfica",
			971 => "Besiktas",
			928 => "Bideford",
			949 => "Bidvest Wits",
			930 => "Biggleswade Town",
			842 => "Billericay Town ",
			781 => "Billingshurst FC",
			464 => "Birmingham City",
			823 => "Bishops Stortford ",
			541 => "Blackburn Rovers",
			555 => "Blackpool",
			952 => "Bloemfontein Celtic",
			887 => "Blyth Spartans",
			902 => "Bognor Regis Town",
			614 => "Bologna",
			560 => "Bolton Wanderers",
			874 => "Boreham Wood",
			457 => "Borussia Dortmund",
			693 => "Borussia Monchengladbach",
			833 => "Boston United",
			558 => "Bournemouth",
			856 => "Brackley Town",
			579 => "Bradford City",
			857 => "Bradford Park Avenue ",
			649 => "Braintree Town",
			581 => "Brentford",
			482 => "Brighton & Hove Albion",
			997 => "Brisbane Roar",
			571 => "Bristol City",
			553 => "Bristol Rovers",
			818 => "Bromley ",
			807 => "Brommapojkarna",
			1045 => "BSC Young Boys",
			1091 => "Burgess Hill Town",
			932 => "Burnham",
			480 => "Burnley",
			592 => "Burton Albion",
			589 => "Bury",
			904 => "Bury Town ",
			888 => "Buxton",
			698 => "Cagliari",
			940 => "Cambridge City",
			645 => "Cambridge United",
			824 => "Canvey Island ",
			365 => "Cardiff City",
			575 => "Carlisle United",
			909 => "Carshalton Athletic",
			642 => "Catania",
			616 => "Celta de Vigo",
			199 => "Celtic",
			994 => "Central Coast Mariners",
			760 => "Cesena",
			540 => "Charlton Athletic",
			804 => "Chelmsford City",
			7 => "Chelsea",
			593 => "Cheltenham Town",
			936 => "Chesham United",
			667 => "Chester",
			594 => "Chesterfield",
			980 => "Chicago Fire",
			636 => "ChievoVerona",
			947 => "Chippa United",
			931 => "Chippenham Town",
			852 => "Chipstead",
			984 => "Chivas USA",
			822 => "Chorley FC",
			489 => "Chornomorets",
			943 => "Cirencester Town",
			775 => "Cliftonville",
			1033 => "Club Brugge",
			576 => "Colchester United",
			1055 => "Coleraine",
			992 => "Colorado Rapids",
			981 => "Columbus Crew",
			858 => "Colwyn Bay",
			875 => "Concord Rangers",
			937 => "Corby Town",
			764 => "Cordoba",
			1050 => "Corinthian-Casuals",
			522 => "Coventry City",
			964 => "Cowdenbeath",
			552 => "Crawley Town",
			911 => "Cray Wanderers ",
			573 => "Crewe Alexandra",
			780 => "Crusaders",
			337 => "Crystal Palace",
			450 => "CSKA Moscow",
			889 => "Curzon Ashton",
			588 => "Dagenham & Redbridge",
			834 => "Darlington 1883",
			659 => "Dartford",
			756 => "D.C. United",
			776 => "Debrecen",
			765 => "Deportivo de La Coruna",
			543 => "Derby County",
			793 => "Dereham Town",
			795 => "Derry City",
			1048 => "Dinamo Minsk",
			379 => "Dinamo Tbilisi",
			491 => "Dinamo Zagreb",
			554 => "Doncaster Rovers",
			925 => "Dorchester Town",
			770 => "Dover Athletic",
			819 => "Dulwich Hamlet",
			629 => "Dumbarton",
			799 => "Dundalk",
			146 => "Dundee",
			117 => "Dundee United",
			1056 => "Dungannon Swifts",
			929 => "Dunstable Town",
			504 => "Dynamo Kyiv",
			1039 => "Dynamo Moscow",
			876 => "Eastbourne Borough",
			976 => "East Grinstead Town",
			771 => "Eastleigh",
			912 => "East Thurrock United",
			801 => "Ebbsfleet United",
			763 => "Eibar",
			605 => "Eintracht Braunschweig",
			502 => "Eintracht Frankfurt",
			782 => "Ekranas",
			643 => "Elche",
			472 => "Elfsborg",
			761 => "Empoli",
			702 => "En Avant de Guingamp",
			913 => "Enfield Town ",
			492 => "Esbjerg fB",
			507 => "Estoril Praia",
			12 => "Everton",
			695 => "Evian TG",
			1081 => "Excelsior",
			565 => "Exeter City",
			965 => "Falkirk",
			877 => "Farnborough",
			1087 => "Faversham Town ",
			452 => "FC Basel",
			978 => "FC Dallas",
			495 => "FC Dnipro Dnipropetrovsk",
			1075 => "FC Dordrecht",
			441 => "FC Kobenhavn",
			1043 => "FC Krasnodar",
			703 => "FC Lorient",
			810 => "FC Luzern",
			758 => "FC Metz",
			641 => "FC Nantes",
			461 => "FC Porto",
			493 => "FC Salzburg",
			503 => "FC Thun",
			1082 => "FC Twente",
			826 => "FC United of Manchester",
			1080 => "FC Utrecht",
			1031 => "FC Zurich",
			378 => "Fenerbahce",
			1042 => "Feyenoord",
			784 => "FH",
			498 => "Fiorentina",
			798 => "FK Banga",
			790 => "FK Daugava",
			1036 => "FK Partizan",
			590 => "Fleetwood Town ",
			1088 => "Folkestone Invicta",
			655 => "Forest Green Rovers",
			959 => "Free State Stars",
			890 => "Frickley Athletic",
			946 => "Frome Town",
			684 => "FSV Mainz 05",
			6 => "Fulham",
			859 => "Gainsborough Trinity",
			443 => "Galatasaray",
			648 => "Gateshead",
			622 => "Genoa",
			640 => "Getafe",
			546 => "Gillingham",
			500 => "Girondins de Bordeaux",
			783 => "Glenavon",
			1059 => "Glentoran",
			860 => "Gloucester City ",
			1076 => "Go Ahead Eagles",
			840 => "Gosport Borough",
			621 => "Granada",
			891 => "Grantham Town",
			821 => "Grays Athletic ",
			646 => "Grimsby Town",
			811 => "Groningen",
			835 => "Guernsey",
			861 => "Guiseley",
			805 => "Gyor",
			813 => "Hajduk Split",
			892 => "Halesowen Town",
			647 => "Halifax Town",
			685 => "Hamburger SV",
			772 => "Hamilton Academical",
			851 => "Hampton & Richmond Borough",
			623 => "Hannover 96",
			862 => "Harrogate Town",
			853 => "Harrow Borough",
			585 => "Hartlepool United",
			1094 => "Hastings United",
			787 => "Haugesund",
			850 => "Havant & Waterlooville",
			878 => "Hayes & Yeading",
			118 => "Heart of Midlothian",
			863 => "Hednesford ",
			632 => "Hellas Verona",
			879 => "Hemel Hempstead",
			915 => "Hendon",
			1089 => "Heracles Almelo",
			1073 => "Hercules CF",
			663 => "Hereford United",
			691 => "Hertha Berlin",
			817 => "Heybridge Swifts ",
			200 => "Hibernian",
			945 => "Histon",
			939 => "Hitchin Town",
			1035 => "HJK Helsinki",
			511 => "HNK Rijeka",
			1090 => "Horsham",
			982 => "Houston Dynamo",
			557 => "Huddersfield Town",
			366 => "Hull City",
			933 => "Hungerford Town ",
			651 => "Hyde",
			806 => "IFK Goteborg",
			893 => "Ilkeston ",
			1054 => "Institute",
			607 => "Internazionale",
			361 => "Inverness Caledonian Thistle",
			485 => "Ipswich Town",
			800 => "Jeunesse Esch",
			442 => "Juventus",
			950 => "Kaizer Chiefs",
			568 => "Kidderminster Harriers",
			201 => "Kilmarnock",
			894 => "Kings Lynn",
			916 => "Kingstonian ",
			767 => "Koln",
			777 => "KR",
			506 => "KRC Genk",
			974 => "KSC Lokeren",
			478 => "Kuban",
			986 => "LA Galaxy",
			513 => "Lazio",
			864 => "Leamington ",
			919 => "Leatherhead ",
			465 => "Leeds United",
			515 => "Legia Warszawa",
			481 => "Leicester City",
			917 => "Leiston ",
			627 => "Levante",
			918 => "Lewes",
			551 => "Leyton Orient",
			658 => "Lincoln City",
			814 => "Linfield",
			1 => "Liverpool",
			966 => "Livingston",
			700 => "Livorno",
			619 => "LOSC Lille",
			865 => "Lowestoft Town",
			488 => "Ludogorets Razgrad",
			644 => "Luton Town",
			380 => "Maccabi Haifa",
			501 => "Maccabi Tel Aviv",
			569 => "Macclesfield Town",
			827 => "Maidenhead United",
			830 => "Maidstone United ",
			631 => "Malaga",
			843 => "Maldon & Tiptree",
			1029 => "Malmo FF",
			953 => "Mamelodi Sundowns",
			20 => "Manchester City",
			2 => "Manchester United",
			595 => "Mansfield Town",
			796 => "Margate ",
			895 => "Marine",
			954 => "Maritzburg United",
			897 => "Matlock Town",
			998 => "Melbourne City FC",
			977 => "Melbourne Victory",
			1049 => "Metalist Kharkiv",
			920 => "Metropolitan Police",
			556 => "Middlesbrough",
			462 => "Milan",
			559 => "Millwall",
			564 => "MK Dons",
			704 => "Montpellier Herault SC",
			755 => "Montreal Impact",
			596 => "Morecambe",
			948 => "Moroka Swallows",
			363 => "Motherwell",
			955 => "Mpumalanga Black Aces",
			1083 => "NAC Breda",
			898 => "Nantwich Town",
			456 => "Napoli",
			839 => "Needham Market",
			845 => "Newcastle Jets",
			19 => "Newcastle United",
			983 => "New England Revolution",
			597 => "Newport County",
			717 => "New York Red Bulls",
			474 => "NK Maribor",
			598 => "Northampton Town",
			866 => "North Ferriby ",
			364 => "Norwich City",
			545 => "Nottingham Forest",
			580 => "Notts County",
			660 => "Nuneaton Town",
			690 => "Nurnberg",
			809 => "Oakwood ",
			639 => "OGC Nice",
			577 => "Oldham Athletic",
			447 => "Olympiakos Piraeus",
			455 => "Olympique de Marseille",
			512 => "Olympique Lyonnais",
			958 => "Orlando Pirates",
			620 => "Osasuna",
			832 => "Ossett Town",
			867 => "Oxford City",
			539 => "Oxford United",
			496 => "Pacos de Ferreira",
			762 => "Palermo",
			1038 => "Panathinaikos",
			497 => "Pandurii Targu Jiu",
			520 => "PAOK",
			448 => "Paris Saint-Germain",
			610 => "Parma",
			360 => "Partick Thistle",
			944 => "Paulton Rovers",
			921 => "Peacehaven & Telscombe",
			1086 => "PEC Zwolle",
			846 => "Perth Glory",
			567 => "Peterborough United",
			990 => "Philadelphia Union",
			962 => "Platinum Stars",
			549 => "Plymouth Argyle",
			951 => "Polokwane City",
			927 => "Poole Town",
			1060 => "Portadown",
			988 => "Portland Timbers",
			599 => "Portsmouth",
			548 => "Port Vale",
			563 => "Preston North End",
			490 => "PSV Eindhoven",
			1040 => "Qarabag FK",
			967 => "Queen of the South",
			484 => "Queens Park Rangers",
			628 => "Raith Rovers",
			899 => "Ramsbottom United",
			1093 => "Ramsgate",
			297 => "Rangers",
			505 => "Rapid Vienna",
			615 => "Rayo Vallecano",
			633 => "RCD Espanyol",
			963 => "RCD Mallorca",
			759 => "RC Lens",
			544 => "Reading",
			475 => "Real Betis",
			444 => "Real Madrid",
			979 => "Real Salt Lake",
			439 => "Real Sociedad",
			941 => "Redditch United ",
			1046 => "Rio Ave",
			583 => "Rochdale",
			606 => "Roma",
			808 => "Rosenborg",
			362 => "Ross County",
			574 => "Rotherham United",
			446 => "RSC Anderlecht",
			479 => "Rubin Kazan",
			900 => "Rushall Olympic",
			656 => "Salisbury",
			617 => "Sampdoria",
			991 => "San Jose Earthquakes",
			697 => "Sassuolo",
			701 => "SC Bastia",
			1085 => "SC Cambuur",
			508 => "SC Freiburg",
			453 => "Schalke 04",
			1084 => "SC Heerenveen",
			766 => "SC Paderborn 07",
			600 => "Scunthorpe United",
			989 => "Seattle Sounders FC",
			509 => "Sevilla",
			440 => "Shakhtar Donetsk",
			519 => "Shakhter Karagandy",
			812 => "Shakhtyor Soligorsk",
			715 => "Shamrock Rovers",
			578 => "Sheffield United",
			561 => "Sheffield Wednesday",
			788 => "Shelbourne ",
			477 => "Sheriff",
			550 => "Shrewsbury Town",
			901 => "Skelmersdale United",
			797 => "Sligo Rovers",
			934 => "Slough Town",
			774 => "Slovan Bratislava",
			510 => "Slovan Liberec",
			696 => "Sochaux",
			868 => "Solihull Moors",
			69 => "Southampton",
			584 => "Southend United",
			975 => "South Park",
			665 => "Southport",
			872 => "Spartak Trnava",
			1044 => "Sparta Praha",
			467 => "Sporting Clube de Portugal",
			985 => "Sporting Kansas City",
			618 => "Stade de Reims",
			757 => "Stade Malherbe Caen",
			707 => "Stade Rennais",
			841 => "Stafford",
			880 => "Staines Town",
			836 => "St Albans ",
			837 => "Stalybridge Celtic",
			903 => "Stamford",
			473 => "Standard de Liege",
			454 => "Steaua Bucuresti",
			570 => "Stevenage",
			471 => "St Gallen",
			792 => "Stjarnan",
			116 => "St Johnstone",
			122 => "St Mirren",
			942 => "St Neots Town",
			869 => "Stockport County",
			8 => "Stoke City",
			905 => "Stourbridge",
			779 => "St Patrick's Athletic ",
			9 => "Sunderland",
			961 => "SuperSport United",
			828 => "Sutton United ",
			15 => "Swansea City",
			572 => "Swindon Town",
			995 => "Sydney FC",
			654 => "Tamworth",
			802 => "Tavistock ",
			769 => "Telford United",
			1052 => "Three Bridges",
			825 => "Thurrock",
			773 => "TNS",
			820 => "Tonbridge Angels",
			844 => "Tooting & Mitcham",
			604 => "Torino",
			716 => "Toronto FC",
			601 => "Torquay United",
			13 => "Tottenham Hotspur",
			609 => "Toulouse",
			516 => "Trabzonspor",
			906 => "Trafford",
			466 => "Tranmere Rovers",
			517 => "Tromso",
			938 => "Truro City",
			686 => "TSG 1899 Hoffenheim",
			626 => "Udinese",
			960 => "University of Pretoria",
			487 => "Valencia",
			706 => "Valenciennes",
			668 => "Valladolid",
			987 => "Vancouver Whitecaps",
			803 => "VCD Athletic ",
			689 => "VfB Stuttgart",
			692 => "VfL Wolfsburg",
			451 => "Viktoria Plzen",
			612 => "Villarreal",
			1074 => "Vitesse Arnhem",
			582 => "Walsall",
			972 => "Walton Casuals ",
			1051 => "Walton & Hersham",
			1057 => "Warrenpoint Town",
			483 => "Watford",
			881 => "Wealdstone ",
			848 => "Wellington Phoenix",
			664 => "Welling United",
			687 => "Werder Bremen",
			14 => "West Bromwich Albion",
			993 => "Western Sydney Wanderers",
			202 => "West Ham United",
			882 => "Weston-super-Mare",
			935 => "Weymouth ",
			907 => "Whitby Town",
			883 => "Whitehawk ",
			969 => "Whitstable Town",
			968 => "Whyteleafe",
			17 => "Wigan Athletic",
			1079 => "Willem II",
			922 => "Wingate & Finchley ",
			923 => "Witham Town ",
			908 => "Witton Albion",
			657 => "Woking",
			547 => "Wolverhampton Wanderers",
			870 => "Worcester City",
			910 => "Workington",
			1027 => "Worthing",
			661 => "Wrexham",
			586 => "Wycombe Wanderers",
			562 => "Yeovil Town",
			603 => "York City",
			459 => "Zenit Saint Petersburg",
			494 => "Zulte Waregem", 
		);
			$rounds = array(
			135  =>  "A-League (2014/2015)",
			116  =>  "Bundesliga (2014/2015)",
			112  =>  "Champions League Qualifying (2014/2015)",
			138  =>  "Champions League Group A (2014/2015)",
			139  =>  "Champions League Group B (2014/2015)",
			140  =>  "Champions League Group C (2014/2015)",
			141  =>  "Champions League Group D (2014/2015)",
			142  =>  "Champions League Group E (2014/2015)",
			143  =>  "Champions League Group F (2014/2015)",
			144  =>  "Champions League Group G (2014/2015)",
			145  =>  "Champions League Group H (2014/2015)",
			158  =>  "Champions League Group Stage (2014/2015)",
			108  =>  "Championship (2014/2015)",
			122  =>  "Community Shield (2014/2015)",
			127  =>  "Conference South (2014/2015)",
			126  =>  "Conference North (2014/2015)",
			114  =>  "Conference Premier (2014/2015)",
			171  =>  "Eredivisie (2014/2015)",
			161  =>  "Euro 2016 Qualifying Group A (2014/2015)",
			162  =>  "Euro 2016 Qualifying Group B (2014/2015)",
			163  =>  "Euro 2016 Qualifying Group C (2014/2015)",
			164  =>  "Euro 2016 Qualifying Group D (2014/2015)",
			165  =>  "Euro 2016 Qualifying Group E (2014/2015)",
			166  =>  "Euro 2016 Qualifying Group F (2014/2015)",
			167  =>  "Euro 2016 Qualifying Group G (2014/2015)",
			168  =>  "Euro 2016 Qualifying Group H (2014/2015)",
			169  =>  "Euro 2016 Qualifying Group I (2014/2015)",
			124  =>  "Euro 2016 Qualifying (2014/2015)",
			170  =>  "Euro 2016 Qualifying Group Stage (2014/2015)",
			146  =>  "Europa League Group A (2014/2015)",
			147  =>  "Europa League Group B (2014/2015)",
			148  =>  "Europa League Group C (2014/2015)",
			149  =>  "Europa League Group D (2014/2015)",
			150  =>  "Europa League Group E (2014/2015)",
			151  =>  "Europa League Group F (2014/2015)",
			152  =>  "Europa League Group G (2014/2015)",
			153  =>  "Europa League Group H (2014/2015)",
			154  =>  "Europa League Group I (2014/2015)",
			155  =>  "Europa League Group J (2014/2015)",
			156  =>  "Europa League Group K (2014/2015)",
			157  =>  "Europa League Group L (2014/2015)",
			159  =>  "Europa League Group Stage (2014/2015)",
			113  =>  "Europa League Qualifying (2014/2015)",
			136  =>  "Football League Trophy (2014/2015)",
			137  =>  "FA Cup (2014/2015)",
			120  =>  "Friendlies (2014/2015)",
			123  =>  "International Friendlies (2014/2015)",
			131  =>  "Isthmian Division One South (2014/2015)",
			129  =>  "Isthmian Premier League (2014/2015)",
			119  =>  "La Liga (2014/2015)",
			111  =>  "League Cup (2014/2015)",
			109  =>  "League One (2014/2015)",
			110  =>  "League Two (2014/2015)",
			117  =>  "Ligue 1 (2014/2015)",
			 99  =>  "MLS (2014)",
			160  =>  "NIFL Premiership (2014/2015)",
			128  =>  "Northern Premier League (2014/2015)",
			107  =>  "Premier League (2014/2015)",
			132  =>  "Premier Soccer League (2014/2015)",
			118  =>  "Serie A (2014/2015)",
			133  =>  "Scottish Championship (2014/2015)",
			115  =>  "Scottish Premiership (2014/2015)",
			134  =>  "Spanish Supercup (2014/2015)",
			130  =>  "Southern Premier League (2014/2015)",
			125  =>  "UEFA Super Cup (2014/2015)"
				);
			$match = array(
					3209 => array(
						'date' => '2014/06/12',
						'home' => 'Brazil',
						'away' => 'Croatia',
					),
					3210 => array(
						'date' => '2014/06/13',
						'home' => 'Mexico',
						'away' => 'Cameroon',
					),
					3215 => array(
						'date' => '2014/06/13',
						'home' => 'Spain',
						'away' => 'Netherlands',
					),
					3216 => array(
						'date' => '2014/06/13',
						'home' => 'Chile',
						'away' => 'Australia',
					),
					3221 => array(
						'date' => '2014/06/14',
						'home' => 'Colombia',
						'away' => 'Greece',
					),
					3227 => array(
						'date' => '2014/06/14',
						'home' => 'Uruguay',
						'away' => 'Costa Rica',
					),
					3228 => array(
						'date' => '2014/06/14',
						'home' => 'England',
						'away' => 'Italy',
					),
					3222 => array(
						'date' => '2014/06/15',
						'home' => 'Ivory Coast',
						'away' => 'Japan',
					),
					3308 => array(
						'date' => '2014/06/15',
						'home' => 'Switz\'land',
						'away' => 'Ecuador',
					),
					3309 => array(
						'date' => '2014/06/15',
						'home' => 'France',
						'away' => 'Honduras',
					),
					3314 => array(
						'date' => '2014/06/15',
						'home' => 'Argentina',
						'away' => 'Bos & Herz',
					),
					3320 => array(
						'date' => '2014/06/16',
						'home' => 'Germany',
						'away' => 'Portugal',
					),
					3315 => array(
						'date' => '2014/06/16',
						'home' => 'Iran',
						'away' => 'Nigeria',
					),
					3321 => array(
						'date' => '2014/06/16',
						'home' => 'Ghana',
						'away' => 'USA',
					),
					3326 => array(
						'date' => '2014/06/17',
						'home' => 'Belgium',
						'away' => 'Algeria',
					),
					3311 => array(
						'date' => '2014/06/17',
						'home' => 'Brazil',
						'away' => 'Mexico',
					),
					3327 => array(
						'date' => '2014/06/17',
						'home' => 'Russia',
						'away' => 'S Korea',
					),
					3217 => array(
						'date' => '2014/06/18',
						'home' => 'Australia',
						'away' => 'Netherlands',
					),
					3218 => array(
						'date' => '2014/06/18',
						'home' => 'Spain',
						'away' => 'Chile',
					),
					3212 => array(
						'date' => '2014/06/18',
						'home' => 'Cameroon',
						'away' => 'Croatia',
					),
					3223 => array(
						'date' => '2014/06/19',
						'home' => 'Colombia',
						'away' => 'Ivory Coast',
					),
					3229 => array(
						'date' => '2014/06/19',
						'home' => 'Uruguay',
						'away' => 'England',
					),
					3224 => array(
						'date' => '2014/06/19',
						'home' => 'Japan',
						'away' => 'Greece',
					),
					3230 => array(
						'date' => '2014/06/20',
						'home' => 'Italy',
						'away' => 'Costa Rica',
					),
					3310 => array(
						'date' => '2014/06/20',
						'home' => 'Switz\'land',
						'away' => 'France',
					),
					3311 => array(
						'date' => '2014/06/20',
						'home' => 'Honduras',
						'away' => 'Ecuador',
					),
					3316 => array(
						'date' => '2014/06/21',
						'home' => 'Argentina',
						'away' => 'Iran',
					),
					3322 => array(
						'date' => '2014/06/21',
						'home' => 'Germany',
						'away' => 'Ghana',
					),
					3317 => array(
						'date' => '2014/06/21',
						'home' => 'Nigeria',
						'away' => 'Bos & Herz',
					),
					3328 => array(
						'date' => '2014/06/21',
						'home' => 'Belgium',
						'away' => 'Russia',
					),
					3329 => array(
						'date' => '2014/06/22',
						'home' => 'S Korea',
						'away' => 'Algeria',
					),
					3323 => array(
						'date' => '2014/06/22',
						'home' => 'USA',
						'away' => 'Portugal',
					),
					3219 => array(
						'date' => '2014/06/22',
						'home' => 'Australia',
						'away' => 'Spain',
					),
					3220 => array(
						'date' => '2014/06/23',
						'home' => 'Netherlands',
						'away' => 'Chile',
					),
					3213 => array(
						'date' => '2014/06/23',
						'home' => 'Cameroon',
						'away' => 'Brazil',
					),
					3214 => array(
						'date' => '2014/06/23',
						'home' => 'Croatia',
						'away' => 'Mexico',
					),
					3304 => array(
						'date' => '2014/06/24',
						'home' => 'Costa Rica',
						'away' => 'England',
					),
					3305 => array(
						'date' => '2014/06/24',
						'home' => 'Italy',
						'away' => 'Uruguay',
					),
					3226 => array(
						'date' => '2014/06/24',
						'home' => 'Greece',
						'away' => 'Ivory Coast',
					),
					3225 => array(
						'date' => '2014/06/24',
						'home' => 'Japan',
						'away' => 'Colombia',
					),
					3318 => array(
						'date' => '2014/06/25',
						'home' => 'Bos & Herz',
						'away' => 'Iran',
					),	
					3319 => array(
						'date' => '2014/06/25',
						'home' => 'Nigeria',
						'away' => 'Argentina',
					),
					3312 => array(
						'date' => '2014/06/25',
						'home' => 'Ecuador',
						'away' => 'France',
					),
					3313 => array(
						'date' => '2014/06/25',
						'home' => 'Honduras',
						'away' => 'Switz\'land',
					),					
					3324 => array(
						'date' => '2014/06/26',
						'home' => 'Portugal',
						'away' => 'Ghana',
					),
					3325 => array(
						'date' => '2014/06/26',
						'home' => 'USA',
						'away' => 'Germany',
					),
					3330 => array(
						'date' => '2014/06/26',
						'home' => 'Algeria',
						'away' => 'Russia',
					),
					3331 => array(
						'date' => '2014/06/26',
						'home' => 'S Korea',
						'away' => 'Belgium',
					),
					3449 => array(
						'date' => '2014/06/28',
						'home' => 'Winner A',
						'away' => 'Runner-Up B',
					),
					3450 => array(
						'date' => '2014/06/28',
						'home' => 'Winner C',
						'away' => 'Runner-Up D',
					),
					3451 => array(
						'date' => '2014/06/29',
						'home' => 'Winner B',
						'away' => 'Runner-Up A',
					),
					3452 => array(
						'date' => '2014/06/29',
						'home' => 'Winner D',
						'away' => 'Runner-Up C',
					),
					3453 => array(
						'date' => '2014/06/30',
						'home' => 'Winner E',
						'away' => 'Runner-Up F',
					),
					3454 => array(
						'date' => '2014/06/30',
						'home' => 'Winner G',
						'away' => 'Runner-Up H',
					),
					3455 => array(
						'date' => '2014/07/01',
						'home' => 'Winner F',
						'away' => 'Runner-Up E',
					),					
					3456 => array(
						'date' => '2014/07/01',
						'home' => 'Winner H',
						'away' => 'Runner-Up G',
					),
					3457 => array(
						'date' => '2014/07/04',
						'home' => 'Quarter final',
						'away' => '',
					),
					3458 => array(
						'date' => '2014/07/04',
						'home' => 'Quarter final',
						'away' => '',
					),
					3459 => array(
						'date' => '2014/07/05',
						'home' => 'Quarter final',
						'away' => '',
					),
					3460 => array(
						'date' => '2014/07/05',
						'home' => 'Quarter final',
						'away' => '',
					),
					3461 => array(
						'date' => '2014/07/08',
						'home' => 'Semi final',
						'away' => '',
					),
					3462 => array(
						'date' => '2014/07/09',
						'home' => 'Semi final',
						'away' => '',
					),
					3463 => array(
						'date' => '2014/07/12',
						'home' => '3rd place play-off',
						'away' => '',
					),
					3464 => array(
						'date' => '2014/07/13',
						'home' => 'Final',
						'away' => '',
					),
				);
	?>
    <table class="form-table">
        <tr valign="top">        
			<th scope="row">Widget Key</th>        
			<td>			
				<input type="text" style="width:300px;" name="cc_group_setting[key]" value="<?php echo $cc_settings['key']; ?>" />			
				<span style="text-align:right;">Don't have a widget Key! <a href="http://commercial.crowdscores.com/contact/"  class="button">Contact Us</a></span>	
				<span>
					<p>Please enter a widget key which will be used for all widgets.</p>
				</span>				
			</td>
		</tr>
		<tr valign="top">
			<th scope="row">
			</th>
			<td>
			<hr>
			</td>
		</tr>	
		<tr valign="top">
			<th scope="row">
			</th>
			<td>
				<span>
					<p>You can display the widget configured on this setting page in the content part fo your post and pages by using this <b style="color: ;">[cc_table]</b> shortcode.</p>
				</span>
			</td>
		</tr>	
        <tr valign="top">
			<th scope="row">Select a Widget</th>
			<td>			
				<select id="select_widget" name="cc_group_setting[widget]">
					<?php 
					foreach($widget as $k => $v){ 
						if(empty($cc_settings['widget'])){
							$cc_settings['widget'] = "livescores-widget";
						}
						if($k == $cc_settings['widget']){
					?>
							<option value="<?php echo $k; ?>" selected="selected"><?php echo $v; ?></option>
					<?php
						}else{
					?>
							<option value="<?php echo $k; ?>"><?php echo $v; ?></option>
					<?php
						}
					}?>
				</select>
				<div class="widgit_description">
					<span class="description_inner" id="topscorers-widget">
						<p>A list of 10 top goal scorers ordered by goals scored and then assists. Accepts an optional Max Players parameter that defines how many players to show.</p>
					</span>
					<span class="description_inner" id="assists-widget">
						<p>A list of 10 top assisters ordered by assists. Accepts an optional Max Players parameter that defines how many players to show.</p>
					</span>
					<span class="description_inner" id="lineups-widget">
						<p>Once the lineups have been released for each team (typically an hour before kickoff), a list of the starting eleven for each team for the specified match.</p>
					</span>
					<span class="description_inner" id="livescores-widget">
						<p>This contains a list of 10 previous results, or 10 upcoming fixtures. Today's matches are included in both. The Data Type parameter should contain either "fixtures" or "results". Accepts an optional Max Matches parameter that defines how many matches to show.</p>
					</span>
					<span class="description_inner" id="leaguetable-widget">
						<p>League tables of specified groups. The widget starts at the first group listed and has two large arrows to flick between them.</p>
					</span>
					<span class="description_inner" id="squadlist-widget">
						<p>The list of the 23 players in the specified team's squad.</p>
					</span>
					<span class="description_inner" id="matchcentre-widget">
						<p>Displays an overview of the match, including: the current score, a timeline of goal and card events and play by play commentary.</p>
					</span>
					<span class="description_inner" id="teamstats-widget">
						<p>Displays a team's players. Includes goals scored.</p>
					</span>
					<span class="description_inner" id="secondphase-widget">
						<p>Displays the knockout round.</p>
					</span>
					<span class="description_inner" id="playerstats-widget">
						<p>A list of 10 top goal scorers ordered by goals scored and then assists.</p>
					</span>
					<span class="description_inner" id="nextmatch-widget">
						<p>Displays details of the next upcoming match for a given team.</p>
					</span>
				</div>
			</td>
        </tr>
		<tr valign="top" id="data-competition-id" class="parimeters" >        
			<th scope="row">Select Competition</th>
			<td>			
				
					<?php
						if(empty($cc_settings['competation'])){
							$cc_settings['competation'] = "2";
						}					
						foreach($data_competition_id as $k => $v){
					?>
						<input type="checkbox" name="cc_group_setting[competation][]" <?php if(is_array($cc_settings['competation'])){ if(in_array($k, $cc_settings['competation'])){ echo "checked"; }} ?> value="<?php echo $k; ?>"><?php echo $v; ?></br>
					<?php } ?>

			</td>
		</tr>
        <tr valign="top" id="data-team-id" class="parimeters" >        
			<th scope="row">Select Team's (optional)</th>
			<td>			
				<select name="cc_group_setting[teams]">
					<?php foreach($teams as $k => $v){?>
						<option <?php if($cc_settings['teams'] == $k){ echo "selected='selected'"; } ?> value="<?php echo $k; ?>"><?php echo $v ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr valign="top" id="data-round-id" class="parimeters">        
			<th scope="row">Select Round's</th>        
			<td>
					<?php foreach($rounds as $k => $v){ ?>
						<input type="checkbox" name="cc_group_setting[rounds][]" <?php if(is_array($cc_settings['rounds'])){if(in_array($k, $cc_settings['rounds'])){ echo "checked"; }} ?> value="<?php echo $k; ?>"><?php echo $v; ?></br>
					<?php } ?>
			</td>
		</tr>
		<tr valign="top" id="data-match-id" class="parimeters">        
			<th scope="row">Select Matche's</th>        
			<td>
				<select name="cc_group_setting[match]" >
					<?php foreach($match as $k => $v){?>
					<option <?php if($cc_settings['match'] == $k){ echo "selected='selected'"; } ?> value="<?php echo $k; ?>"><?php echo $v['date']." ".$v['home']." ".$v['away']; ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
        <tr valign="top" id="data-type" class="parimeters">
			<th scope="row">Data Type</th>        
			<td>			
				<select name="cc_group_setting[data_type]" id="">
					<option <?php if($cc_settings['data_type'] == "fixtures"){ echo "selected='selected'"; }?> value="fixtures">Fixtures</option>
					<option <?php if($cc_settings['data_type'] == "results"){ echo "selected='selected'"; }?> value="results">Result</option>
				</select>				
			</td>
		</tr>
        <tr valign="top" id="data-max-matches" class="parimeters">
			<th scope="row">Maximum Matches to display (optional)</th>
			<td>
				<input type="text" style="width:300px;" name="cc_group_setting[max_match]" value="<?php if(empty($cc_settings['max_match'])){echo "10";}else{echo $cc_settings['max_match']; } ?>" />
			</td>
        </tr>
		<tr valign="top" id="data-max-players" class="parimeters">
			<th scope="row">Maximum Player's to display (optional)</th>
			<td>
				<input type="text" style="width:300px;" name="cc_group_setting[max_players]" value="<?php echo $cc_settings['max_players']; ?>" />
			</td>
        </tr>
		<tr valign="top" id="data-max-rows" class="parimeters">
			<th scope="row">Maximum Row's to display (optional)</th>
			<td>
				<input type="text" style="width:300px;" name="cc_group_setting[max-rows]" value="<?php echo $cc_settings['max-rows']; ?>" />
			</td>
        </tr>
    </table>    
<p class="submit">
<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
</p>
<?php cc_display(); ?>
</form>
</div> 
