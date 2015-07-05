<?php

    use Doctrine\Common\DataFixtures\FixtureInterface;
    use Doctrine\Common\Persistence\ObjectManager;
    use SoundboardBundle\Entity\Category;
    use SoundboardBundle\Entity\Soundclip;

    class LoadUserData implements FixtureInterface
    {

        /**
         * Load data fixtures with the passed EntityManager
         *
         * @param ObjectManager $manager
         */
        public function load( ObjectManager $manager )
        {
            $this->loadCategories( $manager );
            $manager->flush();
            $this->loadDefaultSoundClips( $manager );
            $manager->flush();
        }

        private function loadCategories( ObjectManager $manager )
        {
            $cat = new Category();
            $cat->setName( "Sterling" );
            $manager->persist( $cat );

            $cat = new Category();
            $cat->setName( "Holmes" );
            $manager->persist( $cat );

            $cat = new Category();
            $cat->setName( "Zimmerman" );
            $manager->persist( $cat );

            $cat = new Category();
            $cat->setName( "Other" );
            $manager->persist( $cat );
        }

        private function loadDefaultSoundClips( ObjectManager $manager )
        {
            $sterling_id = $manager->getRepository( "SoundboardBundle:Category" )->findOneBy( [ "name" => "Sterling" ] );
            $holmes_id   = $manager->getRepository( "SoundboardBundle:Category" )->findOneBy( [ "name" => "Holmes" ] );
            $zim_id      = $manager->getRepository( "SoundboardBundle:Category" )->findOneBy( [ "name" => "Zimmerman" ] );
            $other_id    = $manager->getRepository( "SoundboardBundle:Category" )->findOneBy( [ "name" => "Other" ] );

            $this->createClip( $manager, $holmes_id, "Ugh, gross", "Ugh, gross", "holmes_266_ughgross.ogg" );
            $this->createClip( $manager, $holmes_id, "All shit and AIDS", "Shit'n'AIDS", "holmes_allshitandaids.ogg" );
            $this->createClip( $manager, $holmes_id, "My ass is NOT okay...", "Ass not okay", "holmes_assisnotok.ogg" );
            $this->createClip( $manager, $holmes_id, "Bicycle butt", "Bicycle", "holmes_buttdie.ogg" );
            $this->createClip( $manager, $holmes_id, "Do whatever you want", "Do whatever", "holmes_dowhateveryouwant.ogg" );
            $this->createClip( $manager, $holmes_id, "Yeah!", "Yeah!", "holmes_excitedyeah.ogg" );
            $this->createClip( $manager, $holmes_id, "Hey guys, got any chips?", "Got any chips?", "holmes_heyguyschips.ogg" );
            $this->createClip( $manager, $holmes_id, "Not that special", "Not special", "holmes_notthatspecial.ogg" );
            $this->createClip( $manager, $holmes_id, "When a nude man...", "Nude man...", "holmes_nudeman.ogg" );
            $this->createClip( $manager, $holmes_id, "Owls are hot", "Owls hot", "holmes_owlsarehot.ogg" );
            $this->createClip( $manager, $holmes_id, "Pretty big butthole", "Big hole", "holmes_prettybigforabutthole.ogg" );
            $this->createClip( $manager, $holmes_id, "Remember skeleton dick?", "Remember skeleton", "holmes_rememberskeletondick.ogg" );
            $this->createClip( $manager, $holmes_id, "Safe space", "Safe space", "holmes_safespace.ogg" );
            $this->createClip( $manager, $holmes_id, "Sexy noises", "Sexy noises", "holmes_sexynoises.ogg" );
            $this->createClip( $manager, $holmes_id, "So funny", "So funny", "holmes_sofunnysofunny.ogg" );
            $this->createClip( $manager, $holmes_id, "So much older", "So much older", "holmes_somucholder.ogg" );
            $this->createClip( $manager, $holmes_id, "We like you", "We like you", "holmes_welikeyou.ogg" );
            $this->createClip( $manager, $holmes_id, "What?", "What?", "holmes_what.ogg" );
            $this->createClip( $manager, $holmes_id, "Every time I say Wii", "Every time Wii", "holmes_wii.ogg" );

            $this->createClip( $manager, $other_id, "Group agreement", "Agreement", "other_agreement.ogg" );
            $this->createClip( $manager, $other_id, "Hedgehog Croquet", "Hedgehog", "other_hedgehog.ogg" );
            $this->createClip( $manager, $other_id, "Little white tail", "White tail", "other_littlewhitetail.ogg" );
            $this->createClip( $manager, $other_id, "Fetch me my lust gurney!", "Lust Gurney", "other_lustgurney.ogg" );
            $this->createClip( $manager, $other_id, "Owls are fuckers", "Owls", "other_owlsarefuckers.ogg" );
            $this->createClip( $manager, $other_id, "Theme 1-Reptile (Skrillex)", "Theme-Reptile", "other_theme_1.ogg" );
            $this->createClip( $manager, $other_id, "Theme 2-Main Theme (Metal Arms)", "Theme-Metal Arms", "other_theme_2.ogg" );
            $this->createClip( $manager, $other_id, "Theme 3-Zed Boss Battle (Lollipop Chainsaw)", "Theme-Zed", "other_theme_3.ogg" );
            $this->createClip( $manager, $other_id, "Theme 4-Rave On (Killer 7)", "Theme-Rave On", "other_theme_4.ogg" );
            $this->createClip( $manager, $other_id, "72", "YYY", "other_theme_6.ogg" );
            $this->createClip( $manager, $other_id, "71", "YYY", "other_trent_skyrim.ogg" );
            $this->createClip( $manager, $other_id, "70", "YYY", "other_womenwithwheels.ogg" );

            $this->createClip( $manager, $sterling_id, "0", "YYY", "sterling_266_comeon.ogg" );
            $this->createClip( $manager, $sterling_id, "1", "YYY", "sterling_266_doubleerections.ogg" );
            $this->createClip( $manager, $sterling_id, "2", "YYY", "sterling_266_hotbod.ogg" );
            $this->createClip( $manager, $sterling_id, "3", "YYY", "sterling_animalabuse.ogg" );
            $this->createClip( $manager, $sterling_id, "4", "YYY", "sterling_burningcat.ogg" );
            $this->createClip( $manager, $sterling_id, "5", "YYY", "sterling_burymeinthesand.ogg" );
            $this->createClip( $manager, $sterling_id, "6", "YYY", "sterling_cantassume.ogg" );
            $this->createClip( $manager, $sterling_id, "7", "YYY", "sterling_celebicon.ogg" );
            $this->createClip( $manager, $sterling_id, "8", "YYY", "sterling_dafoe_democrat.ogg" );
            $this->createClip( $manager, $sterling_id, "9", "YYY", "sterling_dafoe_farmeranimals.ogg" );
            $this->createClip( $manager, $sterling_id, "10", "YYY", "sterling_dafoe_hellosun.ogg" );
            $this->createClip( $manager, $sterling_id, "11", "YYY", "sterling_dafoe_heykids_alternate.ogg" );
            $this->createClip( $manager, $sterling_id, "12", "YYY", "sterling_dafoe_heykids.ogg" );
            $this->createClip( $manager, $sterling_id, "13", "YYY", "sterling_dafoe_heykids_short.ogg" );
            $this->createClip( $manager, $sterling_id, "14", "YYY", "sterling_dafoe_horsenamedkeanu.ogg" );
            $this->createClip( $manager, $sterling_id, "15", "YYY", "sterling_dafoe_justtobesure.ogg" );
            $this->createClip( $manager, $sterling_id, "16", "YYY", "sterling_dafoe_skullfuck.ogg" );
            $this->createClip( $manager, $sterling_id, "17", "YYY", "sterling_dafoe_whitegold.ogg" );
            $this->createClip( $manager, $sterling_id, "18", "YYY", "sterling_dafoe_yeehaw.ogg" );
            $this->createClip( $manager, $sterling_id, "19", "YYY", "sterling_disneyshead.ogg" );
            $this->createClip( $manager, $sterling_id, "20", "YYY", "sterling_dogpiss.ogg" );
            $this->createClip( $manager, $sterling_id, "21", "YYY", "sterling_drinktheshit.ogg" );
            $this->createClip( $manager, $sterling_id, "22", "YYY", "sterling_ducktales_erection.ogg" );
            $this->createClip( $manager, $sterling_id, "23", "YYY", "sterling_exactly.ogg" );
            $this->createClip( $manager, $sterling_id, "24", "YYY", "sterling_fabrige_eggs.ogg" );
            $this->createClip( $manager, $sterling_id, "25", "YYY", "sterling_fattyboomboom.ogg" );
            $this->createClip( $manager, $sterling_id, "26", "YYY", "sterling_fight.ogg" );
            $this->createClip( $manager, $sterling_id, "27", "YYY", "sterling_fuckssake.ogg" );
            $this->createClip( $manager, $sterling_id, "28", "YYY", "sterling_generalvicinity.ogg" );
            $this->createClip( $manager, $sterling_id, "29", "YYY", "sterling_giveashit.ogg" );
            $this->createClip( $manager, $sterling_id, "30", "YYY", "sterling_goddamnitparker.ogg" );
            $this->createClip( $manager, $sterling_id, "31", "YYY", "sterling_halflistening.ogg" );
            $this->createClip( $manager, $sterling_id, "32", "YYY", "sterling_havago.ogg" );
            $this->createClip( $manager, $sterling_id, "33", "YYY", "sterling_haventbeenbitten.ogg" );
            $this->createClip( $manager, $sterling_id, "34", "YYY", "sterling_hormones.ogg" );
            $this->createClip( $manager, $sterling_id, "35", "YYY", "sterling_inthemood.ogg" );
            $this->createClip( $manager, $sterling_id, "36", "YYY", "sterling_jameson_ex.ogg" );
            $this->createClip( $manager, $sterling_id, "37", "YYY", "sterling_jameson.ogg" );
            $this->createClip( $manager, $sterling_id, "38", "YYY", "sterling_laugh1.ogg" );
            $this->createClip( $manager, $sterling_id, "39", "YYY", "sterling_law_of_averages.ogg" );
            $this->createClip( $manager, $sterling_id, "40", "YYY", "sterling_lazyfatcunt.ogg" );
            $this->createClip( $manager, $sterling_id, "41", "YYY", "sterling_letdown.ogg" );
            $this->createClip( $manager, $sterling_id, "42", "YYY", "sterling_lifeleavemybody.ogg" );
            $this->createClip( $manager, $sterling_id, "43", "YYY", "sterling_massiveblackdildo.ogg" );
            $this->createClip( $manager, $sterling_id, "44", "YYY", "sterling_mindmeld.ogg" );
            $this->createClip( $manager, $sterling_id, "45", "YYY", "sterling_nogoodpieceofshit.ogg" );
            $this->createClip( $manager, $sterling_id, "46", "YYY", "sterling_painus.ogg" );
            $this->createClip( $manager, $sterling_id, "47", "YYY", "sterling_philcollins2.ogg" );
            $this->createClip( $manager, $sterling_id, "48", "YYY", "sterling_philcollins.ogg" );
            $this->createClip( $manager, $sterling_id, "49", "YYY", "sterling_podtoiddrinkinggame.ogg" );
            $this->createClip( $manager, $sterling_id, "50", "YYY", "sterling_podtoidlisteners.ogg" );
            $this->createClip( $manager, $sterling_id, "51", "YYY", "sterling_preposterous_videogame.ogg" );
            $this->createClip( $manager, $sterling_id, "52", "YYY", "sterling_profuseapologies.ogg" );
            $this->createClip( $manager, $sterling_id, "53", "YYY", "sterling_right.ogg" );
            $this->createClip( $manager, $sterling_id, "54", "YYY", "sterling_scream.ogg" );
            $this->createClip( $manager, $sterling_id, "55", "YYY", "sterling_sheepheadlock.ogg" );
            $this->createClip( $manager, $sterling_id, "56", "YYY", "sterling_slapahorse.ogg" );
            $this->createClip( $manager, $sterling_id, "57", "YYY", "sterling_song1.ogg" );
            $this->createClip( $manager, $sterling_id, "58", "YYY", "sterling_song2_killtheworld.ogg" );
            $this->createClip( $manager, $sterling_id, "59", "YYY", "sterling_song_hibbehdibbehdah.ogg" );
            $this->createClip( $manager, $sterling_id, "60", "YYY", "sterling_suckadickatxmas.ogg" );
            $this->createClip( $manager, $sterling_id, "61", "YYY", "sterling_suckaduckboner.ogg" );
            $this->createClip( $manager, $sterling_id, "62", "YYY", "sterling_suckvideogames.ogg" );
            $this->createClip( $manager, $sterling_id, "63", "YYY", "sterling_whyholmesspiderman.ogg" );
            $this->createClip( $manager, $sterling_id, "64", "YYY", "sterling_yeeaaah.ogg" );

            $this->createClip( $manager, $zim_id, "65", "YYY", "zim_266_swollenmember.ogg" );
            $this->createClip( $manager, $zim_id, "All fours", "All fours", "zim_allfours.ogg" );
            $this->createClip( $manager, $zim_id, "...bitten by every spider we can find?", "...bitten", "zim_areyousuggestingbitten.ogg" );
            $this->createClip( $manager, $zim_id, "66", "YYY", "zim_rebelteen.ogg" );
            $this->createClip( $manager, $zim_id, "Like a Russian sub", "Russian sub", "zim_russiansub.ogg" );
        }

        function createClip( ObjectManager $manager, $category, $title, $short_title, $filename )
        {
            $clip = new Soundclip();
            $clip->setTitle( $title );
            $clip->setShortTitle( $short_title );
            $clip->setPath( $filename );
            $cat = new Category();
            $clip->setCategory( $category );
            $manager->persist( $clip );
        }
    }