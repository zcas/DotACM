<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HerosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('heros')->insert([
            'name' => 'Ancient Apparition' ,
            'attribute' => 'INT' ,
            'port_url' => '/images/heros/aa.png',
            'ico' => '/images/minimap/aa_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Abaddon' ,
            'attribute' => 'STR' ,
            'port_url' => '/images/heros/aba.png',
            'ico' => '/images/minimap/aba_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Alchemist' ,
            'attribute' => 'STR' ,
            'port_url' => '/images/heros/alchemist.png',
            'ico' => '/images/minimap/alche_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Antimage' ,
            'attribute' => 'AGI' ,
            'port_url' => '/images/heros/antimage.png',
            'ico' => '/images/minimap/am_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Arc Warden' ,
            'attribute' => 'AGI' ,
            'port_url' => '/images/heros/arcwarden.png',
            'ico' => '/images/minimap/arcw_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Axe' ,
            'attribute' => 'STR' ,
            'port_url' => '/images/heros/axe.png',
            'ico' => '/images/minimap/axe_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Bane' ,
            'attribute' => 'INT' ,
            'port_url' => '/images/heros/bane.png',
            'ico' => '/images/minimap/bane_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Batrider' ,
            'attribute' => 'INT' ,
            'port_url' => '/images/heros/batrider.png',
            'ico' => '/images/minimap/batrider_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Beastmaster' ,
            'attribute' => 'STR' ,
            'port_url' => '/images/heros/beastmaster.png',
            'ico' => '/images/minimap/beastmaster_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Bloodseeker' ,
            'attribute' => 'AGI' ,
            'port_url' => '/images/heros/bloodseeker.png',
            'ico' => '/images/minimap/bloodseeker_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Bounty Hunter' ,
            'attribute' => 'AGI' ,
            'port_url' => '/images/heros/bountyhunter.png',
            'ico' => '/images/minimap/bh_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Brewmaster' ,
            'attribute' => 'STR' ,
            'port_url' => '/images/heros/brewmaster.png',
            'ico' => '/images/minimap/brew_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Bristleback' ,
            'attribute' => 'STR' ,
            'port_url' => '/images/heros/bristleback.png',
            'ico' => '/images/minimap/bb_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Broodmother' ,
            'attribute' => 'AGI' ,
            'port_url' => '/images/heros/brood.png',
            'ico' => '/images/minimap/brood_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Centaur Warrunner' ,
            'attribute' => 'STR' ,
            'port_url' => '/images/heros/centaur.png',
            'ico' => '/images/minimap/centa_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Chaos Knight' ,
            'attribute' => 'STR' ,
            'port_url' => '/images/heros/ck.png',
            'ico' => '/images/minimap/ck_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Chen' ,
            'attribute' => 'INT' ,
            'port_url' => '/images/heros/chen.png',
            'ico' => '/images/minimap/chen_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Clinkz' ,
            'attribute' => 'AGI' ,
            'port_url' => '/images/heros/clinkz.png',
            'ico' => '/images/minimap/clinkz_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Clockwerk' ,
            'attribute' => 'STR' ,
            'port_url' => '/images/heros/clockwerk.png',
            'ico' => '/images/minimap/clock_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Crystal Maiden' ,
            'attribute' => 'INT' ,
            'port_url' => '/images/heros/cm.png',
            'ico' => '/images/minimap/cm_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Dark Seer' ,
            'attribute' => 'INT' ,
            'port_url' => '/images/heros/darkseer.png',
            'ico' => '/images/minimap/ds_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Dark Willow' ,
            'attribute' => 'INT' ,
            'port_url' => '/images/heros/darkwillow.png',
            'ico' => '/images/minimap/dw_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Dazzle' ,
            'attribute' => 'INT' ,
            'port_url' => '/images/heros/dazzle.png',
            'ico' => '/images/minimap/dazzle_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Death Prophet' ,
            'attribute' => 'INT' ,
            'port_url' => '/images/heros/deathprophet.png',
            'ico' => '/images/minimap/dp_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Disruptor' ,
            'attribute' => 'INT' ,
            'port_url' => '/images/heros/disruptor.png',
            'ico' => '/images/minimap/disruptor_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Doom' ,
            'attribute' => 'STR' ,
            'port_url' => '/images/heros/doom.png',
            'ico' => '/images/minimap/doom_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Dragon Knight' ,
            'attribute' => 'STR' ,
            'port_url' => '/images/heros/dragonk.png',
            'ico' => '/images/minimap/dk_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Drow Ranger' ,
            'attribute' => 'AGI' ,
            'port_url' => '/images/heros/drow.png',
            'ico' => '/images/minimap/dr_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Earthshaker' ,
            'attribute' => 'STR' ,
            'port_url' => '/images/heros/earthshaker.png',
            'ico' => '/images/minimap/shaker_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Earth Spirit' ,
            'attribute' => 'STR' ,
            'port_url' => '/images/heros/earthspirit.png',
            'ico' => '/images/minimap/earthspirit_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Elder Titan' ,
            'attribute' => 'STR' ,
            'port_url' => '/images/heros/eldertitan.png',
            'ico' => '/images/minimap/et_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Ember Spirit' ,
            'attribute' => 'AGI' ,
            'port_url' => '/images/heros/emberspirit.png',
            'ico' => '/images/minimap/ember_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Enchantress' ,
            'attribute' => 'INT' ,
            'port_url' => '/images/heros/enchantress.png',
            'ico' => '/images/minimap/ench_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Enigma' ,
            'attribute' => 'INT' ,
            'port_url' => '/images/heros/enigma.png',
            'ico' => '/images/minimap/enigma_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Faceless Void' ,
            'attribute' => 'AGI' ,
            'port_url' => '/images/heros/void.png',
            'ico' => '/images/minimap/faceless_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Grimstroke' ,
            'attribute' => 'INT' ,
            'port_url' => '/images/heros/grimstroke.png',
            'ico' => '/images/minimap/grim_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Gyrocopter' ,
            'attribute' => 'AGI' ,
            'port_url' => '/images/heros/gyro.png',
            'ico' => '/images/minimap/gyro_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Huskar' ,
            'attribute' => 'STR' ,
            'port_url' => '/images/heros/huskar.png',
            'ico' => '/images/minimap/huskar_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Invoker' ,
            'attribute' => 'INT' ,
            'port_url' => '/images/heros/invoker.png',
            'ico' => '/images/minimap/invo_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Io' ,
            'attribute' => 'STR' ,
            'port_url' => '/images/heros/wisp.png',
            'ico' => '/images/minimap/io_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Jakiro' ,
            'attribute' => 'INT' ,
            'port_url' => '/images/heros/jakiro.png',
            'ico' => '/images/minimap/jakiro_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Juggernaut' ,
            'attribute' => 'AGI' ,
            'port_url' => '/images/heros/juggernaut.png',
            'ico' => '/images/minimap/jugg_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Keeper of the Light' ,
            'attribute' => 'INT' ,
            'port_url' => '/images/heros/kotl.png',
            'ico' => '/images/minimap/kotl_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Kunkka' ,
            'attribute' => 'STR' ,
            'port_url' => '/images/heros/kunkka.png',
            'ico' => '/images/minimap/kunkka_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Legion Commander' ,
            'attribute' => 'STR' ,
            'port_url' => '/images/heros/lc.png',
            'ico' => '/images/minimap/lc_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Leshrac' ,
            'attribute' => 'INT' ,
            'port_url' => '/images/heros/leshrac.png',
            'ico' => '/images/minimap/lesh_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Lich' ,
            'attribute' => 'INT' ,
            'port_url' => '/images/heros/lich.png',
            'ico' => '/images/minimap/lich_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Lifestealer' ,
            'attribute' => 'STR' ,
            'port_url' => '/images/heros/naix.png',
            'ico' => '/images/minimap/naix_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Lina' ,
            'attribute' => 'INT' ,
            'port_url' => '/images/heros/lina.png',
            'ico' => '/images/minimap/lina_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Lion' ,
            'attribute' => 'INT' ,
            'port_url' => '/images/heros/lion.png',
            'ico' => '/images/minimap/lion_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Lone Druid' ,
            'attribute' => 'AGI' ,
            'port_url' => '/images/heros/lonedruid.png',
            'ico' => '/images/minimap/lone_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Luna' ,
            'attribute' => 'AGI' ,
            'port_url' => '/images/heros/luna.png',
            'ico' => '/images/minimap/luna_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Lycan' ,
            'attribute' => 'STR' ,
            'port_url' => '/images/heros/lycan.png',
            'ico' => '/images/minimap/lycan_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Magnus' ,
            'attribute' => 'STR' ,
            'port_url' => '/images/heros/magnus.png',
            'ico' => '/images/minimap/magnus_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Mars' ,
            'attribute' => 'STR' ,
            'port_url' => '/images/heros/mars.png',
            'ico' => '/images/minimap/mars_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Medusa' ,
            'attribute' => 'AGI' ,
            'port_url' => '/images/heros/medusa.png',
            'ico' => '/images/minimap/medu_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Meepo' ,
            'attribute' => 'AGI' ,
            'port_url' => '/images/heros/meepo.png',
            'ico' => '/images/minimap/meepo_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Mirana' ,
            'attribute' => 'AGI' ,
            'port_url' => '/images/heros/mirana.png',
            'ico' => '/images/minimap/mirana_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Monkey King' ,
            'attribute' => 'AGI' ,
            'port_url' => '/images/heros/monkeyking.png',
            'ico' => '/images/minimap/mk_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Morphling' ,
            'attribute' => 'AGI' ,
            'port_url' => '/images/heros/morp.png',
            'ico' => '/images/minimap/morp_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Naga Siren' ,
            'attribute' => 'AGI' ,
            'port_url' => '/images/heros/nagasiren.png',
            'ico' => '/images/minimap/naga_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Nature\'s Propehet' ,
            'attribute' => 'INT' ,
            'port_url' => '/images/heros/natureprophet.png',
            'ico' => '/images/minimap/np_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Necrophos' ,
            'attribute' => 'INT' ,
            'port_url' => '/images/heros/necrophos.png',
            'ico' => '/images/minimap/necro_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Night Stalker' ,
            'attribute' => 'STR' ,
            'port_url' => '/images/heros/nightstalker.png',
            'ico' => '/images/minimap/ns_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Nyx Assassin' ,
            'attribute' => 'AGI' ,
            'port_url' => '/images/heros/nyx.png',
            'ico' => '/images/minimap/nyx_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Ogre Magi' ,
            'attribute' => 'INT' ,
            'port_url' => '/images/heros/ogremagi.png',
            'ico' => '/images/minimap/ogre_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Omniknight' ,
            'attribute' => 'STR' ,
            'port_url' => '/images/heros/omniknight.png',
            'ico' => '/images/minimap/omni_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Oracle' ,
            'attribute' => 'INT' ,
            'port_url' => '/images/heros/oracle.png',
            'ico' => '/images/minimap/oracle_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Outworld Devourer' ,
            'attribute' => 'INT' ,
            'port_url' => '/images/heros/od.png',
            'ico' => '/images/minimap/od_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Pangolier' ,
            'attribute' => 'AGI' ,
            'port_url' => '/images/heros/pangolier.png',
            'ico' => '/images/minimap/pango_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Phantom Assassin' ,
            'attribute' => 'AGI' ,
            'port_url' => '/images/heros/pa.png',
            'ico' => '/images/minimap/pa_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Phantom Lancer' ,
            'attribute' => 'AGI' ,
            'port_url' => '/images/heros/pl.png',
            'ico' => '/images/minimap/pl_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Phoenix' ,
            'attribute' => 'STR' ,
            'port_url' => '/images/heros/phoenix.png',
            'ico' => '/images/minimap/feni_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Puck' ,
            'attribute' => 'INT' ,
            'port_url' => '/images/heros/puck.png',
            'ico' => '/images/minimap/puck_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Pudge' ,
            'attribute' => 'STR' ,
            'port_url' => '/images/heros/pudge.png',
            'ico' => '/images/minimap/pudge_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Pugna' ,
            'attribute' => 'INT' ,
            'port_url' => '/images/heros/pugna.png',
            'ico' => '/images/minimap/pugna_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Queen of Pain' ,
            'attribute' => 'INT' ,
            'port_url' => '/images/heros/qop.png',
            'ico' => '/images/minimap/qop_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Razor' ,
            'attribute' => 'AGI' ,
            'port_url' => '/images/heros/razor.png',
            'ico' => '/images/minimap/razor_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Riki' ,
            'attribute' => 'AGI' ,
            'port_url' => '/images/heros/riki.png',
            'ico' => '/images/minimap/riki_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Rubick' ,
            'attribute' => 'INT' ,
            'port_url' => '/images/heros/rubick.png',
            'ico' => '/images/minimap/rubick_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Sand King' ,
            'attribute' => 'STR' ,
            'port_url' => '/images/heros/sandking.png',
            'ico' => '/images/minimap/sk_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Shadow Demon' ,
            'attribute' => 'INT' ,
            'port_url' => '/images/heros/shadowdemon.png',
            'ico' => '/images/minimap/sd_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Shadow Fiend' ,
            'attribute' => 'AGI' ,
            'port_url' => '/images/heros/shadowfiend.png',
            'ico' => '/images/minimap/sf_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Shadow Shaman' ,
            'attribute' => 'INT' ,
            'port_url' => '/images/heros/shadowshaman.png',
            'ico' => '/images/minimap/ss_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Silencer' ,
            'attribute' => 'INT' ,
            'port_url' => '/images/heros/silencer.png',
            'ico' => '/images/minimap/silencer_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Skywrath Mage' ,
            'attribute' => 'INT' ,
            'port_url' => '/images/heros/skymage.png',
            'ico' => '/images/minimap/sky_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Slardar' ,
            'attribute' => 'STR' ,
            'port_url' => '/images/heros/slardar.png',
            'ico' => '/images/minimap/slardar_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Slark' ,
            'attribute' => 'AGI' ,
            'port_url' => '/images/heros/slark.png',
            'ico' => '/images/minimap/slark_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Snapfire' ,
            'attribute' => 'STR' ,
            'port_url' => '/images/heros/snapfire.png',
            'ico' => '/images/minimap/snap_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Sniper' ,
            'attribute' => 'AGI' ,
            'port_url' => '/images/heros/sniper.png',
            'ico' => '/images/minimap/sniper_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Spectre' ,
            'attribute' => 'AGI' ,
            'port_url' => '/images/heros/spectre.png',
            'ico' => '/images/minimap/spectre_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Spirit Breaker' ,
            'attribute' => 'STR' ,
            'port_url' => '/images/heros/spiritbreaker.png',
            'ico' => '/images/minimap/breaker_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Storm Spirit' ,
            'attribute' => 'INT' ,
            'port_url' => '/images/heros/stormspirit.png',
            'ico' => '/images/minimap/storm_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Sven' ,
            'attribute' => 'STR' ,
            'port_url' => '/images/heros/sven.png',
            'ico' => '/images/minimap/sven_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Techies' ,
            'attribute' => 'INT' ,
            'port_url' => '/images/heros/techies.png',
            'ico' => '/images/minimap/tech_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Templar Assassin' ,
            'attribute' => 'AGI' ,
            'port_url' => '/images/heros/ta.png',
            'ico' => '/images/minimap/ta_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Terrorblade' ,
            'attribute' => 'AGI' ,
            'port_url' => '/images/heros/terrorblade.png',
            'ico' => '/images/minimap/tb_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Tidehunter' ,
            'attribute' => 'STR' ,
            'port_url' => '/images/heros/tidehunter.png',
            'ico' => '/images/minimap/thunter_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Timbersaw' ,
            'attribute' => 'STR' ,
            'port_url' => '/images/heros/timbersaw.png',
            'ico' => '/images/minimap/timber_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Tinker' ,
            'attribute' => 'INT' ,
            'port_url' => '/images/heros/tinker.png',
            'ico' => '/images/minimap/tinker_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Tiny' ,
            'attribute' => 'STR' ,
            'port_url' => '/images/heros/tiny.png',
            'ico' => '/images/minimap/tiny_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Treant Protector' ,
            'attribute' => 'STR' ,
            'port_url' => '/images/heros/treant.png',
            'ico' => '/images/minimap/treant_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Troll Warlord' ,
            'attribute' => 'AGI' ,
            'port_url' => '/images/heros/trollwarlord.png',
            'ico' => '/images/minimap/troll_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Tusk' ,
            'attribute' => 'STR' ,
            'port_url' => '/images/heros/tusk.png',
            'ico' => '/images/minimap/tusk_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Underlord' ,
            'attribute' => 'STR' ,
            'port_url' => '/images/heros/underlord.png',
            'ico' => '/images/minimap/under_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Undying' ,
            'attribute' => 'STR' ,
            'port_url' => '/images/heros/undy.png',
            'ico' => '/images/minimap/undy_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Ursa' ,
            'attribute' => 'AGI' ,
            'port_url' => '/images/heros/ursa.png',
            'ico' => '/images/minimap/ursa_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Vengeful Spirit' ,
            'attribute' => 'AGI' ,
            'port_url' => '/images/heros/vengefulspirit.png',
            'ico' => '/images/minimap/vspirit_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Venomancer' ,
            'attribute' => 'AGI' ,
            'port_url' => '/images/heros/venomancer.png',
            'ico' => '/images/minimap/venom_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Viper' ,
            'attribute' => 'AGI' ,
            'port_url' => '/images/heros/viper.png',
            'ico' => '/images/minimap/viper_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Visage' ,
            'attribute' => 'INT' ,
            'port_url' => '/images/heros/visage.png',
            'ico' => '/images/minimap/visage_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Void Spirit' ,
            'attribute' => 'INT' ,
            'port_url' => '/images/heros/voidspirit.png',
            'ico' => '/images/minimap/voids_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Warlock' ,
            'attribute' => 'INT' ,
            'port_url' => '/images/heros/warlock.png',
            'ico' => '/images/minimap/warlock_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Weaver' ,
            'attribute' => 'AGI' ,
            'port_url' => '/images/heros/weaver.png',
            'ico' => '/images/minimap/weaver_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Windranger' ,
            'attribute' => 'INT' ,
            'port_url' => '/images/heros/windranger.png',
            'ico' => '/images/minimap/wind_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Winter Wyvern' ,
            'attribute' => 'INT' ,
            'port_url' => '/images/heros/winterwyvern.png',
            'ico' => '/images/minimap/winter_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Witch Doctor' ,
            'attribute' => 'INT' ,
            'port_url' => '/images/heros/witchdoctor.png',
            'ico' => '/images/minimap/wd_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Wraith King' ,
            'attribute' => 'STR' ,
            'port_url' => '/images/heros/wk.png',
            'ico' => '/images/minimap/wk_ico.png'
        ]);
        DB::table('heros')->insert([
            'name' => 'Zeus' ,
            'attribute' => 'INT' ,
            'port_url' => '/images/heros/zeus.png',
            'ico' => '/images/minimap/zeus_ico.png'
        ]);
    }
}
