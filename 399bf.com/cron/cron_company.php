<?php
// 指数公司

require_once 'global.func.php';
require_once 'conn.php';

// 指数公司数据
$arrCOMPANY = array();
// 欧指公司
$arrCOMPANY[588] = ['com-bet.com(澳地利)','',''];
$arrCOMPANY[582] = ['BetChance(马尔他)','',''];
$arrCOMPANY[724] = ['IBC沙巴','',''];
$arrCOMPANY[286] = ['宝盈','',''];
$arrCOMPANY[326] = ['波音','',''];
$arrCOMPANY[252] = ['博迎','新加坡',''];
$arrCOMPANY[728] = ['大发','',''];
$arrCOMPANY[670] = ['富易堂','菲律宾',''];
$arrCOMPANY[305] = ['合对','英属维尔京群岛',''];
$arrCOMPANY[734] = ['皇家','',''];
$arrCOMPANY[735] = ['申博娱乐','',''];
$arrCOMPANY[389] = ['伟德亚洲','',''];
$arrCOMPANY[733] = ['小永','',''];
$arrCOMPANY[729] = ['银河国际','',''];
$arrCOMPANY[443] = ['永利高','',''];
$arrCOMPANY[730] = ['优德','',''];
$arrCOMPANY[265] = ['云鼎','',''];
$arrCOMPANY[731] = ['智博','',''];
$arrCOMPANY[732] = ['走地皇','',''];
$arrCOMPANY[1] = ['10BET','英国',''];
$arrCOMPANY[117] = ['12bet.com','',''];
$arrCOMPANY[578] = ['138sungame','',''];
$arrCOMPANY[2] = ['176bet.net','',''];
$arrCOMPANY[253] = ['188bet','',''];
$arrCOMPANY[680] = ['18Bet','',''];
$arrCOMPANY[739] = ['18luck','菲律宾',''];
$arrCOMPANY[500] = ['1Bet','',''];
$arrCOMPANY[409] = ['1Bet2Bet.com','',''];
$arrCOMPANY[740] = ['1xBet','',''];
$arrCOMPANY[377] = ['24Carat','',''];
$arrCOMPANY[3] = ['24hBET','瑞典',''];
$arrCOMPANY[4] = ['24hPoker','瑞典',''];
$arrCOMPANY[285] = ['2BetOnline','英国',''];
$arrCOMPANY[766] = ['2winbet.gr','',''];
$arrCOMPANY[484] = ['32Red Bet','',''];
$arrCOMPANY[5] = ['3bwin','',''];
$arrCOMPANY[6] = ['5 Dimes','哥斯达黎加',''];
$arrCOMPANY[449] = ['5DimesReduced','',''];
$arrCOMPANY[722] = ['666Bet','',''];
$arrCOMPANY[419] = ['888.it','',''];
$arrCOMPANY[360] = ['888Sport','',''];
$arrCOMPANY[783] = ['888Sport.es','',''];
$arrCOMPANY[679] = ['88asia88','',''];
$arrCOMPANY[378] = ['8Dice','',''];
$arrCOMPANY[712] = ['99Bet','',''];
$arrCOMPANY[512] = ['ABC Islands','',''];
$arrCOMPANY[579] = ['ABCmanager','',''];
$arrCOMPANY[524] = ['Acbet','',''];
$arrCOMPANY[633] = ['Adabet','',''];
$arrCOMPANY[7] = ['Admiral','奥地利',''];
$arrCOMPANY[747] = ['Admiral.at','',''];
$arrCOMPANY[8] = ['Aebet','洪都拉斯',''];
$arrCOMPANY[669] = ['Agile','',''];
$arrCOMPANY[765] = ['agile.it','',''];
$arrCOMPANY[501] = ['Alibet','',''];
$arrCOMPANY[478] = ['AllYouBet','',''];
$arrCOMPANY[9] = ['AnyBets','',''];
$arrCOMPANY[632] = ['Apollobet','',''];
$arrCOMPANY[781] = ['ArtemisBet','',''];
$arrCOMPANY[566] = ['as3388','',''];
$arrCOMPANY[275] = ['AscotSports','',''];
$arrCOMPANY[502] = ['AsiaBet','',''];
$arrCOMPANY[351] = ['Asiabet88','',''];
$arrCOMPANY[10] = ['Asianodds.com','',''];
$arrCOMPANY[320] = ['Astra Sport Bets','',''];
$arrCOMPANY[11] = ['Astrabet','',''];
$arrCOMPANY[12] = ['At Home','',''];
$arrCOMPANY[391] = ['Atlantik','',''];
$arrCOMPANY[13] = ['Back2Bet','英国',''];
$arrCOMPANY[322] = ['Baffalo','',''];
$arrCOMPANY[580] = ['Bahamas','',''];
$arrCOMPANY[338] = ['Balkan Bet','',''];
$arrCOMPANY[479] = ['Balkanbet','',''];
$arrCOMPANY[708] = ['Balkanbet.rs','',''];
$arrCOMPANY[677] = ['Ball2win','',''];
$arrCOMPANY[442] = ['BancoSport','',''];
$arrCOMPANY[503] = ['bbet','',''];
$arrCOMPANY[266] = ['bc080','',''];
$arrCOMPANY[287] = ['bc080.com','',''];
$arrCOMPANY[447] = ['Bestake.com','',''];
$arrCOMPANY[14] = ['BestSportWorld','英国',''];
$arrCOMPANY[15] = ['Bet','英国',''];
$arrCOMPANY[16] = ['BET 1128','',''];
$arrCOMPANY[17] = ['Bet 365','英国',''];
$arrCOMPANY[18] = ['Bet Jamaica','',''];
$arrCOMPANY[19] = ['BET on USA','西印度群岛',''];
$arrCOMPANY[20] = ['Bet Win','奥地利',''];
$arrCOMPANY[707] = ['Bet16','',''];
$arrCOMPANY[21] = ['Bet19.com','',''];
$arrCOMPANY[504] = ['bet21','',''];
$arrCOMPANY[22] = ['Bet24','丹麦',''];
$arrCOMPANY[715] = ['Bet2be','',''];
$arrCOMPANY[309] = ['Bet3000','',''];
$arrCOMPANY[418] = ['Bet770','',''];
$arrCOMPANY[361] = ['Bet7days','',''];
$arrCOMPANY[661] = ['bet855','',''];
$arrCOMPANY[726] = ['Bet90','',''];
$arrCOMPANY[429] = ['Bet911','',''];
$arrCOMPANY[23] = ['Betabet','英国',''];
$arrCOMPANY[746] = ['BetAdonis','',''];
$arrCOMPANY[466] = ['BetAdria','',''];
$arrCOMPANY[24] = ['Betako','',''];
$arrCOMPANY[382] = ['Betaland','',''];
$arrCOMPANY[25] = ['betandgame','',''];
$arrCOMPANY[26] = ['Betandwin.com','奥地利',''];
$arrCOMPANY[27] = ['Bet-at-home.com','奥地利',''];
$arrCOMPANY[659] = ['bet-at-home.it','意大利',''];
$arrCOMPANY[741] = ['Bet-at-home.uk','',''];
$arrCOMPANY[362] = ['Betboo','',''];
$arrCOMPANY[709] = ['Betbright','',''];
$arrCOMPANY[28] = ['betbull','',''];
$arrCOMPANY[678] = ['Betbutler','',''];
$arrCOMPANY[581] = ['Betcenter','',''];
$arrCOMPANY[706] = ['Betcenter.be','',''];
$arrCOMPANY[742] = ['Betcentershops','',''];
$arrCOMPANY[304] = ['Betchance','',''];
$arrCOMPANY[276] = ['Betchoice','',''];
$arrCOMPANY[375] = ['BetChronicle','',''];
$arrCOMPANY[571] = ['betChronicle.com','',''];
$arrCOMPANY[525] = ['Betcity','',''];
$arrCOMPANY[29] = ['BetClass','马尔他',''];
$arrCOMPANY[480] = ['BetClic','',''];
$arrCOMPANY[485] = ['BetClic.fr','',''];
$arrCOMPANY[434] = ['BetClic.it','',''];
$arrCOMPANY[30] = ['BetClick','',''];
$arrCOMPANY[475] = ['betclick.fr','',''];
$arrCOMPANY[31] = ['BETCOM','哥斯达黎加',''];
$arrCOMPANY[32] = ['BETCRIS','哥斯达黎加',''];
$arrCOMPANY[650] = ['Betcruise','',''];
$arrCOMPANY[33] = ['BETDAQ','爱尔兰',''];
$arrCOMPANY[34] = ['BetDirect','英国',''];
$arrCOMPANY[492] = ['BetEd','',''];
$arrCOMPANY[35] = ['BetEuro','英国',''];
$arrCOMPANY[36] = ['Beteurope','',''];
$arrCOMPANY[456] = ['betewin.com','',''];
$arrCOMPANY[37] = ['Betfair','英国',''];
$arrCOMPANY[736] = ['Betfair AUS','',''];
$arrCOMPANY[748] = ['Betfair ES Sportsbook','',''];
$arrCOMPANY[749] = ['Betfair Exchange','',''];
$arrCOMPANY[750] = ['Betfair IT Sportsbook','',''];
$arrCOMPANY[685] = ['Betfair SB','',''];
$arrCOMPANY[751] = ['Betfair UK Sportsbook','',''];
$arrCOMPANY[457] = ['Betfair.it','意大利',''];
$arrCOMPANY[583] = ['Betflag','',''];
$arrCOMPANY[647] = ['Betflag.it','',''];
$arrCOMPANY[38] = ['Betfred','',''];
$arrCOMPANY[39] = ['BetGameDay','荷属安的列斯群岛',''];
$arrCOMPANY[40] = ['betgrande.com','',''];
$arrCOMPANY[261] = ['BetGun.com','',''];
$arrCOMPANY[699] = ['Betin','',''];
$arrCOMPANY[41] = ['Betinternet','英国',''];
$arrCOMPANY[639] = ['BetISN','',''];
$arrCOMPANY[753] = ['Betitaly','',''];
$arrCOMPANY[668] = ['betitaly.it','',''];
$arrCOMPANY[333] = ['betliner','',''];
$arrCOMPANY[584] = ['Betlive','',''];
$arrCOMPANY[42] = ['Betmaker','哥斯达黎加',''];
$arrCOMPANY[782] = ['Betmira','',''];
$arrCOMPANY[481] = ['Betngo','',''];
$arrCOMPANY[43] = ['betoddoreven','英国',''];
$arrCOMPANY[44] = ['BetOnBet','英国',''];
$arrCOMPANY[45] = ['BetOnGames','荷属安的列斯',''];
$arrCOMPANY[493] = ['Betonline','',''];
$arrCOMPANY[604] = ['betoto.com','',''];
$arrCOMPANY[521] = ['Betpeople','',''];
$arrCOMPANY[356] = ['BetPhoenix','',''];
$arrCOMPANY[427] = ['Betplus','',''];
$arrCOMPANY[405] = ['Betpro.it','',''];
$arrCOMPANY[342] = ['BetQS','',''];
$arrCOMPANY[671] = ['Betrally','',''];
$arrCOMPANY[496] = ['BetRedKings','',''];
$arrCOMPANY[646] = ['Betrockit.com','',''];
$arrCOMPANY[47] = ['BetRoyal','荷属安的列斯群岛',''];
$arrCOMPANY[450] = ['Bets4all','奥地利',''];
$arrCOMPANY[48] = ['Bets4all.com','奥地利',''];
$arrCOMPANY[49] = ['Betsafe','',''];
$arrCOMPANY[544] = ['Betsafe.DK','',''];
$arrCOMPANY[50] = ['BetSense','英国',''];
$arrCOMPANY[51] = ['Betshop','英国',''];
$arrCOMPANY[424] = ['Betshop.it','',''];
$arrCOMPANY[432] = ['BetshopItalia','',''];
$arrCOMPANY[627] = ['Betsi','',''];
$arrCOMPANY[767] = ['Betsolo','',''];
$arrCOMPANY[543] = ['BetSonic','',''];
$arrCOMPANY[654] = ['betspace','',''];
$arrCOMPANY[288] = ['Betsson','瑞典',''];
$arrCOMPANY[53] = ['Betsson Exchang','英国',''];
$arrCOMPANY[52] = ['Betsson Sportsbook','',''];
$arrCOMPANY[547] = ['Betsson.DK','',''];
$arrCOMPANY[54] = ['Betstar','',''];
$arrCOMPANY[55] = ['betSuperbet','',''];
$arrCOMPANY[784] = ['Betswar','',''];
$arrCOMPANY[329] = ['better.it','',''];
$arrCOMPANY[271] = ['betterbet','',''];
$arrCOMPANY[441] = ['BetTime','',''];
$arrCOMPANY[631] = ['Betting195','',''];
$arrCOMPANY[433] = ['Betting2000','',''];
$arrCOMPANY[272] = ['bettingstar24.com','',''];
$arrCOMPANY[358] = ['BetUK','',''];
$arrCOMPANY[684] = ['BetuniQ','',''];
$arrCOMPANY[312] = ['BetUS','',''];
$arrCOMPANY[716] = ['BetVictor','',''];
$arrCOMPANY[56] = ['Betway','',''];
$arrCOMPANY[57] = ['BetWWTS','',''];
$arrCOMPANY[58] = ['BetXC','立陶宛',''];
$arrCOMPANY[59] = ['Betzone','荷兰',''];
$arrCOMPANY[585] = ['BGT','',''];
$arrCOMPANY[60] = ['Bill Hurley','澳大利亚',''];
$arrCOMPANY[61] = ['BINGOAL','荷兰',''];
$arrCOMPANY[768] = ['Bitcasino','',''];
$arrCOMPANY[692] = ['BizonBet','',''];
$arrCOMPANY[62] = ['Blue Square','英国',''];
$arrCOMPANY[667] = ['Bluebet.it','',''];
$arrCOMPANY[63] = ['BoDog','哥斯达黎加',''];
$arrCOMPANY[403] = ['Bodog.com','',''];
$arrCOMPANY[538] = ['Bodog.eu','',''];
$arrCOMPANY[545] = ['Bodog.uk','',''];
$arrCOMPANY[349] = ['BonBet.com','',''];
$arrCOMPANY[426] = ['Bookie Bob','',''];
$arrCOMPANY[515] = ['BookieBob','',''];
$arrCOMPANY[516] = ['Bookmaker.ag','',''];
$arrCOMPANY[269] = ['Bookmaker.com','',''];
$arrCOMPANY[526] = ['Bookmaker.eu','厄瓜多尔',''];
$arrCOMPANY[586] = ['Bovada','',''];
$arrCOMPANY[649] = ['Bovada.lv','',''];
$arrCOMPANY[64] = ['Bowman','英国',''];
$arrCOMPANY[482] = ['Boyle Sports','',''];
$arrCOMPANY[65] = ['Boylesports','爱尔兰',''];
$arrCOMPANY[66] = ['bwin','',''];
$arrCOMPANY[635] = ['bwin.es','',''];
$arrCOMPANY[451] = ['bwin.fr','',''];
$arrCOMPANY[407] = ['BWin.it','',''];
$arrCOMPANY[343] = ['C4A.com','',''];
$arrCOMPANY[67] = ['Canbet','英国',''];
$arrCOMPANY[68] = ['Capital Sports','英国',''];
$arrCOMPANY[430] = ['Carib Sports','洪都拉斯',''];
$arrCOMPANY[69] = ['CaribSport','洪都拉斯',''];
$arrCOMPANY[70] = ['Cash Point','奥地利',''];
$arrCOMPANY[423] = ['CashPoint','',''];
$arrCOMPANY[363] = ['Casino','',''];
$arrCOMPANY[440] = ['CasinoSanremo.i','',''];
$arrCOMPANY[445] = ['CasinoSanremo.it','',''];
$arrCOMPANY[727] = ['CBCX','',''];
$arrCOMPANY[71] = ['CBM Bookmaker','英国',''];
$arrCOMPANY[653] = ['CBMsport','',''];
$arrCOMPANY[634] = ['Cecebet','',''];
$arrCOMPANY[72] = ['Centrebet','澳大利亚',''];
$arrCOMPANY[587] = ['Centurionbet','',''];
$arrCOMPANY[73] = ['Certbet','奥地利',''];
$arrCOMPANY[664] = ['championsbet','',''];
$arrCOMPANY[74] = ['Chance','捷克',''];
$arrCOMPANY[495] = ['Chilipari','',''];
$arrCOMPANY[75] = ['ciaobet.com','马尔他',''];
$arrCOMPANY[577] = ['Cirsa','',''];
$arrCOMPANY[675] = ['Cirsa.it','',''];
$arrCOMPANY[527] = ['ClickAndBet','',''];
$arrCOMPANY[703] = ['CMD368.com','',''];
$arrCOMPANY[76] = ['cnnbest.com','',''];
$arrCOMPANY[77] = ['com-bet.com','奥地利',''];
$arrCOMPANY[546] = ['ComeOn','',''];
$arrCOMPANY[458] = ['completesportsb','',''];
$arrCOMPANY[314] = ['Completesportsbetting','澳大利亚',''];
$arrCOMPANY[698] = ['Contorabet','',''];
$arrCOMPANY[78] = ['Coral','英国',''];
$arrCOMPANY[353] = ['Cote&Match','',''];
$arrCOMPANY[79] = ['cp080.com','',''];
$arrCOMPANY[308] = ['Crown','',''];
$arrCOMPANY[80] = ['Cybersportsbook','',''];
$arrCOMPANY[626] = ['Czarnykon','',''];
$arrCOMPANY[513] = ['Dafabet','菲律宾',''];
$arrCOMPANY[373] = ['Danbook','',''];
$arrCOMPANY[81] = ['Dansk Tipstjeneste','丹麦',''];
$arrCOMPANY[648] = ['Danske Spil','',''];
$arrCOMPANY[82] = ['Davidson','澳大利亚',''];
$arrCOMPANY[83] = ['Denmark','丹麦',''];
$arrCOMPANY[323] = ['Derby','',''];
$arrCOMPANY[267] = ['derby-games.com','',''];
$arrCOMPANY[774] = ['Dhoze','',''];
$arrCOMPANY[311] = ['dialabet','',''];
$arrCOMPANY[84] = ['Diamond Sportsbook','',''];
$arrCOMPANY[383] = ['Diamond Sportsbook Int.','',''];
$arrCOMPANY[467] = ['DiamondSportsBook','',''];
$arrCOMPANY[259] = ['Digibet','',''];
$arrCOMPANY[85] = ['dimeplayer.com','',''];
$arrCOMPANY[534] = ['Dobet','',''];
$arrCOMPANY[86] = ['Domebet','',''];
$arrCOMPANY[535] = ['Domgame','',''];
$arrCOMPANY[651] = ['Domusbet.it','',''];
$arrCOMPANY[300] = ['dorobet','',''];
$arrCOMPANY[316] = ['Doxxbet','',''];
$arrCOMPANY[514] = ['E6bet','菲律宾',''];
$arrCOMPANY[257] = ['Easybets','',''];
$arrCOMPANY[88] = ['eb248','',''];
$arrCOMPANY[523] = ['Eccobet','塞浦路斯',''];
$arrCOMPANY[528] = ['Efbet','',''];
$arrCOMPANY[702] = ['Egobet','',''];
$arrCOMPANY[548] = ['Envicto','',''];
$arrCOMPANY[357] = ['e-stave','',''];
$arrCOMPANY[46] = ['Etoto','直布罗陀',''];
$arrCOMPANY[89] = ['Eurobet','英国',''];
$arrCOMPANY[277] = ['Eurobet.it','',''];
$arrCOMPANY[621] = ['Europe-bet','',''];
$arrCOMPANY[90] = ['Europlay','奥地利',''];
$arrCOMPANY[324] = ['Eurosansa','',''];
$arrCOMPANY[396] = ['EurosportBET','',''];
$arrCOMPANY[459] = ['eurosportbet.fr','',''];
$arrCOMPANY[91] = ['EuroSportwetten','奥地利',''];
$arrCOMPANY[92] = ['Eurotip','英国',''];
$arrCOMPANY[384] = ['Evebet','',''];
$arrCOMPANY[636] = ['Evobet','',''];
$arrCOMPANY[589] = ['Evona','',''];
$arrCOMPANY[780] = ['ExclusiveBet','',''];
$arrCOMPANY[93] = ['Expekt','英国',''];
$arrCOMPANY[494] = ['Extrabet','',''];
$arrCOMPANY[645] = ['Fantasticwin','',''];
$arrCOMPANY[549] = ['FavBet','',''];
$arrCOMPANY[94] = ['favorit','克罗地亚',''];
$arrCOMPANY[695] = ['FDJ','',''];
$arrCOMPANY[370] = ['FiveBet','',''];
$arrCOMPANY[644] = ['Fivebet.it','',''];
$arrCOMPANY[379] = ['Flemington Sportsbet','',''];
$arrCOMPANY[95] = ['Fonbet','俄罗斯',''];
$arrCOMPANY[350] = ['Forma','',''];
$arrCOMPANY[96] = ['Formula','斯洛伐克',''];
$arrCOMPANY[97] = ['Fortuna','加拿大',''];
$arrCOMPANY[98] = ['Francaise des jeux','',''];
$arrCOMPANY[473] = ['france-pari.fr','',''];
$arrCOMPANY[330] = ['Fubo','',''];
$arrCOMPANY[413] = ['fubo.com','',''];
$arrCOMPANY[542] = ['fun88','',''];
$arrCOMPANY[723] = ['G England Johns','',''];
$arrCOMPANY[99] = ['Galaxy Betting','',''];
$arrCOMPANY[486] = ['Gamblers Palace','',''];
$arrCOMPANY[497] = ['GamblersPalace','',''];
$arrCOMPANY[100] = ['game2bet.com','',''];
$arrCOMPANY[102] = ['gamebookers','安提瓜和巴布达',''];
$arrCOMPANY[101] = ['Gamebookers Italia','',''];
$arrCOMPANY[103] = ['GameDay','荷兰',''];
$arrCOMPANY[683] = ['GameLux.it','',''];
$arrCOMPANY[491] = ['Gamenet','',''];
$arrCOMPANY[666] = ['Gamenet.it','',''];
$arrCOMPANY[104] = ['Gameshold','',''];
$arrCOMPANY[105] = ['Gaming Club','',''];
$arrCOMPANY[755] = ['Gazzabet','',''];
$arrCOMPANY[756] = ['GentingBet','',''];
$arrCOMPANY[397] = ['Germania Sport','',''];
$arrCOMPANY[522] = ['Getwin','马耳他',''];
$arrCOMPANY[652] = ['Giochiamo','',''];
$arrCOMPANY[332] = ['gioco digitale','',''];
$arrCOMPANY[364] = ['Giocodigitale','意大利',''];
$arrCOMPANY[505] = ['giocopiu','',''];
$arrCOMPANY[603] = ['GLB','',''];
$arrCOMPANY[106] = ['Global','',''];
$arrCOMPANY[107] = ['Global Sportsbet','澳大利亚',''];
$arrCOMPANY[108] = ['Globet','英国',''];
$arrCOMPANY[381] = ['Globetsport','',''];
$arrCOMPANY[623] = ['Gmatic','',''];
$arrCOMPANY[529] = ['Goalbet','',''];
$arrCOMPANY[431] = ['Goalwin','',''];
$arrCOMPANY[700] = ['Gobetgo','',''];
$arrCOMPANY[109] = ['GoldBet','奥地利',''];
$arrCOMPANY[643] = ['Goldenpark','',''];
$arrCOMPANY[327] = ['GoldVictory','',''];
$arrCOMPANY[385] = ['GoSportsbet','',''];
$arrCOMPANY[270] = ['Greekbet','',''];
$arrCOMPANY[605] = ['Grenada','',''];
$arrCOMPANY[110] = ['GS Network','',''];
$arrCOMPANY[687] = ['GSNetwork','',''];
$arrCOMPANY[483] = ['Guts','',''];
$arrCOMPANY[111] = ['GWbet','奥地利',''];
$arrCOMPANY[328] = ['HappyBet','',''];
$arrCOMPANY[601] = ['Hattrick','',''];
$arrCOMPANY[642] = ['HeavenBet','',''];
$arrCOMPANY[630] = ['Heritage Sports','',''];
$arrCOMPANY[112] = ['Hititbet','土耳其',''];
$arrCOMPANY[113] = ['HK Jockey Club','香港',''];
$arrCOMPANY[460] = ['HKJC Football','中国香港',''];
$arrCOMPANY[114] = ['Hollywood','美国',''];
$arrCOMPANY[425] = ['Hollywood Sportsbook','',''];
$arrCOMPANY[725] = ['HollywoodBets','',''];
$arrCOMPANY[606] = ['Hong Kong JC','',''];
$arrCOMPANY[115] = ['Hooball','',''];
$arrCOMPANY[439] = ['Hrvatska Lutrija','',''];
$arrCOMPANY[365] = ['IA Sports','',''];
$arrCOMPANY[672] = ['IACS','',''];
$arrCOMPANY[116] = ['IASbet.com','澳大利亚',''];
$arrCOMPANY[490] = ['IBCBET','哥斯达黎加',''];
$arrCOMPANY[401] = ['IBCbet.com','',''];
$arrCOMPANY[118] = ['Iceland','冰岛',''];
$arrCOMPANY[119] = ['Iconbet','',''];
$arrCOMPANY[393] = ['iddaa','',''];
$arrCOMPANY[461] = ['ifortuna.eu','',''];
$arrCOMPANY[530] = ['iFortuna.sk','加拿大',''];
$arrCOMPANY[710] = ['Instant Action Sports','',''];
$arrCOMPANY[624] = ['Inteltek','',''];
$arrCOMPANY[120] = ['Interaction','',''];
$arrCOMPANY[121] = ['Internet1x2','洪都拉斯',''];
$arrCOMPANY[122] = ['Intertops','西印度群岛',''];
$arrCOMPANY[123] = ['Interwetten','塞浦路斯',''];
$arrCOMPANY[640] = ['Interwetten.es','',''];
$arrCOMPANY[561] = ['Interwetten.it','意大利',''];
$arrCOMPANY[334] = ['Intralot','',''];
$arrCOMPANY[487] = ['Intralot Italia','',''];
$arrCOMPANY[560] = ['Intralot.it','意大利',''];
$arrCOMPANY[570] = ['isibet','',''];
$arrCOMPANY[470] = ['Island Casino','',''];
$arrCOMPANY[124] = ['Islenskar Getraunir','冰岛',''];
$arrCOMPANY[607] = ['ISN','',''];
$arrCOMPANY[563] = ['Iziplay','',''];
$arrCOMPANY[302] = ['Jaxx','',''];
$arrCOMPANY[299] = ['Jazz','',''];
$arrCOMPANY[345] = ['Jennings','',''];
$arrCOMPANY[465] = ['Jenningsbet','',''];
$arrCOMPANY[321] = ['Jetbull','',''];
$arrCOMPANY[705] = ['JoinBet','',''];
$arrCOMPANY[769] = ['Jojobet','',''];
$arrCOMPANY[125] = ['Jokerbets','奥地利',''];
$arrCOMPANY[126] = ['jp1388.com','',''];
$arrCOMPANY[575] = ['Just Bet','',''];
$arrCOMPANY[428] = ['JustBet','',''];
$arrCOMPANY[569] = ['Kajotbet','',''];
$arrCOMPANY[717] = ['Kashmobet','',''];
$arrCOMPANY[613] = ['Kogler','',''];
$arrCOMPANY[770] = ['Krooncasino','',''];
$arrCOMPANY[462] = ['Kursaal','',''];
$arrCOMPANY[446] = ['Kursaal Bookmaker','',''];
$arrCOMPANY[254] = ['Ladbrokes','英国',''];
$arrCOMPANY[415] = ['Ladbrokes.it','',''];
$arrCOMPANY[331] = ['Lasseters Sportbook','',''];
$arrCOMPANY[410] = ['Lavovi','',''];
$arrCOMPANY[662] = ['leaderbet','',''];
$arrCOMPANY[414] = ['Legends','',''];
$arrCOMPANY[448] = ['LegendzSports','',''];
$arrCOMPANY[743] = ['Leijonakasino','',''];
$arrCOMPANY[347] = ['LEON','',''];
$arrCOMPANY[127] = ['LevelBet','',''];
$arrCOMPANY[128] = ['LinesMaker','英国',''];
$arrCOMPANY[129] = ['Littlewoods','英国',''];
$arrCOMPANY[366] = ['Livebet','',''];
$arrCOMPANY[339] = ['Looselines','',''];
$arrCOMPANY[688] = ['Luckia.es','',''];
$arrCOMPANY[531] = ['Luckybet','',''];
$arrCOMPANY[777] = ['LUXBET','',''];
$arrCOMPANY[344] = ['LUXBET.com','',''];
$arrCOMPANY[737] = ['Macau Slot','',''];
$arrCOMPANY[250] = ['Macauslot','澳门',''];
$arrCOMPANY[517] = ['Marathon','',''];
$arrCOMPANY[532] = ['Marathonbet','',''];
$arrCOMPANY[628] = ['Martinique','',''];
$arrCOMPANY[335] = ['Match Point','',''];
$arrCOMPANY[132] = ['matchbook','',''];
$arrCOMPANY[278] = ['MatchMyWager','',''];
$arrCOMPANY[133] = ['Maxi-tip','捷克',''];
$arrCOMPANY[658] = ['MaxOdds','',''];
$arrCOMPANY[697] = ['Mcbookie','',''];
$arrCOMPANY[620] = ['MDJS','',''];
$arrCOMPANY[134] = ['Mediabet','德国',''];
$arrCOMPANY[279] = ['Megasportsworld','',''];
$arrCOMPANY[263] = ['MeridianBet','',''];
$arrCOMPANY[367] = ['Merkur win','',''];
$arrCOMPANY[676] = ['Merkur-win','意大利',''];
$arrCOMPANY[555] = ['Mermaidbet','',''];
$arrCOMPANY[135] = ['Milenium','波兰',''];
$arrCOMPANY[438] = ['Millebet.it','',''];
$arrCOMPANY[574] = ['Millenniumbet','',''];
$arrCOMPANY[336] = ['Miseojeu','',''];
$arrCOMPANY[476] = ['Misterbet','意大利',''];
$arrCOMPANY[346] = ['Mistertoto.it','',''];
$arrCOMPANY[689] = ['Mobibet','',''];
$arrCOMPANY[506] = ['mondialbetting','',''];
$arrCOMPANY[550] = ['Mooregames','',''];
$arrCOMPANY[310] = ['Mozzart','',''];
$arrCOMPANY[136] = ['MrBookmaker','马尔他',''];
$arrCOMPANY[137] = ['Multibet','澳大利亚',''];
$arrCOMPANY[477] = ['myBet','马耳他',''];
$arrCOMPANY[138] = ['myBet.com','',''];
$arrCOMPANY[657] = ['NetBet','',''];
$arrCOMPANY[694] = ['Netbet.fr','',''];
$arrCOMPANY[507] = ['NewGioco','',''];
$arrCOMPANY[590] = ['NGG','',''];
$arrCOMPANY[139] = ['Nike','爱尔兰',''];
$arrCOMPANY[374] = ['Nike.sk','',''];
$arrCOMPANY[567] = ['nikebet','',''];
$arrCOMPANY[354] = ['Nine.com','',''];
$arrCOMPANY[140] = ['nn-new.com','',''];
$arrCOMPANY[141] = ['Nordicbet','哥斯达黎加',''];
$arrCOMPANY[142] = ['Norsk tipting','挪威',''];
$arrCOMPANY[143] = ['Norway','挪威',''];
$arrCOMPANY[452] = ['novibet','',''];
$arrCOMPANY[376] = ['noxwin','',''];
$arrCOMPANY[144] = ['odds4you','直布罗陀',''];
$arrCOMPANY[315] = ['Oddscompany','',''];
$arrCOMPANY[614] = ['Oddsen','',''];
$arrCOMPANY[145] = ['Oddset','德国',''];
$arrCOMPANY[295] = ['Oddset.de','德国',''];
$arrCOMPANY[656] = ['OddsRing','',''];
$arrCOMPANY[611] = ['Offside','',''];
$arrCOMPANY[468] = ['Offsidebet','',''];
$arrCOMPANY[576] = ['Olimpkz','',''];
$arrCOMPANY[602] = ['Olympia Bet','',''];
$arrCOMPANY[146] = ['Olympic Sports','牙买加',''];
$arrCOMPANY[147] = ['OmniBet','',''];
$arrCOMPANY[591] = ['Optibet','',''];
$arrCOMPANY[779] = ['Otobet','',''];
$arrCOMPANY[592] = ['OverBet24','',''];
$arrCOMPANY[541] = ['Paddy Power','',''];
$arrCOMPANY[573] = ['Paddypower.it','意大利',''];
$arrCOMPANY[149] = ['PAF','',''];
$arrCOMPANY[637] = ['PAF.es','',''];
$arrCOMPANY[392] = ['Pamestihima','',''];
$arrCOMPANY[551] = ['Panbet','英国',''];
$arrCOMPANY[150] = ['Paradisebet','英国',''];
$arrCOMPANY[758] = ['Paradisewin','',''];
$arrCOMPANY[151] = ['Parbet','英国',''];
$arrCOMPANY[152] = ['Parier','',''];
$arrCOMPANY[371] = ['Parier.net','',''];
$arrCOMPANY[380] = ['PariMatch','',''];
$arrCOMPANY[469] = ['Parionsweb','',''];
$arrCOMPANY[593] = ['Parisport','',''];
$arrCOMPANY[417] = ['Partouche','',''];
$arrCOMPANY[325] = ['Partouche Betting','',''];
$arrCOMPANY[264] = ['PartyBets','',''];
$arrCOMPANY[539] = ['PartyBets.fr','',''];
$arrCOMPANY[771] = ['Partypoker','',''];
$arrCOMPANY[153] = ['PasarBola','美国',''];
$arrCOMPANY[294] = ['Petica Plus','',''];
$arrCOMPANY[293] = ['Pianeta Scommes','',''];
$arrCOMPANY[154] = ['Pianeta Scommesse','',''];
$arrCOMPANY[155] = ['Pinnacle Reduced','',''];
$arrCOMPANY[156] = ['Pinnacle Sports','荷兰',''];
$arrCOMPANY[686] = ['pinnbet','',''];
$arrCOMPANY[682] = ['PlanetWin365','',''];
$arrCOMPANY[655] = ['PlayAdjara','',''];
$arrCOMPANY[594] = ['Playbet','',''];
$arrCOMPANY[372] = ['Players Only','',''];
$arrCOMPANY[157] = ['Playit.com','英国',''];
$arrCOMPANY[474] = ['PMU','',''];
$arrCOMPANY[292] = ['Portlandbet','',''];
$arrCOMPANY[148] = ['Power','爱尔兰',''];
$arrCOMPANY[422] = ['power2bet','',''];
$arrCOMPANY[398] = ['Premier Kladion','克罗地亚',''];
$arrCOMPANY[402] = ['Premier Kladionica','',''];
$arrCOMPANY[158] = ['Premierbet','英国',''];
$arrCOMPANY[159] = ['Primebet','马尔他',''];
$arrCOMPANY[508] = ['PrinceBet','',''];
$arrCOMPANY[160] = ['Profesjonal','',''];
$arrCOMPANY[282] = ['Proline','',''];
$arrCOMPANY[772] = ['Propawin','',''];
$arrCOMPANY[595] = ['Public Bet','',''];
$arrCOMPANY[161] = ['PWsport','',''];
$arrCOMPANY[162] = ['Racebook','',''];
$arrCOMPANY[509] = ['RaceBook.com','',''];
$arrCOMPANY[359] = ['RacingOdds.com.au','',''];
$arrCOMPANY[738] = ['RB88','',''];
$arrCOMPANY[773] = ['Realdealbet','',''];
$arrCOMPANY[540] = ['Rebatewager','',''];
$arrCOMPANY[596] = ['Rebels','',''];
$arrCOMPANY[489] = ['Redbet','英国',''];
$arrCOMPANY[164] = ['Regency','',''];
$arrCOMPANY[622] = ['Remi','',''];
$arrCOMPANY[165] = ['Reno 2000','',''];
$arrCOMPANY[166] = ['Royal Sports','',''];
$arrCOMPANY[167] = ['s195','',''];
$arrCOMPANY[168] = ['S456','',''];
$arrCOMPANY[471] = ['SAjOO','',''];
$arrCOMPANY[488] = ['SAjOO.fr','',''];
$arrCOMPANY[406] = ['Samvo','',''];
$arrCOMPANY[759] = ['SamvoBetBroker','',''];
$arrCOMPANY[169] = ['Sazka','捷克',''];
$arrCOMPANY[625] = ['Sazkashop','',''];
$arrCOMPANY[170] = ['sb1888.com','',''];
$arrCOMPANY[281] = ['SBG Global','',''];
$arrCOMPANY[171] = ['sbo8.com','',''];
$arrCOMPANY[172] = ['sbobet','',''];
$arrCOMPANY[453] = ['sbobet.com','菲律宾',''];
$arrCOMPANY[173] = ['Scandic Bookmakers','英国',''];
$arrCOMPANY[174] = ['Schwechat','奥地利',''];
$arrCOMPANY[175] = ['ScommesseAndromeda','',''];
$arrCOMPANY[437] = ['Scommettendo','',''];
$arrCOMPANY[518] = ['Sean Graham','英国',''];
$arrCOMPANY[691] = ['Seanie Mac','',''];
$arrCOMPANY[176] = ['Set2Go','直布罗陀',''];
$arrCOMPANY[638] = ['Setantabet','',''];
$arrCOMPANY[177] = ['Simon Beasley','',''];
$arrCOMPANY[178] = ['Singapore Pools','新加坡',''];
$arrCOMPANY[714] = ['Singbet','',''];
$arrCOMPANY[179] = ['singbet3.com','',''];
$arrCOMPANY[660] = ['sirbobet','',''];
$arrCOMPANY[510] = ['Sisal','',''];
$arrCOMPANY[663] = ['sjbet','',''];
$arrCOMPANY[303] = ['SkandiaBet','',''];
$arrCOMPANY[559] = ['Skiller.it','意大利',''];
$arrCOMPANY[180] = ['skybet','英国',''];
$arrCOMPANY[341] = ['Skybook','',''];
$arrCOMPANY[181] = ['Skyline','',''];
$arrCOMPANY[562] = ['Smarkets','',''];
$arrCOMPANY[498] = ['Smartbet66.com','',''];
$arrCOMPANY[696] = ['SmartLiveSports','',''];
$arrCOMPANY[182] = ['SNAI','意大利',''];
$arrCOMPANY[183] = ['SportBet','',''];
$arrCOMPANY[184] = ['Sportfanatik','哥斯达黎加',''];
$arrCOMPANY[619] = ['Sportgewin','',''];
$arrCOMPANY[185] = ['Sporting','',''];
$arrCOMPANY[186] = ['Sporting Odds','英国',''];
$arrCOMPANY[251] = ['Sportingbet','',''];
$arrCOMPANY[408] = ['Sportingbet AU','',''];
$arrCOMPANY[187] = ['Sportingbet USA','哥斯达黎加',''];
$arrCOMPANY[307] = ['sportingbet.com.au','',''];
$arrCOMPANY[420] = ['Sportingbet.it','',''];
$arrCOMPANY[775] = ['Sportingbet.vu','',''];
$arrCOMPANY[721] = ['Sportium','',''];
$arrCOMPANY[188] = ['Sportna loterija','斯洛文尼亚',''];
$arrCOMPANY[189] = ['SportOdds','澳大利亚',''];
$arrCOMPANY[597] = ['Sportplus','',''];
$arrCOMPANY[306] = ['Sports Acumen','',''];
$arrCOMPANY[190] = ['Sports.com','',''];
$arrCOMPANY[399] = ['Sports-1','',''];
$arrCOMPANY[355] = ['sportsalive.com','',''];
$arrCOMPANY[191] = ['Sportsbet','澳大利亚',''];
$arrCOMPANY[421] = ['Sportsbet.com.au','',''];
$arrCOMPANY[192] = ['Sportsbetting','',''];
$arrCOMPANY[411] = ['sportsbetting.c','',''];
$arrCOMPANY[718] = ['Sportsbook.ag','',''];
$arrCOMPANY[193] = ['sportsbook.com','',''];
$arrCOMPANY[463] = ['SPORTSinteracti','',''];
$arrCOMPANY[194] = ['SPORTSinteraction','加拿大',''];
$arrCOMPANY[195] = ['SportsTAB','澳大利亚',''];
$arrCOMPANY[608] = ['Sporttery','',''];
$arrCOMPANY[615] = ['Sporttip','',''];
$arrCOMPANY[196] = ['Sportwetten Gera','',''];
$arrCOMPANY[674] = ['SportYes.it','',''];
$arrCOMPANY[693] = ['Spreadex','',''];
$arrCOMPANY[629] = ['SprotsTAB','',''];
$arrCOMPANY[197] = ['SSP','英国',''];
$arrCOMPANY[198] = ['Stan James','直布罗陀',''];
$arrCOMPANY[199] = ['Stanleybet','马耳他',''];
$arrCOMPANY[760] = ['Stanleybet.it','',''];
$arrCOMPANY[313] = ['Starbet','',''];
$arrCOMPANY[757] = ['Starbet.be','',''];
$arrCOMPANY[200] = ['StarPrice','奥地利',''];
$arrCOMPANY[701] = ['Starpricebet','',''];
$arrCOMPANY[568] = ['Starteambet','',''];
$arrCOMPANY[412] = ['Startip','',''];
$arrCOMPANY[201] = ['stepscommesse','',''];
$arrCOMPANY[499] = ['Stingbet','',''];
$arrCOMPANY[598] = ['Stoiximan','',''];
$arrCOMPANY[436] = ['Stravinci','',''];
$arrCOMPANY[202] = ['Strike','',''];
$arrCOMPANY[348] = ['Stryyke','',''];
$arrCOMPANY[203] = ['STS','波兰',''];
$arrCOMPANY[394] = ['Sunderbet','',''];
$arrCOMPANY[273] = ['Sunderlands','',''];
$arrCOMPANY[289] = ['Super268','',''];
$arrCOMPANY[368] = ['Superbet.it','',''];
$arrCOMPANY[204] = ['Superbook','',''];
$arrCOMPANY[711] = ['SuperLenny','',''];
$arrCOMPANY[616] = ['Supermatch','',''];
$arrCOMPANY[205] = ['SuperOdds','',''];
$arrCOMPANY[519] = ['SuperSoccer','英国',''];
$arrCOMPANY[454] = ['SuperSport','',''];
$arrCOMPANY[206] = ['Supporterbet','',''];
$arrCOMPANY[207] = ['Svenska Spel','',''];
$arrCOMPANY[208] = ['Swapbets','直布罗陀',''];
$arrCOMPANY[209] = ['Sweden','瑞典',''];
$arrCOMPANY[210] = ['Synot TIP','捷克',''];
$arrCOMPANY[400] = ['TAB Sportsbet','',''];
$arrCOMPANY[609] = ['Tabcorp','',''];
$arrCOMPANY[536] = ['Tattsbet','澳大利亚',''];
$arrCOMPANY[556] = ['Teambet','',''];
$arrCOMPANY[211] = ['Teletip','捷克',''];
$arrCOMPANY[520] = ['Tempobet','',''];
$arrCOMPANY[212] = ['Terno','斯洛伐克',''];
$arrCOMPANY[720] = ['The Greek','',''];
$arrCOMPANY[213] = ['theBet.cc','奥地利',''];
$arrCOMPANY[228] = ['TheBetArena','',''];
$arrCOMPANY[352] = ['TheGreek.com','',''];
$arrCOMPANY[214] = ['TIP','斯洛伐克',''];
$arrCOMPANY[291] = ['Tip Kurz','',''];
$arrCOMPANY[260] = ['Tipico','',''];
$arrCOMPANY[681] = ['tipico.it','',''];
$arrCOMPANY[215] = ['TipKurz','',''];
$arrCOMPANY[778] = ['Tiplix','',''];
$arrCOMPANY[444] = ['Tipos','',''];
$arrCOMPANY[533] = ['tipp3','',''];
$arrCOMPANY[216] = ['Tipsport','捷克',''];
$arrCOMPANY[455] = ['Tipsport.net','',''];
$arrCOMPANY[87] = ['Tipsport-Sk','斯洛伐克',''];
$arrCOMPANY[395] = ['Titanbet','',''];
$arrCOMPANY[217] = ['Toals','',''];
$arrCOMPANY[218] = ['ToBo','',''];
$arrCOMPANY[617] = ['Tomwaterhouse','',''];
$arrCOMPANY[552] = ['TonyBet','',''];
$arrCOMPANY[219] = ['topcil','',''];
$arrCOMPANY[612] = ['Topgoal','',''];
$arrCOMPANY[283] = ['TopSport','',''];
$arrCOMPANY[599] = ['TopSportWetten','',''];
$arrCOMPANY[220] = ['Totalbet','英国',''];
$arrCOMPANY[221] = ['Tote','',''];
$arrCOMPANY[290] = ['Tote betXpress','',''];
$arrCOMPANY[558] = ['totesport','',''];
$arrCOMPANY[223] = ['TOTO','荷兰',''];
$arrCOMPANY[224] = ['Toto2000','',''];
$arrCOMPANY[600] = ['Totolotek','',''];
$arrCOMPANY[225] = ['TotoMix','波兰',''];
$arrCOMPANY[226] = ['TotoSi','',''];
$arrCOMPANY[227] = ['Tradesports','爱尔兰',''];
$arrCOMPANY[274] = ['Triobet','',''];
$arrCOMPANY[229] = ['Tutovka','',''];
$arrCOMPANY[719] = ['UEDBET','',''];
$arrCOMPANY[230] = ['ukbetting','英国',''];
$arrCOMPANY[258] = ['Unibet','',''];
$arrCOMPANY[557] = ['Unibet.fr','',''];
$arrCOMPANY[435] = ['Unibet.it','',''];
$arrCOMPANY[464] = ['Unitab','',''];
$arrCOMPANY[618] = ['uwin.com','',''];
$arrCOMPANY[673] = ['VBet','',''];
$arrCOMPANY[256] = ['Vcbet','直布罗陀',''];
$arrCOMPANY[231] = ['Veikkaus','芬兰',''];
$arrCOMPANY[744] = ['Veikkaushuone','',''];
$arrCOMPANY[761] = ['Vernons','',''];
$arrCOMPANY[232] = ['VICBET','',''];
$arrCOMPANY[235] = ['Victor C','英国',''];
$arrCOMPANY[713] = ['Victor Chandler','',''];
$arrCOMPANY[565] = ['Victoriatip','',''];
$arrCOMPANY[233] = ['Victoria-Tip','',''];
$arrCOMPANY[234] = ['Victory','',''];
$arrCOMPANY[317] = ['Vierklee','',''];
$arrCOMPANY[572] = ['Vietbet','',''];
$arrCOMPANY[236] = ['VIP Sports','荷属安的列斯群岛',''];
$arrCOMPANY[762] = ['Vipstakes','',''];
$arrCOMPANY[776] = ['Vitalbet','',''];
$arrCOMPANY[537] = ['VivaroBet','',''];
$arrCOMPANY[554] = ['VoltBet','',''];
$arrCOMPANY[690] = ['Vwin','',''];
$arrCOMPANY[237] = ['WagerOnSports','',''];
$arrCOMPANY[340] = ['Wagerweb','',''];
$arrCOMPANY[238] = ['Wallstreet','',''];
$arrCOMPANY[239] = ['wb1388.com','',''];
$arrCOMPANY[390] = ['Wbexonline','',''];
$arrCOMPANY[280] = ['WBX','',''];
$arrCOMPANY[610] = ['Wettbuero','',''];
$arrCOMPANY[240] = ['wetten.de','德国',''];
$arrCOMPANY[241] = ['Wettpunkt','奥地利',''];
$arrCOMPANY[416] = ['wewbet','',''];
$arrCOMPANY[255] = ['William Hill','',''];
$arrCOMPANY[641] = ['William Hill.es','',''];
$arrCOMPANY[564] = ['William Hill.it','意大利',''];
$arrCOMPANY[242] = ['Wilson','',''];
$arrCOMPANY[704] = ['Wilsonbet','',''];
$arrCOMPANY[268] = ['win368','',''];
$arrCOMPANY[337] = ['win4real','',''];
$arrCOMPANY[243] = ['Winamax.com','',''];
$arrCOMPANY[763] = ['Winamax.fr','',''];
$arrCOMPANY[754] = ['WinlineBet','',''];
$arrCOMPANY[752] = ['Winmasters','',''];
$arrCOMPANY[665] = ['winner','',''];
$arrCOMPANY[244] = ['WINunited.com','马耳他',''];
$arrCOMPANY[245] = ['World Sports Exchange','美国',''];
$arrCOMPANY[246] = ['Worldbet','捷克',''];
$arrCOMPANY[319] = ['World-tip.com','',''];
$arrCOMPANY[247] = ['WSEX','安提瓜及巴布达',''];
$arrCOMPANY[248] = ['WWTS','澳大利亚',''];
$arrCOMPANY[745] = ['X-TiP','',''];
$arrCOMPANY[249] = ['Yabet','哥斯达黎加',''];
$arrCOMPANY[553] = ['YayBet','',''];
$arrCOMPANY[511] = ['Youbet','',''];
$arrCOMPANY[387] = ['YouWager','',''];
$arrCOMPANY[472] = ['youwin','',''];
$arrCOMPANY[404] = ['YSB 88','',''];
$arrCOMPANY[764] = ['Zebet.fr','',''];
$arrCOMPANY[369] = ['zedbet','',''];
// 亚指公司
$arrCOMPANY[3000271] = ['10Bet','','亚指公司'];
$arrCOMPANY[3000471] = ['12BET','','亚指公司'];
$arrCOMPANY[3000343] = ['188Bet','','亚指公司'];
$arrCOMPANY[3000181] = ['Bet365','','亚指公司'];
$arrCOMPANY[3000068] = ['Ladbrokes','','亚指公司'];
$arrCOMPANY[3000248] = ['Macauslot','','亚指公司'];
$arrCOMPANY[3000379] = ['Mansion88','','亚指公司'];
$arrCOMPANY[3000368] = ['SBOBET','','亚指公司'];
$arrCOMPANY[3000048] = ['Victor Chandler','','亚指公司'];
$arrCOMPANY[3000021] = ['William Hill','','亚指公司'];
$arrCOMPANY[3000390] = ['YSB 88','','亚指公司'];
$arrCOMPANY[400000] = ['S2','','亚指公司'];

// 从7m接口获取数据并写入本地数据库
$sql = "REPLACE INTO `ft_company` VALUES(?,?,?,?);";
if ($stmt = $mysqli->prepare($sql))
{
    foreach ($arrCOMPANY as $companyid => $company)
    {
        $stmt->bind_param('isss',
            $companyid, 					        // 公司编号
            $company[0], 					        // 公司名称
            $company[2], 				            // 所属区域
            $company[1] 			                // 所属国家
        );

        $stmt->execute();
    }

    $stmt->close();
}
else
{
    cron_log('初始化语句对象失败。', 2);
}

// 关闭mysql连接
$mysqli->close();